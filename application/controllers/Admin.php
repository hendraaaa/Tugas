<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');

		$this->load->model('Home_model');

		$data['listfilm'] = $this->Home_model->datafilm();
		$data['total'] = $this->Home_model->countfilm();
		$data['totalfav'] = $this->Home_model->countfilmfav();
		$data['totalaktor'] = $this->Home_model->countaktor();

		
		$data['halaman'] = 'admin/pages/index';

		
		$this->load->view('admin',$data);
	}
	public function add()
	{
		$this->load->helper('url');

		$this->load->model('Home_model');
		$data['total'] = $this->Home_model->countfilm();
		$data['totalfav'] = $this->Home_model->countfilmfav();
		$data['totalaktor'] = $this->Home_model->countaktor();


	
		$data['halaman'] = 'admin/pages/addfilm';
		
		$this->load->view('admin',$data);
	}
	public function addAksi(){
		$this->load->helper('url');
		$this->load->model('Admin_model');
		$this->Admin_model->addFilm();
		redirect('admin');

	}	
	public function filmfavorite()
	{
		$this->load->helper('url');

		$this->load->model('Home_model');

		$data['listfilm'] = $this->Home_model->datafilmfav();
		$data['total'] = $this->Home_model->countfilm();
		$data['totalfav'] = $this->Home_model->countfilmfav();
		$data['totalaktor'] = $this->Home_model->countaktor();


		
		
		$data['halaman'] = 'admin/pages/indexfavorite';

		
		$this->load->view('admin',$data);
	}
	public function aktor()
	{
		$this->load->helper('url');

		$this->load->model('Home_model');
		$data['listaktor'] = $this->Home_model->dataaktor();

		$data['total'] = $this->Home_model->countfilm();
		$data['totalfav'] = $this->Home_model->countfilmfav();
		$data['totalaktor'] = $this->Home_model->countaktor();


	
		$data['halaman'] = 'admin/pages/indexaktor';
		
		$this->load->view('admin',$data);
	}
	public function addAktor()
	{
		$this->load->helper('url');

		$this->load->model('Home_model');
		$data['total'] = $this->Home_model->countfilm();
		$data['totalfav'] = $this->Home_model->countfilmfav();
		$data['totalaktor'] = $this->Home_model->countaktor();
		$data['film'] = $this->Home_model->ambilfilm();


	
		$data['halaman'] = 'admin/pages/addaktor';
		
		$this->load->view('admin',$data);
	}
	public function addAktorAksi()
	{
		$this->load->helper('url');

		 $this->load->model('Admin_model');
		 $this->Admin_model->addAktor();
		

		
		redirect('admin/aktor');
	}
	public function deleteAktor($id)
	{
		$this->load->helper('url');

		 $this->load->model('Admin_model');
		 $this->Admin_model->hapus($id);
		

		
		redirect('admin/aktor');
	}
	
}
