
            
            <section class="content">
                <header class="content__title">
                    <h1>Edit Content</h1>
                   
                   

                </header>
                
                <div class="card">
                    <div class="card-body">
                       <div class="row">
                           
                           <div class="col-sm-12">
                               <div class="form-group">
                                   <label>Section</label>
                                    <select class="form-control" id="section">
                                        <option>--select--</option>
                                        <option value="1" <?php if($contentList['all_list'][0]['section'] == 1) { echo "selected"; } ?>
                                                >Banner (Home Page)</option>
                                       <!-- <option value="2" <?php if($contentList['all_list'][0]['section'] == 2) { echo "selected"; } ?>
                                                >We provide (Home Page)</option>-->
                                        <option value="3" <?php if($contentList['all_list'][0]['section'] == 3) { echo "selected"; } ?>
                                                >About us (Home Page)</option>
                                        <option value="4" <?php if($contentList['all_list'][0]['section'] == 4) { echo "selected"; } ?>
                                                >Company Does (Home Page)</option>
                                        <!--<option value="5" <?php if($contentList['all_list'][0]['section'] == 5) { echo "selected"; } ?>
                                                >Clients Says (Home Page) </option>-->
                                        <option value="6" <?php if($contentList['all_list'][0]['section'] == 6) { echo "selected"; } ?>
                                                >For School or colleges (Home Page)</option>
                                        <option value="7" <?php if($contentList['all_list'][0]['section'] == 7) { echo "selected"; } ?>
                                                >For Parents (Home Page)</option>
                                       <option value="8" <?php if($contentList['all_list'][0]['section'] == 8) { echo "selected"; } ?>
                                                >About Us (Banner)</option>
                                        <option value="9" <?php if($contentList['all_list'][0]['section'] == 9) { echo "selected"; } ?>
                                                >Our Values (About Us)</option>
                                        
                                  <option value="10" <?php if($contentList['all_list'][0]['section'] == 10) { echo "selected"; } ?>
                                                >Allergens and Dietary Information (Banner)</option>
                                        <option value="11" <?php if($contentList['all_list'][0]['section'] == 11) { echo "selected"; } ?>
                                                >Allergens and Dietary Information Body (Content)</option>
                                        
                            <!--       <option value="12" <?php if($contentList['all_list'][0]['section'] == 12) { echo "selected"; } ?> 
                                    >Wb State Board</option>-->
                                        
                                        
                            <option value="13" <?php if($contentList['all_list'][0]['section'] == 13) { echo "selected"; } ?>
                                    >Food menus (Banner)</option>
                            <option value="14" <?php if($contentList['all_list'][0]['section'] == 14) { echo "selected"; } ?>
                                    >Food menus (Content)</option>
                            <option value="15" <?php if($contentList['all_list'][0]['section'] == 15) { echo "selected"; } ?>
                                    >Cost Pricing (Banner)</option>
                                                
                                                
                            <option value="16" <?php if($contentList['all_list'][0]['section'] == 16) { echo "selected"; } ?>
                            >Cost Pricing (Content)</option>

                            <option value="17" <?php if($contentList['all_list'][0]['section'] == 17) { echo "selected"; } ?>
                            >Water supply (Banner)</option>


                            <option value="18" <?php if($contentList['all_list'][0]['section'] == 18) { echo "selected"; } ?>
                            >Water supply (Content)</option>

                            <option value="19" <?php if($contentList['all_list'][0]['section'] == 19) { echo "selected"; } ?>
                            >Cashless System (Banner)</option>
                            <option value="20" <?php if($contentList['all_list'][0]['section'] == 20) { echo "selected"; } ?>
                                    >Cashless System (Content)</option>
                                        
                            <option value="21" <?php if($contentList['all_list'][0]['section'] == 21) { echo "selected"; } ?>
                            >Changeyour provider (Banner)</option>
                            <option value="22" <?php if($contentList['all_list'][0]['section'] == 22) { echo "selected"; } ?>
                            >Changeyour provider (Content)</option>
                                        
                            <option value="23" <?php if($contentList['all_list'][0]['section'] == 23) { echo "selected"; } ?>
                            >School Meals (Banner)</option>
                            <option value="24" <?php if($contentList['all_list'][0]['section'] == 24) { echo "selected"; } ?>
                            >School Meals (Content)</option>
                                        
                                                
                                        
                                        
                                   </select>
                                   
                                   
                                  
                                   
<!--                                        <input type="text" class="form-control" placeholder="Name" id="section" value="<?php echo $contentList['all_list'][0]['section'];?>">-->
                                        <i class="form-group__bar"></i>
                                        <span id="section-error"></span>
                                   
                                   
                                   
                                   
                                    </div>
                                
                              </div> 
<!--
                            <div class="col-sm-12">
                               <div class="form-group">
                                   <label>Page</label>
                                        <input type="text" class="form-control" placeholder="Name" id="page" value="<?php echo $contentList['all_list'][0]['page'];?>">
                                        <i class="form-group__bar"></i>
                                        <span id="page-error"></span>
                                    </div>
                              </div>   
