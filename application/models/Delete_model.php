<?php

class Delete_model extends CI_Model{

	
	public function hapusfilm($id_film){
		// koneksi
		$this->load->database();

		$fotolama = $this->input->get('foto');

		// hapus foto lama
		unlink("foto/".$fotolama);

		// buat query
		$query = "DELETE FROM film WHERE id_film='$id_film'";
		// eks query
		$this->db->query($query);

		return;
	}
	
}