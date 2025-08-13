<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

	public function index()
	{
        $this->session->set_userdata("admin_id","");
        $this->session->set_userdata("admin_email_id","");
        
        header('Location: '.base_url('Login'));
    }
    
    
    public function student_logout()
    {
         $this->session->set_userdata("student_login_id","");
         header('Location: '.base_url());
    }
}