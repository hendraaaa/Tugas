<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delete extends CI_Controller {

	public function data($id_film)
	{
		// load url helper
		$this->load->helper('url');

		// ambil data melalui model
		$this->load->model('Delete_model');
		$this->Delete_model->hapusfilm($id_film);

		redirect('admin');
	}
}