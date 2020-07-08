<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends CI_Controller {

	public function index()
	{
		echo 'masuk';
	}

	public function data($id_film){
		// load url
		$this->load->helper('url');

		// ambil detail data
		$this->load->model('Edit_model');
		
		//ambil jumlah
		$this->load->model('Home_model');
		$data['total'] = $this->Home_model->countfilm();
		$data['totalfav'] = $this->Home_model->countfilmfav();
		$data['totalaktor'] = $this->Home_model->countaktor();
		$data['detailfilm'] = $this->Edit_model->detailfilm($id_film);
		//

		// tampilan
		$data['halaman'] = ('admin/pages/edit');
		$this->load->view('admin',$data);
	}

	public function aksi(){
		$this->load->helper('url');
		$this->load->model('Edit_model');
		$this->Edit_model->editfilm();
		redirect('admin');
	}
}