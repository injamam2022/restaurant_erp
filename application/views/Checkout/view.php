
    <!-- ==============banner start ==============-->

   <!-- <section class="banner_section inner_banner_section">
        <div class="banner_slide">
            <div class="bannar_inner_cnt ">
                <h1>All that Our Clients have to speak about us</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
            </div>
            <div class="banner_img">
                <img src="<?php echo base_url('fassets/'); ?>images/testimonial-banner.jpg" alt="" class="img-fluid">
            </div>
        </div>
    </section>-->
    <!-- ==============banner end ==============-->

    <!-- ===============Cart start============== -->
  



 <section class="checkout">
      <section class="cart_section">
        <div class="container">
            <div class="check_out_cnt">
            <table>
                
                
               <?php 
              /*  echo "<pre>";
                print_r();*/
                
                if(count($cartlist) >= 1){ 
                    
                  ?>  
                <tr>
                    <th></th>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Totals</th>
                    <!--<th>Action</th>-->
                </tr>
                
              <?php  for($m=0;$m<count($cartlist);$m++) { ?> 
                <tr>
                    <td style="width: 8rem;">
                        <img src="<?php echo base_url('master_images/FoodImage/').$cartlist[$m]['food_image']; ?>" width="50" height="50" alt="">
                    </td>
                    <td><?php echo $cartlist[$m]['food_name']; ?></td>
                    <td><?php echo $cartlist[$m]['totat_quantity']; ?></td>
                    <td> € <?php echo $cartlist[$m]['food_price']; ?></td>
                    <td> € <?php echo ($cartlist[$m]['totat_quantity']*$cartlist[$m]['food_price']); ?></td>
                    <!--<td>
                        <div class="remove">
                            <a href="<?php echo base_url('Cart/remove_items/').$cartlist[$m]['cart_id'] ?>"> <img src="<?php echo base_url('fassets/'); ?>images/remove.png" alt="" class="img-fluid"></a>
                        </div>
                    </td> -->
                </tr>
               <?php $amt += ($cartlist[$m]['quantity']*$cartlist[$m]['food_price']);  } ?>
               <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th>€ <?php echo $amt; ?></th>
               </tr>
             <?php } else { ?> 
              <img src="<?php echo base_url('fassets/') ?>images/empty-cart.png" class="img-fluid"> 
                <a href="<?php echo base_url('Foodlisting'); ?>" class="btn custom_btn add_item_to_crt"> Add Items To Cart</a>
             <?php  } ?>
            </table>
        </div>
        </div>
    </section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="check_out_cnt">
                        <div class="payment_method">
<!--                            <ul class="payby_card">
                                <li>
                                    <img src="images/master-card.png" alt="">
                                </li>
                                <li>
                                    <img src="images/visa.png" alt="">
                                </li>
                            </ul>-->
                               <h2 class="title">Billing Address</h2>
                            <form action="javascript:void(0)">
                                <div class="row">
                                    
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Billing Name  <span>*</span></label>
                                            <input type="text" id="billing_name" class="form-control" value="<?php echo $addresslist['all_list'][0]['billing_name']  ?>">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Billing Phone  <span>*</span></label>
                                            <input type="text" id="billing_phone" value="<?php echo $addresslist['all_list'][0]['billing_phone']  ?>" class="form-control">
                                        </div>
                                    </div>
                                    <!--<div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">Expiration Date <span>*</span></label>
                                                    <select name="" id="" class="form-control">
                                                        <option value="">Month</option>
                                                        <option value="">Month</option>
                                                        <option value="">Month</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <select name="" id="" class="form-control mt-25">
                                                        <option value="">Year</option>
                                                        <option value="">Year</option>
                                                        <option value="">Year</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>-->
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="">Address  <span>*</span></label>
                                            <input type="text" id="billing_address" value="<?php echo $addresslist['all_list'][0]['billing_address']  ?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Pincode  <span>*</span></label>
                                            <input type="text" id="pincode" value="<?php echo $addresslist['all_list'][0]['pincode']  ?>"  class="form-control">
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                                
                                <p id="success_msg_address"></p>
                                <?php if($addresslist['all_list'][0]['billing_address'] != "") { ?>
                                  <a href="javascript:void(0);" id="up" onclick="add_address('2')" class="custom_btn add_addres_btn">
                                <ion-icon name="add-outline"></ion-icon>Update Address</a>
                                <?php } else { ?> 
                                 <a href="javascript:void(0);" id="add" onclick="add_address('1')" class="custom_btn add_addres_btn">
                                <ion-icon name="add-outline"></ion-icon>Add Address</a>
                                <?php } ?>
                                 
                            </form>

                        </div>
                    </div>
