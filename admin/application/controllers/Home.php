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

	public function index()
	{
		$data = $this->session->user_account;
		if($data){
			redirect('dashboard');
		}
		else{	
		$this->load->view('inc/header');
		$this->load->view('login');
		$this->load->view('inc/footer');
		
		}
	}

	//Authentication
	public function Authenticate()
	{
		$auth['users_email']=$this->input->post("users_email");
		$auth['users_password']=md5($this->input->post("users_password"));	
		$data=$this->home_model->Authentication($auth);
			if($data)
		 {
		  	 	$this->session->set_userdata('user_account',$data);
				redirect('/dashboard');
		  	 }
		  	 else{
		  	 	$red['users_email']=$auth['users_email'];
				$emailcheck =$this->home_model->CheckEmail($red);
				if ($emailcheck==true ) {
					$this->session->set_flashdata('error', 'Wrong Password!');
					redirect();
				}else{
		  	 		$this->session->set_flashdata('error', 'Invalid Credential');
		  	 		redirect();
		  	 	}
		  	 }		
	}

	//Dashboard
	public function Dashboard()
	{
		$data = $this->session->user_account;
		if($data){	
			

				if ($data['users_status']==0) {
					$this->load->view('inc/header',$data);
					$this->load->view('dashboard');
					$this->load->view('inc/foottile');
					$this->load->view('inc/footer');
				}
				else{
					$this->load->view('inc/header');
					$this->session->set_flashdata('error', 'Sorry, Your Account Has Been Inactive. Please Contact Your WebAdministrator');
					$this->load->view('status');
					$this->load->view('inc/footer');	
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

	//Student List
	public function StudentList()
	{
		$data = $this->session->user_account;
		if($data){	

				if ($data['users_status']==0) {

					$var['datalist'] = $this->home_model->StudentList();
					$this->load->view('inc/header',$data);
					$this->load->view('studentlist',$var);
					$this->load->view('inc/foottile');
					$this->load->view('inc/footer');
				}
				else{
					$this->load->view('inc/header');
					$this->session->set_flashdata('error', 'Sorry, Your Account Has Been Inactive. Please Contact Your WebAdministrator');
					$this->load->view('status');
					$this->load->view('inc/footer');	
				}
			}

		
		else{
			redirect();
		}
	}

}
