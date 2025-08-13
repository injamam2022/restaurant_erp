
            
            <section class="content">
                <header class="content__title">
                    <h1>Menu  Management</h1>
                   
                    <button type="button" class="btn btn-dark" onclick="location.href='<?php echo base_url('MenuManagement/createmenu'); ?>'"> <span><i class="zmdi zmdi-plus zmdi-hc-fw"></i>Add </span></button>

                </header>
                
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"> List</h4>
                     
    <?php if($this->session->flashdata('error')){ ?>

            <div class="alert alert-block alert-danger">
                <i class=" fa fa-danger cool-green "></i>
               <?php echo $this->session->flashdata('error'); ?>
            </div>
   <?php } ?>
       <?php if($this->session->flashdata('success')){ ?>
        <div class="alert alert-block alert-success">
            <i class=" fa fa-danger cool-green "></i>
           <?php echo $this->session->flashdata('success'); ?>
        </div>
     <?php } ?>
                        
                <?php
                    /*echo "<pre>";
                    print_r($menuList);*/
                        
                ?>
                        <div class="table-responsive">
                            <table id="data-table" class="table" >
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Menu Code</th>
                                        <th>Menu Name</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    if($menuList['stat']==200){
                                        for($i=0 ; $i<count($menuList['all_list']); $i++){
                                            
                                    ?>
                                    <tr>
                                        <td><?php echo $menuList['all_list'][$i]['menu_id']?></td>
                                        <td><?php echo $menuList['all_list'][$i]['menu_code']?></td>
                                        <td><?php echo $menuList['all_list'][$i]['menu_name']?></td>
                                        <td>
                                            <div class="btn-group mb-2 dropright">
                                               <button type="button" class="btn btn-light waves-effect waves-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                               <div class="dropdown-menu" x-placement="right-start" style="position: absolute; transform: translate3d(104px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                   
                                                   <a class="dropdown-item" href="<?php echo base_url('MenuManagement/editmenu')."/".$menuList['all_list'][$i]['menu_id']; ?>" onclick="editOccasion(<?php echo $menuList['all_list'][$i]['menu_id'];?>);"><i class="zmdi zmdi-edit zmdi-hc-fw"></i> Edit</a>
                                                   
                                                   <!--<a class="dropdown-item" href="javascript:void(0);" id="rowId_<?php echo $menuList['all_list'][$i]['menu_id'];?>" onclick="deleteOccasion(<?php echo $menuList['all_list'][$i]['menu_id'];?>);"><i class="zmdi zmdi-delete zmdi-hc-fw"></i> Delete</a>-->
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
                
               
        