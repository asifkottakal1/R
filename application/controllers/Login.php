<?php
class Login extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this -> load -> helper('url');
		$this -> load -> model('model1');
		$this -> load -> model('settings_model');
		$this -> load -> model('form_model');
		
		$this->load->library(array('form_validation','session'));
	}
	
	public function index()
	{
		
		$this->load->view('themes/header');
		$this->load->view('themes/login_view');
		//$this->load->view('themes/footer');
	}
	
	public function process(){
		$username=$this->input->post('user');
		$password=$this->input->post('pass');
		// $data["login_user"]=$this->model1->login1($username,$password);
		if($data=$this->model1->login1($username,$password))
		{
			//redirect('welcome/order');
			$this->session->set_userdata('user',$data);
			redirect('welcome/order');
			
			//echo 'success';
		
		}
		else
		{
			echo 'failed';
		}
	}
	
	public function insert(){
		$name=$this->input->post('name');
		$username=$this->input->post('user');
		$password=$this->input->post('pass');
		// $data["login_user"]=$this->model1->login1($username,$password);
		if($this->model1->register1($name,$username,$password))
		{
			echo 'success';
		}
		else
		{
			echo 'failed';
		}
		
	}
	public function register()
	{
		
		$this->load->view('themes/header');
		$this->load->view('themes/register_view');
		//$this->load->view('themes/footer');
	}
	public function logout()
	{
		
	$this->session->unset_userdata('user',$data);
			redirect('welcome');
		
	}

	public function delete($order_id)
	{
		$order_details=$this->model1->order($order_id);
		$data["rms_order_details"]=$order_details;
		redirect('welcome/order');
	}
	

	public  function del(){
		$orders=$this->input->post('check');
		if($orders)
		{
			if($this->input->post('delete'))
			{
				
				if($this->model1->delete($orders))
				{
					redirect('welcome/order');
				}
				else
				{
					echo "Error";
				}
				
			}
		}
		else
		{
			echo "No order selected";
		}
	}
	public function edit($order_id){
		
		$table_details=$this->settings_model->getalltable_details();
		//print_r($table_details);
		$data["rms_table_details"]=$table_details;
		
		$food_details=$this->settings_model->getallfood_details();
		$data["rms_food_details"]=$food_details;
		$order_details=$this->model1->get_order_details($order_id);
		$data["rms_order_details"]=$order_details;
		$this->load->view('themes/header');
		$this->load->view('themes/edit_view',$data);

	}
	public function edit1(){
		 $edit=$this->model1->edit();
		$data["rms_order_details"]=$edit;
		 redirect('welcome/order');
			//	print_r($_POST);
		
	}
}
?>
		