<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_Common_model');
        $this->load->model('member/ComModel');
        $this->load->model('Admin_Register_model');

        ($this->session->userdata('user_cate') != 4) ? redirect(base_url(), 'refresh') : '';
        error_reporting(0);
    }
    function index()
    {

        $data['title'] = 'Dashboard';
        $data['breadcrumb'] = 'Dashboard';
        $data['regist'] = $this->Admin_Common_model->count_all('registration');
        // $data['guest_user'] = $this->ComModel->showAllDataWcon('*',array('user_type'=>0),'registration');
        $data['guest_user'] = $this->ComModel->showAllDaLaTen('*',array('user_type'=>4),'registration');
        // print_r($data['guest_user']);die;
        // $data['pndng_user'] = $this->Admin_Common_model->count_all('registration',array('status'=>0));
        // $data['memberDetails'] = $this->ComModel->showData('*',array('status' => 1),'registration');

        // $data['sector'] = $this->Admin_Register_model->get_all_sector();
        // $data['register'] = $this->Admin_Register_model->get_all_register();
        
        // $data['register'] = $this->ComModel->showAllDataWcon('*',array('sector' => 18),'registration');


     
        $this->load->view('guest/dashboard',$data);
    }
}

?>
