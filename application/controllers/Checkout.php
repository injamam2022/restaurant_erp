<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

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
        
        
        $get_cartitems = $api_url."General/GetCartItems";
    
        $student_id = $this->session->userdata('student_login_id');
        
        $objarray    = array("student_id"=>$student_id);
        
       // echo json_encode($objarray); die();
        
        $data['cartlist'] = json_decode($this->General_model->general_function($objarray,$get_cartitems),true);
        
        
         $objarray = array("address"=>array("del_status"=>0,"student_id"=>$this->session->userdata('student_login_id')));
         $data['addresslist'] = json_decode($this->General_model->general_function($objarray,$get_api_url),true);
        
        
       /*for sagepay*/ 
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://pi-test.sagepay.com/api/v1/merchant-session-keys",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => '{ "vendorName": "getfresh" }',
            CURLOPT_HTTPHEADER => array(
                "Authorization:Basic R2ZvUWxFY1dtY1RBeFJDaXU2ODFaakNTN01SR0ZGdXJ6ZkpqeWsxT0ZGMzFBektEODI6NVZkN1RDMTB3ZWNucHFJN2RvYUwwUzAzUm8wZHBKNmY5cGJ1eWxOdWtaRFNockc2Rm9EeVI0ZFR3dTY3RDUzMkI=",
                "Cache-Control: no-cache",
                "Content-Type: application/json"
            )
        ));

        $response = curl_exec($curl);
        $data['payment_data'] = json_decode($response, true);
        $err = curl_error($curl);
      /*  echo "hello";
        print_r($response);*/
        curl_close($curl);
        /*for sagepay*/ 
        
        $this->load->view('Include/header',$data);
        $this->load->view('Checkout/view');
		$this->load->view('Include/footer');
	}
    
    function update_addess()
    {
        $api_url = $this->config->item('api_url');
        $add_api_url = $api_url."General/Add";
        $up_api_url = $api_url."General/Update";
        
        $stat = $_REQUEST['stat'];
        $billing_name = $_REQUEST['billing_name'];
        $billing_phone = $_REQUEST['billing_phone'];
        $billing_address = $_REQUEST['billing_address'];
        $pincode = $_REQUEST['pincode'];
        
         $student_id = $this->session->userdata('student_login_id');
        
        if($stat == 1)
        {
             $objarray = array("address"=>array("student_id"=>$student_id,"billing_name"=>$billing_name,"billing_phone"=>$billing_phone,"billing_address"=>$billing_address,"pincode"=>$pincode));
             $data_add = json_decode($this->General_model->general_function($objarray,$add_api_url),true);
        }
        
         if($stat == 2)
        {
             $objarray = array("address"=>array("billing_name"=>$billing_name,"billing_phone"=>$billing_phone,"billing_address"=>$billing_address,"pincode"=>$pincode),"where"=>array("student_id"=>$student_id));
             $data_add = json_decode($this->General_model->general_function($objarray,$up_api_url),true);
        }
        
       echo json_encode($data_add);
        
        
    }
    
    
    function add_order()
    {
        
        
        
        $merchantSessionKey = $_POST["merchantSessionKey"];
        $cardIdentifier = $_POST["card-identifier"];

        $amount = $_POST["amount"];
        $currency = $_POST["currency"];

        $firstName = $_POST["first_name"];
        $lastName = $_POST["last_name"];

        $billing_address = $_POST["billing_address"];
        $billing_city = $_POST["billing_city"];
        $billing_zip = $_POST["billing_zip"];
        $billing_country = $_POST["billing_country"];

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://pi-test.sagepay.com/api/v1/transactions",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => '{' .
            '"transactionType": "Payment",' .
            '"paymentMethod": {' .
            '    "card": {' .
            '        "merchantSessionKey": "' . $merchantSessionKey . '",' .
            '        "cardIdentifier": "' . $cardIdentifier . '"' .
            '    }' .
            '},' .
            '"vendorTxCode": "SagePayExample' . time() . '",' .
            '"amount": ' . $amount . ',' .
            '"currency": "' . $currency . '",' .
            '"description": "Sage Payment Integration Example",' .
            '"apply3DSecure": "UseMSPSetting",' .
            '"customerFirstName": "' . $firstName . '",' .
            '"customerLastName": "' . $lastName . '",' .
            '"billingAddress": {' .
            '    "address1": "' . $billing_address . '",' .
            '    "city": "' . $billing_city . '",' .
            '    "postalCode": "' . $billing_zip . '",' .
            '    "country": "' . $billing_country . '"' .
            '},' .
            '"entryMethod": "Ecommerce"' .
            '}',
            CURLOPT_HTTPHEADER => array(
                "Authorization: Basic R2ZvUWxFY1dtY1RBeFJDaXU2ODFaakNTN01SR0ZGdXJ6ZkpqeWsxT0ZGMzFBektEODI6NVZkN1RDMTB3ZWNucHFJN2RvYUwwUzAzUm8wZHBKNmY5cGJ1eWxOdWtaRFNockc2Rm9EeVI0ZFR3dTY3RDUzMkI=",
                "Cache-Control: no-cache",
                "Content-Type: application/json"
            ),
        ));

        $response = curl_exec($curl);
        $result = json_decode($response);

       // print_r($result);
        $err = curl_error($curl);

        curl_close($curl);
        
        $serialize_payment_resp = serialize($result);
