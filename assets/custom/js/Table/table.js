var base_url = $("#base_url").val();
var GlobId="";
var commentsArry = ['Less Spicy','Without Gravy','More Spicy','Normal','Deep Fry','Dry'];
var tableRequestSeq = 0;
var tableAjaxXhr = null;
var isTableDataLoading = false;

function showTableLoader()
{
    isTableDataLoading = true;
    $("#loader-modal").addClass("is-visible");
    $("#table-modal-content").addClass("is-loading");
}

function hideTableLoader()
{
    isTableDataLoading = false;
    $("#loader-modal").removeClass("is-visible");
    $("#table-modal-content").removeClass("is-loading");
    $(".section-loader").removeClass("is-visible");
}

function resetSelect2Field(selector, value)
{
    var $el = $(selector);
    if(!$el.length){
        return;
    }
    $el.val(value);
    if($el.data("select2")){
        $el.trigger("change.select2");
    }
}

function resetTableModal()
{
    finalSumTotal = 0;
    $("#food_content").html('<tr class="is-empty"><td class="order-empty" colspan="7">No data found</td></tr>');
    $("#drink_content").html('<tr class="is-empty"><td class="order-empty" colspan="6">No data found</td></tr>');
    $("#quantity_food").val(1);
    $("#quantity_drink").val(1);
    $("#price_food").val("");
    $("#price_drink").val("");
    $("#sub_total_food").val("");
    $("#sub_total_drink").val("");
    $("#comments_food").val("");
    $("#order_id").val("");
    $("#table_id").val("");
    $("#order_comments").val("");
    setDiscountSelect("#discount_percentage", 0);
    setDiscountSelect("#discount_percentage_drink", 0);
    $("#splitPaymentAmount1").val(0);
    $("#splitPaymentAmount2").val(0);
    $(".splitPayment").addClass("d-none");
    $("#food_total").html("0.00");
    $("#food_total_with_gst").html("0.00");
    $("#food_gst").html("0.00");
    $("#drinks_sub_total").html("0.00");
    $("#discount_food").html("0.00");
    $("#discount_drink").html("0.00");
    $("#drink_total").html("0.00");
    $("#discount").html("0.00");
    $("#grand_total").html("0.00");
    $("#header_grand_total").html("0.00");
    $("#invoice_url").attr("href","javascript:void(0)").removeAttr("target").addClass("isDisabled");
    $("#kitchen_url").attr("href","javascript:void(0)").removeAttr("target").addClass("isDisabled");
    $("#paymentCollapse").addClass("isDisabled");
    $("#payment_error").html("");
    resetSelect2Field("#food_id_food", "");
    resetSelect2Field("#food_id_drink", "");
    resetSelect2Field("#size_id_drink", "");
    resetSelect2Field("#payment_id", "0");
    resetSelect2Field("#status_id", "");
    resetSelect2Field("#splitPaymentId1", "0");
    resetSelect2Field("#splitPaymentId2", "0");
    setTakeAwayMode(false);
    showOrderItemSections();
    $(".section-loader").removeClass("is-visible");
}

function refreshOrderTabSelect2($panel)
{
    var $scope = $panel && $panel.length ? $panel : $("#table-modal");
    $scope.find(".select2all").each(function() {
        var $el = $(this);
        if($el.data("select2")){
            $el.select2("destroy");
        }
        $el.select2({
            dropdownParent: $el.parent(),
            width: "100%"
        });
    });
}

function isTakeAwayTable(table_name)
{
    return String(table_name || "").replace(/\s+/g, " ").trim().toLowerCase() === "take away";
}

function setTakeAwayMode(enabled)
{
    $("#table-modal").toggleClass("is-takeaway", !!enabled);
    if(enabled && $("#drink").hasClass("active")){
        activateOrderTab("food");
    }
}

function activateOrderTab(tabId)
{
    if(tabId === "drink" && $("#table-modal").hasClass("is-takeaway")){
        tabId = "food";
    }
    var $link = $('#table-modal a[href="#' + tabId + '"]');
    if($link.length && $.fn.tab){
        $link.tab("show");
        return;
    }
    $("#food, #drink, #comments").removeClass("show active");
    $("#" + tabId).addClass("show active");
    $("#table-modal .order-tabs .nav-link").removeClass("active").attr("aria-selected", "false");
    $link.addClass("active").attr("aria-selected", "true");
}

function showOrderItemSections()
{
    activateOrderTab("food");
}

