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
	public function countfilm()
	{
		$this->load->database();

		$query = "SELECT COUNT(*) AS total FROM film";

		$result = $this->db->query($query);

		$data = $result->result_array();

		//var_dump($data);die;

		return $data;
	}
	public function countfilmfav()
	{
		$this->load->database();

		$query = "SELECT COUNT(*) AS totalfav FROM film_favorite";

		$result = $this->db->query($query);

		$data = $result->result_array();

		//var_dump($data);die;

		return $data;
	}
	public function countaktor()
	{
		$this->load->database();

		$query = "SELECT COUNT(*) AS totalaktor FROM aktor";

		$result = $this->db->query($query);

		$data = $result->result_array();

		//var_dump($data);die;

		return $data;
	}
	public function datafilmfav()
	{
		$this->load->database();

		$query = "SELECT film.* FROM film,film_favorite WHERE film_favorite.id_film = film.id_film";

		$result = $this->db->query($query);

		$data = $result->result_array();

		//var_dump($data);die;

		return $data;
	}
	public function dataaktor()
	{
		$this->load->database();

		$query = "SELECT * FROM aktor";

		$result = $this->db->query($query);

		$data = $result->result_array();

		//var_dump($data);die;

		return $data;
	}
	public function ambilfilm()
	{
		$this->load->database();

		$query = "SELECT id_film,namaFilm from film";

		$result = $this->db->query($query);

		$data = $result->result_array();

		//var_dump($data);die;

		return $data;
	}
	
}