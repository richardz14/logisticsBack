<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    function getAllUsers(){
        $query = $this->db->select()
                ->join('user_type as type','type.user_type_id = user.user_type_id')
                ->get('user');
            if($query->num_rows() > 0){
               return $query->result();
            }
        return array();
    }

    function getUserType(){
        $query = $this->db->select()
                ->get('user_type');
        if($query->num_rows() > 0){
            return $query->result();
        }
        return array();
    }
}