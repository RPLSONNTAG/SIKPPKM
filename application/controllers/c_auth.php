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
	
	public function uHome(){
		$username=$this->session->userdata('user');
		$this->db->where('username', $username);
		$data['user']=$this->db->get('user')->result();
		$this->load->view('/user/user-profile', $data);
	}

	public function viewLogUser(){
		$this->load->view('/user/user-login');
	}

	public function regUser(){
		$this->load->view('/user/user-register');
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
			$data['user']=$this->m_user->data($username, $password);
			echo "<script>alert('Sukses!')</script>";
			$this->load->view('/user/user-profile', $data);
		} else {
			//echo "Username Salah";
			$this->session->set_flashdata('error','Maaf Anda Gagal Login ');
			redirect('c_auth');
		}
	}

	public function logout(){
		$this->session->unset_userdata('admin');
		$this->session->unset_userdata('user');
		$this->session->set_flashdata('sukses', 'Terimakasih Telah Menggunakan Aplikasi Sipudes');
		redirect('c_auth');
	}

	public function register(){

	}

	public function viewGPassword(){
		$this->load->view('user/user-gantipassword');
	}

	public function gantiPassword(){
		$username=$this->session->userdata('user');
		$passLama=$this->input->post('password-lama');
		$passBaru1=$this->input->post('password-baru1');
		$passBaru2=$this->input->post('password-baru2');
		if($this->m_user->validPass($username, $passLama)){
			if($passBaru1 != $passBaru2){
				echo "<script>alert('Password baru tidak sama!')</script>";
				$this->viewGPassword();
			} else {
				$this->m_user->setPassword($username, $passBaru1);
				echo "<script>alert('Password Berhasil Diganti!')</script>";
				$this->uHome();
			}
		} else {
			echo "<script>alert('Password Salah!')</script>";
			$this->viewGPassword();
		}
	}

}

/* End of file c_auth.php */
/* Location: ./application/controllers/c_auth.php */