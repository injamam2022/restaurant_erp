var base_url = $("#base_url").val();
var GlobId="";
var commentsArry = ['Less Spicy','Without Gravy','More Spicy','Normal','Deep Fry','Dry'];

function clrmsg()
{
    $("#role_name-error").html('');
    $("#edit_role_name-error").html('');
    $("#addmsg").html('');
    $("#editmsg").html('');
    
}
function changeType(value){
    console.log(value)
    if(value === 'Other'){
        $("#comments").removeClass("d-none");
    }else{
        $("#comments").addClass("d-none");
    }
}

function priceChange(value,stat){
    
    if(stat == 1){
        var name="food";
        var food_id = $("#food_id_"+name).val();
        var size_id = 1;
        var quantity = $("#quantity_"+name).val();
    }else{
        var name="drink";
        var food_arr = $("#food_id_"+name).val().split(",");
        var food_id = food_arr[0];
        var size_id = food_arr[1];
        var quantity = $("#quantity_"+name).val();
    }
   
    if(size_id =="" || food_id == ""){
        return;
    }

    $.ajax({
        type: "POST",
        url: base_url+"TableManagement/price_get",
        data: {
            food_price:{
                food_id:food_id,
                size_id:size_id
            }
        },
        success: function(response) {
            var res= JSON.parse(response);
            if(res.stat === 200){
                $("#price_"+name).val(res.all_list[0].selling_price);
                $("#sub_total_"+name).val(parseFloat(res.all_list[0].selling_price * quantity).toFixed(2));
                addItems(stat)
            }else{
                swal({
                    title: 'Error',
                    text: 'Size not available',
                    type: 'error',
                    buttonsStyling: false,
                    confirmButtonClass: 'btn btn-light',
                    background: 'rgba(0, 0, 0, 0.96)'
                });

                $("#price_"+name).val('0.00');
                $("#sub_total_"+name).val('0.00');
                $("#size_id_"+name).val('');
                //$(".select2all").select2();
            }

        },
        error: function(response) {
            alert("error"+response);
        }
    })
}

function addItems(stat){
    if(stat == 1){
        var name="food";
        var food_id = $("#food_id_"+name).val();
        var size_id = 1;
        var quantity = $("#quantity_"+name).val();
        var food_comments = $("#comments_food").val();
        var food_unit_price = $("#price_"+name).val();
        var sub_total = $("#sub_total_"+name).val();
        var food_array=$("#food_id_food option:selected").text().split("(");
        var food_information= food_array[0];
    }else{
        var name="drink";
        var food_arr = $("#food_id_"+name).val().split(",");
        var food_id = food_arr[0];
        var size_id = food_arr[1];
        var quantity = $("#quantity_"+name).val();
        var food_unit_price = $("#price_"+name).val();
        var sub_total = $("#sub_total_"+name).val();
        var food_array=$("#food_id_drink option:selected").text().split("(");
        var size_name = $("#size_id_drink option:selected").text();
        food_information = `${food_array[0]} ${size_name}`
    } 
    var order_id = $("#order_id").val();
    var table_id = $("#table_id").val();

    if(size_id =="" || food_id == ""){
        return;
    }
    $.ajax({
        type: "POST",
        url: base_url+"TableManagement/add_item",
        data: {
            order_details:{
                food_id,
                size_id,
                quantity,
                food_information,
                food_comments,
                food_unit_price,
                sub_total,
                order_id
            }
                
        },
        success: function(response) {
            var res= JSON.parse(response);
            if(res.stat == 200){
                ajaxTableFunction(table_id);
                swal({
                    title: 'Added',
                    text: 'Added Successfully',
                    type: 'success',
                    buttonsStyling: false,
                    confirmButtonClass: 'btn btn-light',
                    background: 'rgba(0, 0, 0, 0.96)'
                });
            }else{
                swal({
                    title: 'Error',
                    text: 'Something went wrong',
                    type: 'error',
                    buttonsStyling: false,
                    confirmButtonClass: 'btn btn-light',
                    background: 'rgba(0, 0, 0, 0.96)'
                });
            }
            $("#food_id_"+name).val('');
            $("#size_id_"+name).val('');

        },
        error: function(response) {
            alert("error"+response);
        }
    })
}

function updateQuantity(quantity,order_details_id,food_unit_price){
    var table_id = $("#table_id").val();
    $.ajax({
        type: "POST",
        url: base_url+"TableManagement/update_item",
        data: {
            order_details:{
                order_details_id,
                quantity,
                sub_total:(parseFloat(food_unit_price)*parseFloat(quantity)).toFixed(2),
            },where:{
                order_details_id
            }
                
        },
        success: function(response) {
            var res= JSON.parse(response);
            if(res.stat == 200){
                ajaxTableFunction(table_id);
            }

        },
        error: function(response) {
            alert("error"+response);
        }
    })
}

