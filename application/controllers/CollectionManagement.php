<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CollectionManagement extends CI_Controller {

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
        $get_api_url = $api_url."General/Get";
        $filter_collection_admin = $api_url."General/FilterCollectionadmin";
        
       
        $fliter_with_date_from = date('Y-m-d');
        $fliter_with_date_to = date('Y-m-d');
       
        
        $objarray = array("fliter_with_date_from"=>$fliter_with_date_from,"fliter_with_date_to"=>$fliter_with_date_to);
        
        
        $response = $this->General_model->general_function($objarray,$filter_collection_admin);
        $data['orderDetails']=json_decode($response,true);  
        //print_r($data['orderDetails']); die();
        
        
		$this->load->view('CollectionMangement/cssLinks');
		$this->load->view('Template/header');
		$this->load->view('Template/slider');
		$this->load->view('CollectionMangement/mainSection',$data);
		$this->load->view('Template/footer');
		$this->load->view('CollectionMangement/jqueryLinks');
	}
    
    
    public function filter_orders()
    {
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Get";
        $filter_orders_admin = $api_url."General/FilterCollectionadmin";
        
       
        $fliter_with_date_from = $this->input->post('fliter_with_date_from');
        $fliter_with_date_to = $this->input->post('fliter_with_date_to');
       
        
        $objarray = array("fliter_with_date_from"=>$fliter_with_date_from,"fliter_with_date_to"=>$fliter_with_date_to);
        
        //echo json_encode($objarray); die();
        
        $response = $this->General_model->general_function($objarray,$filter_orders_admin);
        $data['orderDetails']=json_decode($response,true);  
      $this->load->view('CollectionMangement/cssLinks');
      $this->load->view('Template/header');
      $this->load->view('Template/slider');
      $this->load->view('CollectionMangement/mainSection',$data);
      $this->load->view('Template/footer');
      $this->load->view('CollectionMangement/jqueryLinks');
        
    }
    
    
     public function get_single_order()
    {
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Getallordersgroup";
        
        $order_id = $_REQUEST['order_id'];
        $objarray = array("order_id"=>$order_id);
        $dataorder_info = json_decode($this->General_model->general_function($objarray,$get_api_url),true);


        $res = array("stat"=>200,"all_list"=>$dataorder_info);
        echo json_encode($res);
        
        
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
