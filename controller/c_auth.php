<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class auhtorize extends CI_Controller {

	public function __construct(){
		parent::__construct();
		in_access();
		$this->load->model('m_admin');
	}

	public function login(){
		$username=$this->security->sanitize_filename($_POST['username']);
		$password=$this->security->sanitize_filename($_POST['password']);
		$status=$this->m_admin->isValid($username, $password);
		if($status){
			$this->session->set_userdata('user', $username);
			redirect('Welcome');
		} else {
			$this->session->set_flashdata('error','Maaf Anda Gagal Login ');
			redirect('Login');
		}
	}

	public function logout(){
		$this->session->unset_userdata('user');
		$this->session->set_flashdata('sukses', 'Terimakasih Telah Menggunakan Aplikasi Sipudes');
		redirect('login');
	}

	public function register(){

	}

	public function resetPassword(){

	}

}

/* End of file c_auth.php */
/* Location: ./application/controllers/c_auth.php */