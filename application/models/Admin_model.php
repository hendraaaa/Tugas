<?php
/**
 * 
 */
class Admin_model extends CI_Model
{
	
	public function addAktor()
	{
		$this->load->database();
		$this->load->helper('form','url');

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

	
		

	
		

		$query = "INSERT INTO film (namaFilm,rating,genre,durasi,tgl_rilis,poster_film,overview,bgimage,bahasa,anggaran,pemasukan) VALUES('$nama','$rating','$genre','$durasi','$tanggal','$poster','$overview','$background','$bahasa','$anggaran2','$pemasukan2')";

		$this->db->query($query);

		return; 
	}
	
}