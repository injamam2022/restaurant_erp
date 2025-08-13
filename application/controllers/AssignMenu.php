<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AssignMenu extends CI_Controller {

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
        
         $objarray = array("assignmenu"=>array(),"join"=>"menu,school,timeslot");
        
        $data['dataList'] = json_decode($this->General_model->general_function($objarray,$get_api_url),true);
        
       
		$this->load->view('AssignMenu/cssLinks',$data);
		$this->load->view('Template/header');
		$this->load->view('Template/slider');
		$this->load->view('AssignMenu/mainSection');
		$this->load->view('Template/footer');
		$this->load->view('AssignMenu/jqueryLinks');
	}
    
    public function add()
    {
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Get";
        
        $objarray = array("school"=>array("del_status"=>0));
        
        $data['schoolList'] = json_decode($this->General_model->general_function($objarray,$get_api_url),true);
        
         $objarray = array("timeslot"=>array("del_status"=>0));
        
        $data['timeslotList'] = json_decode($this->General_model->general_function($objarray,$get_api_url),true);
        
          $objarray = array("menu"=>array("del_status"=>0));
        
        $data['menuList'] = json_decode($this->General_model->general_function($objarray,$get_api_url),true);
        
        
        
        $this->load->view('AssignMenu/cssLinks',$data);
		$this->load->view('Template/header');
		$this->load->view('Template/slider');
		$this->load->view('AssignMenu/Add');
		$this->load->view('Template/footer');
		$this->load->view('AssignMenu/jqueryLinks');
    }
    
    
    public function add_data()
    {
        $api_url = $this->config->item('api_url');
        $add_api_url = $api_url."General/Add";
        
       // print_r($_REQUEST); die();
        
        $start = $this->input->post('start_date');
        $end = $this->input->post('end_date');
        
        $objarray = array("assignmenu"=>array(
            "school_id"=>$this->input->post('school_id'),
            "timeslot_id"=>$this->input->post('timeslot_id'),
            "end_datetime"=>$this->input->post('end_date'),
            "menu_id"=>$this->input->post('menu_id'),
            "start_date"=>$start,
            "end_date"=>$end,
            "start_datetime"=>$this->input->post('start_date')
        ));
        
       // echo json_encode($objarray);
        
        $data = json_decode($this->General_model->general_function($objarray,$add_api_url),true);
        
         if($data['insert_id'])
        {
          $this->session->set_flashdata('success',"Added Successfully");
          return redirect('AssignMenu');
        
        }
        else
        {
          $this->session->set_flashdata('success',"Some Error Occurred");
          return redirect('AssignMenu');
        }
    }
    
    public function edit()
	{
        
       
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Get";
        
        $assign_menu_id = $this->uri->segment(3);
        
         $objarray = array("assignmenu"=>array("assignmenu_id"=>$assign_menu_id),"join"=>"menu,school,timeslot");
        
        $data['dataList'] = json_decode($this->General_model->general_function($objarray,$get_api_url),true);
        
        $objarray = array("school"=>array("del_status"=>0));
        
        $data['schoolList'] = json_decode($this->General_model->general_function($objarray,$get_api_url),true);
        
         $objarray = array("timeslot"=>array("del_status"=>0));
        
        $data['timeslotList'] = json_decode($this->General_model->general_function($objarray,$get_api_url),true);
        
          $objarray = array("menu"=>array("del_status"=>0));
        
        $data['menuList'] = json_decode($this->General_model->general_function($objarray,$get_api_url),true);
        
       
		$this->load->view('AssignMenu/cssLinks',$data);
		$this->load->view('Template/header');
		$this->load->view('Template/slider');
		$this->load->view('AssignMenu/Edit');
		$this->load->view('Template/footer');
		$this->load->view('AssignMenu/jqueryLinks');
	}
    
    public function update()
    {
        $api_url = $this->config->item('api_url');
        $up_api_url = $api_url."General/Update";
        
        
        $start = $this->input->post('start_date');
        $end = $this->input->post('end_date');
        
        $objarray = array("assignmenu"=>array(
            "school_id"=>$this->input->post('school_id'),
            "timeslot_id"=>$this->input->post('timeslot_id'),
            "end_datetime"=>$this->input->post('end_date'),
            "menu_id"=>$this->input->post('menu_id'),
            "start_date"=>$start,
            "end_date"=>$end,
            "start_datetime"=>$this->input->post('start_date')
        ),"where"=>array("assignmenu_id"=>$this->input->post('assignmenu_id')));
        
      // echo json_encode($objarray); die();
        
        $data = json_decode($this->General_model->general_function($objarray,$up_api_url),true);
                          
    
           if($data)
        {
          $this->session->set_flashdata('success',"Updated Successfully");
          return redirect('AssignMenu');
        
        }
        else
        {
          $this->session->set_flashdata('success',"Some Error Occurred");
          return redirect('AssignMenu');
        }
        
        
    }
    
    
    public function delete()
    {
        $api_url = $this->config->item('api_url');
        $del_api_url = $api_url."General/Delete";
        $assign_menu_id = $this->uri->segment(3);
        
        
        $objarray = array("assignmenu"=>array("assignmenu_id"=>$assign_menu_id));
        
//        echo json_encode($objarray); die;
        
        $response = $this->General_model->general_function($objarray,$del_api_url);
        
         if($response)
        {
          $this->session->set_flashdata('success',"Deleted Successfully");
          return redirect('AssignMenu');
        
        }
        else
        {
          $this->session->set_flashdata('success',"Some Error Occurred");
          return redirect('AssignMenu');
        }
       
    }
  
    
    
}
