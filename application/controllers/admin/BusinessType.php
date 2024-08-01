<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BusinessType extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_Sector_model');
        $this->load->model('ComModel');
        $this->load->model('Admin_Business_model');
        $this->load->helper(array('form', 'url'));
    }


    public function manageBusType() 
    {
        
        // $data['business']=$this->ComModel->getDataWj();  this is for sector with business with join query....
        $data['sectorName']=$this->ComModel->getAllData('*','sector');
        $data['business']=$this->ComModel->getAllData('*','business');
        $this->load->view('admin/businessType/manageBusinessType',$data);
     }
    public function viewData()
    {
        if ($this->input->is_ajax_request()) {
            $value = $this->input->post();
            $data['viewData']=$this->ComModel->getADataWi('*',$value['id'],'business');
            $this->load->view('admin/businessType/viewData',$data);
         }
    }

    public function editData()
    {
        if ($this->input->is_ajax_request()) {
            $value = $this->input->post();
            $data['sectorName']=$this->ComModel->getAllData('*','sector');
            $data['editAData']=$this->ComModel->getADataWi('*',$value['id'],'business');
            // print_r($data['editAData']);die;
            $this->load->view('admin/businessType/editBusinessType',$data);
         }
  
    }

    
  
    public function addBussData()
    { 
     
         $data = $this->input->post();
         

        if ($this->input->is_ajax_request()) {
            $this->form_validation->set_rules('sector_name', 'Sector Name', 'required');
            if( $data['sector_name'] == '18'){
                $this->form_validation->set_rules('business_type', 'Sector Name', 'required');
             }
            $this->form_validation->set_rules('description', 'Description');
            
            if ($this->form_validation->run() == TRUE) {
                $val = array(
                    // 'id' => $this->input->post('id'),
                    'sector_name' => $this->input->post('sector_name'),
                    'business_type' => $this->input->post('business_type'),
                    'description' => $this->input->post('description'),
                    'created_at' => date('Y-m-d')
                );

                         
                $this->ComModel->add_data('business',$val);
               
                $data = array('text' => ' Created Successfully', 'icon' => 'success');
            } else {
                $msg = array(
                    'sector_name' => form_error('sector_name'),
                    'business_type' => form_error('business_type'),
                );
                $data = array('text' => $msg, 'icon' => 'error');
            }
            echo json_encode($data);
        }
    }


 
    public function update_business_data()
    {
      
        if ($this->input->is_ajax_request()) {
            $this->form_validation->set_rules('sector_name', 'Sector Name', 'required');
            $this->form_validation->set_rules('business_type', 'Industeries Name', 'required');
            $this->form_validation->set_rules('description', 'Description');

            if ($this->form_validation->run() == TRUE) {
                $upbs = array(
                    'id' => $this->input->post('id'),
                    'sector_name' => $this->input->post('sector_name'),
                    'business_type' => $this->input->post('business_type'),
                    'description' => $this->input->post('description')
                );
                
                $this->Admin_Business_model->update_data($upbs);
                $data = array('text' => 'New Business TYpe Updated Successfully', 'icon' => 'success');
            } else {
                $msg = array(
                    'sector_name' => form_error('sector_name'),
                    'business_type' => form_error('business_type')
                );
                $data = array('text' => $msg, 'icon' => 'error');
            }
            echo json_encode($data);
        }
    }
  

}
