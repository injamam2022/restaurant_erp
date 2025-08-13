 <?php 
  /* echo "<pre>";
   print_r($schoolOrderDataChef);*/
?>
            
            <section class="content">
                <header class="content__title">
                    <h1><?php echo $schoolList['all_list'][0]['school_name'] . "ORDERS"; ?></h1>
                   
                   <!-- -->

                </header>
                
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Order List</h4>
                       <!-- <p>Filter </p>
                        <form method="POST" action="<?php echo base_url('SchoolOrders/filter_orders'); ?>">
                            
                        <label>Filter With Order Date</label>
                        <input type="date" class="form-control" name="fliter_with_date">
                        <br>
                        <br>
                        <button type="submit" class="btn btn-dark"> <span><i class="zmdi zmdi-plus zmdi-hc-fw"></i>Filter Orders </span></button>
                        </form> -->                       
                     <!-- <a href="<?php //echo base_url('SchoolOrders'); ?>" type="submit" class="btn btn-dark"> <span><i class="zmdi zmdi-plus zmdi-hc-fw"></i>Filter Orders </span></a>-->
                       
                        <div class="table-responsive">
                            <table id="data-table" class="table" >
                                <thead>
                                    <tr>
                                        <th>Order Id</th>
                                        <th>Student Name</th>
                                        <th>ClassRoom</th>
                                       <!-- <th>Image</th>-->
                                        <th>added_date</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    if($schoolOrderDataChef['stat']==200){
                                        for($i=0 ; $i<count($schoolOrderDataChef['all_list']); $i++){
                                            
                                    ?>
                                    <tr>    
                                        
                                        <td>#1000<?php echo $schoolOrderDataChef['all_list'][$i]['order_id'];?></td>
                                        <td><?php echo $schoolOrderDataChef['all_list'][$i]['full_name'];?></td>
                                        <td><?php echo $schoolOrderDataChef['all_list'][$i]['classroom'];?></td>
                                       <!-- <td>
                                            <img src="<?php //echo base_url().'/master_images/FoodImage/'.$schoolOrderDataChef['all_list'][$i]['food_image'];?>" style="width:100px; height:100px;">
                                           
                                        
                                        </td>-->
                                        
                                         <td><?php echo $schoolOrderDataChef['all_list'][$i]['added_date'];?></td>
                                        <td>
                                            <div class="btn-group mb-2 dropright">
                                               <button type="button" class="btn btn-light waves-effect waves-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                               <div class="dropdown-menu" x-placement="right-start" style="position: absolute; transform: translate3d(104px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                   
                                                   <a class="dropdown-item" href="javascript:void(0);" onclick="get_order_details('<?php echo $schoolOrderDataChef['all_list'][$i]['order_id'];?>','<?php echo $schoolOrderDataChef['all_list'][$i]['student_id'];?>','chef');"><i class="zmdi zmdi-edit zmdi-hc-fw"></i> View Order Details</a>
                                                   
<!--                                                   <a class="dropdown-item" href="javascript:void(0);" onclick="edit_data(<?php //echo $dataList['all_list'][$i]['school_id'];?>,'edit');"><i class="zmdi zmdi-edit zmdi-hc-fw"></i> Edit</a>-->
                                                   
<!--                                                   <a class="dropdown-item" href="javascript:void(0);" id="rowId_<?php echo $dataList['all_list'][$i]['school_id'];?>" onclick="delete_data(<?php //echo $dataList['all_list'][$i]['school_id'];?>);"><i class="zmdi zmdi-delete zmdi-hc-fw"></i> Delete</a>-->
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
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Order Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table id="modal_table" >
                        
                        
<!--                        <div id="order_content"></div>-->

                    </table>
                </div>
                <div class="modal-footer" id="savechnages_btn">
                   
                </div>
            </div>
        </div>
    </div>
                
                
                
                

                

        