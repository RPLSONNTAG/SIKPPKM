<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class c_auth extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('m_admin');
		$this->load->model('m_user');
	}

	public function index(){
		$this->load->view('admin-login.php');
	}

	public function home(){
		$this->load->view('/admin/admin-home');
	}
	
	public function loginAdmin(){
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		if($this->m_admin->isValid($username, $password)){
			//echo "Berhasil!";
			$this->session->set_userdata('admin', $username);
			$this->load->view('/admin/admin-home');
		} else {
			//echo "Username Salah";
			$this->session->set_flashdata('error','Maaf Anda Gagal Login ');
			redirect('c_auth');
		}
	}

	public function loginUser(){
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		if($this->m_user->isValid($username, $password)){
			//echo "Berhasil!";
			$this->session->set_userdata('user', $username);
			$this->load->view('/user/user_home');
		} else {
			//echo "Username Salah";
			$this->session->set_flashdata('error','Maaf Anda Gagal Login ');
			$this->load->view('welcome_message');
		}
	}

	public function logout(){
		$this->session->unset_userdata('user');
		$this->session->set_flashdata('sukses', 'Terimakasih Telah Menggunakan Aplikasi Sipudes');
		redirect('c_auth');
	}

	public function register(){

	}

	public function resetPassword(){

	}

}

/* End of file c_auth.php */
/* Location: ./application/controllers/c_auth.php */