 
            
            <section class="content">
                <header class="content__title">
                    <h1></h1>
                </header>
                
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Expenditure List</h4>
                       <p>Filter </p>
                        <form method="POST" action="<?php echo base_url('ExpenditureManagement/filter_orders'); ?>">
                        <div class="row">
                            <div class="col-md-6">
                            <label>Start Date</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="zmdi zmdi-calendar"></i></span>
                                    <div class="form-group">
                                        <input type="text" class="form-control date-picker" name="fliter_with_date_from" placeholder="eg: 2019-10-25" required >
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                            <label>End Date</label>
                            <div class="input-group">
                                    <span class="input-group-addon"><i class="zmdi zmdi-calendar"></i></span>
                                    <div class="form-group">
                                        <input type="text" class="form-control date-picker" name="fliter_with_date_to" placeholder="eg: 2019-10-25" required >
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div>
                            </div>
                        </div>  
                       <br>
                        <button type="submit" class="btn btn-dark"> <span><i class="zmdi zmdi-plus zmdi-hc-fw"></i>Filter Orders </span></button>
                        </form>  
                        <div class="table-responsive">
                            <table id="data-table" class="table" >
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Type</th>
                                        <th>Amount</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    if($orderDetails['stat']==200){
                                        $sum=0;
                                        for($i=0 ; $i<count($orderDetails['all_list']); $i++){
                                            $sum+=$orderDetails['all_list'][$i]['total_collection'];
                                    ?>
                                    <tr>    
                                        
                                        <td><?php echo $i+1;?></td>
                                        <td><?php echo $orderDetails['all_list'][$i]['type'];?></td>
                                        <td><?php echo $orderDetails['all_list'][$i]['total_collection'];?></td>
                                    </tr>
                                    <?php } ?>
                                        <tr>
                                            <td>Total</td>
                                            <td></td>
                                            <td><?php echo number_format((float)$sum, 2, '.', '');;?></td>
                                        </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
                
                
                

                

        