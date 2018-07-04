<?php
	Class Form_model extends CI_Model{
	   public function __construct(){
		$this->load->database();
	}
	function insertorder(){
		$data=array(
		'Quantity'=>trim($this->input->post('Quantity')),
		'customer_name'=>trim($this->input->post('customer_name')),
		'phone_no'=>trim($this->input->post('phone_no')),
		'email_id'=>trim($this->input->post('email_id')),
		'date'=>trim($this->input->post('date')),
		'time'=>trim($this->input->post('time')),

		);
		 $this->db->insert("rms_customer_details", $data);
		 $customer_id=$this->db->insert_id();
		 
		 $data1=array(
		'customer_id'=>$customer_id,
		'table_id'=>trim($this->input->post('table_id')),
		'occasion_id'=>trim($this->input->post('occasion_id')),
		'Quantity'=>trim($this->input->post('Quantity')),
		'date'=>trim($this->input->post('date')),
		'time'=>trim($this->input->post('time')),
		'phone_no'=>trim($this->input->post('phone_no')),
	     'food_id'=>trim($this->input->post('food_id')),
		);
		 $this->db->insert("rms_order_details", $data1);
          return $customer_id; 
	}
	
	// function insertbill(){
	// 	$data=array(
		
	// 	'customer_id'=>trim($this->input->post('Name')),
	// 	'food_id'=>trim($this->input->post('Food_name')),
	// 	'Amount'=>trim($this->input->post('Amount')),
	// 	'GST'=>trim($this->input->post('GST')),
	// 	'Quantity'=>trim($this->input->post('Quantity')),
	// 	'Total'=>trim($this->input->post('Total')),
	// 	);
	// 	 $this->db->insert("rms_bill_details`", $data);
	// 	 $bill_id=$this->db->insert_id();
	// 	 return $bill_id; 
	// }
	}
	?>