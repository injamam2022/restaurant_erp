<?php

function pr($value){
    echo '<pre>';
    print_r($value);
    echo '</pre>';
    }

	 function getlistitem()
	{
         if (!defined('BASEPATH')) exit('No direct script access allowed');
        
        $CI =& get_instance();

        $api_url = $CI->config->item('api_url');
        $get_api_url = $api_url."General/Get";

        $objarray = array("admin"=>array("email_id"=>$CI->session->userdata('admin_email_id')),"join"=>"role");

        $response = $CI->General_model->general_function($objarray,$get_api_url);
        $data['userList']=json_decode($response,true);

        $objarray = array("page"=>array("del_status"=>0),"order_by"=>array("display_status"=>"asc"));

        $response = $CI->General_model->general_function($objarray,$get_api_url);
        $data['pageList']=json_decode($response,true);
         
         
        //echo "sessionid".$CI->session->userdata('admin_email_id');
        // pr($data['userList']);
         //pr($data['pageList']);
        /* echo "seperate";
         print_r($data['pageList']);*/
         
         $page_id=$data['userList']['all_list'][0]['page_id'];
         $page_id=explode(",",$page_id);
         
         
         for($p=0;$p<count($page_id);$p++)
                 {

                     for($j=0;$j<count($data['pageList']['all_list']);$j++)
                        {
                            if($data['pageList']['all_list'][$j]['page_id']==$page_id[$p])
                            {

                                 
                                
                                 echo '<li class="@@indexactive"><a href="'.base_url(''.$data['pageList']['all_list'][$j]['controller'].'').'">'.$data['pageList']['all_list'][$j]['fav_icon'].''.$data['pageList']['all_list'][$j]['page_name'].'</a></li>';
                              



                            }

                       }
                 }
                                            
                                             

      
        
       
	}



function email_send($email,$message,$subject)
{
    
    
/*$headers = "From: info@getfresh.com\r\n";
$headers .= "Reply-To: info@getfresh.com\r\n";
$headers .= "Return-Path: info@getfresh.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

mail($email,$subject,$message,$headers);
if (  ) {
   echo "The email has been sent!";
   } else {
   echo "The email has failed!";
   }*/
    
$CI =& get_instance();
$config = Array(
    'protocol' => 'smtp',
    'smtp_host' => 'ssl://smtp.googlemail.com',
    'smtp_port' => 465,
    'smtp_user' => 'testmailalld@gmail.com',
    'smtp_pass' => 'test@!23',
    'mailtype'  => 'html', 
    'charset'   => 'iso-8859-1'
);
$CI->load->library('email', $config);
$CI->email->set_newline("\r\n");

    


$CI->email->from('testmailalld@gmail.com');
// Set to, from, message, etc.
$CI->email->to($email);
$CI->email->subject($subject);
$CI->email->message($message);

    
    
// Set to, from, message, etc.
//echo "hello";
$result = $CI->email->send();
    
//echo $CI->email->print_debugger();

    
    
}

function encode_url($string, $key="", $url_safe=TRUE)
    {
    $CI =& get_instance();
    $CI->load->library('encrypt');
    if($key==null || $key=="")
    {
    $key="something";
    }
    $ret = $CI->encrypt->encode($string, $key);
    if ($url_safe)
    {
    $ret = strtr(
    $ret,
    array(
    '+' => '.',
    '=' => '-',
    '/' => '~'
    )
    );
    }
    return $ret;
    }

    function decode_url($string, $key="")
    {
    $CI =& get_instance();
    $CI->load->library('encrypt');
    if($key==null || $key=="")
    {
    $key="something";
    }
    $string = strtr(
    $string,
    array(
    '.' => '+',
    '-' => '=',
    '~' => '/'
    )
    );
    return $CI->encrypt->decode($string, $key);
    }
    



function get_meal_info($timeslot,$date)
{
    //return $timeslot."=====".$date;
    
    $CI =& get_instance();
        
    $api_url = $CI->config->item('api_url');
    $get_api_url = $api_url."General/Getmeal_info";
    
     $objarray = array("timeslot_id"=>$timeslot,"date"=>$date);
        
       // echo json_encode($objarray);
        
    $data = json_decode($CI->General_model->general_function($objarray,$get_api_url),true);

    return $data;
}
   
    
   
    function get_food_item_list_rescat($cat_id)
        
    {
        $CI =& get_instance();
        
        $api_url = $CI->config->item('api_url');
        $get_api_url = $api_url."General/Get";
        
        $objarray = array("food"=>array("del_status"=>0,"category_id"=>$cat_id));
        
       // echo json_encode($objarray);
        
        $data = json_decode($CI->General_model->general_function($objarray,$get_api_url),true);
        
        return $data;
    }


function get_items_in_minicart($timeslot_id,$date)
{
        $CI =& get_instance();
        $api_url = $CI->config->item('api_url');
        $get_api_url = $api_url."General/Getminicart";
        
        $student_id = $CI->session->userdata('student_login_id');
        $timeslot_id = $timeslot_id;
        $date =  $date;
       
        $objarray    = array("student_id"=>$student_id,"timeslot_id"=>$timeslot_id,"date_of_food"=>$date);
        
      //  echo json_encode($objarray); die();
        
        $res = json_decode($CI->General_model->general_function($objarray,$get_api_url),true);
    
        return $res;
        
       /*  if(count($res) > 0)
         {
            $resp = array("status"=>200,"resluts"=>$res); 
         }
        else
        {
            $resp = array("status"=>400,"resluts"=>0); 
        }
        
        echo json_encode($resp);*/
}
 function idToShortURL($n)  
	{ 
		// Map to store 62 possible characters 
		$map = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"; 
		$shorturl = []; 
	
		// Convert given integer id to a base 62 number 
		while ($n)  
		{ 
			// use above map to store actual character 
			// in short url 
			$shorturl[]=$map[$n % 62]; 
			$n = floor($n / 62); 
		} 
		// Reverse shortURL to complete base conversion 
		$shorturl= array_reverse($shorturl); 
		return implode($shorturl); 
	} 
	function charCodeAt($string, $offset) {
		$string = mb_substr($string, $offset, 1);
		list(, $ret) = unpack('S', mb_convert_encoding($string, 'UTF-16LE'));
		return $ret;
	  }
	// Function to get integer ID back from a short url 
	function shortURLtoID($shortURL) { 
		$id = 0; // initialize result 
		// A simple base conversion logic 
		$shortURL = str_split($shortURL);
		for ($i = 0; $i < count($shortURL); $i++) { 
			if ('a' <= $shortURL[$i] && $shortURL[$i] <= 'z') 
				$id = $id * 62 + charCodeAt($shortURL[$i],0) - charCodeAt('a',0); 
			if ('A' <= $shortURL[$i] && $shortURL[$i] <= 'Z') 
				$id = $id * 62 + charCodeAt($shortURL[$i],0) - charCodeAt('A',0) + 26; 
			if ('0' <= $shortURL[$i] && $shortURL[$i] <= '9') 
				$id = $id * 62 +charCodeAt($shortURL[$i],0) - charCodeAt('0',0) + 52; 
		} 
		return $id; 
	} 


    
?>
