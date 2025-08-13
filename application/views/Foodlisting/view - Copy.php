
    <!-- ==============header end ==============-->
    <!-- ==============banner start ==============-->

    <section class="banner_section inner_banner_section">
            <div class="banner_slide">
                <div class="bannar_inner_cnt ">
                    <h1>When food becomes <span>magical</span> and enjoy your <span>Lunch break</span></h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                </div>
                <div class="banner_img">
                    <img src="<?php echo base_url('fassets/') ?>images/listing-banner.png" alt="" class="img-fluid">
                </div>
            </div>
    </section>

    <!-- ==============banner end ==============-->
    <a href="#" class="custom_btn" data-toggle="modal" data-target="#exampleModal">Click here</a>
    <section class="product_listing">
        <div class="product_listing_top_shape">
            <img src="<?php echo base_url('fassets/') ?>images/testi-shape-1.png">
        </div>
        <div class="product_listing_bottom_shape">
            <img src="<?php echo base_url('fassets/') ?>images/testi-shape-2.png">
        </div>
        <div class="container">
            <h2 class="title">Amazing food waiting for you</h2>
            <div class="product_ser_cnt">
                <div class="row">
                    <!--<div class="col-sm-6">
                        <div class="search_group">
                            <select class="form-control">
                                <option>Category</option>
                                <option>Category</option>
                                <option>Category</option>
                                <option>Category</option>
                                <option>Category</option>
                            </select>
                            <div class="form-group">
                                <input type="text" class="form-control" name="" placeholder="Search for a meal...">
                                <button class="search_btn">
                                    <img src="<?php echo base_url('fassets/') ?>images/search-icon.png">
                                </button>
                            </div>
                        </div>
                    </div>-->
                    
                    <?php
                    
    // echo $this->session->userdata('student_login_id'). "=====" .   $this->session->userdata('school_id');
    
//$test = 'Fri, 15 Jan 2016 15:14:10 +0800';
date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)
$t = date('H:i');
//echo $t;
                      /*  echo "<pre>";
                         print_r($timeslotList);*/
                    
                    ?>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <select class="form-control" id="time_slot_id" onchange="get_timeslot_for_fooditems();">
                                <option>Select</option>
                        <?php for($m=0;$m<count($timeslotList['all_list']);$m++) { 
                            
                        if ($t > $timeslotList['all_list'][$m]['time_slot_from'] && $t < $timeslotList['all_list'][$m]['time_slot_to'])
                        {
                            
                         //set session timesolt 
                            
                        $this->session->set_userdata("timeslot_id",$timeslotList['all_list'][$m]['timeslot_id']);
                        

               
                       ?> 
         <option value="<?php echo $timeslotList['all_list'][$m]['timeslot_id']; ?>"><?php echo $timeslotList['all_list'][$m]['timeslot_name']; ?></option>
                        <?php } } ?>
                               
                            </select>
                        </div>
                    </div>
                   <!-- <div class="col-sm-2">
                        <div class="form-group">
                            <button type="submit" class="btn custom_btn product_ser_btn">Search</button>
                        </div>
                    </div>-->
                </div>
            </div>

            <div class="product_card_content">
                
                    
                <div id="tab_area">
                
                
                </div>
                    
                    
               
                <div class="my_acco_tab_content">
                    <div class="tab-content" id="myTabContent">
                        
                        
                        <div id="tab_content"></div>
                        
                        
                     
                    </div>
                </div>
               
            </div>
           <!-- <div class="load_more">
                <a href="#" class="btn custom_btn load_more_btn">Load more</a>
            </div>-->
        </div>
    </section>

    <!-- Modal -->
    <div class="modal product_listing_modal fade" id="exampleModalfood" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" id="food_listing_modal">
              
                <div class="product_card_content">
                
                    
                <div id="tab_area">
                
                
                </div>
                    
                    
               
                <div class="my_acco_tab_content">
                    <div class="tab-content" id="myTabContent">
                        
                        
                        <div id="tab_content"></div>
                        
                        
                     
                    </div>
                </div>
               
            </div>
            
          </div>
        </div>
      </div>
    </div>
    <!-- ===============footer start============== -->
