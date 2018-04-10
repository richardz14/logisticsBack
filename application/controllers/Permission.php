<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permission extends MY_Controller {
    function __construct(){
        parent::__construct();

        if(!$this->session->userdata('user_auth'))
        redirect('auth/login');

    }

    function list(){
        $this->load->view('template/content',[
            'view' => 'admin/permission/perm_list_view',
            'tittle' => 'PERMISSION LIST',
            'page_tittle' => 'PERMISSION LIST'
        ]);
    }

    function create(){
        $this->load->view('template/content',[
            'view' => 'admin/permission/perm_create_view',
            'tittle' => 'CREATE PERMISSION',
            'page_tittle' => 'CREATE PERMISSION'
        ]);
    }
}