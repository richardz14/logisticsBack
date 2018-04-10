<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends MY_Controller {
    function __construct(){
        parent::__construct();

        if(!$this->session->userdata('user_auth'))
        redirect('auth/login');

        $this->load->model('Employee_model')
        ->model('Truck_model')
        ->model('Job_order_model');
    }

function list(){
    $list = $this->Job_order_model->getListjobOrderList();
   
    $this->load->view('template/content',[
        'view' => 'admin/order/list_view',
        'tittle' => 'JOB ORDER LIST',
        'page_tittle' => 'JOB ORDER LIST',
        'jobOrderList' => $list
    ]);
}
function create(){
    $empOption = array();
    $truckOption = array();
    $empOption[''] = '-- SELECT --';
    $list = $this->Employee_model->getListEmployee();
    if(!empty($list)){
        foreach($list as $l){
            $empOption[$l->emp_id] = $l->emp_fname." ".$l->emp_lname;
        }
    }
    $truckOption[''] = '-- SELECT --';
    $list = $this->Truck_model->getList();
    if(!empty($list)){
        foreach($list as $l){
            $truckOption[$l->truck_id] = $l->truck_model." (".$l->plate_num.")";
        }
    }

    $this->form_validation->set_rules('empOpt','Employee','required')
        ->set_rules('truckOpt','Truck','required')
        ->set_rules('jname','Job Name','required')
        ->set_rules('jdesc','Job Description','required');
    if($this->form_validation->run()){
        $insert = $this->Common_model->insert('job_orders',
            [
                'emp_id' => $this->input->post('empOpt'),
                'truck_id' => $this->input->post('truckOpt'),
                'job_name' => $this->input->post('jname'),
                'job_desc' => $this->input->post('jdesc')
            ]);

            if($insert){
                message('success','Successfuly created!');
               redirect('Orders/create');
               
            }else{
                message('danger','Error Creating Job Order');
                redirect('Orders/create');
                
            }
    }

    $this->load->view('template/content',[
        'view' => 'admin/order/create_view',
        'tittle' => 'CREATE JOB ORDER',
        'page_tittle' => 'CREATE JOB ORDER',
        'employeeOption' => $empOption,
        'truckOption' => $truckOption
    ]);
}

}