function setDiscountSelect(selector, value)
{
    var pct = parseInt(value, 10);
    if(isNaN(pct) || pct < 0){
        pct = 0;
    }
    if(pct > 50){
        pct = 50;
    }
    $(selector).val(String(pct));
}

function openTableModal(table_id, table_name)
{
    resetTableModal();
    $("#table_id").val(table_id);
    $(".modal-title").html(table_name);
    setTakeAwayMode(isTakeAwayTable(table_name));
    $(".table-wrapper .table").removeClass("loading");
    $("#table_row_"+table_id).addClass("loading");
    ajaxTableFunction(table_id);
    $("#table-modal").modal("show");
}

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
    if(stat == 2 && $("#table-modal").hasClass("is-takeaway")){
        return;
    }
    
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

    if(size_id =="" || food_id == "" || order_id == ""){
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
        beforeSend: function() {
            showTableLoader();
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
                hideTableLoader();
                swal({
                    title: 'Error',
                    text: 'Something went wrong',
                    type: 'error',
                    buttonsStyling: false,
                    confirmButtonClass: 'btn btn-light',
                    background: 'rgba(0, 0, 0, 0.96)'
                });
            }
            resetSelect2Field("#food_id_"+name, "");
            resetSelect2Field("#size_id_"+name, "");

        },
        error: function(response) {
            hideTableLoader();
            alert("error"+response);
        }
    })
}

function quantitySelectHtml(quantity, order_details_id, food_unit_price)
{
    var qty = parseInt(quantity, 10);
    if(isNaN(qty) || qty < 1){
        qty = 1;
    }
    if(qty > 50){
        qty = 50;
    }
    var options = "";
    for(var n = 1; n <= 50; n++){
        options += `<option value="${n}"${n === qty ? " selected" : ""}>${n}</option>`;
    }
    return `<select class="form-control order-qty" onchange="updateQuantity(this.value,'${order_details_id}',${food_unit_price})">${options}</select>`;
}

function updateQuantity(quantity,order_details_id,food_unit_price){
    quantity = parseInt(quantity, 10);
    if(isNaN(quantity) || quantity < 1){
        quantity = 1;
    }
    if(quantity > 50){
        quantity = 50;
    }
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
        beforeSend: function() {
            showTableLoader();
        },
        success: function(response) {
            var res= JSON.parse(response);
            if(res.stat == 200){
                ajaxTableFunction(table_id);
            }else{
                hideTableLoader();
            }

        },
        error: function(response) {
            hideTableLoader();
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
        beforeSend: function() {
            showTableLoader();
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
            }else{
                hideTableLoader();
            }

        },
        error: function(response) {
            hideTableLoader();
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
            beforeSend: function() {
                showTableLoader();
            },
            success: function(response) {
                var res= JSON.parse(response);
                if(res.stat == 200){
                    ajaxTableFunction(table_id);
                }else{
                    hideTableLoader();
                }
    
            },
            error: function(response) {
                hideTableLoader();
                alert("error"+response);
            }
        })
    } );
}



