<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentManagement extends CI_Controller {

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
        
         $objarray = array("student"=>array(),"join"=>"school");
        
        $data['dataList'] = json_decode($this->General_model->general_function($objarray,$get_api_url),true);
        
       
		$this->load->view('StudentManagement/cssLinks',$data);
		$this->load->view('Template/header');
		$this->load->view('Template/slider');
		$this->load->view('StudentManagement/mainSection');
		$this->load->view('Template/footer');
		$this->load->view('StudentManagement/jqueryLinks');
	}
    
    
    public function view()
    {
        
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Get";
        
        $student_id = $this->uri->segment(3);
        
         $objarray = array("student"=>array("student_master.student_id"=>$student_id),"join"=>"school");
        
        $data['dataList'] = json_decode($this->General_model->general_function($objarray,$get_api_url),true);
        
        $this->load->view('StudentManagement/cssLinks',$data);
		$this->load->view('Template/header');
		$this->load->view('Template/slider');
		$this->load->view('StudentManagement/mainSection');
		$this->load->view('Template/footer');
		$this->load->view('StudentManagement/jqueryLinks');
    }
    
}
