var base_url = $("#base_url").val();
var GlobId="";

function clrmsg()
{
    $("#role_name-error").html('');
    $("#edit_role_name-error").html('');
    $("#addmsg").html('');
    $("#editmsg").html('');
    
}





function editUserAccess(admin_id,type)
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
    
    
    clrmsg();
 $("#edit_page_id").val("").trigger("change");
    $.ajax({
            type: "POST",
            url: base_url + "UserAccess/SingleUserAccess",
//            dataType: "json",
            data: {
                admin_id:admin_id
            },
            success: function(response) {
//                console.log(response); return;
                var res = JSON.parse(response);
                if(res.stat == 200){
                    GlobId=res.all_list[0].admin_id;
                    var page_id_arr=res.all_list[0].page_id;
                    console.log(page_id_arr);
                    if(page_id_arr != null)
                        {
                              var pagearr=page_id_arr.split(",");
                              $("#edit_page_id").val(pagearr).trigger("change");
                        }
                  
                    $("#edit_admin_id").val(res.all_list[0].admin_id);
                   
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
   
    
    var edit_admin_id = $("#edit_admin_id").val();
    var edit_page_id = $("#edit_page_id").val();
    
    var admin_name = $("#edit_admin_id option:selected").text();

    var page_name = '';
    
    $(".select2-selection__rendered").find('.select2-selection__choice').each(function( index ) {
      page_name+=$(this).attr('title')+', ';
    });
    
   
    

    
    
    $.ajax({
            type: "POST",
            url: base_url + "UserAccess/editUserAccess",
//            dataType: "json",
            data: {
                edit_admin_id:edit_admin_id,
                edit_page_id:edit_page_id
            },
            success: function(response) {
//                console.log(response);
                var res = JSON.parse(response);
                if(res.stat == 200){
                    $("#editmsg").html(res.msg);
//                    window.location = base_url+"Role";
                    
                    var table = $('#data-table').DataTable();
                    
                    var temp = table.row($("#rowId_"+GlobId).parents('tr')).data();
   
                        temp[1] = admin_name;
                        temp[2] = page_name;
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