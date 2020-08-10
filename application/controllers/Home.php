<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->library('cart');
		$this->load->library('session');
		$this->load->model('home_model');
		$this->load->model('cart_model');

		if ($this->config->item('secure_site')) {
			force_ssl();
		}
	}


	//Home Page
	public function index()
	{
		$this->load->view('home/include/header');
		$this->load->view('home/include/nav');
		$this->load->view('home/home');
		$this->load->view('home/include/footer');

	}

	public function NotFound()
	{
		$this->load->view('404');

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
		  	 	redirect();
		  	 }
			
	}

	//Dashboard

	public function Dashboard()
	{
		$data= $this->session->user_account;
		if($data){	
			if ($data['users_email_verify']==0) {
			
				if ($data['users_status']==0) {
					$this->load->view('home/include/header');
					$this->load->view('home/include/dash_nav',$data);
					$this->load->view('home/dashboard');
					$this->load->view('home/include/dash_footer');
				}
				else{
					$this->load->view('home/include/header');
					$this->load->view('home/include/dash_nav');
					$this->session->set_flashdata('error', '<span style="color:red">Sorry, Your Account Has Been Inactive. Please Contact Your WebAdministrator</span>');
					$this->load->view('status');
					$this->load->view('home/include/dash_footer');	
				}
			}else{
					$this->load->view('home/include/header');
					$this->load->view('home/include/dash_nav');
					$this->session->set_flashdata('success', '<span style="color:red">Sorry, Your Account is Not Verified </span>');
					$this->load->view('verify');
					$this->load->view('home/include/dash_footer');
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
						$mail->Host     = 'mail.kabhishek18.com	';
						$mail->SMTPAuth = true;
						$mail->Username = 'developer@kabhishek18.com';
						$mail->Password = 'developer@987';
						$mail->SMTPSecure = 'tls';
						$mail->Port     = 587;

						$mail->setFrom('developer@kabhishek18.com', 'developer@kabhishek18.com');
						$mail->addReplyTo('developer@kabhishek18.com', 'developer@kabhishek18.com');

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
						$this->session->set_flashdata('success', '<span style="color:green">Thank You, For Registration, Please Verfiy Your Email</span>');
						$this->load->view('status');
						$this->load->view('home/include/footer');	
					}
					else{
						$this->load->view('home/include/header');
						$this->load->view('home/include/nav');
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
							$mail->Host     = 'mail.kabhishek18.com	';
							$mail->SMTPAuth = true;
							$mail->Username = 'developer@kabhishek18.com';
							$mail->Password = 'developer@987';
							$mail->SMTPSecure = 'tls';
							$mail->Port     = 587;

							$mail->setFrom('developer@kabhishek18.com', 'developer@kabhishek18.com');
							$mail->addReplyTo('developer@kabhishek18.com', 'developer@kabhishek18.com');

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
						$this->session->set_flashdata('success', '<span style="color:green">Thank You, For Registration, Please Verfiy Your Email</span>');
						$this->load->view('status');
						$this->load->view('home/include/footer');	
					}
					else{
						$this->load->view('home/include/header');
						$this->load->view('home/include/nav');
						$this->session->set_flashdata('error', '<span style="color:red">Sorry, Something Misfortune Happen! </span>');
						$this->load->view('status');
						$this->load->view('home/include/footer');	
					}	
			}


		}
		else{
			$this->load->view('home/include/header');
			$this->load->view('home/include/nav');
			$this->session->set_flashdata('error', '<span>Sorry, Your Password Did not Match</span>');
			$this->load->view('status');
			$this->load->view('home/include/footer');

		}

	}






	public function EmailVerification()
	{
		$users_token =$this->uri->segment(2,0);
		$users_name =$this->uri->segment(3,0);
		$users_email_verify ='0';
		 $update =$this->home_model->EmailVerify($users_token,$users_email_verify);
		if ($update) {
			$this->load->view('home/include/header');
			$this->load->view('home/include/nav');
			$this->session->set_flashdata('success', '<span style="color:green">Congratulation, Email Verified Successfully, <p>Please Click to Login <a href="'.base_url().'">Login</a></p></span>');
			$this->load->view('status');
			$this->load->view('home/include/footer');
			}
		else{
			$this->load->view('home/include/header');
			$this->load->view('home/include/nav');
			$this->session->set_flashdata('error', '<span>Sorry, Verification Failed</span>');
			$this->load->view('status');
			$this->load->view('home/include/footer');
		}
				
	}

	public function ResendEmailVerification()
	{
		$auth= $this->session->user_account;
		
		$messagebomb = 'Click to verify <a href="'.base_url().'verify/'.$auth['users_token'].'/'.$auth['users_name'].'/'.generateUUID().'" >Link</a>';
		$this->load->library('phpmailer_lib');

						// PHPMailer object
						$mail = $this->phpmailer_lib->load();

						// SMTP configuration
						$mail->isSMTP();
						$mail->Host     = 'mail.kabhishek18.com	';
						$mail->SMTPAuth = true;
						$mail->Username = 'developer@kabhishek18.com';
						$mail->Password = 'developer@987';
						$mail->SMTPSecure = 'tls';
						$mail->Port     = 587;

						$mail->setFrom('developer@kabhishek18.com', 'developer@kabhishek18.com');
						$mail->addReplyTo('developer@kabhishek18.com', 'developer@kabhishek18.com');

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


	public function Scheduler()
	{
		$this->load->view('home/scheduler');
	}




}
