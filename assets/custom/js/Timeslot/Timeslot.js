var base_url = $("#base_url").val();
var GlobId="";

function clrmsg()
{
    $("#type_name-error").html('');
    $("#edit_type_name-error").html('');
    $("#addmsg").html('');
    $("#editmsg").html('');
    
}

function add_data()
{
    clrmsg();
    var timeslot_name = $("#timeslot_name").val();
    var timeslot_interval = $("#timeslot_interval").val();
    var time_slot_from = $("#time_slot_from").val();
    var time_slot_to = $("#time_slot_to").val();
    
    if(timeslot_name.trim().length==0)
    {
        $("#timeslot_name-error").html('Invalid Field!');
        $("#timeslot_name").focus();
        return false;
    }
//    alert(base_url); return;
    $.ajax({
            type: "POST",
            url: base_url + "TimeSlotManagement/adddata",
//            dataType: "json",
            data: {
                timeslot_name:timeslot_name,
                timeslot_interval:timeslot_interval,
                time_slot_from:time_slot_from,
                time_slot_to:time_slot_to
            },
            success: function(response) {
//                console.log(response); return;
                var res = JSON.parse(response);
                if(res.stat == 200){
                    $("#addmsg").html(res.msg);
//                    window.location = base_url+"Role";
                    
                    var table = $('#data-table').DataTable();
                    
                   
                       
                    var ActionData = '<div class="btn-group mb-2 dropright"><button type="button" class="btn btn-light waves-effect waves-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button><div class="dropdown-menu" x-placement="right-start" style="position: absolute; transform: translate3d(104px, 0px, 0px); top: 0px; left: 0px; will-change: transform;"><a class="dropdown-item" href="javascript:void(0);" onclick="edit_data('+res.insert_id+');"><i class="zmdi zmdi-edit zmdi-hc-fw"></i> Edit</a><a class="dropdown-item" href="javascript:void(0);" id="rowId_'+res.insert_id+'" onclick="delete_data(<'+res.insert_id+');"><i class="zmdi zmdi-delete zmdi-hc-fw"></i> Delete</a></div></div>';
                    
                    var rowNode = table
                        .row.add( [ res.insert_id, timeslot_name, ActionData ] )
                        .draw()
                        .node();

                    $( rowNode )
                        .css({
                           'color' : 'white',
                           'font-weight' : '700'
                        })
                        .animate( { color: 'black' } );
                    
                    
                    $("#timeslot_name").val('');
                    
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
                                url: base_url+"TimeSlotManagement/deletedata",
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
            url: base_url + "TimeSlotManagement/Singledata",
//            dataType: "json",
            data: {
                edit_id:edit_id
            },
            success: function(response) {
//                console.log(response); return;
                var res = JSON.parse(response);
                if(res.stat == 200){
                    GlobId=res.all_list[0].timeslot_id;
                    $("#edit_timeslot_name").val(res.all_list[0].timeslot_name);
                    $("#edit_timeslot_interval").val(res.all_list[0].timeslot_interval);
                    $("#edit_time_slot_from").val(res.all_list[0].time_slot_from);
                    $("#edit_time_slot_to").val(res.all_list[0].time_slot_to);
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
    var timeslot_name = $("#edit_timeslot_name").val();
    var timeslot_interval = $("#edit_timeslot_interval").val();
    var time_slot_from = $("#edit_time_slot_from").val();
    var time_slot_to = $("#edit_time_slot_to").val();
    
    if(timeslot_name.trim().length==0)
    {
        $("#edit_timeslot_name-error").html('Required');
        $("#edit_timeslot_name").focus();
        return false;
    }
//    alert(base_url); return;
    $.ajax({
            type: "POST",
            url: base_url + "TimeSlotManagement/editdata",
//            dataType: "json",
            data: {
                timeslot_name:timeslot_name,
                timeslot_interval:timeslot_interval,
                time_slot_from:time_slot_from,
                time_slot_to:time_slot_to,
                GlobId:GlobId
            },
            success: function(response) {
               console.log(response); 
                var res = JSON.parse(response);
                if(res.stat == 200){
                    $("#editmsg").html(res.msg);
//                    window.location = base_url+"Role";
                    
                    var table = $('#data-table').DataTable();
                    
                    var temp = table.row( $("#rowId_"+GlobId).parents('tr')).data();
   
                        temp[1] = timeslot_name;
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