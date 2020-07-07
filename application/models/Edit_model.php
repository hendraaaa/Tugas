<?php

class Edit_model extends CI_Model{

	public function detailfilm($id_film){

		// buat koneksi
		$this->load->database();

		// buat query
		$query = "SELECT * FROM film WHERE id_film='$id_film'";
		// eks query
		$result = $this->db->query($query);

		// uraikan data
		$data = $result->result_array();

		// var_dump($data);die;

		// kembalikan hasil proses ke contro
		return $data;
	}	
	public function editfilm(){
		$this->load->database();
		$this->load->helper('form','url');

		$id_film = $this->input->post('id_film');
		$fotolama = $this->input->post('fotolama');
		$nama = $this->input->post('nama');
		$rating = $this->input->post('rating');
		$genre = $this->input->post('genre');
		$durasi = $this->input->post('durasi');
		$tanggal = $this->input->post('tanggal');
		$overview = $this->input->post('overview');
		$bahasa = $this->input->post('bahasa');
		$anggaran = $this->input->post('anggaran');
		$pemasukan = $this->input->post('pemasukan');

		//remove titik dan koma pada format anggaran

		$anggran1= str_replace(",","",$anggaran);
		$anggaran2= str_replace(".","",$anggran1);

		//remove titik dan koma pada format pemasukan
		$pemasukan1= str_replace(",","",$pemasukan);
		$pemasukan2= str_replace(".","",$pemasukan1);



		//echo $angka2;die;






		$poster = $_FILES['poster']['name'];
		$background = $_FILES['background']['name'];

		

		$config['upload_path']			= './foto/';
		$config['allowed_types']		= 'jpg|png';
	//	$config['file_name']        	= $poster;

		$this->load->library('upload', $config);

		$this->upload->do_upload('background'); //hrus sesuai dengan nama d input
		$this->upload->do_upload('poster'); //hrus sesuai dengan nama d input

	
		

	
		

		$query = "UPDATE film SET namaFilm = '$nama',
							rating = '$rating',
							genre = '$genre',
							durasi = '$durasi',
							tgl_rilis = '$tanggal',
							poster_film = '$poster',
							overview = '$overview',
							bgimage = '$background',
							bahasa = '$bahasa',
							anggaran = '$anggaran',
							pemasukan = '$pemasukan' 
					WHERE 
							id_film='$id_film'";

		$this->db->query($query);

		return; 
	}
}