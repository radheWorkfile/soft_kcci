
<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('ComModel');
    }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
	 $this->load->view('website/index');
	}
	public function about()
	{
		$this->load->view('website/about');
	}
	public function b2b()
	{
		$this->load->view('website/b2b');
	}
	public function event_gallery()
	{
		$this->load->view('website/event_gallery');
	}
	public function team()
	{
		$this->load->view('website/team');
	}
	public function contact()
	{
		$this->load->view('website/contact');
	}
	public function chapters()
	{
		$this->load->view('website/chapters');
	}

	public function registration()
	{
		if($this->input->is_ajax_request()) {
			$this->form_validation->set_rules('name', 'User Name', 'required');
			$this->form_validation->set_rules('email', 'User Email', 'required');
			$this->form_validation->set_rules('mobile', 'User Mobile No', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('show_password', 'Show Password', 'required|matches[password]');
	 
			if($this->form_validation->run()) {
				$val=array(
					'name' => $this->input->post('name'),
					'email' => $this->input->post('email'),
					'mobile' => $this->input->post('mobile'),
					'password' => $this->input->post('password'),
					'show_password' => $this->input->post('show_password'),
				);    
				$this->ComModel->add_data('users',$val);
				$data=array('text' => 'Expense Category ', 'icon' => 'success');
			} else {
				$msg=array(
					'name' => $this->input->post('name'),
					'email' => $this->input->post('email'),
					'mobile' => $this->input->post('mobile'),
					'password' => $this->input->post('password'),
					'show_password' => $this->input->post('show_password'),
					
				);
				$data=array('text' => $msg, 'icon' => 'error');
			}
			echo json_encode($data);
		}
        $this->load->view('admin/registration');
	}


	public function savaSignUpData()
	{
		$data = $this->input->post();
		
		$config['upload_path']  = './uploads/registration/';
		$config['allowed_types']  = 'gif|jpg|png|jpeg';
	   $this->load->library('upload', $config);
	   if (!$this->upload->do_upload('photo')) {
		   echo $this->upload->display_errors();
	   } else {              
		   $img_data = $this->upload->data();
		 
		   $image =  $img_data['file_name'];
	   }
	   $data = array(
		'photo' => $image,
		'name' => $this->input->post('name'),
		'father_name' => $this->input->post('father_name'),
		'grand_father' => $this->input->post('grand_father'),
		'password' => $this->input->post('password'),
		'dob' => $this->input->post('dob'),
		'caste' => $this->input->post('caste'),
		'sub-caste' => $this->input->post('sub-caste'),
		'community' => $this->input->post('community'),
		'user_type' => $this->input->post('user_type'),
		'mobile' => $this->input->post('mobile'),
		'mail' => $this->input->post('mail'),
		'sector' => $this->input->post('sector'),
		'business_type' => $this->input->post('business_type'),
		'industries' => $this->input->post('industries'),
		'city' => $this->input->post('city'),
		'business_name' => $this->input->post('business_name'),
		'registration_number' => $this->input->post('registration_number'),
		'registration_address' => $this->input->post('registration_address'),
		'email' => $this->input->post('email'),
		'contact_no' => $this->input->post('contact_no'),
		'created_at'     => date('Y-m-d'),
	   ); 

	   $this->ComModel->add_data('registration',$data);


	    if($data['user_type'] == 2 ){
			$regisId = $this->ComModel->getLastId();
			$password = md5($this->input->post('password'));
			print_r($password);
			$userData = array(
			 'photo' => $image,
			 'registration_id' => $regisId['id'],
			 'founder_id' => $foundId['id'],
			 'founder_name' => $foundId['name'],
			 'name' => $this->input->post('name'),
			 'father_name' => $this->input->post('father_name'),
			 'show_password' => $this->input->post('password'),
			 'password' => $password,
			 'dob' => $this->input->post('dob'),
			 'admin_type' => $this->input->post('user_type'),
			 'mobile' => $this->input->post('mobile'),
			 'email' => $this->input->post('email'),
			 ); 
			$this->ComModel->add_data('users',$userData);
		}else if($data['user_type'] == 3){
			$regisId = $this->ComModel->getLastId();
			$password = md5($this->input->post('password'));
			print_r($password);
			$userData = array(
			 'photo' => $image,
			 'registration_id' => $regisId['id'],
			 'mentor_id' => $foundId['id'],
			 'founder_name' => $foundId['name'],
			 'name' => $this->input->post('name'),
			 'father_name' => $this->input->post('father_name'),
			 'show_password' => $this->input->post('password'),
			 'password' => $password,
			 'dob' => $this->input->post('dob'),
			 'admin_type' => $this->input->post('user_type'),
			 'mobile' => $this->input->post('mobile'),
			 'email' => $this->input->post('email'),
			 ); 
			$this->ComModel->add_data('users',$userData);

		}else{
			$regisId = $this->ComModel->getLastId();
			$password = md5($this->input->post('password'));
			print_r($password);
			$userData = array(
			 'photo' => $image,
			 'registration_id' => $regisId['id'],
			 'name' => $this->input->post('name'),
			 'father_name' => $this->input->post('father_name'),
			 'show_password' => $this->input->post('password'),
			 'password' => $password,
			 'dob' => $this->input->post('dob'),
			 'admin_type' => $this->input->post('user_type'),
			 'mobile' => $this->input->post('mobile'),
			 'email' => $this->input->post('email'),
			 ); 
			$this->ComModel->add_data('users',$userData);
		}


	   $data = array('text' => 'Successfully', 'icon' => 'Success');
	   echo json_encode($data); 
	}



}
