<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');

		$this->load->model('Home_model');

		$data['listfilm'] = $this->Home_model->datafilm();
		$data['halaman'] = 'admin/pages/index';
		
		$this->load->view('admin',$data);
	}
	public function add()
	{
		$this->load->helper('url');

	
		$data['halaman'] = 'admin/pages/addfilm';
		
		$this->load->view('admin',$data);
	}
	public function addAksi(){
		$this->load->helper('url');
		$this->load->model('Admin_model');
		$this->Admin_model->addAktor();
		redirect('admin');

	}	
}
