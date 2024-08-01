<?php 

require APPPATH.'libraries/REST_Controller.php';

class Register extends REST_Controller{
    
    public function __construct(){

        parent::__construct();
        $this->load->helper("security");
        $this->load->model('api/common_model', 'Common_model');
        date_default_timezone_set('Asia/Kolkata');
    }


    public function sector_get()
    {
        $sector = $this->Common_model->all_data_con('sector',array('status' => 1));
        if (count($sector) > 0) {
            $message = array(
                $sector
                        );
            $this->response($sector, REST_Controller::HTTP_OK);
        } else {
            $message = array(
                'status'   => FALSE,
                'data'      => $sector,
                'message'   => 'No Sector Available.'
            );
            $this->response($message, REST_Controller::HTTP_NOT_FOUND);
        } 
    }

    public function industries_post()
    {
        $_POST = $this->security->xss_clean($_POST);
        $this->form_validation->set_rules("sector_id", "Sector ID", "required");
        if($this->form_validation->run() === TRUE){
            $sec = $this->input->post('sector_id');

            $sector = $this->Common_model->get_data_con('industeries', array('sector_name' => $sec ,'status' => 1));

            if (count($sector) > 0) {
                $message = array(
                    'status'   => TRUE,
                    'data'      => $sector,
                    'message'   => 'Sector List.'
                );
                $this->response($message, REST_Controller::HTTP_OK);
            } else {
                $message = array(
                    'status'   => FALSE,
                    'data'      => $sector,
                    'message'   => 'No Sector Available.'
                );
                $this->response($message, REST_Controller::HTTP_NOT_FOUND);
            }
        }else{
            $message = array(
                'status'   => FALSE,
                'message'   => $this->form_validation->error_array()
            );
            $this->response($message, REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function caste_get()
    {
        $caste = $this->Common_model->all_data_con('caste',array('map' => 0, 'caste_type' => 1, 'status' => 1));
        if (count($caste) > 0) {
            $message = array(
                'status'   => TRUE,
                'data'      => $caste,
                'message'   => 'Caste List.'
            );
            $this->response($message, REST_Controller::HTTP_OK);
        } else {
            $message = array(
                'status'   => FALSE,
                'data'      => $caste,
                'message'   => 'No Caste Available.'
            );
            $this->response($message, REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function sub_caste_post()
    {
        $_POST = $this->security->xss_clean($_POST);
        $this->form_validation->set_rules("caste_id", "Caste ID", "required");
        if ($this->form_validation->run() === TRUE) {
            $caste_id = $this->input->post('caste_id');

            $caste = $this->Common_model->get_data_con('caste', array('map' => $caste_id, 'caste_type' => 2, 'status' => 1));

            if (count($caste) > 0) {
                $message = array(
                    'status'   => TRUE,
                    'data'      => $caste,
                    'message'   => 'Sub Caste List.'
                );
                $this->response($message, REST_Controller::HTTP_OK);
            } else {
                $message = array(
                    'status'   => FALSE,
                    'data'      => $caste,
                    'message'   => 'No Sub Caste Available.'
                );
                $this->response($message, REST_Controller::HTTP_NOT_FOUND);
            }
        } else {
            $message = array(
                'status'   => FALSE,
                'message'   => $this->form_validation->error_array()
            );
            $this->response($message, REST_Controller::HTTP_NOT_FOUND);
        }
    }
    
}
?>