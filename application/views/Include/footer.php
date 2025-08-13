 <!-- ===============footer start============== -->
    <footer class="footer_sec">
        <img src="<?php echo base_url('fassets/'); ?>images/footer-img.png" alt="" class="img-fluid footer_img">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="footer_brand">
                        <img src="<?php echo base_url('fassets/'); ?>images/logo.png">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="footer_content">
                        <p>Dunwiley Stranorlar Co Donegal F93NV90</p>
                        <a href="#">+353 74 9190294</a>
                        <a href="#">+353 74 9190204</a>
                        <h3>follow us</h3>
                        <div class="social_bar">
                            <ul>
                                <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="quick_links">
                        <ul>
                            <li><span><img src="<?php echo base_url('fassets/'); ?>images/arrow.png"></span><a href="<?php echo base_url('Home/about_us'); ?>">About Us</a></li>
                            <li><span><img src="<?php echo base_url('fassets/'); ?>images/arrow.png"></span><a href="<?php echo base_url('Home/cost_pricing'); ?>">Costs & Pricing</a></li>
                            <li><span><img src="<?php echo base_url('fassets/'); ?>images/arrow.png"></span><a href="<?php echo base_url('Home/water_supply'); ?>">Water Supply</a></li>
                            <li><span><img src="<?php echo base_url('fassets/'); ?>images/arrow.png"></span><a href="<?php echo base_url('Home/cashless_system'); ?>">Pre-Order & Cashless System</a></li>
                            <li><span><img src="<?php echo base_url('fassets/'); ?>images/arrow.png"></span><a href="<?php echo base_url('Home/changeyour_provider'); ?>">Changing Your Provider</a></li>
                             
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="quick_links">
                        <ul>
                            <li><span><img src="<?php echo base_url('fassets/'); ?>images/arrow.png"></span><a href="<?php echo base_url('Home/foodmenus'); ?>">Food & Menus</a></li>
                            <li><span><img src="<?php echo base_url('fassets/'); ?>images/arrow.png"></span><a href="<?php echo base_url('Home/allergy'); ?>">Allergens and Dietary Information</a></li>
                            <li><span><img src="<?php echo base_url('fassets/'); ?>images/arrow.png"></span><a href="<?php echo base_url('Home/school_meals'); ?>">Free School Meals</a></li>
                            <li><span><img src="<?php echo base_url('fassets/'); ?>images/arrow.png"></span><a href="#">Log In to School Grid</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <hr class="devider">
                    <div class="copy_right_content">
                        <p>Copyright © 2021 My School Meals.ie. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ===============footer start============== -->
<input type="hidden" id="base_url" value="<?php echo base_url(); ?>">
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url('fassets/'); ?>js/jquery-1.12.4.min.js "></script>
    <script src="<?php echo base_url('fassets/'); ?>js/popper.min.js "></script>
    <script src="<?php echo base_url('fassets/'); ?>js/bootstrap.min.js "></script>

    <!-- owlcarousel link -->
    <script src="<?php echo base_url('fassets/'); ?>js/owl.carousel.min.js "></script>

    <!-- nice select -->
    <script src="<?php echo base_url('fassets/'); ?>js/jquery.nice-select.min.js "></script>

    <!-- scrill animation -->
    <script src="<?php echo base_url('fassets/'); ?>js/jquery.scrolla.min.js "></script>
    
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script src="<?php echo base_url('fassets/'); ?>js/jquery.datetimepicker.full.min.js"></script>


    <script>
        function validateEmail(email) {
var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
return re.test(email);
                }
        
        var base_url = $("#base_url").val();
        $(document).ready(function() {
            $('select').niceSelect();
        });


        let fixheader = document.querySelector(".header_area");
        let sticky = fixheader.offsetTop;

        window.addEventListener("scroll", () => {
            if (window.pageYOffset > sticky) {
                fixheader.classList.add("sticky_header");
            } else {
                fixheader.classList.remove("sticky_header");
            }
        });




        $('.banner_slider').owlCarousel({
            loop: true,
            margin: 0,
            nav: false,
            dots: true,
            items: 1,
            autoplay: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        });


        $('.clients_slider').owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            dots: false,
            navText: ['<img src="'+base_url+'/fassets/images/arrow-left.png">', '<img src="'+base_url+'/fassets/images/arrow-right.png">'],
            items: 2,
            autoplay: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 2
                }
            }
        });

        $('.animate').scrolla({
            mobile: false,
            once: true,
            animateCssVersion: 4,
        });
        
        
        
        
        
        
function _(x) {
return document.getElementById(x);
}
        
        



var base_url = $("#base_url").val();
var email_code_sent = 0;
var email_code_verify = 0;
        
        
        
