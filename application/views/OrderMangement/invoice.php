
<!DOCTYPE html>
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
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Palki Restobar</title>
    <meta content="" name="descriptison" />
    <meta content="" name="keywords" />
    <style>
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
 
  <body style="text-align: center; font-size: 14px">
  <!-- <button onclick="printContent()" style="
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
    id="not_print">Print </button> -->
   <!-- Food Table -->
   <?php if($order_invoice_details[0]['food_total'] > 0) { ?> 


    <div class="logo">
      <img src="<?php echo base_url('assets/img/logo2.jpg') ?>" style="width: 100px" />
    </div>
    <div class="address" style="width: 100%; margin: 5px auto">
      <p style="font-size: 14px; font-weight: 600; color: #000; margin: 0">
        110, Eastern Metropolitan Bypass Link Rd, Garia Park, Baishnabghata
        Patuli Twp, Patuli, Kolkata, West Bengal 700084
      </p>
      <p style="font-size: 14px; font-weight: 600; color: #000; margin: 0">
        GSTIN: 19AAFFP2583C1Z9
      </p>
    </div>


    <h1 style="font-size: 20px; color: #000; margin:0;">TAX/BIll</h1>

     
    <div
      class="table"
      style="width: 100%; padding-bottom: 15px; border-bottom: 1px dashed #000; padding-bottom:0;">
      <table style="width: 100%">
        <tr>
          <td>No .   <?=$order_invoice_details[0]['bill_invoice_number']?></td>
         
          <td> <?=$order_invoice_details[0]['order_only_date']?></td>
        </tr>
      </table>
    </div>
   

    <div class="table" style="width: 100%; padding-bottom: 0px">
      <table style="width: 100%">
        <thead>
          <tr>
            <th
              style="
                padding-bottom: 0px;
                border-bottom: 1px dashed #000;
                text-align: left;
              "
            >
              Description
            </th>
            <th style="padding-bottom: 0px; border-bottom: 1px dashed #000">
              Qty
            </th>
            <th style="padding-bottom: 0px; border-bottom: 1px dashed #000">
              Rate
            </th>
            <th style="padding-bottom: 0px; border-bottom: 1px dashed #000">
              Amount
            </th>
          </tr>
        </thead>
        <tbody>

<?php 
$countdata = 0;
for($m=0;$m<count($foodarray);$m++) { 
  
  $countdata= $countdata+$foodarray[$m]['quantity'];
  ?>

           
<tr>
<td style="padding-top: 0px; text-align: left"><?=strtoupper($foodarray[$m]['food_information']); ?></td>
<td style="padding-top: 0px"><?=$foodarray[$m]['quantity']; ?></td>
<td style="padding-top: 0px"><?=$foodarray[$m]['food_unit_price']; ?></td>
<td style="padding-top: 0px"><?=$foodarray[$m]['sub_total']; ?></td>
</tr>
            

<?php } ?>

           <tr>
            <td style="padding-top: 0px; text-align: left">Sub-tot Item <?=count($foodarray)?></td>
            <td  style="padding-top:0px"><?=$countdata?></td>
            <td></td>
            <td  style="padding-top:0px;"><?=$order_invoice_details[0]['food_total']?></td>
          </tr>
          <?php if($order_invoice_details[0]['discount_percentage'] > 0) {?>
          <tr>
            <td style="padding-top: 0px; text-align: left">DISCOUNT(<?=$order_invoice_details[0]['discount_percentage'];?>%)</td>
            <td>ON <?php echo $order_invoice_details[0]['food_total'];?></td>
            <td></td>
            <td style="padding-top:0px;">
            <?php
              $dis = $order_invoice_details[0]['food_total'] * ($order_invoice_details[0]['discount_percentage']/100);
              echo "-".number_format((float)$dis, 2, '.', '');?>
            </td>
          </tr>
          <?php } ?>
          <tr>
            <td
              style="
                padding-top: 0px;
                text-align: left;
                border-top: 1px dashed #000;
              "
            >
              CGST
            </td>
            <td style="padding-top: 0px; border-top: 1px dashed #000">
              @2.50% ON
            </td>
            <td style="padding-top: 0px; border-top: 1px dashed #000">
              <?=$order_invoice_details[0]['food_total']?>
            </td>
            <td style="padding-top: 0px; border-top: 1px dashed #000">
            <?php echo number_format($order_invoice_details[0]['food_gst']/2,2)?>
            </td>
          </tr>
          <tr>
            <td style="padding-top: 0px; text-align: left">SGST</td>
            <td style="padding-top: 0px">@2.50% ON</td>
            <td style="padding-top: 0px"> <?=$order_invoice_details[0]['food_total']?></td>
            <td style="padding-top: 0px"><?php echo number_format($order_invoice_details[0]['food_gst']/2,2)?></td>
          </tr>
          <tr>
            <td colspan="3" style="padding-top: 0px; text-align: left">
              TOTAL GST
            </td>
            <td style="padding-top: 0px"><?=$order_invoice_details[0]['food_gst']?></td>
          </tr>
          <tr>
            <td colspan="4" style="padding-top: 0px; text-align: left">
              BL.TOT(Rounded)
            </td>
          </tr>
          <tr>
            <td
              colspan="3"
              style="
                padding-top: 0px;
                text-align: left;
                font-size: 25px;
                font-weight: 600;
              "
            >
            CASH

            </td>
            <td
              colspan="1"
              style="padding-top: 0px; font-size: 25px; font-weight: 600"
            >
            <?= $order_invoice_details[0]['food_total_with_gst'];?>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <?php } ?>
    <!-- Food Table -->



    <!-- Drinks Table -->
   <?php if($order_invoice_details[0]['drinks_total'] > 0) { ?> 


<div class="logo">
  <img src="<?php echo base_url('assets/img/logo2.jpg') ?>" style="width: 100px" />
</div>
<div class="address" style="width: 70%; margin: 5px auto">
  <p style="font-size: 14px; font-weight: 600; color: #000; margin: 0">
    110, Eastern Metropolitan Bypass Link Rd, Garia Park, Baishnabghata
    Patuli Twp, Patuli, Kolkata, West Bengal 700084
  </p>
  <p style="font-size: 14px; font-weight: 600; color: #000; margin: 0">
    GSTIN: 19AAFFP2583C1Z9
  </p>
</div>


<h1 style="font-size: 20px; color: #000; margin:0;">CASH/BIll</h1>

 
<div
  class="table"
  style="width: 100%; padding-bottom: 0px; border-bottom: 1px dashed #000">
  <table style="width: 100%">
    <tr>
      <td>No .   <?=$order_invoice_details[0]['bill_invoice_number']?></td>
     
      <td><?=$order_invoice_details[0]['order_only_date']?></td>
    </tr>
  </table>
</div>



<div class="table" style="width: 100%; padding-bottom: 0px">
  <table style="width: 100%">
    <thead>
      <tr>
        <th
          style="
            padding-bottom: 0px;
            border-bottom: 1px dashed #000;
            text-align: left;
          "
        >
          Description
        </th>
        <th style="padding-bottom: 0px; border-bottom: 1px dashed #000">
          Qty
        </th>
        <th style="padding-bottom: 0px; border-bottom: 1px dashed #000">
          Rate
        </th>
        <th style="padding-bottom: 0px; border-bottom: 1px dashed #000">
          Amount
        </th>
      </tr>
    </thead>
    <tbody>
   

    <?php 
     $countdata_drinks = 0;
    
    for($m=0;$m<count($drinksarray);$m++) {
      
      $countdata_drinks = $countdata_drinks+$drinksarray[$m]['quantity'];
      ?>

        
<tr>
<td style="padding-top: 0px; text-align: left"><?=strtoupper($drinksarray[$m]['food_information']); ?></td>
<td style="padding-top: 0px"><?=$drinksarray[$m]['quantity']; ?></td>
<td style="padding-top: 0px"><?=$drinksarray[$m]['food_unit_price']; ?></td>
<td style="padding-top: 0px"><?=$drinksarray[$m]['sub_total']; ?></td>
</tr>

<?php } ?>

        <tr>
            <td style="padding-top: 0px; text-align: left">Sub-tot Item <?=count($drinksarray)?></td>
            <td style="padding-top: 0px"><?=$countdata_drinks?></td>
            <td></td>
            <td style="padding-top: 0px"><?=$order_invoice_details[0]['drinks_total']?></td>
          </tr>
          <?php if($order_invoice_details[0]['discount_percentage_drink'] > 0) {?>
          <tr>
            <td style="padding-top: 0px; text-align: left;border-bottom: 1px dashed black;">DISCOUNT(<?=$order_invoice_details[0]['discount_percentage_drink'];?>%)</td>
            <td style="border-bottom: 1px dashed black;">ON <?php echo $order_invoice_details[0]['drinks_total'];?></td>
            <td style="border-bottom: 1px dashed black;"></td>
            <td style="padding-top:0px;border-bottom: 1px dashed black;"><?php
            $dis = $order_invoice_details[0]['drinks_total'] * ($order_invoice_details[0]['discount_percentage_drink']/100);
            echo "-".number_format((float)$dis, 2, '.', '');?>
            </td>
          </tr>
          <?php } ?>
     
     
     
      <tr  style="
                padding-top: 0px;
                text-align: left;
                border-top: 1px dashed #000;
              ">
        <td colspan="4" style="padding-top: 0px; text-align: left">
          BL.TOT(Rounded)
        </td>
      </tr>
      <tr>
        <td
          colspan="3"
          style="
            padding-top: 0px;
            text-align: left;
            font-size: 25px;
            font-weight: 600;
          "
        >
        CASH

        </td>
        <td
          colspan="1"
          style="padding-top: 0px; font-size: 25px; font-weight: 600"
        >
        <?= number_format($order_invoice_details[0]['drinks_total'] - (($order_invoice_details[0]['drinks_total'] * $order_invoice_details[0]['discount_percentage_drink'])/100),2);  ?>
        </td>
      </tr>
    </tbody>
  </table>
</div>
<?php } ?>
<!-- Food Table -->

        <!-- Total Bill Table -->
    <div class="table" style="width: 100%; padding-bottom: 0px">
      <table style="width: 100%">
       
        <tbody>
        <?php if($order_invoice_details[0]['food_total'] > 0 && $order_invoice_details[0]['drinks_total'] > 0) { ?> 
        <?php if($order_invoice_details[0]['food_total'] > 0) { ?> 
          <tr>
            <td
              colspan="3"
              style="padding-top: 0px; text-align: left; padding-top: 10px"
            >
              FOOD BILL
            </td>
            <td colspan="1" style="padding-top: 0px; padding-top: 10px">
            <?= $order_invoice_details[0]['food_total_with_gst'];?>

            </td>
          </tr>
          <?php } ?>
          <?php if($order_invoice_details[0]['drinks_total'] > 0) { ?> 
          <tr>
            <td
              colspan="3"
              style="
                padding-top: 0px;
                text-align: left;
                border-top: 1px dashed #000;
              "
            >
              DRINK BILL
            </td>
            <td
              colspan="1"
              style="padding-top: 0px; border-top: 1px dashed #000"
            >
            <?=number_format($order_invoice_details[0]['drinks_total'] - (($order_invoice_details[0]['drinks_total'] * $order_invoice_details[0]['discount_percentage_drink'])/100),2);?>
            </td>
          </tr>
          <?php } }?>
          <tr>
            <td
              colspan="3"
              style="
                padding-top: 0px;
                text-align: left;
                font-size: 25px;
                font-weight: 600;
                border-top: 1px dashed #000;
              "
            >
              GRAND TOTAL
            </td>
            <td
              colspan="1"
              style="
                padding-top: 0px;
                font-size: 25px;
                font-weight: 600;
                border-top: 1px dashed #000;
              "
            >
            <?=$order_invoice_details[0]['grand_total']?>
            </td>
          </tr>

          <tr>
            <td colspan="4" style="padding-top: 0px; text-align: left">
              Thank you. Visit us again. ph.number: +91 8250438259
            </td>
          </tr>
          <tr>
            <td colspan="2" style="padding-top: 0px"><?=$order_time[1]?></td>
          </tr>
        </tbody>
      </table>
    </div>
    <script src="<?php echo base_url('/assets/vendors/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
        <!-- Total Bill Table -->
         <script>
            function printContent(){
     
        $("#not_print").hide();
         window.print();      
       $("#not_print").show();
} 
         </script>
  </body>
</html>


