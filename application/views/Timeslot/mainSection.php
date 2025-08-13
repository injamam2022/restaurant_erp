
            
            <section class="content">
                <header class="content__title">
                    <h1>Time  Slot</h1>
                   
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
                                        <th>Action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    if($timeslotList['stat']==200){
                                        for($i=0 ; $i<count($timeslotList['all_list']); $i++){
                                            
                                    ?>
                                    <tr>
                                        <td><?php echo $timeslotList['all_list'][$i]['timeslot_id']?></td>
                                        <td><?php echo $timeslotList['all_list'][$i]['timeslot_name']?></td>
                                        <td>
                                            <div class="btn-group mb-2 dropright">
                                               <button type="button" class="btn btn-light waves-effect waves-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                               <div class="dropdown-menu" x-placement="right-start" style="position: absolute; transform: translate3d(104px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                   
                                                     <a class="dropdown-item" href="javascript:void(0);" onclick="edit_data(<?php echo $timeslotList['all_list'][$i]['timeslot_id'];?>,'view');"><i class="zmdi zmdi-edit zmdi-hc-fw"></i> View</a>
                                                   
                                                   <a class="dropdown-item" href="javascript:void(0);" onclick="edit_data(<?php echo $timeslotList['all_list'][$i]['timeslot_id'];?>,'edit');"><i class="zmdi zmdi-edit zmdi-hc-fw"></i> Edit</a>
                                                   
                                                   <a class="dropdown-item" href="javascript:void(0);" id="rowId_<?php echo $timeslotList['all_list'][$i]['timeslot_id'];?>" onclick="delete_data(<?php echo $timeslotList['all_list'][$i]['timeslot_id'];?>);"><i class="zmdi zmdi-delete zmdi-hc-fw"></i> Delete</a>
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
                                <input type="text" class="form-control"  id="timeslot_name" placeholder="Slot Name">
                                <span id="timeslot_name-error"></span>
                                
                              
                            </div>
                            
                             <div class="modal-body">
                                 <label>Enter Time Interval For Labeling</label>
                                <input type="text" class="form-control"  id="timeslot_interval" placeholder="Slot Interval">
                                <span id="timeslot_name-error"></span>
                                
                               
                            </div>
                            
                              <div class="modal-body">
                                 <label>Enter From Time</label>
                                <input type="time" class="form-control"  id="time_slot_from" placeholder="Slot From Interval">
                                <span id="from_time-error"></span>
                                
                               
                            </div>
                            
                             <div class="modal-body">
                                 <label>Enter To Time</label>
                                <input type="time" class="form-control"  id="time_slot_to" placeholder="Slot To Interval">
                                <span id="from_time-error"></span>
                                
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
                                 <label>Name</label>
                                <input type="text" class="form-control"  id="edit_timeslot_name" placeholder="Name">
                                <span id="edit_timeslot_name-error"></span>
                                
                              
                            </div>
                               <div class="modal-body">
                                 <label>Enter Time Interval For Labeling</label>
                                <input type="text" class="form-control"  id="edit_timeslot_interval" placeholder="Slot Interval">
                                <span id="timeslot_name-error"></span>
                                
                                 
                            </div>
                            
                             <div class="modal-body">
                                 <label>Enter From Time</label>
                                <input type="time" class="form-control"  id="edit_time_slot_from" placeholder="Slot From Interval">
                                <span id="from_time-error"></span>
                                
                               
                            </div>
                            
                             <div class="modal-body">
                                 <label>Enter To Time</label>
                                <input type="time" class="form-control"  id="edit_time_slot_to" placeholder="Slot To Interval">
                                <span id="from_time-error"></span>
                                
                                 <span id="editmsg"></span>
                            </div>
                          
                            <div class="modal-footer">
                                <button type="button" class="btn btn-link" onclick="submitedit()" id="edit-box">Save changes</button>
                                <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                

        