$('#school_code').keypress(function (e) {
 var key = e.which;
 if(key == 13)  // the enter key code
  {
     prosesstageOne()
  }
});  
function prosesstageOne(){

/*var fields = document.querySelectorAll(".card_number");
var err = 0;
for (i=0;i<fields.length;i++){

if (fields[i].value == "") {
    err++;
}
if (err === 0){
     
}else {
return false;
}
}*/
   // alert();
    
    
    var school_code = $("#school_code").val();
    
    if(school_code == "")
        {
            $(".code_error").html("Enter Valid Code.").css("color","red"); 
            return false;
        }
    
    //alert(school_code);
    
         $.ajax({
            type: "POST",
            url: base_url+"StudentRegistration/check_schoolcode",
            data: {
                school_code:school_code
            },
            success: function(response) {
                console.log(response); 
                var res = JSON.parse(response);
                if(res.stat == 200){
                    
                 $(".code_error").html("Valid Code.Please Wait.").css("color","green");
                _('first_stage').style.display = "none";
                _('second_stage').style.display = "block";
                    
                }
                else if(res.stat == 500){
                    
                 $(".code_error").html("Not A Valid School  Code.Please Verify Your Code.").css("color","red");
                    
                }
            },
            error: function(response) {
                console.log(response);
            }
    });
    
    


}
        
$(".registerbtn").click(function(){
   
    //alert();
        register_student()
});
$('#pssword').keypress(function (e) {
 var key = e.which;
 if(key == 13)  // the enter key code
  {
     register_student()
  }
}); 
        
$('#student_verify_code').keypress(function (e) {
 var key = e.which;
 if(key == 13)  // the enter key code
  {
     register_student()
  }
}); 
    
        
        

    
    function register_student()
    {
        
   
    
    var full_name = $("#full_name").val();
    var year_group = $("#year_group").val();
    var classroom = $("#classroom").val();
    var dietary_req = $("#dietary_req").val();
    var student_email = $("#student_email").val();
    var pssword = $("#pssword").val();
    
    if(full_name == "")
        {
            $("#full_name-error").html("Required.").css("color","red");
            $("#full_name").focus();
            setTimeout(function(){  $("#full_name-error").html("") }, 2000);
            return false;
        }
    
    if(year_group == 0)
        {
            $("#year_group-error").html("Required.").css("color","red");
            $("#year_group").focus();
            setTimeout(function(){  $("#year_group-error").html("") }, 2000);
            return false;
        }
    
     if(classroom == "")
        {
            $("#classroom-error").html("Required.").css("color","red");
            $("#classroom").focus();
            setTimeout(function(){  $("#classroom-error").html("") }, 2000);
            return false;
        }
    
     if(dietary_req == "")
        {
            $("#dietary_req-error").html("Required.").css("color","red");
            $("#dietary_req").focus();
            setTimeout(function(){  $("#dietary_req-error").html("") }, 2000);
            return false;
        }
    
     if(student_email == "")
        {
            $("#student_email-error").html("Required.").css("color","red");
            $("#student_email").focus();
            setTimeout(function(){  $("#student_email-error").html("") }, 2000);
            return false;
        }
    
    if (!validateEmail(student_email)) {
		$("#student_email-error").html("Enter valid Email id.").css("color", "red");
		setTimeout(function() {
			$("#student_email").html("");
		}, 5000);
		$("#student_email").focus();
		return false;
	}
    
     if(pssword == "")
        {
            $("#pssword-error").html("Required.").css("color","red");
            $("#pssword").focus();
            setTimeout(function(){  $("#pssword-error").html("") }, 2000);
            return false;
        }
    
    if(email_code_sent == 0)
        {
            verify_email(student_email)
              return false;
        }
    
    if(email_code_verify == 0)
        {
            verify_code()
            return false;
        }
    
    
    
      $.ajax({
            type: "POST",
            url: base_url+"StudentRegistration/register",
            data: {
                full_name:full_name,
                year_group:year_group,
                classroom:classroom,
                dietary_req:dietary_req,
                student_email:student_email,
                pssword:pssword
            },
            success: function(response) {
                console.log(response); 
                var res = JSON.parse(response);
                if(res.stat == 200){
                    
                window.location.href = base_url+"Foodlisting";
                    
                }
                else if(res.stat == 500){
                    
                 $(".code_error").html("Some Poblem Occurred").css("color","red");
                    
                }
            },
            error: function(response) {
                console.log(response);
            }
    });
    
     }
    

        
        
        
function verify_email(student_email)
        {
            
            
       $.ajax({
            type: "POST",
            url: base_url+"StudentRegistration/verify_email",
            data: {
                student_email:student_email
            },
            success: function(response) {
                console.log(response); 
                var res = JSON.parse(response);
                if(res.status == 1){  
             $("#student_email-error").html(res.msg).css("color","red");    
                }
                else if(res.status == 2){
             $("#student_email-error").html(res.msg).css("color","green");
                    email_code_sent = 1;
             $("#codeverify-vox").show();
                }
            },
            error: function(response) {
                console.log(response);
            }
    });
    
        }
        

