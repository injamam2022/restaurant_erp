<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TableManagement extends CI_Controller {

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
        $food_api_url = $api_url."General/GetFood";
        
        $objarray = array("payment"=>array("del_status"=>0));
        $response = $this->General_model->general_function($objarray,$get_api_url);
        $data['paymentData']=json_decode($response,true);

		$objarray = array("status"=>array("del_status"=>0));
        $response = $this->General_model->general_function($objarray,$get_api_url);
        $data['statusData']=json_decode($response,true);

		$objarray = array("table"=>array("del_status"=>0));
        $response = $this->General_model->general_function($objarray,$get_api_url);
        $data['tableData']=json_decode($response,true);

		$objarray = array("food"=>array("del_status"=>0,"food_status"=>0));
        $response = $this->General_model->general_function($objarray,$get_api_url);
        $data['foodData']=json_decode($response,true);

        $objarray = array("food"=>array("category_id"=>2));
        $response = $this->General_model->general_function($objarray,$food_api_url);
        $data['drinkData']=json_decode($response,true);

		$objarray = array("size"=>array("del_status"=>0));
        $response = $this->General_model->general_function($objarray,$get_api_url);
        $data['sizeData']=json_decode($response,true);
        
       // echo $this->session->userdata("school_chef_id"); die();
		
		$this->load->view('Table/cssLinks');
		$this->load->view('Template/header');
		$this->load->view('Template/slider');
		$this->load->view('Table/mainSection',$data);
		$this->load->view('Template/footer');
		$this->load->view('Table/jqueryLinks');
	}

	public function price_get()
    {
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Get";

        $objarray = $this->input->post();
        //echo json_encode($objarray); die;
        $response = $this->General_model->general_function($objarray,$get_api_url);
        echo $response;
    }

	public function table_get()
    {
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/TableGet";
        
        $objarray = $this->input->post();
        // echo json_encode($objarray); die;
        
        $response = $this->General_model->general_function($objarray,$get_api_url);
        echo $response;
    }

	public function add_item()
    {
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/AddItem";
        
        $objarray = $this->input->post();
        // echo json_encode($objarray); die;
        
        $response = $this->General_model->general_function($objarray,$get_api_url);
        echo $response;
    }

	public function update_item()
    {
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/AddItem";
        
        $objarray = $this->input->post();
        //echo json_encode($objarray); die;
        $response = $this->General_model->general_function($objarray,$get_api_url);
        echo $response;
    }

    public function update_comments()
    {
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Update";
        
        $objarray = $this->input->post();
        //echo json_encode($objarray); die;
        $response = $this->General_model->general_function($objarray,$get_api_url);
        echo $response;
    }

	public function delete_item()
    {
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Remove";
        
        $objarray = $this->input->post();
        // echo json_encode($objarray); die;
        
        $response = $this->General_model->general_function($objarray,$get_api_url);
        echo $response;
    }

	public function finalSubmitOrder(){
		$api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/FinalSubmitOrder";
        
        $objarray = $this->input->post();
        //echo json_encode($objarray); die;
        
        $response = $this->General_model->general_function($objarray,$get_api_url);
        echo $response;
	}

    public function cancelTable(){
		$api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/CancelOrder";
        
        $objarray = $this->input->post();
        // echo json_encode($objarray); die;
        $response = $this->General_model->general_function($objarray,$get_api_url);
        echo $response;
	}
  
}
