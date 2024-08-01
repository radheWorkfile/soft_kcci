<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Common extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_Sector_model');
        $this->load->model('ComModel');
        // $this->load->model('Admin_Industeries_model');
        // $this->load->model('Admin_Location_model');
        // $this->load->model('Admin_Caste_model');
        // $this->load->model('Admin_Urban_model');
        // $this->load->model('Admin_Rural_model');
        // $this->load->model('Admin_Package_model');
        // $this->load->model('Admin_Advertisement_model');
        // $this->load->model('Admin_Common_model');
        // $this->load->model('Admin_Business_model');
        $this->load->helper(array('form', 'url'));
    }
    // hello conArray ( [id] => 18 [status] => 0 [table] => sector )

    function chageStatus()
    {
      
        if ($this->input->is_ajax_request()) {
            $data = $this->input->post();
            //print_r($data);die;
            $val = $this->ComModel->chageStatus($data);
          
            echo ($data['status'] == 1) ? "
            <a style='color:green' href='javascript:void()'onClick='return changeStatus(\"" . $data['id'] . "\",\"0\",\"" . $data['table'] . "\",\"" . $data['loader'] . "\")'title='click to block user'><b><i class='fa fa-check'></i> </b></a>" : "
            <a style='color:red'   href='javascript:void()'onClick='return changeStatus(\"" . $data['id'] . "\",\"1\",\"" . $data['table'] . "\",\"" . $data['loader'] . "\")'title='click to active user'><b><i class='fa fa-times'></i></b></a>";
        }
    }
}
    ?>