 
            
            <section class="content">
                <header class="content__title">
                    <h1></h1>
                </header>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Order List</h4>
                        
                       <p>Filter </p>
                        <form method="POST" action="<?php echo base_url('OrderMangement/filter_orders'); ?>">
                        <div class="row">
                            <div class="col-md-6">
                            <label>Start Date</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="zmdi zmdi-calendar"></i></span>
                                    <div class="form-group">
                                        <input type="text" class="form-control date-picker" name="fliter_with_date_from" id="fliter_with_date_from" placeholder="eg: 2019-10-25" required value="<?php echo $this->input->post('end_date');?>">
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                            <label>End Date</label>
                            <div class="input-group">
                                    <span class="input-group-addon"><i class="zmdi zmdi-calendar"></i></span>
                                    <div class="form-group">
                                        <input type="text" class="form-control date-picker" name="fliter_with_date_to" id="fliter_with_date_to" placeholder="eg: 2019-10-25" required value="<?php echo $this->input->post('end_date');?>">
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div>
                            </div>
                        </div>  
                       <br>
                        <button type="submit" class="btn btn-dark"> <span><i class="zmdi zmdi-plus zmdi-hc-fw"></i>Filter Orders </span></button>
                        <button type="button" class="btn btn-dark"  data-toggle="modal" data-target="#add_modal"> <span><i class="zmdi zmdi-collection-pdf zmdi-hc-fw"></i>Invoice Download </span></button>
                        <button type="button" class="btn btn-dark" onclick="downloadCsv()"> <span><i class="zmdi zmdi-collection-pdf zmdi-hc-fw"></i>Sale Report </span></button>
                        </form>  
                        <div class="table-responsive">
                            <table id="data-table" class="table" >
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Bill Inoice Number</th>
                                        <th>Food Total</th>
                                        <th>Drinks Total</th>
                                        <th>Discount</th>
                                        <th>Total</th>
                                        <th>Date</th>
                                        <th>Comments</th>
                                        <th>Payment</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    if($orderDetails['stat']==200){
                                        for($i=0 ; $i<count($orderDetails['all_list']); $i++){
                                            
                                    ?>
                                    <tr>    
                                        
                                        <td><?php echo $i+1;?></td>
                                        <td><?php echo $orderDetails['all_list'][$i]['bill_invoice_number'];?></td>
                                        <td><?php echo $orderDetails['all_list'][$i]['food_total_with_gst'];?></td>
                                        <td><?php echo $orderDetails['all_list'][$i]['drinks_total'];?></td>        
                                        <td><?php echo $orderDetails['all_list'][$i]['discount'];?></td>     
                                        <td><?php echo $orderDetails['all_list'][$i]['grand_total'];?></td>     
                                        <td><?php echo $orderDetails['all_list'][$i]['order_only_date'];?></td>
                                        <td><?php echo $orderDetails['all_list'][$i]['order_comments'];?></td>
                                        <td id="payment_name_<?php echo $orderDetails['all_list'][$i]['order_id'];?>">
                                            <?php 
                                                if($orderDetails['all_list'][$i]['payment_id'] == 7){
                                                    echo ''.$orderDetails['all_list'][$i]['collectionArray'][0]['payment_name'].': '.$orderDetails['all_list'][$i]['collectionArray'][0]['collection_amount'].'';
                                                    echo '<p>'.$orderDetails['all_list'][$i]['collectionArray'][1]['payment_name'].': '.$orderDetails['all_list'][$i]['collectionArray'][1]['collection_amount'].'</p>';
                                                } else{
                                                    echo $orderDetails['all_list'][$i]['payment_name'];
                                                }
                                            ?>
                                       </td>
                                        <td>
                                            <div class="btn-group mb-2 dropright">
                                               <button type="button" class="btn btn-light waves-effect waves-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                               <div class="dropdown-menu" x-placement="right-start" style="position: absolute; transform: translate3d(104px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                   <a class="dropdown-item" href="javascript:void(0);" onclick="get_order_details('<?php echo $orderDetails['all_list'][$i]['order_id'];?>');"><i class="zmdi zmdi-edit zmdi-hc-fw"></i> View Orders</a>
                                                   <a class="dropdown-item" href="<?php echo base_url('OrderMangement/viewinvoice/').idToShortURL($orderDetails['all_list'][$i]['order_id']) ?>" target="_blank"  ><i class="zmdi zmdi-collection-pdf zmdi-hc-fw"></i> View Invoice</a>
                                                   <a class="dropdown-item" id="rowId_<?php echo $orderDetails['all_list'][$i]['order_id'];?>" href="javascript:void(0);" onclick="delete_order('<?php echo $orderDetails['all_list'][$i]['order_id'];?>');"><i class="zmdi zmdi-delete zmdi-hc-fw"></i> Delete Orders</a>
                                               </div>
                                           </div>
                                        </td>
                                    </tr>
                                    <?php }}?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
                
                
                
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Order Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table id="modal_table" >

                    </table>
                    <div class="row">
                        <div class="col-md-3">
                            <label>Payment Type</label>
                            <select class="form-control" id="payment_id" onchange="paymentModeChange(this.value)">
                            <?php 
                            if($paymentDetails){
                            for($m=0;$m<count($paymentDetails['all_list']);$m++){ ?> 
                                <option value="<?php echo $paymentDetails['all_list'][$m]['payment_id'];?>" ><?php echo $paymentDetails['all_list'][$m]['payment_name'];?></option>
                            <?php } }?>
                            </select>
                        </div>
                    </div>
                    
                </div>
                <div class="modal-footer" id="savechnages_btn">
                   
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="add_modal" tabindex="-1">
        <div class="modal-dialog">
            <form method="post" action="<?php echo base_url('OrderMangement/download');?>">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title pull-left">Invoice Download</h5>
                    </div>
                    <div class="modal-body">
                        <label>Month</label>
                        <select name="month" class="form-control">
                            <option value="">Select</option>
                            <option value="Jan">Jan</option>
                            <option value="Feb">Feb</option>
                            <option value="Mar">Mar</option>
                            <option value="Apr">Apr</option>
                            <option value="May">May</option>
                            <option value="Jun">Jun</option>
                            <option value="Jul">Jul</option>
                            <option value="Aug">Aug</option>
                            <option value="Sep">Sep</option>
                            <option value="Oct">Oct</option>
                            <option value="Nov">Nov</option>
                            <option value="Dec">Dec</option>
                        </select>
                    </div>
                    
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-link">Save changes</button>
                        <button type="reset" class="btn btn-link" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
                
                
                
                

                

        