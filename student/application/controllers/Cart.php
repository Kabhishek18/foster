<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Kolkata');

class Cart extends CI_Controller {
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


	//Categories Page
	public function index()
	{
		$url['1'] = $this->uri->segment(2,0);   
		$data['url'] = $this->uri->segment(3,0);
		if($url['1']){
			$data['data'] = $this->cart_model->GetCategoriesCourse($url['1']);		   
			$this->load->view('home/include/header');
			$this->load->view('home/include/nav');
			$this->load->view('home/category',$data);
			$this->load->view('home/include/footer');
		}
		else{
			$this->load->view('home/include/header');
			$this->load->view('home/include/nav');
			$this->session->set_flashdata('error', '<span style="color:red">Sorry, Something Misfortune Happen! </span> <p>Please Contact Your Webmaster.</p>');
			$this->load->view('status');
			$this->load->view('home/include/footer');	
		}
	}

	//CourseDetail
	public function CourseDetail()
	{
		$url['1'] = $this->uri->segment(2,0);   
		$data['url'] = $this->uri->segment(3,0);
		if($url['1']){
			$data = $this->cart_model->GetCourses($url['1']);		   
			$this->load->view('home/include/header');
			$this->load->view('home/include/nav');
			$this->load->view('home/course_detail',$data);
			$this->load->view('home/include/footer');
		}
		else{
			$this->load->view('home/include/header');
			$this->load->view('home/include/nav');
			$this->session->set_flashdata('error', '<span style="color:red">Sorry, Something Misfortune Happen! </span> <p>Please Contact Your Webmaster.</p>');
			$this->load->view('status');
			$this->load->view('home/include/footer');	
		}
			
	}


}