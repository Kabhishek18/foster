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
					$this->session->set_flashdata('warning', 'Wrong Password!');
					redirect();
				}else{
		  	 		$this->session->set_flashdata('warning', 'Invalid Credential');
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
					$this->session->set_flashdata('warning', 'Sorry, Your Account Has Been Inactive. Please Contact Your WebAdministrator');
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

					$var['datalist'] = $this->home_model->ListStudent();
					$this->load->view('inc/header',$data);
					$this->load->view('studentlist',$var);
					$this->load->view('inc/foottile');
					$this->load->view('inc/footer');
				}
				else{
					$this->load->view('inc/header');
					$this->session->set_flashdata('warning', 'Sorry, Your Account Has Been Inactive. Please Contact Your WebAdministrator');
					$this->load->view('status');
					$this->load->view('inc/footer');	
				}
			}

		
		else{
			redirect();
		}
	}



	//Tutor List
	public function TutorList()
	{
		$data = $this->session->user_account;
		if($data){	

				if ($data['users_status']==0) {

					$var['datalist'] = $this->home_model->ListTutor();
					$this->load->view('inc/header',$data);
					$this->load->view('tutorlist',$var);
					$this->load->view('inc/foottile');
					$this->load->view('inc/footer');
				}
				else{
					$this->load->view('inc/header');
					$this->session->set_flashdata('warning', 'Sorry, Your Account Has Been Inactive. Please Contact Your WebAdministrator');
					$this->load->view('status');
					$this->load->view('inc/footer');	
				}
			}

		
		else{
			redirect();
		}
	}


	//Category List
	public function CategoryList()
	{
		$data = $this->session->user_account;
		if($data){	

				if ($data['users_status']==0) {

					$var['datalist'] = $this->home_model->ListCategory();
					$this->load->view('inc/header',$data);
					$this->load->view('categorylist',$var);
					$this->load->view('inc/foottile');
					$this->load->view('inc/footer');
				}
				else{
					$this->load->view('inc/header');
					$this->session->set_flashdata('warning', 'Sorry, Your Account Has Been Inactive. Please Contact Your WebAdministrator');
					$this->load->view('status');
					$this->load->view('inc/footer');	
				}
			}

		
		else{
			redirect();
		}
	}

	//Category List
	public function CourseList()
	{
		$data = $this->session->user_account;
		if($data){	

				if ($data['users_status']==0) {

					$var['datalist'] = $this->home_model->ListCourse();
					$this->load->view('inc/header',$data);
					$this->load->view('courselist',$var);
					$this->load->view('inc/foottile');
					$this->load->view('inc/footer');
				}
				else{
					$this->load->view('inc/header');
					$this->session->set_flashdata('warning', 'Sorry, Your Account Has Been Inactive. Please Contact Your WebAdministrator');
					$this->load->view('status');
					$this->load->view('inc/footer');	
				}
			}

		
		else{
			redirect();
		}
	}



	public function CourseAdd()
	{
		$data = $this->session->user_account;
		if($data){	

				if ($data['users_status']==0) {
					$this->load->view('inc/header',$data);
					$urlid = $this->uri->segment(3,0);

					if($urlid){
						//Update
						$var['datalist'] = $this->home_model->ListCourse($urlid);
						$this->load->view('courseadd',$var);
					}else{
						//Add
						$var['datalist'] = NULL;
						$this->load->view('courseadd',$var);
					}

					$this->load->view('inc/foottile');
					$this->load->view('inc/footer');
				}
				else{
					$this->load->view('inc/header');
					$this->session->set_flashdata('warning', 'Sorry, Your Account Has Been Inactive. Please Contact Your WebAdministrator');
					$this->load->view('status');
					$this->load->view('inc/footer');	
				}
			}

		
		else{
			redirect();
		}
	}

	public function Courseinsert()
	{
		
		$data = $this->session->user_account;
		if($data){	

				if ($data['users_status']==0) {
					
					$reg['course_id']=$this->input->post("course_id");
					$reg['course_name']=$this->input->post("course_name");
					$reg['regular_price']=$this->input->post("regular_price");
					$reg['sale_price']=$this->input->post("sale_price");
					$reg['course_parent_id']=$this->input->post("course_parent_id");
					$reg['course_session']=$this->input->post("course_session");
					$reg['course_type']=$this->input->post("course_type");
					$reg['course_hours']=$this->input->post("course_hours");
					$reg['course_tenure']=$this->input->post("course_tenure");
					$reg['course_timing']=$this->input->post("course_timing");
					$reg['course_complimentary']=$this->input->post("course_complimentary");
					$reg['course_access']=$this->input->post("course_access");
					$reg['course_information']=$this->input->post("course_information");
					$reg['course_short_desc']=$this->input->post("course_short_desc");
					$reg['course_description']=$this->input->post("course_description");
					$reg['course_status']=$this->input->post("course_status");
			
					if ($reg['course_id'] == "") {
						$reg['course_created']=date('Y-m-d');
					}
						$reg['course_modified']= date('Y-m-d H:i:s');

					if ($reg['regular_price'] == "") {
						$reg['regular_price'] = NULL;
						$insert = $this->home_model->ChangeCourse($reg);
							if ($insert) {
								$this->session->set_flashdata('success', 'Successfully Done');
								redirect($_SERVER['HTTP_REFERER']);
							}
							else{
								$this->session->set_flashdata('Warning', 'Something Misfortune Happen');
								redirect($_SERVER['HTTP_REFERER']);	
							}
					}
					else{
						if($reg['regular_price'] >= $reg['sale_price']) {
							$insert = $this->home_model->ChangeCourse($reg);
							if ($insert) {
								$this->session->set_flashdata('success', 'Successfully Done');
								redirect($_SERVER['HTTP_REFERER']);
							}
							else{
								$this->session->set_flashdata('Warning', 'Something Misfortune Happen');
								redirect($_SERVER['HTTP_REFERER']);	
							}
						}
						else{

							$this->session->set_flashdata('warning', 'Regular Price Should Be Greater Than Sales Price');
								
							 	redirect($_SERVER['HTTP_REFERER']);

						}
					}




				}
				else{
					$this->load->view('inc/header');
					$this->session->set_flashdata('warning', 'Sorry, Your Account Has Been Inactive. Please Contact Your WebAdministrator');
					$this->load->view('status');
					$this->load->view('inc/footer');	
				}
			}

		
		else{
			redirect();
		}



	}


	public function CourseDelete()
	{
		$url= $this->uri->segment(3,0); 
		$insert =$this->home_model->DeleteCourse($url);
		if($insert){
			$this->session->set_flashdata('warning', 'Deleted Successfully');
			redirect('course');
		}
		else{
			$this->session->set_flashdata('warning', 'Something Misfortune Happened!');
			redirect('course');
		
		}

	

	}






}
