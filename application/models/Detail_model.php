<?php

class Detail_model extends CI_Model
{
	
	public function detailfilm($id_film)
	{
		$this->load->database();

		$query = "SELECT * FROM film WHERE id_film = '$id_film'";

		$result = $this->db->query($query);

		$data = $result->result_array();

		//var_dump($data);die;

		return $data;
	}
}