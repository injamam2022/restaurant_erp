
            
            <section class="content">
                <header class="content__title">
                    <h1>Edit Menu </h1>
                   
                   

                </header>
                <?php  
               // echo "<pre>";
               // print_r($menuitem_data);  ?>
                
                <form method="POST" action="<?php echo base_url('MenuManagement/update_menu'); ?>">
                <div class="card">
                    <div class="card-body">
                       <div class="row">
                           <input type="hidden" id="data_count_earlier" value="<?php echo ($menuitem_data['list_count']-1); ?>">
                          <?php for($m=0;$m<$menuitem_data['list_count'];$m++) { ?> 
                            <div class="col-sm-6">
                               <div class="form-group">
                                   <label>Category</label>
                                        <div class="select">
                                            <select class="form-control" name="category_id[]" id="category_id" onchange="get_fooditems_rescatory();">
                                                <option value="0">Select Category</option>
                                                        <?php 
                                            
                                               
                                                        if($categoryList['stat']==200)

                                                            {
                                                                for($i=0;$i<count($categoryList['all_list']);$i++)
                                                                    {
                                                        ?>

                                                        <option <?php if($menuitem_data['all_list'][$m]['menu_category_id'] == $categoryList['all_list'][$i]['category_id'] ) {
                                                            echo "selected";
                                                        } ?> value="<?php echo $categoryList['all_list'][$i]['category_id'];?>"><?php echo $categoryList['all_list'][$i]['cat_name'];?></option>
                                                        <?php } } ?>
                                            </select>
                                        </div>
                                    </div>
                              </div> 
                           
                        <?php 
    /*echo "sdfdsff";
    echo $menuitem_data['all_list'][$m]['menu_category_id'];*/
    $food_item_list_res_cat = get_food_item_list_rescat($menuitem_data['all_list'][$m]['menu_category_id']);
   /* echo "<pre>";
    print_r($food_item_list_res_cat);    */                   
    
    $menu_food_id = explode(",",$menuitem_data['all_list'][$m]['menu_food_id']);
    
    //print_r($menu_food_id)
                           ?>
                           
                            <div class="col-sm-6">
                               <div class="form-group">
                                   <label>Select Food Items</label>
                                        <div class="select">
                                            <select class="form-control select2all" name="food_items_<?php echo $m; ?>[]" id="food_tems" multiple>
                                              
                                                <?php   for($j=0;$j<count($food_item_list_res_cat['all_list']);$j++)
                                                                    { 
                                                ?>
                                <option <?php if(in_array($food_item_list_res_cat['all_list'][$j]['food_id'],$menu_food_id)) { ?>
                                selected="selected"
                               <?php } ?> value="<?php echo $food_item_list_res_cat['all_list'][$j]['food_id'];?>"><?php echo $food_item_list_res_cat['all_list'][$j]['food_name'];?></option>
                                                <?php } ?>
                                                
                                            </select>
                                            
                                        </div>
                                       
                                    </div>
                              </div>
                           
                           <?php } ?> 
                           
                            <div class="col-sm-6">
                               <div class="form-group">
                                   <label>Add Category</label>
                                   <br>
                       <button type="button" class="btn btn-dark" onclick="add_more_data('edit');"> <span><i class="zmdi zmdi-plus zmdi-hc-fw"></i>Add More </span></button>
                                   
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
                                        <input type="text" class="form-control" placeholder="Name" name="menu_name" id="menu_name" value="<?php echo $menuitem_data['all_list'][0]['menu_name']; ?>">
                                        <i class="form-group__bar"></i>
                                         <span id="product_name-error"></span>
                                    </div>
                                </div> 

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Menu Code</label>
                                        <input type="text" class="form-control" placeholder="Code" name="menu_code" id="menu_code" value="<?php echo $menuitem_data['all_list'][0]['menu_code']; ?>">
                                        <i class="form-group__bar"></i>
                                         <span id="product_code-error"></span>
                                    </div>
                                </div>
                            

                           
                            
                                 <div class="col-sm-4">
                                    <div class="form-group">
                                         <label>Menu Description</label>
                                        <input type="text" class="form-control" rows="5" placeholder="Description" name="menu_desc" id="menu_desc" value="<?php echo $menuitem_data['all_list'][0]['menu_desc']; ?>">
                                        <i class="form-group__bar"></i>
                                          <span id="product_desc-error"></span>
                                    </div>
                                </div>  
                           
                            <input type="hidden" id="menu_id" name="menu_id" value="<?php echo $this->uri->segment(3); ?>">
                                
                        </div>
                        
                         <button type="submit" class="btn btn-dark"> <span><i class="zmdi zmdi-check-circle zmdi-hc-fw"></i>Edit</span></button>
                        
                     
                     
                       
                        
                    </div>
                </div>
                
                </form>
                
               
                

        