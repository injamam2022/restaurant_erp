
          <section class="content">
                <header class="content__title">
                    <h1>Food Items</h1>
                   
                    <button type="button" class="btn btn-dark"  data-toggle="modal" data-target="#add_modal"> <span><i class="zmdi zmdi-plus zmdi-hc-fw"></i>Add </span></button>

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
                        <th>Pl No.</th>
                        <th>Category</th>
                        <th>Sub Category</th>
                        <!-- <th>Type</th> -->
                        <th>Size</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // echo "<pre>";
                    //  print_r($food_list);
                             $m=1;
                            for($i=0;$i<$food_list['list_count'];$i++){
                    ?>
                    <tr>
                        <td><?php echo $food_list['all_list'][$i]['food_item_code']; ?></td>
                        <td><?php
                               for($j=0;$j<$category_list['list_count'];$j++)
                               {
                                   if($category_list['all_list'][$j]['category_id'] == $food_list['all_list'][$i]['category_id']){
                                       
                                       echo $category_list['all_list'][$j]['cat_name'];
                                   }
                               }
                            ?>
                        </td>
                        <td><?php
                               for($p=0;$p<$subCategoryList['list_count'];$p++)
                               {
                                   if($subCategoryList['all_list'][$p]['sub_category_id'] == $food_list['all_list'][$i]['sub_category_id']){
                                       
                                       echo $subCategoryList['all_list'][$p]['sub_category_name'];
                                   }
                               }
                            ?>
                        </td>
                        <!-- <td><?php
                               for($x=0;$x<$type_list['list_count'];$x++)
                               {
                                   if($type_list['all_list'][$x]['type_id'] == $food_list['all_list'][$i]['type_id']){
                                       
                                       echo $type_list['all_list'][$x]['type_name'];
                                   }
                               }
                            ?>
                        </td>
                         -->
                        <td><?php
                               for($p=0;$p<$size_list['list_count'];$p++)
                               {
                                   if($size_list['all_list'][$p]['size_id'] == $food_list['all_list'][$i]['size_id']){
                                       
                                       echo $size_list['all_list'][$p]['size_name'];
                                   }
                               }
                            ?>
                        </td>
                      
                        <td><?php echo $food_list['all_list'][$i]['food_name']; ?></td>
                        <td><?php echo $food_list['all_list'][$i]['selling_price']; ?></td> 
                        <td>
                            
                            <label class="switch">
                            <input type="checkbox" <?php if($food_list['all_list'][$i]['food_status'] == 0) {  ?> checked <?php  } ?> onclick="change_status_item('<?php echo $food_list['all_list'][$i]['food_id'] ?>');">
                            <span class="slider round"></span>
                            </label>
                        </td> 
                        <td>
                            <div class="btn-group mb-2 dropright">
                                <button type="button" class="btn btn-light waves-effect waves-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                <div class="dropdown-menu" x-placement="right-start">
                                    
                                    <!-- <a class="dropdown-item" href="javascript:void(0);" onclick="get_food(<?php echo $food_list['all_list'][$i]['food_id']; ?>,'view');"><i class="zmdi zmdi-edit zmdi-hc-fw"></i> View</a> -->
                                    
                                    <a class="dropdown-item" href="javascript:void(0);" onclick="get_food(<?php echo $food_list['all_list'][$i]['food_id']; ?>,'edit');"><i class="zmdi zmdi-edit zmdi-hc-fw"></i> Edit</a>
                                    <a class="dropdown-item" href="javascript:void(0);" id="del_<?php echo $food_list['all_list'][$i]['food_id']; ?>" onclick="delete_food(<?php echo $food_list['all_list'][$i]['food_id'].",'".$food_list['all_list'][$i]['food_image']."'"; ?>);"><i class="zmdi zmdi-delete zmdi-hc-fw"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>



<div class="modal fade" id="add_modal" tabindex="-1">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title pull-left">Add Food Items</h5>
            </div>
            <div class="modal-body input_div">
                <div class="row">
                <div class="form-group col-md-6">
                    <label>Category</label>

                      <select id="food_category" class="form-control text-center" onChange="getSubCategory()" >
                         <option selected disabled>Select Category</option>
                          
                        <?php for($l=0;$l<count($category_list['all_list']);$l++) { ?> 
                         <option value="<?php echo $category_list['all_list'][$l]['category_id'] ?>" ><?php echo $category_list['all_list'][$l]['cat_name'] ?></option>
                        <?php } ?>
                      </select>
                  
                    <span id="food_category-error" class="err"></span>
                </div>

                <div class="form-group col-md-6">
                    <label>Food Sub Category</label>
                    <select id="foodSubCategory" class="form-control text-center"  >
                    </select>
                    <span id="foodSubCategory-error" class="err"></span>
                    </div>
                </div>
                <div class="row">
                <div class="form-group col-md-6">
                    <label>Select Size</label>

                      <select id="size_id" class="form-control text-center" >
                         <option selected disabled>Select Size</option>
                          
                        <?php for($l=0;$l<count($size_list['all_list']);$l++) { ?> 
                         <option value="<?php echo $size_list['all_list'][$l]['size_id'] ?>" 
                         <?php if($size_list['all_list'][$l]['size_id'] === "1") { echo "selected"; } ?> ><?php echo $size_list['all_list'][$l]['size_name'] ?></option>
                        <?php } ?>
                      </select>
                  
                    <span id="food_category-error" class="err"></span>
                </div>

                <div class="form-group col-md-6">
                    <label>Select Type</label>

                      <select id="type_id" class="form-control text-center" >
                         <option selected disabled>Select Type</option>
                          
                        <?php for($l=0;$l<count($type_list['all_list']);$l++) { ?> 
                         <option value="<?php echo $type_list['all_list'][$l]['type_id'] ?>" 
                         ><?php echo $type_list['all_list'][$l]['type_name'] ?></option>
                        <?php } ?>
                      </select>
                  
                    <span id="food_category-error" class="err"></span>
                </div>
                </div>
               
                <div class="form-group">
                    <label>Item Name : </label>
                    <input type="text" class="form-control text-center myinput required unique" id="food_name" placeholder="Food Name">
                    <span id="food_name-error" class="err"></span>
                </div>
                <div class="form-group">
                    <label>Item Description : </label>
                    <input type="text" class="form-control text-center myinput required unique" id="food_description" placeholder="Food Description">
                    <span id="food_description-error" class="err"></span>
                </div>
                <div class="form-group">
                    <label>Item Image : </label>
                    <input type="file" class="form-control text-center myinput required unique" id="food_image" placeholder="Food Image">
                    <span id="food_image-error" class="err"></span>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>Item  Price : </label>
                        <input type="text" class="form-control text-center myinput required unique" id="food_price" placeholder="Food  Price">
                        <span id="food_price-error" class="err"></span>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Item Code  : </label>
                        <input type="text" class="form-control text-center myinput required unique" id="food_item_code" placeholder="Item Code">
                        <span id="food_item_code-error" class="err"></span>
                    </div>
                </div>
                 <span id="msg" class="err"></span>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link" onclick="add_food()">Save</button>
                <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



<div class="modal fade" id="edit_modal" tabindex="-1">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title pull-left" id="message-info">Edit Food</h5>
            </div>
            <div class="modal-body input_div_edit">
            <div class="row">
                <div class="form-group col-md-6">
                    <label>Category </label>
                      <select id="edit_food_category" class="form-control text-center" disabled>
                         <option selected disabled>Select Category</option>
                          
                        <?php for($l=0;$l<count($category_list['all_list']);$l++) { ?> 
                         <option value="<?php echo $category_list['all_list'][$l]['category_id'] ?>" ><?php echo $category_list['all_list'][$l]['cat_name'] ?></option>
                        <?php } ?>
                      </select>
                  
                    <span id="edit_food_category-error" class="err"></span>
                </div>

                
                <div class="form-group col-md-6">
                <label>Food Sub Category</label>

                <select id="editfoodSubCategory" class="form-control text-center"  >
            
                </select>

                <span id="foodSubCategory-error" class="err"></span>
                </div>
                </div>
                <div class="row">
                <div class="form-group  col-md-6">
                    <label>Select Size</label>

                      <select id="edit_size_id" class="form-control text-center" >
                         <option selected disabled>Select Size</option>
                          
                        <?php for($l=0;$l<count($size_list['all_list']);$l++) { ?> 
                         <option value="<?php echo $size_list['all_list'][$l]['size_id'] ?>" 
                         <?php if($size_list['all_list'][$l]['size_id'] === "1") { echo "selected"; } ?> ><?php echo $size_list['all_list'][$l]['size_name'] ?></option>
                        <?php } ?>
                      </select>
                  
                    <span id="food_category-error" class="err"></span>
                </div>

                <div class="form-group col-md-6">
                    <label>Select Type</label>

                      <select id="edit_type_id" class="form-control text-center" >
                         <option selected disabled>Select Type</option>
                          
                        <?php for($l=0;$l<count($type_list['all_list']);$l++) { ?> 
                         <option value="<?php echo $type_list['all_list'][$l]['type_id'] ?>" 
                         ><?php echo $type_list['all_list'][$l]['type_name'] ?></option>
                        <?php } ?>
                      </select>
                  
                    <span id="food_category-error" class="err"></span>
                </div>
                </div>
              
                <div class="form-group">
                    <label>Item Name : </label>
                    <input type="text" class="form-control text-center myinput required unique" id="food_name_edit" placeholder="Food Name">
                    <span id="food_name_edit-error" class="err"></span>
                </div>

                  <div class="form-group">
                    <label>Item Description : </label>
                    <input type="text" class="form-control text-center myinput required unique" id="food_description_edit" placeholder="Food Name">
                    <span id="food_description_edit-error" class="err"></span>
                </div>
                <div class="row">
                <div class="form-group col-md-6">
                    <label>Previous Item Image : </label>
                    <span id="pre_food_image_edit"></span>
                </div>

                <div class="form-group col-md-6">
                    <label>Item Image : </label>
                    <input type="file" class="form-control text-center myinput required unique" id="food_image_edit" placeholder="Food Image">
                    <span id="food_image_edit-error" class="err"></span>
                </div>
                </div>
                <div class="row">
                <div class="form-group col-md-6">
                    <label>Item  Price : </label>
                    <input type="text" class="form-control text-center myinput required unique" id="food_price_edit" placeholder="Food Selling Price">
                    <span id="food_price_edit-error" class="err"></span>
                </div>

                  <div class="form-group col-md-6">
                    <label>Item Code  : </label>
                    <input type="text" class="form-control text-center myinput required unique" id="edit_food_item_code" placeholder="Item Code">
                    <span id="edit_food_item_code-error" class="err"></span>
                </div>
                </div>
                <span id="edit_msg" class="err"></span>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link" onclick="update_food();" id="edit-box">Save changes</button>
                <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>