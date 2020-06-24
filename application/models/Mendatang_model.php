<?php
/**
 * 
 */
class Mendatang_model extends CI_Model
{
	
	public function datafilm()
	{
		$this->load->database();

		$query = "SELECT film.* FROM film,film_mendatang WHERE film_mendatang.id_film = film.id_film";

		$result = $this->db->query($query);

		$data = $result->result_array();


		return $data;
	}
}