function verify_code()
        {
             var student_email = $("#student_email").val();
             var student_verify_code = $("#student_verify_code").val();
            
        $.ajax({
            type: "POST",
            url: base_url+"StudentRegistration/verify_code",
            data: {
                student_email:student_email,
                student_verify_code:student_verify_code
            },
            success: function(response) {
                console.log(response); 
                var res = JSON.parse(response);
                if(res.status == 1){  
                    email_code_verify = 1;
                   
             $("#student_email-error").html(res.msg).css("color","green"); 
             setTimeout(function(){   $(".registerbtn").click(); }, 1000);
                    
                }
                else if(res.status == 2){
             $("#student_email-error").html(res.msg).css("color","red");
         
                }
            },
            error: function(response) {
                console.log(response);
            }
    });
            
        }
        
        
    
$('#student_password').keypress(function (e) {
 var key = e.which;
 if(key == 13)  // the enter key code
  {
     student_login()
  }
});
        
$('#student_email').keypress(function (e) {
 var key = e.which;
 if(key == 13)  // the enter key code
  {
     student_login()
  }
});  
        
        
$(".login_next").click(function(){
    student_login()
       });
        
        
            
    function student_login()
            {
                
             var student_email    = $("#student_email").val();
             var student_password = $("#student_password").val();
            
              if(student_email == "")
        {
            $("#student_login-error").html("Email Id Is Required.").css("color","red");
            $("#student_email").focus();
            setTimeout(function(){  $("#student_login-error").html("") }, 2000);
            return false;
        }
            
              if(student_password == "")
        {
            $("#student_login-error").html("Password Is Required.").css("color","red");
            $("#student_password").focus();
            setTimeout(function(){  $("#student_login-error").html("") }, 2000);
            return false;
        }
            
    if (!validateEmail(student_email)) {
		$("#student_login-error").html("Enter valid Email id.").css("color", "red");
		setTimeout(function() {
			$("#student_login-error").html("");
		}, 2000);
		$("#student_email").focus();
		return false;
	}
            
            
               $.ajax({
            type: "POST",
            url: base_url+"StudentRegistration/verify_login",
            data: {
                student_email:student_email,
                student_password:student_password
            },
            success: function(response) {
                console.log(response); 
                var res = JSON.parse(response);
                if(res.status == 1){  
                  
                   
             $("#student_login-error").html(res.msg).css("color","green"); 
            window.location.href = base_url+"Foodlisting";
                    
                }
                else if(res.status == 2){
             $("#student_login-error").html(res.msg).css("color","red");
         
                }
            },
            error: function(response) {
                console.log(response);
            }
    });
                
            }
            
             

            
            
     
        
        
        
    $(".forgot_pass").click(function(){
        
          var student_email    = $("#student_email").val();
        
               if(student_email == "")
        {
            $("#student_login-error").html("Email Id Is Required For Password Recovery.").css("color","red");
            $("#student_email").focus();
            setTimeout(function(){  $("#student_login-error").html("") }, 2000);
            return false;
        }
         if (!validateEmail(student_email)) {
		$("#student_login-error").html("Enter valid Email id For Password Recovery.").css("color", "red");
		setTimeout(function() {
			$("#student_login-error").html("");
		}, 2000);
		$("#student_email").focus();
		return false;
	}
       
             $.ajax({
            type: "POST",
            url: base_url+"StudentRegistration/forgot_password",
            data: {
                student_email:student_email
            },
            success: function(response) {
                console.log(response); 
                var res = JSON.parse(response);
                if(res.status == 1){  
                  
                   
             $("#student_login-error").html(res.msg).css("color","green"); 
           // window.location.href = base_url+"Foodlisting";
                    
                }
                else if(res.status == 2){
             $("#student_login-error").html(res.msg).css("color","red");
         
                }
            },
            error: function(response) {
                console.log(response);
            }
    });
        
        
        
    });
        
        
        
$(".show_pass").click(function(){
      var x = document.getElementById("student_password");

      x.type = "text";
});
        
