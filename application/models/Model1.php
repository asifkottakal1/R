<?php
	Class Model1 extends CI_Model{
	   public function __construct(){
		$this->load->database();
	}
	public function login1($username,$password){
		$this->db->select("*");
		$this->db->from("register_user");
		$this->db->where("username",$username);
		$this->db->where("password",$password);
		$query=$this->db->get();
		return $query->result();
	}
	
	public function register1($name,$username,$password){
		$data=array(
		'name'=>trim($this->input->post('name')),
		'username'=>trim($this->input->post('user')),
		'password'=>trim($this->input->post('pass')),
		);
		if($this->db->insert("register_user", $data))
		{
			return true;
		}
		else
			return false;
	}
	public function order($order_id){
		$this->db->where('order_id',$order_id);
		$this->db->delete('rms_order_details');
    }
	public function update($id,$status){
		$this->db->set('status',$status);
		$this->db->where('order_id',$id);
		$this->db->update('rms_order_details');
		if($this->db->affected_rows()>0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	public function delete($orders)
	{
		$this->db->where_in('order_id',$orders);
		$this->db->delete('rms_order_details');
		if($this->db->affected_rows()>0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	public function edit(){
		$data1=array(
		'table_id'=>trim($this->input->post('table_id')),
		
		'Quantity'=>trim($this->input->post('Quantity')),
		'date'=>trim($this->input->post('date')),
		'time'=>trim($this->input->post('time')),
	     'food_id'=>trim($this->input->post('food_id')),
		);
		$order_id=trim($this->input->post('order_id'));


$this->db->where('order_id', $order_id);
$this->db->update('rms_order_details', $data1);

	}

	public function get_order_details($order_id)
	{
		$this->db->select("ord_det.order_id,tab.table_id,food.food_id,cust.customer_name,cust.Quantity,cust.date,cust.time,ord_det.status");
		$this->db->where('ord_det.order_id',$order_id);
		$this->db->from("rms_table_details tab");
		$this->db->join("rms_order_details ord_det", "ord_det.table_id = tab.table_id");
		$this->db->join("rms_food_details food",     "food.food_id = ord_det.food_id");
		$this->db->join("rms_customer_details cust", "cust.customer_id = ord_det.customer_id");
		$query=$this->db->get();
		return $query->result();
	}
	
}
?>