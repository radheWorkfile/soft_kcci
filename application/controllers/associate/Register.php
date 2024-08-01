<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('associate/Associate_Register_model');
        $this->load->model('associate/Associate_Common_model');
        $this->load->model('Admin_Sector_model');
        $this->load->helper(array('form', 'url'));
    }

    public function add_register()
    {
        $data['title'] = 'New Register';
        $data['breadcrumb'] = 'New Register';
        $data['menu_chk']=$this->Associate_Common_model->get_menu();
        $data['caste'] = $this->Associate_Register_model->get_data_with_condition('caste', array('map' => 0, 'caste_type' => 1, 'status' => 1));
        $data['state'] = $this->Associate_Register_model->get_data_with_condition('location', array('map' => 0, 'location_type' => 1, 'status' => 1));
        $data['sector'] = $this->Associate_Register_model->get_all_sector();
        $data['district'] = $this->Associate_Register_model->get_data_with_condition('rural', array('map' => 0, 'rural_type' => 1, 'status' => 1));
        $data['dist'] = $this->Associate_Register_model->get_data_with_condition('urban', array('map' => 0, 'urban_type' => 1, 'status' => 1));
        $data['sector'] = $this->Admin_Sector_model->all_data();
        $this->load->view('associate/register/add_register', $data);
    }

    function get_sub_caste()
    {
        if ($this->input->is_ajax_request()) {
            $caste = $this->input->post('caste');
            $data = $this->Associate_Register_model->get_data_with_condition('caste', array('map' => $caste, 'caste_type' => 2, 'status' => 1));
            echo json_encode($data);
        }
    }

    function get_distric()
    {
        if ($this->input->is_ajax_request()) {
            $state = $this->input->post('state');
            $data = $this->Associate_Register_model->get_data_with_condition('location', array('map' => $state, 'location_type' => 2, 'status' => 1));
            echo json_encode($data);
        }
    }

    function get_police()
    {
        if ($this->input->is_ajax_request()) {
            $distric = $this->input->post('distric');
            $data = $this->Associate_Register_model->get_data_with_condition('location', array('map' => $distric, 'location_type' => 3,'status' => 1));
            echo json_encode($data);
        }
    }

    function get_block()
    {
        if ($this->input->is_ajax_request()) {
            $distric = $this->input->post('distric');
            $data = $this->Associate_Register_model->get_data_with_condition('location', array('map' => $distric, 'location_type' => 4, 'status' => 1));
            echo json_encode($data);
        }
    }

    function get_post()
    {
        if ($this->input->is_ajax_request()) {
            $distric = $this->input->post('distric');
            $data = $this->Associate_Register_model->get_data_with_condition('location', array('map' => $distric, 'location_type' => 5, 'status' => 1));
            echo json_encode($data);
        }
    }

    function get_pin()
    {
        if ($this->input->is_ajax_request()) {
            $post = $this->input->post('post');
            $data = $this->Associate_Register_model->get_data_with_condition('location', array('map' => $post, 'location_type' => 6, 'status' => 1));
            echo json_encode($data);
        }
    }

    function get_industries()
    {
        if ($this->input->is_ajax_request()) {
            $sector = $this->input->post('sector');
            $data = $this->Associate_Register_model->get_data_with_condition('industeries', array('sector_name' => $sector, 'status' => 1));
            echo json_encode($data);
        }
    }

    function get_business_type()
    {
        if ($this->input->is_ajax_request()) {
            $sector = $this->input->post('sector');
            $data = $this->Associate_Register_model->get_data_with_condition('business', array('sector_name' => $sector, 'status' => 1));
            echo json_encode($data);
        }
    }

    function get_blocks()
    {
        if ($this->input->is_ajax_request()) {
            $dis = $this->input->post('dis');
            $data = $this->Associate_Register_model->get_data_with_condition('rural', array('map' => $dis, 'rural_type' => 2, 'status' => 1));
            echo json_encode($data);
        }
    }

    function get_const()
    {
        if ($this->input->is_ajax_request()) {
            $dis = $this->input->post('dis');
            $data = $this->Associate_Register_model->get_data_with_condition('rural', array('map' => $dis, 'rural_type' => 3, 'status' => 1));
            echo json_encode($data);
        }
    }

    function get_panchyat()
    {
        if ($this->input->is_ajax_request()) {
            $cons = $this->input->post('cons');
            $data = $this->Associate_Register_model->get_data_with_condition('rural', array('map' => $cons, 'rural_type' => 4, 'status' => 1));
            echo json_encode($data);
        }
    }

    function get_polling()
    {
        if ($this->input->is_ajax_request()) {
            $panch = $this->input->post('panch');
            $data = $this->Associate_Register_model->get_data_with_condition('rural', array('map' => $panch, 'rural_type' => 5, 'status' => 1));
            echo json_encode($data);
        }
    }

    function get_polling_name()
    {
        if ($this->input->is_ajax_request()) {
            $polling = $this->input->post('polling');
            $data = $this->Associate_Register_model->get_data_with_condition('rural', array('map' => $polling, 'rural_type' => 6, 'status' => 1));
            echo json_encode($data);
        }
    }

    function get_ward()
    {
        if ($this->input->is_ajax_request()) {
            $ward = $this->input->post('ward');
            $data = $this->Associate_Register_model->get_data_with_condition('urban', array('map' => $ward, 'urban_type' => 5, 'status' => 1));
            echo json_encode($data);
        }
    }

    function get_house()
    {
        if ($this->input->is_ajax_request()) {
            $house = $this->input->post('house');
            $data = $this->Associate_Register_model->get_data_with_condition('urban', array('map' => $house, 'urban_type' => 6, 'status' => 1));
            echo json_encode($data);
        }
    }

    function get_assembly()
    {
        if ($this->input->is_ajax_request()) {
            $dist = $this->input->post('dist');
            $data = $this->Associate_Register_model->get_data_with_condition('urban', array('map' => $dist, 'urban_type' => 2, 'status' => 1));
            echo json_encode($data);
        }
    }

    function get_munci()
    {
        if ($this->input->is_ajax_request()) {
            $dist = $this->input->post('dist');
            $data = $this->Associate_Register_model->get_data_with_condition('urban', array('map' => $dist, 'urban_type' => 3, 'status' => 1));
            echo json_encode($data);
        }
    }

    function get_coun()
    {
        if ($this->input->is_ajax_request()) {
            $mus = $this->input->post('mus');
            $data = $this->Associate_Register_model->get_data_with_condition('urban', array('map' => $mus, 'urban_type' => 4, 'status' => 1));
            echo json_encode($data);
        }
    }

    function get_polling_no()
    {
        if ($this->input->is_ajax_request()) {
            $poll = $this->input->post('poll');
            $data = $this->Associate_Register_model->get_data_with_condition('urban', array('map' => $poll, 'urban_type' => 8, 'status' => 1));
            echo json_encode($data);
        }
    }

    function get_polling_nm()
    {
        if ($this->input->is_ajax_request()) {
            $pollingno = $this->input->post('pollingno');
            $data = $this->Associate_Register_model->get_data_with_condition('urban', array('map' => $pollingno, 'urban_type' => 7, 'status' => 1));
            echo json_encode($data);
        }
    }

    public function register_datas()
    {
        if ($this->input->is_ajax_request()) {
            
                $value = $this->input->post();

            $config['upload_path']    =  './uploads/business/';
            $config['allowed_types']  =  'gif|jpg|png';
            $config['max_size']       =  1024;
            $config['max_width']      = 2000;
            $config['max_height']     =  2000;

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('photo')) {
                $msg = array('error' => $this->upload->display_errors());
                $data = array('text' => $msg, 'icon' => "error");
            } else {
                $img_data = $this->upload->data();
                $img = base_url('uploads/business/' . $img_data['raw_name'] . $img_data['file_ext']);
                
            }

            $pass = rand(pow(10, 6-1), pow(10, 6)-1);
            $val = array(
                'name'                  =>  $value['nm'],
                'father_name'           =>  $value['fnm'],
                'grand_father'          =>  $value['gfnm'],
                'dob'                   =>  $value['dob'],
                'caste'                 =>  $value['caste'],
                'community'             =>  $value['community'],
                'mobile'                =>  $value['mobile'],
                'mail'                  =>  $value['mail'],
                'password'              =>  $pass,
                'tvillage'              =>  $value['tvillage'],
                'tbulding'              =>  $value['tbulding'],
                'tlandmark'             =>  $value['tlandmark'],
                'tstate'                =>  $value['tstate'],
                'pvillage'              =>  $value['pvillage'],
                'pbulding'              =>  $value['pbulding'],
                'plandmark'             =>  $value['plandmark'],
                'pstate'                =>  $value['pstate'],
                'sector'                =>  $value['sector'],
                'business_type'         =>  $value['business_type'],
                'business_name'         =>  $value['business_name'],
                'registration_number'   =>  $value['registration_number'],
                'registration_address'  =>  $value['registration_address'],
                'email'                 =>  $value['email'],
                'contact_no'            =>  $value['contact_no'],
                'photo'                 =>  empty($img)? '' : $img,
                'city'                  =>  $value['city'],
                'legal_gst'             =>  $value['legal_gst'],
                'legal_gst_no'          =>  $value['legal_gst_no'],
                'legal_itr_file'        =>  $value['legal_itr_file'],
                'legal_filling_itr'     =>  $value['legal_filling_itr'],
                'legal_last_year_turnover' =>  $value['legal_last_year_turnover'],
                'legal_firm_name'       =>  $value['legal_firm_name'],
                'legal_ca_name'         =>  $value['legal_ca_name'],
                'legal_ca_mobile_no'    =>  $value['legal_ca_mobile_no'],
                'area_type'             =>  $value['area_type'],
                'voter_id'              =>  empty($value['voter_id'])?' ':$value['voter_id'],
                'created_at'            =>  date('Y-m-d'),
                'created_by_user_type_id' => $this->session->userdata('user_id')
            );
            if (isset($_POST['sub-caste'])) {
                $val['sub-caste']            =  $value['sub-caste'];
            }

            if (isset($_POST['tdistric'])) {
                $val['tdistric']            =  $value['tdistric'];
            }

            if (isset($_POST['tpolice'])) {
                $val['tpolice']            =  $value['tpolice'];
            }

            if (isset($_POST['tblock'])) {
                $val['tblock']            =  $value['tblock'];
            }

            if (isset($_POST['tpost'])) {
                $val['tpost']            =  $value['tpost'];
            }

            if (isset($_POST['tpin'])) {
                $val['tpin']            =  $value['tpin'];
            }

            if (isset($_POST['pdistric'])) {
                $val['pdistric']            =  $value['pdistric'];
            }

            if (isset($_POST['ppolice'])) {
                $val['ppolice']            =  $value['ppolice'];
            }

            if (isset($_POST['pblock'])) {
                $val['pblock']            =  $value['pblock'];
            }

            if (isset($_POST['ppost'])) {
                $val['ppost']            =  $value['ppost'];
            }

            if (isset($_POST['ppin'])) {
                $val['ppin']            =  $value['ppin'];
            }

            if (isset($_POST['industries'])) {
                $val['industries']            =  $value['industries'];
            }

            if($value['area_type'] == 1) {   
                
                $val['rural_distric']         =  empty($value['rural_distric'])?' ':$value['rural_distric'];
                $val['rural_block']           =  $value['rural_block'];
                $val['rural_cons']            =  $value['rural_cons'];
                $val['rural_panchyat']        =  $value['rural_panchyat'];
                $val['rural_polling_num']     =  $value['rural_polling_num'];
                $val['rural_polling_nm']      =  $value['rural_polling_nm'];
            
            } elseif($value['area_type'] == 2) { 

                $val['urban_district']       =  empty($value['urban_district'])?' ':$value['urban_district'];
                $val['urban_assembly']       =  $value['urban_assembly'];
                $val['urban_muncipal_cor']   =  $value['urban_muncipal_cor'];
                $val['urban_ward_no']        =  $value['urban_ward_no'];
                $val['urban_ward_coun']      =  $value['urban_ward_coun'];
                $val['urban_house_no']       =  $value['urban_house_no'];
                $val['urban_polling_nm']     =  $value['urban_polling_nm'];
                $val['urban_polling_num']    =  $value['urban_polling_num'];
            }
            
            $this->Associate_Register_model->save_data('registration',$val);

            $gd = $this->Associate_Register_model->get_reg_id($value);

            $valu = array(
                'registration_id' => $gd['id'],
                'admin_type' => 2,
                'email' => $value['mail'],  
                'password' => md5($pass),
                'name' => $value['nm'],
                'dob' => $value['dob'],
                'status' => 1,
                'created_by_user_type_id' => $this->session->userdata('user_id'),
            );
            $this->Associate_Register_model->save_data('users',$valu);
            $data = array('text' => 'New Sector Created Successfully', 'icon' => 'success');
            echo json_encode($data);
        }
    }

    public function manage_register()
    {
        $data['title'] = 'Manage Register';
        $data['breadcrumb'] = 'Manage Register';
        $data['menu_chk']=$this->Associate_Common_model->get_menu();
        $data['sector'] = $this->Associate_Register_model->get_all_sector();
        $value=$this->session->userdata('registration_id');
        $data['regi'] = $this->Associate_Register_model->get_registration_id($value);
        $data['register'] = $this->Associate_Register_model->get_all_data();
        // print_r($data['register']);die;
        $this->load->view('associate/register/manage_register', $data);
    }
    
    public function View_register() {
        if($this->input->is_ajax_request()) {
            $value=$this->input->post();
            $data['regis']=$this->Associate_Register_model->get_all_data_register($value['id']);
            // print_r($data['regis']);die;
            $this->load->view('associate/register/register_view',$data);
        }
    }
    
    public function update_register() {
        if($this->input->is_ajax_request()) {
            $value=$this->input->post();
            $data['regist']=$this->Associate_Register_model->get_all_data_register($value['id']);
            // print_r($data['regist']);die;
            
            $data['caste'] = $this->Associate_Register_model->get_data_with_condition('caste', array('map' => 0, 'caste_type' => 1, 'status' => 1));
            $data['subcaste'] = $this->Associate_Register_model->get_subcaste();
            $data['state'] = $this->Associate_Register_model->get_data_with_condition('location', array('map' => 0, 'location_type' => 1, 'status' => 1));
            $data['ruldistrict'] = $this->Associate_Register_model->get_data_with_condition('rural', array('map' => 0, 'rural_type' => 1, 'status' => 1));
            $data['urbdistrict'] = $this->Associate_Register_model->get_data_with_condition('urban', array('map' => 0, 'urban_type' => 1, 'status' => 1));
            $data['sectr'] = $this->Associate_Register_model->get_all_sector();
            $data['industers'] = $this->Associate_Register_model->get_industeries();
            $data['bussns'] = $this->Associate_Register_model->get_all_business();
            // print_r($data['bussns']);die;
            $data['ruldata'] = $this->Associate_Register_model->rural_data();
            $data['urbdata'] = $this->Associate_Register_model->urban_data();
            $data['distr'] = $this->Associate_Register_model->get_district();
            $data['police'] = $this->Associate_Register_model->get_police();
            $data['block'] = $this->Associate_Register_model->get_block();
            $data['post'] = $this->Associate_Register_model->get_post();
            $data['pin'] = $this->Associate_Register_model->get_pin();
            // print_r($data['regist']);die;
            $this->load->view('associate/register/register_update',$data);
        }
    }

    public function update_register_data()
    {
        if ($this->input->is_ajax_request()) {
            
                $value = $this->input->post();
                $val = array(
                    'id'                    => $value['id'],
                    'name'                  =>  $value['nm'],
                    'father_name'           =>  $value['fnm'],
                    'grand_father'          =>  $value['gfnm'],
                    'dob'                   =>  $value['dob'],
                    'caste'                 =>  $value['caste'],
                    'sub-caste'             =>  $value['sub-caste'],
                    'community'             =>  $value['community'],
                    'mobile'                =>  $value['mobile'],
                    'mail'                  =>  $value['mail'],
                    'tvillage'              =>  $value['tvillage'],
                    'tbulding'              =>  $value['tbulding'],
                    'tlandmark'             =>  $value['tlandmark'],
                    'tstate'                =>  $value['tstate'],
                    'tdistric'              =>  $value['tdistric'],
                    'tpolice'               =>  $value['tpolice'],
                    'tblock'                =>  $value['tblock'],
                    'tpost'                 =>  $value['tpost'],
                    'tpin'                  =>  $value['tpin'],
                    'pvillage'              =>  $value['pvillage'],
                    'pbulding'              =>  $value['pbulding'],
                    'plandmark'             =>  $value['plandmark'],
                    'pstate'                =>  $value['pstate'],
                    'pdistric'              =>  $value['pdistric'],
                    'ppolice'               =>  $value['ppolice'],
                    'pblock'                =>  $value['pblock'],
                    'ppost'                 =>  $value['ppost'],
                    'ppin'                  =>  $value['ppin'],
                    'city'                  =>  $value['city'],
                    'sector'                =>  $value['sector'],
                    'business_type'         =>  $value['business_type'],
                    'business_name'         =>  $value['business_name'],
                    'registration_number'   =>  $value['registration_number'],
                    'registration_address'  =>  $value['registration_address'],
                    'email'                 =>  $value['email'],
                    'contact_no'            =>  $value['contact_no'],
                    'legal_gst'             =>  $value['legal_gst'],
                    'legal_gst_no'          =>  $value['legal_gst_no'],
                    'legal_itr_file'        =>  $value['legal_itr_file'],
                    'legal_filling_itr'     =>  $value['legal_filling_itr'],
                    'legal_last_year_turnover' =>  $value['legal_last_year_turnover'],
                    'legal_firm_name'       =>  $value['legal_firm_name'],
                    'legal_ca_name'         =>  $value['legal_ca_name'],
                    'legal_ca_mobile_no'    =>  $value['legal_ca_mobile_no'],
                    'area_type'             =>  $value['area_type'],
                    'voter_id'              =>  empty($value['voter_id'])?' ':$value['voter_id'],
                   'created_at'             =>  date('Y-m-d'),
                );
                if (isset($_POST['sub-caste'])) {
                    $val['sub-caste']            =  $value['sub-caste'];
                }

                if (isset($_POST['tdistric'])) {
                    $val['tdistric']            =  $value['tdistric'];
                }

                if (isset($_POST['tpolice'])) {
                    $val['tpolice']            =  $value['tpolice'];
                }

                if (isset($_POST['tblock'])) {
                    $val['tblock']            =  $value['tblock'];
                }

                if (isset($_POST['tpost'])) {
                    $val['tpost']            =  $value['tpost'];
                }

                if (isset($_POST['tpin'])) {
                    $val['tpin']            =  $value['tpin'];
                }

                if (isset($_POST['pdistric'])) {
                    $val['pdistric']            =  $value['pdistric'];
                }

                if (isset($_POST['ppolice'])) {
                    $val['ppolice']            =  $value['ppolice'];
                }

                if (isset($_POST['pblock'])) {
                    $val['pblock']            =  $value['pblock'];
                }

                if (isset($_POST['ppost'])) {
                    $val['ppost']            =  $value['ppost'];
                }

                if (isset($_POST['ppin'])) {
                    $val['ppin']            =  $value['ppin'];
                }

                if (isset($_POST['industries'])) {
                    $val['industries']            =  $value['industries'];
                }

                if($value['area_type'] == 1) {
                            
                    $val['rural_distric']         =  empty($value['rural_distric'])?' ':$value['rural_distric'];
                    $val['rural_block']           =  $value['rural_block'];
                    $val['rural_cons']            =  $value['rural_cons'];
                    $val['rural_panchyat']        =  $value['rural_panchyat'];
                    $val['rural_polling_num']     =  $value['rural_polling_num'];
                    $val['rural_polling_nm']      =  $value['rural_polling_nm'];
                
                } elseif($value['area_type'] == 2) { 

                    $val['urban_district']       =  empty($value['urban_district'])?' ':$value['urban_district'];
                    $val['urban_assembly']       =  $value['urban_assembly'];
                    $val['urban_muncipal_cor']   =  $value['urban_muncipal_cor'];
                    $val['urban_ward_no']        =  $value['urban_ward_no'];
                    $val['urban_ward_coun']      =  $value['urban_ward_coun'];
                    $val['urban_house_no']       =  $value['urban_house_no'];
                    $val['urban_polling_nm']     =  $value['urban_polling_nm'];
                    $val['urban_polling_num']    =  $value['urban_polling_num'];
                }
             
                // print_r($val);die;
                $this->Associate_Register_model->update_data_register($val);
                $valu = array(
                    'registration_id' => $value['id'],
                    'admin_type' => 2,
                    'email' => $value['mail'],
                    'name' => $value['nm'],
                    'dob' => $value['dob'],
                );
                // print_r($valu);die;
                $this->Associate_Register_model->update_data($valu);
                $data = array('text' => 'New Sector Created Successfully', 'icon' => 'success');
            echo json_encode($data);
        }
    }

    public function update_pic()
    {
        $config['upload_path']  =  './uploads/business/';
        $config['allowed_types']  =  'gif|jpg|png';
        $config['max_size']  =  1024;
        $config['max_width']  = 2000;
        $config['max_height']  =  2000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('photo')) {
            $msg = array('error' => $this->upload->display_errors());
            $data = array('text' => $msg, 'icon' => "error");
        } else {
            $img_data = $this->upload->data();
            $img = base_url('uploads/business/' . $img_data['raw_name'] . $img_data['file_ext']);
            $val = array('id' => $this->input->post('id'), 'photo' => $img);
            //print_r($val);die;
            $this->Associate_Register_model->update_photo($val);   
            //echo $this->db->last_query();die;
            $data = array('text' => "Picture Updated Successfully !", 'icon' => "success");
        }

        echo json_encode($data);
    }

    public function delete_register() {
        if($this->input->is_ajax_request()) {
            $val=$this->input->post();
            $del = $this->Associate_Register_model->delete_register($val['id']);
            if($del) {
                $data = array('text' => 'Register Data Deleted Successfully', 'icon' => 'success');
            } else{
                $data=array('text' => 'Something went wrong', 'icon' => 'error');
            }
            echo json_encode($data);
        }
    }

    public function register_search_data() {
        if($this->input->is_ajax_request()) {
            $values = $this->input->post();
            $data['reg'] = $this->Associate_Register_model->register_search_data($values);
            //print_r($data['fil']);die;
            // echo $this->db->last_query();die;
            $this->load->view('Associate/register/filter_register_data',$data);
        }
    }
}
?>