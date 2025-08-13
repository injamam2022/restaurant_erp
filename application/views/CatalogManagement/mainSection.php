
            
            <section class="content">
                <header class="content__title">
                    <h1>Classes Management</h1>
                   
                    <button type="button" class="btn btn-dark"  data-toggle="modal" data-target="#add_modal" onclick="clrmsg()"> <span><i class="zmdi zmdi-plus zmdi-hc-fw"></i>Add </span></button>

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
                                        <th>Id</th>
                                        <th>Class Name</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                  /*  echo "<pre>";
                                    print_r($categoryList);*/
                                    if($categoryList['stat']==200){
                                        for($i=0 ; $i<count($categoryList['all_list']); $i++){
                                            
                                    ?>
                                    <tr>    
                                        
                                        <td><?php echo $categoryList['all_list'][$i]['catalog_id'];?></td>
                                        <td><?php echo $categoryList['all_list'][$i]['catalog_name'];?></td>
                                        <td><?php echo $categoryList['all_list'][$i]['catalog_desc'];?></td>
                                        <td>
                                            <img src="<?php echo $this->config->item('file_url').'/catalog/'.$categoryList['all_list'][$i]['catalog_img'];?>" style="width:100px; height:100px;">
                                           
                                        
                                        </td>
                                        <td>
                                            <div class="btn-group mb-2 dropright">
                                               <button type="button" class="btn btn-light waves-effect waves-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                               <div class="dropdown-menu" x-placement="right-start" style="position: absolute; transform: translate3d(104px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                   
                                                   <a class="dropdown-item" href="javascript:void(0);" onclick="editCategory(<?php echo $categoryList['all_list'][$i]['catalog_id'];?>);"><i class="zmdi zmdi-edit zmdi-hc-fw"></i> Edit</a>
                                                   
                                                   <a class="dropdown-item" href="javascript:void(0);" id="rowId_<?php echo $categoryList['all_list'][$i]['catalog_id'];?>" onclick="deleteCategory(<?php echo $categoryList['all_list'][$i]['catalog_id'];?>);"><i class="zmdi zmdi-delete zmdi-hc-fw"></i> Delete</a>
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
                
                
              
                <!-- Add modal -->
                <div class="modal fade" id="add_modal" tabindex="-1">
                    <div class="modal-dialog">
                        
                    <form method="POST" action="<?php echo base_url('OurClasses/addCatalog');  ?>" enctype="multipart/form-data">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title pull-left">Add</h5>
                            </div>
                            <div class="modal-body">
                                
                            
                                <label>Name</label>
                                <input type="text" class="form-control"  id="catalog_name" name="catalog_name" placeholder="Name">
                                <span id="cat_name-error"></span>
                                <?php //print_r($categoryListCatalogue); ?>
                                <label>Category</label>
                                <Select class="form-control"  id="catalog_catid" name="catalog_catid">
                                    <option>Choose Catalog Category</option>
                                    <?php 
                                    for($c=0;$c<$categoryListCatalogue['list_count'];$c++){
                                    ?>
                                     <option value="<?php echo $categoryListCatalogue['all_list'][$c]['category_id']; ?>"><?php echo $categoryListCatalogue['all_list'][$c]['cat_name']; ?></option>
                                     <?php
    
                                     } ?>
                                 
                                   
                                </Select>
                                <span id="cat_name-error"></span>
                                
                                <label>Description</label>
                                <input type="text" class="form-control"  id="catalog_desc" name="catalog_desc" placeholder="Description">
                                <span id="cat_desc-error"></span>
                                
                                
                                
                                
                                <label>Image</label>
                                <input type="file" class="form-control" data-placeholder="description" id="catalog_img" name="catalog_img">
                                <span id="cat_img-error"></span>
                                
                                <span id="addmsg"></span>
                                  
                            </div>
                            
                            <div class="modal-footer">
                              <!--  onclick="add_category()"-->
                                <button type="submit" class="btn btn-link" >Save changes</button>
                                <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
                
                 <!-- Edit modal -->
                <div class="modal fade" id="edit_modal" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title pull-left">Edit </h5>
                            </div>
                            <div class="modal-body">
                                 <label>Name</label>
                                <input type="text" class="form-control"  id="edit_catalaog_name" placeholder="Name">
                                <span id="cat_name-error"></span>
                                
                                <label>Category</label>
                                <Select class="form-control"  id="edit_catalog_catid" name="catalog_catid">
                                    <option>Choose Catalog Category</option>
                                    <?php 
                                    for($c=0;$c<$categoryListCatalogue['list_count'];$c++){
                                    ?>
                                     <option value="<?php echo $categoryListCatalogue['all_list'][$c]['category_id']; ?>"><?php echo $categoryListCatalogue['all_list'][$c]['cat_name']; ?></option>
                                     <?php
    
                                     } ?>
                                 
                                   
                                </Select>
                                
                                
                                 <label>Description</label>
                                <input type="text" class="form-control"  id="edit_catalaog_desc" placeholder="Description">
                                <span id="cat_desc-error"></span>
                                  
                                <div class="image_content">
                                
                                </div>
                                <label>Image</label>
                                <input type="file" class="form-control" data-placeholder="description" id="edit_catalaog_img">
                              
                                
                                <span id="editmsg"></span>
                            </div>
                            
                            <div class="modal-footer">
                                <button type="button" class="btn btn-link" onclick="submitedit()">Save changes</button>
                                <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                

        