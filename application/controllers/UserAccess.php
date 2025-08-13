<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserAccess extends CI_Controller {

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
        
        $objarray = array("admin"=>array(),"join"=>"role");
        
        $response = $this->General_model->general_function($objarray,$get_api_url);
        $data['userList']=json_decode($response,true);
        
       
        
        $objarray = array("page"=>array("del_status"=>0));
        
        $response = $this->General_model->general_function($objarray,$get_api_url);
        $data['pageList']=json_decode($response,true);
        
        //echo json_encode($data['pageList']);die;
        
		$this->load->view('UserAccess/cssLinks');
		$this->load->view('Template/header');
		$this->load->view('Template/slider');
		$this->load->view('UserAccess/mainSection',$data);
		$this->load->view('Template/footer');
		$this->load->view('UserAccess/jqueryLinks');
	}
    
 
    
    public function editUserAccess()
    {
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Update";
        
        $edit_admin_id = $this->input->post('edit_admin_id');
        $edit_page_id = $this->input->post('edit_page_id');
        $edit_page_id=implode(",",$edit_page_id);
        
        $objarray = array("admin"=>array("page_id"=>$edit_page_id),"where"=>array("admin_id"=>$edit_admin_id));
        
//        echo json_encode($objarray); die;
        
        $response = $this->General_model->general_function($objarray,$get_api_url);
        echo $response;
    } 
    
    public function deleteUser()
    {
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Delete";
        
        
        $admin_id = $this->input->post('admin_id');
        
        $objarray = array("admin"=>array("admin_id"=>$admin_id));
        
//        echo json_encode($objarray); die;
        
        $response = $this->General_model->general_function($objarray,$get_api_url);
        echo $response;
    } 
    
    public function SingleUserAccess()
    {
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Get";
        
        $admin_id = $this->input->post('admin_id');
      
        
        $objarray = array("admin"=>array("admin_id"=>$admin_id));
        
//        echo json_encode($objarray); die;
        
        $response = $this->General_model->general_function($objarray,$get_api_url);
        echo $response;
    }
    
    
}
