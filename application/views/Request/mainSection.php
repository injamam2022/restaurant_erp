<?php  //echo "<pre>"; print_r($requestList); ?>
            
            <section class="content">
                <header class="content__title">
                    <h1>Customer Request</h1>
                   
                    
                </header>
                
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">List</h4>
                     
                        
                        <div class="table-responsive">
                            <table id="data-table" class="table" >
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name (Parent's Name)</th>
                                        <th>Email Id</th>
                                        <th>Phone</th>
<!--                                        <th>Date</th>-->
                                        <th>Address</th>
                                        <th>Subject</th>
                                        <th>Message</th>
                                        <th>Information (Childs's Name)</th>
                                        <th>Board</th>
                                        <th>Request Type</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    if($requestList['stat']==200){
                                        for($i=0 ; $i<count($requestList['all_list']); $i++){
                                            
                                    ?>
                                    <tr>    
                                        
                                        <td><?php echo $requestList['all_list'][$i]['request_id'];?></td>
                                        <td><?php echo $requestList['all_list'][$i]['name'];?></td>
                                        <td><?php echo $requestList['all_list'][$i]['email_id'];?></td>
                                        <td><?php echo $requestList['all_list'][$i]['phone'];?></td>
                                        <td><?php echo $requestList['all_list'][$i]['address'];?></td>
                                        <td><?php echo $requestList['all_list'][$i]['subject'];?></td>
                                        <td><?php echo $requestList['all_list'][$i]['message'];?></td>
                                        <td><?php echo $requestList['all_list'][$i]['f_childname']; ?></td>
                                        <td><?php echo $requestList['all_list'][$i]['f_board'] ;  ?></td>
                                        
                                        <td><?php 
                                            
                                          if($requestList['all_list'][$i]['enquiry_type'] == 1)
                                          {
                                                echo "Feedback form";
                                          }
                                          else   if($requestList['all_list'][$i]['enquiry_type'] == 4)
                                          {
                                                 echo "Admission Enquiry Form";
                                          }
                                          else if($requestList['all_list'][$i]['enquiry_type'] == 3)
                                          {
                                               echo "News letter";
                                          }
                                          else if($requestList['all_list'][$i]['enquiry_type'] == 2)
                                          {
                                                echo "Enroll";
                                          }
                                            
                                            
                                            ?></td>
<!--
                                        <td>
                                            
                                            <?php $imgarr=explode(",",$requestList['all_list'][$i]['product_image']);?>
                                            <img src="<?php echo $this->config->item('file_url').$imgarr[0];?>" style="width:100px; height:100px;">
                                           
                                        
                                        </td>
                                        
                                        <td>
                                            
                                            
                                            <?php
                                               if($requestList['all_list'][$i]['enquiry_type'] == 1)
                                               {
                                                   echo "CATALOG ENQUIRY";
                                               }
                                            else if($requestList['all_list'][$i]['enquiry_type'] == 2)
                                            {
                                                   echo "PRODUCT ENQUIRY";
                                            }
                                             else if($requestList['all_list'][$i]['enquiry_type'] == 3)
                                            {
                                                   echo "NEWSLETTER";
                                            }
                                            ?>
                                        
                                        
                                        </td>
-->

                                        
                                    </tr>
                                    <?php }}?>
                                    
                                    
                                    
                               
                                    
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
                
                
             