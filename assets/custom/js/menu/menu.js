var base_url = $("#base_url").val();
var file_url = $("#file_url").val();
var GlobId="";
var globalids = "";
var globcategory_val = "";
var catidss = "";

function get_fooditems_rescatory()
{
    var category_id = $("#category_id").val();
    
   // alert(category_id);
    
        $.ajax({
            type: "POST",
            url: base_url+"MenuManagement/get_food_items",
            data: {
                category_id:category_id
            },
            success: function(response) {
                //console.log(response);
                var res = JSON.parse(response);
                console.log(res.list_count);
                var content = "";
                if(res.stat == 200) 
                {
                    content+= '<option value="0">Select Food Items</option>';
                    for(var i=0;i<res.list_count;i++)
                    {
                    content+='<option value='+res.all_list[i].food_id+'>'+res.all_list[i].food_name+'</option>';
                    }
                }
                $("#food_tems").html(content);
                //$("#edit_menu_modal").modal('show');
                $("#category_ids").val(category_id);
                globcategory_val = ","+category_id+",";
            },
            error: function(response) {
                console.log("error : "+JSON.stringify(response));
            }
    });
    
}

counter = 0;
function add_more_data(type)
{
   /* if(type == "add")
        {
         counter++;   
        }*/
     if(type == "edit")
        {
            counter = $("#data_count_earlier").val();
        }
            counter++;   
     $.ajax({
            type: "POST",
            url: base_url+"MenuManagement/get_all_categories",
            success: function(response) {
                //console.log(response);
                var res = JSON.parse(response);
                console.log(res.list_count);
                var content = "";
                var content1 = "";
                
               
                if(res.stat == 200) 
                {
                   
                    content+='<div class="col-sm-6" id="cat_item_'+counter+'">';
                     content+='<button type="button" class="btn btn-dark" onclick="remove_data('+counter+');"> <span><i class="zmdi zmdi-plus zmdi-hc-fw"></i>Remove</span></button>';
                    content+='<div class="form-group">'; 
                    content+='<label>Category</label>';
                    content+='<select class="form-control" name="category_id[]" id="category_id_'+counter+'" onchange="get_fooditems_rescategory('+counter+');" required>';
                    content+= '<option value="0">Select Categories</option>';
                    for(var i=0;i<res.list_count;i++)
                    {
                    content+='<option value='+res.all_list[i].category_id+'>'+res.all_list[i].cat_name+'</option>';
                    }
                    content+='</select>';
                    content+='</div>';                                 
                    content+='</div>';   
                }
            
                
                
                                        
                content1+='<div class="col-sm-6" id="foooditem_'+counter+'">';
                content1+='<div class="form-group">';                     
                content1+='<label>Select Food Items</label>';
                content1+='<div class="select">';
                content1+='<select class="form-control select2allnew" name="food_items_'+counter+'[]" id="fooditems_counter_'+counter+'" multiple required>';
                content1+='<option>Select</option>'
                content1+='</select>';
                content1+='</div>';                                 
                content1+='</div>';                                 
                content1+='</div>';                                 
                                                
               
                  
           
                
            $("#new_items_data").append(content);
            $("#new_items_data").append(content1);
                
            $.getScript(base_url+'assets/vendors/bower_components/select2/dist/js/select2.full.min.js');
            $(".select2allnew").select2();     
           
                
            },
            error: function(response) {
                console.log("error : "+JSON.stringify(response));
            }
    });
}

function remove_data(counter)
{
    
    var cat_id = $("#category_id_"+counter+"").val();
   /* alert("hhhh"+globcategory_val);
    alert("ccc"+cat_id);*/
    var checkcategory_val=","+cat_id+",";
    globcategory_val = globcategory_val.replace(checkcategory_val, "");
    $("#category_ids").val(globcategory_val);
   // return
    $("#cat_item_"+counter+"").remove();
    $("#foooditem_"+counter+"").remove();
    
  
    
    
}

function get_fooditems_rescategory(counter)
{
      var category_id = $("#category_id_"+counter+"").val();
      /*alert(globcategory_val);
      alert(category_id);*/
    
      var checkval=","+category_id+",";
      //alert(checkval);
                if(globcategory_val.toLowerCase().indexOf(checkval.toLowerCase()) == -1){
                       globcategory_val += ","+category_id+",";
                       //alert("asdadad");
                    }
                else{
                        alert("This Category Is Already added.");
                       // $("#category_id_"+counter+"").val('');
                        return;
                }
    
      //alert("asdadad---------------");
    
        $.ajax({
            type: "POST",
            url: base_url+"MenuManagement/get_food_items",
            data: {
                category_id:category_id
            },
            success: function(response) {
                //console.log(response);
                var res = JSON.parse(response);
                console.log(res.list_count);
                var content = "";
                if(res.stat == 200) 
                {
                    content+= '<option value="0">Select Food Items</option>';
                    for(var i=0;i<res.list_count;i++)
                    {
                    content+='<option value='+res.all_list[i].food_id+'>'+res.all_list[i].food_name+'</option>';
                    }
                }
             $("#fooditems_counter_"+counter+"").html(content);
            
             
             $("#category_ids").val(globcategory_val);
             //$("#edit_menu_modal").modal('show');
                
            },
            error: function(response) {
                console.log("error : "+JSON.stringify(response));
            }
    });
}


