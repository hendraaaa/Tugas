<?php
/**
 * 
 */
class Login_model extends CI_Model
{
	
	public function verifikasi($username $password)
	{
		$this->load->database();

		$query = "SELECT * FROM admin where username='$username' And password = '$password'";

		$result = $this->db->query($query)->row();

		//$data = $result->result_array();

		

		return $result;
	}
}