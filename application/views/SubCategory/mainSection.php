
            
            <section class="content">
                <header class="content__title">
                    <h1><?php echo $this->uri->segment(1); ?></h1>
                   
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
                                        <th>Category Name</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    // echo "<pre>";
                                    // print_r($subCategoryList);
                                    if($subCategoryList['stat']==200){
                                        for($i=0 ; $i<count($subCategoryList['all_list']); $i++){
                                            
                                    ?>
                                    <tr>    
                                        <td><?php echo $subCategoryList['all_list'][$i]['sub_category_id'];?></td>
                                        <td>
                                    
                                        <?php
                                            for($j=0;$j<$category_list['list_count'];$j++)
                                            {
                                                if($category_list['all_list'][$j]['category_id'] == $subCategoryList['all_list'][$i]['category_id']){
                                                    
                                                    echo $category_list['all_list'][$j]['cat_name'];
                                                }
                                            }
                                        ?>
                                    
                                        </td>
                                        <td><?php echo $subCategoryList['all_list'][$i]['sub_category_name'];?></td>
                                        <td><?php echo $subCategoryList['all_list'][$i]['sub_category_description'];?></td>
                                        <td>
                                            <?php if($subCategoryList['all_list'][$i]['sub_category_image'] !== "Blank"){ ?> 
                                            <img src="<?php echo $this->config->item('file_url').'subCategoryImage/'.$subCategoryList['all_list'][$i]['sub_category_image'];?>" style="width:100px; height:100px;">
                                            <?php } else { echo "No Image Added"; } ?>
                                        
                                        </td>
                                        <td>
                                            <div class="btn-group mb-2 dropright">
                                               <button type="button" class="btn btn-light waves-effect waves-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                               <div class="dropdown-menu" x-placement="right-start" style="position: absolute; transform: translate3d(104px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                   
                                                   <a class="dropdown-item" href="javascript:void(0);" onclick="editSubCategory(<?php echo $subCategoryList['all_list'][$i]['sub_category_id'];?>);"><i class="zmdi zmdi-edit zmdi-hc-fw"></i> Edit</a>
                                                   
                                                   <a class="dropdown-item" href="javascript:void(0);" id="rowId_<?php echo $subCategoryList['all_list'][$i]['sub_category_id'];?>" onclick="deleteSubCategory(<?php echo $subCategoryList['all_list'][$i]['sub_category_id'];?>);"><i class="zmdi zmdi-delete zmdi-hc-fw"></i> Delete</a>
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

                    <div class="form-group">
                        <label>Category</label>

                            <select id="categoryId" class="form-control text-center" >
                                <option selected disabled>Select Category</option>
                                
                            <?php for($l=0;$l<count($category_list['all_list']);$l++) { ?> 
                                <option value="<?php echo $category_list['all_list'][$l]['category_id'] ?>" ><?php echo $category_list['all_list'][$l]['cat_name'] ?></option>
                            <?php } ?>
                            </select>
                        
                        <span id="categoryId-error" class="err"></span>
                    </div>
                                
                    <div class="form-group">        
                        <label>SubCategory Name</label>
                        <input type="text" class="form-control"  id="subCategoryName" placeholder="Name">
                        <span id="subCategoryName-error"></span>
                   </div>
                    
                   <div class="form-group">        
                    <label>SubCategory Description</label>
                    <input type="text" class="form-control"  id="subCategoryDescription" placeholder="Description">
                    <span id="subCategoryDescription-error"></span>
                   </div>
                    
                   <div class="form-group">        

                    <label>SubCategory Image</label>
                    <input type="file" class="form-control" data-placeholder="subCategoryImage" id="subCategoryImage">
                    <span id="subCategoryImage-error"></span>
                  </div>

                    <span id="addmsg"></span>
                                  
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-link" onclick="addSubCategory()">Save changes</button>
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
                                <h5 class="modal-title pull-left">Edit </h5>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Category </label>
                                    <select id="editCategoryId" class="form-control text-center" >
                                        <option selected disabled>Select Category</option>
                                        
                                        <?php for($l=0;$l<count($category_list['all_list']);$l++) { ?> 
                                        <option value="<?php echo $category_list['all_list'][$l]['category_id'] ?>" ><?php echo $category_list['all_list'][$l]['cat_name'] ?></option>
                                        <?php } ?>
                                    </select>
                                
                                    <span id="editCategoryId-error" class="err"></span>
                                </div>



                            <div class="form-group">
                                 <label>Sub Category Name</label>
                                <input type="text" class="form-control"  id="editSubcategoryName" placeholder="Name">
                                <span id="editSubcategoryName-error"></span>
                            </div>
                               
                            <div class="form-group">
                                <label>Description</label>
                                <input type="text" class="form-control"  id="editSubcategoryDescription" placeholder="Description">
                                <span id="editSubcategoryDescription-error"></span>
                            </div>
                                  
                          <div class="image_content">
                            
                                
                              
                            </div>
                            
                            <div class="form-group">    
                                </div>
                                <label>Image</label>
                                <input type="file" class="form-control" data-placeholder="image" id="editSubcategoryImage">
                            </div>
                            <span id="editmsg"></span>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-link" onclick="updateSubCategory()">Save changes</button>
                                <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                

        