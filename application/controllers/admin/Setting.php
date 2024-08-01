<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        // $this->load->model('login_model');
        // $this->load->library('form_validation');
        // $this->load->library('user_agent');
        // error_reporting(0);
    }
 

    public function manageSetting()
    {
        $this->load->view('admin/setting/setting_manage');
    }


    
  

}
