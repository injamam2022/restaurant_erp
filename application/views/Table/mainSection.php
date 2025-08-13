<section class="content">
    <header class="content__title">
     <h1>Table</h1>
    </header>
    <div class="table-wrapper ">
        <?php 
        for($i=0;$i<count($tableData['all_list']);$i++) 
        {
        ?>
        <div id="table_row_<?php echo $tableData['all_list'][$i]['table_id'];?>" class="table <?php echo $tableData['all_list'][$i]['table_status']?>" onclick="tableClick(<?php echo $tableData['all_list'][$i]['table_id'];?>,'<?php echo $tableData['all_list'][$i]['table_name'];?>','<?php echo $tableData['all_list'][$i]['table_status'];?>')">
            <?php if($tableData['all_list'][$i]['table_name'] == 'Take Away') { ?>
                <img style="object-fit: contain;" src="<?php echo base_url();?>assets/img/bg/take-away.png" alt="<?php echo $tableData['all_list'][$i]['table_name'];?>">
            <?php } else {?>
            <p><?php echo $tableData['all_list'][$i]['table_name'];?></p>
            <img  src="<?php echo base_url();?>assets/img/bg/table.png" alt="<?php echo $tableData['all_list'][$i]['table_name'];?>">
            <?php } ?>                        
            </div>
        <?php }?>
    </div>

