<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Caste extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_Sector_model');
        $this->load->model('ComModel');
        $this->load->model('Admin_Industeries_model');
        $this->load->model('Admin_Location_model');
        $this->load->model('Admin_Caste_model');
        // $this->load->model('Admin_Urban_model');
        // $this->load->model('Admin_Rural_model');
        // $this->load->model('Admin_Package_model');
        // $this->load->model('Admin_Advertisement_model');
        // $this->load->model('Admin_Common_model');
        // $this->load->model('Admin_Business_model');
        $this->load->helper(array('form', 'url'));
    }

    public function manageCaste()
    {
        $data['caste'] = $this->Admin_Caste_model->get_caste();
        // print_r($data['caste']);
        // $data['subcaste'] = $this->Admin_Caste_model->get_subcaste($data['caste'][0]['id']);
        $data['subcaste'] = $this->Admin_Caste_model->view_subcaste();
        $this->load->view('admin/caste/add_caste',$data);
    }
 


    public function addCastDAta()
    {

        // $data = $this->input->post();print_r($data);die;
        if ($this->input->is_ajax_request()) {
            $this->form_validation->set_rules('caste_type', 'Caste Type', 'required');
            if ($this->input->post('caste_type') == 1) {
                $this->form_validation->set_rules('caste', 'Caste', 'required');
            } elseif ($this->input->post('caste_type') == 2) {
                $this->form_validation->set_rules('caste_drp', 'caste', 'required');
                $this->form_validation->set_rules('subcaste', 'Subcaste', 'required');
            }

            if ($this->form_validation->run() == TRUE) {
                
                if ($this->input->post('caste_type') == 1) {
                    $val = array(
                        'caste_type' => $this->input->post('caste_type'),
                        'caste' => $this->input->post('caste'),
                        'map' => 0,
                        'created_at' => date('Y-m-d')
                    );
                    $this->Admin_Caste_model->save_caste($val);
                    $data = array('text' => 'New Caste Added Successfully', 'icon' => 'success');
                } elseif ($this->input->post('caste_type') == 2) {
                    $valu = array('caste_type' => 2, 'caste' => $this->input->post('subcaste'));
                    $mls = $this->Admin_Common_model->get_data($valu,"caste");
                    // print_r($mls);die;
                    if (empty($mls)) {
                    
                        $val = array(
                            'caste_type' => $this->input->post('caste_type'),
                            'caste' => $this->input->post('subcaste'),
                            'map' => $this->input->post('caste_drp'),
                            'created_at' => date('Y-m-d')
                        );
                        $this->Admin_Caste_model->save_caste($val);
                        $data = array('text' => 'New Caste Added Successfully', 'icon' => 'success');
                    }else {
                        $msg = array('Opps ! SubCaste is Already Exists !');
                        $data = array('text' => $msg, 'icon' => 'error');
                    }
                }
            }else {
            $msg = array(
                'caste_type' => form_error('caste_type'),
                'caste' => form_error('caste'),
                'caste_drp' => form_error('caste_drp'),
                'subcaste' => form_error('subcaste'),
            );
            $data = array('text' => $msg, 'icon' => 'error');
            }
            echo json_encode($data);
        }
    }




    
  

}
