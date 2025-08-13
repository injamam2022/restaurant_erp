<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Csv_import extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
//		$this->load->model('csv_import_model');
		$this->load->library('csvimport');
	}

	function index()
	{
		$this->load->view('csv_import');
	}

	
	
    
    

function importproduct()
	{
		$api_url = $this->config->item('api_url');
        $get_api_url = $api_url."Csv/AddProductCsv";
        
		$file_data = $this->csvimport->get_array($_FILES["csv_file"]["tmp_name"]);

            foreach($file_data as $row)
            {
                $data[] = array(
                    "product_code"=>$row['product_code'],
                    "product_name"=>$row['product_name'],
                    "product_desc"=>$row['product_desc'],
                    "product_price"=>$row['product_price'],
                    "category_id"=>$row['category_id'],
                    "type_id"=>$row['type_id'],
                    "carat_id"=>$row['carat_id'],
                    "occasion_id"=>$row['occasion_id'],
                    "product_image"=>$row['product_image'],
                    "del_status"=>$row['del_status']
                    
                );
            }
		//$this->csv_import_model->insert($data);


        $objarray = array("Product"=>$data);
        
        $response = $this->General_model->general_function($objarray,$get_api_url);
        
		echo $response;
}

   
    
	
		
}
