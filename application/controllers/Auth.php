<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MY_Controller {
    function __construct(){
        parent::__construct();
    }

    function login(){
        $this->load->view('admin/login/login_view',[
            'tittle' => 'Login',
        ]);
    }    

}