<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ExpenditureManagement extends CI_Controller {

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
        //echo "hello"; die();
        date_default_timezone_set("Asia/Kolkata");   //India time (GMT+5:30)
         if($this->session->userdata("admin_email_id") == "")
        {
            header('Location: '.base_url()."Login");
        }
        
        $api_url = $this->config->item('api_url');
        $filter_collection_admin = $api_url."General/FilterExpense";
        
       
        $fliter_with_date_from = date('Y-m-d');
        $fliter_with_date_to = date('Y-m-d');
       
        
        $objarray = array("fliter_with_date_from"=>$fliter_with_date_from,"fliter_with_date_to"=>$fliter_with_date_to);
        
        
        $response = $this->General_model->general_function($objarray,$filter_collection_admin);
        $data['orderDetails']=json_decode($response,true);  
        
        
		$this->load->view('ExpenditureManagement/cssLinks');
		$this->load->view('Template/header');
		$this->load->view('Template/slider');
		$this->load->view('ExpenditureManagement/mainSection',$data);
		$this->load->view('Template/footer');
		$this->load->view('ExpenditureManagement/jqueryLinks');
	}
    
    
    public function filter_orders()
    {
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Get";
        $filter_orders_admin = $api_url."General/FilterExpense";
        
       
        $fliter_with_date_from = $this->input->post('fliter_with_date_from');
        $fliter_with_date_to = $this->input->post('fliter_with_date_to');
       
        
        $objarray = array("fliter_with_date_from"=>$fliter_with_date_from,"fliter_with_date_to"=>$fliter_with_date_to);
        
        //echo json_encode($objarray); die();
        
        $response = $this->General_model->general_function($objarray,$filter_orders_admin);
        $data['orderDetails']=json_decode($response,true);  
      
      $this->load->view('ExpenditureManagement/cssLinks');
      $this->load->view('Template/header');
      $this->load->view('Template/slider');
      $this->load->view('ExpenditureManagement/mainSection',$data);
      $this->load->view('Template/footer');
      $this->load->view('ExpenditureManagement/jqueryLinks');
        
    }
}
