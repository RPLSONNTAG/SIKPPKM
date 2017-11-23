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
		$this->session->set_flashdata('sukses', 'Terimakasih Telah Menggunakan Sistem Informasi Ini');
		redirect('login');
	}

	public function register(){

	}

	public function resetPassword(){
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
		
		$username=$this->security->sasnitize_filename($_POST['username']);
		$password=$this->security->sasnitize_filename($_POST['password']);
		if($this->form_validation->run()==FALSE){
			$this->session->set_flashdata('error', "Maaf, data gagal diterima");
		} else {
			$this->db->query("UPDATE TABLE User set Password='$password' where username='$username'");
		}
	}

}

/* End of file c_auth.php */
/* Location: ./application/controllers/c_auth.php */
