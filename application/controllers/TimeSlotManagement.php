<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TimeSlotManagement extends CI_Controller {

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
        
        $objarray = array("timeslot"=>array("del_status"=>0));
        
        $response = $this->General_model->general_function($objarray,$get_api_url);
        $data['timeslotList']=json_decode($response,true);
        
		$this->load->view('Timeslot/cssLinks');
		$this->load->view('Template/header');
		$this->load->view('Template/slider');
		$this->load->view('Timeslot/mainSection',$data);
		$this->load->view('Template/footer');
		$this->load->view('Timeslot/jqueryLinks');
	}
    
    public function adddata()
    {
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Add";
        
        $timeslot_name = $this->input->post('timeslot_name');
        $timeslot_interval = $this->input->post('timeslot_interval');
        $time_slot_from = $this->input->post('time_slot_from');
        $time_slot_to = $this->input->post('time_slot_to');
        
        $objarray = array("timeslot"=>array("timeslot_name"=>$timeslot_name,
                                            "timeslot_interval"=>$timeslot_interval,
                                            "time_slot_from"=>$time_slot_from,
                                            "time_slot_to"=>$time_slot_to
                                           ),"check"=>"timeslot_name");
        
//        echo json_encode($objarray); die;
        
        $response = $this->General_model->general_function($objarray,$get_api_url);
        echo $response;
    }  
    
    public function editdata()
    {
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Update";
        
        $timeslot_name = $this->input->post('timeslot_name');
        $timeslot_interval = $this->input->post('timeslot_interval');
        $GlobId = $this->input->post('GlobId');
        
        $time_slot_from = $this->input->post('time_slot_from');
        $time_slot_to = $this->input->post('time_slot_to');

        $objarray = array("timeslot"=>array("timeslot_name"=>$timeslot_name,"timeslot_interval"=>$timeslot_interval,  "time_slot_from"=>$time_slot_from,"time_slot_to"=>$time_slot_to),"check"=>"timeslot_name","where"=>array("timeslot_id"=>$GlobId));
        
//      echo json_encode($objarray); die;
        
        $response = $this->General_model->general_function($objarray,$get_api_url);
        echo $response;
    } 
    
    public function deletedata()
    {
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Delete";
        
        
        $delete_id = $this->input->post('delete_id');
        
        $objarray = array("timeslot"=>array("timeslot_id"=>$delete_id));
        
//        echo json_encode($objarray); die;
        
        $response = $this->General_model->general_function($objarray,$get_api_url);
        echo $response;
    } 
    
    public function Singledata()
    {
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Get";
        
        $timeslot_id = $this->input->post('edit_id');
      
        
        $objarray = array("timeslot"=>array("timeslot_id"=>$timeslot_id));
        
  //      echo json_encode($objarray); die;
        
        $response = $this->General_model->general_function($objarray,$get_api_url);
        echo $response;
    }
    
    
}
