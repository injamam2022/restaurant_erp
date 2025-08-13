 <!-- ==============banner start ==============-->

    <section class="banner_section inner_banner_section">
            <div class="banner_slide">
                <div class="bannar_inner_cnt ">
                    <h1><?php echo $banner_data['all_list'][0]['header']; ?></h1>
                    <p><?php echo $banner_data['all_list'][0]['content']; ?> </p>
                </div>
                <div class="banner_img">
                    <img src="<?php echo $this->config->item('file_url')."/Content/".$banner_data['all_list'][0]['image'];?>" alt="" class="img-fluid">
                </div>
            </div>
    </section>
    <!-- ==============banner end ==============-->

  


     <!-- ==================about start ===================== -->
    <section class="about_section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-7">
                    <div class="about_info">
                        
                        <h2><?php echo $values_data['all_list'][0]['header']; ?></h2>
                        <p><?php echo $values_data['all_list'][0]['content']; ?> </p>
                        <a href="#" class="custom_btn">Read more</a>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="about_img">
                        <img src="<?php echo $this->config->item('file_url')."/Content/".$values_data['all_list'][0]['image'];?>" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================about end ===================== -->
 

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