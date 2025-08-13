<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
/* Handle CORS */

// Specify domains from which requests are allowed
header('Access-Control-Allow-Origin: *');

// Specify which request methods are allowed
header('Access-Control-Allow-Methods: PUT, GET, POST, DELETE, OPTIONS');

// Additional headers which may be sent along with the CORS request
header('Access-Control-Allow-Headers: X-Requested-With,Authorization,Content-Type');

// Set the age to 1 day to improve speed/caching.
header('Access-Control-Max-Age: 86400');

// Exit early so the page isn't fully loaded for options requests
if (strtolower($_SERVER['REQUEST_METHOD']) == 'options') {
    exit();
}

class General_model extends CI_Model
{

    public function add_data($all_data)
    {
        $table_prefix = $this->config->item('table_prefix');
        $table_suffix = $this->config->item('table_suffix');

        $key_array = array_keys($all_data);
        $table_attribute = strtolower($key_array[0]);

        if (isset($all_data['check']) && $all_data['check'] != '') {
            $check_table_attribute_arr = explode(',', $all_data['check']);
            for ($i = 0; $i < count($check_table_attribute_arr); $i++) {
                //                $variable = $table_attribute."_".strtolower($check_table_attribute_arr[$i]);
                $variable = strtolower($check_table_attribute_arr[$i]);
                $this->db->where('' . $variable . '', $all_data['' . $key_array[0] . '']['' . $variable . '']);
            }
            $this->db->where('del_status ', 0);
            $query = $this->db->get('' . $table_prefix . '' . $table_attribute . '' . $table_suffix . '');
            //            echo $this->db->last_query(); die;
            $count_row = $query->num_rows();
            if ($count_row > 0) {
                return array("stat" => 405, "msg" => "Insert failed. This same value exist", "insert_id" => 0);
                die;
            }
        }

        $this->db->insert('' . $table_prefix . '' . $table_attribute . '' . $table_suffix . '', $all_data['' . $key_array[0] . '']);
        $insert_id = $this->db->insert_id();

        return array("stat" => 200, "msg" => "Added successfully", "insert_id" => $insert_id);
    }

    public function update_data($all_data)
    {
        $table_prefix = $this->config->item('table_prefix');
        $table_suffix = $this->config->item('table_suffix');

        $key_array = array_keys($all_data);
        $table_attribute = strtolower($key_array[0]);

        //        if(!isset($all_data[''.$key_array[0].''][''.$table_attribute.'_id']) && $all_data[''.$key_array[0].''][''.$table_attribute.'_id']=='')
        //        {
        //            return array("stat"=>405,"msg"=>"Please give ".$table_attribute."_id");die;
        //        }

        if (count($all_data['' . $key_array[0] . '']) == 0) {
            return array("stat" => 406, "msg" => "Please give data for update");
            die;
        }

        if (isset($all_data['where']) && $all_data['where'] != '') {
            $where = $all_data['where'];
        } else {
            $where = array();
        }

        //        echo json_encode($where);die;

        if (isset($all_data['check']) && $all_data['check'] != '') {
            $check_table_attribute_arr = explode(',', $all_data['check']);
            for ($i = 0; $i < count($check_table_attribute_arr); $i++) {
                //                $variable = $table_attribute."_".strtolower($check_table_attribute_arr[$i]);
                $variable = strtolower($check_table_attribute_arr[$i]);
                $this->db->where('' . $variable . '', $all_data['' . $key_array[0] . '']['' . $variable . '']);
            }
            if (count($where) > 0) {
                $where_key_array = array_keys($where);
                for ($j = 0; $j < count($where); $j++) {
                    $this->db->where('' . $where_key_array[$j] . '!=', $where['' . $where_key_array[$j] . '']);
                }
            }

            $this->db->where('del_status ', 0);
            $query = $this->db->get('' . $table_prefix . '' . $table_attribute . '' . $table_suffix . '');
            //            echo $this->db->last_query(); die;
            $count_row = $query->num_rows();
            if ($count_row > 0) {
                return array("Stat" => 407, "Msg" => "Update Failed. This same value exist", "update_id" => 0);
                die;
            }
        }

        //        $this->db->update(''.$table_prefix.''.$table_attribute.''.$table_suffix.'', $all_data[''.$key_array[0].''], array(''.$table_attribute.'_id' => $all_data[''.$key_array[0].''][''.$table_attribute.'_id']));

        $this->db->update('' . $table_prefix . '' . $table_attribute . '' . $table_suffix . '', $all_data['' . $key_array[0] . ''], $where);

        return array("stat" => 200, "msg" => "Updated Successfully");
    }

    public function get_data($all_data)
    {
        $table_prefix = $this->config->item('table_prefix');
        $table_suffix = $this->config->item('table_suffix');

        $key_array = array_keys($all_data);
        $table_attribute = strtolower($key_array[0]);

        $this->db->where($all_data['' . $key_array[0] . '']);
        $this->db->where('' . $table_prefix . '' . $table_attribute . '' . $table_suffix . '.del_status', 0);

        if (isset($all_data['join']) && $all_data['join'] != '') {
            $join_table_attribute_arr = explode(',', $all_data['join']);
            for ($i = 0; $i < count($join_table_attribute_arr); $i++) {
                $new_join_table_attribute = explode(":", $join_table_attribute_arr[$i]);
                $join_table_attribute = strtolower($new_join_table_attribute[0]);

                $this->db->join('' . $table_prefix . '' . $join_table_attribute . '' . $table_suffix . '', '' . $table_prefix . '' . $join_table_attribute . '' . $table_suffix . '.' . $join_table_attribute . '_id=' . $table_prefix . '' . $table_attribute . '' . $table_suffix . '.' . $join_table_attribute . '_id', 'left');

                if (count($new_join_table_attribute) > 1) {
                    $sub_join_str = $new_join_table_attribute[1];
                    $sub_join_arr = explode('|', $sub_join_str);
                    if (count($sub_join_arr) > 0) {
                        for ($j = 0; $j < count($sub_join_arr); $j++) {
                            $sub_join_table_attribute = strtolower($sub_join_arr[$j]);

                            $this->db->join('' . $table_prefix . '' . $sub_join_table_attribute . '' . $table_suffix . '', '' . $table_prefix . '' . $sub_join_table_attribute . '' . $table_suffix . '.' . $sub_join_table_attribute . '_id=' . $table_prefix . '' . $join_table_attribute . '' . $table_suffix . '.' . $sub_join_table_attribute . '_id', 'left');
                        }
                    }
                }
            }
        }


        if (isset($all_data['order_by']) && $all_data['order_by'] != '') {
            $key_array_new = array_keys($all_data['order_by']);
            if (count($key_array_new) > 0) {
                if (strtolower($all_data['order_by']['' . $key_array_new[0] . '']) == 'asc' || strtolower($all_data['order_by']['' . $key_array_new[0] . '']) == 'desc') {
                    $this->db->order_by($key_array_new[0], strtolower($all_data['order_by']['' . $key_array_new[0] . '']));
                }
            }
        }


        if (isset($all_data['limit']) && $all_data['limit'] != '') {
            $limit = $all_data['limit'];
            $this->db->limit($limit);
        }
        if (isset($all_data['offset']) && $all_data['offset'] != '') {
            $offset = $all_data['offset'];
            $this->db->offset($offset);
        }

        $query = $this->db->get('' . $table_prefix . '' . $table_attribute . '' . $table_suffix . '');
        //		 echo $this->db->last_query(); die;
        $count_row = $query->num_rows();
        if ($count_row > 0) {
            $res = array("stat" => 200, "msg" => "All list", "list_count" => $count_row, "all_list" => $query->result_array());
        } else {
            $res = array("stat" => 500, "msg" => "No data found", "list_count" => $count_row, "all_list" => array());
        }
        return $res;
    }

