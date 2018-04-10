<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee_model extends CI_Model {

    function getListEmployee(){
        $query = $this->db->select()
                ->get('employees');
        if($query->num_rows() > 0){
           return $query->result();
        }
        return array();
    }

}