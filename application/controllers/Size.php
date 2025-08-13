<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Size extends CI_Controller {

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
        
        $objarray = array("size"=>array("del_status"=>0));
        
        $response = $this->General_model->general_function($objarray,$get_api_url);
        $data['sizeList']=json_decode($response,true);
        
		$this->load->view('Size/cssLinks');
		$this->load->view('Template/header');
		$this->load->view('Template/slider');
		$this->load->view('Size/mainSection',$data);
		$this->load->view('Template/footer');
		$this->load->view('Size/jqueryLinks');
	}
    
    public function add()
    {
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Add";
        
        $size_name = $this->input->post('size_name');
        
        $objarray = array("size"=>array("size_name"=>$size_name),"check"=>"size_name");
        
//        echo json_encode($objarray); die;
        
        $response = $this->General_model->general_function($objarray,$get_api_url);
        echo $response;
    }  
    
    public function edit()
    {
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Update";
        
        $size_name = $this->input->post('size_name');
        $GlobId = $this->input->post('GlobId');
        
        $objarray = array("size"=>array("size_name"=>$size_name),"check"=>"size_name","where"=>array("size_id"=>$GlobId));
        
//        echo json_encode($objarray); die;
        
        $response = $this->General_model->general_function($objarray,$get_api_url);
        echo $response;
    } 
    
    public function delete()
    {
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Delete";
        
        
        $sizeid = $this->input->post('sizeId');
        
        $objarray = array("size"=>array("size_id"=>$sizeid));
        
//        echo json_encode($objarray); die;
        
        $response = $this->General_model->general_function($objarray,$get_api_url);
        echo $response;
    } 
    
    public function Single()
    {
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Get";
        
        $size_id = $this->input->post('sizeId');
      
        
        $objarray = array("size"=>array("size_id"=>$size_id));
        
//        echo json_encode($objarray); die;
        
        $response = $this->General_model->general_function($objarray,$get_api_url);
        echo $response;
    }
    
    
}
