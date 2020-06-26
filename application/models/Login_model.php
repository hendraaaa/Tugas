<?php
/**
 * 
 */
class Login_model extends CI_Model
{
	
	public function verifikasi($username)
	{
		$this->load->database();

		$query = "SELECT * FROM admin where username='$username'";

		$result = $this->db->query($query)->row();

		//$data = $result->result_array();

		

		return $result;
	}
}