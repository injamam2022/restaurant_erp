<section class="content">
            <header class="content__title">
                <h1>Expense Manager</h1>
                <?php if($this->session->flashdata('error')){ ?>
                <div class="alert alert-block alert-danger">
                    <i class=" fa fa-danger cool-green "></i>
                <?php echo $this->session->flashdata('error'); ?>
                </div>
                <?php } ?>
                <?php if($this->session->flashdata('success')){ ?>
                <div class="alert alert-block alert-success">
                <i class=" fa fa-danger cool-green "></i>
                <?php echo $this->session->flashdata('success'); ?>
                </div>
                <?php } ?>
                
                <button type="button" class="btn btn-dark"  data-toggle="modal" data-target="#add_modal"> <span><i class="zmdi zmdi-plus zmdi-hc-fw"></i>Add </span></button>
                <br>
                <br>
                <form action="<?php echo base_url("Expense/filter_expense")?>" method="post" enctype="multipart/form-data">
                    <div class=" card">
                        <div class="card-body row">
                            <div class="col-md-6 col-sm-12">
                                <p style="margin-top: 15px;">Start Date</p>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="zmdi zmdi-calendar"></i></span>
                                    <div class="form-group">
                                    
                                        <input type="text" class="form-control date-picker" name="start_date" placeholder="eg: 2019-10-25" required value="<?php echo $this->input->post('start_date');?>">
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <p style="margin-top: 15px;">End Date</p>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="zmdi zmdi-calendar"></i></span>
                                    <div class="form-group">
                                        <input type="text" class="form-control date-picker" name="end_date" placeholder="eg: 2019-10-25" required value="<?php echo $this->input->post('end_date');?>">
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <button type="submit" style="margin-top: 20px; padding:10px 40px;" class="btn btn-dark"><span>Filter</span></button>
                            </div>
                        </div>
                    </div>
                </form>
            </header>
            
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"> List</h4>
                    <div class="table-responsive">
                        <table id="data-table" class="table" >
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Invoice No.</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Date</th>
                                    <th>Bill</th>
                                    <th>Type</th>
                                    <th>Comments</th>
                                    <th>Action</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                if($allList['stat']==200){
                                    for($i=0 ; $i<count($allList['all_list']); $i++){
                                ?>
                                <tr>
                                    <td><?php echo $i+1;?></td>
                                    <td><?php echo $allList['all_list'][$i]['invoice_no']?></td>
                                    <td><?php echo $allList['all_list'][$i]['purchase_total_price']?></td>
                                    <?php if($allList['all_list'][$i]['type'] == "Drink") {?>
                                    <td>
                                        <?php echo $allList['all_list'][$i]['total_quantity']." Ml.";?>
                                    </td>
                                    <?php } else if($allList['all_list'][$i]['type'] == "Food"){?>
                                        <td>
                                            <?php echo $allList['all_list'][$i]['total_quantity'];?>
                                        </td>
                                    <?php } else {?>
                                        <td>N/A</td>
                                    <?php } ?>
                                    <td><?php echo $allList['all_list'][$i]['bill_date']?></td>
                                    <td><a target="_blank" href="<?php echo $this->config->item('file_url').'expense/'.$allList['all_list'][$i]['purchase_bill'];?>">Link</a></td>
                                    <td><?php echo $allList['all_list'][$i]['type']?></td>
                                    <td><?php echo $allList['all_list'][$i]['comments'];?></td>
                                    <td>
                                        <div class="btn-group mb-2 dropright">
                                            <button type="button" class="btn btn-light waves-effect waves-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                            <div class="dropdown-menu" x-placement="right-start" style="position: absolute; transform: translate3d(104px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                
                                                <!-- <a class="dropdown-item" href="javascript:void(0);" onclick="editRole(<?php echo $allList['all_list'][$i]['daily_expense_id'];?>,'view');"><i class="zmdi zmdi-edit zmdi-hc-fw"></i> View</a> -->

                                                <a class="dropdown-item" href="javascript:void(0);" id="rowId_<?php echo $allList['all_list'][$i]['daily_expense_id'];?>" onclick="deleteRole(<?php echo $allList['all_list'][$i]['daily_expense_id'];?>);"><i class="zmdi zmdi-delete zmdi-hc-fw"></i> Delete</a>
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
            
                <!-- Edit modal -->
            <div class="modal fade" id="edit_modal">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title pull-left" id="message-info">Item List</h5>
                        </div>
                        <div class="modal-body" id="myDynamicTable">
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="modal fade" id="add_modal">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title pull-left" id="message-info">Add Expense</h5>
                        </div>
                        <form action="<?php echo base_url("Expense/bill_upload")?>" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                        
                            <div class=" card">
                                <div class="card-body row">
                                    <div class="col-md-4 col-sm-6">
                                    <p style="margin-top: 15px;">Type</p>
                                    <select class="form-control select2all" name="type" id="type"  onchange="changeType(this.value)">
                                        <option value="">Select</option>
                                        <option value="Drink">Drink</option>
                                        <option value="Vegetables">Vegetables</option>
                                        <option value="Chicken">Chicken</option>
                                        <option value="Mutton">Mutton</option>
                                        <option value="Fish">Fish</option>
                                        <option value="Salary">Salary</option>
                                        <option value="Eletricity">Eletricity</option>
                                        <option value="Maintenance">Maintenance</option>
                                        <option value="Travelling">Travelling</option>
                                        <option value="Partner salary">Partner salary</option>
                                        <option value="Repair maintence">Repair maintence</option>
                                        <option value="Donation">Donation</option>
                                        <option value="Packing material">Packing material</option>
                                        <option value="Gst">Gst</option>
                                        <option value="Printing statinary">Printing statinary</option>
                                        <option value="Utensils">Utensils</option>
                                        <option value="Labour charges">Labour charges</option>
                                        <option value="Cleaning charges">Cleaning charges</option>
                                        <option value="License fees">License fees</option>
                                        <option value="Minarel water">Minarel water</option>
                                        <option value="Sajal Bhatta">Sajal Bhatta</option>
                                        <option value="Grocery">Grocery</option>
                                        <option value="Asit furnitute">Asit furnitute</option>
                                        <option value="Other">Other</option>
                                    </select>
                                    </div>
                                   
                                    <div class="col-md-4 col-sm-12">
                                    <p style="margin-top: 15px;">Invoice Number</p>
                                    <input type="text" class="form-control"  name="invoice_no" required/>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                    <p style="margin-top: 15px;">Invoice Date</p>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="zmdi zmdi-calendar"></i></span>
                                        <div class="form-group">
                                            <input type="text" class="form-control date-picker" name="bill_date" placeholder="eg: 2019-10-25" required>
                                            <i class="form-group__bar"></i>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <p style="margin-top: 15px;">Bill</p>
                                        <input type="file" class="form-control" name="purchase_bill" required/>
                                    </div>
                                    <div class="col-md-4 col-sm-12" id="purchase_csv">
                                    <p style="margin-top: 15px;">Excel</p>
                                    <input 
                                        type="file" 
                                        id="myFile" 
                                        class="form-control"
                                        name="purchase_csv" 
                                        accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" 
                                        required
                                        />
                                    </div>
                                    
                                    <div class="col-md-4 col-sm-12 d-none" id="purchase_total_price">
                                        <p style="margin-top: 15px;">Total</p>
                                        <input type="text" class="form-control" name="purchase_total_price" required/>
                                    </div>
                                    <div class="col-md-12 col-sm-12 d-none" id="comments">
                                    <p style="margin-top: 15px;">Comment</p>
                                    <textarea class="form-control" rows="4" name="comments" cols="50" ></textarea>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        
                                    </div>
                                </div>
                            </div>
                       
                        </div>
                        <div class="modal-footer">
                            <button type="submit"  class="btn btn-primary"><span>Submit</span></button>
                            <a href="<?php echo base_url('csv/expense.csv');?>" class="btn btn-primary"><span>Demo csv</span></a>
                            <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

            

            

    