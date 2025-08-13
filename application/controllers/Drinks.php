<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Drinks extends CI_Controller {

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
        //$get_api_food_info = $api_url."General/GetFoodInformation";

       
       $objarray = array("food"=>array("category_id"=>2));
      
       $data['food_list'] = json_decode($this->General_model->general_function($objarray, $get_api_url),true);

      
       $objarray = array("category"=>array());
       $data['category_list'] = json_decode($this->General_model->general_function($objarray,$get_api_url),true);

       $objarray = array("size"=>array());
       $data['size_list'] = json_decode($this->General_model->general_function($objarray,$get_api_url),true);

       $objarray = array("type"=>array());
       $data['type_list'] = json_decode($this->General_model->general_function($objarray,$get_api_url),true);
       
       $objarray = array("sub_category"=>array());
       $response = $this->General_model->general_function($objarray,$get_api_url);
       $data['subCategoryList']=json_decode($response,true);
       
        $this->load->view('Drinks/cssLinks');
        $this->load->view('Template/header',$data);
        $this->load->view('Template/slider');
        $this->load->view('Drinks/MainSection');
        $this->load->view('Template/footer');
        $this->load->view('Drinks/jqueryLinks');
  }
    
    public function add_drinks()
  {

  


        $api_url = $this->config->item('api_url');
        $file_url = $this->config->item('file_url');
        $add_api_url = $api_url."General/Add";
        
        $drink_name = $this->input->post('drink_name');
        $category_id = $this->input->post('category_id');
        $drink_price = $this->input->post('drink_price_add');
        $food_image = $this->input->post('food_image');
        $drink_description = $this->input->post('drink_description');
        $drink_code = $this->input->post('drink_code');
        $sub_category_id = $this->input->post('sub_category_id');
        $size_id = $this->input->post('size_id_add');
        $type_id = $this->input->post('type_id_add');

        $count_of_data = count($size_id);
        // echo $count_of_data;
        // print_r($size_id);
        // print_r($_REQUEST);
        // die();
        
       //print_r($_FILES); 

        if(!empty($_FILES['drink_image']['name'])){
          $extension = pathinfo($_FILES['drink_image']['name'], PATHINFO_EXTENSION);
          $config['upload_path'] = './master_images/FoodImage/';
          $config['allowed_types'] = 'jpg|jpeg|png';
          $config['file_name'] = time().".".$extension;
          //Load upload library and initialize configuration
          $this->load->library('upload',$config);
          $this->upload->initialize($config);

          if($this->upload->do_upload('drink_image')){
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
          // echo $food_picture;
          // die();
        $food_add_objarray = array("food"=>array("food_name"=>$drink_name,"food_description"=>$drink_description,"category_id"=>$category_id,"sub_category_id"=>$sub_category_id,"food_item_code"=>$drink_code,"food_image"=>$food_picture),"check"=>"food_name");
        $food_response = $this->General_model->general_function($food_add_objarray,$add_api_url);
        $food_res = json_decode($food_response,true);
        
        if($food_res['stat'] == 200)
        {
            $food_image_path = array("image"=>$food_picture);
            $response = array_merge($food_res,$food_image_path);


          for($i=0;$i<$count_of_data;$i++){

            $food_price_objarray = array("food_price"=>array("food_id"=>$food_res['insert_id'],"selling_price"=>$drink_price[$i],"size_id"=>$size_id[$i],"type_id"=>$type_id[$i]));
            $food_price_response = $this->General_model->general_function($food_price_objarray,$add_api_url);
            $food_price_res = json_decode($food_price_response,true);
            
          }
          
            
            echo json_encode($response);
            $this->session->set_flashdata('success',"Added Successfully");
            redirect('Drinks');
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
    
    public function get_drink()
  {
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/GetDrinkWithPrice";
        $id=$this->input->post('food_id');
        
        $objarray = array("food_id"=>$id);
//      echo json_encode($objarray);die;
        $response = json_decode($this->General_model->general_function($objarray,$get_api_url),true);
        
       echo json_encode($response);
  }
    
    public function update_drinks()
  {
        //  echo "<pre>";
        //  print_r($_REQUEST); 
         
        //  die();
         $array_valid_type = [];
         $array_valid_size = [];
         $array_valid_price = [];


         
      if($this->input->post('type_id_update_extra_add')){
        $array_valid_type = $this->input->post('type_id_update_extra_add');
      }

      
      if($this->input->post('size_id_update_extra_add')){
        $array_valid_size = $this->input->post('size_id_update_extra_add');
      }
      
      if($this->input->post('drink_price_update_extra_add')){
        $array_valid_price =$this->input->post('drink_price_update_extra_add');
      }


       $array_merge_type = array_merge($array_valid_type , $this->input->post('type_id_update'));
       $array_merge_size = array_merge($array_valid_size , $this->input->post('size_id_update'));
       $array_merge_price = array_merge($array_valid_price , $this->input->post('drink_price_update'));

      //  print_r($array_merge_type); 
      //  print_r($array_merge_size); 
      //  print_r($array_merge_price); 

       $count_of_data = count($array_merge_size);
      // die();

        $api_url = $this->config->item('api_url');
        $update_api_url = $api_url."General/Update";
        $add_api_url = $api_url."General/Add";
        $delete_api_url = $api_url."General/DeleteFoodPrice";

        //$get_api_url = $api_url."General/Get";
        
        $category_id_update = $this->input->post('category_id_update');
        $drinks_name_update = $this->input->post('drinks_name_update');
        $drinks_desription_update = $this->input->post('drinks_desription_update');
        $subcategory_id_update = $this->input->post('subcategory_id_update');
        $drinks_code_update = $this->input->post('drinks_code_update');
        $food_image_edit_check = $this->input->post('food_image_edit_check');
        $food_id = $this->input->post('food_id');
        $glob_image = $this->input->post('previous_image');
        $drinks_code_update = $this->input->post('drinks_code_update');
        
        
            if(!empty($_FILES['drinks_image_update']['name'])){
              $extension = pathinfo($_FILES['drinks_image_update']['name'], PATHINFO_EXTENSION);
              $config['upload_path'] = './master_images/FoodImage/';
              $config['allowed_types'] = 'jpg|jpeg|png';
              $config['file_name'] = time().".".$extension;
              //Load upload library and initialize configuration
              $this->load->library('upload',$config);
              $this->upload->initialize($config);

              if($this->upload->do_upload('drinks_image_update')){
                  $uploadData = $this->upload->data();
                   $edit_food_picture = $uploadData['file_name'];
              }else{
                   $picture = 'upload problem';
                  $edit_food_picture = '';
              }
              }else{
                $edit_food_picture = $glob_image;
            }
        
        
        
        
        $edit_food_arr = array("food"=>array("food_name"=>$drinks_name_update,"food_description"=>$drinks_desription_update,"category_id"=>$category_id_update,"sub_category_id"=>$subcategory_id_update,"food_image"=>$edit_food_picture,"food_item_code"=>$drinks_code_update),"where"=>array("food_id"=>$food_id),"check"=>"food_name");
       // echo json_encode($edit_food_arr); die();
        
        $edit_food_response = $this->General_model->general_function($edit_food_arr,$update_api_url);



        $objarray_delete = array("food_id"=>$food_id);
        
        $response_delete = $this->General_model->general_function($objarray_delete,$delete_api_url);



        for($i=0;$i<$count_of_data;$i++){

          $food_price_objarray = array("food_price"=>array("food_id"=>$food_id,"selling_price"=>$array_merge_price[$i],"size_id"=>$array_merge_size[$i],"type_id"=>$array_merge_type[$i]));
          $food_price_response = $this->General_model->general_function($food_price_objarray,$add_api_url);
          $food_price_res = json_decode($food_price_response,true);
          
        }


        

        $edit_food_res = json_decode($edit_food_response,true);
        

        
        if($edit_food_res['stat'] == 200)
        {
          $this->session->set_flashdata('success',"Updated Successfully");

          redirect('Drinks');
        }
 
         
  }



  public function get_data_size_type(){

    $api_url = $this->config->item('api_url');
    $get_api_url = $api_url."General/Get";

    $objarray = array("size"=>array());
    $data_size = json_decode($this->General_model->general_function($objarray,$get_api_url),true);

    $objarray = array("type"=>array());
    $data_type = json_decode($this->General_model->general_function($objarray,$get_api_url),true);

    $array_data = array("size_info"=>$data_size , "type_info"=>$data_type);

    echo json_encode($array_data);



  }
    
}