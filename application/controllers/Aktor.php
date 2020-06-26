<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aktor extends CI_Controller {

	public function dataaktor()
	{
		$this->load->helper('url');

		$this->load->model('Aktor_model');

		$data['listaktor'] = $this->Aktor_model->dataaktor();

		//var_dump($data);die;
		$this->load->view('aktor',$data);	
		
	}
	public function cariaktor()
	{
		$this->load->helper('url');

		$this->load->helper('form');

		$keywoard = $this->input->post('keywoard');

		$this->load->model('SearchAktor_model');

		$data['listaktor'] = $this->SearchAktor_model->get_keywoardakt($keywoard);

		$data['not'] = $keywoard;
		

			
		$this->load->view('aktor',$data);
		
	}
}
