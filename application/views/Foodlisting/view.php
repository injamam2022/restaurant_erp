
    <section class="banner_section inner_banner_section">
        <div class="banner_slide">
            <div class="bannar_inner_cnt ">
                <h1>When food becomes <span>magical</span> and enjoy your <span>Lunch break</span></h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
            </div>
            <div class="banner_img">
                <img src="<?php echo base_url('fassets/images/'); ?>/listing-banner.png" alt="" class="img-fluid">
            </div>
        </div>
    </section>

    <!-- ==============banner end ==============-->
    <section class="product_listing">
        <div class="product_listing_top_shape">
            <img src="<?php echo base_url('fassets/images/'); ?>/testi-shape-1.png">
        </div>
        <div class="product_listing_bottom_shape">
            <img src="<?php echo base_url('fassets/images/'); ?>/testi-shape-2.png">
        </div>
        <div class="container">
           
            <section class="foodlist_calender">
                <div class="container">
                    <div class="row">
                      <!--  <div class="col-sm-4">
                            <div class="cat_select_btn">
                                <ul>
                                    <li class="active">
                                        <a href="#">Week</a>
                                    </li>
                                    <li>
                                        <a href="#">Month</a>
                                    </li>
                                </ul>
                            </div>
                        </div>-->
                        <div class="col-sm-12">
                            <div class="calender">
                                <div class="cal_header">
                                    <div class="cal_icon">
                                        <!--<ion-icon name="chevron-back-outline"></ion-icon>-->
                                    </div>
                                    <?php 
                                      date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)
                                    $dayofweek = date('w', strtotime($date));
                                    $result    = date('Y-m-d', strtotime(($day - $dayofweek).' day', strtotime($date)));
                                    $today  = date('Y-m-d');
                                    //May

                                   ?>
                                    <h3 class="icon_label">  Week of <?php  echo date("F", strtotime($today)) . " ".$monday = date("Y-m-d", strtotime(" monday this week ")); ?>  </h3>
                                    <div class="cal_icon">
                                     <!--   <a href="#" class="curent_week">Go to current week</a>-->
                                        <!--<ion-icon name="chevron-forward-outline"></ion-icon>-->
                                    </div>
                                </div>
                                <?php 
                              
                                //$today  = date('Y-m-d');
                              //  echo $today;
                                    $monday = date("Y-m-d", strtotime(" monday this week "));
                                    $tuesday = date("Y-m-d", strtotime(" tuesday this week "));
                                    $wednesday = date("Y-m-d", strtotime(" wednesday this week "));
                                    $thursday = date("Y-m-d", strtotime(" thursday this week "));
                                    $friday = date("Y-m-d", strtotime(" friday this week "));
                                    $saturday = date("Y-m-d", strtotime(" saturday this week "));
                                    //$sunday = date("Y-m-d", strtotime("sunday"));
                               /* echo "<pre>";
                                print_r($assignmenuList);
                                print_r($timeslotList);*/
                                ?>
                                <div class="cal_body">
                                    <table>
                                      <tr>
                                        <th>Mon <?php echo $monday; ?></th>
                                        <th>Tue <?php echo $tuesday; ?></th>
                                        <th>Wed <?php echo $wednesday; ?></th>
                                        <th>Thu <?php echo $thursday; ?></th>
                                        <th>Fri <?php echo $friday; ?></th>
                                        <th>Sat <?php echo $saturday; ?></th>
                                      </tr>
                                      <tr>
                                          
                                          
                                          
                                         <td>
                     <?php for($i=0;$i<count($timeslotList['all_list']);$i++) { ?> 
                                             
                                             
                     <div class="cal_card <?php if($today > $monday){ ?> disable <?php } ?>" >
                                                <h4><?php echo $timeslotList['all_list'][$i]['timeslot_name'];  ?></h4>
                                                
                                                
                    <?php if($today > $monday){ ?>  
                                                
                                                
                             <a href="javascript:void(0);" class="meal_dtl">Cannot Order for this date</a>                     
                                                
                    <?php } else { ?> 
                        <?php $info =  get_meal_info($timeslotList['all_list'][$i]['timeslot_id'],$monday); ?>
                                                
                        <?php $cart_info = get_items_in_minicart($timeslotList['all_list'][$i]['timeslot_id'],$monday); 
                              
                                                                                                      
                              if(count($cart_info) > 0) { ?> 
                    <a href="javascript:void(0);" class="meal_dtl" id="show_mini_cart_<?php echo $monday."_". $timeslotList['all_list'][$i]['timeslot_id'];  ?>" onclick="get_minicart_info('<?php echo $timeslotList['all_list'][$i]['timeslot_id'] ?>','<?php echo $monday; ?>')" > Meal Details</a>
                          <?php }                                                         
                     else { ?>
            <a href="javascript:void(0);" class="meal_dtl" style="display:none" id="show_mini_cart_<?php echo $monday."_". $timeslotList['all_list'][$i]['timeslot_id'];  ?>" onclick="get_minicart_info('<?php echo $timeslotList['all_list'][$i]['timeslot_id'] ?>','<?php echo $monday; ?>')" > Meal Details</a>                  
                        <?php } ?>
                     <div class="btn_cnt">
                        <a href="javascript:void(0);" onclick="get_menu_for_fooditems('<?php echo $info[0]['menu_id'] ?>','<?php echo $monday ?>','<?php echo  $timeslotList['all_list'][$i]['timeslot_id'] ?>')" class="custom_btn cal_btn">Add Food Items</a>
                       <!-- <span class="quantity">1</span>-->
                         
                         
                     </div>
                   <?php } ?>
                                                
                                                
                    
                                         
                    </div>
                                             
                                             
                    <?php } ?>
                </td>
                                          
                                          
                                          
                                          
                                          
                                         <td>
