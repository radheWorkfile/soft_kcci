<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_Register_model');
        $this->load->model('ComModel');


        // $this->load->model('login_model');
        // $this->load->library('form_validation');
        // $this->load->library('user_agent');
        // error_reporting(0);
    }
 

    public function add_register()
    {
        
        $data['caste'] = $this->Admin_Register_model->get_data_with_condition('caste', array('map' => 0, 'caste_type' => 1, 'status' => 1));
        // echo $this->db->last_query();
        //  print_r($data['caste']); die;
        $data['state'] = $this->Admin_Register_model->get_data_with_condition('location', array('map' => 0, 'location_type' => 1, 'status' => 1));
        $data['sector'] = $this->Admin_Register_model->get_all_sector();
        $data['district'] = $this->Admin_Register_model->get_data_with_condition('rural', array('map' => 0, 'rural_type' => 1, 'status' => 1));
        $data['dist'] = $this->Admin_Register_model->get_data_with_condition('urban', array('map' => 0, 'urban_type' => 1, 'status' => 1));


        $this->load->view('admin/register/add_register',$data);
    }


    public function sign_up()
	{
        $data['caste'] = $this->Admin_Register_model->get_data_with_condition('caste', array('map' => 0, 'caste_type' => 1, 'status' => 1));
        // echo $this->db->last_query();
        //  print_r($data['caste']); die;
        $data['state'] = $this->Admin_Register_model->get_data_with_condition('location', array('map' => 0, 'location_type' => 1, 'status' => 1));
        $data['sector'] = $this->Admin_Register_model->get_all_sector();
        $data['district'] = $this->Admin_Register_model->get_data_with_condition('rural', array('map' => 0, 'rural_type' => 1, 'status' => 1));
        $data['dist'] = $this->Admin_Register_model->get_data_with_condition('urban', array('map' => 0, 'urban_type' => 1, 'status' => 1));
        $data['businessType'] = $this->ComModel->getAllData('*','business');
		$this->load->view('website/sign_up',$data);
	}




    public function saveData()
    {

     
                $this->form_validation->set_rules('name','Name','trim|required');
                $this->form_validation->set_rules('dob','Daet Of Birth','trim|required');
                $this->form_validation->set_rules('p_h_qualification','Qualification','trim|required');
                $this->form_validation->set_rules('user_type','User Type','trim|required');
                $this->form_validation->set_rules('email','Enter Valid Email','trim|required|valid_email');
                $this->form_validation->set_rules('mobile','Mobile Number','trim|required');
                $this->form_validation->set_rules('password', 'Password', 'required');
                $this->form_validation->set_rules('con_password', 'Confirm Password', 'required|matches[password]');
                $this->form_validation->set_rules('sector','Sector','trim|required');
                $this->form_validation->set_rules('industries','Industries','trim|required');
               
               
                if($this->form_validation->run()==TRUE) 
                {
                    $value = $this->input->post();
                    $data = array(
                    'name' => $value['name'],
                    'father_name' => $value['father_name'],
                    'grand_father' => $value['grand_father'],
                    'dob' => $value['dob'],
                    'p_h_qualification' => $value['p_h_qualification'],
                    'town_name' => $value['town_name'],
                    'sta_con_name' => $value['sta_con_name'],
                    'p_sta_con' => $value['p_sta_con'],
                    'user_type' => $value['user_type'],
                    'mobile' => $value['mobile'],
                    'email' => $value['email'],
                    'password' => $value['password'],
                    'con_password' => $value['con_password'],
                    'registration_address' => $value['address'],
                    'tvillage' => $value['tvillage'],
                    'tbulding' => $value['tbulding'],
                    'tlandmark' => $value['tlandmark'],
                    'tstate' => $value['tstate'],
                    'tdistric' => $value['tdistric'],
                    'tpolice' => $value['tpolice'],
                    'tblock' => $value['tblock'],
                    'tpost' => $value['tpost'],
                    'tpin' => $value['tpin'],
                    'pvillage' => $value['pvillage'],
                    'pbulding' => $value['pbulding'],
                    'plandmark' => $value['plandmark'],
                    'pstate' => $value['pstate'],
                    'pdistric' => $value['pdistric'],
                    'ppolice' => $value['ppolice'],
                    'pblock' => $value['pblock'],
                    'ppost' => $value['ppost'],
                    'ppin' => $value['ppin'],
                    'sector' => $value['sector'],
                    'business_type' => $value['business_type'],
                    'industries' => $value['industries'],
                    'city' => $value['city'],
                    'created_at'     => date('Y-m-d'),
                   ); 
                   if($this->ComModel->add_data('registration',$data))
                   {
                         $regisId = $this->ComModel->getLastId();
                         $password = md5($this->input->post('password'));
                         $userData = array(
                         'registration_id' => $regisId['id'],
                         'name' => $value['name'],
                         'father_name' => $value['father_name'],
                         'show_password' => $value['password'],
                         'password' => $password,
                         'admin_type' => $value['user_type'],
                         'dob' => $value['dob'],
                         'mobile' => $value['mobile'],
                         'email' => $value['email'],
                         ); 
                         if($this->ComModel->add_data('users',$userData))
                         {
                             $data=array('text' =>'Thank you! You have sucessfully sign up.', 'icon' => 'success');
                         }
                         else
                         {
                             $data=array('text' =>array('Something went wrong while creating user details'), 'icon' => 'error');
                         }
                   }
                   else{
                     $data=array('text' =>array('Data Not Added Successfully'), 'icon' => 'error');
                   }
     
                 }
                else {
                $msg=array(
                         'name' =>form_error('name'),
                         'dob' =>form_error('dob'),
                         'p_h_qualification' =>form_error('p_h_qualification'),
                         'user_type' =>form_error('user_type'),
                         'email' =>form_error('email'),
                         'mobile' =>form_error('mobile'),
                         'password' =>form_error('password'),
                         'con_password' =>form_error('con_password'),
                         'sector' =>form_error('sector'),
                         'industries' =>form_error('industries')
                         );
                         $data=array('text' => $msg, 'icon' => 'error');
                }
                echo json_encode($data); 
        
    }
   


    

    function get_sub_caste()
    {
           if ($this->input->is_ajax_request()) {
            $caste = $this->input->post('caste');
            $data = $this->Admin_Register_model->get_data_with_condition('caste', array('map' => $caste, 'caste_type' => 2, 'status' => 1));
            echo json_encode($data);
        }
    }

    
    function get_distric()
    {
        if ($this->input->is_ajax_request()) {
            $state = $this->input->post('state');
            $data = $this->Admin_Register_model->get_data_with_condition('location', array('map' => $state, 'location_type' => 2, 'status' => 1));
            echo json_encode($data);
        }
    }

    
    function get_police()
    {
        if ($this->input->is_ajax_request()) {
            $distric = $this->input->post('distric');
            $data = $this->Admin_Register_model->get_data_with_condition('location', array('map' => $distric, 'location_type' => 3, 'status' => 1));
            echo json_encode($data);
        }
    }

    function get_block()
    {
        if ($this->input->is_ajax_request()) {
            $distric = $this->input->post('distric');
            $data = $this->Admin_Register_model->get_data_with_condition('location', array('map' => $distric, 'location_type' => 4,'status' => 1));
            echo json_encode($data);
        }
    }

    function get_post()
    {
        if ($this->input->is_ajax_request()) {
            $distric = $this->input->post('distric');
            $data = $this->Admin_Register_model->get_data_with_condition('location', array('map' => $distric, 'location_type' => 5, 'status' => 1));
            echo json_encode($data);
        }
    }

    function get_pin()
    {
        if ($this->input->is_ajax_request()) {
            $post = $this->input->post('post');
            $data = $this->Admin_Register_model->get_data_with_condition('location', array('map' => $post, 'location_type' => 6, 'status' => 1));
            echo json_encode($data);
        }
    }

    function get_industries()
    {
        if ($this->input->is_ajax_request()) {
            $sector = $this->input->post('sector');
            $data = $this->Admin_Register_model->get_data_with_condition('industeries', array('sector_name' => $sector, 'status' => 1));
            // print_r($data);die;
            echo json_encode($data);
        }
    }

    function get_business_type()
    {
        
       
        if ($this->input->is_ajax_request()) {
            $sector = $this->input->post('sector');
            $data = $this->Admin_Register_model->get_data_with_condition('business as bu', array('sector_name' => $sector, 'status' => 1),'bu.id,bu.sector_name,bu.business_type');
            // print_r($data);die;
            echo json_encode($data);
        }
    }

    function get_blocks()
    {
        if ($this->input->is_ajax_request()) {
            $dis = $this->input->post('dis');
            $data = $this->Admin_Register_model->get_data_with_condition('rural', array('map' => $dis, 'rural_type' => 2, 'status' => 1));
            echo json_encode($data);
        }
    }

    function get_const()
    {
        if ($this->input->is_ajax_request()) {
            $dis = $this->input->post('dis');
            $data = $this->Admin_Register_model->get_data_with_condition('rural', array('map' => $dis, 'rural_type' => 3, 'status' => 1));
            echo json_encode($data);
        }
    }

    function get_panchyat()
    {
        if ($this->input->is_ajax_request()) {
            $cons = $this->input->post('cons');
            $data = $this->Admin_Register_model->get_data_with_condition('rural', array('map' => $cons, 'rural_type' => 4, 'status' => 1));
            echo json_encode($data);
        }
    }

    function get_polling()
    {
        if ($this->input->is_ajax_request()) {
            $panch = $this->input->post('panch');
            $data = $this->Admin_Register_model->get_data_with_condition('rural', array('map' => $panch, 'rural_type' => 5, 'status' => 1));
            echo json_encode($data);
        }
    }

    function get_polling_name()
    {
        if ($this->input->is_ajax_request()) {
            $polling = $this->input->post('polling');
            $data = $this->Admin_Register_model->get_data_with_condition('rural', array('map' => $polling, 'rural_type' => 6, 'status' => 1));
            echo json_encode($data);
        }
    }

    function get_ward()
    {
        if ($this->input->is_ajax_request()) {
            $ward = $this->input->post('ward');
            $data = $this->Admin_Register_model->get_data_with_condition('urban', array('map' => $ward, 'urban_type' => 5, 'status' => 1));
            echo json_encode($data);
        }
    }

    function get_house()
    {
        if ($this->input->is_ajax_request()) {
            $house = $this->input->post('house');
            $data = $this->Admin_Register_model->get_data_with_condition('urban', array('map' => $house, 'urban_type' => 6, 'status' => 1));
            echo json_encode($data);
        }
    }

    function get_assembly()
    {
        if ($this->input->is_ajax_request()) {
            $dist = $this->input->post('dist');
            $data = $this->Admin_Register_model->get_data_with_condition('urban', array('map' => $dist, 'urban_type' => 2, 'status' => 1));
            echo json_encode($data);
        }
    }

    function get_munci()
    {
        if ($this->input->is_ajax_request()) {
            $dist = $this->input->post('dist');
            $data = $this->Admin_Register_model->get_data_with_condition('urban', array('map' => $dist, 'urban_type' => 3, 'status' => 1));
            echo json_encode($data);
        }
    }

    function get_coun()
    {
        if ($this->input->is_ajax_request()) {
            $mus = $this->input->post('mus');
            $data = $this->Admin_Register_model->get_data_with_condition('urban', array('map' => $mus, 'urban_type' => 4, 'status' => 1));
            echo json_encode($data);
        }
    }

    function get_polling_no()
    {
        if ($this->input->is_ajax_request()) {
            $poll = $this->input->post('poll');
            $data = $this->Admin_Register_model->get_data_with_condition('urban', array('map' => $poll, 'urban_type' => 8, 'status' => 1));
            echo json_encode($data);
        }
    }

    function get_polling_nm()
    {
        if ($this->input->is_ajax_request()) {
            $pollingno = $this->input->post('pollingno');
            $data = $this->Admin_Register_model->get_data_with_condition('urban', array('map' => $pollingno, 'urban_type' => 7, 'status' => 1));
            echo json_encode($data);
        }
    }


    // =========================================================================    

    public function manRegister()
    {
        // $data['dist'] = $this->Admin_Register_model->get_data_with_condition('urban', array('map' => 0, 'urban_type' => 1, 'status' => 1));
        $data['sector'] = $this->Admin_Register_model->get_all_sector();
        $data['register'] = $this->Admin_Register_model->get_all_register();
        // print_r($data['register']);die;
        $this->load->view('admin/register/manage_register',$data);
    }

    public function deleteData()
    {
        $val = $this->input->post();
        $this->ComModel->delete('*',array('id' => $val['id']),'registration');
          
    }
    
    public function viewDAta()
    {
        if($this->input->is_ajax_request()) {
            $value=$this->input->post();
            // print_r($data['value']);die;
            $data['regis']=$this->Admin_Register_model->get_all_data($value['id']);
            $this->load->view('admin/register/viewRegis',$data);
        }
       
    }

            public function editRegData()
            {
            if($this->input->is_ajax_request()) {
                $value=$this->input->post();
                $data['regist']=$this->Admin_Register_model->get_all_data($value['id']);
                // print_r($data['regist']);die;
                
                $data['caste'] = $this->Admin_Register_model->get_data_with_condition('caste', array('map' => 0, 'caste_type' => 1, 'status' => 1));
                $data['subcaste'] = $this->Admin_Register_model->get_subcaste();
                $data['state'] = $this->Admin_Register_model->get_data_with_condition('location', array('map' => 0, 'location_type' => 1, 'status' => 1));
                $data['ruldistrict'] = $this->Admin_Register_model->get_data_with_condition('rural', array('map' => 0, 'rural_type' => 1, 'status' => 1));
                $data['urbdistrict'] = $this->Admin_Register_model->get_data_with_condition('urban', array('map' => 0, 'urban_type' => 1, 'status' => 1));
                $data['sectr'] = $this->Admin_Register_model->get_all_sector();
                $data['pack'] = $this->Admin_Register_model->get_package_data();
                $data['industers'] = $this->Admin_Register_model->get_industeries();
                $data['bussns'] = $this->Admin_Register_model->get_all_business();
                $data['ruldata'] = $this->Admin_Register_model->rural_data();
                $data['urbdata'] = $this->Admin_Register_model->urban_data();
                $data['distr'] = $this->Admin_Register_model->get_district();
                $data['police'] = $this->Admin_Register_model->get_police();
                $data['block'] = $this->Admin_Register_model->get_block();
                $data['post'] = $this->Admin_Register_model->get_post();
                $data['pin'] = $this->Admin_Register_model->get_pin();
                $this->load->view('admin/register/editRegData',$data);
            }
       
            }



            public function updateData()
            {           

        


    if ($this->input->is_ajax_request()) {
        $value = $this->input->post();
        $val = array (
        'id' => $value['id'],
        'name'                  =>  $value['name'],
        'father_name'           =>  $value['father_name'],
        'grand_father'          =>  $value['grand_father'],
        'dob'                   =>  $value['dob'],
        'caste'                 =>  $value['caste'],
        'sub-caste'             =>  $value['sub-caste'],
        'user_type'             =>  $value['user_type'],
        'mobile'                =>  $value['mobile'],
        'email'                 =>  $value['email'],
        'password'              =>  $value['password'],
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
        'sector'                =>  $value['sector'],
        'business_type'         =>  $value['business_type'],
        'business_name'         =>  $value['business_name'],
        'registration_number'   =>  $value['registration_number'],
        'registration_address'  =>  $value['registration_address'],
        'contact_no'            =>  $value['contact_no'],
        'city'                  =>  $value['city'],
        'w_name'                =>  $value['w_name'],
        'w_dob'                 =>  $value['w_dob'],
        'w_address'             =>  $value['w_address'],
        'w_mobile_no'           =>  $value['w_mobile_no'],
        'w_occupation'          =>  $value['w_occupation'],
        'f_name'                =>  $value['f_name'],
        'f_dob'                 =>  $value['f_dob'],
        'f_address'             =>  $value['f_address'],
        'f_mobile_no'           =>  $value['f_mobile_no'],
        'f_occupation'          =>  $value['f_occupation'],
        'gf_dob'                =>  $value['gf_dob'],
        'gf_address'            =>  $value['gf_address'],
        'gf_mobile_no'          =>  $value['gf_mobile_no'],
        'gf_occupation'         =>  $value['gf_occupation'],
        'voter_id'              =>  empty($value['voter_id'])?' ':$value['voter_id'],
    );
    $this->ComModel->update_data($val,'registration');

    $value['w_child']=array();        
    $countChild=count($value['w_child']);
    for($x=0;$x<$countChild;$x++)
    {
        $createArr=array(
        'registration_id' => $value['id'],
        'child_name'=>$value['w_child'][$x],
        'child_dob'=>$value['w_child_dob'][$x],
        'child_proffession'=>$value['w_child_occ'][$x]);    
        print_r( $createArr);die;
        $this->ComModel->add_data('member_child_manage',$createArr);
        
     } 

     $regisId = $this->ComModel->getLastId();
     
     $password = md5($this->input->post('password'));
     $valu = array(
     'registration_id'=>$value['id'],
      'name' => $value['name'],
      'father_name' => $value['father_name'],
      'show_password' => $value['password'],
      'password' => $password,
      'dob' => $value['dob'],
      'admin_type' => $value['user_type'],
      'mobile' => $value['mobile'],
      'email' => $value['email'],
      ); 
     
     $this->ComModel->mi_update_data('users',array('registration_id'=>$value['id']),$valu);
 
   
     

    if (isset($_POST['industries'])){
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
     
        $this->Admin_Register_model->update_data_register($val);
        $valu = array(
            'registration_id' => $value['id'],
            'admin_type' => $value['user_type'],
            'email' => $value['email'],
            'name' => $value['name'],
            'dob' => $value['dob'],
        );
        // print_r($valu);die;
        $this->Admin_Register_model->update_data($valu);
        $data = array('text' => 'New Sector Created Successfully', 'icon' => 'success');
    } else {
        $msg = array(
            'nm'        => form_error('nm'),
            'fnm'       => form_error('fnm'),
            'dob'       => form_error('dob'),
            'caste'     => form_error('caste'),
            'sub-caste' => form_error('sub-caste'),
            'package'   => form_error('package'),
            'status'    => form_error('status'),
            'mobile'    => form_error('mobile'),
            'mail'      => form_error('mail'),

        );
        $data = array('text' => $msg, 'icon' => 'error');
    }
    echo json_encode($data);
}



            }




   
    
            




    
  

