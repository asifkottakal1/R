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
	function getalloccasion_details(){
		
		$this->db->select("*");
		$this->db->from("rms_occasion_details");
		$query=$this->db->get();
		return $query->result();
	}
	
	
	
	
	}
	?>