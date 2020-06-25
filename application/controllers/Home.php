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
	public function Favorite()
	{
		$this->load->helper('url');

		$this->load->model('Favorite_model');

		$data['listfilm'] = $this->Favorite_model->datafilm();

		//var_dump($data);die;
		$this->load->view('film_favorite',$data);
	}
	public function carifavorite()
	{
		$this->load->helper('url');
		$this->load->helper('form');
		$keywoard = $this->input->post('keywoard');
		$this->load->model('Search_model');
		$data['listfilm'] = $this->Search_model->get_keywoardfav($keywoard);
		$data['not'] = $keywoard;
		

			
		$this->load->view('film_favorite',$data);		
		
	}
	public function Tayang()
	{
		$this->load->helper('url');

		$this->load->model('Tayang_model');

		$data['listfilm'] = $this->Tayang_model->datafilm();

		//var_dump($data);die;
		$this->load->view('film_tayang',$data);
	}
	public function caritayang()
	{
		$this->load->helper('url');
		$this->load->helper('form');
		$keywoard = $this->input->post('keywoard');
		$this->load->model('Search_model');
		$data['listfilm'] = $this->Search_model->get_keywoardtayang($keywoard);
		$data['not'] = $keywoard;
		

			
		$this->load->view('film_tayang',$data);		
		
	}
	public function Mendatang()
	{
		$this->load->helper('url');

		$this->load->model('Mendatang_model');

		$data['listfilm'] = $this->Mendatang_model->datafilm();

		//var_dump($data);die;
		$this->load->view('film_mendatang',$data);
	}
	public function carimendatang()
	{
		$this->load->helper('url');
		$this->load->helper('form');
		$keywoard = $this->input->post('keywoard');
		$this->load->model('Search_model');
		$data['listfilm'] = $this->Search_model->get_keywoardmendatang($keywoard);
		$data['not'] = $keywoard;
		

			
		$this->load->view('film_mendatang',$data);		
		
	}
	
}
