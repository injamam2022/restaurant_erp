    <!-- ==============login start ==============-->

    <section class="login_page">
        <div class="login_img">
            <img src="<?php echo base_url('fassets/') ?>images/registration-bannert.jpg" class="img-fluid">
        </div>
        <div class="login-form">
            <h1 class="title">Online Registration</h1>
            <form>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" id="student_email" name="" class="form-control" placeholder="Enter Your Email Address">
                </div>
                <div class="form-group mb_0">
                    <label>Password</label>
                    <input type="password" id="student_password" name="" class="form-control password" placeholder="Enter Your Password">
                    <span class="show_pass">Show</span>
                </div>
                <div class="forgot_content">
                    <a href="javascript:void(0)" class="forgot_pass">Forgot Password?</a>
                </div>
                <p id="student_login-error"></p>
                <a href="javascript:void(0)" class="btn custom_btn login_next">Login</a>
          
                <p class="dont_account">Don’t have an account?
                    <a href="<?php echo base_url('StudentRegistration'); ?>"><b>Register</b></a>
                </p>
                <a href="#"></a>
            </form>
        </div>
    </section>
    <div class="copy-right">
        <div class="container">
            <p>Copyright © 2021 My School Meals.ie. All rights reserved.</p>
        </div>
    </div>
    <!-- ==============login end ==============-->
