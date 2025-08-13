<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SubCategory extends CI_Controller {

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
        
       
        
        $objarray = array("sub_category"=>array());
        
        $response = $this->General_model->general_function($objarray,$get_api_url);
        $data['subCategoryList']=json_decode($response,true);

        $objarray = array("category"=>array());
        $data['category_list'] = json_decode($this->General_model->general_function($objarray,$get_api_url),true);

       
 
        
//        echo json_encode($data['roleList']);die;
        
		$this->load->view('SubCategory/cssLinks');
		$this->load->view('Template/header');
		$this->load->view('Template/slider');
		$this->load->view('SubCategory/mainSection',$data);
		$this->load->view('Template/footer');
		$this->load->view('SubCategory/jqueryLinks');
	}
    
    public function addSubCategory()
    {
        $api_url = $this->config->item('api_url');
        $add_api_url = $api_url."General/Add";
        
        $categoryId = $this->input->post('categoryId');
        $subCategoryName = $this->input->post('subCategoryName');
        $subCategoryDescription = $this->input->post('subCategoryDescription');
        
        
        
        
        $picture_name_1="";
        $picture1="";    
        if(!empty($_FILES['subCategoryImage']['name'])){
            $config['upload_path'] = './master_images/subCategoryImage';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
             $config['max_size']    = '15000000';
            $config['file_name'] = time().$_FILES['subCategoryImage']['name'];
            //Load upload library and initialize configuration
            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            
            if($this->upload->do_upload('subCategoryImage')){
                $uploadData = $this->upload->data();
                 $picture_name_1 = $uploadData['file_name'];
            }else{
                 $picture_name_1 = 'upload problem';
            }
        }else{
             $picture_name_1 = 'Blank';
        }
        
        
        $objarray = array("sub_category"=>array("category_id"=>$categoryId,"sub_category_name"=>$subCategoryName,"sub_category_description"=>$subCategoryDescription,"sub_category_image"=>$picture_name_1,),"check"=>"sub_category_name");
        
//       echo json_encode($objarray); die;
        
        $response = $this->General_model->general_function($objarray,$add_api_url);
        
        
        
        $response=json_decode($response,true);
        
        $img_arr=array("img"=>$picture_name_1);
        
        $response=array_merge($response,$img_arr);
        
        echo json_encode($response);
       
       
    }  
    
    public function editSubCategory()
    {
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Update";
        
        $editSubcategoryName = $this->input->post('editSubcategoryName');
        $editCategoryId = $this->input->post('editCategoryId');
        $previousimage = $this->input->post('previousimage');
        $editSubcategoryDescription = $this->input->post('editSubcategoryDescription');
        $GlobId = $this->input->post('GlobId');
        
        
//        print_r($_FILES);die;
        $picture_name_1="";
        $picture1="";    
        if(!empty($_FILES['editSubcategoryImage']['name'])){
            $config['upload_path'] = './master_images/subCategoryImage';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
             $config['max_size']    = '15000000';
            $config['file_name'] = time().$_FILES['editSubcategoryImage']['name'];
            //Load upload library and initialize configuration
            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            
            if($this->upload->do_upload('editSubcategoryImage')){
                $uploadData = $this->upload->data();
                 $picture_name_1 = $uploadData['file_name'];
            }else{
                 $picture_name_1 = $previousimage;
            }
        }else{
             $picture_name_1 = $previousimage;
        }
        
        $objarray = array("sub_category"=>array("category_id"=>$editCategoryId,"sub_category_name"=>$editSubcategoryName,"sub_category_description"=>$editSubcategoryDescription,"sub_category_image"=>$picture_name_1,),"where"=>array("sub_category_id"=>$GlobId));
    
        
     // echo json_encode($objarray); die;
        
        $response = $this->General_model->general_function($objarray,$get_api_url);
        
        $response=json_decode($response,true);
        
        $image_arr=array("img"=>$picture_name_1);
        
        $response=array_merge($response,$image_arr);
        
        echo json_encode($response);
    } 
    
    public function deleteSubCategory()
    {
        $api_url = $this->config->item('api_url');
        $delete_api_url = $api_url."General/Delete";
        
        
        $subCategoryId = $this->input->post('subCategoryId');
        
        $objarray = array("sub_category"=>array("sub_category_id"=>$subCategoryId));
        
//        echo json_encode($objarray); die;
        
        $response = $this->General_model->general_function($objarray,$delete_api_url);
        echo $response;
    } 
    
    public function SingleCategory()
    {
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Get";
        
        $subCategoryId = $this->input->post('subCategoryId');
      
        
        $objarray = array("sub_category"=>array("sub_category_id"=>$subCategoryId));
        
//      echo json_encode($objarray); die;
        
        $response = $this->General_model->general_function($objarray,$get_api_url);
        
       
        
        echo $response;
    }
    
    
}
