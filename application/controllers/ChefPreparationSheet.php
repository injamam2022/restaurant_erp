<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ChefPreparationSheet extends CI_Controller {

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
        
         if($this->session->userdata("school_chef_id") == "")
        {
            header('Location: '.base_url()."Login");
        }
        
         $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Get";
        
        $objarray = array("timeslot"=>array("del_status"=>0));
        
        $response = $this->General_model->general_function($objarray,$get_api_url);
        $data['timeslotList']=json_decode($response,true);
   
        
		$this->load->view('ChefPreparationSheet/cssLinks',$data);
		$this->load->view('Template/header');
		$this->load->view('Template/slider');
		$this->load->view('ChefPreparationSheet/mainSection');
		$this->load->view('Template/footer');
		$this->load->view('ChefPreparationSheet/jqueryLinks');
	}
    
    
    public function get_preparation_sheet()
    {
        $date = $_REQUEST['fliter_with_date'];
        $time_slot_id = $_REQUEST['time_slot_id'];
        
        //echo $time_slot_id."---".$date; die();
        
        $api_url = $this->config->item('api_url');
        $get_api_url_sheet = $api_url."General/Getprepationsheet";
        
      
        $get_api_url = $api_url."General/Get";
        
        $objarray = array("timeslot"=>array("del_status"=>0));
        
        $response = $this->General_model->general_function($objarray,$get_api_url);
        $data['timeslotList']=json_decode($response,true);
        
        $objarray = array("school_id"=>$this->session->userdata("school_chef_id"),"date"=>$date,"timeslot_id"=>$time_slot_id);
        
        //echo json_encode($objarray);  DIE();
        
        $response = $this->General_model->general_function($objarray,$get_api_url_sheet);
        $data['preparation_list']=json_decode($response,true);
        
       /* print_r($data['preparation_list']);
        
        die();*/
        
        $this->load->view('ChefPreparationSheet/cssLinks',$data);
		$this->load->view('Template/header');
		$this->load->view('Template/slider');
		$this->load->view('ChefPreparationSheet/mainSection');
		$this->load->view('Template/footer');
		$this->load->view('ChefPreparationSheet/jqueryLinks');
        
       
    }
    
    
 
    
}
