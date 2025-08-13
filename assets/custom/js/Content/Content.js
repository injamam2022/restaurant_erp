var base_url = $("#base_url").val();
var file_url = $("#file_url").val();

var GlobId="";


function clrmsg()
{
    $("#role_name-error").html('');
    $("#edit_role_name-error").html('');
    $("#addmsg").html('');
    $("#editmsg").html('');
    
}

function addcontent()
{
    clrmsg();
    var section = $("#section").val();
//    var page = $("#page").val();
    var header = $("#header").val();
    var content = CKEDITOR.instances['content'].getData();
    var extra_content = CKEDITOR.instances['extra_content'].getData();
    var video = $("#video").val();
    var image = $("#image").prop('files')[0];
   /* var academicimage = $("#academicimage").prop('files')[0];*/
    
   /* alert(content);
    return false();*/

    
    
  if(section=="")
    {
        $("#section").attr('placeholder','Required');
        $("#section").focus();
        return false;
    } 
    
   /* if(page=="")
    {
        $("#page").attr('placeholder','Required');
        $("#page").focus();
        return false;
    }  */
    
    if(header=="")
    {
        $("#header").attr('placeholder','Required');
        $("#header").focus();
        return false;
    }  
    
    if(content=="")
    {
        $("#content").attr('placeholder','Required');
        $("#content").focus();
        return false;
    } 
    
    
  
    
    var form_data = new FormData();
    form_data.append("section", section)
   // form_data.append("page", page)
    form_data.append("header", header)
    form_data.append("content", content)
    form_data.append("extra_content", extra_content)
    form_data.append("video", video)
    form_data.append("image", image)
   /* form_data.append("academicimage", academicimage)*/

    $.ajax({
            type: "POST",
            url: base_url + "ContentManagement/ContentAdd",
            data: form_data,
            contentType: false,
            processData: false,
            type: 'POST',
        beforeSend : function (){
               $("#addbutton").prop('disabled', true);
               $("#addbuttonmsg").html("Uploading Data Please Wait");
            },
            success: function(response) {
//                console.log(response); return;
                var res = JSON.parse(response);
                if(res.stat == 200){
                    $("#addmsg").html(res.msg);
                        
                        window.location.href=base_url+'ContentManagement';
                   
                    
                }else{
//                    alert(res.msg);
                    $("#addmsg").html(res.msg);
                }
            },
            error: function(response) {
                console.log(response);
            }
    });
    
}
function editcontent()
{
    clrmsg();
    var section = $("#section").val();
    var page = $("#page").val();
    var header = $("#header").val();
    var content = CKEDITOR.instances['content'].getData();
    var extra_content = CKEDITOR.instances['extra_content'].getData();
    var video = $("#video").val();
    var image = $("#image").prop('files')[0];
  /*  var academicimage = $("#academicimage").prop('files')[0];*/
    var previousimage = $("#previousimage").val();
   /* var previousimageacademicimage = $("#previousimageacademicimage").val();*/
    var content_id = $("#content_id").val();
    
    
    if(section=="")
    {
        $("#section").attr('placeholder','Required');
        $("#section").focus();
        return false;
    } 
    
    if(page=="")
    {
        $("#page").attr('placeholder','Required');
        $("#page").focus();
        return false;
    }  
    
    if(header=="")
    {
        $("#header").attr('placeholder','Required');
        $("#header").focus();
        return false;
    }  
    
    if(content=="")
    {
        $("#content").attr('placeholder','Required');
        $("#content").focus();
        return false;
    } 
   
    

    
  
    
    var form_data=new FormData;
    form_data.append("section", section)
    //form_data.append("page", page)
    form_data.append("header", header)
    form_data.append("content", content)
    form_data.append("extra_content", extra_content)
    form_data.append("video", video)
    form_data.append("image", image)
   /* form_data.append("academicimage", academicimage)*/
    form_data.append("previousimage", previousimage)
  /*  form_data.append("previousimageacademicimage", previousimageacademicimage)*/
    form_data.append("content_id", content_id)
     

    $.ajax({
            type: "POST",
            url: base_url + "ContentManagement/ContentEdit",
            data: form_data,
            contentType: false,
            processData: false,
            type: 'POST',
         beforeSend : function (){
               $("#editbutton").prop('disabled', true);
               $("#editbuttonmsg").html("Uploading Data Please Wait");
            },
            success: function(response) {
//                console.log(response); return;
                var res = JSON.parse(response);
                if(res.stat == 200){
                    
                    
                    
                    $("#addmsg").html(res.msg);
                    
                    
                    location.reload();
                    
                    $("#section").val(section);
                    $("#page").val(page);
                    $("#header").val(header);
                    $("#content").val(content);
                    $("#extra_content").val(extra_content);
                    $("#video").val(video);
                   
                    
                    var newimagecontent="";
                    var imagestring=res.img;
                   
                    
//                    console.log(previousimage);
//                    console.log(imagestring);return;
                    
                    if(previousimage!=imagestring)
                        {
                            $("#previousimagediv").hide();
                    
                   
                            newimagecontent+='<img src="'+file_url+'/'+imagestring+'" style="width:150px; height:150px;">';
                            newimagecontent+='<label>New Images</label>';
                        }
                    else
                        {
                           newimagecontent+=""; 
                        }
                    
    
                            
                       
                    
                  
                    
                    $("#newimagediv").html(newimagecontent);
                      
                        
                        
                   
                    
                }else{
//                    alert(res.msg);
                    $("#addmsg").html(res.msg);
                }
            },
            error: function(response) {
                console.log(response);
            }
    });
    
}


function deleteContent(content_id)
{
    
   
   swal({
                    title: 'Are you sure?',
                    text: 'You will not be able to recover this imaginary file!',
                    type: 'warning',
                    showCancelButton: true,
                    buttonsStyling: false,
                    confirmButtonClass: 'btn btn-danger',
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonClass: 'btn btn-light',
                    background: 'rgba(0, 0, 0, 0.96)'
                }).then(function(){
       
                     $.ajax({
                                type: "POST",
                                url: base_url+"ContentManagement/deleteContent",
                                data: {content_id:content_id},
                                success: function(response) {

                //                    alert(response);
                                   
                                    
                                     swal({
                                            title: 'Are you sure?',
                                            text: 'You will not be able to recover this imaginary file!',
                                            type: 'success',
                                            buttonsStyling: false,
                                            confirmButtonClass: 'btn btn-light',
                                            background: 'rgba(0, 0, 0, 0.96)'
                                        });
                                    
                                    var table = $('#data-table').DataTable();
                                        table
                                           .row( $("#rowId_"+content_id).parents('tr') )
                                           .remove()
                                           .draw();


                                },
                                error: function(response) {

                                    alert("error"+response);
                                }
                        });         // submitting the form when user press yes
      } );
                        
}







