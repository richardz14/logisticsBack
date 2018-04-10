<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {
    function __construct(){
        parent::__construct();

        if(!$this->session->userdata('user_auth'))
        redirect('auth/login');

    $this->load->model('User_model');
    }

    function list(){
        $allUsers = $this->User_model->getAllUsers();
        
        $this->load->view('template/content',[
            'view' => 'admin/user/user_list_view',
            'tittle' => 'USER LIST',
            'page_tittle' => 'USER LIST',
            'userList' => $allUsers
        ]);
    }
    function create(){
        $userTypeOpt = array();
        $list = $this->User_model->getUserType();
        if(!empty($list)){
            foreach($list as $l){
                $userTypeOpt[$l->user_type_id] = $l->user_type_name;
            }
        }

        $this->form_validation->set_rules('usertype','Uset Type','required')
        ->set_rules('fname','First Name','required')
        ->set_rules('lname','Last Name','required')
        ->set_rules('username','Username','required')
        ->set_rules('password','Password','required')
        ->set_rules('rePassword','Retype Password','required|matches[password]');
    if($this->form_validation->run()){
        $insert = $this->Common_model->insert('user',
            [
                'user_type_id' => $this->input->post('usertype'),
                'username' => $this->input->post('username'),
                'password' => md5($this->input->post('password')), 
                'firstname' => $this->input->post('fname'),
                'lastname' => $this->input->post('lname')
            ]);

            if($insert){
                message('success','Successfuly created!');
               redirect('User/create');
               
            }else{
                message('danger','Error Creating user!');
                redirect('User/create');
                
            }
    }

        $this->load->view('template/content',[
            'view' => 'admin/user/create_user_view',
            'tittle' => 'CREATE USER',
            'page_tittle' => 'CREATE USER',
            'usertype' => $userTypeOpt
        ]);
    }
    function createUserType(){
        $list = $this->User_model->getUserType();

     $this->form_validation->set_rules('userType','Uset Type','required');
    if($this->form_validation->run()){
        $insert = $this->Common_model->insert('user_type',
            [
                'user_type_name' => $this->input->post('userType'),
                'user_type_slug' =>strtolower($this->input->post('userType'))
            ]);

            if($insert){
                message('success','Successfuly created!');
               redirect('User/createUserType');
               
            }else{
                message('danger','Error Creating user type!');
                redirect('User/createUserType');
                
            }
    }

        $this->load->view('template/content',[
            'view' => 'admin/user/create_userType_view',
            'tittle' => 'CREATE USERTYPE',
            'page_tittle' => 'CREATE USERTYPE',
            'userTypeList' => $list
        ]);
    }
}