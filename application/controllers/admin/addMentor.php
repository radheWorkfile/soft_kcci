<?php
defined('BASEPATH') or exit('No direct script access allowed');

class addMentor extends CI_Controller
{
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


    public function manageMentor()
    {
        $data['mentorData'] = $this->ComModel->getAllData('*', 'mentor');

        $this->load->view('admin/addMentor/manageMentor', $data);
    }


    public function deleteData()
    {

        $val = $this->input->post();
        $this->ComModel->delete('*',$val, 'mentor');

    }



    //  m_name      m_email     m_mobile        m_dob       m_designation       m_address           photo
    function addMenTorData()
    {
        $config['upload_path']          = './uploads/mentor_img/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
           $this->load->library('upload', $config);
           if (!$this->upload->do_upload('photo')) {
               echo $this->upload->display_errors();
           } else {              
               $img_data = $this->upload->data();
             
               $image =  $img_data['file_name'];
           }
        $data = array(
                  
            'm_name' => $this->input->post('m_name'),
            'm_password' => $this->input->post('m_password'),
            'm_email'     => $this->input->post('m_email'),
            'm_mobile'     => $this->input->post('m_mobile'),
            'm_dob'     => $this->input->post('m_dob'),
            'm_designation'     => $this->input->post('m_designation'),
            'm_address'     => $this->input->post('m_address'),
            'created_at'     => date('Y-m-d'),
            'photo' => $image,

        );
     
          $this->ComModel->add_data('mentor',$data);
          $data = array(
                  

            'name' => $this->input->post('m_name'),
            'email' => $this->input->post('m_email'),
            'password' => $this->input->post('m_password'),
            'mobile' => $this->input->post('m_mobile'),
            'dob' => $this->input->post('m_dob'),
            'registration_address' => $this->input->post('m_address'),
            'created_at' => date('Y-m-d H:i:s'),
            'photo' => $image,
             );
             
              $this->ComModel->add_data('registration',$data);

              
              
                // $regisId = $this->ComModel->getLastfouId();
                $regisId = $this->ComModel->getLastId();
           
                 $password = md5($this->input->post('password'));
                 $userData = array(
                  'registration_id' => $regisId['id'],
                  'name' => $this->input->post('m_name'),
                  'show_password' => $this->input->post('m_password'),
                  'password' => $password,
                  'dob' => $this->input->post('m_dob'),
                  'mobile' => $this->input->post('m_mobile'),
                  'email' => $this->input->post('m_email'),
                  ); 
                 $this->ComModel->add_data('users',$userData);
   

    }

    // m_name      m_email     m_mobile       m_dob    m_designation       m_address

    public function updateMentorData()
    {
        
        if ($this->input->is_ajax_request()) {
            $this->form_validation->set_rules('m_name', 'Mentor Name', 'required');
            $this->form_validation->set_rules('m_email', 'Mentor Email', 'required');



            if ($this->form_validation->run()) {

                $val = array(
                    'id' => $this->input->post('id'),
                    'm_name' => $this->input->post('m_name'),
                    'm_email' => $this->input->post('m_email'),
                    'm_mobile' => $this->input->post('m_mobile'),
                    'm_dob' => $this->input->post('m_dob'),
                    'm_designation' => $this->input->post('m_designation'),
                    'm_address' => $this->input->post('m_address')

                );

                $this->ComModel->update_data($val, 'mentor');

                $data = array('text' => 'Founder Data Updated Successfully !', 'icon' => 'success');
            } else {
                $msg = array(
                    'm_name'    => form_error('m_name'),
                    'm_email'    => form_error('m_email'),
                    'm_mobile'    => form_error('m_mobile'),
                   

                );
                $data = array('text' => $msg, 'icon' => 'error');
            }
            echo json_encode($data);
        }
    }

    public function editData()
    {
        // echo "hello con";die;
        if ($this->input->is_ajax_request()) {
            $value = $this->input->post();
            // $data['sectorName']=$this->ComModel->getAllData('*','sector');
            $data['editAData'] = $this->ComModel->getADataWi('*', $value['id'], 'mentor');
            // print_r($data['editAData']);die;
            $this->load->view('admin/addMentor/editMentorData', $data);
        }
    }



    public function viewDAta()
    {
        // echo "hello con"; die;
        $val = $this->input->post();
        $data['viewDAta'] = $this->ComModel->disData('*', array('id' => $val['id']), 'mentor');
        $this->load->view('admin/addMentor/viewMenterData', $data);
    }
}
