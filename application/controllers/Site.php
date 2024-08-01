<?php session_start(); ?>
<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->model('Admin_Register_model');
        $this->load->model('member/ComModel');
        $this->load->model('founder/ComModel');
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
		$data['regData'] =  $this->ComModel->showAllDataWcon('*',array('user_type' => 4),'registration');
		$this->load->view('website/b2b',$data);
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
	public function startup() 
	{
		$this->load->view('website/startup');
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
       
	}


	public function savaSignUpData()
	{
		    $this->form_validation->set_rules('name','Name','trim|required');
		    $this->form_validation->set_rules('dob','Daet Of Birth','trim|required');
		    $this->form_validation->set_rules('p_h_qualification','Qualification','trim|required');
		    $this->form_validation->set_rules('sector','Sector','trim|required');
		    $this->form_validation->set_rules('industries','Industries','trim|required');
		    $this->form_validation->set_rules('city','City Name','trim|required');
		    $this->form_validation->set_rules('email','Enter Valid Email','trim|required|valid_email');
		    $this->form_validation->set_rules('mobile','Mobile Number','trim|required');
            $this->form_validation->set_rules('password', 'Password', 'required');
			 $this->form_validation->set_rules('con_password', 'Confirm Password', 'required|matches[password]');
            if($this->form_validation->run()==TRUE) 
			{
				$value = $this->input->post();
				$data = array(
				'name' => $value['name'],
				'father_name' => $value['father_name'],
				'grand_father' => $value['grand_father'],
				'dob' => $value['dob'],
				'user_type' => '4',
				'town_name' => $value['town_name'],
				'sta_con_name' => $value['sta_con_name'],
				'p_sta_con' => $value['p_sta_con'],
				'p_h_qualification' => $value['p_h_qualification'],
				'sta_con_name' => $value['sta_con_name'],
				'caste' => $value['caste'],
				'sub-caste' => $value['sub-caste'],
				'sector' => $value['sector'],
				'business_type' => $value['business_type'],
				'industries' => $value['industries'],
				'buss_name' => $value['buss_name'],
				'mobile' => $value['mobile'],
				'email' => $value['email'],
				'registration_address' => $value['registration_address'],
				'password' => $value['password'],
				'con_password' => $value['con_password'],
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
					'admin_type' => '4',
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
									'sector' =>form_error('sector'),
									'industries' =>form_error('industries'),
									'city' =>form_error('city'),
									'email' =>form_error('email'),
									'mobile' =>form_error('mobile'),
									'password' =>form_error('password'),
									'con_password' =>form_error('con_password'),
									);
									$data=array('text' => $msg, 'icon' => 'error');
            }
			echo json_encode($data); 
	
			}



			public function success()
			{
				// $data=$this->input->post();
				// print_r($data);
			  
				$name = trim($_POST["name"]);
				// print_r($name);die;
				$email = trim($_POST["email"]);
				$phone = trim($_POST["phone"]);
				$address = trim($_POST["address"]);
			
				
				$to = "camwelsolution@gmail.com";
				$subject = "Enquiry From Camwel Solution ";
				$headers =  'MIME-Version: 1.0' . "\r\n";
				$headers .= 'From: Camwel Solution' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				 $full_message = "<html>
									<head><title>Enquiry Data</title></head>
									<body>
									<table>
										<tr>
										<td>Name</td>
										<td>&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
										<td> $name</td>
										</tr>
										<tr>
										<td>Email Id</td>
										<td>&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
										<td> $email</td>
										</tr>
										<tr>
										<td>Mobile No</td>
										<td>&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
										<td> $phone</td>
										</tr>
										<tr>
										<td>Address No</td>
										<td>&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
										<td> $address</td>
										</tr>
									</table>
									</body>
									</html>";
									
				$user = $email;   
				$user_subject = "Thank You $name";
				$user_headers = 'From: Camwel Solution' . "\r\n";
				$user_message = "Dear $name.\nWelcome to Camwel Solutioin\n We have got your query.We will reach you soon.\nThank You!";
			 
				 
					if (mail($to, $subject, $full_message, $headers)) {
						mail($user, $user_subject, $user_message, $user_headers);
						$_SESSION["response"] = "<h3>Dear <span class='text-info'>$name</span>,</h3><blockquote><p>We have got your query. We will contact you soon.<br/>For Quick Enquiry <span class='text-warning'>Call Us</span> at <span class='text-info'><i class='fa fa-phone px-2 '></i><span>+91 7070541846/+91  7070541846</span></span></p>
							<p>Thank You!</p></blockquote>";
					} else {
						// echo $name . $mobile . $whatsapp . $email . $need . $message;
						$_SESSION["response"] = "<h3>Dear <span class='text-info'>$name</span>,</h3><blockquote><p>Something is wrong. It seems like internet is not working well.<br/>For Quick Enquiry <span class='text-warning'>Call Us</span> at <span class='text-info'><i class='fa fa-phone px-2 '></i><span> +91 7070541846/+91  7070541846</span></span></p>
							<p>Please, try again!</p><p>Thank You!</p></blockquote>";
					}
					
				// $layout['layout'] = "thanku.php";
				$this->load->view('website/index');
			}

}

