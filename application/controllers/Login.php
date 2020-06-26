<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index(){
		echo "<script>alert('Gagal Login!');history.go(-1);</script>";
	}

	

	public function loginn()
	{
		$this->load->helper('url');

		$this->load->model('Login_model');


		$username = $this->input->post('username');
		$password = $this->input->post('password');



	
		$data = $this->Login_model->verifikasi($username);
		$data = $this->Login_model->verifikasi($password);
		

		if (empty($data)) {
		//echo "<script>alert('same message');</script>";
		redirect('Login');
		

		}		
		elseif ($username == $data->username) {
			echo "berhasil";
		}
			

		
		
	}
}
