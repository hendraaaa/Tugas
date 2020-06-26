<?php
/**
 * 
 */
class Aktor_model extends CI_Model
{
	
	public function dataaktor()
	{
		$this->load->database();

		$query = "SELECT * FROM aktor";

		$result = $this->db->query($query);

		$data = $result->result_array();

		//var_dump($data);die;

		return $data;
	}
}