<?php
class Pelanggan_model extends CI_Model {
	function __construct(){
		$this->load->database(); // berfungsi untuk memanggil database
	}

	public function data_pelanggan(){
		$query = $this->db->query("SELECT * FROM pelanggan");
		if($query->num_rows() > 0){
			return $query->result();
		}
	}
	//edit pelanggan
	public function info_pelanggan($id){
		$query = $this->db->query("SELECT * FROM pelanggan WHERE kd_pelanggan ='$id'");
		if($query->num_rows() > 0){
			return $query->row();
		}else {
			return false;
		}
	}
}
?>