function updateComments(food_comments,order_details_id){
    var table_id = $("#table_id").val();
    if(food_comments == ""){
        return;
    }
    $.ajax({
        type: "POST",
        url: base_url+"TableManagement/update_comments",
        data: {
            order_details:{
                order_details_id,
                food_comments,
            },where:{
                order_details_id
            }
                
        },
        success: function(response) {
            var res= JSON.parse(response);
            if(res.stat == 200){
                swal({
                    title: 'Updated',
                    text: 'Comments Updated Successfully',
                    type: 'success',
                    buttonsStyling: false,
                    confirmButtonClass: 'btn btn-light',
                    background: 'rgba(0, 0, 0, 0.96)'
                });
                ajaxTableFunction(table_id);
            }

        },
        error: function(response) {
            alert("error"+response);
        }
    })
}

function deleteItem(order_details_id){
    var table_id = $("#table_id").val();
    swal({
        title: 'Are you sure?',
        text: 'You will not be able to recover this imaginary file!',
        type: 'warning',
        showCancelButton: true,
        buttonsStyling: false,
        confirmButtonClass: 'btn btn-succes',
        confirmButtonText: 'Yes, remove it!',
        cancelButtonClass: 'btn btn-light',
        background: 'rgba(0, 0, 0, 0.96)'
    }).then(function(){
        $.ajax({
            type: "POST",
            url: base_url+"TableManagement/delete_item",
            data: {
                order_details:{
                    order_details_id,
                },where:{
                    order_details_id
                }
            },
            success: function(response) {
                var res= JSON.parse(response);
                if(res.stat == 200){
                    ajaxTableFunction(table_id);
                }
    
            },
            error: function(response) {
                alert("error"+response);
            }
        })
    } );
}



