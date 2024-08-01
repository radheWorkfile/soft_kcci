<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Location extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_Sector_model');
        $this->load->model('ComModel');
        $this->load->model('Admin_Industeries_model');
        $this->load->model('Admin_Location_model');
        // $this->load->model('Admin_Caste_model');
        // $this->load->model('Admin_Urban_model');
        // $this->load->model('Admin_Rural_model');
        // $this->load->model('Admin_Package_model');
        // $this->load->model('Admin_Advertisement_model');
        // $this->load->model('Admin_Common_model');
        // $this->load->model('Admin_Business_model');
        $this->load->helper(array('form', 'url'));
    }


    public function manageLocation() 
    {
     
            $data['district'] = $this->Admin_Location_model->view_district();
            $data['police'] = $this->Admin_Location_model->view_police();
            $data['block'] = $this->Admin_Location_model->view_block();
            $data['post'] = $this->Admin_Location_model->view_post();
            $data['pin'] = $this->Admin_Location_model->view_pin();
            $data['state'] = $this->Admin_Location_model->get_state();
            $data['statedata'] = $this->Admin_Location_model->get_state();
            // print_r($data['state']);die;
            $this->load->view('admin/locationl/manageLocation',$data);
     }
    public function viewData()
    {
        if ($this->input->is_ajax_request()) {
            $value = $this->input->post();
        $data['sectorName']=$this->ComModel->getAllData('*','sector');
        $data['viewData']=$this->ComModel->getADataWi('*',$value['id'],'industeries');
            // echo "<pre>"; print_r( $data['viewData']); die;
            $this->load->view('admin/Industeries/view_Indus',$data);
         }
    }

    public function editData()
    {
        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();
            $data['upindus'] = $this->Admin_Industeries_model->get_industeries($val['id']);
            $data['sectr'] = $this->Admin_Sector_model->all_data();
            $this->load->view('admin/Industeries/edit_Indus',$data);
        }
    }


    public function get_state() {
        $val=$this->input->post('id');
        $data = $this->Admin_Location_model->get_data($val);
        echo json_encode($data);
    }

    public function get_district() {
        $val=$this->input->post('id');
        $data = $this->Admin_Location_model->get_district($val);
        echo json_encode($data);
    }

    public function get_block() {
        $val=$this->input->post('id');
        $data = $this->Admin_Location_model->get_data($val);
        echo json_encode($data);
    }

    public function get_post() {
        $val=$this->input->post('id');
        $data = $this->Admin_Location_model->get_post($val);
        echo json_encode($data);
    }

    public function add_location()
    {
        if ($this->input->is_ajax_request()) {
            $this->form_validation->set_rules('location_type', 'Location Type', 'required');
            if ($this->input->post('location_type') == 1) {
                $this->form_validation->set_rules('state', 'State', 'required');
            } elseif ($this->input->post('location_type') == 2) {
                $this->form_validation->set_rules('state_drp', 'State', 'required');
                $this->form_validation->set_rules('district', 'District', 'required');
            } elseif ($this->input->post('location_type') == 3) {
                $this->form_validation->set_rules('state_drp', 'State', 'required');
                $this->form_validation->set_rules('district_drp', 'District', 'required');
                $this->form_validation->set_rules('police_station', 'Police Station', 'required');
            } elseif ($this->input->post('location_type') == 4) {
                $this->form_validation->set_rules('state_drp', 'State', 'required');
                $this->form_validation->set_rules('district_drp', 'District', 'required');
                $this->form_validation->set_rules('block_office', 'Block Office', 'required');
            } else if ($this->input->post('location_type') == 5) {
                $this->form_validation->set_rules('state_drp', 'State', 'required');
                $this->form_validation->set_rules('district_drp', 'District', 'required');
                $this->form_validation->set_rules('post_office', 'Post Office', 'required');
            } else if ($this->input->post('location_type') == 6) {
                $this->form_validation->set_rules('state_drp', 'State', 'required');
                $this->form_validation->set_rules('district_drp', 'District', 'required');
                $this->form_validation->set_rules('post_drp', 'Post Office', 'required');
                $this->form_validation->set_rules('pin_code', 'Pin Code', 'required');
            }

            if ($this->form_validation->run() == TRUE) {

                if ($this->input->post('location_type') == 1) {
                    $val = array(
                        'location_type' => $this->input->post('location_type'),
                        'location' => $this->input->post('state'),
                        'map' => 0,
                        'created_at' => date('Y-m-d')
                    );
                } elseif ($this->input->post('location_type') == 2) {
                    $val = array(
                        'location_type' => $this->input->post('location_type'),
                        'location' => $this->input->post('district'),
                        'map' => $this->input->post('state_drp'),
                        'created_at' => date('Y-m-d')
                    );
                } elseif ($this->input->post('location_type') == 3) {
                    $val = array(
                        'location_type' => $this->input->post('location_type'),
                        'location' => $this->input->post('police_station'),
                        'map' => $this->input->post('district_drp'),
                        'created_at' => date('Y-m-d')
                    );
                } elseif ($this->input->post('location_type') == 4) {
                    $val = array(
                        'location_type' => $this->input->post('location_type'),
                        'location' => $this->input->post('block_office'),
                        'map' => $this->input->post('district_drp'),
                        'created_at' => date('Y-m-d')
                    );
                } else if ($this->input->post('location_type') == 5) {
                    $val = array(
                        'location_type' => $this->input->post('location_type'),
                        'location' => $this->input->post('post_office'),
                        'map' => $this->input->post('district_drp'),
                        'created_at' => date('Y-m-d')
                    );
                } else if ($this->input->post('location_type') == 6) {
                    $val = array(
                        'location_type' => $this->input->post('location_type'),
                        'location' => $this->input->post('pin_code'),
                        'map' => $this->input->post('post_drp'),
                        'created_at' => date('Y-m-d')
                    );
                }

                // print_r($val);
                // die;
                $this->Admin_Location_model->save_location($val);
                $data = array('text' => 'New Location Added Successfully', 'icon' => 'success');
            } else {
                $msg = array(
                    'location_type' => form_error('location_type'),
                    'state' => form_error('state'),
                    'state_drp' => form_error('state_drp'),
                    'district' => form_error('district'),
                    'district_drp' => form_error('district_drp'),
                    'police_station' => form_error('police_station'),
                    'police_drp' => form_error('police_drp'),
                    'block_office' => form_error('block_office'),
                    'block_drp' => form_error('block_drp'),
                    'post_office' => form_error('post_office'),
                    'post_drp' => form_error('post_drp'),
                    'pin_code' => form_error('pin_code')
                );
                $data = array('text' => $msg, 'icon' => 'error');
            }
            echo json_encode($data);
        }
    }

    
    
  

}
