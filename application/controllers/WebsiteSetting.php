<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WebsiteSetting extends CI_Controller {

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
        
        $objarray = array("website"=>array("del_status"=>0,"website_id"=>1));
        
        
        
        $response = $this->General_model->general_function($objarray,$get_api_url);
        $data['WebsiteDataList']=json_decode($response,true);
        
		$this->load->view('Website/cssLinks');
		$this->load->view('Template/header');
		$this->load->view('Template/slider');
		$this->load->view('Website/mainSection',$data);
		$this->load->view('Template/footer');
		$this->load->view('Website/jqueryLinks');
	}
    
    
    
    public function updatewebsitedata()
    {
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Update";
        
      /*  $ocs_name = $this->input->post('ocs_name');
        $GlobId = $this->input->post('GlobId');*/
        
       /* echo "<pre>";
        print_r($_REQUEST);*/
        
       // die();
        
      /*  print_r($_FILES);
        die();*/
           
        $picture_name_1="";
        $picture1="";    
        if(!empty($_FILES['company_logo']['name'])){
            $config['upload_path'] = '../master_images/Website';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
             $config['max_size']    = '15000000';
            $config['file_name'] = time().$_FILES['company_logo']['name'];
            //Load upload library and initialize configuration
            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            
            if($this->upload->do_upload('company_logo')){
                $uploadData = $this->upload->data();
                 $picture_name_1 = $uploadData['file_name'];
            }else{
                 $picture_name_1 = 'upload problem';
            }
        }else{
             $picture_name_1 = $this->input->post('earlier_logo_img');
        }
        
        
     
           
        $picture_name_2="";
        $picture2="";    
        if(!empty($_FILES['company_favicon']['name'])){
            $config['upload_path'] = '../master_images/Website';
            $config['allowed_types'] = 'jpg|jpeg|png|gif|pdf';
             $config['max_size']    = '15000000';
            $config['file_name'] = time().$_FILES['company_favicon']['name'];
            //Load upload library and initialize configuration
            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            
            if($this->upload->do_upload('company_favicon')){
                $uploadData = $this->upload->data();
                 $picture_name_2 = $uploadData['file_name'];
            }else{
                 $picture_name_2 = 'upload problem';
            }
        }else{
             $picture_name_2 = $this->input->post('earlier_favicon_img');
        }
        
        
         $picture_name_3="";
        $picture3="";    
        if(!empty($_FILES['website_brochure']['name'])){
            $config['upload_path'] = '../master_images/Website';
            $config['allowed_types'] = 'jpg|jpeg|png|gif|pdf';
             $config['max_size']    = '15000000';
            $config['file_name'] = time().$_FILES['website_brochure']['name'];
            //Load upload library and initialize configuration
            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            
            if($this->upload->do_upload('website_brochure')){
                $uploadData = $this->upload->data();
                 $picture_name_3 = $uploadData['file_name'];
            }else{
                 $picture_name_3 = 'upload problem';
            }
        }else{
             $picture_name_3 = $this->input->post('website_brochure');
        }
        
  
        
        
        
        $objarray = array("website"=>array(
            "company_name"=>$this->input->post('company_name'),
            "site_url"=>$this->input->post('site_url'),
            "support_contact"=>$this->input->post('support_contact'),
            "support_email"=>$this->input->post('support_email'),
            "address"=>$this->input->post('address'),
            "working_hours"=>$this->input->post('working_hours'),
            "meta_title"=>$this->input->post('meta_title'),
            "meta_keyword"=>$this->input->post('meta_keyword'),
            "meta_description"=>$this->input->post('meta_description'),
            "facebook_link"=>$this->input->post('facebook_link'),
            "linkedin_link"=>$this->input->post('linkedin_link'),
            "instagram_link"=>$this->input->post('instagram_link'),
            "twitter_link"=>$this->input->post('twitter_link'),
            "google_plus_link"=>$this->input->post('google_plus_link'),
            "youtube_link"=>$this->input->post('youtube_link'),
            "pinterest_link"=>$this->input->post('pinterest_link'),
            "address_map"=>$this->input->post('address_map'),
            "footer_description"=>$this->input->post('footer_description'),
            "copy_right"=>$this->input->post('copy_right'),
            "phone_number"=>$this->input->post('phone_number'),
            "alternative_email"=>$this->input->post('alternative_email'),
            "company_logo"=>$picture_name_1,
            "website_brochure"=>$picture_name_3,
            "company_favicon"=>$picture_name_2
        ),"where"=>array("website_id"=>1));
        
//        echo json_encode($objarray); die;
        
        $response = $this->General_model->general_function($objarray,$get_api_url);
       /* echo $response;
        
        die();*/
        
        redirect('WebsiteSetting');
    } 
   
    
}
