<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');

		
		//var_dump($data);die;
		$this->load->view('admin');
	}
	
}
