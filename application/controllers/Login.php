<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index(){
		
		$this->load->helper('url');
		if($this->session->userdata('authenticated')){
		 $this->load->view('admin');
			

		}else{
		echo "<script>alert('Gagal Login!');history.go(-1);</script>";

		 $this->load->view('home');

		}
     

	}

	

	public function loginn()
	{
		$this->load->helper('url');

		$this->load->model('Login_model');
		


		$username = $this->input->post('username');
		$password = $this->input->post('password');



	
		$data = $this->Login_model->verifikasi($username, $password);
		

		if (empty($data)) {
		
			redirect('Login');

		

		}		
		elseif ($username == $data->username && $password == $data->password) {
			 $data = array(
          	'authenticated'=>true,
          	'username'=>$data->username

         
        );
		$this->session->set_userdata($data);
		redirect('login');
				
	}
}
public function logout(){
		$this->load->helper('url');

    $this->session->sess_destroy();
    redirect('home');
  }
}