/*working here*/
/*foodlisting js */
        function get_menu_for_fooditems(menu_id,date,timeslot)
        {
            //var time_slot_id = $("#time_slot_id").val();
            //alert(menu_id);
            
             $.ajax({
            type: "POST",
            url: base_url+"Foodlisting/get_food_items_categories",
            data: {
                menu_id:menu_id,
                date:date,
                timeslot:timeslot
            },
            success: function(response) {
                console.log(response); 
                var res = JSON.parse(response);
                if(res.status == 200){  
                  
                    
                   // console.log(res.resluts[0]['all_list'][0].menu_category_id);
                    
            var content = "";
                content+='<ul class="nav nav-tabs" id="myTab" role="tablist">';
    if(res.resluts.length > 0){ 
       for(var i=0;i<res.resluts.length;i++)
            {
               // var cat_name = get_category_name(res.resluts[i]['all_list'][0].menu_category_id)
                content+='<li class="nav-item">';
                content+='<a class="nav-link" id="home-tab-'+res.resluts[i].menu_category_id+'" data-toggle="tab" href="#home'+res.resluts[i].menu_category_id+'" role="tab" aria-controls="home" aria-selected="true" onclick="get_food_items_cat('+res.resluts[i].menu_category_id+',\''+res.resluts[i].menuitem_id+'\')" >'+res.resluts[i].cat_name+'</a>';
                content+='</li>';
           }
        }
                    else{ 
               content+='<p class="text-center" style="color:green;">No Items To Show.Please Try After Some Time Or You can Enquire your school.</p>';
                        }
               content+='</ul>';
               
        $("#tab_area").html(content);   
                    
         $("#tab_content").html("");  
                    
        
        $("#home-tab-"+res.resluts[0].menu_category_id).trigger('click'); 
                    
       // $("#food_listing_modal").html(content1); 
                    
        $("#exampleModalfood").modal('show');

                   
           //  $("#student_login-error").html(res.msg).css("color","green"); 
           // window.location.href = base_url+"Foodlisting";
                    
                }
                else if(res.status == 400){
             //$("#student_login-error").html(res.msg).css("color","red");
                    
             $("#master-div").show();
             $("#master-msg").html("Items are not scheduled.Please contact Manegement.");
             setTimeout(function(){ $("#master-div").hide(); }, 2000);
         
                }
            },
            error: function(response) {
                console.log(response);
            }
    });
            
            
        }
        
    var cat_id = 0;    
        function get_food_items_cat(category_id,menuitem_id)
        {
            //alert(category_id);
            cat_id = category_id;
            
                $.ajax({
            type: "POST",
            url: base_url+"Foodlisting/get_food_items",
            data: {
                category_id:category_id,
                menuitem_id:menuitem_id
            },
            success: function(response) {
                console.log(response); 
                var res = JSON.parse(response);
                if(res.status == 200){  
               /*  class="qtyValue_'+j+'" */
          var content1 ="";     
          content1+='<div class="tab-pane" id="home'+j+'" role="tabpanel" aria-labelledby="home-tab'+j+'">';
        /*  content1+='<p class="text-center" style="color:green;">After Choosing Your Items Please Save Items To Cart</p>';*/
          content1+='<div class="row">';
           for(var j=0;j<res.resluts[0].length;j++)
            {
                
              
                content1+='<div class="col-sm-3">';
                content1+='<div class="product_card">';
                content1+='<div class="product_img">';
                content1+='<img src="'+base_url+'master_images/FoodImage/'+res.resluts[0][j].food_image+'" class="img-fluid">';
                content1+='</div>';
                content1+='<div class="product_info">';
                content1+='<h3>'+res.resluts[0][j].food_name+'</h3>';
                content1+='<p>'+res.resluts[0][j].food_description+'</p>';
                content1+='<div class="product_card_bottom">';
                content1+='<h4>€ '+res.resluts[0][j].food_price+'</h4>';
                
                if(res.resluts[0][j].cart_stat == 0)
                    {
                content1+='<div class="qtySelector text-center" id="add_counter_'+j+'">';
                content1+='<i class="fa fa-minus decreaseQty" onclick="decreaseQty('+j+');"></i>';
                content1+='<input type="text" class="qtyValue" id="qtyValue_'+j+'" value="1" readonly/>';
                content1+='<i class="fa fa-plus increaseQty" onclick="increaseQty('+j+');" ></i>';
                content1+='</div>';
                        
              /*  content1+='<div class="qtySelector text-center" id="update_counter_'+j+'" style="display:none;">';
                content1+='<i class="fa fa-minus decreaseQty" onclick="decreaseQtyinstant('+j+');"></i>';
                content1+='<input type="text" class="qtyValue qtyValueinstant_'+j+'" id="qtyValueinstant_'+j+'"  readonly/>';
                content1+='<i class="fa fa-plus increaseQty" onclick="increaseQtyintant('+j+');" ></i>';
                content1+='</div>';*/
                        
                    }
                else if(res.resluts[0][j].cart_stat == 1)
                    {
                content1+='<div class="qtySelector text-center" id="counter_'+j+'">';
                content1+='<i class="fa fa-minus decreaseQty" onclick="decreaseQty('+j+');"></i>';
                content1+='<input type="text" class="qtyValue" id="qtyValue_'+j+'" value="'+res.resluts[0][j].cart_quantity+'" readonly/>';
                content1+='<i class="fa fa-plus increaseQty" onclick="increaseQty('+j+');" ></i>';
                content1+='</div>';
                    }
                
             
                
                content1+='</div>';
                
                if(res.resluts[0][j].cart_stat == 0)
                    {
              content1+='<a href="javascript:void(0);" id="add_to_cart_btn_'+j+'" onclick = "add_to_cart('+res.resluts[0][j].food_id+',\''+j+'\')" class="btn custom_btn order_btn">Add To Cart</a>';        
                        
            /*  content1+='<a href="javascript:void(0);" id="update_cart_btn_'+j+'" onclick = "update_cart('+res.resluts[0][j].food_id+',\''+j+'\',\''+res.resluts[0][j].cart_id+'\')" class="btn custom_btn order_btn" style="display:none">Add To Cart</a>'*/
                    }
                else if(res.resluts[0][j].cart_stat == 1)
                    {
               content1+='<a href="javascript:void(0);"  onclick = "update_cart('+res.resluts[0][j].food_id+',\''+j+'\',\''+res.resluts[0][j].cart_id+'\')" class="btn custom_btn order_btn">Add To Cart</a>'         
                    }
                
            
               /* */
                content1+='</div>';
                content1+='</div>';
                content1+='</div>';
              
               
               
                
            }
                    
             content1+='</div>';
             content1+='</div>';
                    
            content1+='<div class="row">';
           /* content1+='<a href="javascript:void(0);" onclick="add_to_cart()" class="btn custom_btn order_btn">Save Items To Cart</a>';
            content1+='</div>';*/
                    
            $("#tab_content").html(content1);   
            $("#food_listing_modal").html(content1); 
                    
            $("#exampleModalfood").modal('show');
           
           // window.location.href = base_url+"Foodlisting";'+res.insert_id+',\''+res.image+'\'
                    
                }
                else if(res.status == 400){
       
         
                }
            },
            error: function(response) {
                console.log(response);
            }
    });
            
            
            
        }
        
        function add_to_cart(food_id,counter)
        {
            console.log(food_id);
            var quantity = $("#qtyValue_"+counter).val();
            
            $("#qtyValueinstant_"+counter).val(quantity);
            
            $.ajax({
            type: "POST",
            url: base_url+"Foodlisting/add_items_cart",
            data: {
                food_id:food_id,
                quantity:quantity
            },
            success: function(response) {
                console.log(response); 
                var res = JSON.parse(response);
                if(res.stat  == 200){  
           
                    /*$("#add_to_cart_btn_"+counter).hide();
                    $("#go_to_cart_btn_"+counter).show();
                    $("#counter_"+counter).hide();*/
                   $("#master-div").show();
                   $("#master-msg").html("Items Added To Cart");
  setTimeout(function(){ $("#master-div").hide(); }, 2000);
                    
                  $("#show_mini_cart_"+res.date_added+'_'+res.timeslot_id).show();

//                    
//                    $("#add_to_cart_btn_"+counter).hide();
//                    $("#update_cart_btn_"+counter).show();
//                    $("#add_counter_"+counter).hide();
//                    $("#update_counter_"+counter).show();
                    
                    $("#home-tab-"+cat_id).click();

                     get_cart_res_user()
                }
                else if(res.stat == 400){
             
         
                }
            },
            error: function(response) {
                console.log(response);
            }
    });
        }
        
        
        function update_cart(food_id,counter,cart_id)
        {
              var quantity = $("#qtyValue_"+counter).val();
            console.log(quantity);
     $.ajax({
            type: "POST",
            url: base_url+"Foodlisting/update_cart",
            data: {
                food_id:food_id,
                food_id:food_id,
                quantity:quantity,
                cart_id:cart_id
            },
            success: function(response) {
                console.log(response); 
                var res = JSON.parse(response);
                if(res.stat == 200){  
                  
                    console.log("cart updated");
                    $("#master-div").show();
                    $("#master-msg").html("Cart Updated");
                   setTimeout(function(){ $("#master-div").hide(); }, 2000);

            // $("#student_login-error").html(res.msg).css("color","green"); 
           // window.location.href = base_url+"Foodlisting";
                    
                }
                else if(res.status == 2){
             $("#student_login-error").html(res.msg).css("color","red");
         
                }
            },
            error: function(response) {
                console.log(response);
            }
    });
        
        }
        
   
        