function contentData(data){

    if(data.length === 0){
        return;
    }
    
    var drinkData = data.order_sub_data.filter((item) => item.category_id == 2);
    var foodData = data.order_sub_data.filter((item) => item.category_id != 2);
    var content="";
    var content2="";

    if(drinkData.length == 0){
        content2 = `<p style="font-size:15px">No data found</p>`;
    }else{
        let drinkQty=0;
        for(var i=0;i<drinkData.length;i++){
        drinkQty+=parseInt(drinkData[i].quantity);
        content2 += 
        `<tr id="row_${drinkData[i].order_details_id}">
        <td>${parseInt(i)+1}</td>
        <td>${drinkData[i].food_information}</td>
        <td>
        <input class="form-control" type="number" min="1" max="100" style="width:75px;" placeholder="0" value="${drinkData[i].quantity}" 
        onchange="updateQuantity(this.value,'${drinkData[i].order_details_id}',${drinkData[i].food_unit_price})"/></td>
        <td>${drinkData[i].food_unit_price}</td>
        <td>${drinkData[i].sub_total}</td>
        <td> 
            <button  type="button" class="btn btn-danger" onclick="deleteItem(${drinkData[i].order_details_id})"><i style="font-size:24px" class="fa">&#xf014;</i></button>
        </td>
        </tr>`;
        }
        content2+=`
         <tr>
            <td></td>
            <td>Sub total item</td>
            <td>${drinkQty}</td>
            <td></td>
            <td>${data.drinks_total.toFixed(2)}</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>Total</td>
            <td></td>
            <td>${data.drinks_total.toFixed(2)}</td>
            <td></td>
            <td></td>
        </tr>`
    }
    if(foodData.length == 0){
        content = `<p style="font-size:15px">No data found</p>`;
    }else{
    let foodQty=0;
    for(var i=0;i<foodData.length;i++){
        foodQty+=parseInt(foodData[i].quantity);
        content+=
        `<tr id="row_${foodData[i].order_details_id}">
            <td>${parseInt(i)+1}</td>
            <td>${foodData[i].food_information}</td>
            <td>
            <input class="form-control" type="number" min="1" max="100" style="width:75px;" placeholder="0" value="${foodData[i].quantity}"
             onchange="updateQuantity(this.value,'${foodData[i].order_details_id}',${foodData[i].food_unit_price})"/></td>
            <td>${foodData[i].food_unit_price}</td>
            <td>${foodData[i].sub_total}</td>
            <td> 
            <select class="form-control" onchange="updateComments(this.value,'${foodData[i].order_details_id}')">
                <option value="">Comments</option>
                ${commentsArry.map((item)=> 
                    `<option ${item == foodData[i].food_comments ? 'selected':''} value="${item}">${item}</option>`)
                }
            </select>
            </td>
            <td> 
                <button  type="button" class="btn btn-danger" onclick="deleteItem(${foodData[i].order_details_id})"><i style="font-size:24px" class="fa">&#xf014;</i></button>
            </td>
        </tr>`;
    }
    content+=
    ` <tr>
        <td></td>
        <td>Sub total item</td>
        <td>${foodQty}</td>
        <td></td>
        <td>${data.food_total.toFixed(2)}</td>
        <td></td>
         <td></td>
    </tr>
    <tr>
        <td></td>
        <td>@2.50% ON</td>
        <td>CGST</td>
        <td></td>
        <td>${(data.food_gst/2).toFixed(2)}</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td>@2.50% ON</td>
        <td>SGST</td>
        <td></td>
        <td>${(data.food_gst/2).toFixed(2)}</td>
        <td></td>
         <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td>Total Gst</td>
        <td></td>
        <td>${data.food_gst.toFixed(2)}</td>
        <td></td>
         <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td>Total</td>
        <td></td>
        <td>${data.food_total_with_gst.toFixed(2)}</td>
        <td></td>
         <td></td>
    </tr>`;
    }
    $("#food_content").html(content);
    $("#drink_content").html(content2);
}
function idToShortURL(n)  
{ 
  
    // Map to store 62 possible characters 
    let map = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"; 
    let shorturl = []; 
  
    // Convert given integer id to a base 62 number 
    while (n)  
    { 
        // use above map to store actual character 
        // in short url 
        shorturl.push(map[n % 62]); 
        n = Math.floor(n / 62); 
    } 
  
    // Reverse shortURL to complete base conversion 
    shorturl.reverse(); 
    return shorturl.join(""); 
} 
function finalSubmitOrder(){
    var payment_id = $("#payment_id").val();
    var status_id = $("#status_id").val();
    var order_comments = $("#order_comments").val();
    var order_id = $("#order_id").val();
    var table_id = $("#table_id").val();
    var order_only_date = $("#order_only_date").val();

    if(payment_id == "0"){
        $("#payment_error").html('Please Select Payment Mode');
        setTimeout(() => {
            $("#payment_error").html('');
          }, "3000");
        
        return;
    }

    if(payment_id == "7"){
        var splitPaymentId1 =  $("#splitPaymentId1").val();
        var splitPaymentId2 = $("#splitPaymentId2").val();
        var splitPaymentAmount1 = $("#splitPaymentAmount1").val();
        var splitPaymentAmount2 = $("#splitPaymentAmount2").val();

        var splitPayment = [{
            payment_id:splitPaymentId1,
            collection_amount:splitPaymentAmount1,
            order_id,
            created_by:order_only_date
        },
        {
            payment_id:splitPaymentId2,
            collection_amount:splitPaymentAmount2,
            order_id,
            created_by:order_only_date
        }
        ];
        if(splitPaymentId1 == "0" || splitPaymentId2 == "0" ||  splitPaymentAmount1 == "0" ||  splitPaymentAmount2 == "0"){
            swal({
                title: 'Error',
                text: 'Please select and enter all the collection amount',
                type: 'error',
                buttonsStyling: false,
                confirmButtonClass: 'btn btn-light',
                background: 'rgba(0, 0, 0, 0.96)'
            });
            return;
        }
        
        if(splitPaymentId1 == splitPaymentId2){
            swal({
                title: 'Error',
                text: 'Both payment types are same',
                type: 'error',
                buttonsStyling: false,
                confirmButtonClass: 'btn btn-light',
                background: 'rgba(0, 0, 0, 0.96)'
            });
            return;
        }

        if(parseFloat(finalSumTotal) != parseFloat(splitPaymentAmount1)+parseFloat(splitPaymentAmount2)){
            swal({
                title: 'Error',
                text: 'Collection Amount Missmatch',
                type: 'error',
                buttonsStyling: false,
                confirmButtonClass: 'btn btn-light',
                background: 'rgba(0, 0, 0, 0.96)'
            });
            return;
        }
    }
    $.ajax({
        type: "POST",
        url: base_url+"TableManagement/finalSubmitOrder",
        data: {
            table_id,
            order_id,
            payment_id,
            status_id,
            order_comments,
            order_only_date,
            splitPayment
        },
        beforeSend: function() {
            $("#finalSubmit").attr('disabled','disabled').html('Please Wait <img id="loading-image" style="width:19px;" src="https://vgs.sitslive.com/images/inprogress.gif" />');
         },
        success: function(response) {
            var res = JSON.parse(response);
           if(res.stat ==200){
            if(status_id == 3){
                location.reload();
            }else{
                window.location.href = base_url +"OrderMangement/viewinvoice/" +idToShortURL(order_id);
            }
           }
        },
        error: function(response) {
            alert("error"+response);
            $("#finalSubmit").attr('enabled','enabled').html('Submit');
        }
    })

}
var finalSumTotal=0;
function ajaxTableFunction(table_id){
    $.ajax({
        type: "POST",
        url: base_url+"TableManagement/table_get",
        data: {table_id},
        success: function(response) {
            var res = JSON.parse(response);
            finalSumTotal = res.grand_total.toFixed(2);
            $("#food_total").html(res.food_total.toFixed(2));
            $("#food_total_with_gst").html(res.food_total_with_gst.toFixed(2));
            $("#food_gst").html(res.food_gst.toFixed(2));
            $("#drink_total").html(res.drinks_total.toFixed(2));
            $("#drinks_sub_total").html(res.drinks_sub_total.toFixed(2));
            $("#order_comments").val(res.order_data[0]['order_comments']);
            if(res.order_data[0]['discount'] == 0){
                $("#discount").html(res.order_data[0]['discount']);
            }else{
                $("#discount").html(res.order_data[0]['discount']);
            }

            if(res.order_data[0]['discount_percentage'] == 0){
                $("#discount_food").html('0.00');
            }else{
                $("#discount_food").html(((res.food_total * res.order_data[0]['discount_percentage'])/100).toFixed(2));
            }

            if(res.order_data[0]['discount_percentage_drink'] == 0){
                $("#discount_drink").html('0.00');
            }else{
                $("#discount_drink").html(((res.drinks_sub_total * res.order_data[0]['discount_percentage_drink'])/100).toFixed(2));
            }
            
            if(res.order_data[0]['payment_id'] == 7){
                $(".splitPayment").removeClass('d-none');
                $("#splitPaymentId1").val(res.order_collection_data[0].payment_id);
                $("#splitPaymentId2").val(res.order_collection_data[1].payment_id);
                $("#splitPaymentAmount1").val(res.order_collection_data[0].collection_amount);
                $("#splitPaymentAmount2").val(res.order_collection_data[1].collection_amount);
            }else{
                $(".splitPayment").addClass('d-none');
                $("#splitPaymentId1").val('');
                $("#splitPaymentId2").val('');
                $("#splitPaymentAmount1").val(0);
                $("#splitPaymentAmount2").val(0);
            }
            
            $("#grand_total").html(res.grand_total.toFixed(2));
            $("#order_comments").html(res.order_comments);
            $("#payment_id").val(res?.order_data[0]['payment_id']);
            $("#status_id").val(res?.order_data[0]['status_id']);
            $("#order_id").val(res?.order_data[0]['order_id']);
            $("#table_id").val(res?.order_data[0]['table_id']);
            $("#discount_percentage").val(res?.order_data[0]['discount_percentage']);
            $("#discount_percentage_drink").val(res?.order_data[0]['discount_percentage_drink']);
            if(res.order_sub_data.length > 0){
                $("#invoice_url").attr('href',base_url +"OrderMangement/viewinvoice/" +idToShortURL(res?.order_data[0]['order_id']));
                $("#invoice_url").attr('target','_blank').removeClass('isDisabled');

                $("#kitchen_url").attr('href',base_url +"OrderMangement/viewKitcheninvoice/" +idToShortURL(res?.order_data[0]['order_id']));
                $("#kitchen_url").attr('target','_blank').removeClass('isDisabled');

                $("#paymentCollapse").removeClass('isDisabled');

            }else{
                $("#invoice_url").attr('href','javascript:void(0)');
                $("#invoice_url").removeAttr('target','_blank').addClass('isDisabled');

                $("#kitchen_url").attr('href','javascript:void(0)');
                $("#kitchen_url").removeAttr('target','_blank').addClass('isDisabled');

                $("#paymentCollapse").addClass('isDisabled');
            }
                
            //$(".select2all").select2();
            contentData(res)

        },
        error: function(response) {
            alert("error"+response);
        }
    })
}

