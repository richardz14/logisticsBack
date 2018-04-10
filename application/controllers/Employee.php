<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends MY_Controller {
    function __construct(){
        parent::__construct();

        if(!$this->session->userdata('user_auth'))
        redirect('auth/login');

      $this->load->model('Employee_model');
    }

    function list(){
        $lists = $this->Employee_model->getListEmployee();
     
        $this->load->view('template/content',[
            'view' => 'admin/employee/listEmployee_view',
            'tittle' => 'Employee`s List',
            'page_tittle' => 'Employee`s List',
            'employeeList' => $lists
        ]);
    }
    
    function create(){
        $this->form_validation->set_rules('mname','Middle Name','required')
            ->set_rules('fname','First Name','required')
            ->set_rules('lname','Last Name','required')
            ->set_rules('dob','Date of Birth','required');
            
            if($this->form_validation->run()){
               $insert = $this->Common_model->insert('employees',[
                    'emp_fname' => $this->input->post('fname'),
                    'emp_mname' => $this->input->post('mname'),
                    'emp_lname' => $this->input->post('lname'),
                    'dob' => date('Y-m-d',time($this->input->post('dob')))
                ]);
                if($insert){
                    message('success','Successfuly created!');
                   redirect('Employee/create');
                   
                }else{
                    message('danger','Error Creating employee`s details!');
                    redirect('Employee/create');
                    
                }
            }

        $this->load->view('template/content',[
            'view' => 'admin/employee/createEmployee_view',
            'tittle' => 'Create Employee',
            'page_tittle' => 'Create Employee'
        ]);
    }
}