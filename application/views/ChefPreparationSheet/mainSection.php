
            
            <section class="content">
                <header class="content__title">
                    <h1><?php echo "DAILY PREPARATION ORDERS"; ?></h1>
                   
                   <!-- -->

                </header>
                
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Preparation  List</h4>
                        <p>Filter </p>
                        <form method="POST" action="<?php echo base_url('ChefPreparationSheet/get_preparation_sheet'); ?>">
                            
                            
                    <label>Select Time Slot</label>
                    <select id="time_slot_id" class="form-control" name="time_slot_id" required>
                        <option value="">Select</option>
                        <?php for($i=0;$i<count($timeslotList['all_list']);$i++) { ?> 
                        <option value="<?php echo $timeslotList['all_list'][$i]['timeslot_id'] ?>" ><?php echo $timeslotList['all_list'][$i]['timeslot_name'] ?></option>
                        <?php } ?>
                    </select>
                            
                        <label>Filter With  Date</label>
                        <input type="date" class="form-control" name="fliter_with_date" required>
                            
                       <br>     
                       <br>     
                        <button type="submit" class="btn btn-dark"> <span><i class="zmdi zmdi-plus zmdi-hc-fw"></i>Filter Orders </span></button>
                        </form>  
                        
                        
                        
                        
                        <?php if($preparation_list[0]['timeslot_name']) { ?> 
                         <div class="table-responsive">
                           <table id="data-table" class="table"  >
                               
                               <h3><?php if($preparation_list[0]['timeslot_name']) echo $preparation_list[0]['timeslot_name']; ?></h3> 
                                <thead>
                                    <tr>
                                        <th>Item Name</th>
                                        <th>Quantity</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <?php 
                                        /*echo "<pre>";
                                        print_r($preparation_list);*/
                                        for($i=0;$i<count($preparation_list);$i++)
                                        {
                                     ?>
                                    <tr>
                                        <td><?php echo $preparation_list[$i]['food_name'] ?></td>
                                        <td><?php echo $preparation_list[$i]['totat_quantity'] ?></td> 
                                    </tr>
                                <?php } ?>
                                    <?php } else { ?><tr><td> No Orders To Show. </td></tr> <?php } ?>
                                </tbody>
                        
                             </table>
                         </div>
                       <br>     
                       <br>
                    
                      
                        
                    </div>
                </div>
                
                
                
   
                
                
                

                

        