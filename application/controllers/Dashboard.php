<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {
    function __construct(){
        parent::__construct();
    }

    function index(){
       $this->load->view('template/content',[
           'view' => 'admin/dashboard_view',
           'tittle' => 'Dashboard',
           'page_tittle' => 'Dashboard'
       ]);
    }

}