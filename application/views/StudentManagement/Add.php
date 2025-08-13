
            
            <section class="content">
                <header class="content__title">
                    <h1>Weekly Assign Menu </h1>
                   
                   

                </header>
                <?php  //print_r($categoryList); ?>
                
                <form method="POST" action="<?php echo base_url('AssignMenu/add_data'); ?>">
                <div class="card">
                    <div class="card-body">
                       <div class="row">
                           
                           
                            <div class="col-sm-6">
                               <div class="form-group">
                                   <label>School</label>
                                        <div class="select">
                                            <select class="form-control" name="school_id" id="school_id"  required>
                                                <option value="0">Select School</option>
                                                        <?php 
                                            
                                               
                                                        if($schoolList['stat']==200)

                                                            {
                                                                for($i=0;$i<count($schoolList['all_list']);$i++)
                                                                    {
                                                        ?>

                                                        <option  value="<?php echo $schoolList['all_list'][$i]['school_id'];?>"><?php echo $schoolList['all_list'][$i]['school_name'];?></option>
                                                        <?php } } ?>
                                            </select>
                                            
                                        </div>
                                       
                                    </div>
                                 <span id="category_id-error"></span>
                              </div> 
                           
                            <div class="col-sm-6">
                               <div class="form-group">
                                   <label>Time Slot</label>
                                        <div class="select">
                                            <select class="form-control" name="timeslot_id" id="timeslot_id"  required>
                                                <option value="0">Select Time Slot</option>
                                                        <?php 
                                            
                                               
                                                        if($timeslotList['stat']==200)

                                                            {
                                                                for($i=0;$i<count($timeslotList['all_list']);$i++)
                                                                    {
                                                        ?>

                                                        <option  value="<?php echo $timeslotList['all_list'][$i]['timeslot_id'];?>"><?php echo $timeslotList['all_list'][$i]['timeslot_name'];?></option>
                                                        <?php } } ?>
                                            </select>
                                            
                                        </div>
                                       
                                    </div>
                                 <span id="category_id-error"></span>
                              </div> 
                           
                          
                          
                           </div>
                          <div class="row">  
                               <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Start Date</label>
                                        <input type="datetime-local" class="form-control" placeholder="Name" name="start_date" id="menu_name" required>
                                        <i class="form-group__bar"></i>
                                         <span id="product_name-error"></span>
                                    </div>
                                </div> 
                           
                             <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>End Date</label>
                                        <input type="datetime-local" class="form-control" placeholder="Name" name="end_date" id="menu_name" required>
                                        <i class="form-group__bar"></i>
                                         <span id="product_name-error"></span>
                                    </div>
                                </div> 

                          </div>
                            

                     <div class="row">          
                            
                            <div class="col-sm-6">
                               <div class="form-group">
                                   <label>Menu </label>
                                        <div class="select">
                                            <select class="form-control" name="menu_id" id="menu_id"  required>
                                                <option value="0">Select Menu</option>
                                                        <?php 
                                            
                                               
                                                        if($menuList['stat']==200)

                                                            {
                                                                for($i=0;$i<count($menuList['all_list']);$i++)
                                                                    {
                                                        ?>

                                                        <option  value="<?php echo $menuList['all_list'][$i]['menu_id'];?>"><?php echo $menuList['all_list'][$i]['menu_name'];?></option>
                                                        <?php } } ?>
                                            </select>
                                            
                                        </div>
                                       
                                    </div>
                                 <span id="category_id-error"></span>
                              </div> 
                        </div>    
                            
                                
                       
                        
                         <button type="submit" class="btn btn-dark"> <span><i class="zmdi zmdi-check-circle zmdi-hc-fw"></i>Submit</span></button>
                        
                     
                      </div>
                       
                        
                    
                </div>
                
                </form>
                
               
                

        