<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banner extends CI_Controller {

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
        
       
        
        $objarray = array("banner"=>array("del_status"=>0));
        
        $response = $this->General_model->general_function($objarray,$get_api_url);
        $data['bannerList']=json_decode($response,true);
        
//        echo json_encode($data['roleList']);die;
        
		$this->load->view('Banner/cssLinks');
		$this->load->view('Template/header');
		$this->load->view('Template/slider');
		$this->load->view('Banner/mainSection',$data);
		$this->load->view('Template/footer');
		$this->load->view('Banner/jqueryLinks');
	}
    
    public function addBanner()
    {
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Add";
        
        $banner_name = $this->input->post('banner_type');
        $banner_desc = $this->input->post('banner_desc');
        
        
        
        
        $picture_name_1="";
        $picture1="";    
        if(!empty($_FILES['banner_img']['name'])){
            $config['upload_path'] = '../master_images/banner';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
             $config['max_size']    = '15000000';
            $config['file_name'] = time().$_FILES['banner_img']['name'];
            //Load upload library and initialize configuration
            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            
            if($this->upload->do_upload('banner_img')){
                $uploadData = $this->upload->data();
                 $picture_name_1 = $uploadData['file_name'];
            }else{
                 $picture_name_1 = 'upload problem';
            }
        }else{
             $picture_name_1 = 'Blank';
        }
        
        
        $objarray = array("banner"=>array("banner_name"=>$banner_name,"banner_desc"=>$banner_desc,"banner_img"=>$picture_name_1,));
        
       // echo json_encode($objarray); 
        
        $response = $this->General_model->general_function($objarray,$get_api_url);
        
       /* print_r($response);
        die;*/
        $response=json_decode($response,true);
        
        $img_arr=array("img"=>$picture_name_1);
        
        $response=array_merge($response,$img_arr);
        
        echo json_encode($response);
       
        redirect('Banner');
       
    }  
    
    public function editBanner()
    {
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Update";
        
        $banner_name = $this->input->post('banner_name');
        $previousimage = $this->input->post('previousimage');
        $banner_desc = $this->input->post('banner_desc');
        $GlobId = $this->input->post('GlobId');
        
        
//        print_r($_FILES);die;
        $picture_name_1="";
        $picture1="";    
        if(!empty($_FILES['banner_img']['name'])){
            $config['upload_path'] = '../master_images/banner';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
             $config['max_size']    = '15000000';
            $config['file_name'] = time().$_FILES['banner_img']['name'];
            //Load upload library and initialize configuration
            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            
            if($this->upload->do_upload('banner_img')){
                $uploadData = $this->upload->data();
                 $picture_name_1 = $uploadData['file_name'];
            }else{
                 $picture_name_1 = $previousimage;
            }
        }else{
             $picture_name_1 = $previousimage;
        }
        
        
        $objarray = array("banner"=>array("banner_name"=>$banner_name,"banner_desc"=>$banner_desc,"banner_img"=>$picture_name_1),"where"=>array("banner_id"=>$GlobId));
        
      // echo json_encode($objarray); die;
        
        $response = $this->General_model->general_function($objarray,$get_api_url);
        
        $response=json_decode($response,true);
        
        $image_arr=array("img"=>$picture_name_1);
        
        $response=array_merge($response,$image_arr);
        
        echo json_encode($response);
    } 
    
    public function deletebanner()
    {
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Delete";
        
        
        $banner_id = $this->input->post('banner_id');
        
        $objarray = array("banner"=>array("banner_id"=>$banner_id));
        
//        echo json_encode($objarray); die;
        
        $response = $this->General_model->general_function($objarray,$get_api_url);
        echo $response;
    } 
    
    public function SingleBanner()
    {
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Get";
        
        $banner_id = $this->input->post('banner_id');
      
        
        $objarray = array("banner"=>array("banner_id"=>$banner_id));
        
//        echo json_encode($objarray); die;
        
        $response = $this->General_model->general_function($objarray,$get_api_url);
        
       
        
        echo $response;
    }
    
    
}
