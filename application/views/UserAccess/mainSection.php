
            
            <section class="content">
                <header class="content__title">
                    <h1>User Manager</h1>
                   
<!--                    <button type="button" class="btn btn-dark"  data-toggle="modal" data-target="#add_modal" onclick="clrmsg()"> <span><i class="zmdi zmdi-plus zmdi-hc-fw"></i>Add </span></button>-->

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
<!--                                        <th>Role Name</th>-->
                                        <th>Menu</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    if($userList['stat']==200){
                                        for($i=0 ; $i<count($userList['all_list']); $i++){
                                            
                                    ?>
                                    <tr>    
                                        
                                        <td><?php echo $userList['all_list'][$i]['admin_id'];?></td>
                                        <td><?php echo $userList['all_list'][$i]['email_id'];?></td>
<!--                                        <td><?php echo $userList['all_list'][$i]['role_name'];?></td>-->
                                        
                                        <?php 
                                            $page_id=explode(",",$userList['all_list'][$i]['page_id']);
                                            
//                                            for($k=0;$k<count($page_id);$k++)
//                                            {
//                                                 if($pageList['stat']==200)
//                                                {
//                                                    for($j=0;$j<count($pageList['all_list']);$j++)
//                                                    {
//                                                        if($pageList['all_list'][$j]['page_id']==$page_id[$k])
//                                                        {
//                                                            $page_name[]=$pageList['all_list'][$j]['page_name'];
//                                                        }
//                                                        
//                                                    }
//                                               
//                                                }
//                                     
//                                            }
                                          
                                             /* $page_name.=",".$page_name.",";      */         
                                                        
                                        
                                        ?>
                                        <td><?php // print_r($page_id); //echo $page_name;?>
                                             <?php
                                             for($p=0;$p<count($page_id);$p++)
                                             {
                                                
                                                 for($j=0;$j<count($pageList['all_list']);$j++)
                                                    {
                                                        if($pageList['all_list'][$j]['page_id']==$page_id[$p])
                                                        {
                                                            
                                                            echo $pageList['all_list'][$j]['page_name'];
                                                            echo ",";
                                                           
                                                            
                                                            
                                                        }
                                                      
                                                   }
                                             }
                                            
                                              ?>
                                        
                                        </td>
                                      
                                        
                                        
                                        <td>
                                            <div class="btn-group mb-2 dropright">
                                               <button type="button" class="btn btn-light waves-effect waves-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                               <div class="dropdown-menu" x-placement="right-start" style="position: absolute; transform: translate3d(104px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                   
                                                    <a class="dropdown-item" href="javascript:void(0);" onclick="editUserAccess(<?php echo $userList['all_list'][$i]['admin_id'];?>,'view');" id="rowId_<?php echo $userList['all_list'][$i]['admin_id'];?>"><i class="zmdi zmdi-edit zmdi-hc-fw"></i> View</a>
                                                   
                                                   <a class="dropdown-item" href="javascript:void(0);" onclick="editUserAccess(<?php echo $userList['all_list'][$i]['admin_id'];?>,'edit');" id="rowId_<?php echo $userList['all_list'][$i]['admin_id'];?>"><i class="zmdi zmdi-edit zmdi-hc-fw"></i> Edit</a>
                                                 
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
                
                
                
       
                
                 <!-- Edit modal -->
                <div class="modal fade" id="edit_modal" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title pull-left" id="message-info">Edit </h5>
                            </div>
                            <div class="modal-body">
                                <label>User</label>
                                <select class="form-control" id="edit_admin_id">
                                     
                                     <option value="0">Select User</option>
                                        <?php 
                                        if($userList['stat']==200)

                                            {
                                                for($i=0;$i<count($userList['all_list']);$i++)
                                                    {
                                        ?>

                                        <option  value="<?php echo $userList['all_list'][$i]['admin_id'];?>"><?php echo $userList['all_list'][$i]['email_id'];?></option>
                                        <?php } } ?>
                                </select>
                                 <span id="role_id-error"></span>
                                
                                 <div class="form-group">
                                    <label>User Access</label>
                                 <select class="form-control select2all" id="edit_page_id" multiple data-placeholder="Select Menu">
                                        <?php 
                                        if($pageList['stat']==200)

                                            {
                                                for($i=0;$i<count($pageList['all_list']);$i++)
                                                    {
                                        ?>

                                        <option dataval="<?php echo $pageList['all_list'][$i]['page_name'];?>" value="<?php echo $pageList['all_list'][$i]['page_id'];?>"><?php echo $pageList['all_list'][$i]['page_name'];?></option>
                                        <?php } } ?>
                                </select>
                                 <span id="page_id-error"></span>
                                    </div>
                                  
                               
                                
                                <span id="editmsg"></span>
                            </div>
                            
                            <div class="modal-footer">
                                <button type="button" class="btn btn-link" id="edit-box" onclick="submitedit()">Save changes</button>
                                <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                

        