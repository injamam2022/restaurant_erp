<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SchoolOrders extends CI_Controller {

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
        
      // echo $this->session->userdata("school_chef_id");
        
        $objarray = array("school"=>array("school_id"=>$this->session->userdata("school_chef_id")));
        
        $response = $this->General_model->general_function($objarray,$get_api_url);
        $data['schoolList']=json_decode($response,true);
        
      //print_r($response);
        
        $objarray = array("order"=>array("order_master.school_id"=> $data['schoolList']['all_list'][0]['school_id']),"join"=>"student","order_by"=>array("order_id"=>"desc"));
      //  echo json_encode($objarray); die();
        $response = $this->General_model->general_function($objarray,$get_api_url);
        $data['schoolOrderDataChef']=json_decode($response,true);
        
        
//      echo json_encode($data['roleList']);die;
        
		$this->load->view('SchoolOrders/cssLinks');
		$this->load->view('Template/header');
		$this->load->view('Template/slider');
		$this->load->view('SchoolOrders/mainSection',$data);
		$this->load->view('Template/footer');
		$this->load->view('SchoolOrders/jqueryLinks');
	}
    
    
    public function filter_orders()
    {
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Get";
        
        $ordered_date = $this->input->post('fliter_with_date');
        
       // echo $ordered_date;
        $date = date('Y-m-d',strtotime($ordered_date));
        /*echo $date;
        die();*/
         $objarray = array("school"=>array("school_id"=>$this->session->userdata("school_chef_id")));
        
        $response = $this->General_model->general_function($objarray,$get_api_url);
        $data['schoolList']=json_decode($response,true);
        
        $objarray = array("orderdetails"=>array("orderdetails_master.school_id"=>$data['schoolList']['all_list'][0]['school_id'],"orderdetails_master.details_order_date"=>$date),"join"=>"food","order_by"=>array("orderdetails_id"=>"desc"));
        
        //echo json_encode($objarray); die();
        
        $response = $this->General_model->general_function($objarray,$get_api_url);
        $data['schoolOrderDataChef']=json_decode($response,true);  
        
        
        
        $this->load->view('SchoolOrders/cssLinks');
		$this->load->view('Template/header');
		$this->load->view('Template/slider');
		$this->load->view('SchoolOrders/mainSection',$data);
		$this->load->view('Template/footer');
		$this->load->view('SchoolOrders/jqueryLinks');
        
        
        
        
    }
    
    
    
    public function get_orders_via_date($date,$student_id,$order_id)
    {
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Getallordersresdate";
        $student_id =  $student_id;
        $objarray = array("student_id"=>$student_id,"date"=>$date,"order_id"=>$order_id);
        
          $dataorder_info = json_decode($this->General_model->general_function($objarray,$get_api_url),true);
        
        return $dataorder_info;
        
    }
   
    
      public function update_order_details()
    {
        
        $api_url = $this->config->item('api_url');
        $update_api_url = $api_url."General/Update";
        
        
        $order_details_id = $this->input->post('order_details_id');
        $details_order_status = $this->input->post('status');
        
        $objarray = array("orderdetails"=>array(
              "details_order_status"=>$details_order_status
            ),"where"=>array("orderdetails_id"=>$order_details_id));
        
      //echo json_encode($objarray);
        
        
        $response = json_decode($this->General_model->general_function($objarray,$update_api_url),true);
        
        echo json_encode($response);
        
        
        
    }
    
}
