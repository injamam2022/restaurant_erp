var base_url = $("#base_url").val();
var file_url = $("#file_url").val();
var GlobId="";


function clrmsg()
{
//    $("#role_name-error").html('');
//    $("#edit_role_name-error").html('');
//    $("#addmsg").html('');
//    $("#editmsg").html('');
    
}

function add_data()
{
    clrmsg();
    var school_name = $("#school_name").val();
    var school_code = $("#school_code").val();
    var school_desc = $("#school_desc").val();
    var school_chef_email = $("#school_chef_email").val();
    var school_img  = $("#school_img").prop('files')[0];
   
 
    
    if(school_name==0)
    {
        $("#school_name-error").html('Required');
        $("#school_name").focus();
        return false;
    } 
    if(school_desc.trim().length==0)
    {
        $("#school_desc-error").html('Required');
        $("#school_desc").focus();
        return false;
    } 
    
    if(school_img=="")
    {
        $("#school_img-error").html('Required');
        $("#school_img").focus();
        return false;
    }
    
    if(school_chef_email == "")
        {
            $("#school_chef_email-error").html('Required');
            $("#school_chef_email").focus();
            return false;
        }
    
     var form_data = new FormData();
    form_data.append("school_name", school_name)
    form_data.append("school_code", school_code)
    form_data.append("school_desc", school_desc)
    form_data.append("school_img", school_img)
    form_data.append("school_chef_email", school_chef_email)
   

    $.ajax({
            type: "POST",
            url: base_url + "SchoolManagement/add_data",
            data: form_data,
            contentType: false,
            processData: false,
            type: 'POST',
            success: function(response) {
//                console.log(response); return;
                var res = JSON.parse(response);
                if(res.stat == 200){
                    $("#addmsg").html(res.msg);
//                    window.location = base_url+"Role";
                    
                    var table = $('#data-table').DataTable();
                    
                    var ActionData = '<div class="btn-group mb-2 dropright"><button type="button" class="btn btn-light waves-effect waves-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button><div class="dropdown-menu" x-placement="right-start" style="position: absolute; transform: translate3d(104px, 0px, 0px); top: 0px; left: 0px; will-change: transform;"><a class="dropdown-item" href="javascript:void(0);" onclick="edit_data('+res.insert_id+');"><i class="zmdi zmdi-edit zmdi-hc-fw"></i> Edit</a><a class="dropdown-item" href="javascript:void(0);" id="rowId_'+res.insert_id+'" onclick="delete_data(<'+res.insert_id+');"><i class="zmdi zmdi-delete zmdi-hc-fw"></i> Delete</a></div></div>';
                    
//                     document.getElementById("y").src="./images/test2.png"
                    var image='<img src="'+file_url+'/school/'+res.img+'" style="width:100px; height:100px;">';
                    
                    var rowNode = table
                        .row.add( [ res.insert_id,school_name,school_desc,image,ActionData ] )
                        .draw()
                        .node();

                    $( rowNode )
                        .css({
                           'color' : 'white',
                           'font-weight' : '700'
                        })
                        .animate( { color: 'black' } );
                    
                    
                    $("#school_name").val('');
                    $("#school_desc").val('');
                    $("#school_img").val('');
                   
                    
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


function delete_data(delete_id)
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
                                url: base_url+"SchoolManagement/deletedata",
                                data: {delete_id:delete_id},
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
                                           .row( $("#rowId_"+delete_id).parents('tr') )
                                           .remove()
                                           .draw();


                                },
                                error: function(response) {

                                    alert("error"+response);
                                }
                        });         // submitting the form when user press yes
      } );
                        
}

function edit_data(edit_id,type)
{
      if(type == "view")
        {
            $("#message-info").html("View");
            $("#edit-box").hide();
        }
if(type == "edit")
        {
            $("#message-info").html("Edit");
            $("#edit-box").show();
        }

    $.ajax({
            type: "POST",
            url: base_url + "SchoolManagement/Singledata",
//            dataType: "json",
            data: {
                edit_id:edit_id
            },
            success: function(response) {
                console.log(response); 
                var res = JSON.parse(response);
                if(res.stat == 200){
                    
                    var content="";
                    GlobId=res.all_list[0].school_id;
                    $("#edit_school_name").val(res.all_list[0].school_name);
                    $("#edit_school_code").val(res.all_list[0].school_code);
                    $("#edit_school_chef_email").val(res.all_list[0].school_chef_email);
                    $("#edit_school_desc").val(res.all_list[0].school_desc);
                    content+='<img src="'+file_url+'/school/'+res.all_list[0].school_img+'" style="width:100px; height:100px"><input type="hidden" value="'+res.all_list[0].school_img+'" id="previousimage">';
                    $("#edit_school_id").val(res.all_list[0].school_id);
                    $(".image_content").html(content);
                    $("#edit_modal").modal('show');
                   
                    
                }
            },
            error: function(response) {
                console.log(response);
            }
    });
    
}



function update_data()
{



     clrmsg();
    var school_name = $("#edit_school_name").val();
    var school_code = $("#edit_school_code").val();
    var previousimage = $("#previousimage").val();
    var school_desc = $("#edit_school_desc").val();
    var school_img = $("#edit_school_img").prop('files')[0];
    var school_chef_email = $("#edit_school_chef_email").val();
    
    
    if(school_name.trim().length==0)
    {
        $("#edit_school_name-error").html('Required');
        $("#edit_school_name").focus();
        return false;
    } 
    
    if(school_desc.trim().length==0)
    {
        $("#edit_school_desc-error").html('Required');
        $("#edit_school_desc").focus();
        return false;
    } 
    
    var form_data = new FormData();
    form_data.append("school_name", school_name)
    form_data.append("school_code", school_code)
    form_data.append("previousimage", previousimage)
    form_data.append("school_desc", school_desc)
    form_data.append("school_img", school_img)
    form_data.append("school_chef_email", school_chef_email)
    form_data.append("GlobId", GlobId)
    
   

    $.ajax({
            type: "POST",
            url: base_url + "SchoolManagement/editdata",
            data: form_data,
            contentType: false,
            processData: false,
            type: 'POST',
            success: function(response) {
            
                var res = JSON.parse(response);
                if(res.stat == 200){
        
                    
                   $("#editmsg").html(res.msg);
                    
                    var table = $('#data-table').DataTable();
                    
                    var temp = table.row( $("#rowId_"+GlobId).parents('tr')).data();
   
                        temp[1] = school_name;
                        temp[2] = school_desc;
                        temp[3] = '<img src="'+file_url+'/school/'+res.img+'" style="width:100px; height:100px">';
                        table.row($("#rowId_"+GlobId).parents('tr')).data(temp).draw();
                    
                    
                }else{
//                    alert(res.msg);
                    $("#editmsg").html(res.msg);
                }
            },
            error: function(response) {
                console.log(response);
            }
    });
    

}



