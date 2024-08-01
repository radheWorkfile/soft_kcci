<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category extends CI_Controller
{
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


    public function manCategory()
    {

        $data['categoryData'] = $this->ComModel->getAllData('*', 'sector');
        // echo "<pre>"; print_r($data['categoryData']);
        // echo $this->db->last_query();
        $this->load->view('admin/category/manageSector', $data);
    }
    public function viewData()
    {
        if ($this->input->is_ajax_request()) {
            $value = $this->input->post();
            $data['catAData'] = $this->ComModel->getADataWi('*', $value['id'], 'sector');
            $this->load->view('admin/category/viewData', $data);
        }
    }

    public function editData()
    {
        if ($this->input->is_ajax_request()) {
            $value = $this->input->post();
            $data['editAData'] = $this->ComModel->getADataWi('*', $value['id'], 'sector');
            $this->load->view('admin/category/editSectorData', $data);
        }
    }



    public function update_sector_data()
    {


        if ($this->input->is_ajax_request()) {
            $this->form_validation->set_rules('sector_name', 'Sector Name', 'required');
            $this->form_validation->set_rules('description', 'Description');

            if ($this->form_validation->run() == TRUE) {
                $val = array(
                    'id' => $this->input->post('id'),
                    'sector_name' => $this->input->post('sector_name'),
                    'description' => $this->input->post('description'),
                );

                $this->Admin_Sector_model->update_sector_data($val);
                
                // echo $this->db->last_query(); die;
                $data = array('text' => 'New Sector Created Successfully', 'icon' => 'success');
            } else {
                $msg = array(
                    'sector_name' => form_error('sector_name'),
                );
                $data = array('text' => $msg, 'icon' => 'error');
            }
            echo json_encode($data);
        }
    }





    public function addSecData()
    {
        if ($this->input->is_ajax_request()) {
            $this->form_validation->set_rules('sector_name', 'Sector Name', 'required');
            $this->form_validation->set_rules('description', 'Description');

            if ($this->form_validation->run() == TRUE) {
                $val = array(
                    // 'id' => $this->input->post('id'),
                    'sector_name' => $this->input->post('sector_name'),
                    'description' => $this->input->post('description'),
                    'created_at' => date('Y-m-d')
                );
                // print_r($val); die;
                $this->Admin_Sector_model->add_sector($val);
                echo $this->db->last_query();
                die;
                $data = array('text' => 'New Sector Created Successfully', 'icon' => 'success');
            } else {
                $msg = array(
                    'sector_name' => form_error('sector_name'),
                );
                $data = array('text' => $msg, 'icon' => 'error');
            }
            echo json_encode($data);
        }
    }
}
