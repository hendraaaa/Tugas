<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class DetailAktor extends CI_Controller {

	public function aktor($id_aktor)
	{
		$this->load->helper('url');

		$this->load->model('DetailAktor_model');

		$data['listaktor'] = $this->DetailAktor_model->detailaktor($id_aktor);
		$data['listperan'] = $this->DetailAktor_model->peran();

		//var_dump($data);die;
		$this->load->view('detailAktor',$data);
	}
}
