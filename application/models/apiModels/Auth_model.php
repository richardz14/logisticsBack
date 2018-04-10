<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

    function login($username = '', $pass = ''){
		if($username != '' && $pass != ''){
			$check = $this->db->select('user_id, username, concat(firstname," ",lastname) as fullname, type.user_type_slug, type.user_type_id')
			->group_start()
				->where('username', $username)
			//	->or_where('email', $username)
			->group_end()
			->where([
				'password' => md5($pass),
				'user.user_type_id !=' => 2
			])->join('user_type as type','type.user_type_id = user.user_type_id')->get('user');

			if($check->num_rows() > 0)
				return $check->row();
		}
		return FALSE;
	}

}