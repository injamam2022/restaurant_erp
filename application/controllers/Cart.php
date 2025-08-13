<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

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
        //$get_api_url = $api_url."General/Get";
        
        if($this->session->userdata('student_login_id') == "")
        {
            redirect('StudentLogin');
        }
        
        
//        $objarray = array("cart"=>array("cart_master.del_status"=>0,"cart_master.student_id"=>$this->session->userdata('student_login_id')),"join"=>"food");
//        
//        $data['cartlist'] = json_decode($this->General_model->general_function($objarray,$get_api_url),true);
        
        $get_cartitems = $api_url."General/GetCartItems";
    
        $student_id = $this->session->userdata('student_login_id');
        
        $objarray    = array("student_id"=>$student_id);
        
       // echo json_encode($objarray); die();
        
        $data['cartlist'] = json_decode($this->General_model->general_function($objarray,$get_cartitems),true);
        
       //print_r($data['cartlist']); die();
      
        
        $this->load->view('Include/header',$data);
        $this->load->view('Cart/view');
		$this->load->view('Include/footer');
	}
    
    public function remove_items()
    {
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Delete";
        
        $cart_id = $this->uri->segment(3);
        
        $objarray    = array("cart"=>array("del_status"=>0,"cart_id"=>$cart_id));
        
        $res = json_decode($this->General_model->general_function($objarray,$get_api_url),true);
        
        if($res['stat'] == 200)
        {
            redirect('Cart');
        }
        
        
    }
    
    
    public function remove_items_mini_cart()
    {
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Remove";
        
        $cart_id = $this->input->post('cart_id');
        
        $objarray    = array("cart"=>array("del_status"=>0,"cart_id"=>$cart_id));
        
        //echo json_encode($objarray); die();
        
        $res = json_decode($this->General_model->general_function($objarray,$get_api_url),true);
        
        echo json_encode($res);
        
       /* if($res['stat'] == 200)
        {
            redirect('Cart');
        }*/
    }
    
    public function get_items_cart()
    {
        
        $api_url = $this->config->item('api_url');
        $get_cartitems = $api_url."General/GetCartItems";
    
        $student_id = $this->session->userdata('student_login_id');
        
        $objarray    = array("student_id"=>$student_id);
        
       // echo json_encode($objarray); die();
        
        $res = json_decode($this->General_model->general_function($objarray,$get_cartitems),true);
        
     //   print_r($res);
        if(count($res) > 0){
             $results = array("stat"=>200,"count"=>count($res));
        }
        else 
        {
             $results = array("stat"=>400,"count"=>0);
        }
       
        
        echo json_encode($results);
        
    }
    
    
    public function get_items_cart_mini()
    {
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Getminicart";
        
        $student_id = $this->session->userdata('student_login_id');
        $timeslot_id = $this->input->post('timeslot_id');
        $date =  $this->input->post('date');
       
        $objarray    = array("student_id"=>$student_id,"timeslot_id"=>$timeslot_id,"date_of_food"=>$date);
        
      //  echo json_encode($objarray); die();
        
        $res = json_decode($this->General_model->general_function($objarray,$get_api_url),true);
        
         if(count($res) > 0)
         {
            $resp = array("status"=>200,"resluts"=>$res); 
         }
        else
        {
            $resp = array("status"=>400,"resluts"=>0); 
        }
        
        echo json_encode($resp);
    }
    
    
    
    
}
