<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller {

	public function film($id_film)
	{
		$this->load->helper('url');

		$this->load->model('Detail_model');

		$data['listfilm'] = $this->Detail_model->detailfilm($id_film);

		//var_dump($data);die;
		$this->load->view('detail',$data);
	}
}
