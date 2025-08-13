<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MenuManagement extends CI_Controller {

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
        
        $objarray = array("menu"=>array("del_status"=>0));
        
       // echo json_encode($objarray);
        
        $response = $this->General_model->general_function($objarray,$get_api_url);
        $data['menuList']=json_decode($response,true);
        
		$this->load->view('Menu/cssLinks');
		$this->load->view('Template/header');
		$this->load->view('Template/slider');
		$this->load->view('Menu/mainSection',$data);
		$this->load->view('Template/footer');
		$this->load->view('Menu/jqueryLinks');
	}
    
    public function createmenu()
    {
        
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Get";
        
        $objarray = array("category"=>array("del_status"=>0));
        
        $data['categoryList'] = json_decode($this->General_model->general_function($objarray,$get_api_url),true);
        
       // print_r($data['categoryList']);
        $this->load->view('Menu/cssLinks',$data);
		$this->load->view('Template/header');
		$this->load->view('Template/slider');
		$this->load->view('Menu/Add');
		$this->load->view('Template/footer');
		$this->load->view('Menu/jqueryLinks'); 
    }
    
    public function submit_menu()
    {
        /*echo "<pre>";
        print_r($_REQUEST);*/
        
        $api_url = $this->config->item('api_url');
        $add_api_url = $api_url."General/Add";
        
        $objarray = array("menu"=>array(
            "menu_name"=>$this->input->post('menu_name'),
            "menu_code"=>$this->input->post('menu_code'),
            "menu_desc"=>$this->input->post('menu_desc')
        ));
        
       // echo json_encode($objarray);
        
        $data = json_decode($this->General_model->general_function($objarray,$add_api_url),true);
        //print_r($data);
        $menuid = $data['insert_id'];
        
        for($i=0;$i<count($_REQUEST['category_id']);$i++)
        {
            $items = implode(",",$_REQUEST['food_items_'.$i.'']);
            
            $objarray = array("menuitem"=>array(
            "menu_id"=>$menuid,
            "menu_category_id"=>$_REQUEST['category_id'][$i],
            "menu_food_id"=>$items
        )); 
           // echo json_encode($objarray); 
            $data_new = json_decode($this->General_model->general_function($objarray,$add_api_url),true);
        }
        if($data['insert_id'])
        {
          $this->session->set_flashdata('success',"Added Successfully");
          return redirect('MenuManagement');
        
        }
        else
        {
          $this->session->set_flashdata('success',"Some Error Occurred");
          return redirect('MenuManagement');
        }
        
    }
    
  
    
    
    
   
    
    public function editmenu()
    {
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Get";
        
        
        $menu_id  =  $this->uri->segment(3);
        
        
        $objarray = array("category"=>array("del_status"=>0));
        
        $response['categoryList'] = json_decode($this->General_model->general_function($objarray,$get_api_url),true);
        
     //echo json_encode($objarray); die;
        $objarray = array("menuitem"=>array("menuitem_master.menu_id"=>$menu_id),"join"=>"menu");
        
        
        $response['menuitem_data'] = json_decode($this->General_model->general_function($objarray,$get_api_url),true);
        
        //print_r($response['menuitem_data']);
        $this->load->view('Menu/cssLinks',$response);
		$this->load->view('Template/header');
		$this->load->view('Template/slider');
		$this->load->view('Menu/Edit');
		$this->load->view('Template/footer');
		$this->load->view('Menu/jqueryLinks'); 
       
    } 
    
 public function update_menu()
 {
      $api_url = $this->config->item('api_url');
      $up_api_url = $api_url."General/Update";
      $add_api_url = $api_url."General/Add";
   /*  echo "<pre>";
     print_r($_REQUEST); die();*/
     $objarray = array("menu"=>array(
            "menu_name"=>$this->input->post('menu_name'),
            "menu_code"=>$this->input->post('menu_code'),
            "menu_desc"=>$this->input->post('menu_desc')
        ),"where"=>array("menu_id"=>$this->input->post('menu_id')));
     
      $data = json_decode($this->General_model->general_function($objarray,$up_api_url),true);
     
     
    $delete_api_url =  $api_url."General/Remove";
    $objarray_del = array("menuitem"=>array("menu_id"=>$this->input->post('menu_id')));
        
        //echo json_encode($objarray_del); die;
        
    $response = $this->General_model->general_function($objarray_del,$delete_api_url);
    
     
    
     $menuid = $this->input->post('menu_id');
       for($i=0;$i<count($_REQUEST['category_id']);$i++)
        {
            $items = implode(",",$_REQUEST['food_items_'.$i.'']);
            $objarray = array("menuitem"=>array(
            "menu_id"=>$menuid,
            "menu_category_id"=>$_REQUEST['category_id'][$i],
            "menu_food_id"=>$items
        )); 
           //  echo json_encode($objarray); 
            $data_new = json_decode($this->General_model->general_function($objarray,$add_api_url),true);
        }
    // die();
        if($data_new)
        {
          $this->session->set_flashdata('success',"Updated Successfully");
          return redirect('MenuManagement');
        
        }
        else
        {
          $this->session->set_flashdata('success',"Some Error Occurred");
          return redirect('MenuManagement');
        }
     
     
    
 }
    
    
     public function get_food_items()
    {
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Get";
        
        $objarray = array("food"=>array("category_id"=>$this->input->post('category_id'),"del_status"=>0));
        
       // echo json_encode($objarray);
        
        $data = json_decode($this->General_model->general_function($objarray,$get_api_url),true);
        
        echo json_encode($data);
    }
    
      public function get_all_categories()
    {
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Get";
        
        $objarray = array("category"=>array("del_status"=>0));
        
       // echo json_encode($objarray);
        
        $data = json_decode($this->General_model->general_function($objarray,$get_api_url),true);
        
        echo json_encode($data);
    }
    
    
  
    
}
