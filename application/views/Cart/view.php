
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
    <section class="cart_section">
        <div class="container">
            <h2 class="title">Generalized Cart</h2>
            <table>
                
                
               <?php 
               /* echo "<pre>";
                print_r($cartlist);*/
                
                if(count($cartlist) >= 1){ 
                    
                  ?>  
                <a href="<?php echo base_url('Foodlisting'); ?>" class="btn custom_btn"> Add Items To Cart</a>
                <tr>
                    <th></th>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Totals</th>
<!--                    <th>Action</th>-->
                </tr>
                
              <?php  for($m=0;$m<count($cartlist);$m++) { ?> 
                <tr>
                    <td style="width: 8rem;">
                        <img src="<?php echo base_url('master_images/FoodImage/').$cartlist[$m]['food_image']; ?>" width="50" height="50" alt="">
                    </td>
                    <td><?php echo $cartlist[$m]['food_name']; ?></td>
                    <td style="display: flex; align-items: center;"><?php //echo $cartlist[$m]['quantity']; ?>
                        <div class="product_card_bottom">
                        <div class="qtySelector text-center">
                           <!-- <i class="fa fa-minus decreaseQty" onclick="decreaseQtycart('<?php echo $cartlist[$m]['food_id']; ?>','<?php echo $m ?>','<?php echo $cartlist[$m]['cart_id']; ?>');"></i>-->
                            <input type="text" class="qtyValue" id="qtyValue_<?php echo $m; ?>" value="<?php echo $cartlist[$m]['totat_quantity']; ?>" readonly/>
                            <!--<i class="fa fa-plus increaseQty"  onclick="increaseQtycart('<?php echo $cartlist[$m]['food_id']; ?>','<?php echo $m ?>','<?php echo $cartlist[$m]['cart_id']; ?>');"></i>-->
                        </div>
                    </div>
                    </td>
                    <input type="hidden" id="food_price_<?php echo $m; ?>" value="<?php echo $cartlist[$m]['food_price']; ?>" >
                    <td> € <?php echo $cartlist[$m]['food_price']; ?></td>
                    <td id="total_price_<?php echo $m; ?>" >€ <?php echo ($cartlist[$m]['totat_quantity']*$cartlist[$m]['food_price']); ?>
                    </td>
<!--
                    <td>
                        <div class="remove">
                            <a href="<?php echo base_url('Cart/remove_items/').$cartlist[$m]['cart_id'] ?>"> <img src="<?php echo base_url('fassets/'); ?>images/remove.png" alt="" class="img-fluid"></a>
                        </div>
                    </td>
-->
                </tr>
               <?php $amt += ($cartlist[$m]['quantity']*$cartlist[$m]['food_price']);  } ?>
                
               <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                   <input type="hidden" id="sub_total" value="<?php echo $amt; ?>">
                    <th><p id="sub_total_final"><?php echo "€". $amt; ?></p></th>
                    <th></th>
               </tr>
                 <a href="<?php echo base_url('Checkout'); ?>" class="btn custom_btn add_item_to_crt"> Proceed To Checkout</a>
                 
             <?php } else { ?> 
              <img src="<?php echo base_url('fassets/') ?>images/empty-cart.png" class="img-fluid"> 
                <a href="<?php echo base_url('Foodlisting'); ?>" class="btn custom_btn add_item_to_crt"> Add Items To Cart</a>
             <?php  } ?>
            </table>
        </div>
    </section>
    <!-- ===============Cart end============== -->