<!--
                    <div class="check_out_cnt">
                        <div class="shipping_address">
                            <ul>
                                <li>
                                    <span>Name : </span>
                                   <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Billing Name  <span>*</span></label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <span>Address : </span>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Billing Address  <span>*</span></label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <span>Phone: </span>
                                    <p>245361254872</p>
                                </li>
                            </ul>
                            <a href="#" class="custom_btn add_addres_btn">
                                <ion-icon name="add-outline"></ion-icon>New Address</a>
                        </div>
                    </div>
-->
                    <div class="check_out_cnt">
                        <div class="payment_method">
                            <ul class="payby_card">
                                <li>
                                    <img src="images/master-card.png" alt="">
                                </li>
                                <li>
                                    <img src="images/visa.png" alt="">
                                </li>
                            </ul>
                             <h2 class="title">Payment Method</h2>
                            <?php //echo base_url('Checkout/add_order'); ?>
                            <form id="payment_form" method="POST" action="javascript:void(0);">
                                <div class="row">
                                   <!-- <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Card Type <span>*</span></label>
                                            <select name="" id="" class="form-control">
                                                <option value="">Visa Debit</option>
                                                <option value="">Visa Debit</option>
                                                <option value="">Visa Debit</option>
                                            </select>
                                        </div>
                                    </div>-->
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Card holder name  <span>*</span></label>
                                            <input type="text" id="card-holder-name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Credit card Number  <span>*</span></label>
                                            <input type="text"  id="card-number" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">Expiration Month (MM) <span>*</span></label>
                                                   <input type="text" name="expiryMonth" id="expiryMonth" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                   <label for="">Year (YY) <span>*</span></label>
                                                   <input type="text" name="expiryYear" id="expiryYear" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    <div class="col-sm-6">
                                        <div class="form-group m-0">
                                            <label for="">Card Verification Number  <span>*</span></label>
                                            <input type="text" name="cvv" id="cvv" class="form-control">
                                        </div>
                                    </div>
                                    
                                    <br>
                                    <br>
                                    
                                    
                 <!--for sagepay-->
                    <input type="hidden" name="card-identifier">
                    <input type="hidden" name="merchantSessionKey" value="<?php echo $payment_data['merchantSessionKey'];?>">
                    <input type="hidden" name="amount" value="<?php echo $amt; ?>">
                    <input type="hidden" name="currency" value="EUR">

                    <input type="hidden" name="first_name" value="Vincy">
                    <input type="hidden" name="last_name" value="PhpPot">

                    <input type="hidden" name="billing_address" value="88"> 
                    <input type="hidden" name="billing_city" value="London"> 
                    <input type="hidden" name="billing_zip" value="412"> 
                    <input type="hidden" name="billing_country" value="IR">
                <!--for sagepay-->
                    <div id="error-message" style="color:red; font-size:15px"></div>
                                    
                 
                  <div class="col-sm-6">
                     <div class="form-group m-0">
                    <button type="submit" class="custom_btn add_addres_btn" onclick="add_payments()" >
                    <ion-icon name="add-outline"></ion-icon>Place Order</button>
                     </div>
                 </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- ===============Cart end============== -->


