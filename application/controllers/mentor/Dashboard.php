<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_Register_model');
        $this->load->model('Admin_Common_model');
        $this->load->model('founder/ComModel');
        $this->load->model('mentor/ComModel');
        $this->load->model('member/ComModel');
        $this->load->model('ComModel');
        ($this->session->userdata('user_cate') != 3) ? redirect(base_url(), 'refresh') : '';
        error_reporting(0);
    }
    function index(){  
        $data['mentorNver'] = $this->ComModel->disData('*',array('id' => $this->session->userdata('user_ids'),'status' => 0 ),'registration');
        $data['mentorVer'] = $this->ComModel->disData('*',array('id' => $this->session->userdata('user_ids'),'status' => 1 ),'registration');
        $data['verMem'] = $this->ComModel->allMemDatMod();
        // print_r( $data['mentorVer'] );die;

        $this->load->view('mentor/dashboard',$data);
    }
    public function viewDataModelData()
    {
        $data = $this->input->post('id'); 
        $return= $this->ComModel->allMenDatMod($data);
    //    echo $data.'<br>';
        // echo $this->db->last_query().'<br>';
        echo json_encode($return);
    }
}

?>