function tableClick(table_id,table_name,table_status){
    contentData([]);
    if(table_status == "deactive"){
        $(".modal-title").html(table_name);
        ajaxTableFunction(table_id);
        $("#table-modal").modal('show');
        $("#food_id_food").val('');
        $("#food_id_drink").val('');
        $("#size_id_drink").val('');
    }else{
        swal({
            title: 'Are you sure?',
            text: 'You will not be able to recover this imaginary file!',
            type: 'warning',
            showCancelButton: true,
            buttonsStyling: false,
            confirmButtonClass: 'btn btn-succes',
            confirmButtonText: 'Yes, book it!',
            cancelButtonClass: 'btn btn-light',
            background: 'rgba(0, 0, 0, 0.96)'
        }).then(function(){
            $(".modal-title").html(table_name);
            $("#table_row_"+table_id).removeClass('active');
            $("#table_row_"+table_id).addClass("deactive");
            $("#food_id_food").val('');
            $("#food_id_drink").val('');
            $("#size_id_drink").val('');
            ajaxTableFunction(table_id);
            $("#table-modal").modal('show');
            
        } );     
    }
    
}


function deleteRole(roleId)
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
                                url: base_url+"Expense/delete",
                                data: {roleId:roleId},
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
                                           .row( $("#rowId_"+roleId).parents('tr') )
                                           .remove()
                                           .draw();


                                },
                                error: function(response) {

                                    alert("error"+response);
                                }
                        });         // submitting the form when user press yes
      } );
                        
}