/*global*/
var gtimeslot_id = 0;
var gdate = 0;
/*global*/
        
     
        
        
      
/*foodlisting js*/
        
/*mini cart*/

 function get_minicart_info(timeslot_id,date)
        {
           
             gtimeslot_id = timeslot_id;
             gdate        = date;
           
            
        $.ajax({
            type: "POST",
            url: base_url+"Cart/get_items_cart_mini",
            data: {
                timeslot_id:timeslot_id,
                date:date
            },
            success: function(response) {
                console.log(response); 
                var res = JSON.parse(response);
                //  console.log(res); 
              //  console.log("rr"+res.results[0].food_image);
                if(res.status  == 200){  
                    
                   
            
               
                      var content2="";
                    
                    
                        content2+='<table class="custom_table">';
                        content2+='<tr>';
                        content2+='<th></th>';
                        content2+='<th>Name</th>';
                        content2+='<th>Quantity</th>';
                        content2+='<th>Price</th>';
                        content2+='<th>Total</th>';
                        content2+='<th>Action</th>';
                        content2+='</tr>';
                    for(var i=0;i<res.resluts.length;i++)
                        {
                    
                        content2+='<tr id="minicart_row_'+i+'">';
                        content2+='<td>';
                        content2+='<div class="meal_img">';
                        content2+='<img src="'+base_url+'master_images/FoodImage/'+res.resluts[i].food_image+'" width="50" height="50" alt="">';
                        content2+='</div>';
                        content2+='</td>';
                        content2+='<td>';
                        content2+='<div class="meal_info">';
                        content2+='<p>'+res.resluts[i].food_name+'</p>';
                        content2+='<span>Quantity '+res.resluts[i].quantity+'</span>';
                        content2+='</div>';
                        content2+='</td>';
                        content2+='<td>';
                        content2+='<div class="product_card_bottom">';
                        content2+='<div class="qtySelector text-center">';
                        content2+='<i class="fa fa-minus decreaseQty" onclick="decreaseQtyminicart('+res.resluts[i].food_id+',\''+i+'\',\''+res.resluts[i].cart_id+'\')"></i>';
                        content2+='<input type="text" class="qtyValue" id="qtyValueminicart_'+i+'" value="'+res.resluts[i].quantity+'" readonly />';
                        content2+='<i class="fa fa-plus increaseQty"  onclick="increaseQtyminicart('+res.resluts[i].food_id+',\''+i+'\',\''+res.resluts[i].cart_id+'\')"></i>';
                        content2+='</div>';
                        content2+='</div>';
                        content2+='</td>';
                        content2+='<td>€ '+res.resluts[i].food_price+'</td>';
                        content2+='<td>€ '+parseInt(res.resluts[i].food_price*res.resluts[i].quantity)+'</td>';
                        content2+='<td>';
                        content2+='<div class="remove">';
                        content2+='<a href="javascript:void(0);" onclick="remove_items_minicart('+res.resluts[i].cart_id+',\''+i+'\')"> <img src="'+base_url+'fassets/images/remove.png" alt="" class="img-fluid"></a>';
                        content2+='</div>';
                        content2+='</td>';
                        content2+='</tr>';
                            
                      }
                    
                        content2+='</table>';
                    
                   // alert();
                    $("#mini_cart_content").html(content2);  
                      
                    
                    $("#exampleModalmini").modal('show');
                  
                }
                else if(res.status == 400){
                    $("#master-div").show();
                    $("#master-msg").html("No items In Mini cart");
                    setTimeout(function(){ $("#master-div").hide(); }, 2000);
                    $("#exampleModalmini").modal('hide');
                }
            },
            error: function(response) {
                console.log(response);
            }
    });  
            
        }
