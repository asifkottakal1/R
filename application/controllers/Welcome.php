<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
public function __construct() {
		parent::__construct();
		$this -> load -> helper('url');
		$this -> load -> model('settings_model');
		$this -> load -> model('model1');
		$this->load->library(array('form_validation','session'));
		$this -> load -> model('form_model');
		
		
}
	
	public function index()
	{
		//$this->load->view('welcome_message');
		$this->load->view('themes/header');
		$this->load->view('home_view');
		$this->load->view('themes/footer');
	}
	public function menu()
	{
		
		$table_details=$this->settings_model->getalltable_details();
		//print_r($table_details);
		$data["rms_table_details"]=$table_details;
		
		$food_details=$this->settings_model->getallfood_details();
		$data["rms_food_details"]=$food_details;
		
		// $occasion_details=$this->settings_model->getalloccasion_details();
		// $data["rms_occasion_details"]=$occasion_details;
		
		$this->load->view('themes/header');
		$this->load->view('menu_view',$data);
		$this->load->view('themes/footer');
	}
	public function customer()
	{
		$food_details=$this->settings_model->getallfood_details();
		$data["rms_food_details"]=$food_details;
		
		$this->load->view('themes/header');
		$this->load->view('menu_view',$data);
		$this->load->view('themes/footer');
		
	}
		
	
	// public function breakfast()
	// {
	// 	$breakfast_details=$this->settings_model->getallbreakfast_details();
	// 	$data["rms_breakfast_details"]=$breakfast_details;
	// 	$this->load->view('themes/header');
	// 	$this->load->view('breakfast_view',$data);
	// 	//$this->load->view('themes/footer');
	// }
	
	public function lunch()
	{
		$lunch_details=$this->settings_model->getalllunch_details();
		$data["rms_food_details"]=$lunch_details;
		$this->load->view('themes/header');
		$this->load->view('lunch_view',$data);
		//$this->load->view('themes/footer');
	}
	
	public function order()
	{
		if($data=$this->session->userdata('user')){
		
		//$this->session->unset_userdata('user');
		$order_details=$this->settings_model->getallorder_details();
		$data["rms_order_details"]=$order_details;


		

		$this->load->view('themes/header');
		$this->load->view('order_view',$data);
		$this->load->view('themes/footer');
		}
		else{
			redirect('login');
		}

		}
		public function status($id,$status){
			$order_details=$this->model1->update($id,$status);
		if($order_details)
		{
			echo "updated";
		}
		else
			echo "failed";
		}
	
	// public function bills()
	// {
	// 	$bill_details=$this->settings_model->getallbill_details();
	// 	$data["rms_bill_details"]=$bill_details;
	// 	$this->load->view('themes/header');
	// 	$this->load->view('bills_view',$data);
	// 	//$this->load->view('themes/footer');
	// }
	
	// public function bill()
	// {
	// 	$customer_details=$this->settings_model->getallcustomer_details();
	// 	$data["rms_customer_details"]=$customer_details;
	// 	$food_details=$this->settings_model->getallfood_details();
	// 	$data["rms_food_details"]=$food_details;
		
	// 	$ord_details=$this->settings_model->getallord_details();
	// 	$data["rms_order_details"]=$ord_details;
	// 	$this->load->view('themes/header');
	// 	$this->load->view('bill_view',$data);
	// 	//$this->load->view('themes/footer');
	// }
	
	// public function desert()

	// {
	// 	$desert_details=$this->settings_model->getalldesert_details();
	// 	$data["rms_desert_details"]=$desert_details;
	// 	$this->load->view('themes/header');
	// 	$this->load->view('desert_view',$data);
	// 	//$this->load->view('themes/footer');
	// }
	public function insertorder(){
		$this->form_validation->set_rules('table_id', 'select table', 'trim|required');
		//$this->form_validation->set_rules('Occasion_id', 'select occasion', 'trim|required');
		$this->form_validation->set_rules('food_id', 'select food', 'trim|required');
		$this->form_validation->set_rules('Quantity', 'write Quantity', 'trim|required');
		$this->form_validation->set_rules('customer_name', 'write name', 'trim|required');
		$this->form_validation->set_rules('phone_no', 'write phone_no', 'trim|required');
		$this->form_validation->set_rules('email_id', 'write e_mail', 'trim|required');
		$this->form_validation->set_rules('date', 'write date', 'trim|required');
		$this->form_validation->set_rules('time', 'write time', 'trim|required');

		
		if($this->form_validation->run()){
			//echo 'done';
			$customer_id=$this->form_model->insertorder();
			if($customer_id>0){
				$this->session->set_flashdata('notification',array('color'=>'green','type'=>'error','message'=>'Your Are Successfully Registered with us!'));
				redirect(site_url().'/welcome/menu');
				//print_r($_POST);
			}
		}
		else{
		$this->session->set_flashdata('notification',array('color'=>'red','type'=>'error','message'=>'failed please check once again!'));
		redirect(site_url().'/welcome/menu');
		}
	}
	
	// public function insertbill(){
	// 	$this->form_validation->set_rules('Name', 'select table', 'trim|required');
	// 	$this->form_validation->set_rules('Food_name', 'select occasion', 'trim|required');
	// 	$this->form_validation->set_rules('Amount', 'select food', 'trim|required');
		
	// 	$this->form_validation->set_rules('GST', 'write phone_no', 'trim|required');
	// 	$this->form_validation->set_rules('Quantity', 'write phone_no', 'trim|required');
		
	// 	$this->form_validation->set_rules('Total', 'write e_mail', 'trim|required');
		
	// 	if($this->form_validation->run()){
	// 		//echo 'done';
	// 			$bill_id=$this->form_model->insertbill();
	// 			if($bill_id>0){
	// 			$this->session->set_flashdata('notification',array('color'=>'green','type'=>'error','message'=>'Your Are Successfully Bill Paid !'));
	// 			redirect(site_url().'/welcome/menu');
	// 		}
	// 	}
	// 	else{
	// 	$this->session->set_flashdata('notification',array('color'=>'red','type'=>'error','message'=>'failed please check once again!'));
	// 	redirect(site_url().'/welcome/menu');
	// 	}
			
			
		
		
	// }
	
}
