<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('fassets/'); ?>css/bootstrap.min.css">

    <!-- owlcarousel link -->
    <link rel="stylesheet" href="<?php echo base_url('fassets/'); ?>css/owl.carousel.min.css">

    <!-- owlcarousel link -->
    <link rel="stylesheet" href="<?php echo base_url('fassets/'); ?>css/nice-select.css">

    <!-- style.css link -->
    <link rel="stylesheet" href="<?php echo base_url('fassets/'); ?>css/style.css">

    <!-- animate.css link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- fontawesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    
        <link rel="stylesheet" href="<?php echo base_url('fassets/'); ?>css/jquery.datetimepicker.min.css">

    <title>My School Meals</title>
</head>



<body>

    <!-- ==============header start============== -->
    <header class="header_area">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url('fassets/'); ?>images/logo.png" class="img-fluid"></a>

                <div class="header_btn">
                    <a href="javascript:void(0)" class="custom_btn green_btn cashless_btn">Cashless System</a>

                  

                  <?php $student_id =  $this->session->userdata('student_login_id'); 
                    
                      if($student_id) { 
                    ?>
                   
                    <a href="<?php echo base_url('Foodlisting'); ?>" class="custom_btn login_btn">Food</a>
                    <?php } else { ?> 
                    
                     <a href="<?php echo base_url('StudentLogin'); ?>" class="custom_btn login_btn">Login</a>
                    
                    <?php } ?>

                </div>
                
                  <?php $student_id =  $this->session->userdata('student_login_id'); 
                    
                      if($student_id) { 
                    ?>
                 <ul class="header_right">
                    <li class="cart_btn">
                        <a href="<?php echo base_url('Cart'); ?>">  <ion-icon name="cart-outline"></ion-icon></a>
                        <span class="crt_qnt">0</span>
                    </li>
                    <li class="user">
                        <div class="user_icon">
                            <ion-icon name="person-outline"></ion-icon>
                        </div>

                        <ul class="user_dropdown">
                            <li>
                                <a href="<?php echo base_url('StudentAccount'); ?>">My account</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('Logout/student_logout'); ?>">logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <?php } ?>
                
                
                
            </nav>
                        <div class="alert alert-block alert-success" id="master-div" style="display:none">
                        <i class=" fa fa-danger cool-green "></i>
                         <p id="master-msg"> Account Updated Successfully<p>        
                        </div>
        </div>
    </header>
