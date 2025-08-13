<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Food extends CI_Controller {

  /**
   * Index Page for this controller.
   *
   * Maps to the following URL
   *    http://example.com/index.php/welcome
   *  - or -
   *    http://example.com/index.php/welcome/index
   *  - or -
   * Since this controller is set as the default controller in
   * config/routes.php, it's displayed at http://example.com/
   *
   * So any other public methods not prefixed with an underscore will
   * map to /index.php/welcome/<method_name>
   * @see https://codeigniter.com/user_guide/general/urls.html
   */
  public function index()
  {
        if($this->session->userdata("admin_email_id") == "")
        {
            header('Location: '.base_url()."Login");
        }
        
        //echo "hello"; die();
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Get";
        $get_api_food_info = $api_url."General/GetFoodInformation";

       
       $objarray = array();
      
       $data['food_list'] = json_decode($this->General_model->general_function($objarray,$get_api_food_info),true);

      
       $objarray = array("category"=>array());
       $data['category_list'] = json_decode($this->General_model->general_function($objarray,$get_api_url),true);

       $objarray = array("size"=>array());
       $data['size_list'] = json_decode($this->General_model->general_function($objarray,$get_api_url),true);

       $objarray = array("type"=>array());
       $data['type_list'] = json_decode($this->General_model->general_function($objarray,$get_api_url),true);
       
       $objarray = array("sub_category"=>array());
       $response = $this->General_model->general_function($objarray,$get_api_url);
       $data['subCategoryList']=json_decode($response,true);
       
        $this->load->view('Food/cssLinks');
        $this->load->view('Template/header',$data);
        $this->load->view('Template/slider');
        $this->load->view('Food/MainSection');
        $this->load->view('Food/jqueryLinks');
        $this->load->view('Template/footer');
       
  }
    
    public function add_food()
  {
        $api_url = $this->config->item('api_url');
        $file_url = $this->config->item('file_url');
        $add_api_url = $api_url."General/Add";
        
        $food_name = $this->input->post('food_name');
        $category_id = $this->input->post('food_category');
        $food_price = $this->input->post('food_price');
        $food_image = $this->input->post('food_image');
        $food_description = $this->input->post('food_description');
        $food_item_code = $this->input->post('food_item_code');
        $foodSubCategory = $this->input->post('foodSubCategory');
        $size_id = $this->input->post('size_id');
        $type_id = $this->input->post('type_id');
        
       

        if(!empty($_FILES['food_image']['name'])){
          $extension = pathinfo($_FILES['food_image']['name'], PATHINFO_EXTENSION);
          $config['upload_path'] = './master_images/FoodImage/';
          $config['allowed_types'] = 'jpg|jpeg|png';
          $config['file_name'] = time().".".$extension;
          //Load upload library and initialize configuration
          $this->load->library('upload',$config);
          $this->upload->initialize($config);

          if($this->upload->do_upload('food_image')){
              $uploadData = $this->upload->data();
               $food_picture = $uploadData['file_name'];
          }else{
               $picture = 'upload problem';
              $food_picture = '';
          }
          }else{
               $picture = 'Field blank';
              $food_picture = '';
          }
        
        $food_add_objarray = array("food"=>array("food_name"=>$food_name,"food_description"=>$food_description,"category_id"=>$category_id,"sub_category_id"=>$foodSubCategory,"food_item_code"=>$food_item_code,"food_image"=>$food_picture),"check"=>"food_name");
        $food_response = $this->General_model->general_function($food_add_objarray,$add_api_url);
        $food_res = json_decode($food_response,true);
        
        if($food_res['stat'] == 200)
        {
            $food_image_path = array("image"=>$food_picture);
            $response = array_merge($food_res,$food_image_path);

           $food_price_objarray = array("food_price"=>array("food_id"=>$food_res['insert_id'],"selling_price"=>$food_price,"size_id"=>$size_id,"type_id"=>$type_id));
           $food_price_response = $this->General_model->general_function($food_price_objarray,$add_api_url);
           $food_price_res = json_decode($food_price_response,true);
            
            echo json_encode($response);
        }
        else
        {
            echo $food_response;
        }
        
  }
    
    public function delete_food()
  {
        $api_url = $this->config->item('api_url');
        $delete_api_url = $api_url."General/DeleteFood";
        $get_api_url = $api_url."General/Get";
        
        $food_id = $this->input->post('food_id');
        $food_image = $this->input->post('food_image');
        
        $food_delete_objarray = array("food_id"=>$food_id);


        $response = json_decode($this->General_model->general_function($food_delete_objarray,$delete_api_url),true);
        
        if($response['stat'] == 200)
        {
            $Path = './master_images/FoodImage/'.$food_image.'';
            unlink($Path);
        }
        echo json_encode($response);
  }
    
    public function get_food()
  {
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/GetFoodWithPrice";
        $id=$this->input->post('food_id');
        
        $objarray = array("food_id"=>$id);
//      echo json_encode($objarray);die;
        $response = json_decode($this->General_model->general_function($objarray,$get_api_url),true);
        
       echo json_encode($response);
  }
    
    public function update_food()
  {
        $api_url = $this->config->item('api_url');
        $update_api_url = $api_url."General/Update";
        //$get_api_url = $api_url."General/Get";
        
        $food_category = $this->input->post('edit_food_category');
        $food_name = $this->input->post('food_name_edit');
        $food_price = $this->input->post('food_price_edit');
        $food_description = $this->input->post('food_description_edit');
        $editfoodSubCategory = $this->input->post('editfoodSubCategory');
        $size_id = $this->input->post('edit_size_id');
        $type_id = $this->input->post('edit_type_id');
        $food_item_code = $this->input->post('food_item_code');
        $food_image_edit_check = $this->input->post('food_image_edit_check');
        $food_id = $this->input->post('glob_id');
        $glob_image = $this->input->post('glob_image');
        
        if($food_image_edit_check != ''){
        
            if(!empty($_FILES['final_food_image']['name'])){
              $extension = pathinfo($_FILES['final_food_image']['name'], PATHINFO_EXTENSION);
              $config['upload_path'] = './master_images/FoodImage/';
              $config['allowed_types'] = 'jpg|jpeg|png';
              $config['file_name'] = time().".".$extension;
              //Load upload library and initialize configuration
              $this->load->library('upload',$config);
              $this->upload->initialize($config);

              if($this->upload->do_upload('final_food_image')){
                  $uploadData = $this->upload->data();
                   $edit_food_picture = $uploadData['file_name'];
              }else{
                   $picture = 'upload problem';
                  $edit_food_picture = '';
              }
              }else{
                   $picture = 'Field blank';
                  $edit_food_picture = '';
            }
        }
        else{
            $edit_food_picture = $glob_image;
        }
        
        $edit_food_arr = array("food"=>array("food_name"=>$food_name,"food_description"=>$food_description,"category_id"=>$food_category,"sub_category_id"=>$editfoodSubCategory,"food_price"=>$food_price,"food_image"=>$edit_food_picture,"food_item_code"=>$food_item_code),"where"=>array("food_id"=>$food_id),"check"=>"food_name");
        //echo json_encode($edit_food_arr); die();
        
        $edit_food_response = $this->General_model->general_function($edit_food_arr,$update_api_url);


        $edit_food_deatils = array("food_price"=>array("selling_price"=>$food_price,"size_id"=>$size_id,"type_id"=>$type_id),"where"=>array("food_id"=>$food_id));

       // echo json_encode($edit_food_deatils); die();
        
        $edit_food_response = $this->General_model->general_function($edit_food_deatils,$update_api_url);

        $edit_food_res = json_decode($edit_food_response,true);
        

        
        if(isset($edit_food_res['stat']) && $edit_food_res['stat'] == 200)
        {
            $edit_food_image_path = array("edit_image"=>$edit_food_picture);
            $response = array_merge($edit_food_res,$edit_food_image_path);
            echo json_encode($response);
        }
        else 
        {
            echo $edit_food_response;
        }
  }


  public function update_food_status(){

    $api_url = $this->config->item('api_url');
    $update_api_url = $api_url."General/Update";
    $get_api_url = $api_url."General/Get";

    $objarray = array("food"=>array("food_id"=>$this->input->post('food_id')));
    $data['current_status'] = json_decode($this->General_model->general_function($objarray,$get_api_url),true);

    

    $current_status = $data['current_status']['all_list'][0]['food_status'];

    if($current_status == 0){
      $update_status = 1;
    }
    else{
      $update_status = 0;
    }

    $edit_food_deatils = array("food"=>array("food_status"=>$update_status),"where"=>array("food_id"=>$this->input->post('food_id')));
    
     
     $edit_food_response = $this->General_model->general_function($edit_food_deatils,$update_api_url);

     echo json_encode($edit_food_response);
  }
    
}