<div class="modal fade bd-example-modal-xl" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" id="table-modal">
  <div class="modal-dialog modal modal-xl">
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title" style="color:white;">Table 1</h3>
            <button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">Close &times;</span>
            </button>
        </div>
        <div class="modal-body">
                <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#food" aria-expanded="true" aria-controls="food">Food Item</button>
                <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#drink" aria-expanded="true" aria-controls="drink">Drink Item</button>
                <button type="button" id="paymentCollapse" class="btn btn-primary" data-toggle="collapse" data-target="#comments" aria-expanded="true" aria-controls="comments">Payment</button>
                <a id="invoice_url" href="https://palkirestobar.com/res_website/bill.html" class="btn btn-primary">Bill Invoice</a>
                <a id="kitchen_url" href="https://palkirestobar.com/res_website/kitchenbill.html" class="btn btn-primary">Kitchen Receipt</a>
                <button type="button" onclick="cancelTable()" class="btn btn-danger">Cancel</button>
            <?php 
                    $this->load->view('Table/food_items',$data['foodData']);
                    $this->load->view('Table/drink_items',$data['foodData']);
            ?>
            <div class="collapse" id="comments">
                <div class="card card-body">
                    <div class="row" style="font-weight: bold;">
                        <div class="col-md-6">
                            <select class="form-control select2all" id="payment_id" onchange="paymentType(this.value)">
                                <option value="0">Payment Type</option>
                                <?php 
                                if($paymentData['stat']==200)
                                    {
                                        for($i=0;$i<count($paymentData['all_list']);$i++)
                                            {
                                ?>
                                <option  value="<?php echo $paymentData['all_list'][$i]['payment_id'];?>"><?php echo $paymentData['all_list'][$i]['payment_name'];?></option>
                                <?php } } ?>
                            </select>
                            <span id="payment_error"></span>
                        </div>
                        <div class="col-md-6">
                            <select class="form-control select2all" id="status_id" onchange="priceChange(this.value)">
                                <option value="">Status Type</option>
                                <?php 
                                if($statusData['stat']==200)
                                    {
                                        for($i=0;$i<count($statusData['all_list']);$i++)
                                            {
                                ?>
                                <option  value="<?php echo $statusData['all_list'][$i]['status_id'];?>"><?php echo $statusData['all_list'][$i]['status_name'];?></option>
                                <?php } } ?>
                            </select>
                            
                        </div>
                        <div class="col-md-3">
                            <label>Date</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="zmdi zmdi-calendar"></i></span>
                                <div class="form-group">
                                    <input type="text" class="form-control date-picker" id="order_only_date" placeholder="eg: 2019-10-25" value="<?php echo date('Y-m-d');?>">
                                    <i class="form-group__bar"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Drink Discount (%)</label>
                            <input class="form-control" onkeyup="changeDiscount(this.value)" type="text" value="0" placeholder="0" maxlength="2" onkeypress="return onlyNumberKey(event)" id="discount_percentage_drink"/>
                            
                        </div>
                        <div class="col-md-3">
                            <label>Food Discount (%)</label>
                            <input class="form-control" onkeyup="changeDiscount(this.value)" type="text" value="0" placeholder="0" maxlength="2" onkeypress="return onlyNumberKey(event)" id="discount_percentage"/>
                            
                        </div>
                        <div class="col-md-3">
                            <label>Comments</label>
                            <input class="form-control" type="text" id="order_comments" placeholder="Enter comments"/>
                        </div>
                        <div class="col-md-6 splitPayment d-none">
                            <select class="form-control select2all" id="splitPaymentId1">
                                <option value="0">Payment Type 1</option>
                                <?php 
                                if($paymentData['stat']==200)
                                    {
                                        for($i=0;$i<count($paymentData['all_list']);$i++)
                                            {
                                                if($paymentData['all_list'][$i]['payment_id'] == 7){
                                                    continue;
                                                }
                                ?>
                                <option  value="<?php echo $paymentData['all_list'][$i]['payment_id'];?>"><?php echo $paymentData['all_list'][$i]['payment_name'];?></option>
                                <?php } } ?>
                            </select>
                        </div>
                        <div class="col-md-6 splitPayment d-none">
                            <select class="form-control select2all" id="splitPaymentId2">
                                <option value="0">Payment Type 2</option>
                                <?php 
                                if($paymentData['stat']==200)
                                    {
                                        for($i=0;$i<count($paymentData['all_list']);$i++)
                                            {
                                                if($paymentData['all_list'][$i]['payment_id'] == 7){
                                                    continue;
                                                }
                                ?>
                                <option  value="<?php echo $paymentData['all_list'][$i]['payment_id'];?>"><?php echo $paymentData['all_list'][$i]['payment_name'];?></option>
                                <?php } } ?>
                            </select>
                        </div> 
                        <div class="col-md-6 splitPayment d-none">
                            <label>Collect Amount 1</label>
                            <input class="form-control" id="splitPaymentAmount1" type="text" value="0" placeholder="0"  onkeypress="return onlyNumberKey(event)" />
                        </div>
                      
                        <div class="col-md-6 splitPayment d-none">
                            <label>Collect Amount 2</label>
                            <input class="form-control" id="splitPaymentAmount2" type="text"  value="0" placeholder="0"  onkeypress="return onlyNumberKey(event)" />
                            
                        </div>
                        <div class="col-md-3">
                            <label>Food Sub Total</label>
                        </div>
                        <div class="col-md-3">
                            <label id="food_total">1222</label>
                        </div>
                        <div class="col-md-3">
                            <label>Food Discount</label>
                        </div>
                        <div class="col-md-3">
                            <label id="discount_food">0.00</label>
                        </div>
                        <div class="col-md-3">
                            <label>Food GST</label>
                        </div>
                        <div class="col-md-3">
                            <label id="food_gst">0.00</label>
                        </div>
                        <div class="col-md-3">
                            <label>Food Total</label>
                        </div>
                        <div class="col-md-3">
                            <label id="food_total_with_gst">0.00</label>
                        </div>
                        <div class="col-md-3">
                            <label>Drink Sub Total</label>
                        </div>
                        <div class="col-md-3">
                            <label id="drinks_sub_total">1222</label>
                        </div>
                        <div class="col-md-3">
                            <label>Drink Discount</label>
                        </div>
                        <div class="col-md-3">
                            <label id="discount_drink">0.00</label>
                        </div>
                        <div class="col-md-3">
                            <label>Drinks Total</label>
                        </div>
                        <div class="col-md-3">
                            <label id="drink_total">0.00</label>
                        </div>
                        <div class="col-md-3">
                            <label>Total Discount</label>
                        </div>
                        <div class="col-md-3">
                            <label id="discount">1222</label>
                        </div>
                        <div class="col-md-3">
                            <label >Grand Total</label>
                        </div>
                        <div class="col-md-3">
                             <label id="grand_total">1222</label>
                        </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" id="order_id"/>
                    <input type="hidden" id="table_id"/>
                    <button type="button" class="btn btn-primary" id="finalSubmit" onclick="finalSubmitOrder()">Submit </button>
                    <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
</section>

  

        