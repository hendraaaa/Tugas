<?php

class DetailAktor_model extends CI_Model
{
	
	public function detailaktor($id_aktor)
	{
		$this->load->database();

		
		$nama = $this->input->get('nama');
		$query = "SELECT * FROM aktor WHERE id_aktor = '$id_aktor'";

		$result = $this->db->query($query);

		$data = $result->result_array();

		//var_dump($data);die;

		return $data;
	}
	public function peran()
	{
		$this->load->database();

		
		$nama = $this->input->get('nama');
		$query = "SELECT aktor.id_film,film.* from aktor, film WHERE aktor.id_film = film.id_film AND aktor.nama = '$nama'";

		$result = $this->db->query($query);

		$data = $result->result_array();
	

		//var_dump($data);die;

		return $data;
	}
}