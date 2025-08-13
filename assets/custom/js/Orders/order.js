var base_url = $("#base_url").val();
var file_url = $("#file_url").val();
var GlobId = "";
function idToShortURL(n) {
  // Map to store 62 possible characters
  let map = "abcdefghijklmnopqrstuvwxyzABCDEF";
  ("GHIJKLMNOPQRSTUVWXYZ0123456789");

  let shorturl = [];

  // Convert given integer id to a base 62 number
  while (n) {
    // use above map to store actual character
    // in short url
    shorturl.push(map[n % 62]);
    n = Math.floor(n / 62);
  }

  // Reverse shortURL to complete base conversion
  shorturl.reverse();

  return shorturl.join("");
}

// Function to get integer ID back from a short url
function shortURLtoID(shortURL) {
  let id = 0; // initialize result

  // A simple base conversion logic
  for (let i = 0; i < shortURL.length; i++) {
    if ("a" <= shortURL[i] && shortURL[i] <= "z")
      id = id * 62 + shortURL[i].charCodeAt(0) - "a".charCodeAt(0);
    if ("A" <= shortURL[i] && shortURL[i] <= "Z")
      id = id * 62 + shortURL[i].charCodeAt(0) - "A".charCodeAt(0) + 26;
    if ("0" <= shortURL[i] && shortURL[i] <= "9")
      id = id * 62 + shortURL[i].charCodeAt(0) - "0".charCodeAt(0) + 52;
  }
  return id;
}
var glob_order_id= 0;
function get_order_details(order_id) {
  $.ajax({
    type: "POST",
    url: base_url + "OrderMangement/get_single_order",
    data: {
      order_id: order_id,
    },
    success: function (response) {
      var res = JSON.parse(response);
      if (res.stat == 200) {
        var j = 0;

        var content = "";

        content += "<tr>";
        content += "<th>Item Name</th>";
        content += "<th>Unit price</th>";
        content += "<th>Quantity</th>";
        content += "<th>Subtotal</th>";

        content += "</tr>";
        var j = 1;
        for (var i = 0; i < res.all_list.length; i++) {
          content += "<tr>";
          content += "<td>" + res.all_list[i].food_information + "</td>";
          content += "<td>" + res.all_list[i].food_unit_price + "</td>";
          content += "<td>" + res.all_list[i].quantity + "</td>";
          content += "<td>" + res.all_list[i].sub_total + "</td>";
          content += "</tr>";
        }

        content += "<tr>";
        content += "<th></th>";
        content += "<th></th>";
        content += "<th></th>";
        content += "<th></th>";
        content += "<th></th>";
        content +=
          "<th><a target='_blank' href=" +
          base_url +
          "OrderMangement/viewinvoice/" +
          idToShortURL(order_id);
        content += ">View Invoice</a></th>";
        content += "</tr>";

        $("#modal_table").html(content);
        // $('#payment_id').find(":selected").val(res.all_list[0].payment_id);
        $('#payment_id').val(res.all_list[0].payment_id);
        glob_order_id=res.all_list[0].order_id;
        $("#exampleModalLong").modal("show");
      } else if (res.stat == 400) {
      }
    },
    error: function (response) {
      console.log(response);
    },
  });
}

function paymentModeChange(payment_id) {
  var payment_name = $('#payment_id :selected').text();
  $.ajax({
    type: "POST",
    url: base_url + "OrderMangement/update_payment",
    data: { order: {payment_id}, where:{order_id:glob_order_id}},
    success: function (response) {
      console.log(response);
      var res = JSON.parse(response);
      if(res.stat ==200){
        $("#payment_name_"+glob_order_id).html(payment_name);
        swal({
          title: 'Updated',
          text: 'Payment Updated Successfully',
          type: 'success',
          buttonsStyling: false,
          confirmButtonClass: 'btn btn-light',
          background: 'rgba(0, 0, 0, 0.96)'
      });
  
      }
      
    },
    error: function (response) {
      console.log(response);
    },
  });
}

