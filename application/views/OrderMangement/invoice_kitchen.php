
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Palki Restobar</title>
    <meta content="" name="descriptison" />
    <meta content="" name="keywords" />
    <style>
      /* body {
        width: 30%;
        margin: 0px auto;
        border: 1px solid #000;
        padding: 15px 5px;
        font-family: system-ui;
      }
      @media only screen and (max-width: 1024px) {
        body {
          width: 100%;
        }
      } */

      body {
        width: 100%;
        margin: 0px auto;
        padding: 15px 0px;
        font-family: system-ui;
      }

      @media only screen and (max-width: 1024px) {
        body {
          width: 100%;
        }
      }
        @media only screen and (max-width: 380px) {
        body {
          width: 100%;
        }
      }
        
        @media print {
  @page {
     size: 80mm 297mm;
     size: portrait; 
      
  }
            thead {display: table-row-group;}
}
    </style>
  </head>
  <?php 



$foodarray = array();
$drinksarray = array();


for($i=0;$i<count($order_invoice_details['order_details']);$i++){
    if($order_invoice_details['order_details'][$i]['size_id'] == 1){
        $foodarray[] =  $order_invoice_details['order_details'][$i];
    }
    else {
        $drinksarray[] =  $order_invoice_details['order_details'][$i];
    }
}


$order_time = explode(" ",$order_invoice_details[0]['order_date']);


?>
  <body style="text-align: center; font-size: 14px">
  <button onclick="printContent()" style="
    text-align: center;
    display: inline-block;
    cursor: pointer;
    margin-top: 1em;
    padding: .5em 1em;
    color: white;
    text-decoration: none;
    font-size: 25px;
    border-radius: 3px;
    transition: .3s;
    background: #2196F3;
    background-color: #2196F3;
    float:right;" 
    id="not_print">Print </button>
    <div class="logo">
      <!-- <img src="assets/img/logo2.png" style="width: 100px" /> -->
      <h1 style="font-size: 30px; color: #000">PALKI RESTOBAR</h1>
    </div>

    <h1 style="font-size: 20px; color: #000"><?=$order_invoice_details[0]['table_name']?></h1>

    <div class="table" style="width: 100%; padding-bottom: 15px">
      <table style="width: 100%">
        <thead>
          <tr>
            <th
              style="
                padding-bottom: 15px;
                border-bottom: 1px dashed #000;
                text-align: left;
              "
            >
              Item
            </th>
            <th style="padding-bottom: 15px; border-bottom: 1px dashed #000">
              Qty
            </th>
          </tr>
        </thead>
        <tbody>

        <?php for($m=0;$m<count($foodarray);$m++) { ?>

          <tr>
            <td style="padding-top: 5px; text-align: left; font-size: 20px">
            <?=$foodarray[$m]['food_information']; ?>
              <p style="margin: 0; color: red; font-size: 12px">
                Note:  <?=$foodarray[$m]['food_comments']; ?>
              </p>
            </td>
            <td style="padding-top: 5px; font-size: 18px"><?=$foodarray[$m]['kitchen_quantity']; ?></td>
          </tr>
          <?php } ?>

        </tbody>
      </table>
    </div>
    
  </body>
  <script src="<?php echo base_url('/assets/vendors/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
        <!-- Total Bill Table -->
         <script>
            function printContent(){
     
        $("#not_print").hide();
         window.print();      
       $("#not_print").show();
} 
         </script>
</html>
