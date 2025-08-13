<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentAccount extends CI_Controller {

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
        
        if($this->session->userdata('student_login_id') == "")
        {
            redirect('StudentLogin');
        }
        
        
        $objarray = array("student"=>array("student_master.student_id"=>$this->session->userdata('student_login_id')),"join"=>"school");
        
        $data['student_info'] = json_decode($this->General_model->general_function($objarray,$get_api_url),true);
        
        
$objarray = array("order"=>array("order_master.student_id"=>$this->session->userdata('student_login_id')),"join"=>"address","order_by"=>array("order_id"=>"desc"));
        
//echo json_encode($objarray); die();
      
        $data['order_info'] = json_decode($this->General_model->general_function($objarray,$get_api_url),true);
        
        //print_r( $data['order_info']); die();
        
        /*$objarray = array("order"=>array("student_id"=>$this->session->userdata('student_login_id')));
      
        $data['order_info'] = json_decode($this->General_model->general_function($objarray,$get_api_url),true);*/
        
        
        
       
      
        
        $this->load->view('Include/header',$data);
        $this->load->view('StudentAccount/view');
		$this->load->view('Include/footer');
	}
    
    
    public function update_profile()
    {
        $api_url = $this->config->item('api_url');
        $update_api_url = $api_url."General/Update";
        
      /*  print_r($_REQUEST);*/
        
        //print_r($_FILES); die();
        
        
        $picture_name_2="";
        $picture2="";    
        if(!empty($_FILES['student_image']['name'])){
            $config['upload_path'] = './master_images/student_image';
            $config['allowed_types'] =  'jpg|jpeg|png|gif|pdf|docx';
             $config['max_size']    = '15000000';
            $config['file_name'] = time().$_FILES['student_image']['name'];
            //Load upload library and initialize configuration
            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            
            if($this->upload->do_upload('student_image')){
                $uploadData = $this->upload->data();
                 $picture_name_2 = $uploadData['file_name'];
            }else{
                 $picture_name_2 = "Problem";
            }
        }else{
             $picture_name_2 = $this->input->post('earlier_file');;
        }
        
        
        $full_name = $this->input->post('full_name');
        $year_group = $this->input->post('year_group');
        $classroom = $this->input->post('classroom');
        $dietary_req = $this->input->post('dietary_req');
        
        
        $student_id = $this->session->userdata('student_login_id');
        
        $objarray = array("student"=>array(
              "full_name"=>$full_name,
              "year_group"=>$year_group,
              "classroom"=>$classroom,
              "dietary_req"=>$dietary_req,
              "student_image"=>$picture_name_2
            ),"where"=>array("student_id"=>$student_id));
        
      
        
        
        $response = json_decode($this->General_model->general_function($objarray,$update_api_url),true);
        
        if($response['stat'] == 200)
        {
            $this->session->set_flashdata('success',"Account Updated Successfully");       
            redirect('StudentAccount');
        }
        
        
        
    }
    
    
    public function thankyou()
    {
        $order_d = $this->session->userdata('order_d');
        
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Get";
        
      
        
        
        $objarray = array("order"=>array("order_id"=>$order_d,"join"=>"orderdetails"));
        
        $data['student_order_info'] = json_decode($this->General_model->general_function($objarray,$get_api_url),true);
                          
        $this->load->view('Include/header',$data);
        $this->load->view('StudentAccount/thankyou');
		$this->load->view('Include/footer');
        
    }
    
    public function failed()
    {
        $this->load->view('Include/header');
        $this->load->view('StudentAccount/failed');
		$this->load->view('Include/footer');
    }
    
    public function get_single_order()
    {
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Getallordersgroup";
        
        $student_id = $this->session->userdata('student_login_id');
        $order_id = $_REQUEST['order_id'];
        
        $objarray = array("student_id"=>$student_id,"order_id"=>$order_id);
      // echo json_encode($objarray); 
        $dataorder_info = json_decode($this->General_model->general_function($objarray,$get_api_url),true);
        
        //print_r($dataorder_info);
        
        $returnarray = [];
        for($i=0;$i<count($dataorder_info);$i++)
        {
            $returnarray = $this->get_orders_via_date($dataorder_info[$i]['date_of_food'],$order_id);
            $dataorder_info[$i]['all_sub_order'] = $returnarray;
        }
        
        //print_r($returnarray);
        $res = array("stat"=>200,"all_list"=>$dataorder_info);
          echo json_encode($res);
        
        
    }
    
    public function get_orders_via_date($date,$order_id)
    {
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Getallordersresdate";
        $student_id = $this->session->userdata('student_login_id');
        $objarray = array("student_id"=>$student_id,"date"=>$date,"order_id"=>$order_id);
        
          $dataorder_info = json_decode($this->General_model->general_function($objarray,$get_api_url),true);
        
        return $dataorder_info;
        
    }
    
  
    
    
    
}
