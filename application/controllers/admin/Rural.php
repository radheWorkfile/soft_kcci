<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rural extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_Sector_model');
        $this->load->model('ComModel');
        $this->load->model('Admin_Industeries_model');
        $this->load->model('Admin_Location_model');
        // $this->load->model('Admin_Caste_model');
        $this->load->model('Admin_Urban_model');
        $this->load->model('Admin_Rural_model');
        // $this->load->model('Admin_Package_model');
        // $this->load->model('Admin_Advertisement_model');
        // $this->load->model('Admin_Common_model');
        // $this->load->model('Admin_Business_model');
        $this->load->helper(array('form', 'url'));
    }


   public function manageRural()
   {
        $data['distr'] = $this->Admin_Rural_model->get_district();
        $data['block'] = $this->Admin_Rural_model->view_block();
        $data['constituencyPan'] = $this->Admin_Rural_model->view_constituency();
        $data['panchayat'] = $this->Admin_Rural_model->view_panchayat();
        $data['boothName'] = $this->Admin_Rural_model->view_booth_no();
        $data['boothNo'] = $this->Admin_Rural_model->view_booth_name();
        // echo "<pre>"; print_r($data); die;
        $this->load->view('admin/rural/manageRural',$data);
   }


   
   public function add_rural()
   {
       if ($this->input->is_ajax_request()) {
           $this->form_validation->set_rules('rural_type', 'Rural Type', 'required');
           if ($this->input->post('rural_type') == 1) {
               $this->form_validation->set_rules('district', 'District', 'required');
           } elseif ($this->input->post('rural_type') == 2) {
               $this->form_validation->set_rules('district_drp', 'District', 'required');
               $this->form_validation->set_rules('block_office', 'Block Office', 'required');
           } elseif ($this->input->post('rural_type') == 3) {
               $this->form_validation->set_rules('district_drp', 'District', 'required');
               $this->form_validation->set_rules('constituency', 'Constituency', 'required');
           } elseif ($this->input->post('rural_type') == 4) {
               $this->form_validation->set_rules('district_drp', 'District', 'required');
               $this->form_validation->set_rules('block_drp', 'Block Office', 'required');
               $this->form_validation->set_rules('constituency_drp', 'Constituency', 'required');
               $this->form_validation->set_rules('panchayat_name', 'Panchayat Name', 'required');
           } else if ($this->input->post('rural_type') == 5) {
               $this->form_validation->set_rules('district_drp', 'District', 'required');
               $this->form_validation->set_rules('block_drp', 'Block Office', 'required');
               $this->form_validation->set_rules('constituency_drp', 'Constituency', 'required');
               $this->form_validation->set_rules('panchayat_name_drp', 'Panchayat Name', 'required');
               $this->form_validation->set_rules('booth_name', 'Polling Booth Name', 'required');
           } else if ($this->input->post('rural_type') == 6) {
               $this->form_validation->set_rules('district_drp', 'District', 'required');
               $this->form_validation->set_rules('block_drp', 'Block Office', 'required');
               $this->form_validation->set_rules('constituency_drp', 'Constituency', 'required');
               $this->form_validation->set_rules('panchayat_name_drp', 'Panchayat Name', 'required');
               $this->form_validation->set_rules('booth_name_drp', 'Polling Booth Name', 'required');
               $this->form_validation->set_rules('booth_no', 'Polling Booth No.', 'required');
           }

           if ($this->form_validation->run() == TRUE) {

               if ($this->input->post('rural_type') == 1) {
                   $val = array(
                       'rural_type' => $this->input->post('rural_type'),
                       'rural' => $this->input->post('district'),
                       'map' => 0,
                       'created_at' => date('Y-m-d')
                   );
               } elseif ($this->input->post('rural_type') == 2) {
                   $val = array(
                       'rural_type' => $this->input->post('rural_type'),
                       'rural' => $this->input->post('block_office'),
                       'map' => $this->input->post('district_drp'),
                       'created_at' => date('Y-m-d')
                   );
               } elseif ($this->input->post('rural_type') == 3) {
                   $val = array(
                       'rural_type' => $this->input->post('rural_type'),
                       'rural' => $this->input->post('constituency'),
                       'map' => $this->input->post('district_drp'),
                       'created_at' => date('Y-m-d')
                   );
               } elseif ($this->input->post('rural_type') == 4) {
                   $val = array(
                       'rural_type' => $this->input->post('rural_type'),
                       'rural' => $this->input->post('panchayat_name'),
                       'map' => $this->input->post('constituency_drp'),
                       'created_at' => date('Y-m-d')
                   );
               } else if ($this->input->post('rural_type') == 5) {
                   $val = array(
                       'rural_type' => $this->input->post('rural_type'),
                       'rural' => $this->input->post('booth_name'),
                       'map' => $this->input->post('panchayat_name_drp'),
                       'created_at' => date('Y-m-d')
                   );
               } else if ($this->input->post('rural_type') == 6) {
                   $val = array(
                       'rural_type' => $this->input->post('rural_type'),
                       'rural' => $this->input->post('booth_no'),
                       'map' => $this->input->post('booth_name_drp'),
                       'created_at' => date('Y-m-d')
                   );
               }

               // print_r($val);
               // die;
               $this->Admin_Rural_model->save_rural($val);
               $data = array('text' => 'New Rural Added Successfully', 'icon' => 'success');
           } else {
               $msg = array(
                   'rural_type' => form_error('rural_type'),
                   'district' => form_error('district'),
                   'block_office' => form_error('block_office'),
                   'block_drp' => form_error('block_drp'),
                   'district_drp' => form_error('district_drp'),
                   'constituency' => form_error('constituency'),
                   'constituency_drp' => form_error('constituency_drp'),
                   'panchayat_name' => form_error('panchayat_name'),
                   'panchayat_name_drp' => form_error('panchayat_name_drp'),
                   'booth_no' => form_error('booth_no'),
                   'booth_name_drp' => form_error('booth_name_drp'),
                   'booth_name' => form_error('booth_name')
               );
               $data = array('text' => $msg, 'icon' => 'error');
           }
           echo json_encode($data);
       }
   }

  

}
