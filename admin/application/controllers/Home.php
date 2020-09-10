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

	//Login
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


	//Course Add View
	public function CategoryAdd()
	{
		$data = $this->session->user_account;
		if($data){	

				if ($data['users_status']==0) {
					$this->load->view('inc/header',$data);
					$urlid = $this->uri->segment(3,0);

					if($urlid){
						//Update
						$var['datalist'] = $this->home_model->ListCategory($urlid);
						$this->load->view('categoryadd',$var);
					}else{
						//Add
						$var['datalist'] = NULL;
						$this->load->view('categoryadd',$var);
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

	//Course Insert And Update
	public function Categoryinsert()
	{
		
		$data = $this->session->user_account;
		if($data){	

				if ($data['users_status']==0) {
					
					$reg['category_id']=$this->input->post("category_id");
					$reg['category_name']=$this->input->post("category_name");
					$reg['category_description']=$this->input->post("category_description");
					$reg['category_status']=$this->input->post("category_status");
			
					if ($reg['category_id'] == "") {
						$reg['category_created']=date('Y-m-d');
					}
						$reg['category_modified']= date('Y-m-d H:i:s');

					
					
						
							$insert = $this->home_model->ChangeCategory($reg);
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

	//Course Delete
	public function CategoryDelete()
	{
		$url= $this->uri->segment(3,0); 
		$insert =$this->home_model->DeleteCategory($url);
		if($insert){
			$this->session->set_flashdata('warning', 'Deleted Successfully');
			redirect('category');
		}
		else{
			$this->session->set_flashdata('warning', 'Something Misfortune Happened!');
			redirect('category');
		
		}
	}
	//Course List
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

	//Course Add View
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

	//Course Insert And Update
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

	//Course Delete
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

	//Batch List
	public function BatchList()
	{
		$data = $this->session->user_account;
		if($data){	

				if ($data['users_status']==0) {

					$var['datalist'] = $this->home_model->ListBatch();
					$this->load->view('inc/header',$data);
					$this->load->view('batchlist',$var);
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

	//Batch Add View
	public function BatchAdd()
	{
		$data = $this->session->user_account;
		if($data){	

				if ($data['users_status']==0) {
					$this->load->view('inc/header',$data);
					$urlid = $this->uri->segment(3,0);

					if($urlid){
						//Update
						$var['datalist'] = $this->home_model->ListBatch($urlid);
						$this->load->view('batchadd',$var);
					}else{
						//Add
						$var['datalist'] = NULL;
						$this->load->view('batchadd',$var);
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

	//Batch Insert And Update
	public function Batchinsert()
	{
		
		$data = $this->session->user_account;
		if($data){	

				if ($data['users_status']==0) {
					
					$reg['batch_id']=$this->input->post("batch_id");
					$reg['batch_name']=$this->input->post("batch_name");
					$reg['batch_token']=$this->input->post("batch_token");
					$reg['batch_start']=$this->input->post("batch_start");
					$reg['batch_end']=$this->input->post("batch_end");
					$reg['batch_timestart']=$this->input->post("batch_timestart");
					$reg['batch_timeend']=$this->input->post("batch_timeend");
					$reg['batch_type']=$this->input->post("batch_type");
					$reg['batch_status']=$this->input->post("batch_status");
			
					if ($reg['batch_id'] == "") {
						$reg['batch_token']=generateUUID();
					}
						

					
						
							$insert = $this->home_model->ChangeBatch($reg);
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

	//Batch
	public function BatchDelete()
	{
		$url= $this->uri->segment(3,0); 
		$insert =$this->home_model->DeleteBatch($url);
		if($insert){
			$this->session->set_flashdata('warning', 'Deleted Successfully');
			redirect('batch');
		}
		else{
			$this->session->set_flashdata('warning', 'Something Misfortune Happened!');
			redirect('batch');
		
		}
	}


	public function Freezone()
	{
		$data = $this->session->user_account;
		if($data){	

				if ($data['users_status']==0) {
					$this->load->view('inc/header',$data);
					$this->load->view('freezone');
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

	public function FreeUpload()
	{
		$data = $this->session->user_account;
		if($data){	
				$status = $this->input->post('status');	
				if ($data['users_status']==0) {
					$dir ='uploads/'.$status;
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
						redirect('freezone');


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
				$url2 =$this->uri->segment(4,0);
				$dir ='uploads/'.$url.'/'.$url2;
				$state =unlink($dir);
				$this->session->set_flashdata('warning', 'Deleted Successfully');
				redirect('freezone');
			}
		else{
			redirect();
		}	
	}

}