/*mini cart*/
        
        
        
      function update_minicart(food_id,counter,cart_id)
        {
            //alert("up");
           
            
            
              var quantity = $("#qtyValueminicart_"+counter).val();
            console.log(quantity);
     $.ajax({
            type: "POST",
            url: base_url+"Foodlisting/update_cart",
            data: {
                food_id:food_id,
                food_id:food_id,
                quantity:quantity,
                cart_id:cart_id
            },
            success: function(response) {
                console.log(response); 
                var res = JSON.parse(response);
                if(res.stat == 200){  
                  
                    console.log("cart updated");
                    $("#master-div").show();
                    $("#master-msg").html("Cart Updated");
                     get_minicart_info(gtimeslot_id,gdate)
                   setTimeout(function(){ $("#master-div").hide(); }, 2000);

            // $("#student_login-error").html(res.msg).css("color","green"); 
           // window.location.href = base_url+"Foodlisting";
                    
                }
                else if(res.status == 2){
             $("#student_login-error").html(res.msg).css("color","red");
         
                }
            },
            error: function(response) {
                console.log(response);
            }
    });
        
        }
        
        
function remove_items_minicart(cart_id,counter)
        {
                $.ajax({
            type: "POST",
            url: base_url+"Cart/remove_items_mini_cart",
            data: {
             cart_id:cart_id   
            },
            success: function(response) {
                console.log(response); 
                var res = JSON.parse(response);
                if(res.stat  == 200){  
                   $("#minicart_row_"+counter).remove();
                   get_cart_res_user()
                   get_minicart_info(gtimeslot_id,gdate)
                }
                else if(res.stat == 400){
             
         
                }
            },
            error: function(response) {
                console.log(response);
            }
    }); 
            
        }
        
        
/*increment*/
var minVal = 1,
    maxVal = 20; // Set Max and Min values
// Increase product quantity on cart page

    
 function increaseQty(counter)
    {
       
        var value = $("#qtyValue_"+counter).val();
        if (value < maxVal) {
            value++;
        }
        $("#qtyValue_"+counter).val(value);
    }
  
// Decrease product quantity on cart page

    
function decreaseQty(counter)
    {
     
    var value = $("#qtyValue_"+counter).val();
        if (value > 1) {
            value--;
        }
        $("#qtyValue_"+counter).val(value);
        
    }
        

        
        
        
        
function decreaseQtyminicart(food_id,counter,cart_id)
        {
           
            
                var value = $("#qtyValueminicart_"+counter).val();
                if (value > 1) {
                    value--;
                }
                $("#qtyValueminicart_"+counter).val(value);

                var quantity   =  $("#qtyValue_"+counter).val();
                var food_price =  $("#food_price_"+counter).val();
            
            update_minicart(food_id,counter,cart_id)
           
            
        }
function increaseQtyminicart(food_id,counter,cart_id)
        {
        var value = $("#qtyValueminicart_"+counter).val();
        if (value < maxVal) {
            value++;
        }
            else{
               
                $("#master-div").show();
                $("#master-msg").html("Quantity Exceeded");
                setTimeout(function(){ $("#master-div").hide(); }, 2000);
                 return
            }
        $("#qtyValueminicart_"+counter).val(value);
            
            
            update_minicart(food_id,counter,cart_id)
           
        }

