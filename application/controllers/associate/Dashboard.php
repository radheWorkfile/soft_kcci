<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('associate/Associate_Common_model');
        ($this->session->userdata('user_cate') != 3) ? redirect(base_url(), 'refresh') : '';
        error_reporting(0);
    }
    function index()
    {
        $data['title'] = 'Dashboard';
        $data['breadcrumb'] = 'Dashboard';
        $data['menu_chk']=$this->Associate_Common_model->get_menu();
        $this->load->view('associate/dashboard', $data);
    }
}

?>