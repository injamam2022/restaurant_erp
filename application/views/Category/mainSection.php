
            
            <section class="content">
                <header class="content__title">
                    <h1>Category</h1>
                   
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
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    if($categoryList['stat']==200){
                                        for($i=0 ; $i<count($categoryList['all_list']); $i++){
                                            
                                    ?>
                                    <tr>    
                                        
                                        <td><?php echo $categoryList['all_list'][$i]['category_id'];?></td>
                                        <td><?php echo $categoryList['all_list'][$i]['cat_name'];?></td>
                                        <td><?php echo $categoryList['all_list'][$i]['cat_desc'];?></td>
                                        <td>
                                            <img src="<?php echo $this->config->item('file_url').'category/'.$categoryList['all_list'][$i]['cat_img'];?>" style="width:100px; height:100px;">
                                           
                                        
                                        </td>
                                        <td>
                                            <div class="btn-group mb-2 dropright">
                                               <button type="button" class="btn btn-light waves-effect waves-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                               <div class="dropdown-menu" x-placement="right-start" style="position: absolute; transform: translate3d(104px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                   
                                                     <a class="dropdown-item" href="javascript:void(0);" onclick="editCategory(<?php echo $categoryList['all_list'][$i]['category_id'];?>,'view');"><i class="zmdi zmdi-edit zmdi-hc-fw"></i> View</a>
                                                   
                                                   <a class="dropdown-item" href="javascript:void(0);" onclick="editCategory(<?php echo $categoryList['all_list'][$i]['category_id'];?>,'edit');"><i class="zmdi zmdi-edit zmdi-hc-fw"></i> Edit</a>
                                                   
                                                   <a class="dropdown-item" href="javascript:void(0);" id="rowId_<?php echo $categoryList['all_list'][$i]['category_id'];?>" onclick="deleteCategory(<?php echo $categoryList['all_list'][$i]['category_id'];?>);"><i class="zmdi zmdi-delete zmdi-hc-fw"></i> Delete</a>
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
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title pull-left">Add</h5>
                            </div>
                            <div class="modal-body">
                                
                            
                                <label>Name</label>
                                <input type="text" class="form-control"  id="cat_name" placeholder="Name">
                                <span id="cat_name-error"></span>
                                
                                <label>Description</label>
                                <input type="text" class="form-control"  id="cat_desc" placeholder="Description">
                                <span id="cat_desc-error"></span>
                                
                                <label>Image</label>
                                <input type="file" class="form-control" data-placeholder="description" id="cat_img">
                                <span id="cat_img-error"></span>
                                
                                <span id="addmsg"></span>
                                  
                            </div>
                            
                            <div class="modal-footer">
                                <button type="button" class="btn btn-link" onclick="add_category()">Save changes</button>
                                <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                 <!-- Edit modal -->
                <div class="modal fade" id="edit_modal" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title pull-left" id="message-info">Edit </h5>
                            </div>
                            <div class="modal-body">
                                 <label>Name</label>
                                <input type="text" class="form-control"  id="edit_cat_name" placeholder="Name">
                                <span id="cat_name-error"></span>
                                 <label>Description</label>
                                <input type="text" class="form-control"  id="edit_cat_desc" placeholder="Description">
                                <span id="cat_desc-error"></span>
                                  
                                <div class="image_content">
                                
                                </div>
                                <label>Image</label>
                                <input type="file" class="form-control" data-placeholder="description" id="edit_cat_img">
                              
                                
                                <span id="editmsg"></span>
                            </div>
                            
                            <div class="modal-footer">
                                <button type="button" class="btn btn-link" onclick="submitedit()"  id="edit-box">Save changes</button>
                                <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                

        