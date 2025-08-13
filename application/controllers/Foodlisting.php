<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Foodlisting extends CI_Controller {

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
        
        
        $objarray = array("timeslot"=>array("del_status"=>0));
        
        $data['timeslotList'] = json_decode($this->General_model->general_function($objarray,$get_api_url),true);
        
        $school_id = $this->session->userdata('school_id');
        $objarray = array("assignmenu"=>array("assignmenu_master.school_id"=>$school_id),"join"=>"timeslot");
        
        /*echo json_encode($objarray);
        
        die();*/
        
        $data['assignmenuList'] = json_decode($this->General_model->general_function($objarray,$get_api_url),true);
      
        
        $this->load->view('Include/header',$data);
        $this->load->view('Foodlisting/view');
		$this->load->view('Include/footer');
	}
  
    
    public function get_food_items_categories()
    {
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Get";
        
        
        $menu_id = $this->input->post('menu_id');
        $date = $this->input->post('date');
        $timeslot = $this->input->post('timeslot');
        $school_id = $this->session->userdata('school_id');
        $this->session->set_userdata('menu_id',$menu_id);
        $this->session->set_userdata('date',$date);
        $this->session->set_userdata('timeslot',$timeslot);
        
        
        
         
         /*$objarray = array("assignmenu"=>array("del_status"=>0,"timeslot_id"=>$time_slot_id,"school_id"=>$school_id));
        
         $assignmenu_data = json_decode($this->General_model->general_function($objarray,$get_api_url),true);*/
        
        
        //print_r($assignmenu_data);
        
       /* $array_menu = array();
        $catregory = array();
        for($i=0;$i<count($assignmenu_data['all_list']);$i++)
        {
            $array_menu[] = $assignmenu_data['all_list'][$i]['menu_id'];*/
            
            $objarray = array("menuitem"=>array("menuitem_master.menu_id"=>$menu_id),"join"=>"menu");
        
            //echo json_encode($objarray);
            
            $catregory = json_decode($this->General_model->general_function($objarray,$get_api_url),true);
      /*  }*/
        
       // print_r($catregory);
        
        
        
        for($k=0;$k<count($catregory['all_list']);$k++)
        {
          //echo "hello";
          //echo $catregory['all_list'][$k]['menu_category_id'];
          $names  = $this->get_category_name($catregory['all_list'][$k]['menu_category_id']);
            
          $catregory['all_list'][$k]['cat_name'] = $names;
        }
        
       //print_r($catregory['all_list']);
if(count($catregory['all_list']) > 0)
{
      $res = array("status"=>200,"resluts"=>$catregory['all_list']);
} 
        else 
{ 
     $res = array("status"=>400,"resluts"=>$catregory['all_list']);
}
    
      echo json_encode($res);        
        
      
        
    }
    
    public function get_food_items()
    {
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Get";
        
        $menuitem_id = $_REQUEST['menuitem_id'];
        $objarray = array("menuitem"=>array("del_status"=>0,"menu_category_id"=>$this->input->post('category_id'),"menuitem_id"=>$menuitem_id));
            
        $fooditems = json_decode($this->General_model->general_function($objarray,$get_api_url),true);
        
      /*  echo "<pre>";
        print_r($fooditems);*/
        $food_ar = array();
        $all_food_ids = "";
        for($i=0;$i<count($fooditems['all_list']);$i++)
        {
            
        $all_food_ids .=  $fooditems['all_list'][$i]['menu_food_id'].",";
          
        }
        $data = rtrim($all_food_ids,",");
        //echo $data;
        
        $food_ar[] = $this->get_food_items_cat($data);
        
        
        /*echo "food_arry";
        echo "<pre>";*/
        
        if(count($food_ar) >= 1)
        {
            $res = array("status"=>200,"resluts"=>$food_ar);
        }
        else {
            
            $res = array("status"=>400,"resluts"=>$food_ar);
        }
        
        
        echo json_encode($res);        
       
        
        
    }
    
    
    public function get_food_items_cat($food_ids)
    {
        
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Get";
        $exp_ar_food = explode(",",$food_ids);
       // return $exp_ar_food;
        $food_array = array();
        $student_id = $this->session->userdata('student_login_id');
        
        $date = $this->session->userdata('date');
        $timeslot = $this->session->userdata('timeslot');
        
        
        for($m=0;$m<count($exp_ar_food);$m++)
        {
        $objarray = array("food"=>array("del_status"=>0,"food_id"=>$exp_ar_food[$m]));
        $fooditems = json_decode($this->General_model->general_function($objarray,$get_api_url),true);
      
        $objar    = array("cart"=>array("del_status"=>0,"food_id"=>$exp_ar_food[$m],"student_id"=>$student_id),"timeslot_id"=>$timeslot);
       // echo json_encode($objar); die();
        $cart_data = json_decode($this->General_model->general_function($objar,$get_api_url),true);
        
       // echo $cart_data['all_list'][0]['date_of_food']; die();
        if($cart_data['stat'] == 200 && $date == $cart_data['all_list'][0]['date_of_food'])
        {
            $fooditems['all_list'][0]['cart_stat'] = 1;
            $fooditems['all_list'][0]['cart_quantity'] = $cart_data['all_list'][0]['quantity'];
            $fooditems['all_list'][0]['cart_id'] = $cart_data['all_list'][0]['cart_id'];
        }
        else 
        {
              $fooditems['all_list'][0]['cart_stat'] = 0;
        }
         
        $food_array[] = $fooditems['all_list'][0];
     
        }
        return $food_array;
      
        
    }
    
    public function get_category_name($category_id)
    {
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Get";
        
        //$category_id = $this->input->post('category_id');
        
         
        $objarray = array("category"=>array("del_status"=>0,"category_id"=>$category_id));
        
        $category = json_decode($this->General_model->general_function($objarray,$get_api_url),true);
        
        
        return $category['all_list'][0]['cat_name'];
        
       // echo json_encode($category);
        
        
    }
    
    public function add_items_cart()
    {
        $api_url = $this->config->item('api_url');
        $add_api_url = $api_url."General/Add";
        
        
        $food_id = $this->input->post('food_id');
        $student_id = $this->session->userdata('student_login_id');
        $quantity = $this->input->post('quantity');
        
        $menu_id = $this->session->userdata('menu_id');
        $date = $this->session->userdata('date');
        $timeslot_id = $this->session->userdata('timeslot');
        
        
        $objarray = array("cart"=>array("food_id"=>$food_id,"student_id"=>$student_id,"quantity"=>$quantity,"timeslot_id"=>$timeslot_id,"date_of_food"=>$date));

        
       // echo json_encode($objarray); die();

        
       // echo json_encode($objarray); die();
        
        $add_data = json_decode($this->General_model->general_function($objarray,$add_api_url),true);
        $add_data['date_added'] = $date;
        $add_data['timeslot_id'] = $timeslot_id;
        echo json_encode($add_data);
        
    }
    
    
    public function update_cart()
    {
        $api_url = $this->config->item('api_url');
        $up_api_url = $api_url."General/Update";
        
        
        $food_id = $this->input->post('food_id');
        $cart_id = $this->input->post('cart_id');
        $student_id = $this->session->userdata('student_login_id');
        $quantity = $this->input->post('quantity');
        
        $menu_id = $this->session->userdata('menu_id');
        $date = $this->session->userdata('date');
        $timeslot_id = $this->session->userdata('timeslot');
        
        $objarray = array("cart"=>array("quantity"=>$quantity),"where"=>array("cart_id"=>$cart_id));

        //echo json_encode($objarray);
        $update_data = json_decode($this->General_model->general_function($objarray,$up_api_url),true);
        
       echo json_encode($update_data);
        
        
    }
   
    
    
}