/*decrement*/  
        
        
   
 function increaseQtycart(food_id,counter,cart_id)
    {
      // alert();
        var value = $("#qtyValue_"+counter).val();
        if (value < maxVal) {
            value++;
        }
        $("#qtyValue_"+counter).val(value);
        
        var quantity   =  $("#qtyValue_"+counter).val();
        var food_price =  $("#food_price_"+counter).val();
//       console.log(quantity);
//       console.log("=====");
//       console.log(food_price);
        
        var amt = parseInt(quantity)* parseInt(food_price);
        $("#total_price_"+counter).html("€ "+amt);
        
        var sub_total_final = $("#sub_total").val();
        
        var final_amt = parseInt(sub_total_final) + parseInt(food_price);
        
        $("#sub_total_final").html(final_amt);
          $("#sub_total").val(final_amt);
        
        update_cart(food_id,counter,cart_id)
    }
  
// Decrease product quantity on cart page

    
function decreaseQtycart(food_id,counter,cart_id)
    {
     
    var value = $("#qtyValue_"+counter).val();
        if (value > 1) {
            value--;
        }
        $("#qtyValue_"+counter).val(value);
        
        
        var quantity   =  $("#qtyValue_"+counter).val();
        var food_price =  $("#food_price_"+counter).val();
        //var food_price =  
        
        var amt = parseInt(quantity)* parseInt(food_price);
        $("#total_price_"+counter).html("€ "+amt);
        
        var sub_total_final = $("#sub_total").val();
        
        var final_amt = parseInt(sub_total_final) - parseInt(food_price);
        
        $("#sub_total_final").html(final_amt);
        $("#sub_total").val(final_amt);
        
         update_cart(food_id,counter,cart_id)
    }

        
        

        
        
function get_cart_res_user()
        {
            
    //alert();
        $.ajax({
            type: "POST",
            url: base_url+"Cart/get_items_cart",
            data: {
                
            },
            success: function(response) {
                console.log(response); 
                var res = JSON.parse(response);
                if(res.stat  == 200){  
           
                   $(".crt_qnt").html(res.count);
                }
                else if(res.stat == 400){
             
                   $(".crt_qnt").html(res.count);
                }
            },
            error: function(response) {
                console.log(response);
            }
    });  
        }
        
$(document).ready(function(){
    get_cart_res_user()
});
        
        
function add_address(stat)
        {
            
            var billing_name  = $("#billing_name").val()
            var billing_phone = $("#billing_phone").val()
            var billing_address = $("#billing_address").val()
            var pincode = $("#pincode").val()
            
        $.ajax({
            type: "POST",
            url: base_url+"Checkout/update_addess",
            data: {
            stat:stat,
            billing_name:billing_name,
            billing_phone:billing_phone,
            billing_address:billing_address,
            pincode:pincode
                
            },
            success: function(response) {
                console.log(response); 
                var res = JSON.parse(response);
                if(res.stat  == 200){  
                    
                    if(stat == 1)
                        {
                            $("#up").show();
                            $("#add").hide();
                        }
                   $("#master-div").show();
                   $("#master-msg").html("Address Updated");
                   setTimeout(function(){ $("#master-div").hide(); }, 2000);
//                   $("#success_msg_address").html("Address Updated").css("color","green");
                }
                else if(res.stat == 400){
             
         
                }
            },
            error: function(response) {
                console.log(response);
            }
    }); 
           
        }
        
        
        