function contentData(data){

    if(!data || !data.order_sub_data || data.order_sub_data.length === 0){
        $("#food_content").html('<tr class="is-empty"><td class="order-empty" colspan="7">No data found</td></tr>');
        $("#drink_content").html('<tr class="is-empty"><td class="order-empty" colspan="6">No data found</td></tr>');
        return;
    }
    
    var drinkData = data.order_sub_data.filter((item) => item.category_id == 2);
    var foodData = data.order_sub_data.filter((item) => item.category_id != 2);
    var content="";
    var content2="";

    if(drinkData.length == 0){
        content2 = `<tr class="is-empty"><td class="order-empty" colspan="6">No data found</td></tr>`;
    }else{
        let drinkQty=0;
        for(var i=0;i<drinkData.length;i++){
        drinkQty+=parseInt(drinkData[i].quantity);
        content2 += 
        `<tr id="row_${drinkData[i].order_details_id}">
        <td data-label="No.">${parseInt(i)+1}</td>
        <td data-label="Drink">${drinkData[i].food_information}</td>
        <td data-label="Qty">
        ${quantitySelectHtml(drinkData[i].quantity, drinkData[i].order_details_id, drinkData[i].food_unit_price)}</td>
        <td data-label="Price">${drinkData[i].food_unit_price}</td>
        <td data-label="Subtotal">${drinkData[i].sub_total}</td>
        <td data-label="Action"> 
            <button type="button" class="btn btn-danger order-delete" onclick="deleteItem(${drinkData[i].order_details_id})"><i class="fa">&#xf014;</i></button>
        </td>
        </tr>`;
        }
        content2+=`
         <tr class="is-summary">
            <td class="cell-skip"></td>
            <td class="summary-label">Sub total item (${drinkQty})</td>
            <td class="cell-skip">${drinkQty}</td>
            <td class="cell-skip"></td>
            <td class="summary-value">${Number(data.drinks_total || 0).toFixed(2)}</td>
            <td class="cell-skip"></td>
        </tr>
        <tr class="is-summary">
            <td class="cell-skip"></td>
            <td class="cell-skip"></td>
            <td class="summary-label">Total</td>
            <td class="cell-skip"></td>
            <td class="summary-value">${Number(data.drinks_total || 0).toFixed(2)}</td>
            <td class="cell-skip"></td>
        </tr>`
    }
    if(foodData.length == 0){
        content = `<tr class="is-empty"><td class="order-empty" colspan="7">No data found</td></tr>`;
    }else{
    let foodQty=0;
    for(var i=0;i<foodData.length;i++){
        foodQty+=parseInt(foodData[i].quantity);
        content+=
        `<tr id="row_${foodData[i].order_details_id}">
            <td data-label="No.">${parseInt(i)+1}</td>
            <td data-label="Food">${foodData[i].food_information}</td>
            <td data-label="Qty">
            ${quantitySelectHtml(foodData[i].quantity, foodData[i].order_details_id, foodData[i].food_unit_price)}</td>
            <td data-label="Price">${foodData[i].food_unit_price}</td>
            <td data-label="Subtotal">${foodData[i].sub_total}</td>
            <td data-label="Comments"> 
            <select class="form-control order-comment" onchange="updateComments(this.value,'${foodData[i].order_details_id}')">
                <option value="">Comments</option>
                ${commentsArry.map((item)=> 
                    `<option ${item == foodData[i].food_comments ? 'selected':''} value="${item}">${item}</option>`)
                }
            </select>
            </td>
            <td data-label="Action"> 
                <button type="button" class="btn btn-danger order-delete" onclick="deleteItem(${foodData[i].order_details_id})"><i class="fa">&#xf014;</i></button>
            </td>
        </tr>`;
    }
    content+=
    ` <tr class="is-summary">
        <td class="cell-skip"></td>
        <td class="summary-label">Sub total item (${foodQty})</td>
        <td class="cell-skip">${foodQty}</td>
        <td class="cell-skip"></td>
        <td class="summary-value">${Number(data.food_total || 0).toFixed(2)}</td>
        <td class="cell-skip"></td>
         <td class="cell-skip"></td>
    </tr>
    <tr class="is-summary">
        <td class="cell-skip"></td>
        <td class="summary-label">CGST @2.50%</td>
        <td class="cell-skip">CGST</td>
        <td class="cell-skip"></td>
        <td class="summary-value">${(Number(data.food_gst || 0)/2).toFixed(2)}</td>
        <td class="cell-skip"></td>
        <td class="cell-skip"></td>
    </tr>
    <tr class="is-summary">
        <td class="cell-skip"></td>
        <td class="summary-label">SGST @2.50%</td>
        <td class="cell-skip">SGST</td>
        <td class="cell-skip"></td>
        <td class="summary-value">${(Number(data.food_gst || 0)/2).toFixed(2)}</td>
        <td class="cell-skip"></td>
         <td class="cell-skip"></td>
    </tr>
    <tr class="is-summary">
        <td class="cell-skip"></td>
        <td class="cell-skip"></td>
        <td class="summary-label">Total Gst</td>
        <td class="cell-skip"></td>
        <td class="summary-value">${Number(data.food_gst || 0).toFixed(2)}</td>
        <td class="cell-skip"></td>
         <td class="cell-skip"></td>
    </tr>
    <tr class="is-summary">
        <td class="cell-skip"></td>
        <td class="cell-skip"></td>
        <td class="summary-label">Total</td>
        <td class="cell-skip"></td>
        <td class="summary-value">${Number(data.food_total_with_gst || 0).toFixed(2)}</td>
        <td class="cell-skip"></td>
         <td class="cell-skip"></td>
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
    var requestId = ++tableRequestSeq;
    if(tableAjaxXhr && tableAjaxXhr.readyState !== 4){
        tableAjaxXhr.abort();
    }
    showTableLoader();
    tableAjaxXhr = $.ajax({
        type: "POST",
        url: base_url+"TableManagement/table_get",
        data: {table_id},
        success: function(response) {
            if(requestId !== tableRequestSeq){
                return;
            }
            var res = JSON.parse(response);
            if(!res || !res.order_data || !res.order_data[0]){
                contentData({order_sub_data: []});
                return;
            }
            finalSumTotal = Number(res.grand_total || 0).toFixed(2);
            $("#food_total").html(Number(res.food_total || 0).toFixed(2));
            $("#food_total_with_gst").html(Number(res.food_total_with_gst || 0).toFixed(2));
            $("#food_gst").html(Number(res.food_gst || 0).toFixed(2));
            $("#drink_total").html(Number(res.drinks_total || 0).toFixed(2));
            $("#drinks_sub_total").html(Number(res.drinks_sub_total || 0).toFixed(2));
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
                resetSelect2Field("#splitPaymentId1", res.order_collection_data[0].payment_id);
                resetSelect2Field("#splitPaymentId2", res.order_collection_data[1].payment_id);
                $("#splitPaymentAmount1").val(res.order_collection_data[0].collection_amount);
                $("#splitPaymentAmount2").val(res.order_collection_data[1].collection_amount);
            }else{
                $(".splitPayment").addClass('d-none');
                resetSelect2Field("#splitPaymentId1", "0");
                resetSelect2Field("#splitPaymentId2", "0");
                $("#splitPaymentAmount1").val(0);
                $("#splitPaymentAmount2").val(0);
            }
            
            $("#grand_total").html(Number(res.grand_total || 0).toFixed(2));
            $("#header_grand_total").html(Number(res.grand_total || 0).toFixed(2));
            $("#order_comments").html(res.order_comments);
            resetSelect2Field("#payment_id", res.order_data[0]['payment_id']);
            resetSelect2Field("#status_id", res.order_data[0]['status_id']);
            $("#order_id").val(res.order_data[0]['order_id']);
            $("#table_id").val(res.order_data[0]['table_id']);
            setDiscountSelect("#discount_percentage", res.order_data[0]['discount_percentage']);
            setDiscountSelect("#discount_percentage_drink", res.order_data[0]['discount_percentage_drink']);
            if(res.order_sub_data && res.order_sub_data.length > 0){
                $("#invoice_url").attr('href',base_url +"OrderMangement/viewinvoice/" +idToShortURL(res.order_data[0]['order_id']));
                $("#invoice_url").attr('target','_blank').removeClass('isDisabled');

                $("#kitchen_url").attr('href',base_url +"OrderMangement/viewKitcheninvoice/" +idToShortURL(res.order_data[0]['order_id']));
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
        error: function(response, status) {
            if(status === "abort" || requestId !== tableRequestSeq){
                return;
            }
            alert("error"+response);
        },
        complete: function(xhr, status) {
            if(status === "abort" || requestId !== tableRequestSeq){
                return;
            }
            hideTableLoader();
            $("#table_row_"+table_id).removeClass("loading");
            refreshOrderTabSelect2($("#table-modal .tab-pane.active"));
        }
    })
}

function tableClick(table_id,table_name,table_status){
    if(table_status == "deactive"){
        openTableModal(table_id, table_name);
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
            $("#table_row_"+table_id).removeClass('active');
            $("#table_row_"+table_id).addClass("deactive");
            openTableModal(table_id, table_name);
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
            showTableLoader();
         },
        success: function(response) {
            var res = JSON.parse(response);
           if(res.stat ==200){
                ajaxTableFunction(table_id);
           }else{
                hideTableLoader();
           }
        },
        error: function(response) {
            hideTableLoader();
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

$(document).ready(function() {
    $("#table-modal").on("shown.bs.modal", function() {
        refreshOrderTabSelect2($("#table-modal .tab-pane.active"));
    });

    $("#table-modal").on("hidden.bs.modal", function() {
        if(tableAjaxXhr && tableAjaxXhr.readyState !== 4){
            tableAjaxXhr.abort();
        }
        tableRequestSeq++;
        hideTableLoader();
        resetTableModal();
        $(".section-loader").removeClass("is-visible");
        $(".table-wrapper .table").removeClass("loading");
    });

    $("#table-modal").on("shown.bs.tab", "a[data-toggle='tab']", function(e) {
        var target = $(e.target).attr("href");
        var $panel = $(target);
        refreshOrderTabSelect2($panel);
        $panel.find(".section-loader").first().addClass("is-visible");
        if(isTableDataLoading){
            showTableLoader();
            return;
        }
        setTimeout(function() {
            $panel.find(".section-loader").first().removeClass("is-visible");
        }, 200);
    });
});
