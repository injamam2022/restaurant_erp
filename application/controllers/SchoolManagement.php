<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SchoolManagement extends CI_Controller {

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
        
        $objarray = array("school"=>array("del_status"=>0));
        
        $response = $this->General_model->general_function($objarray,$get_api_url);
        $data['dataList']=json_decode($response,true);
        
		$this->load->view('School/cssLinks');
		$this->load->view('Template/header');
		$this->load->view('Template/slider');
		$this->load->view('School/mainSection',$data);
		$this->load->view('Template/footer');
		$this->load->view('School/jqueryLinks');
	}
    
    public function add_data()
    {
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Add";
        
        $school_name = $this->input->post('school_name');
        $school_code = $this->input->post('school_code');
        $school_desc = $this->input->post('school_desc');
        $school_img = $this->input->post('school_img');
        $school_chef_email = $this->input->post('school_chef_email');
        
      /*  print_r($_FILES);
        
        die();*/
        
        
        $picture_name_1="";
        $picture1="";    
        if(!empty($_FILES['school_img']['name'])){
            $config['upload_path'] = './master_images/school';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
             $config['max_size']    = '15000000';
            $config['file_name'] = time().$_FILES['school_img']['name'];
            //Load upload library and initialize configuration
            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            
            if($this->upload->do_upload('school_img')){
                $uploadData = $this->upload->data();
                 $picture_name_1 = $uploadData['file_name'];
            }else{
                 $picture_name_1 = 'upload problem';
            }
        }else{
             $picture_name_1 = 'Blank';
        }
        
        
   $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
   // Output: 54esmdr0qf
   //echo substr(str_shuffle($permitted_chars), 0, 6);
        
   $password = substr(str_shuffle($permitted_chars), 0, 6);
        
        
      $password_to_db =   base64_encode($password);
        
        $objarray = array("school"=>array("school_name"=>$school_name,"school_code"=>$school_code,"school_desc"=>$school_desc,"school_img"=>$picture_name_1,"school_chef_email"=>$school_chef_email,"school_password"=>$password_to_db),"check"=>"school_name,school_chef_email");
        
   //     echo json_encode($objarray); die;
        
        $message='<!DOCTYPE html>
        <html lang="en">
          <head>
            <meta charset="UTF-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <title>Document</title>
          </head>
          <body>
            <style>
              * {
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
                margin: 0;
                padding: 0;
              }
              table p {
                margin-bottom: 10px;
                color: #555;
                font-size: 14px;
              }
              table *:is(h1, h4, h3, h5, h6) {
                margin-bottom: 20px;
              }
            </style>

            <table
              width="600"
              style="margin: 0 auto; background: #f2f2f2"
              cellspacing="0"
              cellpadding="0"
            >
              <tr>
                <td
                  width="400px"
                  style="
                    text-align: center;
                    background-color: #004a80;
                    padding: 5px 10px;
                    border-radius: 0 0 20px 20px;
                  "
                >
                  
                </td>
              </tr>

              <tr>
                <td style="padding: 30px 20px">
                  <h5 style="font-size: 16px;">
                    Hi There,
                  </h5>
                  <p>You have just had a new account on Get Fresh created. Please see your login details below:-</p>
                  <p>Login URL : '.base_url().'</p>
                  <p><b>Login Username :  </b>'.$school_chef_email.'</p>
                  <p><b>Login Password :  </b>'.$password.'</p>
                

                  <p>Thank you,


                  </p>
                </td>
              </tr>
            </table>
          </body>
        </html>';
        
        $subject = "Login Credential For Get Fresh";
        
        email_send($school_chef_email,$message,$subject);
        
        
        
        $response = json_decode($this->General_model->general_function($objarray,$get_api_url),true);
        
         $img_arr=array("img"=>$picture_name_1);
        
        $response=array_merge($response,$img_arr);
       
        
        echo json_encode($response);
       
       
    }  
    
    public function editdata()
    {
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Update";
        
        $school_name = $this->input->post('school_name');
        $school_code = $this->input->post('school_code');
        $previousimage = $this->input->post('previousimage');
        $school_desc = $this->input->post('school_desc');
        $GlobId = $this->input->post('GlobId');
        $school_chef_email = $this->input->post('school_chef_email');
        
        
        $get_api_url_d = $api_url."General/Get";
        
        $objarray = array("school"=>array("del_status"=>0));
        
        $response = $this->General_model->general_function($objarray,$get_api_url_d);
        $data_school=json_decode($response,true);
        
        
        $email_of_chef_earlier = $data_school['all_list'][0]['school_chef_email'];

        
//        print_r($_FILES);die;
        $picture_name_1="";
        $picture1="";    
        if(!empty($_FILES['school_img']['name'])){
            $config['upload_path'] = './master_images/school';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
             $config['max_size']    = '15000000';
            $config['file_name'] = time().$_FILES['school_img']['name'];
            //Load upload library and initialize configuration
            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            
            if($this->upload->do_upload('school_img')){
                $uploadData = $this->upload->data();
                 $picture_name_1 = $uploadData['file_name'];
            }else{
                 $picture_name_1 = $previousimage;
            }
        }else{
             $picture_name_1 = $previousimage;
        }
        
        if($email_of_chef_earlier != $school_chef_email)
        {
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
       // Output: 54esmdr0qf
       //echo substr(str_shuffle($permitted_chars), 0, 6);
        
        $password = substr(str_shuffle($permitted_chars), 0, 6);
            
         $password_to_db =   base64_encode($password);
        
        $objarray = array("school"=>array("school_name"=>$school_name,"school_code"=>$school_code,"school_desc"=>$school_desc,"school_img"=>$picture_name_1,"school_chef_email"=>$school_chef_email,"school_password"=>$password_to_db),"check"=>"school_name,school_chef_email","where"=>array("school_id"=>$GlobId));
        }
        else if($email_of_chef_earlier == $school_chef_email)
        {
          $objarray = array("school"=>array("school_name"=>$school_name,"school_code"=>$school_code,"school_desc"=>$school_desc,"school_img"=>$picture_name_1,"school_chef_email"=>$school_chef_email),"check"=>"school_name,school_chef_email","where"=>array("school_id"=>$GlobId));   
        }
      
        
//       echo json_encode($objarray); die;
        
        $response = $this->General_model->general_function($objarray,$get_api_url);
        
      //  print_r($_response);
        
        
        
        $response=json_decode($response,true);
        
      if($email_of_chef_earlier != $school_chef_email)
        {
           $message='<!DOCTYPE html>
        <html lang="en">
          <head>
            <meta charset="UTF-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <title>Document</title>
          </head>
          <body>
            <style>
              * {
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
                margin: 0;
                padding: 0;
              }
              table p {
                margin-bottom: 10px;
                color: #555;
                font-size: 14px;
              }
              table *:is(h1, h4, h3, h5, h6) {
                margin-bottom: 20px;
              }
            </style>

            <table
              width="600"
              style="margin: 0 auto; background: #f2f2f2"
              cellspacing="0"
              cellpadding="0"
            >
              <tr>
                <td
                  width="400px"
                  style="
                    text-align: center;
                    background-color: #004a80;
                    padding: 5px 10px;
                    border-radius: 0 0 20px 20px;
                  "
                >
                  
                </td>
              </tr>

              <tr>
                <td style="padding: 30px 20px">
                  <h5 style="font-size: 16px;">
                    Hi There,
                  </h5>
                  <p>You have just had a new account on Get Fresh created. Please see your login details below:-</p>
                  <p>Login URL : '.base_url().'</p>
                  <p><b>Login Username :  </b>'.$school_chef_email.'</p>
                  <p><b>Login Password :  </b>'.$password.'</p>
                

                  <p>Thank you,


                  </p>
                </td>
              </tr>
            </table>
          </body>
        </html>';
        
        $subject = "Login Credential For Get Fresh";
        
        email_send($school_chef_email,$message,$subject);
        email_send("injamamulhaque1592@gmail.com",$message,$subject);
        }
      
          
        
        
        
        $image_arr=array("img"=>$picture_name_1);
        
        $response=array_merge($response,$image_arr);
        
        
        echo json_encode($response);
    } 
    
    public function deletedata()
    {
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Delete";
        
        
        $delete_id = $this->input->post('delete_id');
        
        $objarray = array("school"=>array("school_id"=>$delete_id));
        
//        echo json_encode($objarray); die;
        
        $response = $this->General_model->general_function($objarray,$get_api_url);
        echo $response;
    } 
    
    public function Singledata()
    {
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url."General/Get";
        
        $edit_id = $this->input->post('edit_id');
      
        
        $objarray = array("school"=>array("school_id"=>$edit_id));
        
//        echo json_encode($objarray); die;
        
        $response = $this->General_model->general_function($objarray,$get_api_url);
        
       
        
        echo $response;
    }
    
    
}
