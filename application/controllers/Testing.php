<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testing extends CI_Controller {

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
      public function __construct(){
        parent::__construct();
      
      }
    
    
    
    
	public function index()
	{
		//$this =& get_instance();

		$email = "injilovesphp@gmail.com";
		$subject = "TEST";
		$message = "hello";
		$config = Array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'testmailalld@gmail.com',
			'smtp_pass' => 'test@!23',
			'mailtype'  => 'html', 
			'charset'   => 'iso-8859-1'
		);
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");
		
			
		
		
		$this->email->from('testmailalld@gmail.com');
		// Set to, from, message, etc.
		$this->email->to($email);
		$this->email->subject($subject);
		$this->email->message($message);
		
			
			
		// Set to, from, message, etc.
		//echo "hello";
		$result = $this->email->send();
       
		echo $this->email->print_debugger();
	}
    
    
    
   
    
}
