<aside class="sidebar">
                <div class="scrollbar-inner">

                    <div class="user">
                        <div class="user__info" data-toggle="dropdown">
                            <img class="user__img" src="<?php echo base_url();?>assets/demo/img/profile-pics/8.jpg" alt="">
                            <div>
                                <div class="user__name">Admin</div>
                                <div class="user__email"><?php echo $this->session->userdata("admin_email_id");?></div>
                            </div>
                        </div>

                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="<?php echo base_url();?>Logout">Logout</a>
                        </div>
                    </div>

                    <ul class="navigation">
                        
                     
                   <?php
                   //echo "gdgd";
                    if($this->session->userdata("admin_id")) {  
                        getlistitem();
                    }
                    
                    if($this->session->userdata("school_chef_id"))
                    { 
                   ?>
                <li class="@@indexactive">
                    <a href="<?php echo base_url('SchoolOrders'); ?>">
                    <i class="zmdi zmdi-collection-pdf zmdi-hc-fw"></i>School Orders</a>
                </li>
                
                 <li class="@@indexactive">
                    <a href="<?php echo base_url('ChefPreparationSheet'); ?>">
                    <i class="zmdi zmdi-collection-pdf zmdi-hc-fw"></i> Orders Preparation Sheet</a>
                </li>
                        
                   <?php } ?>
                    </ul>
                </div>
            </aside>

            <div class="themes">
                <div class="scrollbar-inner">
                    <a href="#" class="themes__item" id="thm_1" data-sa-value="1"><img src="<?php echo base_url();?>assets/img/bg/1.jpg" alt=""></a>
                    <a href="#" class="themes__item" id="thm_2" data-sa-value="2"><img src="<?php echo base_url();?>assets/img/bg/2.jpg" alt=""></a>
                    <a href="#" class="themes__item" id="thm_3" data-sa-value="3"><img src="<?php echo base_url();?>assets/img/bg/3.jpg" alt=""></a>
                    <a href="#" class="themes__item" id="thm_4" data-sa-value="4"><img src="<?php echo base_url();?>assets/img/bg/4.jpg" alt=""></a>
                    <a href="#" class="themes__item" id="thm_5" data-sa-value="5"><img src="<?php echo base_url();?>assets/img/bg/5.jpg" alt=""></a>
                    <a href="#" class="themes__item" id="thm_6" data-sa-value="6"><img src="<?php echo base_url();?>assets/img/bg/6.jpg" alt=""></a>
                    <a href="#" class="themes__item" id="thm_7" data-sa-value="7"><img src="<?php echo base_url();?>assets/img/bg/7.jpg" alt=""></a>
                    <a href="#" class="themes__item" id="thm_8" data-sa-value="8"><img src="<?php echo base_url();?>assets/img/bg/8.jpg" alt=""></a>
                    <a href="#" class="themes__item" id="thm_9" data-sa-value="9"><img src="<?php echo base_url();?>assets/img/bg/9.jpg" alt=""></a>
                    <a href="#" class="themes__item" id="thm_10" data-sa-value="10"><img src="<?php echo base_url();?>assets/img/bg/10.jpg" alt=""></a>
                </div>
            </div>
