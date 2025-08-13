
            
            <section class="content">
                <header class="content__title">
                    <h1>Add Content </h1>
                   
                   

                </header>
                
                <div class="card">
                    <div class="card-body">
                       <div class="row">
                            <div class="col-sm-12">
                               <div class="form-group">
                                   <label>Content Type(Select from dropdown)</label>
                                   
                                        <select class="form-control" id="section">
                                            <option>--select--</option>
                                            <option value="1">Banner (Home Page)</option>
                                          <!--  <option value="2">We provide (Home Page)</option>-->
                                            <option value="3">About us (Home Page)</option>
                                            <option value="4">Company Does (Home Page)</option>
                                           <!-- <option value="5">Clients Says (Home Page)</option>-->
                                            <option value="6">For School or colleges (Home Page)</option>
                                            <option value="7">For Parents (Home Page)</option>
                                            <option value="8">About Us (Banner)</option>
                                            <option value="9">Our Values (About Us)</option>
                                            <option value="10">Allergens and Dietary Information (Banner)</option>
                                            <option value="11">Allergens and Dietary Information Body (Content)</option>
                                            
                                            
                                         <!--   <option value="12">Wb State Board</option>-->
                                            <option value="13">Food menus (Banner)</option>
                                            <option value="14">Food menus (Content)</option>
                                            <option value="15">Cost Pricing (Banner)</option>
                                            <option value="16">Cost Pricing (Content)</option>
                                            <option value="17">Water supply (Banner)</option>
                                            <option value="18">Water supply (Content)</option>
                                            <option value="19">Cashless System (Banner)</option>
                                            <option value="20">Cashless System (Content)</option>
                                            <option value="21">Changeyour provider (Banner)</option>
                                            <option value="22">Changeyour provider (Content)</option>
                                            <option value="23">School Meals (Banner)</option>
                                            <option value="24">School Meals (Content)</option>
                                            
                                            
                                            
                                        </select>
                                        <i class="form-group__bar"></i>
                                        <span id="section-error"></span>
                                    </div>
                                
                              </div> 
                           
<!--
                           <div class="col-sm-3">
                               <div class="form-group">
                                   <label>Page</label>
                                        <input type="text" class="form-control" placeholder="Name" id="page">
                                        <i class="form-group__bar"></i>
                                        <span id="page-error"></span>
                                    </div>
                              </div> -->  
                           
                           <div class="col-sm-12">
                               <div class="form-group">
                                   <label>Heading  * Required</label>
                                         <input type="text" class="form-control" placeholder="Name" id="header">
                                        <i class="form-group__bar"></i>
                                        <span id="header-error"></span>
                                    </div>
                              </div>  

                           
                           <div class="col-sm-12">
                               <div class="form-group">
                                   <label>Content * Required</label>
                                         <textarea class="form-control ckeditor" rows="5" placeholder="Description" id="content"></textarea>
                                        <i class="form-group__bar"></i>
                                        <span id="content-error"></span>
                                    </div>
                              </div> 
                           
                           
                               <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Extra Content</label>
                                         <textarea class="form-control ckeditor" rows="5" placeholder="Description" id="extra_content"></textarea>
                                        <i class="form-group__bar"></i>
                                         <span id="extra_content-error"></span>
                                    </div>
                                </div> 
 
                           
                               <!-- <div class="col-sm-12">
                                    <div class="form-group">
                                         <label>Product Video youtube Link</label>
                                        <textarea class="form-control" rows="5" placeholder="Video" id="video"></textarea>
                                         <i class="form-group__bar"></i>
                                         <span id="video-error"></span>
                                    </div>
                                </div> --> 
                           
                                 <!--  <div class="col-sm-12">
                                           <h2 style="text-align:center;">Or</h2>                            
                                    </div>-->
                           
                                <div class="col-sm-12">
                                    <div class="form-group">
                                            <div class="dz-default dz-message"><span>(JPG ,JPEG ,PNG)</span>
                                                <input type="file" class="form-control" id="image">
                                            </div>
                                        <span id="image-error"></span>
                                        
                                    </div>
                                </div>
                           
                           
                           <!--<div class="col-sm-12">
                                    <div class="form-group">
                                            <div class="dz-default dz-message"><span>Applicable Only for Academic Calender(PDF ONLY)</span>
                                                <input type="file" class="form-control" id="academicimage">
                                            </div>
                                        <span id="image-error"></span>
                                        
                                    </div>
                                </div>-->
                        </div>
                        
                         <button type="button" class="btn btn-dark" onclick="addcontent()" id="addbutton"> <span><i class="zmdi zmdi-check-circle zmdi-hc-fw"></i>Submit</span></button>
                        <span id="addbuttonmsg"></span>
                        
                     
                     
                       
                        
                    </div>
                </div>
                
                
                
               
                

        