<section class="content table-page">
    <header class="content__title">
     <h1>Tables</h1>
     <p class="table-page__hint">Tap a table to add food, drinks, and take payment.</p>
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

<div class="modal fade bd-example-modal-xl" role="dialog" aria-labelledby="tableModalTitle" aria-hidden="true" id="table-modal">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title" id="tableModalTitle">Table 1</h3>
            <button type="button" class="btn btn-danger modal-close" data-dismiss="modal" aria-label="Close">
                Close
            </button>
        </div>
        <div class="modal-body table-modal-body">
            <div id="table-modal-content" class="table-modal-content">
                <div class="order-toolbar">
                    <div class="order-grand-chip">Total <strong id="header_grand_total">0.00</strong></div>
                    <div class="order-actions">
                        <a id="invoice_url" href="javascript:void(0)" class="btn btn-primary isDisabled">Bill Invoice</a>
                        <a id="kitchen_url" href="javascript:void(0)" class="btn btn-primary isDisabled">Kitchen Receipt</a>
                        <button type="button" onclick="cancelTable()" class="btn btn-danger">Cancel order</button>
                    </div>
                </div>
                <ul class="nav nav-tabs order-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="food-tab" data-toggle="tab" href="#food" role="tab" aria-controls="food" aria-selected="true">Food</a>
                    </li>
                    <li class="nav-item drink-only">
                        <a class="nav-link" id="drink-tab" data-toggle="tab" href="#drink" role="tab" aria-controls="drink" aria-selected="false">Drinks</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link isDisabled" id="paymentCollapse" data-toggle="tab" href="#comments" role="tab" aria-controls="comments" aria-selected="false">Payment</a>
                    </li>
                </ul>
                <div class="tab-content order-tab-content">
            <?php 
                    $this->load->view('Table/food_items',$data['foodData']);
                    $this->load->view('Table/drink_items',$data['foodData']);
            ?>
            <div class="tab-pane fade order-section" id="comments" role="tabpanel" aria-labelledby="paymentCollapse">
                <div class="section-loader"><div class="table-modal-spinner"></div></div>
                <h3>Payment</h3>
                <div class="card card-body payment-card">
                    <div class="row field-grid">
                        <div class="col-12 col-md-6">
                            <label for="payment_id">Payment type</label>
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
                        <div class="col-12 col-md-6">
                            <label for="status_id">Status</label>
                            <select class="form-control select2all" id="status_id">
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
                        <div class="col-12 col-sm-6 col-lg-3">
                            <label>Date</label>
                            <div class="order-date-field">
                                <i class="zmdi zmdi-calendar" aria-hidden="true"></i>
                                <input type="text" class="form-control date-picker" id="order_only_date" placeholder="eg: 2019-10-25" value="<?php echo date('Y-m-d');?>">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3 drink-only">
                            <label>Drink Discount (%)</label>
                            <select class="form-control" onchange="changeDiscount(this.value)" id="discount_percentage_drink">
                                <?php for($d=0;$d<=100;$d++){ ?>
                                <option value="<?php echo $d;?>" <?php echo $d==0?'selected':'';?>><?php echo $d;?>%</option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <label>Food Discount (%)</label>
                            <select class="form-control" onchange="changeDiscount(this.value)" id="discount_percentage">
                                <?php for($d=0;$d<=100;$d++){ ?>
                                <option value="<?php echo $d;?>" <?php echo $d==0?'selected':'';?>><?php echo $d;?>%</option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <label>Comments</label>
                            <input class="form-control" type="text" id="order_comments" placeholder="Enter comments"/>
                        </div>
                        <div class="col-12 col-md-6 splitPayment d-none">
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
                        <div class="col-12 col-md-6 splitPayment d-none">
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
                        <div class="col-12 col-md-6 splitPayment d-none">
                            <label>Collect Amount 1</label>
                            <input class="form-control" id="splitPaymentAmount1" type="text" value="0" placeholder="0"  onkeypress="return onlyNumberKey(event)" />
                        </div>
                      
                        <div class="col-12 col-md-6 splitPayment d-none">
                            <label>Collect Amount 2</label>
                            <input class="form-control" id="splitPaymentAmount2" type="text"  value="0" placeholder="0"  onkeypress="return onlyNumberKey(event)" />
                            
                        </div>
                        <div class="col-12">
                            <div class="bill-summary">
                                <div class="bill-line"><span>Food Sub Total</span><strong id="food_total">0.00</strong></div>
                                <div class="bill-line"><span>Food Discount</span><strong id="discount_food">0.00</strong></div>
                                <div class="bill-line"><span>Food GST</span><strong id="food_gst">0.00</strong></div>
                                <div class="bill-line"><span>Food Total</span><strong id="food_total_with_gst">0.00</strong></div>
                                <div class="bill-line drink-only"><span>Drink Sub Total</span><strong id="drinks_sub_total">0.00</strong></div>
                                <div class="bill-line drink-only"><span>Drink Discount</span><strong id="discount_drink">0.00</strong></div>
                                <div class="bill-line drink-only"><span>Drinks Total</span><strong id="drink_total">0.00</strong></div>
                                <div class="bill-line"><span>Total Discount</span><strong id="discount">0.00</strong></div>
                                <div class="bill-line bill-line--grand"><span>Grand Total</span><strong id="grand_total">0.00</strong></div>
                            </div>
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
            <div id="loader-modal" class="table-modal-loader">
                <div class="table-modal-spinner"></div>
                <p>Loading...</p>
            </div>
        </div>
    </div>
  </div>
</div>
</section>

  

        