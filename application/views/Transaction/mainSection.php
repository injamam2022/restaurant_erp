
            
            <section class="content">
                <header class="content__title">
                    <h1>Transaction</h1>
                    <form action="<?php echo base_url("Transaction")?>" method="post" enctype="multipart/form-data">
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
                        <?php 
                         
                        ?>
                        <div class="table-responsive">
                            <table id="data-table" class="table" >
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Transaction Date</th>
                                        <th>Purpose</th>
                                        <th>Credit</th>
                                        <th>Debit</th>
                                        <th>Running Balance</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    if($all_data['stat']==200){
                                        for($i=0 ; $i<count($all_data['data']); $i++){
                                            
                                    ?>
                                    <tr>
                                        <td><?php echo $i+1;?></td>
                                        <td><?php echo $all_data['data'][$i]['transaction_date']?></td>
                                        <td><?php echo $all_data['data'][$i]['purpose']?></td>
                                        <td style="color:#36fd07;font-weight:bold;"><?php if($all_data['data'][$i]['transaction_type'] == "deposit") { echo $all_data['data'][$i]['amount']; } else{echo ""; }?></td>
                                        <td style="color:red;font-weight:bold;"><?php if($all_data['data'][$i]['transaction_type'] == "withdrawal") { echo $all_data['data'][$i]['amount']; } else{echo ""; }?></td>
                                        <td style="font-weight:bold;<?php if($all_data['data'][$i]['running_balance'] < 0 ) { echo "color:red";} else { echo "color:#36fd07";}?>">
                                            <?php echo $all_data['data'][$i]['running_balance'];?>
                                        </td>
                                        
                                    </tr>
                                    <?php }}?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                