<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Kolkata');

class Home extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->library('cart');
		$this->load->library('session');
		$this->load->model('home_model');

		if ($this->config->item('secure_site')) {
			force_ssl();
		}
	}


	//Login Page
	public function index()
	{	
		$data = $this->session->user_account;
		if($data){
			redirect('dashboard');
		}
		else{	
		$this->load->view('home/include/header');
		$this->load->view('home/home');;
		$this->load->view('home/include/footer');
		}
	}

	//Login Page
	public function Register()
	{
		$this->load->view('home/include/header');
		$this->load->view('home/registration');;
		$this->load->view('home/include/footer');
	}

	public function NotFound()
	{
		$this->load->view('home/include/header');
		$this->load->view('404');
		$this->load->view('home/include/footer');
	}

	public function Authentication()
	{
		$auth['email']=$this->input->post("email");
		$auth['password']=md5($this->input->post("password"));	
		$data=$this->home_model->Authentication($auth);
		
		  	if($data==true)
		  	 {
		  	 	$this->session->set_userdata('user_account',$data);
				redirect('/dashboard');
		  	 }
		  	 else{
		  	 	$red['users_email']=$auth['email'];
				$emailcheck =$this->home_model->CheckEmail($red);
				if ($emailcheck==true ) {
					$this->session->set_flashdata('error', '<span style="color:red">Wrong Password!</span>');
					redirect();
				}else{
		  	 		$this->session->set_flashdata('error', '<span style="color:red">Invalid Credential</span>');
		  	 		redirect();
		  	 	}
		  	 }		
	}

	//Dashboard
	public function Dashboard()
	{
		$data = $this->session->user_account;
		if($data){	
			if ($data['users_email_verify']==0) {
			
				if ($data['users_status']==0) {
					$this->load->view('home/include/header');
					$this->load->view('home/include/sidebar',$data);
					$this->load->view('home/dashboard');
					$this->load->view('home/include/footile');
					$this->load->view('home/include/footer');
				}
				else{
					$this->load->view('home/include/header');
					$this->session->set_flashdata('error', '<span style="color:red">Sorry, Your Account Has Been Inactive. Please Contact Your WebAdministrator</span>');
					$this->load->view('status');
					$this->load->view('home/include/footer');	
				}
			}else{
					$this->load->view('home/include/header');
					$this->session->set_flashdata('success', '<span style="color:red">Sorry, Your Account is Not Verified </span>');
					$this->load->view('verify');
					$this->load->view('home/include/footer');
			}
		}
		else{
			redirect();
		}
	}
	
	//Logout
	public function Logout()
	{
		if(session_destroy())
		{
		$this->session->unset_userdata('user_account');	   
		$this->session->sess_destroy();
		redirect('');
		}
	}

	//Register
	public function Registeration()
	{
		
		$auth['users_name']=$this->input->post("username");	
		$auth['users_email']=$this->input->post("email");
		$auth['users_password']=md5($this->input->post("password"));	
		$auths['cpassword']=md5($this->input->post("cpassword"));
		$emailcheck =$this->home_model->CheckEmail($auth);
		if ($emailcheck==true ) {
			$this->session->set_flashdata('error', '<span style="color:red">EmailID Already Exist!</span>');
			redirect('registration');
		}


		$auth['users_token']=generateUUID();	
		$auth['users_account']=1;

		$messagebomb = 'Click to verify <a href="'.base_url().'verify/'.$auth['users_token'].'/'.$auth['users_name'].'/'.generateUUID().'" >Link</a>';

		$check=$this->input->post("check");	
		if ($auths['cpassword'] == $auth['users_password']) {
			if ($check) {
				$auth['users_type']=1;	
				$insert =$this->home_model->InsertUsers($auth);	
					if ($insert) {

						$this->load->library('phpmailer_lib');

						// PHPMailer object
						$mail = $this->phpmailer_lib->load();

						// SMTP configuration
						$mail->isSMTP();
						$mail->Host     = 'mail.kabhishek18.com';
						$mail->SMTPAuth = true;
						$mail->Username = 'info@kabhishek18.com';
						$mail->Password = 'info@987';
						$mail->SMTPSecure = 'tls';
						$mail->Port     = 587;

						$mail->setFrom('info@kabhishek18.com', 'info@kabhishek18.com');
						$mail->addReplyTo('info@kabhishek18.com', 'info@kabhishek18.com');

						// Add a recipient
						$mail->addAddress($auth['users_email']);

						// Add cc or bcc 
						//$mail->addCC('');
						//$mail->addBCC('pushapnaraingupta@gmail.com');

						// Email subject
						$mail->Subject =  'Mail Verfication';

						// Set email format to HTML
						$mail->isHTML(true);

						// Email body content
						$mailContent = $messagebomb;
						$mail->Body = $mailContent;

						// Send email
						if(!$mail->send()){
							$mail->ErrorInfo;

						}
						$this->session->unset_userdata('user_account');	   
						$this->session->sess_destroy();	
						$this->load->view('home/include/header');
						$this->session->set_flashdata('success', '<span style="color:green">Thank You, For Registration, Please Verfiy Your Email</span>');
						$this->load->view('status');
						$this->load->view('home/include/footer');	
					}
					else{
						$this->load->view('home/include/header');
						$this->session->set_flashdata('success', '<span style="color:red">Sorry, Something Misfortune Happen! </span>');
						$this->load->view('status');
						$this->load->view('home/include/footer');	
					}
				}
			else{
				$auth['users_type']='0';
				$insert =$this->home_model->InsertUsers($auth);	
					if ($insert) {
							$this->load->library('phpmailer_lib');

							// PHPMailer object
							$mail = $this->phpmailer_lib->load();

							// SMTP configuration
							$mail->isSMTP();
							$mail->Host     = 'mail.kabhishek18.com';
							$mail->SMTPAuth = true;
							$mail->Username = 'info@kabhishek18.com';
							$mail->Password = 'info@987';
							$mail->SMTPSecure = 'tls';
							$mail->Port     = 587;

							$mail->setFrom('info@kabhishek18.com', 'info@kabhishek18.com');
							$mail->addReplyTo('info@kabhishek18.com', 'info@kabhishek18.com');

							// Add a recipient
							$mail->addAddress($auth['users_email']);

							// Add cc or bcc 
							//$mail->addCC('');
							//$mail->addBCC('pushapnaraingupta@gmail.com');

							// Email subject
							$mail->Subject =  'Mail Verfication';

							// Set email format to HTML
							$mail->isHTML(true);

							// Email body content
							$mailContent = $messagebomb;
							$mail->Body = $mailContent;

							// Send email
							if(!$mail->send()){
								$mail->ErrorInfo;

							}
						$this->session->unset_userdata('user_account');	   
						$this->session->sess_destroy();	
						$this->load->view('home/include/header');
						$this->session->set_flashdata('success', '<span style="color:green">Thank You, For Registration, Please Verfiy Your Email</span>');
						$this->load->view('status');
						$this->load->view('home/include/footer');	
					}
					else{
						$this->load->view('home/include/header');
						$this->session->set_flashdata('error', '<span style="color:red">Sorry, Something Misfortune Happen! </span>');
						$this->load->view('status');
						$this->load->view('home/include/footer');	
					}	
			}


		}
		else{
			$this->load->view('home/include/header');
			$this->session->set_flashdata('error', '<span>Sorry, Your Password Did not Match</span>');
			$this->load->view('status');
			$this->load->view('home/include/footer');

		}
	}

	//Email Verification
	public function EmailVerification()
	{
		$users_token =$this->uri->segment(2,0);
		$users_name =$this->uri->segment(3,0);
		$users_email_verify ='0';
		 $update =$this->home_model->EmailVerify($users_token,$users_email_verify);
		if ($update) {
			$this->load->view('home/include/header');
			$this->session->set_flashdata('success', '<span style="color:green">Congratulation, Email Verified Successfully, <p>Please Click to Login <a href="'.base_url().'">Login</a></p></span>');
			$this->load->view('status');
			$this->load->view('home/include/footer');
			}
		else{
			$this->load->view('home/include/header');
			$this->session->set_flashdata('error', '<span>Sorry, Verification Failed</span>');
			$this->load->view('status');
			$this->load->view('home/include/footer');
		}			
	}

	//Email Reverfication
	public function ResendEmailVerification()
	{
		$auth= $this->session->user_account;
		
		$messagebomb = 'Click to verify <a href="'.base_url().'verify/'.$auth['users_token'].'/'.$auth['users_name'].'/'.generateUUID().'" >Link</a>';
		$this->load->library('phpmailer_lib');

						// PHPMailer object
						$mail = $this->phpmailer_lib->load();

						// SMTP configuration
						$mail->isSMTP();
						$mail->Host     = 'mail.kabhishek18.com';
						$mail->SMTPAuth = true;
						$mail->Username = 'info@kabhishek18.com';
						$mail->Password = 'info@987';
						$mail->SMTPSecure = 'tls';
						$mail->Port     = 587;

						$mail->setFrom('info@kabhishek18.com', 'info@kabhishek18.com');
						$mail->addReplyTo('info@kabhishek18.com', 'info@kabhishek18.com');

						// Add a recipient
						$mail->addAddress($auth['users_email']);

						// Add cc or bcc 
						//$mail->addCC('');
						//$mail->addBCC('pushapnaraingupta@gmail.com');

						// Email subject
						$mail->Subject =  'Mail Verfication';

						// Set email format to HTML
						$mail->isHTML(true);

						// Email body content
						$mailContent = $messagebomb;
						$mail->Body = $mailContent;

						// Send email
						if(!$mail->send()){
							$mail->ErrorInfo;

						}
						$this->session->unset_userdata('user_account');	   
						$this->session->sess_destroy();		
						$this->load->view('home/include/header');
						$this->load->view('home/include/nav');
						$this->session->set_flashdata('success', '<span style="color:green">Thank You, For Reverification, Please Verfiy Your Email</span>');
						$this->load->view('status');
						$this->load->view('home/include/footer');			
	}

	//Profile
	public function Profile()
	{
		$data = $this->session->user_account;
		if($data){	
			if ($data['users_email_verify']==0) {
			
				if ($data['users_status']==0) {
					$this->load->view('home/include/header');
					$this->load->view('home/include/sidebar',$data);
					$this->load->view('home/profile');
					$this->load->view('home/include/footile');
					$this->load->view('home/include/footer');
				}
				else{
					$this->load->view('home/include/header');
					$this->session->set_flashdata('error', '<span style="color:red">Sorry, Your Account Has Been Inactive. Please Contact Your WebAdministrator</span>');
					$this->load->view('status');
					$this->load->view('home/include/footer');	
				}
			}else{
					$this->load->view('home/include/header');
					$this->session->set_flashdata('success', '<span style="color:red">Sorry, Your Account is Not Verified </span>');
					$this->load->view('verify');
					$this->load->view('home/include/footer');
			}
		}
		else{
			redirect();
		}
	}

	//Profile Update
	public function ProfileUpdate()
	{
		$auth['users_id']=$this->input->post("userid");
		$auth['users_name']=$this->input->post("username");
		$auth['users_mobile']=$this->input->post("mobile");
		$update =$this->home_model->UpdateUser($auth);
		if ($update) {
			$this->session->set_flashdata('success', '<span style="color:green">Profile Updated Successfully.</span>');   
			redirect('profile');
		}
		else{

			$this->session->set_flashdata('error', '<span>Something Misfortune happened !!!</span>');
			redirect('profile');
		}
	}

	public function Updatepass()
	{
		$auth['users_id']=$this->input->post("userid");
		$auth['users_password']=md5($this->input->post("password"));	
		$auths['cpassword']=md5($this->input->post("cpassword"));
		if ($auths['cpassword'] == $auth['users_password']) {
		
			$update =$this->home_model->UpdatePassword($auth);
			if ($update) {
			$this->session->set_flashdata('success', '<span style="color:green">Profile Updated Successfully.</span>');
			$this->session->unset_userdata('user_account');	   
			redirect('');
			}
			else{

				$this->session->set_flashdata('passerror', '<span>Something Misfortune happened !!!</span>');
				redirect('profile');
			}
		}
		else{
			
			$this->session->set_flashdata('passerror', 'Sorry, Your Password Did not Match');
			redirect('profile');	
		}	
	}

	public function ProfileImage()
	{
			$auth['users_id']=$this->input->post("userid");
		

			$dir ='uploads/'.$auth['users_id'];
			if (!is_dir($dir)) {
				mkdir($dir, 0755, TRUE);
			}
			$config['upload_path'] =  $dir;
	        $config['allowed_types'] = 'jpg|png|jpeg';
	        $config['max_size'] = 3000;
	        $this->load->library('upload', $config);
			$this->upload->initialize($config);

			if($this->upload->do_upload('profile_image')){
	 		$image= $this->upload->data();
			$auth['users_image'] =$image['file_name'];}
			else{
				$auth['users_image'] =null;
			}
		
			$update =$this->home_model->UpdateUserImage($auth);
			if($update){
				$_SESSION['user_account']['users_image'] =$auth['users_image'];
				$this->session->set_flashdata('successimage', '<span>Profile Image Updated Successfully. Please Relogin to See Change </span>');  
				redirect('profile');
			}
			else{
				$this->session->set_flashdata('errorimage', '<span>Misfortune happened! </span>');
				redirect('profile');
			}	
	}

	//Bank Profile
	public function BankProfile()
	{	

		$data = $this->session->user_account;
		if($data){	
			if ($data['users_email_verify']==0) {
			
				if ($data['users_status']==0) {
					$this->load->view('home/include/header');
					$this->load->view('home/include/sidebar',$data);
					$this->load->view('home/bankprofile');
					$this->load->view('home/include/footile');
					$this->load->view('home/include/footer');
				}
				else{
					$this->load->view('home/include/header');
					$this->session->set_flashdata('error', '<span style="color:red">Sorry, Your Account Has Been Inactive. Please Contact Your WebAdministrator</span>');
					$this->load->view('status');
					$this->load->view('home/include/footer');	
				}
			}else{
					$this->load->view('home/include/header');
					$this->session->set_flashdata('success', '<span style="color:red">Sorry, Your Account is Not Verified </span>');
					$this->load->view('verify');
					$this->load->view('home/include/footer');
			}
		}
		else{
			redirect();
		}
	}

	public function BankUpdate()
	{	
		$data = $this->session->user_account;
		$auth['account_number']=$this->input->post("account_number");
		$auth['account_name']=($this->input->post("account_name"));	
		$auth['ifsc_code']=$this->input->post("ifsc_code");	
		$auths['confirm_number']=$this->input->post("confirm_number");
		if ($auth['account_number'] == $auths['confirm_number']) {
			$auth = json_encode($auth);
			$update =$this->home_model->UpdateBankAccount($auth,$data['users_id']);
			$this->session->set_flashdata('success', '<span style="color:green">Account Updated Successfully.</span>');
			redirect('bankprofile');
		}
		else{
			
			$this->session->set_flashdata('error', 'Sorry, Your Account Number Did not Match');
			redirect('bankprofile');	
		}	
	}

	public function BankPanId()
	{
			$auth['users_id']=$this->input->post("userid");
		

			$dir ='uploads/'.$auth['users_id'];
			if (!is_dir($dir)) {
				mkdir($dir, 0755, TRUE);
			}
			$config['upload_path'] =  $dir;
	        $config['allowed_types'] = 'jpg|png|jpeg';
	        $config['max_size'] = 3000;
	        $this->load->library('upload', $config);
			$this->upload->initialize($config);

			if($this->upload->do_upload('profile_image')){
	 		$image= $this->upload->data();
			$auth['users_pancard'] =$image['file_name'];}
			else{
				$auth['users_pancard'] =null;
			}
		
			$update =$this->home_model->UpdatePanImage($auth);
			if($update){
				$_SESSION['user_account']['users_pancard'] =$auth['users_pancard'];
				$this->session->set_flashdata('successimage', '<span>Profile Image Updated Successfully. Please Relogin to See Change </span>');  
				redirect('bankprofile');
			}
			else{
				$this->session->set_flashdata('errorimage', '<span>Misfortune happened! </span>');
				redirect('bankprofile');
			}
	}

	//Calender Availabilty
	public function Tutor_availabilty()
	{	
		$data = $this->session->user_account;
		if($data){	
			if ($data['users_email_verify']==0) {
			
				if ($data['users_status']==0) {

					$avail['avail'] = $this->home_model->AvailabiltyList($data['users_id']);
					$this->load->view('home/include/header');
					$this->load->view('home/include/sidebar',$data);
					$this->load->view('home/availabilty',$avail);
					$this->load->view('home/include/footile');
					$this->load->view('home/include/footer');
				}
				else{
					$this->load->view('home/include/header');
					$this->session->set_flashdata('error', '<span style="color:red">Sorry, Your Account Has Been Inactive. Please Contact Your WebAdministrator</span>');
					$this->load->view('status');
					$this->load->view('home/include/footer');	
				}
			}else{
					$this->load->view('home/include/header');
					$this->session->set_flashdata('success', '<span style="color:red">Sorry, Your Account is Not Verified </span>');
					$this->load->view('verify');
					$this->load->view('home/include/footer');
			}
		}
		else{
			redirect();
		}
	}

	//offline
	public function avail_offline()
	{
		$data = $this->session->user_account;
		if ($data['users_id']) {
			$this->home_model->Be_offline($data['users_id']);
			redirect('available');
		}
		else{
			echo "Logout In Again";
		}
	}

	//Online
	public function avail_online()
	{
		$data = $this->session->user_account;
		if ($data['users_id']) {
			$val['id'] =$data['users_id'];
			$val['sdate']=$this->input->post("sdate");
			$val['edate']=$this->input->post("edate");
			$val['stime']=$this->input->post("stime");
			$val['etime']=$this->input->post("etime");
			$this->home_model->Be_online($val);
			redirect('available');
		}
		else{
			echo "Logout In Again";
		}
	}

	//Freeevaluation
	public function FreeEvaluation()
	{
		$data = $this->session->user_account;
		if($data){	
			if ($data['users_email_verify']==0) {
			
				if ($data['users_status']==0) {
					$this->load->view('home/include/header');
					$this->load->view('home/include/sidebar',$data);
					$this->load->view('home/freeevaluation');
					$this->load->view('home/include/footile');
					$this->load->view('home/include/footer');
				}
				else{
					$this->load->view('home/include/header');
					$this->session->set_flashdata('error', '<span style="color:red">Sorry, Your Account Has Been Inactive. Please Contact Your WebAdministrator</span>');
					$this->load->view('status');
					$this->load->view('home/include/footer');	
				}
			}else{
					$this->load->view('home/include/header');
					$this->session->set_flashdata('success', '<span style="color:red">Sorry, Your Account is Not Verified </span>');
					$this->load->view('verify');
					$this->load->view('home/include/footer');
			}
		}
		else{
			redirect();
		}
	}

}