function delete_menu(id)
{ 
    var array_attribute = $("#array_attribute").val();
    var data = {};
    data[''+array_attribute+''] = {};
    data[''+array_attribute+''][''+array_attribute+'_id'] = id;
    //alert(data);
    //console.log(data);
    
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
                url: base_url+"Menu/delete_menu",
                data: data,
                success: function(response) {
                   console.log(response);
                    var res = JSON.parse(response);
                    if(res.stat == 200)
                    {
                       var table = $('.mydatatable').DataTable();
                        table
                           .row( $("#del_"+id).parents('tr') )
                           .remove()
                           .draw();
                            swal({
                                title: 'Deleted!',
                                text: 'Your file has been deleted.',
                                type: 'success',
                                buttonsStyling: false,
                                confirmButtonClass: 'btn btn-sm btn-light',
                                background: 'rgba(0, 0, 0, 0.96)'
                        });
                    }
                    else
                    {                            
                        swal({
                            title: 'Cancelled',
                            text: 'Something went wrong. Reload & try again.',
                            type: 'error',
                            buttonsStyling: false,
                            confirmButtonClass: 'btn btn-sm btn-light',
                            background: 'rgba(0, 0, 0, 0.96)'
                        });
                    }
                },
                error: function(response) {

                    console.log("error"+JSON.stringify(response));
                }
        });
    });
}


function add_menu()
{
    clrmsg();

    
    var name = $('#menu_display_name').val();
    var control= $('#menu_controller_name').val();
    var function_name=$('#menu_function_name').val();
    var icon=$('#menu_icon').val();
    var parent=$('#menu_parent_id').val();
   
    if(name=="")
    {   
        $('#menu_display_name-error').html("Please Enter a name");
        setTimeout(function(){
         $('#menu_display_name-error').html('');
                     },3000);
        return false;
    }
    if(control=="")
    {
        $('#menu_controller_name-error').html("Please Enter a Controller name");
        setTimeout(function(){
         $('#menu_controller_name-error').html('');
                     },3000);
        return false;
    }
    if(function_name=="")
    {
       
         $('#menu_function_name-error').html("Please Enter a Function name");
         setTimeout(function(){
         $('#menu_function_name-error').html('');
                     },3000);
          return false;
    }
    if(icon=="")
    {
          $('#menu_icon-error').html("Please Enter an icon");
         setTimeout(function(){
         $('#menu_icon-error').html('');
                     },3000);
          return false;
    }
    if(parent==null)
    {
          $('#menu_parent_id-error').html("Please Choose a menu");
        setTimeout(function(){
         $('#menu_parent_id-error').html('');
                     },3000);
          return false;
    }

    var array_attribute = $("#array_attribute").val();
    var data = {};    
    data[''+array_attribute+''] = {};
    
    data[''+array_attribute+'']['menu_display_name'] = $('#menu_display_name').val();
    data[''+array_attribute+'']['menu_controller_name'] = $('#menu_controller_name').val();
    data[''+array_attribute+'']['menu_function_name'] = $('#menu_function_name').val();
    data[''+array_attribute+'']['menu_icon'] = $('#menu_icon').val();
    data[''+array_attribute+'']['menu_parent_id'] = $('#menu_parent_id').val();

    
    console.log(data);
    
    $.ajax({
        type : "POST",
        url : base_url+"Menu/add_menu",
        data : data,
        success : function(res){
           console.log(res);
            res = JSON.parse(res);
            if(res.stat == 200)
            {
                var content = '<div class="btn-group mb-2 dropright"><button type="button" class="btn btn-light waves-effect waves-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button><div class="dropdown-menu" x-placement="right-start" style="position: absolute; transform: translate3d(104px, 0px, 0px); top: 0px; left: 0px; will-change: transform;"><a class="dropdown-item" href="javascript:void(0);" onclick="get_menu('+res.menu_id+');"><i class="zmdi zmdi-edit zmdi-hc-fw"></i> Edit</a><a class="dropdown-item" href="javascript:void(0);" id="del_'+res.insert_id+'" onclick="delete_menu('+res.menu_id+');"><i class="zmdi zmdi-delete zmdi-hc-fw"></i> Delete</a></div></div>';

                var table = $('.mydatatable').DataTable();
                var table_data = [];
                table_data.push(res.menu_id);
                var values = Object.values(data[''+array_attribute+'']);
                for(var i=0;i<values.length;i++)
                {
                    table_data.push(values[i]);
                }
                table_data.push(content);

                var rowNode = table.row.add( table_data )
               .draw()
               .node();

               $( rowNode )
               .css( 'color', '#20c997' )
               .animate( { color: '#20c997' } );
                clrinput();
                $("#menu_msg").html(res.msg);
            }
            else
            {
                swal({
                        title: 'Error',
                        text: res.msg,
                        type: 'error',
                        buttonsStyling: false,
                        confirmButtonClass: 'btn btn-sm btn-light',
                        background: 'rgba(0, 0, 0, 0.96)'
                    });
            }
        },
        error : function(msg) {
            console.log("error : "+JSON.stringify(msg));
        }
    });
}


