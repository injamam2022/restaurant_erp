<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction extends CI_Controller {

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
        $get_api_url = $api_url."General/Transaction";
        $start_date=date("Y-m-d");
		
		if($this->input->post()){
			$objarray = $this->input->post();
		}else{
			$objarray = array("start_date"=>$start_date,"end_date"=>$start_date);
		}
        // echo json_encode($objarray);die;
        $response = $this->General_model->general_function($objarray,$get_api_url);
        $data['all_data']=json_decode($response,true);
		$this->load->view('Transaction/cssLinks');
		$this->load->view('Template/header');
		$this->load->view('Template/slider');
		$this->load->view('Transaction/mainSection',$data);
		$this->load->view('Template/footer');
		$this->load->view('Transaction/jqueryLinks');
	}
    
    
}
