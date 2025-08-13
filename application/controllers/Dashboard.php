<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
        
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Get";
		$get_dashboard_info = $api_url."General/GetTransactionInformation";
        
        $objarray = array("role"=>array("del_status"=>0));
        
        $response = $this->General_model->general_function($objarray,$get_api_url);
        $data['roleList']=json_decode($response,true);

		$objarray = array();
        
        $response = $this->General_model->general_function($objarray,$get_dashboard_info);
        $data['roleDashboardInfo']=json_decode($response,true);
        
       
        
		$this->load->view('Dashboard/cssLinks');
		$this->load->view('Template/header');
		$this->load->view('Template/slider');
		$this->load->view('Dashboard/mainSection',$data);
		$this->load->view('Template/footer');
		$this->load->view('Dashboard/jqueryLinks',$data);
	}
    
    
    
    
}
