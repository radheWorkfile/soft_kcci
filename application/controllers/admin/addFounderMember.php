<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class addFounderMember extends CI_Controller {
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


    public function manageFouMem() 
    {
        $data['founderName'] = $this->ComModel->getAllData('*','founder');
        // echo "<pre>"; print_r($data['founderName']); die;
        $this->load->view('admin/addFounderMember/manageFounderMem',$data);
     }


     public function deleteData()
     {
            $val = $this->input->post();
            // print_r($val);die;
            
            $ban= $this->ComModel->deleteData('*',array('id' => $val['id']),'founder');
           echo $this->db->last_query();
           
     }

  
   

     function addDAta()
    {


         $config['upload_path']          = './uploads/founder_img/';
         $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('photo')) {
                echo $this->upload->display_errors();
            } else {              
                $img_data = $this->upload->data();
              
                $image =  $img_data['file_name'];
            }
            $data = array(
                  

                'founder_name' => $this->input->post('founder_name'),
                'fou_email' => $this->input->post('fou_email'),
                'password' => $this->input->post('password'),
                'fou_mobile' => $this->input->post('fou_mobile'),
                'fou_dob' => $this->input->post('fou_dob'),
                'fou_designation' => $this->input->post('fou_designation'),
                'fou_address' => $this->input->post('fou_address'),
                'fou_address' => $this->input->post('fou_address'),
                'created_at' => date('Y-m-d H:i:s'),
                'photo' => $image,
            );
         
           $this->ComModel->add_data('founder',$data);
           $data = array(
                  

            'name' => $this->input->post('founder_name'),
            'email' => $this->input->post('fou_email'),
            'password' => $this->input->post('password'),
            'mobile' => $this->input->post('fou_mobile'),
            'dob' => $this->input->post('fou_dob'),
            'registration_address' => $this->input->post('fou_address'),
            'created_at' => date('Y-m-d H:i:s'),
            'photo' => $image,
             );
             
              $this->ComModel->add_data('registration',$data);

              
              
                // $regisId = $this->ComModel->getLastfouId();
                $regisId = $this->ComModel->getLastId();
           
                 $password = md5($this->input->post('password'));
                 $userData = array(
                  'registration_id' => $regisId['id'],
                  'name' => $this->input->post('founder_name'),
                  'show_password' => $this->input->post('password'),
                  'password' => $password,
                  'dob' => $this->input->post('fou_dob'),
                  'mobile' => $this->input->post('fou_mobile'),
                  'email' => $this->input->post('fou_email'),
                  ); 
                 $this->ComModel->add_data('users',$userData);
                 $data = array('text' => 'Successfully', 'icon' => 'Success');
              echo json_encode($data); 
       

    }

    public function viewDAta()
    {
        $val = $this->input->post();
        $data['viewDAta'] = $this->ComModel->disData('*',array('id'=> $val['id']),'founder');
        $this->load->view('admin/addFounderMember/viewData',$data);
    }

    public function editData()
    {
        $val = $this->input->post();
        $data['founderName'] = $this->ComModel->disData('*',array('id'=> $val['id']),'founder');;
        $this->load->view('admin/addFounderMember/editSectorData',$data);
    }
    
    
    public function updateData()
    {
        
        if($this->input->is_ajax_request()) {
            $this->form_validation->set_rules('founder_name', 'Founder Name', 'required');
            $this->form_validation->set_rules('fou_email', 'Founder Email', 'required');
            $this->form_validation->set_rules('fou_mobile', 'Founder Mobile No', 'required');
            $this->form_validation->set_rules('fou_dob', 'Founder DOB', 'required');
            $this->form_validation->set_rules('fou_designation', 'Founder Designation', 'required');
            $this->form_validation->set_rules('fou_address', 'Founder Address', 'required');
            
            
            if($this->form_validation->run()) {
                
                //                          
                $val=array(
                    'id' => $this->input->post('id'),
                    'founder_name' => $this->input->post('founder_name'),
                    'fou_email' => $this->input->post('fou_email'),
                    'fou_mobile' => $this->input->post('fou_mobile'),
                    'fou_dob' => $this->input->post('fou_dob'),
                    'fou_designation' => $this->input->post('fou_designation'),
                    'fou_address' => $this->input->post('fou_address'),
                    'founder_post' => $this->input->post('founder_post'),
                    'photo' => $this->input->post('photo'),
                   
                   
                );
             
                $this->ComModel->update_data($val,'founder');
    
                $data=array('text' => 'Founder Data Updated Successfully !', 'icon' => 'success');
            } else {
                $msg=array(
                    'founder_name'    => form_error('founder_name'),
                    'fou_email' => form_error('fou_email'),
                    'fou_mobile' => form_error('fou_mobile'),
                    'fou_designation' => form_error('fou_designation'),
                    'fou_address' => form_error('fou_address'),
                    
                );
                $data=array('text' => $msg, 'icon' => 'error');
            }
            echo json_encode($data);
        }
    }



 
  

}
