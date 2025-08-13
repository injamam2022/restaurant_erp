
    <!-- ==============banner start ==============-->

    <section class="banner_section ">
        <div class="banner_slider owl-carousel">
            
        <?php for($i=0;$i<count($banner_data['all_list']);$i++) { ?>
            <div class="banner_slide">
                <div class="bannar_inner_cnt ">
                    <!--<h1>A fully outsourced catering provision for their <b>schools and colleges.</b></h1>-->
                    <?php echo $banner_data['all_list'][$i]['content']; ?>
                    <a href="#" class="custom_btn banner_btn">How does it work</a>
                </div>
                <div class="banner_img">
                    <img src="<?php echo $this->config->item('file_url')."/Content/".$banner_data['all_list'][$i]['image'];?>" alt="" class="img-fluid">
                </div>
            </div>
         <?php } ?>
          <!--  <div class="banner_slide">
                <div class="bannar_inner_cnt ">
                    <h1>A fully outsourced catering provision for their <b>schools and colleges.</b></h1>
                    <a href="#" class="custom_btn banner_btn">How does it work</a>
                </div>
                <div class="banner_img">
                    <img src="<?php echo base_url('fassets/'); ?>images/banner-img.jpg" alt="" class="img-fluid">
                </div>
            </div>-->
            
            
        </div>
    </section>
    <!-- ==============banner end ==============-->

    <!-- ========We provide start===================== -->

    <section class="weprovide_section">
        <div class="container">
            <h2 class="provide_title">We provide</h2>
            <div class="row">
                <div class="col-sm-3">
                    <div class="provide_item">
                        <div class="provide_icon">
                            <img src="<?php echo base_url('fassets/'); ?>images/weprovide-1.png" alt="">
                        </div>
                        <h3>Heathy Eating and Nutrition</h3>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="provide_item">
                        <div class="provide_icon">
                            <img src="<?php echo base_url('fassets/'); ?>images/weprovide-2.png" alt="">
                        </div>
                        <h3>Industrial Grade Kitchen</h3>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="provide_item">
                        <div class="provide_icon">
                            <img src="<?php echo base_url('fassets/'); ?>images/weprovide-3.png" alt="">
                        </div>
                        <h3>Locally Sourced Chef</h3>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="provide_item">
                        <div class="provide_icon">
                            <img src="<?php echo base_url('fassets/'); ?>images/weprovide-4.png" alt="">
                        </div>
                        <h3>Professional Food Service</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========We provide end===================== -->

    <!-- ========Sole activity ===================== -->
    <section class="sole_activity">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="sole_activity_item">
                        <span>26</span>
                        <div class="sol_activity_info">
                            <h5>Years of</h5>
                            <h4>The Sole Activity of The Business Originally</h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="sole_activity_item">
                        <span><img src="<?php echo base_url('fassets/'); ?>images/irish.png" alt=""></span>
                        <div class="sol_activity_info">
                            <p>We hold some education recognised awards from the Irish Heart Foundation</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================Sole activity ===================== -->
    <!-- ==================about start ===================== -->
    <section class="about_section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-7">
                    <div class="about_info">
                        
                        <h2><?php echo $aboutus_data['all_list'][0]['header']; ?></h2>
                        <p><?php echo $aboutus_data['all_list'][0]['content']; ?> </p>
                        <a href="#" class="custom_btn">Read more</a>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="about_img">
                        <img src="<?php echo $this->config->item('file_url')."/Content/".$aboutus_data['all_list'][0]['image'];?>" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================about end ===================== -->
    <!-- ==================what company does start ===================== -->

    <section class="what_company_does">
        <h2 class="what_company_does_title"><?php echo $whatcompany_data['all_list'][0]['header']; ?></h2>
        <div class="container">
            <div class="what_company_does_inner_cnt_first" style="background: url(<?php echo $this->config->item('file_url')."/Content/".$whatcompany_data['all_list'][0]['image'];?>) no-repeat center;background-size: cover;">
                <div class="row">
                    <div class="col-sm-5">
                        <div class="what_company_does_info">
                            <h4><?php echo $whatcompany_data['all_list'][0]['content']; ?></h4>
                            <a href="#" class="custom_btn what_company_does_btn">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="what_company_does_inner_cnt_second" style="background: url(<?php echo $this->config->item('file_url')."/Content/".$whatcompany_data['all_list'][1]['image'];?>) no-repeat center;background-size: cover;">
                <div class="row justify-content-end">
                    <div class="col-sm-5">
                        <div class="what_company_does_info">
                            <h4><?php echo $whatcompany_data['all_list'][1]['content']; ?></h4>
                            <a href="#" class="custom_btn what_company_does_btn">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================what company does end ===================== -->
    <!-- ==================service start ===================== -->
    <section class="service">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="service_info">
                        <h3>For School or colleges</h3>
                        <?php echo $forschool_data['all_list'][0]['content']; ?>
                       <!-- <ul>
                            <li>Exciting menus each term to utilise seasonal produce</li>
                            <li>Freshly cooked meals using raw ingredients</li>
                            <li>Freshly baked puddings and biscuits</li>
                            <li>Theme days and Christmas dinners</li>
                            <li>Packed lunches for school outings</li>
                            <li>Online pre-ordering with access to all our recipes</li>
                            <li>Payments by card (pre-pay top up) or Direct Debit (post payment, monthly)</li>
                            </ul>-->
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="service_info">
                        <h3>For Parents</h3>
                        <?php echo $forparents_data['all_list'][0]['content']; ?>
                        <!--<ul>
                             
                            <li>Exciting menus each term to utilise seasonal produce</li>
                            <li>Freshly cooked meals using raw ingredients</li>
                            <li>Freshly baked puddings and biscuits</li>
                            <li>Theme days and Christmas dinners</li>
                            <li>Packed lunches for school outings</li>
                            <li>Online pre-ordering with access to all our recipes</li>
                            <li>Payments by card (pre-pay top up) or Direct Debit (post payment, monthly)</li>
                        </ul>-->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <a href="#" class="custom_btn">Read more</a>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================service end ===================== -->
    <!-- ==================clients start ===================== -->
    <section class="clients_section">
        <div class="container">
            <h2 class="what_company_does_title">What Our Clients Says</h2>
            <div class="clients_slider owl-carousel">
                <div class="clients_item">
                    <div class="clients_img">
                        <img src="<?php echo base_url('fassets/'); ?>images/clients-1.jpg" alt="">
                    </div>
                    <div class="clients_info">
                        <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. cumsan lacus vel facilisis. ”</p>
                        <div class="star_content">
                            <ul class="star_rating">
                                <div class="img_icon">
                                    <img src="<?php echo base_url('fassets/'); ?>images/google_icon.png" alt="">
                                </div>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            </ul>
                            <a href="#" class="clients_name">Shopie Leonard</a>
                            <p>LMS Principal</p>
                        </div>
                    </div>
                </div>
                <div class="clients_item">
                    <div class="clients_img">
                        <img src="<?php echo base_url('fassets/'); ?>images/clients-2.jpg" alt="">
                    </div>
                    <div class="clients_info">
                        <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. cumsan lacus vel facilisis. ”</p>
                        <div class="star_content">
                            <ul class="star_rating">
                                <div class="img_icon">
                                    <img src="<?php echo base_url('fassets/'); ?>images/google_icon.png" alt="">
                                </div>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            </ul>
                            <a href="#" class="clients_name">Shopie Leonard</a>
                            <p>LMS Principal</p>
                        </div>
                    </div>
                </div>
                <div class="clients_item">
                    <div class="clients_img">
                        <img src="<?php echo base_url('fassets/'); ?>images/clients-1.jpg" alt="">
                    </div>
                    <div class="clients_info">
                        <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. cumsan lacus vel facilisis. ”</p>
                        <div class="star_content">
                            <ul class="star_rating">
                                <div class="img_icon">
                                    <img src="<?php echo base_url('fassets/'); ?>images/google_icon.png" alt="">
                                </div>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            </ul>
                            <a href="#" class="clients_name">Shopie Leonard</a>
                            <p>LMS Principal</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================clients end ===================== -->