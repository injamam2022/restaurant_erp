
    <!-- ==============My account start ============== -->
<?php
 /*  echo "<pre>";
   print_r($student_info);
*/
?>


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

        
    <section class="my_account">
        <div class="my_acco_bottom_shape">
            <img src="<?php echo base_url('fassets/'); ?>images/testi-shape-2.png" alt="">
        </div>
        <div class="container">
            <div class="my_acco_tab">
                <div class="my_acco_tab_header">
                    <h2>My account</h2>
                    <div class="my_acco_shape">
                        <img src="<?php echo base_url('fassets/'); ?>images/testi-shape-1.png" alt="">
                    </div>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Personal Details</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Order History</a>
                        </li>
                    </ul>
                </div>
                <div class="my_acco_tab_content">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="profile">
                                <h3 class="my_acco_tab_title">Personal Details</h3>
                                 <form method="POST" action="<?php echo base_url('StudentAccount/update_profile'); ?>" enctype="multipart/form-data">
                                <div class="row">
                                    
                                    
                                    <div class="col-sm-4">
                                         <div class="profile_cnt">
                                            <div class="profile_img">

                                                <div class="avatar-upload">
                                                    <div class="avatar-edit">
                                                        <input type='file' name="student_image" id="imageUpload" accept=".png, .jpg, .jpeg" />
                                                        <label for="imageUpload"></label>
                                                    </div>
                                                    <div class="avatar-preview">
                                                        
                                                        <?php if($student_info['all_list'][0]['student_image'] != "") { ?> 
                                                        
                                                        <div id="imagePreview" style="background-image: url(<?php echo base_url('master_images/student_image/').$student_info['all_list'][0]['student_image']; ?>);">
                                                        </div>
                                                        
                                                        <?php } else { ?> 
                                                        
                                                        <div class="profile_img">
                                                          <img src="<?php echo base_url('fassets/') ?>images/profile.png" alt="">
                                                         </div>
                                                        <?php } ?>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                             <input type="hidden" name="earlier_file" value="<?php echo $student_info['all_list'][0]['student_image'];  ?>">
                                            <div class="profile_info">
                                                <p><?php echo $student_info['all_list'][0]['full_name'];  ?></p>
                                                <span>Registered Email:-<?php echo $student_info['all_list'][0]['student_email'];  ?></span>
                                                <p><?php echo $student_info['all_list'][0]['school_name'];  ?></p>
                                                <!--<p>
                                                    <b>Collection Point :</b>Academy playground
                                                </p>-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                         <div class="personal_dtl_cnt">
                                           
                                                <div class="row">
       
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label>Full Name</label>
                                                            <input type="text" name="full_name" class="form-control card_number" placeholder="Enter Your Name" value="<?php echo $student_info['all_list'][0]['full_name'];  ?>" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label>Year Group</label>
                                                            <select class="form-control" name="year_group" >
                                                                 <option value="">Select</option>
            <option <?php if($student_info['all_list'][0]['year_group'] == 1) { echo "selected"; } ?> value="1">10 - 11 yrs</option>
            <option <?php if($student_info['all_list'][0]['year_group'] == 2) { echo "selected"; } ?> value="2">11 - 12 yrs</option>
            <option <?php if($student_info['all_list'][0]['year_group'] == 3) { echo "selected"; } ?> value="3">13 - 14 yrs</option>
            <option <?php if($student_info['all_list'][0]['year_group'] == 4) { echo "selected"; } ?> value="4">15 - 16 yrs</option>
           
                                                                  
                                                              </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="form-group">
                                                            <label>Classroom</label>
                                                            <input type="text" name="classroom" class="form-control card_number" placeholder="Enter Your Classroom" value="<?php echo $student_info['all_list'][0]['classroom'];  ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label>Dietary Requirements</label>
                                                            <textarea class="form-control" name="dietary_req"><?php echo $student_info['all_list'][0]['dietary_req'];  ?></textarea>
                                                        </div>
                                                    </div>
                                                   <!-- <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label>Email Address</label>
                                                            <input type="text" name="" class="form-control card_number" placeholder="Enter Your Email id" value="">
                                                        </div>
                                                    </div>-->
                                                    <!--<div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label>Password</label>
                                                            <input type="number" name="" class="form-control card_number" placeholder="Type Your Password">
                                                        </div>
                                                    </div>-->
                                                </div>


                                                <button type="submit" class="btn custom_btn registration_next">Update</button>
                                          
                                        </div>
                                    </div>
                                    
                                     
                                    
                                </div>
                                      </form>
                                <!-- <div class="profile_cnt">
                                    <div class="profile_img">
                                        <img src="<?php echo base_url('fassets/'); ?>images/profile.png" alt="">
                                    </div>
                                    <div class="profile_info">
                                        <p>John Doe</p>
                                        <span>10-15 yrs</span>
                                        <p>Vantage Academy of Ireland</p>
                                        <p>
                                            <b>Collection Point :</b>Academy playground
                                        </p>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <h3 class="my_acco_tab_title">Order History</h3>
                            
                   
            
                            <table id="customers">
                                <tr>
                                    <th>Order Id</th>
                                    <th>Pick Up Point</th>
                                    <th>Order Date and Time</th>
                                    <th>Billing Address</th>
                                    <th>Action</th>
                                </tr>
                                 <?php
                    
                   /* echo "<pre>";
                    print_r($order_info);*/
                    for($i=0;$i<count($order_info['all_list']);$i++){
                        ?>
                                <tr>
                                    <td>#1000<?php echo $order_info['all_list'][$i]['order_id']; ?></td>
                                    <td>
                                        <div class="meal_content">
                                            
                                            <div class="meal_info">
                    <p><?php echo $student_info['all_list'][0]['school_name']."<br>".$order_info['all_list'][$i]['timeslot_name'];  ?></p>
                                                <span><?php //echo $order_info['all_list'][$i]['timeslot_interval']; ?></span>
                                            </div>
                                        </div>
                                    </td>
                                    <td><?php echo $order_info['all_list'][$i]['added_date']; ?></td>
                                  
                        <!-- <a href="javascript:void('0');" onclick="get_order_details('<?php //echo $order_info['all_list'][$i]['order_id']; ?>')" >View</a>-->
                                    
                                    <td>
                                     Billing Name :- <?php echo $order_info['all_list'][$i]['billing_name']; ?> <br>
                                     Billing Phone :- <?php echo $order_info['all_list'][$i]['billing_phone']; ?> <br>
                                     Billing Address :- <?php echo $order_info['all_list'][$i]['billing_address']; ?> <br>
                                     Billing Pincode :- <?php echo $order_info['all_list'][$i]['pincode']; ?> <br>
                                    
                                    </td>
                                    <td>
                                     <a href="javascript:void('0');" class="custom_btn view_btn" onclick="get_order_details('<?php echo $order_info['all_list'][$i]['order_id']; ?>')" >View</a>
                                    
                                    </td>
                                    
                                   
                                </tr>
                                <?php  } ?>
                               <!-- <tr>
                                    <td>
                                        <div class="meal_content">
                                            <div class="meal_img">
                                                <img src="images/meal-2.png" alt="">
                                            </div>
                                            <div class="meal_info">
                                                <p>Black bean salad with corn</p>
                                                <span>1 Plate</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>12:30 / 10.06.2021</td>
                                    <td>#15432</td>
                                    <td>Down Town , Academy Play Ground</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="meal_content">
                                            <div class="meal_img">
                                                <img src="images/meal-3.png" alt="">
                                            </div>
                                            <div class="meal_info">
                                                <p>Black bean salad with corn</p>
                                                <span>1 Plate</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>12:30 / 10.06.2021</td>
                                    <td>#15432</td>
                                    <td>Down Town , Academy Play Ground</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="meal_content">
                                            <div class="meal_img">
                                                <img src="images/meal-4.png" alt="">
                                            </div>
                                            <div class="meal_info">
                                                <p>Black bean salad with corn</p>
                                                <span>1 Plate</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>12:30 / 10.06.2021</td>
                                    <td>#15432</td>
                                    <td>Down Town , Academy Play Ground</td>
                                </tr>-->
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==============My account end ============== -->

<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Order Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table id="modal_table" >
                        
                        
<!--                        <div id="order_content"></div>-->

                    </table>
                </div>
                <div class="modal-footer" id="savechnages_btn">
                   
                </div>
            </div>
        </div>
    </div>
