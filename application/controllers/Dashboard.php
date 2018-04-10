<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {
    function __construct(){
        parent::__construct();

        if(!$this->session->userdata('user_auth'))
            redirect('auth/login');
            
    }

    function index(){
       $this->load->view('template/content',[
           'view' => 'admin/dashboard_view',
           'tittle' => 'Dashboard',
           'page_tittle' => 'Dashboard'
       ]);
    }
    function logout(){
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}