
            
            <section class="content">
                <header class="content__title">
                    <h1>Add Website Data</h1>
                   <?php
                    echo "<pre>";
                    print_r($WebsiteDataList);
                    $value = $WebsiteDataList['all_list'][0];
                    ?>
                 

                </header>
                
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="<?php echo base_url('WebsiteSetting/updatewebsitedata'); ?>" enctype="multipart/form-data">
                           
                       <div class="row">
                           
                           <div class="col-md-12">
                             <h2>Basic Information</h2>
                           </div>
                            
                               <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Website Name</label>
                                        <input type="text" class="form-control" placeholder="Name" name="company_name" value="<?php echo  $value['company_name']; ?>">
                                        <i class="form-group__bar"></i>
                                         <span id="Website_name-error"></span>
                                    </div>
                                </div> 

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Website Url</label>
                                        <input type="text" class="form-control" placeholder="Website Url" name="site_url" value="<?php echo  $value['site_url']; ?>">
                                        <i class="form-group__bar"></i>
                                         <span id="Website_code-error"></span>
                                    </div>
                                </div>
                            
                              <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Support Contact</label>
                                        <input type="text" class="form-control" placeholder="Support Contact" name="support_contact" value="<?php echo  $value['support_contact']; ?>">
                                        <i class="form-group__bar"></i>
                                         <span id="Website_price-error"></span>
                                        
                                    </div>
                                </div> 
                           
                           
                            <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <input type="text" class="form-control" placeholder="Support Contact" name="phone_number" value="<?php echo  $value['phone_number']; ?>">
                                        <i class="form-group__bar"></i>
                                         <span id="Website_price-error"></span>
                                        
                                    </div>
                                </div> 
                           
                            <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Support Email</label>
                                        <input type="text" class="form-control" placeholder="Support Email" name="support_email" value="<?php echo  $value['support_email']; ?>">
                                        <i class="form-group__bar"></i>
                                         <span id="Website_price-error"></span>
                                        
                                    </div>
                                </div> 
                           
                           
                            <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Alternative Email</label>
                                        <input type="text" class="form-control" placeholder="Alternative Email" name="alternative_email" value="<?php echo  $value['alternative_email']; ?>">
                                        <i class="form-group__bar"></i>
                                         <span id="Website_price-error"></span>
                                        
                                    </div>
                                </div>
                           
                                <div class="col-sm-12">
                                    <div class="form-group">
                                            <label>Footer Description</label>
                                        <input type="text" class="form-control" placeholder="footer description" name="footer_description" value="<?php echo  $value['footer_description']; ?>">
                                         <i class="form-group__bar"></i>
                                         <span id="Website_video-error"></span>
                                        
                                    </div>
                                </div>
                           
                                 <div class="col-sm-12">
                                    <div class="form-group">
                                         <label>Google Address Map</label>
                                        <textarea class="form-control" rows="5" placeholder="Address Map" name="address_map"><?php echo  $value['address_map']; ?></textarea>
                                        <i class="form-group__bar"></i>
                                          <span id="Website_desc-error"></span>
                                    </div>
                                </div> 
                            
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                         <label>Address</label>
                                        <textarea class="form-control" rows="5" placeholder="Description" name="address"><?php echo  $value['address']; ?></textarea>
                                        <i class="form-group__bar"></i>
                                          <span id="Website_desc-error"></span>
                                    </div>
                                </div> 
                           
                             <div class="col-sm-6">
                                    <div class="form-group">
                                         <label>IMPORTANT NOTICE</label>
                                        <textarea class="form-control" rows="5" placeholder="IMPORTANT NOTICE" name="working_hours"><?php echo  $value['working_hours']; ?></textarea>
                                        <i class="form-group__bar"></i>
                                          <span id="Website_desc-error"></span>
                                    </div>
                                </div> 
                         
                           
                           <div class="col-md-12">
                           <h2>SEO Information</h2>
                           </div>
                           
                           <div class="col-sm-4">
                                    <div class="form-group">
                                         <label>Meta Title</label>
                                        <textarea class="form-control" rows="5" placeholder="Description" name="meta_title"><?php echo  $value['meta_title']; ?></textarea>
                                        <i class="form-group__bar"></i>
                                          <span id="Website_desc-error"></span>
                                    </div>
                                </div> 
                           
                           <div class="col-sm-4">
                                    <div class="form-group">
                                         <label>Meta Keyword</label>
                                        <textarea class="form-control" rows="5" placeholder="Description" name="meta_keyword">
                                        <?php echo  $value['meta_keyword']; ?></textarea>
                                        <i class="form-group__bar"></i>
                                          <span id="Website_desc-error"></span>
                                    </div>
                                </div> 
                           
                           <div class="col-sm-4">
                                    <div class="form-group">
                                         <label>Meta Description</label>
                                        <textarea class="form-control" rows="5" placeholder="Description" name="meta_description">
                                        <?php echo  $value['meta_description']; ?></textarea>
                                        <i class="form-group__bar"></i>
                                          <span id="Website_desc-error"></span>
                                    </div>
                                </div> 
                           



                                    <div class="col-md-12">
                                        <h2>Social Links</h2>
                                    </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                         <label>Website Facebook Link</label>
                                        <input type="text" class="form-control" placeholder="Facebook link" name="facebook_link" value="<?php echo  $value['facebook_link']; ?>">
                                         <i class="form-group__bar"></i>
                                         <span id="Website_video-error"></span>
                                    </div>
                                </div>   <div class="col-sm-4">
                                    <div class="form-group">
                                         <label>Website linkedin_link</label>
                                        <input type="text" class="form-control" placeholder="linkedin_link" name="linkedin_link" value="<?php echo  $value['linkedin_link']; ?>">
                                         <i class="form-group__bar"></i>
                                         <span id="Website_video-error"></span>
                                    </div>
                                </div>   <div class="col-sm-4">
                                    <div class="form-group">
                                         <label>Website instagram_link</label>
                                        <input type="text" class="form-control" placeholder="instagram_link" name="instagram_link" value="<?php echo  $value['instagram_link']; ?>">
                                         <i class="form-group__bar"></i>
                                         <span id="Website_video-error"></span>
                                    </div>
                                </div>   <div class="col-sm-4">
                                    <div class="form-group">
                                         <label>Website twitter_link</label>
                                        <input type="text" class="form-control" placeholder="twitter_link" name="twitter_link" value="<?php echo  $value['twitter_link']; ?>">
                                         <i class="form-group__bar"></i>
                                         <span id="Website_video-error"></span>
                                    </div>
                                </div>   <div class="col-sm-4">
                                    <div class="form-group">
                                         <label>Website google_plus_link</label>
                                        <input type="text" class="form-control" placeholder="google_plus_link" name="google_plus_link" value="<?php echo  $value['google_plus_link']; ?>">
                                         <i class="form-group__bar"></i>
                                         <span id="Website_video-error"></span>
                                    </div>
                                </div>   <div class="col-sm-4">
                                    <div class="form-group">
                                         <label>Website youtube_link</label>
                                        <input type="text" class="form-control" placeholder="youtube_link" name="youtube_link" value="<?php echo  $value['youtube_link']; ?>">
                                         <i class="form-group__bar"></i>
                                         <span id="Website_video-error"></span>
                                    </div>
                                </div>   
                           <div class="col-sm-12">
                                    <div class="form-group">
                                         <label>Website pinterest_link</label>
                                        <input type="text" class="form-control" placeholder="pinterest_link" name="pinterest_link" value="<?php echo  $value['pinterest_link']; ?>">
                                         <i class="form-group__bar"></i>
                                         <span id="Website_video-error"></span>
                                    </div>
                                </div>  
                           
                           <div class="col-md-12">
                                <h2>Website Icon</h2>
                           </div>
                           
                                <div class="col-sm-6">
                                    <div class="form-group">
                                            <div class="dz-default dz-message"><span>Website Logo</span>
                                                <input type="file" class="form-control" name="company_logo" >
                                            </div>
                                        <span id="galleryImg-error"></span>
                                        <img src="<?php echo $this->config->item('file_url').'/Website/'.$value['company_logo']; ?>">
                                        <input type="hidden" name="earlier_logo_img" value="<?php echo $value['company_logo'];?>">
                                    </div>
                                </div>
                            
                             <div class="col-sm-6">
                                    <div class="form-group">
                                           <label>Copy Right</label>
                                        <input type="text" class="form-control" placeholder="copy right" name="copy_right" value="<?php echo  $value['copy_right']; ?>">
                                         <i class="form-group__bar"></i>
                                         <span id="Website_video-error"></span>
                                        
                                    </div>
                                </div>
                           
                              <div class="col-sm-6">
                                    <div class="form-group">
                                            <div class="dz-default dz-message"><span>Website Favicon</span>
                                                <input type="file" class="form-control" name="company_favicon" >
                                            </div>
                                        <span id="galleryImg-error"></span>
                                        <img src="<?php echo $this->config->item('file_url').'/Website/'.$value['company_favicon']?>">
                                        <input type="hidden" name="earlier_favicon_img" value="<?php echo $value['company_favicon'];?>">
                                    </div>
                                </div>
                           
                           
                           
                           <div class="col-sm-6">
                                    <div class="form-group">
                                            <div class="dz-default dz-message"><span>Website Brochure</span>
                                                <input type="file" class="form-control" name="website_brochure" >
                                            </div>
                                        <span id="galleryImg-error"></span>
                                        <a target="_blank" href="<?php echo $this->config->item('file_url').'/Website/'.$value['website_brochure']?>">
                                            DOWNLOAD PDF BROCHURE
                                        </a>
                                        <input type="hidden" name="website_brochure" value="<?php echo $value['website_brochure'];?>">
                                    </div>
                                </div>
                           
                           
                           
                        </div>
                       
                         <button type="submit" class="btn btn-dark" > <span><i class="zmdi zmdi-check-circle zmdi-hc-fw"></i>Submit</span></button>
                        
                     
                     
                        </form>
                        
                    </div>
                </div>
                
                
                
               
                

        