function delete_order(order_id) {
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
      url: base_url + "OrderMangement/delete_order",
      data: {order_id:order_id },
      success: function (response) {
        //console.log(response);
        var res = JSON.parse(response);
        if(res.stat ==200){
          swal({
            title: 'Updated',
            text: 'Payment Updated Successfully',
            type: 'success',
            buttonsStyling: false,
            confirmButtonClass: 'btn btn-light',
            background: 'rgba(0, 0, 0, 0.96)'
        });
        var table = $('#data-table').DataTable();
        table
            .row( $("#rowId_"+order_id).parents('tr') )
            .remove()
            .draw();
        }
        
      },
      error: function (response) {
        console.log(response);
      },
    });
  } );
}

function downloadCsv() {
  var fliter_with_date_from = $("#fliter_with_date_from").val();
  var fliter_with_date_to = $("#fliter_with_date_to").val();
  if(fliter_with_date_from == '' && fliter_with_date_to == ''){
      swal({
        title: 'Warning',
        text: 'Please selecet start and end date',
        type: 'warning',
        buttonsStyling: false,
        confirmButtonClass: 'btn btn-light',
        background: 'rgba(0, 0, 0, 0.96)'
    });
    return;
  }
    $.ajax({
      type: "POST",
      url: base_url + "OrderMangement/exports_data",
      data: {fliter_with_date_from,fliter_with_date_to},
      success: function (response) {
        const res = JSON.parse(response);

        if(res.stat !=200){
          swal({
            title: 'Warning',
            text: 'No data found',
            type: 'warning',
            buttonsStyling: false,
            confirmButtonClass: 'btn btn-light',
            background: 'rgba(0, 0, 0, 0.96)'
        });
          return;
        }

        let data =[];
        for(var i=0;i<res.all_list.length;i++){
          data[i]=[
            res.all_list[i]?.order_only_date,
            res.all_list[i]?.food_cash_total,
            res.all_list[i]?.food_card_total,
            res.all_list[i]?.food_zomato_total,
            res.all_list[i]?.food_swiggy_total,
            res.all_list[i]?.food_upi_total,
            (parseFloat(res.all_list[i]?.food_cash_total) + parseFloat(res.all_list[i]?.food_card_total) + parseFloat(res.all_list[i]?.food_zomato_total) + parseFloat(res.all_list[i]?.food_swiggy_total)+parseFloat(res.all_list[i]?.food_upi_total)),
            res.all_list[i]?.drinks_cash_total,
            res.all_list[i]?.drinks_card_total,
            res.all_list[i]?.drinks_upi_total,
            res.all_list[i]?.total_drinks,
            res.all_list[i]?.total_cash_sale,
            res.all_list[i]?.total_card_sale,
            res.all_list[i]?.total_upi_sale,
            res.all_list[i]?.total_sale,
            (res.all_list[i]?.total_sale_gst/2).toFixed(2),
            (res.all_list[i]?.total_sale_gst/2).toFixed(2),
            res.all_list[i]?.total_sale_gst,
            res.all_list[i]?.total_discount,
            res.all_list[i]?.net_total_sale
          ];
        }
        let header = [['DATE', 'FOOD(CASH)','FOOD(CB)','ZOMATO','SWIGGY','FOOD(UPI)','FOOD(TOTAL)','DRINK(CASH)','DRINK(CB)','DRINK(UPI)','DRINK(TOTAL)',
          'CASH(TOTAL)','CB(TOTAL)','UPI(TOTAL)','TOTAL SALE','TOTAL CGST','TOTAL SGST','TOTAL GST','TOTAL DISCOUNT','NET SALE']];
          let rows = data ;
        rows = [...header,...rows];
        let csvContent = "data:text/csv;charset=utf-8,";
        rows.forEach(function(rowArray) {
            let row = rowArray.join(",");
            csvContent += row + "\r\n";
        });
        var encodedUri = encodeURI(csvContent);
        window.open(encodedUri);
      },
      error: function (response) {
        console.log(response);
      },
    });
}
