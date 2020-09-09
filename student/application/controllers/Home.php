<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Kolkata');

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

	//About Page
	public function About()
	{
		$this->load->view('home/include/header');
		$this->load->view('home/include/nav');
		$this->load->view('home/about');
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
	//Dashboard
	public function freeEvaluation()
	{
		$data= $this->session->user_account;
		if($data){	
			if ($data['users_email_verify']==0) {
			
				if ($data['users_status']==0) {
					$this->load->view('home/include/header');
					$this->load->view('home/include/dash_nav',$data);
					$this->load->view('home/freeevaluation');
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

	public function EvalUpload()
	{
		$data= $this->session->user_account;
		if($data){	
				if ($data['users_status']==0) {
					$dir ='uploads/'.$data['users_id'].'/sample/';
						if (!is_dir($dir)) {
							mkdir($dir, 0777, TRUE);
						}
						$new_name = date('dmyHIs');
						$config['file_name'] = $new_name;
						$config['upload_path'] =  $dir;
				        $config['allowed_types'] = 'jpg|png|jpeg|mp4|docx|pdf';
				        $config['max_size'] = 3000;
				        $this->load->library('upload', $config);
						$this->upload->initialize($config);

						if($this->upload->do_upload('file')){
				 		$file= $this->upload->data();
						$auth['file'] =$file['file_name'];}
						else{
							
						}

						$this->session->set_flashdata('success', 'Uploaded Successfully');
						redirect('freeevaluation');

				}
				else{
					$this->load->view('home/include/header');
					$this->load->view('home/include/dash_nav');
					$this->session->set_flashdata('error', '<span style="color:red">Sorry, Your Account Has Been Inactive. Please Contact Your WebAdministrator</span>');
					$this->load->view('status');
					$this->load->view('home/include/dash_footer');	
				}
	
			}
		else{
			redirect();
		}
	}


	public function DeleteEval()
	{	
		$data= $this->session->user_account;
		if($data){
				$url =$this->uri->segment(3,0);
				$dir ='uploads/'.$data['users_id'].'/sample/'.$url;
				$state =unlink($dir);
				$this->session->set_flashdata('warning', 'Deleted Successfully');
				redirect('freeevaluation');
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
			$this->load->view('home/include/header');
			$this->load->view('home/include/nav');
			$this->load->view('status');
			$this->load->view('home/include/footer');
			}
		else{	
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
	}

	//Email Verfication
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
	//Resend Email
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


	public function Scheduler()
	{
		$slot = $this->home_model->Get_Slot('1');
		$this->load->view('home/include/header');
		$this->load->view('home/include/nav');
		$this->load->view('home/scheduler',$slot);
		$this->load->view('home/include/footer');
	}

	function SchedulerData()
	{
		$data= $this->session->user_account;
		$var['user_id'] =$data['users_id']; 
		$check_user =$this->home_model->GetBatchUser($var['user_id']);
		if ($check_user == false) {
		
			$var['batch_start']=$this->input->post("sdate");
			$var['batch_end'] = $var['batch_start'];

			$var['batch_timestart']=$this->input->post("stime");
			$var['batch_timeend'] = $var['batch_timestart'];

			

			$var['batch_name']=$this->input->post("name");
			$var['batch_token'] =generateUUID();

			//dee

			$dee['number']=$this->input->post("number");
			$dee['email']=$this->input->post("email");
			$dee['plan']=$this->input->post("plan");
			$dee['join']=$this->input->post("join");
			$dee['message']=$this->input->post("message");

			$var['batch_description'] = json_encode($dee); 
			$var['batch_status'] = '0' ; 
			$var['batch_type'] = 'Demo (45 min free trial)' ; 

			$insert = $this->home_model->DemoForm($var);
			if($insert) 
			{
				$this->session->set_flashdata('success', 'Successfully Receieved. Thank you for showing your intrest!!!');
				redirect('scheduler');
			}
			else
			{
				$this->session->set_flashdata('error', 'Sorry,Something Misfortune Happened !!! ');
				redirect('scheduler');			
			}
		}
		else
		{
			$this->session->set_flashdata('error', ' Already Receieved. Demo Class Assigned !!! ');
				redirect('scheduler');	
		}	
	}


	public function MyCourse()
	{
		$data= $this->session->user_account;
		if($data){	
			if ($data['users_email_verify']==0) {
			
				if ($data['users_status']==0) {
					$this->load->view('home/include/header');
					$this->load->view('home/include/dash_nav',$data);
					$this->load->view('home/mycourse');
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


	public function Service()
	{
		$this->load->view('home/include/header');
		$this->load->view('home/include/nav');
		$this->load->view('home/service');
		$this->load->view('home/include/footer');
	}


	public function Contact()
	{
		$this->load->view('home/include/header');
		$this->load->view('home/include/nav');
		$this->load->view('home/contact');
		$this->load->view('home/include/footer');
	}

	public function Contact_form()
	{
		$var['form_name'] = $this->input->post('form_name');
		$var['form_email'] = $this->input->post('form_email');
		$var['form_subject'] = $this->input->post('form_subject');
		$var['form_message'] = $this->input->post('form_message');
		$messagebomb = '<h2>Thank You,</h2> <p>'.$var['form_name'].', For Contacting Us.</p> <p>We Will get you on This email '.$var['form_email'].'</p> <p> Subject :<quote> '.$var['form_subject'].' </quote></p><p> Messsage : <quote>'.$var['form_message'].'</quote></p>';


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

						$mail->setFrom('Test@mail.com', 'Test@mail.com');
						$mail->addReplyTo('Test@mail.com', 'Test@mail.com');

						// Add a recipient
						$mail->addAddress($var['form_email']);

						// Add cc or bcc 
						$mail->addCC('kabhishek18@gmail.com');
						//$mail->addBCC('pushapnaraingupta@gmail.com');

						// Email subject
						$mail->Subject =  'Contact Form @ Foster Bright';

						// Set email format to HTML
						$mail->isHTML(true);

						// Email body content
						$mailContent = $messagebomb;
						$mail->Body = $mailContent;

						// Send email
						if(!$mail->send()){
							$mail->ErrorInfo;
							$this->session->set_flashdata('error',$mail->ErrorInfo );
							redirect(current_url());
						}

						else{
							$this->session->set_flashdata('success','Thank You, We will Get Back To You As Soon As Possible');
							redirect(current_url());
								
						}
	}


}
