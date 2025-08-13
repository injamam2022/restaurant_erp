
            
            <section class="content">
                <header class="content__title">
                    <h1>Student Management </h1>
                   
                   <!-- <a href="<?php //echo base_url('AssignMenu/add'); ?>"><button type="button" class="btn btn-dark"> <span><i class="zmdi zmdi-plus zmdi-hc-fw"></i>Add </span></button></a>-->

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
                        
                        
                        <?php
//                          echo "<pre>";
//                          print_r($dataList);
                        
                        
                        ?>
                        <div class="table-responsive">
                            <table id="data-table" class="table" >
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>School Name</th>
                                        <th>School Code</th>
                                        <th>Student Name </th>
                                        <th>Student Email</th>
                                        <th>Registration Date</th>
                                        <th></th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    if($dataList['stat']==200){
                                        for($i=0 ; $i<count($dataList['all_list']); $i++){
                                            
                                    ?>
                                    <tr>
                                        <td><?php echo $dataList['all_list'][$i]['student_id']?></td>
                                        <td><?php echo $dataList['all_list'][$i]['school_name']?></td>
                                        <td><?php echo $dataList['all_list'][$i]['school_code']?></td>
                                        <td><?php echo $dataList['all_list'][$i]['full_name']?></td>
                                        <td><?php echo $dataList['all_list'][$i]['student_email']?></td>
                                        <td><?php echo $dataList['all_list'][$i]['student_added_date']?></td>
                                        
                                        <td>
                                            <div class="btn-group mb-2 dropright">
                                               <!--<button type="button" class="btn btn-light waves-effect waves-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>-->
                                               <div class="dropdown-menu" x-placement="right-start" style="position: absolute; transform: translate3d(104px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                   
                                                   <a class="dropdown-item" href="<?php echo base_url('StudentManagement/view/').$dataList['all_list'][$i]['student_id']; ?>" ><i class="zmdi zmdi-edit zmdi-hc-fw"></i> View</a>
                                                   
                                                  <!-- <a class="dropdown-item" href="<?php //echo base_url('AssignMenu/delete/').$dataList['all_list'][$i]['student_id']; ?>" ><i class="zmdi zmdi-delete zmdi-hc-fw"></i> Delete</a>-->
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
                                <h5 class="modal-title pull-left">Add </h5>
                            </div>
                            <div class="modal-body">
                                 <label>Name</label>
                                <input type="text" class="form-control"  id="ocs_name" placeholder="Name">
                                <span id="ocs_name-error"></span>
                                
                                <span id="addmsg"></span>
                            </div>
                            
                            <div class="modal-footer">
                                <button type="button" class="btn btn-link" onclick="add_occasion()">Save changes</button>
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
                                <label>Name</label>
                                <input type="text" class="form-control"  id="edit_ocs_name" placeholder="Name">
                                <span id="edit_ocs_name-error"></span>
                                
                                <span id="editmsg"></span>
                            </div>
                            
                            <div class="modal-footer">
                                <button type="button" class="btn btn-link" onclick="submitedit()">Save changes</button>
                                <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                

        