<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MY_Controller {
    function __construct(){
        parent::__construct();

        $this->load->model('Login_model');

        if($this->session->userdata('user_auth'))
        redirect('Dashboard');
    }
  
    function login(){

        $page_vars = array();
		$this->form_validation->set_rules('username','Username','trim')
		->set_rules('password','Password','trim');
       
		if($this->form_validation->run()){
			$username = $this->input->post('username');
			$pwd = $this->input->post('password');

			$check = $this->Login_model->authenticate($username, $pwd);
          
			if($check)
				redirect('Dashboard');
			else
				message('danger','Invalid username/password!');
        }
        
        $this->load->view('admin/login/login_view',[
            'tittle' => 'Login',
        ]);
    }    
}