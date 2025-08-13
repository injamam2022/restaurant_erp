var base_url = $("#base_url").val();
var file_url = $("#file_url").val();
var form_data = new FormData();
var GlobId="";


function clrmsg()
{
    $("#role_name-error").html('');
    $("#edit_role_name-error").html('');
    $("#addmsg").html('');
    $("#editmsg").html('');
    
}

function addproduct()
{
    clrmsg();
    var category_id = $("#category_id").val();
    var type_id = $("#type_id").val();
    var carat_id = $("#carat_id").val();
    var occasion_id = $("#occasion_id").val();
    var product_name = $("#product_name").val();
    var product_code = $("#product_code").val();
    var product_price = $("#product_price").val();
    var product_desc = $("#product_desc").val();
    var product_video = $("#product_video").val();
    var product_star_status = $("#product_star_status").val();
    
    
   
    
//    alert(image_name);return;

     var gal = document.getElementById('galleryImg').files.length;
     for (var x = 0; x < gal; x++) {
         form_data.append("galleryImgfile[]", document.getElementById('galleryImg').files[x]);
     }
   
    
  if(category_id==0)
    {
        $("#category_id-error").html('Required');
        $("#category_id").focus();
        return false;
    } 
    
    if(type_id==0)
    {
        $("#type_id-error").html('Required');
        $("#type_id").focus();
        return false;
    }  
    
    if(carat_id==0)
    {
        $("#carat_id-error").html('Required');
        $("#carat_id").focus();
        return false;
    }  
    
    if(occasion_id==0)
    {
        $("#occasion_id-error").html('Required');
        $("#occasion_id").focus();
        return false;
    } 
    
    if(product_name=="")
    {
        $("#product_name").attr('placeholder','Required').addClass();
        $("#product_name").focus();
        return false;
    }   
    
    if(product_code=="")
    {
      
        $("#product_code").attr('placeholder','Required').addClass();
        $("#product_code").focus();
        return false;
    }   
    
    if(product_price=="")
    {
        $("#product_price").attr('placeholder','Required').addClass();
        $("#product_price").focus();
        return false;
    }   
    
    if(product_desc=="")
    {
        $("#product_desc").attr('placeholder','Required').addClass();
        $("#product_desc").focus();
        return false;
    }  
    
    if(product_video=="")
    {
        $("#product_video").attr('placeholder','Required').addClass();
        $("#product_video").focus();
        return false;
    } 
    
    if(gal=="")
    {
        $("#galleryImg-error").html('Required');
        
        return false;
    } 
    
    if(product_star_status=="")
    {
        $("#product_star_status-error").html('Required');
        
        return false;
    }
    
    
    form_data.append("category_id", category_id)
    form_data.append("type_id", type_id)
    form_data.append("carat_id", carat_id)
    form_data.append("occasion_id", occasion_id)
    form_data.append("product_name", product_name)
    form_data.append("product_code", product_code)
    form_data.append("product_price", product_price)
    form_data.append("product_desc", product_desc)
    form_data.append("gal", gal)
    form_data.append("product_video", product_video)
    form_data.append("product_star_status", product_star_status)
   

    $.ajax({
            type: "POST",
            url: base_url + "ProductManagement/ProductAdd",
            data: form_data,
            contentType: false,
            processData: false,
            type: 'POST',
            beforeSend: function(){
            // Show image container
            $(".page-loader").fadeIn(300);
           },
            success: function(response) {
//                console.log(response); return;
                var res = JSON.parse(response);
                if(res.stat == 200){
                    $("#addmsg").html(res.msg);
                    
                    
                        $(".page-loader").fadeOut(300);
                        window.location.href=base_url+'ProductManagement';
                   
                    
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
function editproduct()
{
    clrmsg();
    var category_id = $("#category_id").val();
    var type_id = $("#type_id").val();
    var carat_id = $("#carat_id").val();
    var occasion_id = $("#occasion_id").val();
    var product_name = $("#product_name").val();
    var product_code = $("#product_code").val();
    var product_price = $("#product_price").val();
    var product_desc = $("#product_desc").val();
    var previousimage = $("#previousimage").val();
    var product_id = $("#product_id").val();
    var product_video = $("#product_video").val();
    var product_star_status = $("#product_star_status").val();
    
    
   
    
//    alert(product_star_status);return;

     var gal = document.getElementById('galleryImg').files.length;
     for (var x = 0; x < gal; x++) {
         form_data.append("galleryImgfile[]", document.getElementById('galleryImg').files[x]);
     }
   
    
  if(category_id==0)
    {
        $("#category_id-error").html('Required');
        $("#category_id").focus();
        return false;
    } 
    
    if(type_id==0)
    {
        $("#type_id-error").html('Required');
        $("#type_id").focus();
        return false;
    }  
    
    if(carat_id==0)
    {
        $("#carat_id-error").html('Required');
        $("#carat_id").focus();
        return false;
    }  
    
    if(occasion_id==0)
    {
        $("#occasion_id-error").html('Required');
        $("#occasion_id").focus();
        return false;
    } 
    
    if(product_name=="")
    {
        $("#product_name").attr('placeholder','Required').addClass();
        $("#product_name").focus();
        return false;
    }   
    
    if(product_code=="")
    {
      
        $("#product_code").attr('placeholder','Required').addClass();
        $("#product_code").focus();
        return false;
    }   
    
    if(product_price=="")
    {
        $("#product_price").attr('placeholder','Required').addClass();
        $("#product_price").focus();
        return false;
    }   
    
    if(product_desc=="")
    {
        $("#product_desc").attr('placeholder','Required').addClass();
        $("#product_desc").focus();
        return false;
    } 
    
    if(product_video=="")
    {
        $("#product_video").attr('placeholder','Required').addClass();
        $("#product_video").focus();
        return false;
    } 
    
    if(product_star_status=="")
    {
        $("#product_star_status-error").html('Required');
        $("#product_star_status").focus();
        return false;
    }
    
    
    form_data.append("category_id", category_id)
    form_data.append("type_id", type_id)
    form_data.append("carat_id", carat_id)
    form_data.append("occasion_id", occasion_id)
    form_data.append("product_name", product_name)
    form_data.append("product_code", product_code)
    form_data.append("product_price", product_price)
    form_data.append("product_desc", product_desc)
    form_data.append("gal", gal)
    form_data.append("previousimage", previousimage)
    form_data.append("product_id", product_id)
    form_data.append("product_video", product_video)
    form_data.append("product_star_status", product_star_status)
   

    $.ajax({
            type: "POST",
            url: base_url + "ProductManagement/ProductEdit",
            data: form_data,
            contentType: false,
            processData: false,
            type: 'POST',
            beforeSend: function(){
            // Show image container
            $(".page-loader").fadeIn(300);
           },
            success: function(response) {
//                console.log(response); return;
                var res = JSON.parse(response);
                if(res.stat == 200){
                    $(".page-loader").fadeOut(300);
                    form_data = new FormData();
                    
                    $("#addmsg").html(res.msg);
                    
                    $("#category_id").val(category_id);
                    $("#type_id").val(type_id);
                    $("#carat_id").val(carat_id);
                    $("#occasion_id").val(occasion_id);
                    $("#product_name").val(product_name);
                    $("#product_code").val(product_code);
                    $("#product_price").val(product_price);
                    $("#product_desc").val(product_desc);
                    $("#product_video").val(product_video);
                   
                    
                    var newimagecontent="";
                    var imagestring=res.img;
                    var imagecount=imagestring.split(",");
                    
//                    console.log(previousimage);
//                    console.log(imagestring);return;
                    
                    if(previousimage!=imagestring)
                        {
                            $("#previousimagediv").hide();
                    
                    for(var i=0;i<(imagecount.length)-1;i++)
                        {
                            newimagecontent+='<img src="'+file_url+'/'+imagecount[i]+'" style="width:80px; height:80px;">';
                        }
                            
                       
                    
                    newimagecontent+='<label>New Images</label>';
                    
                    $("#newimagediv").html(newimagecontent);
                        }
                        
                        location.reload();
                   
                    
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


function deleteProduct(product_id)
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
                                url: base_url+"ProductManagement/deleteProduct",
                                data: {product_id:product_id},
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
                                           .row( $("#rowId_"+product_id).parents('tr') )
                                           .remove()
                                           .draw();


                                },
                                error: function(response) {

                                    alert("error"+response);
                                }
                        });         // submitting the form when user press yes
      } );
                        
}



$('#import_csv').on('submit', function(event){
  
  event.preventDefault();
     var form = new FormData(this);
     var csvType = $("#csvType").val();

     form.append("csvType", csvType);

  $.ajax({
   url:base_url+"csv_import/importproduct",
   method:"POST",
   data:form,
   contentType:false,
   cache:false,
   processData:false,
   beforeSend:function(){
    $('#import_csv_btn').html('Importing...');
   },
   success:function(data)
   {
//    console.log(data);
    $('#import_csv')[0].reset();
    $('#import_csv_btn').attr('disabled', false);
    $('#import_csv_btn').html('Import Done');
    setTimeout(function(){ location.reload(); }, 3000);
    //load_data();
   }
  })
 });




/////////////Information Add/////////////////
function clrmsg()
{
    $("#position_status-error").html('');
    $("#header-error").html('');
    $("#name-error").html('');
    $("#info-error").html('');
}

globalids= "";
globalval = 1;
globCombination = "";

function plusProduct()
{
    clrmsg();
    iziToast.destroy();
   
    var name = $("#name").val();
    var info = $("#info").val();
    var header = $("#header").val();
    
    if(header == "")
    {
       $("#header").attr('Placeholder','Required field!');
       $("#header").focus();
        return;
    }
    
   
    if(name == "")
    {
       $("#name-error").attr('Placeholder','Required field!');
       $("#name").focus();
        return;
    }
    if(info == "")
    {
       $("#info-error").attr('Placeholder','Required field!');
       $("#info").focus();
        return;
    }
   
    var combination = name+info;
    
    var checkval=","+combination+",";
    //return;
    if(globCombination.indexOf(checkval) == -1)
    {
        globCombination += ","+combination+",";
    }
    else
    {
        iziToast.warning({
                                    title: 'Warning',
                                    message: 'Combination already exists.'
                                });
        return;
    }
//    console.log(globCombination);
    
    
    
    $('#combination_table tbody').append('<tr id="tr_'+globalval+'"><td><input type="hidden" id="header_array_'+globalval+'" value="'+header+'"><textarea style="width: 100%;" id="name_array_'+globalval+'" rows="2" readonly>'+name+'</textarea></td><td><textarea style="width: 100%;" id="info_array_'+globalval+'" rows="2" readonly>'+info+'</textarea></td><td><button type="button" class="btn btn-danger" onclick="removeTr('+globalval+',\''+combination+'\')">Remove</button></td></tr>');
    
    globalids += ','+globalval+',';
    globalval++;
    
    $("#combination_table").show();
    $("#finalSubmitBtn").show();
}

function removeTr(globalval,combination)
{
    var checkval=","+globalval+",";
    globalids = globalids.replace(checkval, "");
    
    var checkCombinationName=","+combination+",";
    globCombination = globCombination.replace(checkCombinationName, "");

    
    $('#tr_'+globalval).remove();    
    if(globCombination == '')
    {
        $("#combination_table").hide();
        $("#finalSubmitBtn").hide();
    }
}

function addProductInfo()
{
    clrmsg();
    iziToast.destroy();
    
    var product_id=$("#product_id").val();
    var position_status = $("#position_status").val();

    
     if(position_status == 0)
    {
       $("#position_status-error").html('Required field!');
       $("#position_status").focus();
        return;
    }
   
    
    
    
    
    var allIds=globalids.replace(/,+$/,'');
    allIds=allIds.substr(1);
//    alert(allIds);
	var allArr=allIds.split(',,');
    var  name_array="", info_array="", header_array="";
    for(var i=0;i<allArr.length; i++)
    {
        
        name_array+=$("#name_array_"+allArr[i]).val()+",";
        info_array+=$("#info_array_"+allArr[i]).val()+",";
        header_array+=$("#header_array_"+allArr[i]).val()+",";
        
        
      
    }
    
    $.ajax({
            type: "POST",
            url: base_url + "ProductManagement/addtionInfoProduct",
            data: {
                   product_id:product_id,
                   position_status:position_status,
                   header_array:header_array,
                   name_array:name_array,
                   info_array:info_array,
                  
                   },
            success: function(response) {
                console.log(response);
                var res = JSON.parse(response);  
//                alert(res.Stat);
                if(res.stat == 1)
                {
                    iziToast.success({
                                    title: 'Success',
                                    message: res.msg
                                });
                }
                else
                {
                    iziToast.error({
                                    title: 'Error',
                                    message: res.msg
                                });
                }
            },
            error: function(response) {
                console.log("error "+response);
            }
    });
    
}


/////////////Information Update/////////////////





editglobalids= $("#globalids").val();
editglobalval = $("#globalval").val();
editglobCombination = $("#globCombination").val();

function updateplusProduct()
{
    clrmsg();
    iziToast.destroy();
   
    var name = $("#name").val();
    var info = $("#info").val();
    var header = $("#header").val();
    
    if(header == "")
    {
       $("#header").attr('Placeholder','Required field!');
       $("#header").focus();
        return;
    }
    
   
    if(name == "")
    {
       $("#name-error").attr('Placeholder','Required field!');
       $("#name").focus();
        return;
    }
    if(info == "")
    {
       $("#info-error").attr('Placeholder','Required field!');
       $("#info").focus();
        return;
    }
   
    var combination = name+info;
    
    var checkval=","+combination+",";
    //return;
    if(editglobCombination.indexOf(checkval) == -1)
    {
        editglobCombination += ","+combination+",";
    }
    else
    {
        iziToast.warning({
                                    title: 'Warning',
                                    message: 'Combination already exists.'
                                });
        return;
    }
//    console.log(globCombination);
    
    
    
    $('#combination_table tbody').append('<tr id="tr_'+editglobalval+'"><td><input type="hidden" id="header_array_'+editglobalval+'" value="'+header+'"><textarea style="width: 100%;" id="name_array_'+editglobalval+'" rows="2" readonly>'+name+'</textarea></td><td><textarea style="width: 100%;" id="info_array_'+editglobalval+'" rows="2" readonly>'+info+'</textarea></td><td><button type="button" class="btn btn-danger" onclick="editremoveTr('+editglobalval+',\''+combination+'\',0)">Remove</button></td></tr>');
    
    editglobalids += ','+editglobalval+',';
    editglobalval++;
    
    $("#combination_table").show();
    $("#finalSubmitBtn").show();
}

function editremoveTr(globalval,combination,information_id)
{
    
    if(information_id != 0)
    {
       $.ajax({
                type: "POST",
                url: base_url+"ProductManagement/deleteInformation",
                data: {information_id:information_id},
                success: function(response) {
                    console.log(response);
                    var checkval=","+globalval+",";
                    globalids = globalids.replace(checkval, "");

                    var checkCombinationName=","+combination+",";
                    editglobCombination = editglobCombination.replace(checkCombinationName, "");


                    $('#tr_'+globalval).remove();    
                    if(editglobCombination == '')
                    {
                        $("#combination_table").hide();
                        $("#finalSubmitBtn").hide();
                    }
                },
                error: function(response) {
                    console.log("error"+response);
                }
        });
    }
    else
    {
        var checkval=","+globalval+",";
        editglobalids = editglobalids.replace(checkval, "");

        var checkCombinationName=","+combination+",";
        editglobCombination = editglobCombination.replace(checkCombinationName, "");


        $('#tr_'+globalval).remove();    
        if(editglobCombination == '')
        {
            $("#combination_table").hide();
            $("#finalSubmitBtn").hide();
        }
    }
    
}

function updateProductInfo()
{
    clrmsg();
    iziToast.destroy();
    
    var product_id=$("#product_id").val();
    var position_status = $("#position_status").val();
   
    
     if(position_status == 0)
    {
       $("#position_status-error").html('Required field!');
       $("#position_status").focus();
        return;
    }
   
    
    
    
    
    var allIds=editglobalids.replace(/,+$/,'');
    allIds=allIds.substr(1);
//    alert(allIds);
	var allArr=allIds.split(',,');
    var  name_array="", info_array="", header_array="";
    for(var i=0;i<allArr.length; i++)
    {
        
        name_array+=$("#name_array_"+allArr[i]).val()+",";
        info_array+=$("#info_array_"+allArr[i]).val()+",";
        header_array+=$("#header_array_"+allArr[i]).val()+",";
        
        //return;
    }
    
    $.ajax({
            type: "POST",
            url: base_url + "ProductManagement/updateProductInfo",
            data: {
                   product_id:product_id,
                   position_status:position_status,
                   header_array:header_array,
                   name_array:name_array,
                   info_array:info_array,
                  
                   },
            success: function(response) {
                console.log(response);
                var res = JSON.parse(response);  
//                alert(res.Stat);
                if(res.stat == 1)
                {
                    iziToast.success({
                                    title: 'Success',
                                    message: res.msg
                                });
                }
                else
                {
                    iziToast.error({
                                    title: 'Error',
                                    message: res.msg
                                });
                }
            },
            error: function(response) {
                console.log("error "+response);
            }
    });
    
}

function updateinformation(id,information_id)
{
    var name=$("#name_array_"+id).val();
    var info=$("#info_array_"+id).val();
    $.ajax({
            type: "POST",
            url: base_url + "ProductManagement/updateProductInfoSingle",
            data: {
                   information_id:information_id,
                   name:name,
                   info:info
                },
            success: function(response) {
                console.log(response);
                var res = JSON.parse(response);  
//                alert(res.Stat);
                if(res.stat == 200)
                {
                    iziToast.success({
                                    title: 'Success',
                                    message: res.msg
                                });
                }
                else
                {
                    iziToast.error({
                                    title: 'Error',
                                    message: res.msg
                                });
                }
            },
            error: function(response) {
                console.log("error "+response);
            }
    });
}







