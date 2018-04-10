<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Job_order_model extends CI_Model {

    function getListjobOrderList(){
        $query = $this->db->select()
            ->join('employees as emp','emp.emp_id = job_orders.emp_id','LEFT')
            ->join('trucks as truck','truck.truck_id = job_orders.truck_id','LEFT')
            ->get('job_orders');
        if($query->num_rows() > 0){
            return $query->result();
        }
        return array();
    }

}