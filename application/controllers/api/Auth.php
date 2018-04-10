<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MY_Controller {
    function __construct(){
        parent::__construct();
        $this->bootstrap();
    }
 /* Bootstrap */
 function bootstrap(){
	
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
    header('Access-Control-Max-Age: 1000');
    header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');
}
    function login(){
        $this->output->set_content_type('application/json', 'utf-8');
        $this->load->model('apiModels/Auth_model');


		$check = $this->Auth_model->login('username', 'password');

		$this->form_validation->set_rules('username', 'Username', 'required|trim')
		->set_rules('password', 'Password', 'required|trim');
		if($this->form_validation->run()){
			$username = $this->input->post('username'); // This can be username or email 
			$pass = $this->input->post('password');

			$check = $this->Auth_model->login($username, $pass);
			if($check){
				$this->output
					->set_output(json_encode([
						'status' => 1,
						'message' => 'You have logged in successfully.',
						'user' => $check
					]));
			}else{
				$this->output
					->set_output(json_encode([
						'status' => -1,
						'message' => 'Invalid username/password'
					]));
			}

		}else{
			$this->output->set_output(json_encode([
				'status' => 0,
				'errors' => $this->form_validation->error_array()
			]));
		}
    }

}