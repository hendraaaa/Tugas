<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');

		$this->load->model('Home_model');

		$data['listfilm'] = $this->Home_model->datafilm();

		//var_dump($data);die;
		$this->load->view('home',$data);
	}
	public function cari()
	{
		$this->load->helper('url');
		$this->load->helper('form');
		$keywoard = $this->input->post('keywoard');
		$this->load->model('Search_model');
		$data['listfilm'] = $this->Search_model->get_keywoard($keywoard);
		$data['not'] = $keywoard;
		

			
		$this->load->view('home',$data);
		
		
		
		
	}
}
