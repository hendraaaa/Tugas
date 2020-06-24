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
	public function get_keywoardfav($keywoard)
	{
		$this->load->database();


		$query = "SELECT film.* FROM film,film_favorite WHERE film_favorite.id_film = film.id_film AND namaFilm LIKE '$keywoard%'";

		$result = $this->db->query($query);

	
		$data = $result->result_array();
		
		return $data;		
	}
	public function get_keywoardtayang($keywoard)
	{
		$this->load->database();


		$query = "SELECT film.* FROM film,film_tayang WHERE film_tayang.id_film = film.id_film AND namaFilm LIKE '$keywoard%'";

		$result = $this->db->query($query);

	
		$data = $result->result_array();
		
		return $data;		
	}
	public function get_keywoardmendatang($keywoard)
	{
		$this->load->database();


		$query = "SELECT film.* FROM film,film_mendatang WHERE film_mendatang.id_film = film.id_film AND namaFilm LIKE '$keywoard%'";

		$result = $this->db->query($query);

	
		$data = $result->result_array();
		
		return $data;		
	}
}