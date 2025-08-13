 <!-- ==============banner start ==============-->

    <section class="banner_section inner_banner_section">
            <div class="banner_slide">
                <div class="bannar_inner_cnt ">
                    <h1><?php echo $aboutusbanner_data['all_list'][0]['header']; ?></h1>
                    <p><?php echo $aboutusbanner_data['all_list'][0]['content']; ?> </p>
                </div>
                <div class="banner_img">
                    <img src="<?php echo $this->config->item('file_url')."/Content/".$aboutusbanner_data['all_list'][0]['image'];?>" alt="" class="img-fluid">
                </div>
            </div>
    </section>
    <!-- ==============banner end ==============-->

    <!-- ========What makes us different start===================== -->

    <section class="What_different_section">
        <div class="container">
            <h2 class="What_different_title">What makes us different</h2>
            <div class="row">
                
                
           
                
                <div class="col-sm-3">
                    <div class="What_different_item">
                        <div class="What_different_icon">
                            <img src="<?php echo base_url('fassets/') ?>images/about-icon.png" alt="">
                        </div>
                        <h3>Heathy Meal and Snaks</h3>
                        <p>We focus on making our meals and snacks nutritious and healthy in line with dietary requirements for growing bodies and minds.</p>
                    </div>
                </div>       
              <div class="col-sm-3">
                    <div class="What_different_item">
                        <div class="What_different_icon">
                            <img src="<?php echo base_url('fassets/') ?>images/about-icon-1.png" alt="">
                        </div>
                        <h3>Quality</h3>
                        <p>We focus on making our meals and snacks nutritious and healthy</p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="What_different_item">
                        <div class="What_different_icon">
                            <img src="<?php echo base_url('fassets/') ?>images/about-icon-2.png" alt="">
                        </div>
                        <h3>Natural ingredients</h3>
                        <p>We focus on making our meals and snacks nutritious and healthy</p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="What_different_item">
                        <div class="What_different_icon">
                            <img src="<?php echo base_url('fassets/') ?>images/about-icon-3.png" alt="">
                        </div>
                        <h3>Cashless Payments</h3>
                        <p>We focus on making our meals and snacks nutritious and healthy</p>
                    </div>
                </div>
                
                
            </div>
        </div>
    </section>

    <!-- ========What makes us different end===================== -->

    <!-- ===============Our Values start============== -->
    <section class="our_values_section">
        <div class="container">
            <h2 class="title">Our Values</h2>
            <p class="subttl">The Eths That we Live By</p>
            
           <?php for($i=0;$i<count($values_data['all_list']);$i++) { ?>    
            
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="our_values_img">
                        <img src="<?php echo $this->config->item('file_url')."/Content/".$values_data['all_list'][$i]['image'];?>" class="img-fluid">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="our_values_info">
                        <h2><?php echo $values_data['all_list'][$i]['header']; ?></h2>
                        <p><?php echo $values_data['all_list'][$i]['content']; ?></p>
                    </div>
                </div>
            </div>
            
               <?php } ?>    
           <!-- <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="our_values_img">
                        <img src="<?php echo base_url('fassets/') ?>images/about2.jpg" class="img-fluid">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="our_values_info">
                        <h2>Operational Excellence</h2>
                        <p>We operate in a seamless fashion and ensure that the efficiency of our workforce benefits them as well.</p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="our_values_img">
                        <img src="<?php echo base_url('fassets/') ?>images/about3.jpg" class="img-fluid">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="our_values_info">
                        <h2>Responsibility</h2>
                        <p>We operate in a seamless fashion and ensure that the efficiency of our workforce benefits them as well.</p>
                    </div>
                </div>
            </div>-->
        </div>
    </section>
    <!-- ===============Our Values end============== -->

    <!-- ===============Map start============== -->
    <section class="map_section">
        <img src="<?php echo base_url('fassets/') ?>images/map.jpg">
    </section>
    <!-- ===============Map end============== -->