<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_Common_model');
        $this->load->model('member/ComModel');
        $this->load->model('member/ViewModel');
        $this->load->model('Admin_Register_model');
        

        ($this->session->userdata('user_cate') != 5) ? redirect(base_url(), 'refresh') : '';
        error_reporting(0);
    }
    function index()
    {

        $data['title'] = 'Dashboard';
        $data['breadcrumb'] = 'Dashboard';
        $data['regist'] = $this->Admin_Common_model->count_all('registration');
        $data['apprv_user'] = $this->Admin_Common_model->count_all('registration',array('status'=>1));
        $data['pndng_user'] = $this->Admin_Common_model->count_all('registration',array('status'=>0));
        $data['memberDetails'] = $this->ComModel->showData('*',array('status' => 1),'registration');
        $data['addedByVerMem'] = $this->ComModel->showAllDataWcon('*',array('created_by_user_type_id' => $this->session->userdata('user_ids')),'registration');
        $data['business']=$this->ComModel->businessTypeDAta();
        $data['verMem'] = $this->ComModel->allMemDatMod();
        $data['regisDatas'] = $this->ComModel->disData('*',array('id' => $this->session->userdata('user_ids'),'status' => 0 ),'registration');
        $data['memberData'] = $this->ComModel->disData('*',array('id' => $this->session->userdata('user_ids'),'status' => 1 ),'registration');
         $this->load->view('member/dashboard', $data);
    }
    
    public function profile()
    {
        // $data['memberData'] = $this->ComModel->disData('*',array('id' => $this->session->userdata('user_ids'),'status' => 1 ),'registration');
        $this->load->view('member/dashboard');
    }
    public function viewDataModelData()
    {
        $data = $this->input->post();
        $return= $this->ComModel->allMemDatMod_mod($data);
        echo json_encode($return);
    }
}

?>
