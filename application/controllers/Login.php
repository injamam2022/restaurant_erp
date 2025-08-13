<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
       // echo $get_api_url;
        
        
        $objarray = array("role"=>array("del_status"=>0));
        
        $response = $this->General_model->general_function($objarray,$get_api_url);
        $data['roleList']=json_decode($response,true);
        
        // print_r($data['roleList']);
        // die();
        
       // echo $response."res";
        
		$this->load->view('Login/mainSection',$data);
	}
    
    public function submitLogin()
    {
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Get";

        $email_id = $this->input->post('email_id');
        $role_id = $this->input->post('role_id');
        $passwrd = $this->input->post('passwrd');
        $passwrd = base64_encode($passwrd);
            
        $objarray = array("admin"=>array("email_id"=>$email_id,"password"=>$passwrd,"role_id"=>$role_id),"check"=>"email_id,password,role_id");
        
        $response = $this->General_model->general_function($objarray,$get_api_url);
        
        $res=json_decode($response,true);
        
        if($res['stat']==200)
        {
            $this->session->set_userdata("admin_id",$res['all_list'][0]['admin_id']);
            
            //echo $this->session->userdata("admin_id");
            
            $this->session->set_userdata("admin_email_id",$res['all_list'][0]['email_id']);
            $this->session->set_userdata("role_id",$res['all_list'][0]['role_id']);
//            if($rememberMeStat == 1)
//            {
//                $cookie_name1 = "bm_user_name";
//                $cookie_value1 = $res['all_list'][0]['user_name'];
//                setcookie($cookie_name1, $cookie_value1, time() + (86400 * 365), "/"); // 86400 = 1 day
//            }
        }
      
        echo $response;
    }
}
