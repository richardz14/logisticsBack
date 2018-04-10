<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Truck_model extends CI_Model {

  function getList(){
        $query = $this->db->select()
            ->get('trucks');
        if($query->num_rows() > 0){
            return $query->result();
        }
        return array();
  }

}