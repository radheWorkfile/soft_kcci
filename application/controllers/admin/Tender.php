<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tender extends CI_Controller {
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


    public function manTender() 
    {
        $data['tender'] = $this->ComModel->getAllData('*','tender');
        $this->load->view('admin/tender/manTender',$data);
     }


     public function deleteData()
     {
        $val = $this->input->post();
        $this->ComModel->delete('*',array('id' => $val['id']),'tender');
    }

     public function viewDAta()
     {
        $val = $this->input->post();
        $data['viewTenDa'] = $this->ComModel->disData('*',array('id'=> $val['id']),'tender');
        $this->load->view('admin/tender/viewTenData',$data);
     }

  
   

     function addDAta()
      {
        $config['upload_path']          = './uploads/tender_img/';
         $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('doc')) {
                echo $this->upload->display_errors();
            } else {              
                $img_data = $this->upload->data();
              
                $image =  $img_data['file_name'];
            }
            $data = array(
                'tender_title' => $this->input->post('tender_title'),
                'description' => $this->input->post('description'),
                'doc' => $image
            );
            // print_r($data);die;
           $this->ComModel->add_data('tender',$data);


      }

      public function editData()
      {
        $val = $this->input->post();
        $data['viewTenDa'] = $this->ComModel->disData('*',array('id'=> $val['id']),'tender');
        $this->load->view('admin/tender/editTenData',$data);
      }


      public function updateData()
      {       
        if($this->input->is_ajax_request()) {
            $this->form_validation->set_rules('tender_title', 'Tender Title', 'required');
            $this->form_validation->set_rules('description', 'Discription', 'required');
           
    
            if($this->form_validation->run()) {
    
                $val=array(
                    'id'        => $this->input->post('id'),
                    'tender_title'    => $this->input->post('tender_title'),
                    'description' => $this->input->post('description'),
                    'doc' => $this->input->post('doc'),
                   
                );
                // print_r($val); die;
             
                $this->ComModel->update_data($val,'tender');
                echo $this->db->last_query();
    
                $data=array('text' => 'Income Category Updated Successfully !', 'icon' => 'success');
            } else {
                $msg=array(
                    'tender_title'    => form_error('tender_title'),
                    'description' => form_error('description'),
                    
                );
                $data=array('text' => $msg, 'icon' => 'error');
            }
            echo json_encode($data);
        } 

      
      }



 
  

}