function get_order_details(order_id)
        {
            
               $.ajax({
            type: "POST",
            url: base_url+"StudentAccount/get_single_order",
            data: {
            order_id:order_id
            },
            success: function(response) {
              //  console.log(response); 
                var res = JSON.parse(response);
//                console.log("dddd");
//                console.log(res.all_list[0].all_sub_order[0].length);
                if(res.stat  == 200){  
                    var j = 0;
                 
                    var content = "";
                    var totals  = 0;
                    var calories = 0;
                    
                        content+='<tr>';
                        content+='<th>Time Slot</th>';
                        content+='<th>Product</th>';
                        content+='<th>Pick up time</th>';
                        content+='<th>Quantity</th>';
                        content+='<th>Price</th>';
                        content+='<th>Calories</th>';
                        content+='<th>Order Status</th>';
                        content+='</tr>';
                    var j = 1;
                      for(var i=0;i<res.all_list.length;i++)
                          {
                          console.log("vfdsv");
                          console.log(res.all_list[i].all_sub_order[0].food_image);
                              
                              
                            content+='<tr>'; 
                            content+='<th>'+res.all_list[i].date_of_food+'</th>';
                            content+='</tr>';
                              
                              
                            for(var m=0;res.all_list[i].all_sub_order.length;m++)
                                {
                              
                              var values = res.all_list[i].all_sub_order[m];
                                     //console.log("vfdsv");
                                 // console.log(res.all_list[i].all_sub_order[m].food_image);
                             content+='<tr>';
                             content+='<td>'+values.timeslot_name+'</td>';
                             content+='<td>';
                             content+='<div class="meal_content">';
                             content+='<div class="meal_img">';
                           content+='<img src="'+base_url+'master_images/FoodImage/'+values.food_image+'" width="50" height="50" alt="">';

                             content+='</div>';
                             content+='<div class="meal_info">';
                             content+='<p>'+values.food_name+'</p>';
                             content+='<span>Quantity '+values.quantity+'</span>';
                             content+='</div>';

                             content+='</div>';
                             content+='</td>';
                             content+='<td>'+values.timeslot_interval+'</td>';
                             content+='<td>'+values.quantity+'</td>';
                             content+='<td>€ '+values.food_price+'</td>';
                             content+='<td>'+values.food_calorie+'</td>';
                             content+='<td>';
                             content+='<h4>';
                                    if(values.details_order_status == 1)
                                {
                                       content+='Due For Pickup';
                                }
                            else if(values.details_order_status == 2)
                                {
                                     content+='Delivered';
                                }
                              content+='</h4>';
                             content+='</td>';
                             content+='</tr>';
                                    
                                    
                              
                             totals = parseInt(totals)+parseInt(values.food_price*values.quantity);
                              
                             calories = parseInt(calories)+parseInt(values.food_calorie);
                                    
                                    if(res.all_list[i].all_sub_order.length == parseInt(m+j))
                                        {
                                            break;
                                        }
                                    
                                }
                              
                          }
                           
                        
                        content+='<tr>';
                        content+='<th></th>';
                        content+='<th></th>';
                        content+='<th></th>';
                        content+='<th>Totals : -</th>';
                        content+='<th>€ '+totals+'</th>';
                        content+='<th>'+calories+'</th>';
                        content+='</tr>';
                    
       
                    
                    console.log(totals);
                  
                    $("#modal_table").html(content);
                    
                   $("#exampleModalLong").modal('show');
                }
                else if(res.stat == 400){
             
         
                }
            },
            error: function(response) {
                console.log(response);
            }
    }); 
           
            
        }
        

function update_order_details(order_details_id,counter)
        {
           var pickup_date =  $("#pickup_date_"+counter).val();
            
          if(pickup_date == "")
              {
                    $("#master-div").show();
                   $("#master-msg").html("Please Enter Proper Date Time");
                   setTimeout(function(){ $("#master-div").hide(); }, 2000);
                  return false;
              }
            /*alert(pickup_date);
            alert(counter);*/
             $.ajax({
            type: "POST",
            url: base_url+"StudentAccount/update_order_details",
            data: {
            order_details_id:order_details_id,        
            pickup_date:pickup_date    
            },
            success: function(response) {
                console.log(response); 
                var res = JSON.parse(response);
                if(res.stat  == 200){  
                  
                    $("#master-div").show();
                   $("#master-msg").html("Order Updated");
                   setTimeout(function(){ $("#master-div").hide(); }, 2000);
                    
                }
                else if(res.stat == 400){
             
         
                }
            },
            error: function(response) {
                console.log(response);
            }
    }); 
        }


 function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
                    $('#imagePreview').hide();
                    $('#imagePreview').fadeIn(650);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#imageUpload").change(function() {
            readURL(this);
        });  
        
        
           $('.demo').datetimepicker({
            timepicker: true,
            datepicker: true,
            value: '2021-8-1 09:45',
            format: 'Y/m/d H:i',
            step: 5,
            weeks: true,
        });
        
        
        //  $('.demo').datetimepicker({
        //     timepicker: true,
        //     datepicker: true,
        //     value: '2021-8-1 09:45',
        //     format: 'Y/m/d H:i',
        //     step: 5,
        //     weeks: true,
        // });
        
    </script>



<!--FOR SAGEPAY-->
<script src="https://pi-test.sagepay.com/api/v1/js/sagepay.js"></script>
<?php //echo "hello".$payment_data['merchantSessionKey']; ?>
<script>
function add_payments(e)
{
 //   alert();
  //e.preventDefault();
    //    e.preventDefault();
                sagepayOwnForm({ merchantSessionKey: '<?php echo $payment_data['merchantSessionKey']; ?>' })
                  .tokeniseCardDetails({
                      cardDetails: {
                         cardholderName: $('#card-holder-name').val(),
                         cardNumber: $("#card-number").val(),
                         expiryDate: $("#expiryMonth").val()+$("#expiryYear").val(),
                         securityCode: $("#cvv").val()
                      },
                      onTokenised : function(result) {
                        if (result.success) {
                          document.querySelector('[name="card-identifier"]').value = result.cardIdentifier;
                          $('#payment_form').attr('action', base_url+'Checkout/add_order');
                          $('#payment_form').submit();
                          document.querySelector('form').submit();
                        } else {
                        	   if(result.errors.length>0) {
                                $("#error-message").show();
                                $("#error-message").html("");
                                for(i=0;i<result.errors.length;i++) {
                                    $("#error-message").append("<div>" + result.errors[i].code+": " +result.errors[i].message + "</div>");
                                }
                            }
                        }
                      }
                  });
}
</script>
<!--FOR SAGEPAY-->


</body>