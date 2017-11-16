<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ManageUser extends CI_Controller {

	public function __construct(){
		parent::__construct();
		in_access();
		$this->load->model('m_admin');
	}

	public function addUser(){
		$username=$this->security->sanitize_filename($_POST['username']);
		$password=$this->security->sanitize_filename($_POST['password']);
		$name=$this->security->sanitize_filename($_POST['name']);
		$work=$this->m_admin->addAdmin();
		if($isValid){
			$this->session->set_userdata('user', $username);
		} else {
			$this->session->set_flashdata('error','Maaf Anda Gagal Login ');
			redirect('Welcome');
		}
	}

	public function logout(){
		$this->session->unset_userdata('user');
		$this->session->set_flashdata('sukses', 'Terimakasih Telah Menggunakan Aplikasi Sipudes');
		redirect('Login');
	}

	public function register(){
		
	}

	public function resetPassword(){
		
	}

}

/* End of file c_ManageUser.php */
/* Location: ./application/controllers/c_ManageUser.php */