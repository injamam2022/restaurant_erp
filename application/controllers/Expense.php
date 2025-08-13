<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Expense extends CI_Controller
{

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
    public function __construct()
    {
        parent::__construct();
        $this->load->library('csvimport');
    }

    public function index()
    {

        if ($this->session->userdata("admin_email_id") == "") {
            header('Location: ' . base_url() . "Login");
        }

        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url . "General/Get";


        $objarray = array("daily_expense" => array("del_status" => 0,"bill_date"=> date('Y-m-d')));
        $response = $this->General_model->general_function($objarray, $get_api_url);
        $data['allList'] = json_decode($response, true);

        // echo "<pre>";print_r($data);die;
        $this->load->view('Expense/cssLinks');
        $this->load->view('Template/header');
        $this->load->view('Template/slider');
        $this->load->view('Expense/mainSection', $data);
        $this->load->view('Template/footer');
        $this->load->view('Expense/jqueryLinks');
    }

    public function filter_expense()
    {

        if ($this->session->userdata("admin_email_id") == "") {
            header('Location: ' . base_url() . "Login");
        }

        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url . "General/Get";


        $objarray = array("daily_expense" => array("del_status" => 0,"bill_date>="=>$this->input->post('start_date'),"bill_date<="=> $this->input->post('end_date')));
        $response = $this->General_model->general_function($objarray, $get_api_url);
        $data['allList'] = json_decode($response, true);

        // echo "<pre>";print_r($data);die;
        $this->load->view('Expense/cssLinks');
        $this->load->view('Template/header');
        $this->load->view('Template/slider');
        $this->load->view('Expense/mainSection', $data);
        $this->load->view('Template/footer');
        $this->load->view('Expense/jqueryLinks');
    }

    public function bill_upload()
    {
        $api_url = $this->config->item('api_url');
        $add_api_url = $api_url . "General/AddExpense";
        

        $picture_name_1=""; 
        if(!empty($_FILES['purchase_bill']['name'])){
            $config['upload_path'] = './master_images/expense';
            $config['allowed_types'] = '*';
             $config['max_size']    = '15000000';
            $config['file_name'] = time().$_FILES['purchase_bill']['name'];
            //Load upload library and initialize configuration
            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            
            if($this->upload->do_upload('purchase_bill')){
                $uploadData = $this->upload->data();
                 $picture_name_1 = $uploadData['file_name'];
            }else{
                 $picture_name_1 = 'upload problem';
            }
        }else{
             $picture_name_1 = 'Blank';
        }
        if($this->input->post('type') == "Food" || $this->input->post('type') =="Drink"){
            $file_data = $this->csvimport->get_array($_FILES["purchase_csv"]["tmp_name"]);
            foreach ($file_data as $row) {
                $data[] = array(
                    "item" => $row['item'],
                    "mrp" => $row['mrp'],
                    "quantity" => $row['quantity'],
                    "value" => $row['value'],
                    "amount" => $row['amount'],
                );
            }
        }else{
            $data=[];
        }
        
        $objarray = array(
            "invoice_no" => $this->input->post('invoice_no'), 
            "type" => $this->input->post('type'), 
            "comments" => $this->input->post('comments'), 
            "bill_date" => $this->input->post('bill_date'), 
            "purchase_bill" => $picture_name_1,
            "purchase_total_price" => $this->input->post('purchase_total_price'), 
            "data" => $data
        );
        // echo json_encode($objarray); die;

        $response = $this->General_model->general_function($objarray, $add_api_url);
        $this->session->set_flashdata('success',"Added Successfully");
        if($response){
            header('Location: '.base_url()."Expense");
        }
    }
    public function addRole()
    {
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url . "General/Add";

        $role_name = $this->input->post('role_name');

        $objarray = array("role" => array("role_name" => $role_name), "check" => "role_name");

        //        echo json_encode($objarray); die;

        $response = $this->General_model->general_function($objarray, $get_api_url);
        echo $response;
    }

    public function editRole()
    {
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url . "General/Update";

        $role_name = $this->input->post('role_name');
        $GlobId = $this->input->post('GlobId');

        $objarray = array("role" => array("role_name" => $role_name), "check" => "role_name", "where" => array("role_id" => $GlobId));

        //        echo json_encode($objarray); die;

        $response = $this->General_model->general_function($objarray, $get_api_url);
        echo $response;
    }

    public function delete()
    {
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url . "General/DeleteExpense";

        $roleId = $this->input->post('roleId');
        $objarray = array("daily_expense_id" => $roleId);
        $response = $this->General_model->general_function($objarray, $get_api_url);

        echo $response;
    }

    public function SingleData()
    {
        $api_url = $this->config->item('api_url');
        $get_api_url = $api_url . "General/Get";

        $role_id = $this->input->post('roleId');

        $objarray = array("daily_expense" => array("daily_expense_id" => $role_id));
        $response = json_decode($this->General_model->general_function($objarray, $get_api_url),true);

        $objarray = array("daily_expense_details" => array("daily_expense_id" => $role_id));
        $response2 = json_decode($this->General_model->general_function($objarray, $get_api_url),true);

        $data = array("parent"=> $response['all_list'],"child"=>$response2['all_list']);
        echo json_encode($data);
    }
}