<!--                                             -->
                             <?php for($i=0;$i<count($timeslotList['all_list']);$i++) { ?> 
                                             
                                             
                                  <div class="cal_card <?php if($today > $tuesday){ ?> disable <?php } ?>" >
                                                <h4><?php echo $timeslotList['all_list'][$i]['timeslot_name'];  ?></h4>
                                                
                                                
                    <?php if($today > $tuesday){ ?>  
                                                
                                                
                             <a href="javascript:void(0);" class="meal_dtl">Cannot Order for this date</a>                     
                                                
                    <?php } else { ?> 
                        <?php $info =  get_meal_info($timeslotList['all_list'][$i]['timeslot_id'],$tuesday); ?>
                                                
                        <?php $cart_info = get_items_in_minicart($timeslotList['all_list'][$i]['timeslot_id'],$tuesday); 
                              
                                                                                                      
                              if(count($cart_info) > 0) { ?> 
                    <a href="javascript:void(0);" class="meal_dtl" id="show_mini_cart_<?php echo $tuesday."_". $timeslotList['all_list'][$i]['timeslot_id'];  ?>" onclick="get_minicart_info('<?php echo $timeslotList['all_list'][$i]['timeslot_id'] ?>','<?php echo $tuesday; ?>')" > Meal Details</a>
                          <?php }                                                         
                     else { ?>
            <a href="javascript:void(0);" class="meal_dtl" style="display:none" id="show_mini_cart_<?php echo $tuesday."_". $timeslotList['all_list'][$i]['timeslot_id'];  ?>" onclick="get_minicart_info('<?php echo $timeslotList['all_list'][$i]['timeslot_id'] ?>','<?php echo $tuesday; ?>')" > Meal Details</a>                  
                        <?php } ?>
                     <div class="btn_cnt">
                        <a href="javascript:void(0);" onclick="get_menu_for_fooditems('<?php echo $info[0]['menu_id'] ?>','<?php echo $tuesday ?>','<?php echo  $timeslotList['all_list'][$i]['timeslot_id'] ?>')" class="custom_btn cal_btn">Add Food Items</a>
                       <!-- <span class="quantity">1</span>-->
                         
                         
                     </div>
                   <?php } ?>
                                                
                                                
                    
                                         
                    </div>
                                             
                                             
                              <?php } ?>
                                        </td>
                                          
                            <td>
                                             
                             <?php for($i=0;$i<count($timeslotList['all_list']);$i++) { ?> 
                                
                                
                               <div class="cal_card <?php if($today > $wednesday){ ?> disable <?php } ?>" >
                                                <h4><?php echo $timeslotList['all_list'][$i]['timeslot_name'];  ?></h4>
                                                
                                                
                    <?php if($today > $wednesday){ ?>  
                                                
                                                
                             <a href="javascript:void(0);" class="meal_dtl">Cannot Order for this date</a>                     
                                                
                    <?php } else { ?> 
                        <?php $info =  get_meal_info($timeslotList['all_list'][$i]['timeslot_id'],$wednesday); ?>
                                                
                        <?php $cart_info = get_items_in_minicart($timeslotList['all_list'][$i]['timeslot_id'],$wednesday); 
                              
                                                                                                      
                              if(count($cart_info) > 0) { ?> 
                    <a href="javascript:void(0);" class="meal_dtl" id="show_mini_cart_<?php echo $wednesday."_". $timeslotList['all_list'][$i]['timeslot_id'];  ?>" onclick="get_minicart_info('<?php echo $timeslotList['all_list'][$i]['timeslot_id'] ?>','<?php echo $wednesday; ?>')" > Meal Details</a>
                          <?php }                                                         
                     else { ?>
            <a href="javascript:void(0);" class="meal_dtl" style="display:none" id="show_mini_cart_<?php echo $wednesday."_". $timeslotList['all_list'][$i]['timeslot_id'];  ?>" onclick="get_minicart_info('<?php echo $timeslotList['all_list'][$i]['timeslot_id'] ?>','<?php echo $wednesday; ?>')" > Meal Details</a>                  
                        <?php } ?>
                     <div class="btn_cnt">
                        <a href="javascript:void(0);" onclick="get_menu_for_fooditems('<?php echo $info[0]['menu_id'] ?>','<?php echo $wednesday ?>','<?php echo  $timeslotList['all_list'][$i]['timeslot_id'] ?>')" class="custom_btn cal_btn">Add Food Items</a>
                       <!-- <span class="quantity">1</span>-->
                         
                         
                     </div>
                   <?php } ?>
                                                
                                                
                    
                                         
                    </div>
                                
                                
                            <?php } ?>
                            </td>
                                          
                             <td>
                                             
                             <?php for($i=0;$i<count($timeslotList['all_list']);$i++) { ?>
                                 
                                 
                               <div class="cal_card <?php if($today > $thursday){ ?> disable <?php } ?>" >
                                                <h4><?php echo $timeslotList['all_list'][$i]['timeslot_name'];  ?></h4>
                                                
                                                
                    <?php if($today > $thursday){ ?>  
                                                
                                                
                             <a href="javascript:void(0);" class="meal_dtl">Cannot Order for this date</a>                     
                                                
                    <?php } else { ?> 
                        <?php $info =  get_meal_info($timeslotList['all_list'][$i]['timeslot_id'],$thursday); ?>
                                                
                        <?php $cart_info = get_items_in_minicart($timeslotList['all_list'][$i]['timeslot_id'],$thursday); 
                              
                                                                                                      
                              if(count($cart_info) > 0) { ?> 
                    <a href="javascript:void(0);" class="meal_dtl" id="show_mini_cart_<?php echo $thursday."_". $timeslotList['all_list'][$i]['timeslot_id'];  ?>" onclick="get_minicart_info('<?php echo $timeslotList['all_list'][$i]['timeslot_id'] ?>','<?php echo $thursday; ?>')" > Meal Details</a>
                          <?php }                                                         
                     else { ?>
            <a href="javascript:void(0);" class="meal_dtl" style="display:none" id="show_mini_cart_<?php echo $thursday."_". $timeslotList['all_list'][$i]['timeslot_id'];  ?>" onclick="get_minicart_info('<?php echo $timeslotList['all_list'][$i]['timeslot_id'] ?>','<?php echo $thursday; ?>')" > Meal Details</a>                  
                        <?php } ?>
                     <div class="btn_cnt">
                        <a href="javascript:void(0);" onclick="get_menu_for_fooditems('<?php echo $info[0]['menu_id'] ?>','<?php echo $thursday ?>','<?php echo  $timeslotList['all_list'][$i]['timeslot_id'] ?>')" class="custom_btn cal_btn">Add Food Items</a>
                       <!-- <span class="quantity">1</span>-->
                         
                         
                     </div>
                   <?php } ?>
                                                
                                                
                    
                                         
                    </div>
                                 
                                 
                                 
                             <?php } ?>
                            </td>
                                          
                             <td>
                                             
                             <?php for($i=0;$i<count($timeslotList['all_list']);$i++) { ?> 
                                 
                                 
                               <div class="cal_card <?php if($today > $friday){ ?> disable <?php } ?>" >
                                                <h4><?php echo $timeslotList['all_list'][$i]['timeslot_name'];  ?></h4>
                                                
                                                
                    <?php if($today > $friday){ ?>  
                                                
                                                
                             <a href="javascript:void(0);" class="meal_dtl">Cannot Order for this date</a>                     
                                                
                    <?php } else { ?> 
                        <?php $info =  get_meal_info($timeslotList['all_list'][$i]['timeslot_id'],$friday); ?>
                                                
                        <?php $cart_info = get_items_in_minicart($timeslotList['all_list'][$i]['timeslot_id'],$friday); 
                              
                                                                                                      
                              if(count($cart_info) > 0) { ?> 
                    <a href="javascript:void(0);" class="meal_dtl" id="show_mini_cart_<?php echo $friday."_". $timeslotList['all_list'][$i]['timeslot_id'];  ?>" onclick="get_minicart_info('<?php echo $timeslotList['all_list'][$i]['timeslot_id'] ?>','<?php echo $friday; ?>')" > Meal Details</a>
                          <?php }                                                         
                     else { ?>
            <a href="javascript:void(0);" class="meal_dtl" style="display:none" id="show_mini_cart_<?php echo $friday."_". $timeslotList['all_list'][$i]['timeslot_id'];  ?>" onclick="get_minicart_info('<?php echo $timeslotList['all_list'][$i]['timeslot_id'] ?>','<?php echo $friday; ?>')" > Meal Details</a>                  
                        <?php } ?>
                     <div class="btn_cnt">
                        <a href="javascript:void(0);" onclick="get_menu_for_fooditems('<?php echo $info[0]['menu_id'] ?>','<?php echo $friday ?>','<?php echo  $timeslotList['all_list'][$i]['timeslot_id'] ?>')" class="custom_btn cal_btn">Add Food Items</a>
                       <!-- <span class="quantity">1</span>-->
                         
                         
                     </div>
                   <?php } ?>
                                                
                                                
                    
                                         
                    </div>
                                 
                                 
                             <?php } ?>
                            </td>
                                          
                             <td>
                                             
                             <?php for($i=0;$i<count($timeslotList['all_list']);$i++) { ?> 
                                 
                                 
                               <div class="cal_card <?php if($today > $saturday){ ?> disable <?php } ?>" >
                                                <h4><?php echo $timeslotList['all_list'][$i]['timeslot_name'];  ?></h4>
                                                
                                                
                    <?php if($today > $saturday){ ?>  
                                                
                                                
                             <a href="javascript:void(0);" class="meal_dtl">Cannot Order for this date</a>                     
                                                
                    <?php } else { ?> 
                        <?php $info =  get_meal_info($timeslotList['all_list'][$i]['timeslot_id'],$saturday); ?>
                                                
                        <?php $cart_info = get_items_in_minicart($timeslotList['all_list'][$i]['timeslot_id'],$saturday); 
                              
                                                                                                      
                              if(count($cart_info) > 0) { ?> 
                    <a href="javascript:void(0);" class="meal_dtl" id="show_mini_cart_<?php echo $saturday."_". $timeslotList['all_list'][$i]['timeslot_id'];  ?>" onclick="get_minicart_info('<?php echo $timeslotList['all_list'][$i]['timeslot_id'] ?>','<?php echo $saturday; ?>')" > Meal Details</a>
                          <?php }                                                         
                     else { ?>
            <a href="javascript:void(0);" class="meal_dtl" style="display:none" id="show_mini_cart_<?php echo $saturday."_". $timeslotList['all_list'][$i]['timeslot_id'];  ?>" onclick="get_minicart_info('<?php echo $timeslotList['all_list'][$i]['timeslot_id'] ?>','<?php echo $saturday; ?>')" > Meal Details</a>                  
                        <?php } ?>
                     <div class="btn_cnt">
                        <a href="javascript:void(0);" onclick="get_menu_for_fooditems('<?php echo $info[0]['menu_id'] ?>','<?php echo $saturday ?>','<?php echo  $timeslotList['all_list'][$i]['timeslot_id'] ?>')" class="custom_btn cal_btn">Add Food Items</a>
                       <!-- <span class="quantity">1</span>-->
                         
                         
                     </div>
                   <?php } ?>
                                                
                                                
                    
                                         
                    </div>
                                 
                                 
                              <?php } ?>
                            </td>
                                          
                        
                            
                                          
                                        
                                      
                                      </tr>
                                        
                                        
                                      
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

           <!--  <div class="product_card_content">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="Meal-tab" data-toggle="tab" href="#Meal" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="Fruits-tab" data-toggle="tab" href="#Fruits" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                    </li>
                </ul>

                <div class="my_acco_tab_content">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="product_card">
                                        <div class="product_img">
                                            <img src="images/product-1.jpg" class="img-fluid">
                                        </div>
                                        <div class="product_info">
                                            <h3>French Fries and Chicken Burger</h3>
                                            <p>Along with Milk and Apple</p>
                                            <div class="product_card_bottom">
                                                <h4>€ 25.00</h4>
                                                <div class="qtySelector text-center">
                                                    <i class="fa fa-minus decreaseQty"></i>
                                                    <input type="text" class="qtyValue" value="1" />
                                                    <i class="fa fa-plus increaseQty"></i>
                                                </div>

                                            </div>
                                            <a href="#" class="btn custom_btn order_btn">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product_card">
                                        <div class="product_img">
                                            <img src="images/product-2.jpg" class="img-fluid">
                                        </div>
                                        <div class="product_info">
                                            <h3>French Fries and Chicken Burger</h3>
                                            <p>Along with Milk and Apple</p>
                                            <div class="product_card_bottom">
                                                <h4>€ 25.00</h4>
                                                <div class="qtySelector text-center">
                                                    <i class="fa fa-minus decreaseQty"></i>
                                                    <input type="text" class="qtyValue" value="1" />
                                                    <i class="fa fa-plus increaseQty"></i>
                                                </div>

                                            </div>
                                            <a href="#" class="btn custom_btn order_btn">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product_card">
                                        <div class="product_img">
                                            <img src="images/product-3.jpg" class="img-fluid">
                                        </div>
                                        <div class="product_info">
                                            <h3>French Fries and Chicken Burger</h3>
                                            <p>Along with Milk and Apple</p>
                                            <div class="product_card_bottom">
                                                <h4>€ 25.00</h4>
                                                <div class="qtySelector text-center">
                                                    <i class="fa fa-minus decreaseQty"></i>
                                                    <input type="text" class="qtyValue" value="1" />
                                                    <i class="fa fa-plus increaseQty"></i>
                                                </div>
                                            </div>
                                            <a href="#" class="btn custom_btn order_btn">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product_card">
                                        <div class="product_img">
                                            <img src="images/product-4.jpg" class="img-fluid">
                                        </div>
                                        <div class="product_info">
                                            <h3>French Fries and Chicken Burger</h3>
                                            <p>Along with Milk and Apple</p>
                                            <div class="product_card_bottom">
                                                <h4>€ 25.00</h4>
                                                <div class="qtySelector text-center">
                                                    <i class="fa fa-minus decreaseQty"></i>
                                                    <input type="text" class="qtyValue" value="1" />
                                                    <i class="fa fa-plus increaseQty"></i>
                                                </div>

                                            </div>
                                            <a href="#" class="btn custom_btn order_btn">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product_card">
                                        <div class="product_img">
                                            <img src="images/product-5.jpg" class="img-fluid">
                                        </div>
                                        <div class="product_info">
                                            <h3>French Fries and Chicken Burger</h3>
                                            <p>Along with Milk and Apple</p>
                                            <div class="product_card_bottom">
                                                <h4>€ 25.00</h4>
                                                <div class="qtySelector text-center">
                                                    <i class="fa fa-minus decreaseQty"></i>
                                                    <input type="text" class="qtyValue" value="1" />
                                                    <i class="fa fa-plus increaseQty"></i>
                                                </div>

                                            </div>
                                            <a href="#" class="btn custom_btn order_btn">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product_card">
                                        <div class="product_img">
                                            <img src="images/product-6.jpg" class="img-fluid">
                                        </div>
                                        <div class="product_info">
                                            <h3>French Fries and Chicken Burger</h3>
                                            <p>Along with Milk and Apple</p>
                                            <div class="product_card_bottom">
                                                <h4>€ 25.00</h4>
                                                <div class="qtySelector text-center">
                                                    <i class="fa fa-minus decreaseQty"></i>
                                                    <input type="text" class="qtyValue" value="1" />
                                                    <i class="fa fa-plus increaseQty"></i>
                                                </div>

                                            </div>
                                            <a href="#" class="btn custom_btn order_btn">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product_card">
                                        <div class="product_img">
                                            <img src="images/product-7.jpg" class="img-fluid">
                                        </div>
                                        <div class="product_info">
                                            <h3>French Fries and Chicken Burger</h3>
                                            <p>Along with Milk and Apple</p>
                                            <div class="product_card_bottom">
                                                <h4>€ 25.00</h4>
                                                <div class="qtySelector text-center">
                                                    <i class="fa fa-minus decreaseQty"></i>
                                                    <input type="text" class="qtyValue" value="1" />
                                                    <i class="fa fa-plus increaseQty"></i>
                                                </div>

                                            </div>
                                            <a href="#" class="btn custom_btn order_btn">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product_card">
                                        <div class="product_img">
                                            <img src="images/product-8.jpg" class="img-fluid">
                                        </div>
                                        <div class="product_info">
                                            <h3>French Fries and Chicken Burger</h3>
                                            <p>Along with Milk and Apple</p>
                                            <div class="product_card_bottom">
                                                <h4>€ 25.00</h4>
                                                <div class="qtySelector text-center">
                                                    <i class="fa fa-minus decreaseQty"></i>
                                                    <input type="text" class="qtyValue" value="1" />
                                                    <i class="fa fa-plus increaseQty"></i>
                                                </div>

                                            </div>
                                            <a href="#" class="btn custom_btn order_btn">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product_card">
                                        <div class="product_img">
                                            <img src="images/product-1.jpg" class="img-fluid">
                                        </div>
                                        <div class="product_info">
                                            <h3>French Fries and Chicken Burger</h3>
                                            <p>Along with Milk and Apple</p>
                                            <div class="product_card_bottom">
                                                <h4>€ 25.00</h4>
                                                <div class="qtySelector text-center">
                                                    <i class="fa fa-minus decreaseQty"></i>
                                                    <input type="text" class="qtyValue" value="1" />
                                                    <i class="fa fa-plus increaseQty"></i>
                                                </div>

                                            </div>
                                            <a href="#" class="btn custom_btn order_btn">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="product_card">
                                        <div class="product_img">
                                            <img src="images/product-1.jpg" class="img-fluid">
                                        </div>
                                        <div class="product_info">
                                            <h3>French Fries and Chicken Burger</h3>
                                            <p>Along with Milk and Apple</p>
                                            <div class="product_card_bottom">
                                                <h4>€ 25.00</h4>
                                                <div class="qtySelector text-center">
                                                    <i class="fa fa-minus decreaseQty"></i>
                                                    <input type="text" class="qtyValue" value="1" />
                                                    <i class="fa fa-plus increaseQty"></i>
                                                </div>

                                            </div>
                                            <a href="#" class="btn custom_btn order_btn">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product_card">
                                        <div class="product_img">
                                            <img src="images/product-2.jpg" class="img-fluid">
                                        </div>
                                        <div class="product_info">
                                            <h3>French Fries and Chicken Burger</h3>
                                            <p>Along with Milk and Apple</p>
                                            <div class="product_card_bottom">
                                                <h4>€ 25.00</h4>
                                                <div class="qtySelector text-center">
                                                    <i class="fa fa-minus decreaseQty"></i>
                                                    <input type="text" class="qtyValue" value="1" />
                                                    <i class="fa fa-plus increaseQty"></i>
                                                </div>

                                            </div>
                                            <a href="#" class="btn custom_btn order_btn">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product_card">
                                        <div class="product_img">
                                            <img src="images/product-3.jpg" class="img-fluid">
                                        </div>
                                        <div class="product_info">
                                            <h3>French Fries and Chicken Burger</h3>
                                            <p>Along with Milk and Apple</p>
                                            <div class="product_card_bottom">
                                                <h4>€ 25.00</h4>
                                                <div class="qtySelector text-center">
                                                    <i class="fa fa-minus decreaseQty"></i>
                                                    <input type="text" class="qtyValue" value="1" />
                                                    <i class="fa fa-plus increaseQty"></i>
                                                </div>
                                            </div>
                                            <a href="#" class="btn custom_btn order_btn">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product_card">
                                        <div class="product_img">
                                            <img src="images/product-4.jpg" class="img-fluid">
                                        </div>
                                        <div class="product_info">
                                            <h3>French Fries and Chicken Burger</h3>
                                            <p>Along with Milk and Apple</p>
                                            <div class="product_card_bottom">
                                                <h4>€ 25.00</h4>
                                                <div class="qtySelector text-center">
                                                    <i class="fa fa-minus decreaseQty"></i>
                                                    <input type="text" class="qtyValue" value="1" />
                                                    <i class="fa fa-plus increaseQty"></i>
                                                </div>

                                            </div>
                                            <a href="#" class="btn custom_btn order_btn">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product_card">
                                        <div class="product_img">
                                            <img src="images/product-5.jpg" class="img-fluid">
                                        </div>
                                        <div class="product_info">
                                            <h3>French Fries and Chicken Burger</h3>
                                            <p>Along with Milk and Apple</p>
                                            <div class="product_card_bottom">
                                                <h4>€ 25.00</h4>
                                                <div class="qtySelector text-center">
                                                    <i class="fa fa-minus decreaseQty"></i>
                                                    <input type="text" class="qtyValue" value="1" />
                                                    <i class="fa fa-plus increaseQty"></i>
                                                </div>

                                            </div>
                                            <a href="#" class="btn custom_btn order_btn">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product_card">
                                        <div class="product_img">
                                            <img src="images/product-6.jpg" class="img-fluid">
                                        </div>
                                        <div class="product_info">
                                            <h3>French Fries and Chicken Burger</h3>
                                            <p>Along with Milk and Apple</p>
                                            <div class="product_card_bottom">
                                                <h4>€ 25.00</h4>
                                                <div class="qtySelector text-center">
                                                    <i class="fa fa-minus decreaseQty"></i>
                                                    <input type="text" class="qtyValue" value="1" />
                                                    <i class="fa fa-plus increaseQty"></i>
                                                </div>

                                            </div>
                                            <a href="#" class="btn custom_btn order_btn">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product_card">
                                        <div class="product_img">
                                            <img src="images/product-7.jpg" class="img-fluid">
                                        </div>
                                        <div class="product_info">
                                            <h3>French Fries and Chicken Burger</h3>
                                            <p>Along with Milk and Apple</p>
                                            <div class="product_card_bottom">
                                                <h4>€ 25.00</h4>
                                                <div class="qtySelector text-center">
                                                    <i class="fa fa-minus decreaseQty"></i>
                                                    <input type="text" class="qtyValue" value="1" />
                                                    <i class="fa fa-plus increaseQty"></i>
                                                </div>

                                            </div>
                                            <a href="#" class="btn custom_btn order_btn">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product_card">
                                        <div class="product_img">
                                            <img src="images/product-8.jpg" class="img-fluid">
                                        </div>
                                        <div class="product_info">
                                            <h3>French Fries and Chicken Burger</h3>
                                            <p>Along with Milk and Apple</p>
                                            <div class="product_card_bottom">
                                                <h4>€ 25.00</h4>
                                                <div class="qtySelector text-center">
                                                    <i class="fa fa-minus decreaseQty"></i>
                                                    <input type="text" class="qtyValue" value="1" />
                                                    <i class="fa fa-plus increaseQty"></i>
                                                </div>

                                            </div>
                                            <a href="#" class="btn custom_btn order_btn">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product_card">
                                        <div class="product_img">
                                            <img src="images/product-1.jpg" class="img-fluid">
                                        </div>
                                        <div class="product_info">
                                            <h3>French Fries and Chicken Burger</h3>
                                            <p>Along with Milk and Apple</p>
                                            <div class="product_card_bottom">
                                                <h4>€ 25.00</h4>
                                                <div class="qtySelector text-center">
                                                    <i class="fa fa-minus decreaseQty"></i>
                                                    <input type="text" class="qtyValue" value="1" />
                                                    <i class="fa fa-plus increaseQty"></i>
                                                </div>

                                            </div>
                                            <a href="#" class="btn custom_btn order_btn">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Meal" role="tabpanel" aria-labelledby="Meal-tab">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="product_card">
                                        <div class="product_img">
                                            <img src="images/product-1.jpg" class="img-fluid">
                                        </div>
                                        <div class="product_info">
                                            <h3>French Fries and Chicken Burger</h3>
                                            <p>Along with Milk and Apple</p>
                                            <div class="product_card_bottom">
                                                <h4>€ 25.00</h4>
                                                <div class="qtySelector text-center">
                                                    <i class="fa fa-minus decreaseQty"></i>
                                                    <input type="text" class="qtyValue" value="1" />
                                                    <i class="fa fa-plus increaseQty"></i>
                                                </div>

                                            </div>
                                            <a href="#" class="btn custom_btn order_btn">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product_card">
                                        <div class="product_img">
                                            <img src="images/product-2.jpg" class="img-fluid">
                                        </div>
                                        <div class="product_info">
                                            <h3>French Fries and Chicken Burger</h3>
                                            <p>Along with Milk and Apple</p>
                                            <div class="product_card_bottom">
                                                <h4>€ 25.00</h4>
                                                <div class="qtySelector text-center">
                                                    <i class="fa fa-minus decreaseQty"></i>
                                                    <input type="text" class="qtyValue" value="1" />
                                                    <i class="fa fa-plus increaseQty"></i>
                                                </div>

                                            </div>
                                            <a href="#" class="btn custom_btn order_btn">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product_card">
                                        <div class="product_img">
                                            <img src="images/product-3.jpg" class="img-fluid">
                                        </div>
                                        <div class="product_info">
                                            <h3>French Fries and Chicken Burger</h3>
                                            <p>Along with Milk and Apple</p>
                                            <div class="product_card_bottom">
                                                <h4>€ 25.00</h4>
                                                <div class="qtySelector text-center">
                                                    <i class="fa fa-minus decreaseQty"></i>
                                                    <input type="text" class="qtyValue" value="1" />
                                                    <i class="fa fa-plus increaseQty"></i>
                                                </div>
                                            </div>
                                            <a href="#" class="btn custom_btn order_btn">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product_card">
                                        <div class="product_img">
                                            <img src="images/product-4.jpg" class="img-fluid">
                                        </div>
                                        <div class="product_info">
                                            <h3>French Fries and Chicken Burger</h3>
                                            <p>Along with Milk and Apple</p>
                                            <div class="product_card_bottom">
                                                <h4>€ 25.00</h4>
                                                <div class="qtySelector text-center">
                                                    <i class="fa fa-minus decreaseQty"></i>
                                                    <input type="text" class="qtyValue" value="1" />
                                                    <i class="fa fa-plus increaseQty"></i>
                                                </div>

                                            </div>
                                            <a href="#" class="btn custom_btn order_btn">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product_card">
                                        <div class="product_img">
                                            <img src="images/product-5.jpg" class="img-fluid">
                                        </div>
                                        <div class="product_info">
                                            <h3>French Fries and Chicken Burger</h3>
                                            <p>Along with Milk and Apple</p>
                                            <div class="product_card_bottom">
                                                <h4>€ 25.00</h4>
                                                <div class="qtySelector text-center">
                                                    <i class="fa fa-minus decreaseQty"></i>
                                                    <input type="text" class="qtyValue" value="1" />
                                                    <i class="fa fa-plus increaseQty"></i>
                                                </div>

                                            </div>
                                            <a href="#" class="btn custom_btn order_btn">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product_card">
                                        <div class="product_img">
                                            <img src="images/product-6.jpg" class="img-fluid">
                                        </div>
                                        <div class="product_info">
                                            <h3>French Fries and Chicken Burger</h3>
                                            <p>Along with Milk and Apple</p>
                                            <div class="product_card_bottom">
                                                <h4>€ 25.00</h4>
                                                <div class="qtySelector text-center">
                                                    <i class="fa fa-minus decreaseQty"></i>
                                                    <input type="text" class="qtyValue" value="1" />
                                                    <i class="fa fa-plus increaseQty"></i>
                                                </div>

                                            </div>
                                            <a href="#" class="btn custom_btn order_btn">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product_card">
                                        <div class="product_img">
                                            <img src="images/product-7.jpg" class="img-fluid">
                                        </div>
                                        <div class="product_info">
                                            <h3>French Fries and Chicken Burger</h3>
                                            <p>Along with Milk and Apple</p>
                                            <div class="product_card_bottom">
                                                <h4>€ 25.00</h4>
                                                <div class="qtySelector text-center">
                                                    <i class="fa fa-minus decreaseQty"></i>
                                                    <input type="text" class="qtyValue" value="1" />
                                                    <i class="fa fa-plus increaseQty"></i>
                                                </div>

                                            </div>
                                            <a href="#" class="btn custom_btn order_btn">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product_card">
                                        <div class="product_img">
                                            <img src="images/product-8.jpg" class="img-fluid">
                                        </div>
                                        <div class="product_info">
                                            <h3>French Fries and Chicken Burger</h3>
                                            <p>Along with Milk and Apple</p>
                                            <div class="product_card_bottom">
                                                <h4>€ 25.00</h4>
                                                <div class="qtySelector text-center">
                                                    <i class="fa fa-minus decreaseQty"></i>
                                                    <input type="text" class="qtyValue" value="1" />
                                                    <i class="fa fa-plus increaseQty"></i>
                                                </div>

                                            </div>
                                            <a href="#" class="btn custom_btn order_btn">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product_card">
                                        <div class="product_img">
                                            <img src="images/product-1.jpg" class="img-fluid">
                                        </div>
                                        <div class="product_info">
                                            <h3>French Fries and Chicken Burger</h3>
                                            <p>Along with Milk and Apple</p>
                                            <div class="product_card_bottom">
                                                <h4>€ 25.00</h4>
                                                <div class="qtySelector text-center">
                                                    <i class="fa fa-minus decreaseQty"></i>
                                                    <input type="text" class="qtyValue" value="1" />
                                                    <i class="fa fa-plus increaseQty"></i>
                                                </div>

                                            </div>
                                            <a href="#" class="btn custom_btn order_btn">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Fruits" role="tabpanel" aria-labelledby="Fruits-tab">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="product_card">
                                        <div class="product_img">
                                            <img src="images/product-1.jpg" class="img-fluid">
                                        </div>
                                        <div class="product_info">
                                            <h3>French Fries and Chicken Burger</h3>
                                            <p>Along with Milk and Apple</p>
                                            <div class="product_card_bottom">
                                                <h4>€ 25.00</h4>
                                                <div class="qtySelector text-center">
                                                    <i class="fa fa-minus decreaseQty"></i>
                                                    <input type="text" class="qtyValue" value="1" />
                                                    <i class="fa fa-plus increaseQty"></i>
                                                </div>

                                            </div>
                                            <a href="#" class="btn custom_btn order_btn">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product_card">
                                        <div class="product_img">
                                            <img src="images/product-2.jpg" class="img-fluid">
                                        </div>
                                        <div class="product_info">
                                            <h3>French Fries and Chicken Burger</h3>
                                            <p>Along with Milk and Apple</p>
                                            <div class="product_card_bottom">
                                                <h4>€ 25.00</h4>
                                                <div class="qtySelector text-center">
                                                    <i class="fa fa-minus decreaseQty"></i>
                                                    <input type="text" class="qtyValue" value="1" />
                                                    <i class="fa fa-plus increaseQty"></i>
                                                </div>

                                            </div>
                                            <a href="#" class="btn custom_btn order_btn">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product_card">
                                        <div class="product_img">
                                            <img src="images/product-3.jpg" class="img-fluid">
                                        </div>
                                        <div class="product_info">
                                            <h3>French Fries and Chicken Burger</h3>
                                            <p>Along with Milk and Apple</p>
                                            <div class="product_card_bottom">
                                                <h4>€ 25.00</h4>
                                                <div class="qtySelector text-center">
                                                    <i class="fa fa-minus decreaseQty"></i>
                                                    <input type="text" class="qtyValue" value="1" />
                                                    <i class="fa fa-plus increaseQty"></i>
                                                </div>
                                            </div>
                                            <a href="#" class="btn custom_btn order_btn">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product_card">
                                        <div class="product_img">
                                            <img src="images/product-4.jpg" class="img-fluid">
                                        </div>
                                        <div class="product_info">
                                            <h3>French Fries and Chicken Burger</h3>
                                            <p>Along with Milk and Apple</p>
                                            <div class="product_card_bottom">
                                                <h4>€ 25.00</h4>
                                                <div class="qtySelector text-center">
                                                    <i class="fa fa-minus decreaseQty"></i>
                                                    <input type="text" class="qtyValue" value="1" />
                                                    <i class="fa fa-plus increaseQty"></i>
                                                </div>

                                            </div>
                                            <a href="#" class="btn custom_btn order_btn">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product_card">
                                        <div class="product_img">
                                            <img src="images/product-5.jpg" class="img-fluid">
                                        </div>
                                        <div class="product_info">
                                            <h3>French Fries and Chicken Burger</h3>
                                            <p>Along with Milk and Apple</p>
                                            <div class="product_card_bottom">
                                                <h4>€ 25.00</h4>
                                                <div class="qtySelector text-center">
                                                    <i class="fa fa-minus decreaseQty"></i>
                                                    <input type="text" class="qtyValue" value="1" />
                                                    <i class="fa fa-plus increaseQty"></i>
                                                </div>

                                            </div>
                                            <a href="#" class="btn custom_btn order_btn">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product_card">
                                        <div class="product_img">
                                            <img src="images/product-6.jpg" class="img-fluid">
                                        </div>
                                        <div class="product_info">
                                            <h3>French Fries and Chicken Burger</h3>
                                            <p>Along with Milk and Apple</p>
                                            <div class="product_card_bottom">
                                                <h4>€ 25.00</h4>
                                                <div class="qtySelector text-center">
                                                    <i class="fa fa-minus decreaseQty"></i>
                                                    <input type="text" class="qtyValue" value="1" />
                                                    <i class="fa fa-plus increaseQty"></i>
                                                </div>

                                            </div>
                                            <a href="#" class="btn custom_btn order_btn">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product_card">
                                        <div class="product_img">
                                            <img src="images/product-7.jpg" class="img-fluid">
                                        </div>
                                        <div class="product_info">
                                            <h3>French Fries and Chicken Burger</h3>
                                            <p>Along with Milk and Apple</p>
                                            <div class="product_card_bottom">
                                                <h4>€ 25.00</h4>
                                                <div class="qtySelector text-center">
                                                    <i class="fa fa-minus decreaseQty"></i>
                                                    <input type="text" class="qtyValue" value="1" />
                                                    <i class="fa fa-plus increaseQty"></i>
                                                </div>

                                            </div>
                                            <a href="#" class="btn custom_btn order_btn">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product_card">
                                        <div class="product_img">
                                            <img src="images/product-8.jpg" class="img-fluid">
                                        </div>
                                        <div class="product_info">
                                            <h3>French Fries and Chicken Burger</h3>
                                            <p>Along with Milk and Apple</p>
                                            <div class="product_card_bottom">
                                                <h4>€ 25.00</h4>
                                                <div class="qtySelector text-center">
                                                    <i class="fa fa-minus decreaseQty"></i>
                                                    <input type="text" class="qtyValue" value="1" />
                                                    <i class="fa fa-plus increaseQty"></i>
                                                </div>

                                            </div>
                                            <a href="#" class="btn custom_btn order_btn">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product_card">
                                        <div class="product_img">
                                            <img src="images/product-1.jpg" class="img-fluid">
                                        </div>
                                        <div class="product_info">
                                            <h3>French Fries and Chicken Burger</h3>
                                            <p>Along with Milk and Apple</p>
                                            <div class="product_card_bottom">
                                                <h4>€ 25.00</h4>
                                                <div class="qtySelector text-center">
                                                    <i class="fa fa-minus decreaseQty"></i>
                                                    <input type="text" class="qtyValue" value="1" />
                                                    <i class="fa fa-plus increaseQty"></i>
                                                </div>

                                            </div>
                                            <a href="#" class="btn custom_btn order_btn">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="load_more">
                <a href="#" class="btn custom_btn load_more_btn">Load more</a>
            </div> -->
        </div>
    </section>
    <!-- ===============footer start============== -->

  <div class="modal product_listing_modal fade" id="exampleModalfood" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
           <!-- id="food_listing_modal"-->
          <div class="modal-body" >
              
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


<!-- Modal -->
<div class="modal fade" id="exampleModalmini" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content custom_modal_content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="mini_cart_content">
       
      </div>
<!--
      <div class="modal-footer">
        <button type="button" class="btn custom_btn">Save changes</button>
      </div>
-->
    </div>
  </div>
</div>


<style>
    .custom_table {
    width: 100%;
}
.meal_img img {
    border-radius: 5px;
}
.custom_table th {
    font-size: 1.4rem;
    font-weight: 600;
}
.custom_table td {
    font-size: 1.4rem;
}
.custom_table .meal_info {
    margin: 0;
}
.custom_table .product_card_bottom {
    justify-content: flex-start;
}
.custom_table .product_card_bottom h4 {

    margin-right: 10px;
}
.custom_modal_content .modal-footer {
    justify-content: center;
}
</style>