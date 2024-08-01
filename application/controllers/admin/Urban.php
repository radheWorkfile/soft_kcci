<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Urban extends CI_Controller {
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
        // $this->load->model('Admin_Advertisement_model');
        // $this->load->model('Admin_Common_model');
        // $this->load->model('Admin_Business_model');
        $this->load->helper(array('form', 'url'));
    }


    public function manageUrban() 
    {
        $data['districtData'] = $this->Admin_Urban_model->get_district();
        $data['assembly'] = $this->Admin_Urban_model->view_assembly();
        $data['muncipal'] = $this->Admin_Urban_model->view_muncipal();
        $data['wardc'] = $this->Admin_Urban_model->view_wrd_cnslr();
        $data['wardn'] = $this->Admin_Urban_model->view_wrd_no();
        $data['housen'] = $this->Admin_Urban_model->view_house_no();
        $data['boothn'] = $this->Admin_Urban_model->view_booth_name();
        $data['boothna'] = $this->Admin_Urban_model->view_booth_no();
        // echo "<pre>"; print_r($data['boothn']);die;
        $this->load->view('admin/urban/manageUrban',$data);
     }

     public function get_assembly() {
        $val=$this->input->post('id');
        $data = $this->Admin_Urban_model->get_assembly($val);
        echo json_encode($data);
    }

    public function get_muncipal() {
        $val=$this->input->post('id');
        $data = $this->Admin_Urban_model->get_muncipal($val);
        echo json_encode($data);
    }

    public function get_wrd_cnslr() {
        $val=$this->input->post('id');
        $data = $this->Admin_Urban_model->get_data($val);
        echo json_encode($data);
    }

    public function get_wrd_no() {
        $val=$this->input->post('id');
        $data = $this->Admin_Urban_model->get_data($val);
        echo json_encode($data);
    }

    public function get_house_no() {
        $val=$this->input->post('id');
        $data = $this->Admin_Urban_model->get_data($val);
        echo json_encode($data);
    }

    public function get_booth_no() {
        $val=$this->input->post('id');
        $data = $this->Admin_Urban_model->get_data($val);
        echo json_encode($data);
    }
    public function get_booth_name() {
        $val=$this->input->post('id');
        $data = $this->Admin_Urban_model->get_data($val);
        echo json_encode($data);
    }

    public function add_urban()
    {
        if ($this->input->is_ajax_request()) {
            $this->form_validation->set_rules('urban_type', 'Urban Type', 'required');
            if ($this->input->post('urban_type') == 1) {
                $this->form_validation->set_rules('district', 'District', 'required');
            } elseif ($this->input->post('urban_type') == 2) {
                $this->form_validation->set_rules('district_drp', 'District', 'required');
                $this->form_validation->set_rules('assembly_constitution', 'Assembly Constitution Name', 'required');
            } elseif ($this->input->post('urban_type') == 3) {
                $this->form_validation->set_rules('district_drp', 'District', 'required');
                $this->form_validation->set_rules('muncipal_corporation', 'Muncipal Corporation Name', 'required');
            } elseif ($this->input->post('urban_type') == 4) {
                $this->form_validation->set_rules('district_drp', 'District', 'required');
                $this->form_validation->set_rules('muncipal_drp', 'Muncipal Corporation Name', 'required');
                $this->form_validation->set_rules('ward_cons_nam', 'Ward Councillor Name', 'required');
            } else if ($this->input->post('urban_type') == 5) {
                $this->form_validation->set_rules('district_drp', 'District', 'required');
                $this->form_validation->set_rules('muncipal_drp', 'Muncipal Corporation Name', 'required');
                $this->form_validation->set_rules('ward_cons_nam_drp', 'Ward Councillor Name', 'required');
                $this->form_validation->set_rules('ward_no', 'Ward No', 'required');
            } else if ($this->input->post('urban_type') == 6) {
                $this->form_validation->set_rules('district_drp', 'District', 'required');
                $this->form_validation->set_rules('muncipal_drp', 'Muncipal Corporation Name', 'required');
                $this->form_validation->set_rules('ward_cons_nam_drp', 'Ward Councillor Name', 'required');
                $this->form_validation->set_rules('ward_no_drp', 'Ward No.', 'required');
                $this->form_validation->set_rules('house_no', 'House No.', 'required');
            } else if ($this->input->post('urban_type') == 7) {
                $this->form_validation->set_rules('district_drp', 'District', 'required');
                $this->form_validation->set_rules('assembly_drp', 'Assembly Constitution Name', 'required');
                $this->form_validation->set_rules('booth_name', 'Polling Booth Name', 'required');
            } else if ($this->input->post('urban_type') == 8) {
                $this->form_validation->set_rules('district_drp', 'District', 'required');
                $this->form_validation->set_rules('assembly_drp', 'Assembly Constitution Name', 'required');
                $this->form_validation->set_rules('booth_name_drp', 'Polling Booth Name', 'required');
                $this->form_validation->set_rules('booth_no', 'Polling Booth No.', 'required');
            }

            if ($this->form_validation->run() == TRUE) {

                if ($this->input->post('urban_type') == 1) {
                    $val = array(
                        'urban_type' => $this->input->post('urban_type'),
                        'urban' => $this->input->post('district'),
                        'map' => 0,
                        'created_at' => date('Y-m-d')
                    );
                } elseif ($this->input->post('urban_type') == 2) {
                    $val = array(
                        'urban_type' => $this->input->post('urban_type'),
                        'urban' => $this->input->post('assembly_constitution'),
                        'map' => $this->input->post('district_drp'),
                        'created_at' => date('Y-m-d')
                    );
                    // print_r($val); die;

                } elseif ($this->input->post('urban_type') == 3) {
                    $val = array(
                        'urban_type' => $this->input->post('urban_type'),
                        'urban' => $this->input->post('muncipal_corporation'),
                        'map' => $this->input->post('district_drp'),
                        'created_at' => date('Y-m-d')
                    );
                } elseif ($this->input->post('urban_type') == 4) {
                    $val = array(
                        'urban_type' => $this->input->post('urban_type'),
                        'urban' => $this->input->post('ward_cons_nam'),
                        'map' => $this->input->post('muncipal_drp'),
                        'created_at' => date('Y-m-d')
                    );
                } else if ($this->input->post('urban_type') == 5) {
                    $val = array(
                        'urban_type' => $this->input->post('urban_type'),
                        'urban' => $this->input->post('ward_no'),
                        'map' => $this->input->post('ward_cons_nam_drp'),
                        'created_at' => date('Y-m-d')
                    );
                } else if ($this->input->post('urban_type') == 6) {
                    $val = array(
                        'urban_type' => $this->input->post('urban_type'),
                        'urban' => $this->input->post('house_no'),
                        'map' => $this->input->post('ward_no_drp'),
                        'created_at' => date('Y-m-d')
                    );
                }else if ($this->input->post('urban_type') == 7) {
                    $val = array(
                        'urban_type' => $this->input->post('urban_type'),
                        'urban' => $this->input->post('booth_name'),
                        'map' => $this->input->post('assembly_drp'),
                        'created_at' => date('Y-m-d')
                    );
                }else if ($this->input->post('urban_type') == 8) {
                    $val = array(
                        'urban_type' => $this->input->post('urban_type'),
                        'urban' => $this->input->post('booth_no'),
                        'map' => $this->input->post('booth_name_drp'),
                        'created_at' => date('Y-m-d')
                    );
                }

                // print_r($val);
                // die;
                $this->Admin_Urban_model->save_urban($val);
                $data = array('text' => 'New Urban Added Successfully', 'icon' => 'success');
            } else {
                $msg = array(
                    'urban_type' => form_error('urban_type'),
                    'district' => form_error('district'),
                    'district_drp' => form_error('district_drp'),
                    'assembly_constitution' => form_error('assembly_constitution'),
                    'muncipal_corporation' => form_error('muncipal_corporation'),
                    'muncipal_drp' => form_error('muncipal_drp'),
                    'ward_cons_nam' => form_error('ward_cons_nam'),
                    'ward_cons_nam_drp' => form_error('ward_cons_nam_drp'),
                    'ward_no' => form_error('ward_no'),
                    'ward_no_drp' => form_error('ward_no_drp'),
                    'house_no' => form_error('house_no'),
                    'house_no_drp' => form_error('house_no_drp'),
                    'booth_name' => form_error('booth_name'),
                    'booth_name_drp' => form_error('booth_name_drp'),
                    'booth_no' => form_error('booth_no')
                );
                $data = array('text' => $msg, 'icon' => 'error');
            }
            echo json_encode($data);
        }
    }

  

}