function get_menu(id)
{
    var array_attribute = $("#array_attribute").val();
    var data = {};
    data[''+array_attribute+''] = {};
    data[''+array_attribute+''][''+array_attribute+'_id'] = id;
    $.ajax({
            type: "POST",
            url: base_url+"Menu/get_menu",
            data: data,
            success: function(response) {
//                console.log(response);
                var res = JSON.parse(response);
                if(res.stat == 200) 
                {
                    var key_arr = Object.keys(res.all_list[0]);
                    var value_arr = Object.values(res.all_list[0]);
                    glob_id = id;
                    for(var i=0;i<key_arr.length;i++)
                    {
                    $("#"+key_arr[i]+"_edit").val(value_arr[i]);

                    }
                }
            $("#edit_menu_modal").modal('show');
                
            },
            error: function(response) {
                console.log("error : "+JSON.stringify(response));
            }
    });
}

function update_menu()
{
    clrmsg();
    var array_attribute = $("#array_attribute").val();

    var name = $('#menu_display_name_edit').val();
    var control= $('#menu_controller_name_edit').val();
    var function_name=$('#menu_function_name_edit').val();
    var icon=$('#menu_icon_edit').val();
    
   
    if(name=="")
    {   
        $('#menu_display_name_edit-error').html("Please Enter a name");
        setTimeout(function(){
         $('#menu_display_name_edit-error').html('');
                     },3000);
        return false;
    }
    if(control=="")
    {
        $('#menu_controller_name_edit-error').html("Please Enter a Controller name");
        setTimeout(function(){
         $('#menu_controller_name_edit-error').html('');
                     },3000);
        return false;
    }
    if(function_name=="")
    {
       
         $('#menu_function_name_edit-error').html("Please Enter a Function name");
         setTimeout(function(){
         $('#menu_function_name_edit-error').html('');
                     },3000);
          return false;
    }
    if(icon=="")
    {
          $('#menu_icon_edit-error').html("Please Enter an icon");
         setTimeout(function(){
         $('#menu_icon_edit-error').html('');
                     },3000);
          return false;
    }
   

     var data = {};
    data[''+array_attribute+''] = {};
    data[''+array_attribute+'']['menu_display_name'] = $('#menu_display_name_edit').val();
    data[''+array_attribute+'']['menu_controller_name'] = $('#menu_controller_name_edit').val();
    data[''+array_attribute+'']['menu_function_name'] = $('#menu_function_name_edit').val();
    data[''+array_attribute+'']['menu_icon'] = $('#menu_icon_edit').val();
    data[''+array_attribute+'']['menu_parent_id'] = $('#menu_parent_id_edit').val();

    
    data['where'] = {};
    data['where'][''+array_attribute+'_id'] = glob_id;
    
//    console.log(data);return;
    
    $.ajax({
        type : "POST",
        url : base_url+"Menu/update_menu",
        data : data,
        success : function(res){
           console.log(res);
            res = JSON.parse(res);
            if(res.stat == 200)
            {
                var table = $('.mydatatable').DataTable();
                var dataval=table.row( $("#del_"+glob_id).parents('tr')).data();
                var values = Object.values(data[''+array_attribute+'']);
                for(var i=0;i<values.length;i++)
                {
                    dataval[(parseInt(i)+1)] = values[i];
                }
                
                table.row( $("#del_"+glob_id).parents('tr')).data(dataval);
                $("#edit_msg").html(res.msg);
            }
            else
            {
                swal({
                        title: 'Error',
                        text: res.msg,
                        type: 'error',
                        buttonsStyling: false,
                        confirmButtonClass: 'btn btn-sm btn-light',
                        background: 'rgba(0, 0, 0, 0.96)'
                    });
            }
        },
        error : function(msg) {
            console.log("error : "+JSON.stringify(msg));
        }
    });
}
