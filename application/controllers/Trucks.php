<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trucks extends MY_Controller {
    function __construct(){
        parent::__construct();

        if(!$this->session->userdata('user_auth'))
        redirect('auth/login');

        $this->load->model('Truck_model');
    }
    function index(){   
    }
    function list(){
        $list = $this->Truck_model->getList();
      
        $this->load->view('template/content',[
            'view' => 'admin/trucks/trucks_list',
            'tittle' => 'TRUCK LIST',
            'page_tittle' => 'TRUCK LIST',
            'listTrucks' => $list
        ]);
    }

    function create(){
        $list = $this->Truck_model->getList();

        $this->form_validation->set_rules('plateNumber','Truck Plate Number','required|is_unique[trucks.plate_num]')
            ->set_rules('truckModel','Truck Model','required');
        if($this->form_validation->run()){
            $insert = $this->Common_model->insert('trucks',
            [
                'plate_num' => $this->input->post('plateNumber'),
                'truck_model' => $this->input->post('truckModel')
            ]);

            if($insert){
                message('success','Successfuly created!');
               redirect('trucks/create');
               
            }else{
                message('danger','Error Creating truck details');
                redirect('trucks/create');
                
            }
        }   

        $this->load->view('template/content',[
            'view' => 'admin/trucks/trucks_create',
            'tittle' => 'CREATE TRUCK',
            'page_tittle' => 'CREATE TRUCK',
            'listTrucks' => $list
        ]);
    }

}