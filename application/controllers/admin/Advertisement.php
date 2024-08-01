<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Advertisement extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_Sector_model');
        $this->load->model('ComModel');
        $this->load->model('Admin_Industeries_model');
        $this->load->model('Admin_Location_model');
        // $this->load->model('Admin_Caste_model');
        $this->load->model('Admin_Urban_model');
        // $this->load->model('Admin_Rural_model');
        // $this->load->model('Admin_Package_model');
        $this->load->model('Admin_Advertisement_model');
        // $this->load->model('Admin_Common_model');
        // $this->load->model('Admin_Business_model');
        $this->load->helper(array('form', 'url'));
    }


    public function manageAdver() 
    {
        $data['advertise'] = $this->Admin_Advertisement_model->all_data();
        // echo "<pre>"; print_r($data['advertise']); die;
        $this->load->view('admin/advertisement/manageAdvertisement',$data);
     }


     function addAdverM()
    {

 $config['upload_path']          = './uploads/advertisement/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('photo')) {
                echo $this->upload->display_errors();
            } else {              
                $img_data = $this->upload->data();
              
                $image =  $img_data['file_name'];
            }
            $data = array(
                'title' => $this->input->post('title'),
               'photo' => $image
            );
            // print_r($data); die;
        $this->Admin_Advertisement_model->save_data($data);
       

    }



 
  

}
