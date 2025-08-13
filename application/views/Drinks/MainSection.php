
<section class="content">
                <header class="content__title">
                    <h1>Drinks Items</h1>
                   
                    <button type="button" class="btn btn-dark"  data-toggle="modal" data-target="#add_modal"> <span><i class="zmdi zmdi-plus zmdi-hc-fw"></i>Add </span></button>

                </header>
                
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"> List</h4>
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
                        <div class="table-responsive">
                            <table id="data-table" class="table" >
                <thead>
                    <tr>
                        <th>Pl No.</th>
                        <th>Category</th>
                        <th>Sub Category</th>
                        <!-- <th>Type</th> -->
                        <!-- <th>Size</th> -->
                        <th>Name</th>
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
                        <!-- <td><?php
                               for($p=0;$p<$size_list['list_count'];$p++)
                               {
                                   if($size_list['all_list'][$p]['size_id'] == $food_list['all_list'][$i]['size_id']){
                                       
                                       echo $size_list['all_list'][$p]['size_name'];
                                   }
                               }
                            ?>
                        </td> -->
                      
                        <td><?php echo $food_list['all_list'][$i]['food_name'];
                        
                        ?></td>
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
                                    
                                    <a class="dropdown-item" href="javascript:void(0);" onclick="get_drink(<?php echo $food_list['all_list'][$i]['food_id']; ?>,'edit');"><i class="zmdi zmdi-edit zmdi-hc-fw"></i> Edit</a>
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
                <h5 class="modal-title pull-left">Add Drinks</h5>
            </div>

        <form method="POST" action="<?php echo base_url('Drinks/add_drinks') ?>" enctype='multipart/form-data' onsubmit="return ValidationEvent()">
            <div class="modal-body input_div">
                <div class="row">
                <div class="form-group col-md-6">
                    <label>Category</label>

                      <select id="food_category" name="category_id" class="select2all form-control text-center" onChange="getSubCategory()" required >
                         <option selected disabled>Select Category</option>
                          
                        <?php for($l=0;$l<count($category_list['all_list']);$l++) { ?> 
                         <option value="<?php echo $category_list['all_list'][$l]['category_id'] ?>" ><?php echo $category_list['all_list'][$l]['cat_name'] ?></option>
                        <?php } ?>
                      </select>
                  
                    <span id="food_category-error" class="err"></span>
                </div>

                <div class="form-group col-md-6">
                    <label> Sub Category</label>
                    <select id="foodSubCategory"  name="sub_category_id" class="form-control text-center"  required >
                    </select>
                    <span id="foodSubCategory-error" class="err"></span>
                    </div>
                </div>


                <div class="row">
                <div class="form-group col-md-6">
                    <label>Item Name : </label>
                    <input type="text" class="form-control text-center myinput  unique" name="drink_name" required id="drink_name" placeholder=" Name">
                    <span id="food_name-error" class="err"></span>
                </div>
                <div class="form-group col-md-6">
                    <label>Item Description : </label>
                    <input type="text" class="form-control text-center myinput  unique" required name="drink_description" id="food_description" placeholder=" Description">
                    <span id="food_description-error" class="err"></span>
                </div>
               </div>

                <div class="row">
                    <div class="form-group col-md-3">
                    
                        <button type="button" class="btn btn-primary" onclick="add_drinks_multiple('add')"> + Add Rows</button>
                    </div>
                </div>

                <div id="content_drinks_add">

                </div>
                   
              
                <div class="row">
                   
                    <div class="form-group col-md-6">
                    <label>Item Image : </label>
                    <input type="file" class="form-control text-center myinput required unique" id="drink_image" name="drink_image" placeholder="Food Image">
                    <span id="food_image-error" class="err"></span>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Item Code  : </label>
                        <input type="text" class="form-control text-center myinput  unique" required name="drink_code" id="food_item_code" placeholder="Item Code">
                        <span id="food_item_code-error" class="err"></span>
                    </div>
                </div>
                 <span id="msg" class="err"></span>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-link"  >Save</button>
                <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
            </div>
        </form>
        </div>
    </div>
</div>
<!-- onclick="add_food()" -->


<div class="modal fade" id="edit_modal" tabindex="-1">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title pull-left" id="message-info">Edit Drinks</h5>
            </div>
            <form method="POST" action="<?php echo base_url('Drinks/update_drinks') ?>" enctype='multipart/form-data' onsubmit="return ValidationEvent()" >

            <div class="modal-body input_div_edit">
            <div class="row">
                <div class="form-group col-md-6">
                    <label>Category </label>
                      <select id="edit_food_category" name="category_id_update" class="form-control text-center" readonly>
                         <option selected disabled>Select Category</option>
                          
                        <?php for($l=0;$l<count($category_list['all_list']);$l++) { ?> 
                         <option value="<?php echo $category_list['all_list'][$l]['category_id'] ?>" ><?php echo $category_list['all_list'][$l]['cat_name'] ?></option>
                        <?php } ?>
                      </select>
                  
                    <span id="edit_food_category-error" class="err"></span>
                </div>

                
                <div class="form-group col-md-6">
                <label>Food Sub Category</label>

                <select id="editfoodSubCategory" name="subcategory_id_update" class="form-control text-center"  >
            
                </select>

                <span id="foodSubCategory-error" class="err"></span>
                </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-3">
                        <button type="button" class="btn btn-primary" onclick="add_drinks_multiple('update_extra_add')"> + Add Rows</button>
                    </div>
                </div>

                <div id="content_drinks_update_extra_add">

                </div>
              
                <div id="content_drinks_update">

                </div>
              <input type="hidden" name="food_id" id="food_id">
              <input type="hidden" name="previous_image" id="previous_image">
                <div class="form-group">
                    <label>Item Name : </label>
                    <input type="text" class="form-control text-center myinput required unique" name="drinks_name_update" id="food_name_edit" placeholder="Drinks Name">
                    <span id="food_name_edit-error" class="err"></span>
                </div>

                  <div class="form-group">
                    <label>Item Description : </label>
                    <input type="text" class="form-control text-center myinput required unique" name="drinks_desription_update"  id="food_description_edit" placeholder="Drinks Description ">
                    <span id="food_description_edit-error" class="err"></span>
                </div>
              
                <div class="row">

                <div class="form-group col-md-3">
                    <label>Item Image : </label>
                    <input type="file" class="form-control text-center myinput required unique" name="drinks_image_update" id="food_image_edit" placeholder="Drinks Image">
                    <span id="food_image_edit-error" class="err"></span>
                </div>
                <div class="form-group col-md-3">
                    <label>Previous Item Image : </label>
                    <span id="pre_food_image_edit"></span>
                </div>
               

                  <div class="form-group col-md-6">
                    <label>Item Code  : </label>
                    <input type="text" class="form-control text-center myinput required unique" name="drinks_code_update" id="edit_food_item_code" placeholder="Item Code">
                    <span id="edit_food_item_code-error" class="err"></span>
                </div>
                </div>
                <span id="edit_msg" class="err"></span>
            </div>
            <div class="modal-footer">

                <button type="submit" class="btn btn-link" >Save changes</button>
                <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
            </div>
        </form>
        </div>
    </div>
</div>