//die();
        
        //if ppayment success
        if(!empty($result->status) && $result->status == "Ok") { 
        
        
        
        
        
        
        $api_url = $this->config->item('api_url');
        $add_api_url = $api_url."General/Add";
        $get_api_url = $api_url."General/Get";
        $remove_api_url = $api_url."General/Remove";
        
//        $objarray = array("cart"=>array("del_status"=>0,"student_id"=>$this->session->userdata('student_login_id')));
//        
//        $datacartlist = json_decode($this->General_model->general_function($objarray,$get_api_url),true);
        
        
        $get_cartitems = $api_url."General/GetCartItems";
    
        $student_id = $this->session->userdata('student_login_id');
        
        $objarray    = array("student_id"=>$student_id);
        
       // echo json_encode($objarray); die();
        
        $datacartlist = json_decode($this->General_model->general_function($objarray,$get_cartitems),true);
        
        $objarray = array("address"=>array("del_status"=>0,"student_id"=>$this->session->userdata('student_login_id')));
        $dataaddress = json_decode($this->General_model->general_function($objarray,$get_api_url),true);
          
        $student_id = $this->session->userdata('student_login_id');
        $school_id = $this->session->userdata('school_id');
        $timeslot_id = $this->session->userdata('timeslot_id');
        $address_id = $dataaddress['all_list'][0]['address_id'];
        $date = date('Y-m-d');
         $objarray = array("order"=>array("student_id"=>$student_id,"payment_info"=>$serialize_payment_resp,"school_id"=>$school_id,"address_id"=>$address_id,"order_date"=>$date));
        
        //echo json_encode($objarray); die();
     
         $data_add = json_decode($this->General_model->general_function($objarray,$add_api_url),true);
        
       /* echo "<pre>";
        print_r($datacartlist);*/
        
        for($i=0;$i<count($datacartlist);$i++)
        {
          $objarray = array("orderdetails"=>array("order_id"=>$data_add['insert_id'],
                            "school_id"=>$school_id,
                            "food_id"=>$datacartlist[$i]['food_id'],
                            "quantity"=>$datacartlist[$i]['quantity'],
                            "timeslot_id"=>$datacartlist[$i]['timeslot_id'],
                            "date_of_food"=>$datacartlist[$i]['date_of_food'],
                            "student_id"=>$this->session->userdata('student_login_id'),"details_order_date"=>$date));
            //echo json_encode($objarray);
          $data_add_orderdetails = json_decode($this->General_model->general_function($objarray,$add_api_url),true);

        }
        
        //print_r($data_add_orderdetails); die();
        
        
        
        if($data_add['insert_id'] > 0)
        {
          $order_id = $this->session->set_userdata('order_d',$data_add['insert_id']);
            
          $objarray = array("cart"=>array("del_status"=>0,"student_id"=>$this->session->userdata('student_login_id')));
          $data_remove = json_decode($this->General_model->general_function($objarray,$remove_api_url),true);
          redirect('StudentAccount/thankyou');
        }
        
        
        
    } // success payment
    else
    {
          redirect('StudentAccount/failed');
    }
   
    
    }
    
    
}