function editRole(roleId)
{
    $("#myDynamicTable").html("");
    $.ajax({
            type: "POST",
            url: base_url + "Expense/SingleData",
//            dataType: "json",
            data: {
                roleId:roleId
            },
            success: function(response) {
                var res = JSON.parse(response);

                var myTable = document.getElementById('myDynamicTable');
                var table = document.createElement('table');
                var tblBody = document.createElement('tbody');
                var thead = document.createElement('thead');
                table.classList.add("table");
                
                table.appendChild(thead);
                let arrayThead = ["Id","Item Name","Price","Amount","Quantity"];
                var tr = document.createElement('tr');
                for(var j=0; j< arrayThead.length; j++) {
                    var th = document.createElement('th');
                    th.innerHTML = arrayThead[j];
                    tr.appendChild(th);
                }
                thead.appendChild(tr);
                var arr = res.child;
                for(var i = 0; i < arr.length; i++){
                  var tr = document.createElement('tr');
                  tblBody.appendChild(tr)
                  for(var j=0; j< Object.keys(arr[i]).length; j++) {
                        if(j == 1 || j == 2 || j == 4 || j == 8)
                            continue;
                      var td = document.createElement('td');
                    td.innerHTML = arr[i][Object.keys(arr[i])[j]];
                    tr.appendChild(td);
                  }
                }

                table.appendChild(tblBody);
                tblBody.appendChild(tr);
                myTable.appendChild(table);

                $("#edit_modal").modal("show");
            },
            error: function(response) {
                console.log(response);
            }
    });
    
}

function changeDiscount(discount_percentage){
    var payment_id = $("#payment_id").val();
    var status_id = $("#status_id").val();
    var discount_percentage = $("#discount_percentage").val();
    var discount_percentage_drink = $("#discount_percentage_drink").val();
    var order_comments = $("#order_comments").val();
    var order_id = $("#order_id").val();
    var table_id = $("#table_id").val();
    var order_only_date = $("#order_only_date").val();


    $.ajax({
        type: "POST",
        url: base_url+"TableManagement/finalSubmitOrder",
        data: {
            table_id,
            order_id,
            payment_id,
            status_id,
            discount_percentage,
            discount_percentage_drink,
            order_comments,
            order_only_date
        },
        beforeSend: function() {
            
         },
        success: function(response) {
            var res = JSON.parse(response);
           if(res.stat ==200){
                ajaxTableFunction(table_id);
           }
        },
        error: function(response) {
            alert("error"+response);
            $("#finalSubmit").attr('enabled','enabled').html('Submit');
        }
    })


}

function onlyNumberKey(evt) {
    // Only ASCII character in that range allowed
    let ASCIICode = (evt.which) ? evt.which : evt.keyCode
    if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
        return false;
    return true;
}

function cancelTable(){
    var table_id = $("#table_id").val();

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
                    url: base_url+"TableManagement/cancelTable",
                    data: {table_id:table_id},
                    success: function(response) {
                         swal({
                                title: 'Cancel Succesfully',
                                text: response.msg,
                                type: 'success',
                                buttonsStyling: false,
                                confirmButtonClass: 'btn btn-light',
                                background: 'rgba(0, 0, 0, 0.96)'
                            });

                        $("#table_row_"+table_id).removeClass('deactive').addClass('active');
                        $("#table-modal").modal('hide');
                    },
                    error: function(response) {
                        alert("error"+response);
                    }
            });         // submitting the form when user press yes
} );
}
function paymentType(payment_id,){
    if(payment_id == 7){
        $(".splitPayment").removeClass('d-none');
    }else{
        $(".splitPayment").addClass('d-none');
    }
}
