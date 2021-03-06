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


	//
	function Enroll(){ 
		
		$data['course_id'] =$this->input->post('course_id');
		$submit =$this->input->post('submit');
		//Fetch data
				if($submit){
					$enrolldata =$this->cart_model->GetCourses($data['course_id']);
					$this->session->set_userdata('enroll',$enrolldata);
					$this->load->view('home/include/header');
					$this->load->view('home/include/nav');
					$this->load->view('home/checkout');
					$this->load->view('home/include/footer');
				}else
				{ $auth= $this->session->enroll;

					if($auth){
					$this->load->view('home/include/header');
					$this->load->view('home/include/nav');
					$this->load->view('home/checkout');
					$this->load->view('home/include/footer');
					}
					else{
						redirect();
					}
				}
	}

	public function CheckoutOrder()
	{
		$data= $this->session->user_account;
		if($data){	
			
			$value['fullname'] = $this->input->post('fullname');
			$value['company_name'] = $this->input->post('company_name');
			$value['country'] = $this->input->post('country');
			$value['street_1'] = $this->input->post('street_1');
			$value['street_2'] = $this->input->post('street_2');
			$value['zip'] = $this->input->post('zip');
			$value['town'] = $this->input->post('town');
			$value['state'] = $this->input->post('state');
			$value['phone'] = $this->input->post('phone');
			$value['email'] = $this->input->post('email');
			$value['message'] = $this->input->post('message');
			
			$pro =$this->session->enroll;
			$order['order_detail'] =json_encode($value);
			$order['order_course'] =$pro['course_id'];
			$order['order_amount'] =$pro['sale_price'];
			$order['student_id'] =$data['users_id'];
			$order['order_status'] = '0';
			$order['order_created'] = date('Y-m-d H:i:s');
			$insert = $this->cart_model->InsertOrder($order);
			if ($insert) {
				$this->session->set_flashdata('success', 'Order Placed Successfully');
				redirect('enroll');
			}
			else{
			$this->session->set_flashdata('warning', 'Something Misfortune Happen !!!');
				redirect('enroll');
			}	
		}
		else{
			redirect();
		}


	}
	//quantity update
	function updateItemQty(){
		$coupon =$this->input->post('coupon');
		if (!empty($coupon)) {
			$ticket =$this->cart_model->Getcoupon($coupon);
			if($ticket){
			$this->session->set_userdata('ticket',$ticket);
			
			$this->session->set_flashdata('success', '<span style="color:green">Coupon Added successfully </span>');
			redirect('cart');
			}

			else{
			$this->session->set_flashdata('wrong', '<span style="color:red">Coupon not available</span>');
			redirect('cart');
			}	
		}

		$update =0;
		//get the data
		$rowid =$this->input->post('rowid');
		$qty =$this->input->post('qty');
		for($i=0;$i<count($rowid);$i++){
			$data[$i] = array('rowid' => $rowid[$i],'qty' => $qty[$i]);
		}
		//update the cart
		if (!empty($rowid) && !empty($qty)) {

			$update=$this->cart->update($data);
		}
		//return respone
		redirect('cart');
	}
	

}