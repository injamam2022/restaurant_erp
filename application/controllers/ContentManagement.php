<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContentManagement extends CI_Controller {
    
    

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
    
    public function __construct(){
        parent::__construct();
        $this->load->library('encryption');
        
          $this->load->library('ckeditor');
        $this->load->library('ckfinder');



        $this->ckeditor->basePath = base_url().'assets/vendors/bower_components/ckeditor/';
        $this->ckeditor->config['toolbar'] = array(
                        array( 'Source', '-', 'Bold', 'Italic', 'Underline', '-','Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo','-','NumberedList','BulletedList' )
                                                            );
        $this->ckeditor->config['language'] = 'it';
        $this->ckeditor->config['width'] = '730px';
        $this->ckeditor->config['height'] = '300px';            

      }
	public function index()
	{
        
         if($this->session->userdata("admin_email_id") == "")
        {
            header('Location: '.base_url()."Login");
        }
        
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Get";
        
       
        
        $objarray = array("content"=>array());
        
        $response = $this->General_model->general_function($objarray,$get_api_url);
        $data['contentList']=json_decode($response,true);
        
//        echo json_encode($data['productList']);die;
        
		$this->load->view('ContentManagement/cssLinks');
		$this->load->view('Template/header');
		$this->load->view('Template/slider');
		$this->load->view('ContentManagement/ListContent',$data);
		$this->load->view('Template/footer');
		$this->load->view('ContentManagement/jqueryLinks');
	}
    
    public function AddContent()
    {
        
        
        if($this->session->userdata("admin_email_id") == "")
        {
            header('Location: '.base_url()."Login");
        }
        
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Get";
        
       
        
        $objarray = array("content"=>array());
        
        $response = $this->General_model->general_function($objarray,$get_api_url);
        $data['contentList']=json_decode($response,true);
        
//        echo json_encode($data['productList']);die;
        
		$this->load->view('ContentManagement/cssLinks');
		$this->load->view('Template/header');
		$this->load->view('Template/slider');
		$this->load->view('ContentManagement/AddContent',$data);
		$this->load->view('Template/footer');
		$this->load->view('ContentManagement/jqueryLinks');
        
       
       
    }  
    
   public function ContentAdd()
   {
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Add";
       
       
       $section = $this->input->post('section');
      // $page = $this->input->post('page');
       $header = $this->input->post('header');
       $content = $this->input->post('content');
       $extra_content = $this->input->post('extra_content');
       $video = $this->input->post('video');
       
    
       
       
        $picture_name_1="";
        $picture1="";    
        if(!empty($_FILES['image']['name'])){
            $config['upload_path'] = './master_images/Content';
            $config['allowed_types'] =  'jpg|jpeg|png|gif|pdf|docx';
             $config['max_size']    = '15000000';
            $config['file_name'] = time().$_FILES['image']['name'];
            //Load upload library and initialize configuration
            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            
            if($this->upload->do_upload('image')){
                $uploadData = $this->upload->data();
                 $picture_name_1 = $uploadData['file_name'];
            }else{
                 $picture_name_1 = 'upload problem';
            }
        }else{
             $picture_name_1 = '';
        }
       
       
       
         $picture_name_2="";
        $picture2="";    
        if(!empty($_FILES['academicimage']['name'])){
            $config['upload_path'] = './master_images/Content';
            $config['allowed_types'] =  'jpg|jpeg|png|gif|pdf|docx';
             $config['max_size']    = '15000000';
            $config['file_name'] = time().$_FILES['academicimage']['name'];
            //Load upload library and initialize configuration
            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            
            if($this->upload->do_upload('academicimage')){
                $uploadData = $this->upload->data();
                 $picture_name_2 = $uploadData['file_name'];
            }else{
                 $picture_name_2 = 'upload problem';
            }
        }else{
             $picture_name_2 = '';
        }
       
       
       //"page"=>$page,
       
       
       $objarray = array("content"=>array("section"=>$section,"header"=>$header,"content"=>$content,"extra_content"=>$extra_content,"video"=>$video,"image"=>$picture_name_1,"academicimage"=>$picture_name_2));
        
//        echo json_encode($objarray); die;
        
        $response = $this->General_model->general_function($objarray,$get_api_url);
       
       echo $response;
        
   }
    
    public function ContentEdit()
   {
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Update";
       
       
       $section = $this->input->post('section');
       $page = $this->input->post('page');
       $header = $this->input->post('header');
       $content = $this->input->post('content');
       $extra_content = $this->input->post('extra_content');
       $video = $this->input->post('video');
       $previousimage = $this->input->post('previousimage');
       $previousimageacademicimage = $this->input->post('previousimageacademicimage');
       $content_id = $this->input->post('content_id');
        
        
        $picture_name_1="";
        $picture1="";    
        if(!empty($_FILES['image']['name'])){
            $config['upload_path'] = './master_images/Content';
            $config['allowed_types'] =  'jpg|jpeg|png|gif|pdf|docx';
             $config['max_size']    = '15000000';
            $config['file_name'] = time().$_FILES['image']['name'];
            //Load upload library and initialize configuration
            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            
            if($this->upload->do_upload('image')){
                $uploadData = $this->upload->data();
                 $picture_name_1 = $uploadData['file_name'];
            }else{
                 $picture_name_1 = $previousimage;
            }
        }else{
             $picture_name_1 = $previousimage;
        }
       
        
        $picture_name_2="";
        $picture2="";    
        if(!empty($_FILES['academicimage']['name'])){
            $config['upload_path'] = './master_images/Content';
            $config['allowed_types'] =  'jpg|jpeg|png|gif|pdf|docx';
             $config['max_size']    = '15000000';
            $config['file_name'] = time().$_FILES['academicimage']['name'];
            //Load upload library and initialize configuration
            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            
            if($this->upload->do_upload('academicimage')){
                $uploadData = $this->upload->data();
                 $picture_name_2 = $uploadData['file_name'];
            }else{
                 $picture_name_2 = $previousimageacademicimage;
            }
        }else{
             $picture_name_2 = $previousimageacademicimage;
        }
     
       

       
       
       
       
       $objarray = array("content"=>array("section"=>$section,"page"=>$page,"header"=>$header,"content"=>$content,"extra_content"=>$extra_content,"video"=>$video,"image"=>$picture_name_1,"academicimage"=>$picture_name_2),"where"=>array("content_id"=>$content_id));
        
//        echo json_encode($objarray); die;
        
        $response = $this->General_model->general_function($objarray,$get_api_url);
        
        $response=json_decode($response,true);
        
        $image_arr=array("img"=>$picture_name_1);
        
        $response=array_merge($response,$image_arr);
        
        echo json_encode($response);
       
       
        
   }
    
    public function EditContent()
    {
        
         
        if($this->session->userdata("admin_email_id") == "")
        {
            header('Location: '.base_url()."Login");
        }
        
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Get";
        
       
        
        $objarray = array("content"=>array("content_id"=>$this->uri->segment(3)));
        
        $response = $this->General_model->general_function($objarray,$get_api_url);
        $data['contentList']=json_decode($response,true);
        
//        echo json_encode($data['contentList']);die;
        
		$this->load->view('ContentManagement/cssLinks');
		$this->load->view('Template/header');
		$this->load->view('Template/slider');
		$this->load->view('ContentManagement/EditContent',$data);
		$this->load->view('Template/footer');
		$this->load->view('ContentManagement/jqueryLinks');
        
        
    }
    
    public function deleteContent()
    {
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Delete";
        
        
        $content_id = $this->input->post('content_id');
        
        $objarray = array("content"=>array("content_id"=>$content_id));
        
//        echo json_encode($objarray); die;
        
        $response = $this->General_model->general_function($objarray,$get_api_url);
        echo $response;
    }
    
    
}
