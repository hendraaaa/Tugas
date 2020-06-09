<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Favorite extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');

		$this->load->model('Favorite_model');

		$data['listfilm'] = $this->Favorite0_model->datafilm();

		//var_dump($data);die;
		$this->load->view('home',$data);
	}
}