    public function delete_data($all_data)
    {
        $table_prefix = $this->config->item('table_prefix');
        $table_suffix = $this->config->item('table_suffix');

        $key_array = array_keys($all_data);
        $table_attribute = strtolower($key_array[0]);

        if (!isset($all_data['' . $key_array[0] . '']['' . $table_attribute . '_id']) || $all_data['' . $key_array[0] . '']['' . $table_attribute . '_id'] == '') {
            return array("stat" => 408, "msg" => "Please give " . $table_attribute . "_id");
            die;
        }

        $this->db->where('del_status ', 0);
        $this->db->where($table_attribute . '_id ', $all_data['' . $key_array[0] . '']['' . $table_attribute . '_id']);
        $query = $this->db->get('' . $table_prefix . '' . $table_attribute . '' . $table_suffix . '');
        $count_row = $query->num_rows();
        if ($count_row > 0) {
            $this->db->set('del_status', '1');
            $this->db->where($table_attribute . '_id ', $all_data['' . $key_array[0] . '']['' . $table_attribute . '_id']);
            $this->db->update('' . $table_prefix . '' . $table_attribute . '' . $table_suffix . '');

            return array("stat" => 200, "msg" => "Delete Successfully");
        } else {
            return array("stat" => 409, "msg" => "Delete failed. This id not exists");
        }
    }

    public function remove_data($all_data)
    {
        $table_prefix = $this->config->item('table_prefix');
        $table_suffix = $this->config->item('table_suffix');

        $key_array = array_keys($all_data);
        $table_attribute = strtolower($key_array[0]);

        if (!isset($all_data['' . $key_array[0] . ''])) {
            return array("stat" => 410, "msg" => "Please give proper data");
            die;
        }

        $this->db->where($all_data['' . $key_array[0] . '']);
        $query = $this->db->get('' . $table_prefix . '' . $table_attribute . '' . $table_suffix . '');
        $count_row = $query->num_rows();

        if ($count_row > 0) {
            if (count($all_data['' . $key_array[0] . '']) > 0) {
                $this->db->where($all_data['' . $key_array[0] . '']);
                $this->db->delete('' . $table_prefix . '' . $table_attribute . '' . $table_suffix . '');
            } else {
                $this->db->truncate('' . $table_prefix . '' . $table_attribute . '' . $table_suffix . '');
            }

            return array("stat" => 200, "msg" => "Remove Successfully");
        } else {
            return array("stat" => 411, "msg" => "Remove failed. Please try again");
        }
    }
    public function backup_data()
    {
        $dir = "system/back_up/";
        $a = scandir($dir);
        if (isset($a[2])) {
            unlink('system/backup/' . $a[2]);
        }

        $this->load->dbutil();
        $db_name = $this->db->database;

        $prefs = array(
            'format'      => 'zip',
            'filename'    => $db_name . '.sql'
        );
        $backup = $this->dbutil->backup($prefs);

        $db_name = $db_name . '.zip';
        $save = 'system/backup/' . $db_name;

        $this->load->helper('file');
        write_file($save, $backup);

        return array("stat" => 200, "msg" => "Backup Successfully");
    }




    /*my general function*/


    public function Categoriesfrommenu_data($data)
    {
        // print_r($data['menu_id']);
        //return($data);

        $cat_array = array();
        $food_tems = array();
        $m = 0;
        for ($i = 0; $i < count($data['menu_id']); $i++) {
            $get_sql  = "Select * from `menuitem_master` where `menu_id` = " . $data['menu_id'][$i] . "";

            $query = $this->db->query($get_sql);

            $res = $query->result_array();

            print_r($res);
            //echo ($res[$i]['menu_category_id']);
            $cat_array[] = $res[0]['menu_category_id'];
            $food_tems[] = $res[0]['menu_food_id'];
            echo $m;
            $m++;
        }
        /*echo "<pre>";
        print_r($res);*/

        /*  
        for($m=0;$m<count($res);$m++)
        {
           
        }
        */


        print_r($cat_array);

        echo "hello";
        print_r($food_tems);
    }

    public function  Getmeal_info_data($data)
    {


        $get_sql  = "Select * from `assignmenu_master` where `timeslot_id` = " . $data['timeslot_id'] . " and ('" . $data['date'] . "'  >= `start_date` AND '" . $data['date'] . "' <= end_date)";

        // return  $get_sql;

        $query = $this->db->query($get_sql);

        $res = $query->result_array();

        return $res;
    }


    public function  Getminicart_data($data)
    {


        $get_sql  = "Select * from `cart_master` LEFT JOIN `food_master` on `cart_master`.`food_id` = `food_master`.`food_id` where `cart_master`.`timeslot_id` = " . $data['timeslot_id'] . " and `cart_master`.`date_of_food` = '" . $data['date_of_food'] . "' and `cart_master`.`student_id` = " . $data['student_id'] . " ";

        //return  $get_sql;

        $query = $this->db->query($get_sql);

        $res = $query->result_array();



        return $res;
    }

    public function GetCartItems_data($data)
    {

        date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)
        $today  = date('Y-m-d');



        $get_sql  = "Select * , SUM(`quantity`) as totat_quantity from `cart_master` LEFT JOIN `food_master` on `cart_master`.`food_id` = `food_master`.`food_id` where `cart_master`.`date_of_food`  >=  '" . $today . "' and `cart_master`.`student_id` = " . $data['student_id'] . " GROUP BY `cart_master`.`food_id`";

        //return $get_sql;

        $query = $this->db->query($get_sql);

        $res = $query->result_array();


