<?php
/**
 * 
 */
class Home_model extends CI_Model
{
	
	public function datafilm()
	{
		$this->load->database();

		$query = "SELECT * FROM film";

		$result = $this->db->query($query);

		$data = $result->result_array();

		//var_dump($data);die;

		return $data;
	}
	
}