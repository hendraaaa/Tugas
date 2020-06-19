<?php
/**
 * 
 */
class Search_model extends CI_Model
{
	
	public function get_keywoard($keywoard)
	{
		$this->load->database();


		$query = "SELECT * FROM film WHERE namaFilm LIKE '$keywoard%'";

		$result = $this->db->query($query);

		
	
		$data = $result->result_array();
		
		return $data;

		


		
	}
}