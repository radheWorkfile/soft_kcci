<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Industeries extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_Sector_model');
        $this->load->model('ComModel');
        $this->load->model('Admin_Industeries_model');
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


    public function manIndus() 
    {
      
        $data['sector'] = $this->Admin_Sector_model->all_data();
        $data['industeries'] = $this->Admin_Industeries_model->all_industeries();
        $this->load->view('admin/Industeries/manageIndusteries',$data);
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

    
  
    public function addIndusData()
    { 
        if ($this->input->is_ajax_request()) {
            $this->form_validation->set_rules('sector_name', 'Sector Name', 'required');
            $this->form_validation->set_rules('industeries_name', 'Industeries Name', 'required');
            $this->form_validation->set_rules('description', 'Description');

            if ($this->form_validation->run() == TRUE) {
                $val = array(
                    'id' => $this->input->post('id'),
                    'sector_name' => $this->input->post('sector_name'),
                    'industeries_name' => $this->input->post('industeries_name'),
                    'description' => $this->input->post('description'),
                    'created_at' => date('Y-m-d'),
                );
                // print_r($val);die;
                $this->Admin_Industeries_model->add_industeries($val);
                $data = array('text' => 'New Industeries Created Successfully', 'icon' => 'success');
            } else {
                $msg = array(
                    'sector_name' => form_error('sector_name'),
                    'industeries_name' => form_error('industeries_name')
                );
                $data = array('text' => $msg, 'icon' => 'error');
            }
            echo json_encode($data);
        }
        
         

       
    }

  
    public function update_industeries_data()
    {
        if ($this->input->is_ajax_request()) {
            $this->form_validation->set_rules('sector_name', 'Sector Name', 'required');
            $this->form_validation->set_rules('industeries_name', 'Industeries Name', 'required');
            $this->form_validation->set_rules('description', 'Description');

            if ($this->form_validation->run() == TRUE) {
                $val = array(
                    'id' => $this->input->post('id'),
                    'sector_name' => $this->input->post('sector_name'),
                    'industeries_name' => $this->input->post('industeries_name'),
                    'description' => $this->input->post('description')
                );
                $this->Admin_Industeries_model->update_industeries_data($val);
                echo $this->input->post();
                $data = array('text' => 'New Industeries Updated Successfully', 'icon' => 'success');
            } else {
                $msg = array(
                    'sector_name' => form_error('sector_name'),
                    'industeries_name' => form_error('industeries_name')
                );
                $data = array('text' => $msg, 'icon' => 'error');
            }
            echo json_encode($data);
        }
    }

    
  

}
