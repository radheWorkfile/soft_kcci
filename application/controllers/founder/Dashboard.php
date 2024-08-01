<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_Common_model');
        $this->load->model('founder/ComModel');
        $this->load->model('mentor/ComModel');
        $this->load->model('member/ComModel');
        $this->load->model('ComModel');
        $this->load->model('Admin_Register_model');
        ($this->session->userdata('user_cate') != 2) ? redirect(base_url(), 'refresh') : '';
        error_reporting(0);
    }
    function index(){
        
        $data['founderNver'] = $this->ComModel->disData('*',array('id' => $this->session->userdata('user_ids'),'status' => 0 ),'registration');
        $data['founderVerMem'] = $this->ComModel->disData('*',array('id' => $this->session->userdata('user_ids'),'status' => 1 ),'registration');
        $data['verMem'] = $this->ComModel->allMemDatMod();
        // echo "<pre>"; print_r($data['founderVerMem']);die;
        $this->load->view('founder/dashboard',$data);
    }
    public function viewDataModelData()
    {
        $data = $this->input->post();
        $return= $this->ComModel->allMemDatMod_mod($data);
        // print_r($return);
        echo json_encode($return);
    }
}

?>
