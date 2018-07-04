<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
public function __construct() {
		parent::__construct();
		$this -> load -> helper('url');
		$this -> load -> model('settings_model');
		$this->load->library(array('form_validation','session'));
		$this -> load -> model('form_model');
		
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
		
		$occasion_details=$this->settings_model->getalloccasion_details();
		$data["rms_occasion_details"]=$occasion_details;
		
		$this->load->view('themes/header');
		$this->load->view('menu_view',$data);
		$this->load->view('themes/footer');
	}
	public function contact()
	{
		$this->load->view('themes/header');
		$this->load->view('contact_view');
		$this->load->view('themes/footer');
	}
	public function insertorder(){
		$this->form_validation->set_rules('table_id', 'select table', 'trim|required');
		$this->form_validation->set_rules('Occasion_id', 'select occasion', 'trim|required');
		$this->form_validation->set_rules('food_id', 'select food', 'trim|required');
		$this->form_validation->set_rules('customer_name', 'write name', 'trim|required');
		$this->form_validation->set_rules('phone_no', 'write phone_no', 'trim|required');
		$this->form_validation->set_rules('email_id', 'write e_mail', 'trim|required');
		
		if($this->form_validation->run()){
			//echo 'done';
			$customer_id=$this->form_model->insertorder();
			if($customer_id>0){
				$this->session->set_flashdata('notification',array('color'=>'green','type'=>'error','message'=>'Your Are Successfully Registered with us!'));
				redirect(site_url().'/welcome/menu');
			}
		}
		else{
		$this->session->set_flashdata('notification',array('color'=>'red','type'=>'error','message'=>'failed please check once again!'));
		redirect(site_url().'/welcome/menu');
		}
	}
	
}
