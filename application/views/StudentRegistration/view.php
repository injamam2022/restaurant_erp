
    <!-- ==============registration start ==============-->

   <section class="registration_page">
       <div class="registration_img">
           <img src="<?php echo base_url('fassets/'); ?>images/registration-bannert.jpg" class="img-fluid">
       </div>
       <div class="registration-form">
            <h1 class="title">Online Registration</h1>
        <div id="first_stage">
               <form action="javascript:void(0);">
                 <!--  <div class="form-group">
                       <label>Card Number</label>
                       <input type="number" name="" class="form-control card_number" placeholder="Enter Your Card number">
                       <div class="card_error"></div>
                   </div>-->
                   <div class="form-group">
                       <label>School Code</label>
                       <input type="text" name="" class="form-control card_number" id="school_code" placeholder="Enter Your School Code">
                       
                   </div>
                  <p class="code_error"></p> 
                   <br>
                   <a href="javascript:void(0)" class="btn custom_btn registration_next" onclick="prosesstageOne()">Next</a>
               </form>
            </div>
       
       <div id="second_stage">
               <form>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                           <label>Full Name</label>
                           <input type="text" name="" id="full_name" class="form-control card_number" placeholder="Enter Your Name">
                             <p id="full_name-error"></p>
                       </div>
                   </div>
                  
                   <div class="col-sm-4">
                        <div class="form-group">
                           <label>Year Group</label>
                          <select class="form-control" id="year_group">
                              <option value="0"> Select</option>
                              <option value="1">10 - 11 yrs</option>
                              <option value="2">11 - 12 yrs</option>
                              <option value="3">13 - 14 yrs</option>
                              <option value="3">15 - 16 yrs</option>
                          </select>
                            <p id="year_group-error"></p>
                       </div>
                    </div>
                     
                        <div class="col-sm-8">
                            <div class="form-group">
                               <label>Classroom/ Collection Point</label>
                               <input type="text" name="" class="form-control card_number" id="classroom" placeholder="Enter Your Classroom">
                                
                              <p id="classroom-error"></p>
                           </div>
                        </div>
                  

                        <div class="col-sm-12">
                            <div class="form-group">
                               <label>Dietary Requirements</label>
                              <textarea class="form-control" id="dietary_req" name=""></textarea>
                                 <p id="dietary_req-error"></p>
                           </div>
                        </div>
               
                        <div class="col-sm-12">
                            <div class="form-group">
                               <label>Email Address</label>
                              <input type="text" name="" id="student_email" class="form-control card_number" placeholder="Enter Your Email id">
                                 <p id="student_email-error"></p>  
                           </div>
                        </div>
                    
                       <div class="col-sm-12" id="codeverify-vox" style="display:none;">
                            <div class="form-group">
                               <label>Enter Code</label>
                              <input type="text" name="" id="student_verify_code" class="form-control card_number" placeholder="Enter Code Received">
                                 <p id="student_code-error"></p>  
                           </div>
                        </div>
              
                        <div class="col-sm-12">
                            <div class="form-group">
                               <label>Password</label>
                              <input type="password" name="" id="pssword" class="form-control card_number" placeholder="Type Your Password">
                                
                                <p id="pssword-error"></p> 
                           </div>
                        </div>
                
                    </div>
                   
                  
                   <a href="javascript:void(0)" class="btn custom_btn registration_next registerbtn">Register</a>
               </form>
            </div>
       </div>
   </section>
    <!-- ==============registration end ==============-->

