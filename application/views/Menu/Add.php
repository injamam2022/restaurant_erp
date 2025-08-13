
            
            <section class="content">
                <header class="content__title">
                    <h1>Create Menu </h1>
                   
                   

                </header>
                <?php  //print_r($categoryList); ?>
                
                <form method="POST" action="<?php echo base_url('MenuManagement/submit_menu'); ?>">
                <div class="card">
                    <div class="card-body">
                       <div class="row">
                           
                           
                            <div class="col-sm-6">
                               <div class="form-group">
                                   <label>Category</label>
                                        <div class="select">
                                            <select class="form-control" name="category_id[]" id="category_id" onchange="get_fooditems_rescatory();" required>
                                                <option value="0">Select Category</option>
                                                        <?php 
                                            
                                               
                                                        if($categoryList['stat']==200)

                                                            {
                                                                for($i=0;$i<count($categoryList['all_list']);$i++)
                                                                    {
                                                        ?>

                                                        <option  value="<?php echo $categoryList['all_list'][$i]['category_id'];?>"><?php echo $categoryList['all_list'][$i]['cat_name'];?></option>
                                                        <?php } } ?>
                                            </select>
                                            
                                        </div>
                                       
                                    </div>
                                 <span id="category_id-error"></span>
                              </div> 
                           
                           
                           <input type="hidden" id="category_ids" >
                           
                            <div class="col-sm-6">
                               <div class="form-group">
                                   <label>Select Food Items</label>
                                        <div class="select">
                                            <select class="form-control select2all" name="food_items_0[]" id="food_tems" multiple required>
                                                
                                                
                                            </select>
                                            
                                        </div>
                                       
                                    </div>
                              </div>
                           
                            <div class="col-sm-6">
                               <div class="form-group">
                                   <label>Add Category</label>
                                   <br>
                       <button type="button" class="btn btn-dark" onclick="add_more_data('add');"> <span><i class="zmdi zmdi-plus zmdi-hc-fw"></i>Add More </span></button>
                                   
                                </div>
                           </div>
                           
                           <br>
                           
                           <div id="content_for_items"></div>
                           <div class="col-sm-12">
                           <div id="new_items_data"></div>
                           </div>
                           
                               <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Menu Name</label>
                                        <input type="text" class="form-control" placeholder="Name" name="menu_name" id="menu_name" required>
                                        <i class="form-group__bar"></i>
                                         <span id="product_name-error"></span>
                                    </div>
                                </div> 

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Menu Code</label>
                                        <input type="text" class="form-control" placeholder="Code" name="menu_code" id="menu_code" required>
                                        <i class="form-group__bar"></i>
                                         <span id="product_code-error"></span>
                                    </div>
                                </div>
                            

                           
                            
                                 <div class="col-sm-4">
                                    <div class="form-group">
                                         <label>Menu Description</label>
                                        <input type="text" class="form-control" rows="5" placeholder="Description" name="menu_desc" id="menu_desc" required>
                                        <i class="form-group__bar"></i>
                                          <span id="product_desc-error"></span>
                                    </div>
                                </div>  
                           
                            
                                
                        </div>
                        
                         <button type="submit" class="btn btn-dark"> <span><i class="zmdi zmdi-check-circle zmdi-hc-fw"></i>Submit</span></button>
                        
                     
                     
                       
                        
                    </div>
                </div>
                
                </form>
                
               
                

        