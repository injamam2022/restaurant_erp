<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentRegistration extends CI_Controller {

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
        
      
        
        $this->load->view('Include/header');
        $this->load->view('StudentRegistration/view');
		$this->load->view('Include/footer');
	}
    
    public function check_schoolcode()
    {
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Get";
        
        
        $school_code = $this->input->post('school_code');
        
        $objarray = array("school"=>array("school_code"=>$school_code));
        
        $response = json_decode($this->General_model->general_function($objarray,$get_api_url),true);
        
        if($response['stat'] == 200)
        {
            $this->session->set_userdata('school_code', $school_code);
            $this->session->set_userdata('school_id', $response['all_list'][0]['school_id']);
        }
        
        echo json_encode($response);
        
        
    }
    
    public function register()
    {
        
        $api_url = $this->config->item('api_url');
        $add_api_url = $api_url."General/Add";
        $get_api_url = $api_url."General/Get";
        
        
        $full_name = $this->input->post('full_name');
        $year_group = $this->input->post('year_group');
        $classroom = $this->input->post('classroom');
        $dietary_req = $this->input->post('dietary_req');
        $student_email = $this->input->post('student_email');
        $pssword = base64_encode($this->input->post('pssword'));
        
        
        
      
        
          $objarray = array("student"=>array(
              "full_name"=>$full_name,
              "year_group"=>$year_group,
              "classroom"=>$classroom,
              "dietary_req"=>$dietary_req,
              "student_email"=>$student_email,
              "school_id"=>$this->session->userdata('school_id'),
              "pssword"=>$pssword));
        
        
        $response = json_decode($this->General_model->general_function($objarray,$add_api_url),true);
        
          if($response['stat'] == 200)
        {
            $this->session->set_userdata('student_login_id', $response['insert_id']);
        }
        
        echo json_encode($response);
        
        
    }
    
    
    public function verify_email()
    {
        
        $api_url = $this->config->item('api_url');
        $add_api_url = $api_url."General/Add";
        $get_api_url = $api_url."General/Get";
        
          $student_email = $this->input->post('student_email');
        
        
        $objarray = array("student"=>array("student_email"=>$student_email));
        
        $response = json_decode($this->General_model->general_function($objarray,$get_api_url),true);
        
        if($response['stat'] == 200)
        {
            $res = array("status"=>1,"msg"=>"Email Already Exists.KIndly Try With Another");
        }
        else 
        {
            $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
            
            $randomkeys = substr(str_shuffle($permitted_chars), 0, 6);
        
            
            
           $subject = "Verfify Your Email";
            
           $message = "Please Verify Your Email With This Code :-  ".$randomkeys;
        
           email_send($student_email,$message,$subject);
            
         $this->session->set_userdata('student_email', $student_email);
         $this->session->set_userdata('student_code_email', $randomkeys);
            
            $res = array("status"=>2,"msg"=>"Email Sent Your Mail Id.Kindly Enter Code Below. ");
        }
        
        echo json_encode($res);
        
    }
    
    
    
    public function verify_code()
    {
      $student_email = $this->input->post('student_email');
      $student_verify_code = $this->input->post('student_verify_code');
        
          $ses_stored_email = $this->session->userdata('student_email');
          $ses_stored_code = $this->session->userdata('student_code_email');
        
       // echo $student_verify_code."======".$ses_stored_code;
        
        if($student_email == $ses_stored_email && $student_verify_code == $ses_stored_code)
        {
             $res = array("status"=>1,"msg"=>"Code Verified Successfully");
        }
        else if($student_email == $ses_stored_email && $student_verify_code != $ses_stored_code)
        {
              $res = array("status"=>2,"msg"=>"Code Not Verified");
        }
        
        echo json_encode($res);
        
    }
    
    
    public function verify_login()
    {
        $api_url = $this->config->item('api_url');
        $add_api_url = $api_url."General/Add";
        $get_api_url = $api_url."General/Get";
       $student_email = $this->input->post('student_email');
       $student_password = base64_encode($this->input->post('student_password'));
        
         //echo $get_api_url;
        $objarray = array("student"=>array("student_email"=>$student_email,"pssword"=>$student_password));
        
        //echo json_encode($objarray); 
        
        $response = json_decode($this->General_model->general_function($objarray,$get_api_url),true);
        
       // print_r($response); die();
        
        if($response['stat'] == 200)
        {
              $this->session->set_userdata('student_login_id', $response['all_list'][0]['student_id']);
              $this->session->set_userdata('school_id', $response['all_list'][0]['school_id']);
            $res = array("status"=>1,"msg"=>"Login Successfully");
        }
        else if($response['stat'] == 500)
        {
            $res = array("status"=>2,"msg"=>"Login Failed.Please Enter Valid Email And Password");
        }

        
        echo json_encode($res);
    }
    
    
    public function forgot_password()
    {
        $api_url = $this->config->item('api_url');
        $add_api_url = $api_url."General/Add";
        $get_api_url = $api_url."General/Get";
        $student_email = $this->input->post('student_email');
        
         //echo $get_api_url;
        $objarray = array("student"=>array("student_email"=>$student_email));
        
        //echo json_encode($objarray); 
        
        $response = json_decode($this->General_model->general_function($objarray,$get_api_url),true);
        
        
        
        
         if($response['stat'] == 200)
        {
             
             $password = base64_decode($response['all_list'][0]['pssword']);
             $subject = "Recovery Of Password";
             $message = "Your Password For Login Is:-  ".$password;
             
             //echo $message;
        
            email_send($student_email,$message,$subject);
            $res = array("status"=>1,"msg"=>"Your Password Sent To Your Email.");
        }
        else if($response['stat'] == 500)
        {
            $res = array("status"=>2,"msg"=>"Your Email Id Registered At Our Portal.");
        }
        
        echo json_encode($res);
        
        
    }
   
    
    
}
