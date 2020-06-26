<?php
/**
 * 
 */
class SearchAktor_model extends CI_Model
{
	
	public function get_keywoardakt($keywoard)
	{
		$this->load->database();


		$query = "SELECT * FROM aktor WHERE nama LIKE '$keywoard%'";

		$result = $this->db->query($query);

		
	
		$data = $result->result_array();
		
		return $data;

	}
}