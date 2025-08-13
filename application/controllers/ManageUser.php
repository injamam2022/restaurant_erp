<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManageUser extends CI_Controller {

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
        
        $objarray = array("role"=>array("del_status"=>0));
        
        $response = $this->General_model->general_function($objarray,$get_api_url);
        $data['roleList']=json_decode($response,true);
        
//        echo json_encode($data['roleList']);die;
        
		$this->load->view('ManageUser/cssLinks');
		$this->load->view('Template/header');
		$this->load->view('Template/slider');
		$this->load->view('ManageUser/mainSection',$data);
		$this->load->view('Template/footer');
		$this->load->view('ManageUser/jqueryLinks');
	}
    
    public function addUser()
    {
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Add";
        
        $role_id = $this->input->post('role_id');
        $email_id = $this->input->post('email_id');
        $password = $this->input->post('password');
        $password=base64_encode($password);
        
        $objarray = array("admin"=>array("role_id"=>$role_id,"email_id"=>$email_id,"password"=>$password,),"check"=>"email_id");
        
//        echo json_encode($objarray); die;
        
        $response = $this->General_model->general_function($objarray,$get_api_url);
        echo $response;
    }  
    
    public function editUser()
    {
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Update";
        
        $edit_role_id = $this->input->post('edit_role_id');
        $edit_email_id = $this->input->post('edit_email_id');
        $edit_password = $this->input->post('edit_password');
        $edit_password=base64_encode($edit_password);
        $GlobId = $this->input->post('GlobId');
        
        $objarray = array("admin"=>array("role_id"=>$edit_role_id,"email_id"=>$edit_email_id,"password"=>$edit_password),"check"=>"email_id","where"=>array("admin_id"=>$GlobId));
        
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
    
    public function SingleUser()
    {
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Get";
        
        $admin_id = $this->input->post('adminId');
      
        
        $objarray = array("admin"=>array("admin_id"=>$admin_id));
        
//        echo json_encode($objarray); die;
        
        $response = $this->General_model->general_function($objarray,$get_api_url);
        echo $response;
    }
    
    
}
