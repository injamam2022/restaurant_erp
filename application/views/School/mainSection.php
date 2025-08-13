
            
            <section class="content">
                <header class="content__title">
                    <h1>School Mangement</h1>
                   
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
                                    if($dataList['stat']==200){
                                        for($i=0 ; $i<count($dataList['all_list']); $i++){
                                            
                                    ?>
                                    <tr>    
                                        
                                        <td><?php echo $dataList['all_list'][$i]['school_id'];?></td>
                                        <td><?php echo $dataList['all_list'][$i]['school_name'];?></td>
                                        <td><?php echo $dataList['all_list'][$i]['school_desc'];?></td>
                                        <td>
                                            <img src="<?php echo $this->config->item('file_url').'school/'.$dataList['all_list'][$i]['school_img'];?>" style="width:100px; height:100px;">
                                           
                                        
                                        </td>
                                        <td>
                                            <div class="btn-group mb-2 dropright">
                                               <button type="button" class="btn btn-light waves-effect waves-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                               <div class="dropdown-menu" x-placement="right-start" style="position: absolute; transform: translate3d(104px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                   
                                                   <a class="dropdown-item" href="javascript:void(0);" onclick="edit_data(<?php echo $dataList['all_list'][$i]['school_id'];?>,'view');"><i class="zmdi zmdi-edit zmdi-hc-fw"></i> View</a>
                                                   
                                                   <a class="dropdown-item" href="javascript:void(0);" onclick="edit_data(<?php echo $dataList['all_list'][$i]['school_id'];?>,'edit');"><i class="zmdi zmdi-edit zmdi-hc-fw"></i> Edit</a>
                                                   
                                                   <a class="dropdown-item" href="javascript:void(0);" id="rowId_<?php echo $dataList['all_list'][$i]['school_id'];?>" onclick="delete_data(<?php echo $dataList['all_list'][$i]['school_id'];?>);"><i class="zmdi zmdi-delete zmdi-hc-fw"></i> Delete</a>
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
                                
                                <label>School Code</label>
                                <input type="text" class="form-control"  id="school_code" placeholder="School Code">
                                <span id="school_code-error"></span>
                                
                                <label>Name</label>
                                <input type="text" class="form-control"  id="school_name" placeholder="Name">
                                <span id="school_name-error"></span>
                                
                                 <label>Chef Email</label>
                                <input type="text" class="form-control"  id="school_chef_email" placeholder="Chef Email">
                                <span id="school_chef_email-error"></span>
                                
                                <label>Description</label>
                                <input type="text" class="form-control"  id="school_desc" placeholder="Description">
                                <span id="school_desc-error"></span>
                                
                                <label>Image</label>
                                <input type="file" class="form-control" data-placeholder="description" id="school_img">
                                <span id="school_img-error"></span>
                                
                                <span id="addmsg"></span>
                                  
                            </div>
                            
                            <div class="modal-footer">
                                <button type="button" class="btn btn-link" onclick="add_data()">Save changes</button>
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
                                
                                 <label>School Code</label>
                                <input type="text" class="form-control"  id="edit_school_code" placeholder="School Code">
                                <span id="edit_school_code-error"></span>
                                
                                 <label>Name</label>
                                <input type="text" class="form-control"  id="edit_school_name" placeholder="Name">
                                <span id="edit_school_name-error"></span>
                                
                                
                                  <label>Chef Email</label>
                                <input type="text" class="form-control"  id="edit_school_chef_email" placeholder="Chef Email">
                                <span id="edit_school_chef_email-error"></span>
                                
                                 <label>Description</label>
                                <input type="text" class="form-control"  id="edit_school_desc" placeholder="Description">
                                <span id="edit_school_desc-error"></span>
                                  
                                <div class="image_content">
                                
                                </div>
                                <label>Image</label>
                                <input type="file" class="form-control" data-placeholder="description" id="edit_school_img">
                              
                                <input type="hidden" id="edit_school_id">
                                <span id="editmsg"></span>
                            </div>
                            
                            <div class="modal-footer">
                                <button type="button" class="btn btn-link"  id="edit-box"  onclick="update_data()">Save changes</button>
                                <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                

        