<?php 
class Admin_model extends CI_Model
{
	 public function insert_product($data)
	 {
		return $this->db->insert('product',$data);
	 }

	 public function insert_order($data)
	 {
		return $this->db->insert('orderprod',$data);
	 }

	 public function select_data()
	 {
		$query=$this->db->select(['id','name','price','category'])->from('product')->get();
		return $query->result();
	 }
	 public function select_orders()
	 {
		$query=$this->db->select(['id','name','quantity','pno','address'])->from('orderprod')->get();
		return $query->result();
	 }

	 public function reg($data)
	 {
		return $this->db->insert('admin',$data);
	 }

	 public function reg_user($data)
	 {
		return $this->db->insert('user',$data);
	 }
}
?>