        return $res;
    }

    //get all orders group 
    public function Getallordersgroup_data($data)
    {
        $sql = "SELECT * FROM `order_details_master` JOIN `order_master` ON `order_master`.`order_id`=  `order_details_master`.`order_id` WHERE `order_details_master`.`order_id` = " . $data['order_id'] . "";

        $query = $this->db->query($sql);

        $res = $query->result_array();


        return $res;
    }

    public function GetallordersgroupInfo_data($data)
    {
        $sql = "SELECT * FROM `order_master` LEFT JOIN `table_master` on `order_master`.`table_id` = `table_master`.`table_id`   LEFT JOIN `payment_master` on `order_master`.`payment_id` = `payment_master`.`payment_id` LEFT JOIN `status_master` on `order_master`.`status_id` = `status_master`.`status_id` WHERE `order_master`.`order_id` = " . $data['order_id'] . "";

        $query = $this->db->query($sql);

        $res_order = $query->result_array();

        $SQLorder_details = "SELECT * FROM `order_details_master`  LEFT JOIN `food_master` on `food_master`.`food_id` = `order_details_master`.`food_id`  WHERE `order_details_master`.`order_id` = " . $data['order_id'] . "";

        $query_order_details = $this->db->query($SQLorder_details);

        $response_order_details = $query_order_details->result_array();

        $res_order['order_details'] = $response_order_details;


        return  $res_order;
    }

    public function GetallordersgroupKitchenInfo_data($data)
    {
        $sql = "SELECT * FROM `order_master` LEFT JOIN `table_master` on `order_master`.`table_id` = `table_master`.`table_id`   LEFT JOIN `payment_master` on `order_master`.`payment_id` = `payment_master`.`payment_id` LEFT JOIN `status_master` on `order_master`.`status_id` = `status_master`.`status_id` WHERE `order_master`.`order_id` = " . $data['order_id'] . "";

        $query = $this->db->query($sql);

        $res_order = $query->result_array();

        $SQLorder_details = "SELECT * FROM `order_details_master`  LEFT JOIN `food_master` on `food_master`.`food_id` = `order_details_master`.`food_id`  WHERE `order_details_master`.`order_id` = " . $data['order_id'] . " AND `kitchen_status`= 0";

        $query_order_details = $this->db->query($SQLorder_details);

        $response_order_details = $query_order_details->result_array();

        $res_order['order_details'] = $response_order_details;


        return  $res_order;
    }

    public function Getallordersresdate_data($data)
    {
        $sql = "SELECT * FROM `orderdetails_master` LEFT JOIN `timeslot_master` on `orderdetails_master`.`timeslot_id` = `timeslot_master`.`timeslot_id`  LEFT JOIN `food_master` on `orderdetails_master`.`food_id` = `food_master`.`food_id` WHERE `orderdetails_master`.`student_id` = " . $data['student_id'] . " AND `orderdetails_master`.`date_of_food` = '" . $data['date'] . "' AND `orderdetails_master`.`order_id` = '" . $data['order_id'] . "' order by `orderdetails_master`.`timeslot_id` asc";
        //return $sql;
        $query = $this->db->query($sql);

        $res = $query->result_array();


        return $res;
    }

    public function Getprepationsheet_data($data)
    {
        $sql = "SELECT * , SUM(`quantity`) as totat_quantity FROM `orderdetails_master` LEFT JOIN `timeslot_master` on `orderdetails_master`.`timeslot_id` = `timeslot_master`.`timeslot_id`  LEFT JOIN `food_master` on `orderdetails_master`.`food_id` = `food_master`.`food_id` WHERE  `orderdetails_master`.`date_of_food` = '" . $data['date'] . "' AND `orderdetails_master`.`timeslot_id` = " . $data['timeslot_id'] . " AND `orderdetails_master`.`school_id` = " . $data['school_id'] . " GROUP BY `orderdetails_master`.`food_id`";

        //return $sql;

        $query = $this->db->query($sql);

        $res = $query->result_array();


        return $res;
    }

    /*admin filter data*/
    public function Filterordersadmin_data($data)
    {
        $sql = "SELECT *  FROM `order_master` LEFT JOIN `table_master` on `order_master`.`table_id` = `table_master`.`table_id`  LEFT JOIN `payment_master` on `order_master`.`payment_id` = `payment_master`.`payment_id` LEFT JOIN `status_master` on `order_master`.`status_id` = `status_master`.`status_id`  WHERE  ( `order_master`.`order_only_date` >= '" . $data['fliter_with_date_from'] . "'  AND `order_master`.`order_only_date` <= '" . $data['fliter_with_date_to'] . "' AND `order_master`.`status_id`= 2) ";
        // return $sql;
        $query = $this->db->query($sql);

        $res = $query->result_array();

        for($i=0;$i<count( $res);$i++){
            if($res[$i]['payment_id'] == 7){
                $this->db->where('order_id',$res[$i]['order_id']);
                $this->db->join('payment_master','payment_master.payment_id = order_collection_master.payment_id','left');
                $query=$this->db->get('order_collection_master');
                $collectionArray=$query->result_array();
                $res[$i]['collectionArray'] = $collectionArray;

            }else{
                $res[$i]['collectionArray'] = [];
            }
        }

        $res = array("stat" => 200, "msg" => "All list", "all_list" => $res);
        return $res;
    }


    public function FilterCollectionadmin_data($data){
        $sql = "SELECT payment_name,(SELECT SUM(grand_total) FROM order_master WHERE order_master.payment_id =  payment_master.payment_id AND `order_master`.`status_id`=2 AND `order_master`.`order_only_date` >= '" . $data['fliter_with_date_from'] . "'  AND `order_master`.`order_only_date` <= '" . $data['fliter_with_date_to'] . "') as total_collection, (SELECT SUM(collection_amount) FROM order_collection_master WHERE order_collection_master.payment_id =  payment_master.payment_id AND `order_collection_master`.`created_by` >= '" . $data['fliter_with_date_from'] . "'  AND `order_collection_master`.`created_by` <= '" . $data['fliter_with_date_to'] . "') as collection_total FROM payment_master WHERE `payment_id`!=7;";

        
        $query = $this->db->query($sql);
        $res = $query->result_array();

        $res = array("stat" => 200, "msg" => "All list", "all_list" => $res);
        return $res;

    }

    public function FilterExpense_data($data){

        $sql = "SELECT type, SUM(purchase_total_price) as total_collection FROM `daily_expense_master` WHERE `daily_expense_master`.`bill_date` >= '" . $data['fliter_with_date_from'] . "'  AND `daily_expense_master`.`bill_date` <= '" . $data['fliter_with_date_to'] . "' GROUP BY type;";

        $query = $this->db->query($sql);

        $res = $query->result_array();

        $res = array("stat" => 200, "msg" => "All list", "all_list" => $res);
        return $res;

    }


     public function GetFoodInformation_data($data){
        $SQL = "SELECT * FROM `food_master` LEFT JOIN `food_price_master` ON `food_master`.`food_id` = `food_price_master`.`food_id` WHERE `food_master`.`del_status` = 0 and `food_master`.`category_id` != 2 ";

        $query = $this->db->query($SQL);

        $res = $query->result_array();

       
        $count_row = $query->num_rows();
        if ($count_row > 0) {
        $res = array("stat" => 200, "msg" => "All list", "list_count" => $count_row, "all_list" => $res);

        return $res;
        }

     }

     public function GetFoodWithPrice_data($data){

        $SQL = "SELECT * FROM `food_master` LEFT JOIN `food_price_master` ON `food_master`.`food_id` = `food_price_master`.`food_id` WHERE `food_master`.`del_status` = 0 AND `food_master`.`food_id` = '".$data['food_id']."'";

        $query = $this->db->query($SQL);

        $res = $query->result_array();

       
        $count_row = $query->num_rows();
        if ($count_row > 0) {
        $res = array("stat" => 200, "msg" => "All list", "list_count" => $count_row, "all_list" => $res);

        return $res;
        }

     }


     public function GetDrinkWithPrice_data($data){

        $SQL = "SELECT * FROM `food_master`  WHERE `food_master`.`del_status` = 0 AND `food_master`.`food_id` = '".$data['food_id']."'";

        $query = $this->db->query($SQL);

        $res = $query->result_array();


        $SQLSIZE_PRICE = "SELECT * FROM `food_price_master`  WHERE `food_price_master`.`del_status` = 0 AND `food_price_master`.`food_id` = '".$data['food_id']."'";

        $query_one = $this->db->query($SQLSIZE_PRICE);

        $response_price = $query_one->result_array();

        $res['size_price_array'] = $response_price;
       
        $count_row = $query->num_rows();
        if ($count_row > 0) {
            $res = array("stat" => 200, "msg" => "All list", "list_count" => $count_row, "all_list" => $res);
    
            return $res;
            }

     }

     public function DeleteFood_data($data){
        $sql = "DELETE foodtable, pricetable FROM food_master foodtable, food_price_master pricetable WHERE foodtable.food_id = '".$data['food_id']."' AND foodtable.food_id = pricetable.food_id";

        $query = $this->db->query($sql);

        if ($query) {
            return array("stat" => 200, "msg" => "Delete Successfully");
        } else {
            return array("stat" => 409, "msg" => "Delete failed. This id not exists");
        }

     }


     public function DeleteFoodPrice_data($data){

        $sql = "DELETE  FROM food_price_master  WHERE food_id = '".$data['food_id']."' ";

        $query = $this->db->query($sql);

        if ($query) {
            return array("stat" => 200, "msg" => "Delete Successfully");
        } else {
            return array("stat" => 409, "msg" => "Delete failed. This id not exists");
        }

     }

     public function GetTransactionInformation_data(){

        $sql_income = "SELECT SUM(`amount`) as 'income' , COUNT(`amount`) as 'total_orders' FROM `account_transactions` WHERE `transaction_type` = 'deposit' AND `transaction_date` = '".date('Y-m-d')."'";
        $query_income = $this->db->query($sql_income);
        $response_income = $query_income->result_array();
        $sql_expense = "SELECT SUM(`amount`) as 'expense' FROM `account_transactions` WHERE `transaction_type` = 'withdrawal'  AND `transaction_date` = '".date('Y-m-d')."'";
        $query_expense = $this->db->query($sql_expense);
        $response_expense = $query_expense->result_array();

        if($response_income[0]['income'] == null)
            $response_income[0]['income'] = 0;
        if($response_expense[0]['expense'] == null)
            $response_expense[0]['expense'] = 0;
        
        if($response_income[0]['income'] == null && $response_income[0]['income'] == null)
            $total_profit = '0.00';   
        else
            $total_profit = round($response_income[0]['income'] - $response_expense[0]['expense'],2);    


        $sql_monthly_income = "SELECT year(transaction_date) as year ,MONTHNAME(transaction_date) as month,sum(amount) as amount from account_transactions WHERE `transaction_type` = 'deposit' group by year(transaction_date),MONTHNAME(transaction_date) order by MAX(transaction_date)";
        $query_monthly_income  = $this->db->query($sql_monthly_income);
        $response_monthly_income = $query_monthly_income->result_array();

        $sql_monthly_expense = "SELECT year(transaction_date) as year ,MONTHNAME(transaction_date) as month,sum(amount) as amount from account_transactions WHERE `transaction_type` = 'withdrawal' group by year(transaction_date),MONTHNAME(transaction_date) order by MAX(transaction_date)";
        $query_monthly_expense  = $this->db->query($sql_monthly_expense);
        $response_monthly_expense = $query_monthly_expense->result_array();


        $sql_current_amount_food_drink = "SELECT MONTHNAME(CURRENT_TIMESTAMP) as month,sum(food_total_with_gst) as food_amount , SUM(drinks_total) as drink_amount from order_master WHERE `status_id`=2";
        $query_current_amount_food_drink  = $this->db->query($sql_current_amount_food_drink);
        $response_current_amount_food_drink = $query_current_amount_food_drink->result_array();

        $sql_monthly_profit = "SELECT YEAR(transaction_date) AS year, MONTHNAME(transaction_date) AS month, SUM(CASE WHEN `transaction_type` = 'withdrawal' THEN amount ELSE 0 END) AS total_withdrawals, SUM(CASE WHEN `transaction_type` = 'deposit' THEN amount ELSE 0 END) AS total_deposits, SUM(CASE WHEN `transaction_type` = 'deposit' THEN amount WHEN `transaction_type` = 'withdrawal' THEN -amount ELSE 0 END) AS profit FROM account_transactions GROUP BY YEAR(transaction_date), MONTHNAME(transaction_date) ORDER BY year DESC, MONTH(transaction_date) DESC";
        $query_monthly_profit  = $this->db->query($sql_monthly_profit);
        $response_monthly_profit  = $query_monthly_profit->result_array();



        if ($total_profit) {
            return array("stat" => 200, "income" => $response_income[0]['income'] , "total_orders"=>  $response_income[0]['total_orders'] , "expense"=>$response_expense[0]['expense'] , "total_profit"=>$total_profit , "response_monthly_sale"=>$response_monthly_income,"response_monthly_expense"=>$response_monthly_expense,"response_current_amount_food_drink"=>$response_current_amount_food_drink,"monthly_profit"=>$response_monthly_profit);
        } else {
            return array("stat" => 409, "msg" => "Data Having Some Error");
        }


     }

    public function AddExpense_data($data)
    {
        $purchase_total_price = 0;
        $total_quantity = 0;

        // $this->db->where('del_status ', 0);
        // $this->db->where('invoice_no', $data['invoice_no']);
        // $query = $this->db->get('daily_expense_master');
        // $invoice_data = $query->result_array();

        // if(count($invoice_data) > 0){
           
        //     $this->db->where('daily_expense_id',$invoice_data[0]['daily_expense_id']);
        //     $this->db->delete('daily_expense_master');
            
        //     $this->db->where('daily_expense_id',$invoice_data[0]['daily_expense_id']);
        //     $this->db->delete('daily_expense_details_master');
        // }

        $sub_array = array();
        if(count($data['data']) > 0){
            for ($i = 0; $i < count($data['data']); $i++) {
                $purchase_total_price += $data['data'][$i]['amount'];
               
                $food_id = 0;
                $size_id = 0;
                if ($data['type'] == "Drink") {
                    $item_name = explode(",", ($data['data'][$i]['item']));
                    // echo $item_name[0];die;
                    $sql = 'SELECT `food_master`.`food_id`,`food_price_master`.`size_id` FROM `food_master` LEFT JOIN `food_price_master` on `food_master`.`food_id`= `food_price_master`.`food_id` LEFT JOIN `size_master` on `food_price_master`.`size_id`= `size_master`.`size_id` WHERE `food_name` LIKE "%' . trim($item_name[0]) . '%" AND `size_name` LIKE "%' . trim($item_name[1]) . '%" ORDER BY `food_id`  DESC';
                    $query = $this->db->query($sql);
                    // echo $this->db->last_query(); die;
                    $res = $query->result_array();
                    $food_id = $res[0]['food_id'];
                    $size_id= $res[0]['size_id'];
                    $size_name = explode(" ",trim($item_name[1]));
                    $total_quantity += ($data['data'][$i]['quantity']*$size_name[0]);
                }else{
                    $total_quantity += $data['data'][$i]['quantity'];
                }
    
                $sub_array[$i] = array(
                    "quantity_in_ml" => $data['data'][$i]['quantity'],
                    "unit_price" => $data['data'][$i]['amount'] / $data['data'][$i]['quantity'],
                    "amount"=>$data['data'][$i]['amount'],
                    "food_id" => $food_id,
                    "size_id" =>$size_id,
                    "item_name" => trim($data['data'][$i]['item']),
                );
            }
        }else{
            $purchase_total_price=$data['purchase_total_price'];
        }
        
        $parent_data = array(
            "invoice_no" => $data['invoice_no'],
            "type" => $data['type'],
            "purchase_bill" => $data['purchase_bill'],
            "bill_date" => $data['bill_date'],
            "purchase_total_price" => $purchase_total_price,
            "total_quantity" => $total_quantity,
            "comments" => $data['comments']
        );
        $this->db->insert('daily_expense_master', $parent_data);
        $daily_expense_id = $this->db->insert_id();

        $this->db->insert('account_transactions',
            array(
                "transaction_type"=>"withdrawal",
                "amount"=>$purchase_total_price,
                "purpose"=>$data['type']." ".$data['comments'],
                "transaction_date" => $data['bill_date'],
                "expense_id"=>$daily_expense_id
                )
            );
        if(count($data['data']) > 0){
            for($i=0; $i<count($sub_array);$i++){
                $sub_array[$i]['daily_expense_id']=$daily_expense_id;
            }
            $this->db->insert_batch('daily_expense_details_master', $sub_array);
        }
    
        if($daily_expense_id > 0){
            return array("stat" => 200, "msg" => "Success");
        }else{
            return array("stat" => 400, "msg" => "Error");
        }
        
    }
    function generate_numbers($start, $count, $digits) {
        $result = array();
        for ($n = $start; $n < $start + $count; $n++) {
      
           $result[] = str_pad($n, $digits, "0", STR_PAD_LEFT);
      
        }
        return $result;
     }

    public function TableGet_data($data){
        ////// Order Query /// 
        $query=$this->db->where("order_master.table_id",$data['table_id']);
        $query=$this->db->where("table_status",'deactive');
        $query=$this->db->where("status_id",'1');
        $query=$this->db->join('table_master', 'order_master.table_id = table_master.table_id', 'left');
        $query=$this->db->get('order_master');
        $order_data = $query->result_array();
        //echo $this->db->last_query(); die;

        if($order_data){
            $order_collection_data = [];
            $food_total=0;
            $food_total_with_gst=0;
            $drinks_total=0;
            $drinks_sub_total=0;
            $food_gst=0;
            $food_discount=0;
            $drinks_discount=0;
            $discount=0;
            $grand_total=0;
            $query=$this->db->where("order_id",$order_data[0]['order_id']);
            $query=$this->db->join('food_master', 'food_master.food_id = order_details_master.food_id', 'left');
            $query=$this->db->get("order_details_master");
            $order_sub_data = $query->result_array();
        
            for($i=0;$i<count($order_sub_data);$i++){
                if($order_sub_data[$i]['category_id'] == 2){
                    $drinks_sub_total+=$order_sub_data[$i]['sub_total'];
                }else{
                    $query=$this->db->get('gst_master');
                    $gst_data = $query->result_array();

                    $food_total+=$order_sub_data[$i]['sub_total'];
                    $food_total_with_gst+=$order_sub_data[$i]['sub_total'] + $order_sub_data[$i]['sub_total'] * ($gst_data[0]['igst']/100);
                    $food_gst+=($order_sub_data[$i]['sub_total'] * ($gst_data[0]['igst']/100));
                }
                
            }
            if($order_data[0]['discount_percentage'] != 0){
                $food_discount = (($food_total * $order_data[0]['discount_percentage'])/100);
            }
            if($order_data[0]['discount_percentage_drink'] != 0){
                $drinks_discount = (($drinks_sub_total * $order_data[0]['discount_percentage_drink'])/100);
            }
            $discount = $food_discount + $drinks_discount;
            $drinks_total = $drinks_sub_total;
            $food_total_with_gst = $food_total - $food_discount + $food_gst;
            $grand_total = ($food_total_with_gst + ($drinks_total-$drinks_discount)) ;

            $this->db->where('order_id', $order_data[0]['order_id']);
            $this->db->update('order_master',array(
                "food_total" => $food_total,
                "food_total_with_gst" =>($food_total_with_gst),
                "drinks_total" => $drinks_total,
                "food_gst" => $food_gst,
                "discount" => $discount,
                "grand_total" => round($grand_total),
            ));
            
        }else{
            $order_collection_data = [];
            $food_total=0;
            $food_total_with_gst=0;
            $drinks_total=0;
            $drinks_sub_total=0;
            $food_gst=0;
            $discount=0;
            $grand_total=0;
            $sql = "SELECT MAX(order_id) as order_id FROM order_master";
            $query = $this->db->query($sql);
            $res = $query->result_array();
            $numbers = $this->generate_numbers($res[0]['order_id'] + 1, 20, 10);
            if (date('m') <= 3) {//Upto June 2014-2015
                $financial_year = (date('Y')-1) . '-' . date('Y');
            } else {//After June 2015-2016
                $financial_year = date('Y') . '-' . (date('Y') + 1);
            }
            $invoic_number="PAL-".$numbers[0]."-".$financial_year;

            $order_insert_data = array(
                "bill_invoice_number " => $invoic_number,
                "table_id"=>$data['table_id'],
                "food_total" => $food_total,
                "food_total_with_gst" => $food_total_with_gst,
                "drinks_total" => $drinks_total,
                "food_gst" => $food_gst,
                "discount" => $discount,
                "grand_total" => round($grand_total),
            );
            $this->db->insert('order_master',$order_insert_data);
            $order_id=$this->db->insert_id();

            $this->db->where('table_id', $data['table_id']);
            $this->db->update('table_master',array("table_status"=>"deactive"));

            $query=$this->db->where("order_id",$order_id);
            $query=$this->db->get('order_master');
            $order_data = $query->result_array();
            $order_sub_data = [];
        }

        if($order_data[0]['payment_id'] == 7 ){
           $query = $this->db->where('order_id',$order_data[0]['order_id']);
           $query = $this->db->get('order_collection_master');
           $order_collection_data = $query->result_array();
        }   

        return array(
            "food_total" => $food_total,
            "food_total_with_gst" => $food_total_with_gst,
            "drinks_total" => $drinks_total - $drinks_discount,
            "drinks_sub_total" => $drinks_sub_total,
            "food_gst" => $food_gst,
            "discount" => $discount,
            "grand_total" => round($grand_total),
            "order_data" => $order_data,
            "order_sub_data" => $order_sub_data,
            "order_collection_data"=>$order_collection_data

        );
    }

    public function FinalSubmitOrder_data($data){
        $splitPayment = $data['splitPayment'];
        unset( $data['splitPayment']);

        $query=$this->db->where("order_id",$data['order_id']);
        $query=$this->db->get('order_master');
        $order_data = $query->result_array();

        $grand_total= $order_data[0]['grand_total'];
        $data['grand_total'] = round($grand_total);
        $data['order_only_date'] = $data['order_only_date'];
        $this->db->where('order_id', $data['order_id']);
        $this->db->update('order_master',$data);
       
        if($data['status_id'] == 2){
            $this->db->where('table_id', $data['table_id']);
            $this->db->update('table_master',array("table_status"=>"active"));

            $this->db->insert('account_transactions',
            array(
                "transaction_type"=>"deposit",
                "amount"=>round($grand_total),
                "purpose"=>"Food/Drink",
                "transaction_date" => $data['order_only_date'],
                "order_id"=>$data['order_id'],
                )
            );
        }

        
        if(isset( $splitPayment) && count( $splitPayment) > 0){
            $this->db->where('order_id', $data['order_id']);
            $this->db->delete('order_collection_master');
            $this->db->insert_batch('order_collection_master', $splitPayment);
        }
        

        if($data['status_id'] == 3){
            $this->db->where('table_id', $data['table_id']);
            $this->db->update('table_master',array("table_status"=>"active"));
        }
        return array("stat" => 200, "msg" => "Success");
    }

    public function FinalAppSubmitOrder_data($data){
        $query=$this->db->where("order_id",$data['order_id']);
        $query=$this->db->get('order_master');
        $order_data = $query->result_array();

        $grand_total= $order_data[0]['grand_total'];
        $data['grand_total'] = round($grand_total);
        $data['order_only_date'] = $data['order_only_date'];
        $this->db->where('order_id', $data['order_id']);
        $this->db->update('order_master',$data);

        $food_total=0;
        $food_total_with_gst=0;
        $drinks_total=0;
        $drinks_sub_total=0;
        $food_gst=0;
        $food_discount=0;
        $drinks_discount=0;
        $discount=0;
        $grand_total=0;
        $query=$this->db->where("order_id",$order_data[0]['order_id']);
        $query=$this->db->join('food_master', 'food_master.food_id = order_details_master.food_id', 'left');
        $query=$this->db->get("order_details_master");
        $order_sub_data = $query->result_array();
    
        for($i=0;$i<count($order_sub_data);$i++){
            if($order_sub_data[$i]['category_id'] == 2){
                $drinks_sub_total+=$order_sub_data[$i]['sub_total'];
            }else{
                $query=$this->db->get('gst_master');
                $gst_data = $query->result_array();

                $food_total+=$order_sub_data[$i]['sub_total'];
                $food_total_with_gst+=$order_sub_data[$i]['sub_total'] + $order_sub_data[$i]['sub_total'] * ($gst_data[0]['igst']/100);
                $food_gst+=($order_sub_data[$i]['sub_total'] * ($gst_data[0]['igst']/100));
            }
            
        }
        if($order_data[0]['discount_percentage'] != 0){
            $food_discount = (($food_total * $order_data[0]['discount_percentage'])/100);
        }
        if($order_data[0]['discount_percentage_drink'] != 0){
            $drinks_discount = (($drinks_sub_total * $order_data[0]['discount_percentage_drink'])/100);
        }
        $discount = $food_discount + $drinks_discount;
        $drinks_total = $drinks_sub_total;
        $food_total_with_gst = $food_total - $food_discount + $food_gst;
        $grand_total = ($food_total_with_gst + ($drinks_total-$drinks_discount)) ;

        $this->db->where('order_id', $order_data[0]['order_id']);
        $this->db->update('order_master',array(
            "food_total" => $food_total,
            "food_total_with_gst" =>($food_total_with_gst),
            "drinks_total" => $drinks_total,
            "food_gst" => $food_gst,
            "discount" => $discount,
            "grand_total" => round($grand_total),
            ));
       
        if($data['status_id'] == 2){

            $this->db->where('table_id', $data['table_id']);
            $this->db->update('table_master',array("table_status"=>"active"));

            $this->db->insert('account_transactions',
            array(
                "transaction_type"=>"deposit",
                "amount"=>round($grand_total),
                "purpose"=>"Food/Drink",
                "transaction_date" => $data['order_only_date'],
                "order_id"=>$data['order_id'],
                )
            );
        }

        if($data['status_id'] == 3){
            $this->db->where('table_id', $data['table_id']);
            $this->db->update('table_master',array("table_status"=>"active"));
        }
        return array("stat" => 200, "msg" => "Success");
    }

    public function Transaction_data($data){
        $sql = "SELECT
            ID,
            transaction_date,
            transaction_type,
            amount,
            purpose,
            SUM(CASE WHEN transaction_type = 'deposit' THEN amount ELSE -amount END) 
                OVER (ORDER BY transaction_date, ID) AS running_balance
        FROM
            account_transactions  
        WHERE account_transactions.transaction_date BETWEEN '".$data['start_date']."' AND '".$data['end_date']."'";
        
        $query = $this->db->query($sql);
        $res = $query->result_array();
        return array("stat" => 200, "msg" => "Success","data"=>$res);
    }

    public function AddItem_data($order_details_master){

        $data=$order_details_master['order_details'];
        if($data['order_details_id']){
            $query=$this->db->where("order_details_id",$data['order_details_id']);
        }else{
            $query=$this->db->where("order_id",$data['order_id']);
            $query=$this->db->where("food_id",$data['food_id']);
            $query=$this->db->where("size_id",$data['size_id']);
        }
        
        $query=$this->db->get('order_details_master');
        $order_data = $query->result_array();

        if(count($order_data) > 0) {
            $this->db->where("order_details_id",$order_data[0]['order_details_id']);
            if($data['order_details_id']){
                $this->db->set('quantity', $data['quantity']);
                $this->db->set('kitchen_quantity', "kitchen_quantity+1",FALSE);
                $sub_total=$data['sub_total'];
            }else{
                $this->db->set('quantity', "quantity+1",FALSE);
                $this->db->set('kitchen_quantity', "kitchen_quantity+1",FALSE);
                $sub_total=(1+$order_data[0]['quantity']) * $order_data[0]['food_unit_price'];
            }
            
            $this->db->set('kitchen_status', "0");
            $this->db->set('sub_total', $sub_total);
            $this->db->update('order_details_master');
            //echo $this->db->last_query(); die;

        } else{
            $data['kitchen_quantity'] = 1 ;
            $this->db->insert('order_details_master',$data);
        }

        return array("stat" => 200, "msg" => "Added Succesfully");
    }

    public function User_login_data($data){

        if(!isset($data['password'])){
            return array("stat" => 400, "msg" => "Please enter password");
        }

        if(!isset($data['email_id'])){
            return array("stat" => 400, "msg" => "Please enter email id");
        }

        $this->db->where("password",base64_encode($data['password']));
        $this->db->where("email_id",($data['email_id']));
        $query=$this->db->get('admin_master');
        $data = $query->result_array();

        if(count($data) > 0){
            $data[0]['access_token'] = md5(uniqid().rand(1000000, 9999999));
            $data[0]['name'] = $data[0]['admin_id'] == 1 ? 'Admin':'User';
            $data[0]['phone'] = '7430983134';
            return array("stat" => 200, "msg" => "Success","all_list"=>$data[0]);
        }else{
            
            return array("stat" => 400, "msg" => "Email or Password Incorrect");
        }
    }

    public function GetFood_data($postData){

        $query=$this->db->where("food_master.del_status",0);
        $query=$this->db->where("food_master.food_status",0);
        $query=$this->db->where("category_id",$postData['food']['category_id']);
        $query=$this->db->join('food_price_master', 'food_price_master.food_id = food_master.food_id', 'left');
        $query=$this->db->join('size_master', 'food_price_master.size_id = size_master.size_id', 'left');
        $query=$this->db->get('food_master');
        $data = $query->result_array();
        $order_data = [];
        if(isset($postData['food']['table_id'])){
            $query=$this->db->where("order_master.table_id",$postData['food']['table_id']);
            $query=$this->db->where("table_status",'deactive');
            $query=$this->db->where("status_id",'1');
            $query=$this->db->join('table_master', 'order_master.table_id = table_master.table_id', 'left');
            $query=$this->db->join('order_details_master', 'order_details_master.order_id = order_master.order_id', 'left');
            $query=$this->db->get('order_master');
            $order_data = $query->result_array();
        }
        if(count($data) > 0){
            for($i=0;$i<count($data);$i++){

                $data[$i]['quantity'] = 0;
                $data[$i]['isProductAdded'] = false;

                if(count($order_data) > 0){
                    for($j =0; $j<count($order_data);$j++){
                        if($order_data[$j]['food_id'] == $data[$i]['food_id'] && 
                            $order_data[$j]['size_id'] == $order_data[$j]['size_id']){
                            $data[$i]['quantity'] = $order_data[$j]['quantity'];
                            $data[$i]['isProductAdded'] = true;
                            $data[$i]['added_food_comments'] = $order_data[$j]['food_comments'];
                        }else{
                            continue;
                        }
                    }
                }
                
                $data[$i]['food_image'] = $this->config->item('file_url').$data[$i]['food_image'];

                if( $data[$i]['category_id'] == 2){
                    $data[$i]['food_with_pl'] = $data[$i]['food_name']." ".$data[$i]['size_name']." (".$data[$i]['food_item_code'].")";
                    $data[$i]['food_comments'] = [];
                }else{
                    $data[$i]['food_with_pl'] = $data[$i]['food_name']." (".$data[$i]['food_item_code'].")";
                    $data[$i]['food_comments'] = [
                        array("name"=>'Less Spicy',"value"=>'Less Spicy',"checked"=>false),
                        array("name"=>'Without Gravy',"value"=>'Less Spicy',"checked"=>false),
                        array("name"=>'More Spicy',"value"=>'Less Spicy',"checked"=>false),
                        array("name"=>'Normal',"value"=>'Less Spicy',"checked"=>false),
                        array("name"=>'Deep Fry',"value"=>'Less Spicy',"checked"=>false),
                        array("name"=>'Dry',"value"=>'Less Spicy',"checked"=>false),
                    ];
                }

            }
            return array("stat" => 200, "msg" => "Success", "list_count"=>count($data),"all_list"=>$data);
        }else{
            return array("stat" => 400, "msg" => "No data found", "list_count"=>count($data),"all_list"=>$data);
        }
    }



    public function AddOrder_data($data){
        $query=$this->db->where("order_master.table_id",$data['table_id']);
        $query=$this->db->where("table_status",'deactive');
        $query=$this->db->where("status_id",'1');
        $query=$this->db->join('table_master', 'order_master.table_id = table_master.table_id', 'left');
        $query=$this->db->join('order_details_master', 'order_master.order_id = order_details_master.order_id', 'left');
        $query=$this->db->get('order_master');
        $order_data = $query->result_array();
        //echo $this->db->last_query(); die;

        if($order_data){

            $order_id = $order_data[0]['order_id'];
            $food_total=0;
            $food_total_with_gst=0;
            $drinks_total=0;
            $food_gst=0;
            $grand_total=0;
            $query=$this->db->get('gst_master');
            $gst_data = $query->result_array();
            $sub_array = array_merge($data['drink_data'],$data['food_data']);

            
                $string="";
                for($i=0;$i< count($sub_array);$i++){
                    $string.=$sub_array[$i]['food_id']."||".$sub_array[$i]['size_id'].",,";
                }
                $string = rtrim($string,",,");
                for($i=0;$i<count($order_data);$i++){
                    if (strpos($string, $order_data[$i]['food_id']."||".$order_data[$i]['size_id']) === false) { 
                        $this->db->where('order_details_id',$order_data[$i]['order_details_id']);
                        $this->db->delete('order_details_master');
                    }
                }

            for($i=0;$i<count($sub_array);$i++){
                $this->db->where('order_details_master.order_id',$order_id);
                $this->db->where('order_details_master.food_id',$sub_array[$i]['food_id']);
                $this->db->where('order_details_master.size_id',$sub_array[$i]['size_id']);
                $this->db->join('food_master', 'food_master.food_id = order_details_master.food_id', 'left');
                $query=$this->db->get('order_details_master');
                $check = $query->result_array();

                if(count($check) > 0){
                    $update_arr = array(
                        "quantity"=>$sub_array[$i]['quantity'],
                        "sub_total" => $check[0]['food_unit_price'] * ($sub_array[$i]['quantity']),
                        "food_comments" => $sub_array[$i]['food_comments'],
                        "kitchen_status"=>0,
                        "kitchen_quantity"=>($sub_array[$i]['quantity'] - $check[0]['quantity'])
                    );
                    $this->db->where('order_details_id',$check[0]['order_details_id']);
                    $this->db->update('order_details_master',$update_arr);
                    $single_price = $check[0]['food_unit_price'] * ($sub_array[$i]['quantity']);
                    if($check[0]['category_id'] == 1){
                        
                        $food_total+=$single_price;
                        $food_total_with_gst+=$single_price + $single_price * ($gst_data[0]['igst']/100);
                        $food_gst+=($single_price * ($gst_data[0]['igst']/100));
                    }else{
                        $drinks_total+=$single_price;
                    }

                }else{
                    $order_details_data = [];

                    $this->db->where('food_price_master.food_id',$sub_array[$i]['food_id']);
                    $this->db->where('food_price_master.size_id',$sub_array[$i]['size_id']);
                    $this->db->join('food_master', 'food_master.food_id = food_price_master.food_id', 'left');
                    $this->db->join('size_master', 'size_master.size_id = food_price_master.size_id', 'left');
                    $query=$this->db->get('food_price_master');
                    $food_data = $query->result_array();

                    $order_details_data[] = $sub_array[$i];
                    $order_details_data[0]['food_unit_price'] = $food_data[0]['selling_price'];
                    $order_details_data[0]['sub_total'] = $food_data[0]['selling_price'] * $sub_array[$i]['quantity'];
                    $order_details_data[0]['order_id'] = $order_id;

                    if($food_data[0]['category_id'] != 2){
                        $food_total+=$order_details_data[0]['sub_total'];
                        $food_total_with_gst+=$order_details_data[0]['sub_total'] + $order_details_data[0]['sub_total'] * ($gst_data[0]['igst']/100);
                        $food_gst+=($order_details_data[0]['sub_total'] * ($gst_data[0]['igst']/100));
                        $order_details_data[0]['food_comments'] = $sub_array[$i]['food_comments'];
                        $order_details_data[0]['kitchen_status'] = 0;
                        $order_details_data[0]['kitchen_quantity'] = $sub_array[$i]['quantity'];
                        $order_details_data[0]['food_information'] = $food_data[0]['food_name'];
                    }else{
                        $drinks_total+=$order_details_data[0]['sub_total'];
                        $order_details_data[0]['food_information'] = $food_data[0]['food_name'].','.$food_data[0]['size_name'];
                        $order_details_data[0]['food_comments'] = '';
                        $order_details_data[0]['kitchen_status'] = 1;
                        $order_details_data[0]['kitchen_quantity'] = $sub_array[$i]['quantity'];
                    }
                    
                    $this->db->insert('order_details_master',$order_details_data[0]);
                }
            
            }
            $grand_total = $food_total_with_gst + $drinks_total;

            $order_update_data = array(
                "food_total" => $food_total,
                "food_total_with_gst" => $food_total_with_gst,
                "drinks_total" => $drinks_total,
                "food_gst" => $food_gst,
                "grand_total" => round($grand_total),
            );
            $this->db->where('order_id',$order_id);
            $oQuery = $this->db->update('order_master',$order_update_data);
            
            if (!$oQuery) {
                return array("stat" => 500, "msg" => "Something went wrong");
             }
            return array("stat" => 200, "msg" => "Update Successfully" ,"order_id"=>$order_id);

        }else{
    
            $this->db->where('table_id', $data['table_id']);
            $this->db->update('table_master',array("table_status"=>"deactive"));

            $food_total=0;
            $food_total_with_gst=0;
            $drinks_total=0;
            $food_gst=0;
            $sub_array = [];
            $sub_array = array_merge($data['drink_data'],$data['food_data']);
            $order_details_data = [];

            ///// GST ////
            $query=$this->db->get('gst_master');
            $gst_data = $query->result_array();
            ///// GST ////

            for($i=0;$i<count($sub_array);$i++){

                
                $this->db->where('food_price_master.food_id',$sub_array[$i]['food_id']);
                $this->db->where('food_price_master.size_id',$sub_array[$i]['size_id']);
                $this->db->join('food_master', 'food_master.food_id = food_price_master.food_id', 'left');
                $this->db->join('size_master', 'size_master.size_id = food_price_master.size_id', 'left');
                $query=$this->db->get('food_price_master');
                $food_data = $query->result_array();

                $order_details_data[$i] = $sub_array[$i];
                if($food_data[0]['size_name'] == 'NA'){
                    $order_details_data[$i]['food_information'] = $food_data[0]['food_name'];
                }else{
                    $order_details_data[$i]['food_information'] = $food_data[0]['food_name'].','.$food_data[0]['size_name'];
                }
                
                $order_details_data[$i]['food_unit_price'] = $food_data[0]['selling_price'];
                $order_details_data[$i]['sub_total'] = $food_data[0]['selling_price'] * $sub_array[$i]['quantity'];
                $order_details_data[$i]['food_comments'] = $sub_array[$i]['food_comments'];
                $order_details_data[$i]['kitchen_status'] = 0;
                $order_details_data[$i]['kitchen_quantity'] = $sub_array[$i]['quantity'];

                if($food_data[0]['category_id'] == 1){
                    $food_total+=$order_details_data[$i]['sub_total'];
                    $food_total_with_gst+=$order_details_data[$i]['sub_total'] + $order_details_data[$i]['sub_total'] * ($gst_data[0]['igst']/100);
                    $food_gst+=($order_details_data[$i]['sub_total'] * ($gst_data[0]['igst']/100));
                }else{
                    $drinks_total+=$order_details_data[$i]['sub_total'];
                }
            }
            $grand_total = $food_total_with_gst + $drinks_total;


            $sql = "SELECT MAX(order_id) as order_id FROM order_master";
            $query = $this->db->query($sql);
            $res = $query->result_array();
            $numbers = $this->generate_numbers($res[0]['order_id'] + 1, 20, 10);
            if (date('m') <= 3) {//Upto June 2014-2015
                $financial_year = (date('Y')-1) . '-' . date('Y');
            } else {//After June 2015-2016
                $financial_year = date('Y') . '-' . (date('Y') + 1);
            }
            $invoic_number="PAL-".$numbers[0]."-".$financial_year;
    
            $order_insert_data = array(
                "bill_invoice_number " => $invoic_number,
                "table_id"=>$data['table_id'],
                "food_total" => $food_total,
                "food_total_with_gst" => $food_total_with_gst,
                "drinks_total" => $drinks_total,
                "food_gst" => $food_gst,
                "grand_total" => round($grand_total),
            );
            $this->db->insert('order_master',$order_insert_data);
            $order_id=$this->db->insert_id();

            for($j=0;$j<count($order_details_data);$j++){
                $order_details_data[$j]['order_id'] = $order_id;
            }
            $oQuery = $this->db->insert_batch('order_details_master',$order_details_data);

            if (!$oQuery) {
                return array("stat" => 500, "msg" => "Something went wrong");
             }
            return array("stat" => 200, "msg" => "Success","order_id"=>$order_id);
        }
    }

    public function CancelOrder_data($data){
        $query=$this->db->where("order_master.table_id",$data['table_id']);
        $query=$this->db->where("table_status",'deactive');
        $query=$this->db->where("status_id",'1');
        $query=$this->db->join('table_master', 'order_master.table_id = table_master.table_id', 'left');
        $query=$this->db->get('order_master');
        $order_data = $query->result_array();

        $order_id = $order_data[0]['order_id'];
        if($order_id == null){
            return array("stat" => 400, "msg" => "Order not found");
        }

        $this->db->where('order_id',$order_id);
        $this->db->update('order_master',array("status_id"=>3));

        $this->db->where('order_id', $order_id);
        $this->db->delete('order_collection_master');

        $this->db->where('table_id', $data['table_id']);
        $this->db->update('table_master',array("table_status"=>"active"));

        return array("stat" => 200, "msg" => "Cancel Sucessfully");
    }

    public function DeleteOrder_data($data){
        $this->db->where("order_id",$data['order_id']);
        $this->db->update("order_master",array("status_id"=>3));

        $this->db->where('order_id', $data['order_id']);
        $this->db->delete('order_collection_master');

        $this->db->where("order_id",$data['order_id']);
        $this->db->delete("account_transactions");

        return array("stat" => 200, "msg" => "Delete Sucessfully");
    }

    public function DeleteExpense_data($data){
        $this->db->where("daily_expense_id",$data['daily_expense_id']);
        $this->db->update("daily_expense_master",array("del_status"=>1));

        $this->db->where("expense_id",$data['daily_expense_id']);
        $this->db->delete("account_transactions");

        return array("stat" => 200, "msg" => "Delete Sucessfully");
    }

    public function GetAllSaleReport_data($data){
        $sql = 
"SELECT order_master.order_only_date, 
SUM(CASE WHEN order_master.payment_id = 1 AND order_master.order_comments != 'zomato' AND (order_comments NOT LIKE 'sw%' OR order_comments NOT LIKE '%GY') THEN (order_master.food_total) ELSE 0 END) AS food_cash_total,

SUM(CASE WHEN (order_master.payment_id = 2 OR order_master.payment_id = 3) AND order_master.order_comments != 'zomato' AND (order_comments NOT LIKE 'sw%' OR order_comments NOT LIKE '%GY')  THEN (order_master.food_total) ELSE 0 END) AS food_card_total,

SUM(CASE WHEN (order_master.payment_id = 4 OR order_master.payment_id = 5 OR order_master.payment_id = 6) AND order_master.order_comments != 'zomato' AND (order_comments NOT LIKE 'sw%' OR order_comments NOT LIKE '%GY')  THEN (order_master.food_total) ELSE 0 END) AS food_upi_total,

SUM(CASE WHEN order_master.order_comments = 'zomato'  THEN (order_master.food_total) ELSE 0 END) AS food_zomato_total,
SUM(CASE WHEN order_comments LIKE 'sw%' OR order_comments LIKE '%GY'  THEN (order_master.food_total) ELSE 0 END) AS food_swiggy_total,

SUM(order_master.food_total) AS total_food_with_out_gst,

SUM(CASE WHEN order_master.payment_id = 1 THEN (order_master.drinks_total) ELSE 0 END) AS drinks_cash_total,

SUM(CASE WHEN order_master.payment_id = 2 OR order_master.payment_id = 3 THEN (order_master.drinks_total) ELSE 0 END) AS drinks_card_total,

SUM(CASE WHEN order_master.payment_id = 4 OR order_master.payment_id = 5 OR order_master.payment_id = 6 THEN (order_master.drinks_total) ELSE 0 END) AS drinks_upi_total,

SUM(order_master.drinks_total) AS total_drinks ,

SUM(CASE WHEN order_master.payment_id = 1 THEN order_master.food_total + order_master.drinks_total ELSE 0 END) AS total_cash_sale,

SUM(CASE WHEN order_master.payment_id = 2 OR order_master.payment_id = 3 THEN order_master.food_total + order_master.drinks_total ELSE 0 END) AS total_card_sale,

SUM(CASE WHEN order_master.payment_id = 4 OR order_master.payment_id = 5 OR order_master.payment_id = 6 THEN order_master.food_total + order_master.drinks_total ELSE 0 END) AS total_upi_sale,

SUM(order_master.food_total + order_master.drinks_total) AS total_sale ,

SUM(order_master.food_gst) AS total_sale_gst,

SUM(order_master.discount) AS total_discount ,

SUM((order_master.food_total + order_master.drinks_total) - (order_master.food_gst +order_master.discount)) AS net_total_sale 

FROM order_master WHERE order_master.status_id = 2 AND order_only_date BETWEEN '".$data['fliter_with_date_from']."' AND '".$data['fliter_with_date_to']."' GROUP BY order_master.order_only_date;";
        //return  $sql;die;
        $query = $this->db->query($sql);
        $res = $query->result_array();
        if(count($res)>0){
            return array("stat" => 200, "msg" => "Success","all_list"=>$res);
        }else{
            return array("stat" => 400, "msg" => "No data","all_list"=>$res);
        }
    }
}
