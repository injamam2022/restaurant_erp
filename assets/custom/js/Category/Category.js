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

function add_category()
{
    clrmsg();
    var cat_name = $("#cat_name").val();
    var cat_desc = $("#cat_desc").val();
    var cat_img = $("#cat_img").prop('files')[0];
   
    
//    alert(image_name);return;

   
    
  
    
    if(cat_name==0)
    {
        $("#cat_name-error").html('Required');
        $("#cat_name").focus();
        return false;
    } 
    if(cat_desc.trim().length==0)
    {
        $("#cat_desc-error").html('Required');
        $("#cat_desc").focus();
        return false;
    } 
    
    if(cat_img=="")
    {
        $("#cat_img-error").html('Required');
        $("#cat_img").focus();
        return false;
    }
    
     var form_data = new FormData();
    form_data.append("cat_name", cat_name)
    form_data.append("cat_desc", cat_desc)
    form_data.append("cat_img", cat_img)
   

    $.ajax({
            type: "POST",
            url: base_url + "Category/addCategory",
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
                    
                    var ActionData = '<div class="btn-group mb-2 dropright"><button type="button" class="btn btn-light waves-effect waves-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button><div class="dropdown-menu" x-placement="right-start" style="position: absolute; transform: translate3d(104px, 0px, 0px); top: 0px; left: 0px; will-change: transform;"><a class="dropdown-item" href="javascript:void(0);" onclick="editCategory('+res.insert_id+');"><i class="zmdi zmdi-edit zmdi-hc-fw"></i> Edit</a><a class="dropdown-item" href="javascript:void(0);" id="rowId_'+res.insert_id+'" onclick="deleteCategory(<'+res.insert_id+');"><i class="zmdi zmdi-delete zmdi-hc-fw"></i> Delete</a></div></div>';
                    
//                     document.getElementById("y").src="./images/test2.png"
                    var image='<img src="'+file_url+'/category/'+res.img+'" style="width:100px; height:100px;">';
                    
                    var rowNode = table
                        .row.add( [ res.insert_id,cat_name,cat_desc,image,ActionData ] )
                        .draw()
                        .node();

                    $( rowNode )
                        .css({
                           'color' : 'white',
                           'font-weight' : '700'
                        })
                        .animate( { color: 'black' } );
                    
                    
                    $("#cat_name").val('');
                    $("#cat_desc").val('');
                    $("#cat_img").val('');
                   
                    
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


function deleteCategory(category_id)
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
                                url: base_url+"Category/deleteCategory",
                                data: {category_id:category_id},
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
                                           .row( $("#rowId_"+category_id).parents('tr') )
                                           .remove()
                                           .draw();


                                },
                                error: function(response) {

                                    alert("error"+response);
                                }
                        });         // submitting the form when user press yes
      } );
                        
}

function editCategory(category_id,type)
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
            url: base_url + "Category/SingleCategory",
//            dataType: "json",
            data: {
                category_id:category_id
            },
            success: function(response) {
                console.log(response); 
                var res = JSON.parse(response);
                if(res.stat == 200){
                    
                    
                    
                    var content="";
                    GlobId=res.all_list[0].category_id;
                    $("#edit_cat_name").val(res.all_list[0].cat_name);
                    $("#edit_cat_desc").val(res.all_list[0].cat_desc);
                    content+='<img src="'+file_url+'/category/'+res.all_list[0].cat_img+'" style="width:100px; height:100px"><input type="hidden" value="'+res.all_list[0].cat_img+'" id="previousimage">';
                    
                    $(".image_content").html(content);
                    $("#edit_modal").modal('show');
                   
                    
                }
            },
            error: function(response) {
                console.log(response);
            }
    });
    
    
    
    
    

}

function submitedit()
{
     clrmsg();
    var cat_name = $("#edit_cat_name").val();
    var previousimage = $("#previousimage").val();
    var cat_desc = $("#edit_cat_desc").val();
    var cat_img = $("#edit_cat_img").prop('files')[0];
    
    
    
    if(cat_name.trim().length==0)
    {
        $("#edit_cat_name-error").html('Required');
        $("#edit_cat_name").focus();
        return false;
    } 
    
    if(cat_desc.trim().length==0)
    {
        $("#edit_cat_desc-error").html('Required');
        $("#edit_cat_desc").focus();
        return false;
    } 
    
    var form_data = new FormData();
    form_data.append("cat_name", cat_name)
    form_data.append("previousimage", previousimage)
    form_data.append("cat_desc", cat_desc)
    form_data.append("cat_img", cat_img)
    form_data.append("GlobId", GlobId)
    
   

    $.ajax({
            type: "POST",
            url: base_url + "Category/editCategory",
            data: form_data,
            contentType: false,
            processData: false,
            type: 'POST',
            success: function(response) {
//                console.log(response); return;
                var res = JSON.parse(response);
                if(res.stat == 200){
                    $("#editmsg").html(res.msg);
//                    window.location = base_url+"Role";
                    
                    var table = $('#data-table').DataTable();
                    
                    var temp = table.row( $("#rowId_"+GlobId).parents('tr')).data();
   
                        temp[1] = cat_name;
                        temp[2] = cat_desc;
                        temp[3] = '<img src="'+file_url+'/category/'+res.img+'" style="width:100px; height:100px">';
                        table.row($("#rowId_"+GlobId).parents('tr')).data(temp).draw();
                    
                    
                    $("#role_name").val('');
                    
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



