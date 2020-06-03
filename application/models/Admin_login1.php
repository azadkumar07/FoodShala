<?php 
class Admin_login1 extends CI_Model
{
	 public function login($un,$ps)
	 {
		$q=$this->db->select(['un','ps'])->from('admin')->where('un',$un)->where('ps',$ps)->get();

		return $q->row();
	 }

	 public function user_login($un,$ps)
	 {
		$q=$this->db->select(['un','ps'])->from('user')->where('un',$un)->where('ps',$ps)->get();

		return $q->row();
	 }
}
?>