-->
                           
                           <div class="col-sm-12">
                               <div class="form-group">
                                   <label>Header</label>
                                         <input type="text" class="form-control" placeholder="Name" id="header" value="<?php echo $contentList['all_list'][0]['header'];?>">
                                        <i class="form-group__bar"></i>
                                        <span id="header-error"></span>
                                    </div>
                              </div>  
                           
                           <div class="col-sm-12">
                               <div class="form-group">
                                   <label>Content</label>
                                         <textarea class="form-control ckeditor" rows="10" placeholder="Description" id="content"><?php echo $contentList['all_list'][0]['content'];?></textarea>
                                        <i class="form-group__bar"></i>
                                        <span id="content-error"></span>
                                    </div>
                              </div> 
                           
                           
                               <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Extra Content</label>
                                         <textarea class="form-control ckeditor" rows="10" placeholder="Description" id="extra_content"><?php echo $contentList['all_list'][0]['extra_content'];?></textarea>
                                        <i class="form-group__bar"></i>
                                         <span id="extra_content-error"></span>
                                    </div>
                                </div> 
                                    
                           
                              <!--  <div class="col-sm-12">
                                    <div class="form-group">
                                         <label>Product Video Link</label>
                                        <textarea class="form-control" rows="5" placeholder="Video" id="video"><?php echo $contentList['all_list'][0]['video'];?></textarea>
                                         <i class="form-group__bar"></i>
                                         <span id="video-error"></span>
                                       
                                        <?php
                                       
                                        $video=$contentList['all_list'][0]['video'];
                                        if($video)
                                        {
                                           
                                            echo $contentList['all_list'][0]['video'];
                                          
                                        }
                                       
                                        ?>
                                                
                                    </div>
                                </div>  -->
                           
                           
                           
                         <!--  <label>OR</label>-->
                           
                                <div class="col-sm-12">
                                    <div class="form-group">
                                            <div class="dz-default dz-message"><span>Image (JPG ,JPEG ,PNG)</span>
                                                <input type="file" class="form-control" id="image">
                                            </div>
                                        <span id="image-error"></span>
                                        
                                         
                                        
                                        
                                        
                                    </div>
                                </div>
                        </div>
                        
                        <div class="row">
                            
                            <div class="form-group" id="previousimagediv">
                                
                                <?php 
                               //  echo $contentList['all_list'][$i]['video'];
                                            $image=$contentList['all_list'][0]['image'];
                                            
                                            //echo $image;
                                            
                                            
                                            $exp = explode(".",$image);
                                            
                                           // echo $exp[1];
                                            
                                            $file = $exp[1];
                                            
                                            if($file  == "pdf")
                                           
                                            {
                                           ?>
                                            <a target="_blank" href="<?php echo $this->config->item('file_url').$image;?>">PDF VIEW</a>
                                            <?php
                                            }
                                            else  if($file  == "jpg" || $file  == "png" || $file  == "jpeg")
                                            {
                                           
                                            ?>
                                             <img src="<?php echo $this->config->item('file_url')."/Content/".$image;?>" style="width:100px; height:100px;"> 
                                            <?php
                                                
                                            }
                                            else 
                                            {
                                            
                                             echo $contentList['all_list'][$i]['video'];
                                          
                                            }
                                ?>
                                
                                
                               <br>
                              
                               
                                <label>Previous Images</label>
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
                        
                          <div class="row">
                            
                           <!-- <div class="form-group" id="previousimagediv">
                                
                                <?php 
                             
                                            $image1=$contentList['all_list'][0]['academicimage'];
                                            
                                            //echo $image;
                                            
                                            
                                            $exp1 = explode(".",$image1);
                                            
                                           // echo $exp[1];
                                            
                                            $file1 = $exp1[1];
                                            
                                            if($file1  == "pdf")
                                           
                                            {
                                           ?>
                                            <a target="_blank" href="<?php echo $this->config->item('file_url').$image1;?>">PDF VIEW</a>
                                            <?php
                                            }
                                            else  if($file1  == "jpg" || $file1  == "png" || $file1  == "jpeg")
                                            {
                                           
                                            ?>
                                             <img src="<?php echo $this->config->item('file_url').'/Content/'.$image1;?>" style="width:100px; height:100px;"> 
                                            <?php
                                                
                                            }
                                            else 
                                            {
                                            
                                             echo $contentList['all_list'][$i]['video'];
                                          
                                            }
                                ?>
                                
                                
                               <br>
                              
                               
                                <label>Previous Images</label>
                            </div>-->
                            
                           
                        </div>
                        
                        
                         <button type="button" class="btn btn-dark" onclick="editcontent()" id="editbutton"> <span><i class="zmdi zmdi-check-circle zmdi-hc-fw"></i>Submit</span></button>
                         <span id="addmsg"></span>
                         <span id="editbuttonmsg"></span>
                        
                     
                     
                       
                        
                    </div>
                </div>
                 <input type="hidden" id="previousimage" value="<?php echo $contentList['all_list'][0]['image'];?>">
                 <input type="hidden" id="previousimageacademicimage" value="<?php echo $contentList['all_list'][0]['academicimage'];?>">
                 <input type="hidden" id="content_id" value="<?php echo $contentList['all_list'][0]['content_id'];?>">
                
                
                
               
                

        