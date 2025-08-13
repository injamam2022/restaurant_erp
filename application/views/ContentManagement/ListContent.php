
            
            <section class="content">
                <header class="content__title">
                    <h1>Content</h1>
                   
                    <a class="btn btn-dark" href="<?php echo base_url('ContentManagement/AddContent')?>"> <span><i class="zmdi zmdi-plus zmdi-hc-fw"></i>Add </span></a>
                    <br>
                    
                </header>
                
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Content Management List
                        
                           <?PHP
                           //$var =  encode_url("HOW DO I DO");
                      /* echo $var;*/
    
/*                       echo "<pre>";
                       print_r($contentList);*/
                            ?>
                        </h4>
                     
                        <?php 
                         
                        ?>
                        <div class="table-responsive">
                            <table id="data-table" class="table" >
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Section</th>
<!--                                        <th>Page</th>-->
                                      <!--  <th>Header</th>-->
                                    <!--    <th>Video</th>-->
                                        <th>Image</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    if($contentList['stat']==200){
                                        $j =1;
                                        for($i=0 ; $i<count($contentList['all_list']); $i++){
                                            
                                    ?>
                                    <tr>    
                                        
                                        <td><?php echo $i+$j;?></td>
                                        <td><?php 
                                            
                                            if($contentList['all_list'][$i]['section'] == 1)
                                            {
                                               echo "Banner (Home Page)";   
                                            }
                                            else if($contentList['all_list'][$i]['section'] == 2)
                                            {
                                                echo "We provide (Home Page)";
                                            }
                                             else if($contentList['all_list'][$i]['section'] == 3)
                                            {
                                                echo "About us (Home Page)";
                                            }
                                            
                                            
                                             else if($contentList['all_list'][$i]['section'] == 4)
                                            {
                                                echo "Company Does (Home Page)";
                                            }
                                            
                                            
                                            else if($contentList['all_list'][$i]['section'] == 5)
                                            {
                                                echo "Clients Says (Home Page)";
                                            }
                                        else if($contentList['all_list'][$i]['section'] == 6)
                                            {
                                                echo "For School or colleges (Home Page)";
                                            }
                                               else if($contentList['all_list'][$i]['section'] == 7)
                                            {
                                                echo "For Parents (Home Page)";
                                            }
                                            else if($contentList['all_list'][$i]['section'] == 8)
                                            {
                                                echo "About Us (Banner)";
                                            }
                                               else if($contentList['all_list'][$i]['section'] == 9)
                                            {
                                                echo "Our Values (About Us)";
                                            }
                                              else if($contentList['all_list'][$i]['section'] == 10)
                                            {
                                                echo "Allergens and Dietary Information (Banner)";
                                            }
                                            
                                                 else if($contentList['all_list'][$i]['section'] == 11)
                                            {
                                                echo "Allergens and Dietary Information Body (Content)";
                                            }
                                            
                                            
                                         /*   
                                            
                                                   else if($contentList['all_list'][$i]['section'] == 12)
                                            {
                                                echo "Wb State Board";
                                            }*/
                                            
                                            
                                               else if($contentList['all_list'][$i]['section'] == 13)
                                            {
                                                echo "Food menus (Banner)";
                                            }
                                               else if($contentList['all_list'][$i]['section'] == 14)
                                            {
                                                echo "Food menus (Content)";
                                            }
                                               else if($contentList['all_list'][$i]['section'] == 15)
                                            {
                                                echo "Cost Pricing (Banner)";
                                            }
                                            
                                            
                                            else if($contentList['all_list'][$i]['section'] == 16)
                                            {
                                                echo "Cost Pricing (Content)";
                                            }
                                            else if($contentList['all_list'][$i]['section'] == 17)
                                            {
                                                echo "Water supply (Banner)";
                                            }
                                           else if($contentList['all_list'][$i]['section'] == 18)
                                            {
                                                echo "Water supply (Content)";
                                            }
                                            else if($contentList['all_list'][$i]['section'] == 19)
                                            {
                                                echo "Cashless System (Banner)";
                                            }
                                            else if($contentList['all_list'][$i]['section'] == 20)
                                            {
                                                echo "Cashless System (Content)";
                                            }
                                             else if($contentList['all_list'][$i]['section'] == 21)
                                            {
                                                echo "Changeyour provider (Banner)";
                                            }
                                            else if($contentList['all_list'][$i]['section'] == 22)
                                            {
                                                echo "Changeyour provider (Content)";
                                            }
                                             else if($contentList['all_list'][$i]['section'] == 23)
                                            {
                                                echo "School Meals (Banner)";
                                            }
                                            else if($contentList['all_list'][$i]['section'] == 24)
                                            {
                                                echo "School Meals (Content)";
                                            }
                                         
                                            
                                            
                                            ?></td>
<!--                                        <td><?php echo $contentList['all_list'][$i]['page'];?></td>-->
                                      <!--  <td><?php echo $contentList['all_list'][$i]['header'];?></td>-->
                                    <!--    <td><?php ?></td>-->
                                        
                                        
                                        <td>
                                            <?php 
                                            
                                           //  echo $contentList['all_list'][$i]['video'];
                                            $image=$contentList['all_list'][$i]['image'];
                                            
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
                                            
                                             echo "No Image Added";
                                          
                                            }
                                            ?>
                                           
                                           
                                        
                                        </td>
                                        <td>
                                            <div class="btn-group mb-2 dropright">
                                               <button type="button" class="btn btn-light waves-effect waves-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                               <div class="dropdown-menu" x-placement="right-start" style="position: absolute; transform: translate3d(104px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                   
                                                   <?php //echo $this->encryption->encode(12);
                                                 $encode_pid = $contentList['all_list'][$i]['content_id'];
                                                   ?>
                                                   <a class="dropdown-item" href="<?php echo base_url('ContentManagement/EditContent/').$encode_pid;?>"><i class="zmdi zmdi-edit zmdi-hc-fw"></i> Edit</a>
                                                   
                                                   <a class="dropdown-item" href="javascript:void(0);" id="rowId_<?php echo $contentList['all_list'][$i]['content_id'];?>" onclick="deleteContent(<?php echo $contentList['all_list'][$i]['content_id'];?>);"><i class="zmdi zmdi-delete zmdi-hc-fw"></i> Delete</a>
                                               </div>
                                           </div>
                                          

                                        </td>
                                        
                                    </tr>
                                    <?php }}?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
                
                
               
                

        