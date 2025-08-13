<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
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
        
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Get";
        
       
        
        $objarray = array("category"=>array("del_status"=>0));
        
        $response = $this->General_model->general_function($objarray,$get_api_url);
        $data['categoryList']=json_decode($response,true);
        
//        echo json_encode($data['roleList']);die;
        
		$this->load->view('Category/cssLinks');
		$this->load->view('Template/header');
		$this->load->view('Template/slider');
		$this->load->view('Category/mainSection',$data);
		$this->load->view('Template/footer');
		$this->load->view('Category/jqueryLinks');
	}
    
    public function addCategory()
    {
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Add";
        
        $cat_name = $this->input->post('cat_name');
        $cat_desc = $this->input->post('cat_desc');
        
        
        
        
        $picture_name_1="";
        $picture1="";    
        if(!empty($_FILES['cat_img']['name'])){
            $config['upload_path'] = './master_images/category';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
             $config['max_size']    = '15000000';
            $config['file_name'] = time().$_FILES['cat_img']['name'];
            //Load upload library and initialize configuration
            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            
            if($this->upload->do_upload('cat_img')){
                $uploadData = $this->upload->data();
                 $picture_name_1 = $uploadData['file_name'];
            }else{
                 $picture_name_1 = 'upload problem';
            }
        }else{
             $picture_name_1 = 'Blank';
        }
        
        
        $objarray = array("category"=>array("cat_name"=>$cat_name,"cat_desc"=>$cat_desc,"cat_img"=>$picture_name_1,),"check"=>"cat_name");
        
//        echo json_encode($objarray); die;
        
        $response = $this->General_model->general_function($objarray,$get_api_url);
        
        
        
        $response=json_decode($response,true);
        
        $img_arr=array("img"=>$picture_name_1);
        
        $response=array_merge($response,$img_arr);
        
        echo json_encode($response);
       
       
    }  
    
    public function editCategory()
    {
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Update";
        
        $cat_name = $this->input->post('cat_name');
        $previousimage = $this->input->post('previousimage');
        $cat_desc = $this->input->post('cat_desc');
        $GlobId = $this->input->post('GlobId');
        
        
//        print_r($_FILES);die;
        $picture_name_1="";
        $picture1="";    
        if(!empty($_FILES['cat_img']['name'])){
            $config['upload_path'] = './master_images/category';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size']    = '15000000';
            $config['file_name'] = time().$_FILES['cat_img']['name'];
            //Load upload library and initialize configuration
            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            
            if($this->upload->do_upload('cat_img')){
                $uploadData = $this->upload->data();
                 $picture_name_1 = $uploadData['file_name'];
            }else{
                 $picture_name_1 = $previousimage;
            }
        }else{
             $picture_name_1 = $previousimage;
        }
        
        
        $objarray = array("category"=>array("cat_name"=>$cat_name,"cat_desc"=>$cat_desc,"cat_img"=>$picture_name_1),"check"=>"cat_name","where"=>array("category_id"=>$GlobId));
        
//        echo json_encode($objarray); die;
        
        $response = $this->General_model->general_function($objarray,$get_api_url);
        
        $response=json_decode($response,true);
        
        $image_arr=array("img"=>$picture_name_1);
        
        $response=array_merge($response,$image_arr);
        
        echo json_encode($response);
    } 
    
    public function deletecategory()
    {
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Delete";
        
        
        $category_id = $this->input->post('category_id');
        
        $objarray = array("category"=>array("category_id"=>$category_id));
        
//        echo json_encode($objarray); die;
        
        $response = $this->General_model->general_function($objarray,$get_api_url);
        echo $response;
    } 
    
    public function SingleCategory()
    {
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Get";
        
        $category_id = $this->input->post('category_id');
      
        
        $objarray = array("category"=>array("category_id"=>$category_id));
        
//        echo json_encode($objarray); die;
        
        $response = $this->General_model->general_function($objarray,$get_api_url);
        
       
        
        echo $response;
    }


    public function getAllSubCategoryResCategory(){

        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Get";
        
        $categoryId = $this->input->post('categoryId');
      
        
        $objarray = array("sub_category"=>array("category_id"=>$categoryId));
        
//        echo json_encode($objarray); die;
        
        $response = $this->General_model->general_function($objarray,$get_api_url);
        
       
        
        echo $response;
    }
    
    
}
