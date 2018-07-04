<?php
	Class Settings_model extends CI_Model{
	   public function __construct(){
		$this->load->database();
	}
	function getalltable_details(){
		
		$this->db->select("*");
		$this->db->from("rms_table_details");
		$query=$this->db->get();
		return $query->result();
	}
	function getallfood_details(){
		
		$this->db->select("*");
		$this->db->from("rms_food_details");
		$query=$this->db->get();
		return $query->result();
	}
	function getallcustomer_details(){
		
		$this->db->select("*");
		$this->db->from("rms_customer_details");
		$query=$this->db->get();
		return $query->result();
	}
	function getallord_details(){
		
		$this->db->select("*");
		$this->db->from("rms_order_details");
		$query=$this->db->get();
		return $query->result();
	}
	
	function getallorder_details(){
		
		$this->db->select("ord_det.order_id,tab.table_name,food.food_name,cust.customer_name,ord_det.Quantity,ord_det.date,ord_det.time,ord_det.status,cust.phone_no");
		$this->db->from("rms_table_details tab");
		$this->db->join("rms_order_details ord_det", "ord_det.table_id = tab.table_id");
		$this->db->join("rms_food_details food",     "food.food_id = ord_det.food_id");
		$this->db->join("rms_customer_details cust", "cust.customer_id = ord_det.customer_id");
		

		$query=$this->db->get();
		return $query->result();
	}
	
	
	// function getallbill_details(){
		
	// 	$this->db->select("cust.customer_name,food.food_name,food.prize,food.GST,cust.Quantity,bill.Total");
	// 	$this->db->from("rms_food_details food");
	// 	$this->db->join("rms_bill_details bill", "bill.food_id= food.food_id");
	// 	$this->db->join("rms_customer_details cust","bill.customer_id = cust.customer_id");
		

	// 	$query=$this->db->get();
	// 	return $query->result();
	// }
	// function getalloccasion_details(){
		
	// 	$this->db->select("*");
	// 	$this->db->from("rms_occasion_details");
	// 	$query=$this->db->get();
	// 	return $query->result();
	// }
	
	
	function getalllunch_details(){
		
		$this->db->select("*");
		$this->db->from("rms_food_details");
		$query=$this->db->get();
		return $query->result();
	}
	
	// function getallbreakfast_details(){
		
	// 	$this->db->select("*");
	// 	$this->db->from("rms_breakfast_details");
	// 	$query=$this->db->get();
	// 	return $query->result();
	// }
	
	// function getalldesert_details(){
		
	// 	$this->db->select("*");
	// 	$this->db->from("rms_desert_details");
	// 	$query=$this->db->get();
	// 	return $query->result();
	// }
	
	
	
	
	}
	?>