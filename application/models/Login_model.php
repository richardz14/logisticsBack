<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	function authenticate($username, $pwd){
		if($username != '' && $pwd != ''){
			$check = $this->db->select()->where([
				'username' => $username,
				'password' => md5($pwd),
				'user_type_id !=' => 1
            ])->get('user');

			if($check->num_rows() > 0){
				$row = $check->row();
				// Set sessions
				$this->session->set_userdata('user_auth',[
					'user_id' => $row->user_id,
					'user_name' => $row->username,
					'token' => md5($row->username)
				]);
				return true;
			}else
				return false;
			
		}
	}

}