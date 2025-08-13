<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
    

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
        
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Get";
        
       
        
        $objarray = array("content"=>array("section"=>1,"del_status"=>0));
        $response = $this->General_model->general_function($objarray,$get_api_url);
        $data['banner_data']=json_decode($response,true);
        
        $objarray = array("content"=>array("section"=>2,"del_status"=>0));
        $response = $this->General_model->general_function($objarray,$get_api_url);
        $data['weprovide_data']=json_decode($response,true);
        
        $objarray = array("content"=>array("section"=>3,"del_status"=>0));
        $response = $this->General_model->general_function($objarray,$get_api_url);
        $data['aboutus_data']=json_decode($response,true);
        
        $objarray = array("content"=>array("section"=>4,"del_status"=>0));
        $response = $this->General_model->general_function($objarray,$get_api_url);
        $data['whatcompany_data']=json_decode($response,true);
        
        $objarray = array("content"=>array("section"=>5,"del_status"=>0));
        $response = $this->General_model->general_function($objarray,$get_api_url);
        $data['client_data']=json_decode($response,true);
        
        $objarray = array("content"=>array("section"=>6,"del_status"=>0));
        $response = $this->General_model->general_function($objarray,$get_api_url);
        $data['forschool_data']=json_decode($response,true);
        
        $objarray = array("content"=>array("section"=>7,"del_status"=>0));
        $response = $this->General_model->general_function($objarray,$get_api_url);
        $data['forparents_data']=json_decode($response,true);
        
		$this->load->view('Include/header',$data);
        $this->load->view('Home/view');
		$this->load->view('Include/footer');
		
	}
    
    public function about_us()
    {
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Get";
        
        
        $objarray = array("content"=>array("section"=>8,"del_status"=>0));
        $response = $this->General_model->general_function($objarray,$get_api_url);
        $data['aboutusbanner_data']=json_decode($response,true);
        
        
        $objarray = array("content"=>array("section"=>9,"del_status"=>0));
        $response = $this->General_model->general_function($objarray,$get_api_url);
        $data['values_data']=json_decode($response,true);
        
        $this->load->view('Include/header',$data);
        $this->load->view('About/view');
		$this->load->view('Include/footer');
    }
    
    public function allergy()
    {
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Get";
        
        
        $objarray = array("content"=>array("section"=>10,"del_status"=>0));
        $response = $this->General_model->general_function($objarray,$get_api_url);
        $data['banner_data']=json_decode($response,true);
        
        $objarray = array("content"=>array("section"=>11,"del_status"=>0));
        $response = $this->General_model->general_function($objarray,$get_api_url);
        $data['values_data']=json_decode($response,true);
        
        $this->load->view('Include/header',$data);
        $this->load->view('Cmspages/allergensview');
		$this->load->view('Include/footer');
    }
    
    //new pages
    public function foodmenus()
    {
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Get";
        
        
        $objarray = array("content"=>array("section"=>13,"del_status"=>0));
        $response = $this->General_model->general_function($objarray,$get_api_url);
        $data['banner_data']=json_decode($response,true);
        
        $objarray = array("content"=>array("section"=>14,"del_status"=>0));
        $response = $this->General_model->general_function($objarray,$get_api_url);
        $data['values_data']=json_decode($response,true);
        
        $this->load->view('Include/header',$data);
        $this->load->view('Cmspages/foodview');
		$this->load->view('Include/footer');
    }
    
        public function cost_pricing()
    {
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Get";
        
        
        $objarray = array("content"=>array("section"=>15,"del_status"=>0));
        $response = $this->General_model->general_function($objarray,$get_api_url);
        $data['banner_data']=json_decode($response,true);
        
        $objarray = array("content"=>array("section"=>16,"del_status"=>0));
        $response = $this->General_model->general_function($objarray,$get_api_url);
        $data['values_data']=json_decode($response,true);
        
        $this->load->view('Include/header',$data);
        $this->load->view('Cmspages/costpricing');
		$this->load->view('Include/footer');
    }
    
    
        public function water_supply()
    {
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Get";
        
        
        $objarray = array("content"=>array("section"=>17,"del_status"=>0));
        $response = $this->General_model->general_function($objarray,$get_api_url);
        $data['banner_data']=json_decode($response,true);
        
        $objarray = array("content"=>array("section"=>18,"del_status"=>0));
        $response = $this->General_model->general_function($objarray,$get_api_url);
        $data['values_data']=json_decode($response,true);
        
        $this->load->view('Include/header',$data);
        $this->load->view('Cmspages/watersupply');
		$this->load->view('Include/footer');
    }
    
    
        public function cashless_system()
    {
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Get";
        
        
        $objarray = array("content"=>array("section"=>19,"del_status"=>0));
        $response = $this->General_model->general_function($objarray,$get_api_url);
        $data['banner_data']=json_decode($response,true);
        
        $objarray = array("content"=>array("section"=>20,"del_status"=>0));
        $response = $this->General_model->general_function($objarray,$get_api_url);
        $data['values_data']=json_decode($response,true);
        
        $this->load->view('Include/header',$data);
        $this->load->view('Cmspages/cashless_system');
		$this->load->view('Include/footer');
    }
    
        public function changeyour_provider()
    {
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Get";
        
        
        $objarray = array("content"=>array("section"=>21,"del_status"=>0));
        $response = $this->General_model->general_function($objarray,$get_api_url);
        $data['banner_data']=json_decode($response,true);
        
        $objarray = array("content"=>array("section"=>22,"del_status"=>0));
        $response = $this->General_model->general_function($objarray,$get_api_url);
        $data['values_data']=json_decode($response,true);
        
        $this->load->view('Include/header',$data);
        $this->load->view('Cmspages/changeyour_provider');
		$this->load->view('Include/footer');
    }
    
    
    public function school_meals()
    {
         $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Get";
        
        
        $objarray = array("content"=>array("section"=>23,"del_status"=>0));
        $response = $this->General_model->general_function($objarray,$get_api_url);
        $data['banner_data']=json_decode($response,true);
        
        $objarray = array("content"=>array("section"=>24,"del_status"=>0));
        $response = $this->General_model->general_function($objarray,$get_api_url);
        $data['values_data']=json_decode($response,true);
        
        $this->load->view('Include/header',$data);
        $this->load->view('Cmspages/school_meals');
		$this->load->view('Include/footer');
    }
    

    
    
}
