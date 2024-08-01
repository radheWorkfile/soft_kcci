<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LatestNews extends CI_Controller {
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


    public function manageNews() 
    {
        $data['news'] = $this->ComModel->getAllData('*','news');
        // echo "<pre>"; print_r($data['news']); die;
        $this->load->view('admin/news/manageNews',$data);
     }


     public function deleteData()
     {
        
            $val = $this->input->post();
            // print_r($val);
            $this->ComModel->delete('*',array('id' => $val['id']),'news');
           
     }

     public function viewDAta()
     {
        $val = $this->input->post();
        $data['viewNews'] = $this->ComModel->disData('*',array('id'=> $val['id']),'news');
        $this->load->view('admin/news/viewData',$data);
     }

  
   

     function addDAta()
    {
            if($this->input->is_ajax_request()) {
            $this->form_validation->set_rules('news_title', 'News Title ', 'required');
            $this->form_validation->set_rules('description', 'Description ', 'required');
     
            if($this->form_validation->run()) {
                $val=array(
                    'news_title' => $this->input->post('news_title'),
                    'description'     => $this->input->post('description'),
                    'created_at'     => date('Y-m-d'),
                );   
                  
               $this->ComModel->add_data('news',$val);
                $data=array('text' => 'News Title  ', 'icon' => 'success');
            } else {
                $msg=array(
                    'news_title' => $this->input->post('news_title'),
                    'discription'     => $this->input->post('discription')
                );
                $data=array('text' => $msg, 'icon' => 'error');
            }
            echo json_encode($data);
        }

      }

      public function editData()
      {
        $val = $this->input->post();
        $data['viewNews'] = $this->ComModel->disData('*',array('id'=> $val['id']),'news');
        $this->load->view('admin/news/editNewsSec',$data);
      }


      public function updateData()
      {       
           
            if($this->input->is_ajax_request()) {
            $this->form_validation->set_rules('news_title', 'News Title ', 'required');
            $this->form_validation->set_rules('description', 'Description ', 'required');
           
    
            if($this->form_validation->run()) {
    
                $val=array(
                    'id'        => $this->input->post('id'),
                    'news_title'        => $this->input->post('news_title'),
                    'description'    => $this->input->post('description'),
                    'created_at'     => date('Y-m-d'),
                   
                );
             
                $this->ComModel->update_data($val,'news');
                echo $this->db->last_query();die;
    
            // echo $this->db->last_query();
                $data=array('text' => 'Income Category Updated Successfully !', 'icon' => 'success');
            } else {
                $msg=array(
                    'income_cat'    => form_error('income_cat'),
                    'discription' => form_error('discription'),
                    
                );
                $data=array('text' => $msg, 'icon' => 'error');
            }
            echo json_encode($data);
        }
      }



 
  

}
