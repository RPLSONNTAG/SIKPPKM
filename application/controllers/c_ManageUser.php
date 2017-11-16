<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ManageUser extends CI_Controller {

	public function __construct(){
		parent::__construct();
		in_access();
		$this->load->model('m_admin');
	}

	public function addUser(){
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('telp', 'telp', 'required');
		$this->form_validation->set_rules('NIK', 'NIK', 'required');
		
		$username=$this->security->sanitize_filename($_POST['username']);
		$password=$this->security->sanitize_filename($_POST['password']);
		$email=$this->security->sanitize_fielname($_POST['email']);
		$noTelp=$this->security->sanitize_fielname($_POST['telp']);
		$NIK=$this->security->sanitize_fielname($_POST['NIK']);
		if($this->form_validation->run()==FALSE){
			$this->session->set_flashdata();
		} else {
			$this->m_user->addUser($username, $password, $email, $noTelp, $NIK);
		}
	}

	public function delUser(){
		$username=$this->security->sanitize_filename($_POST['username']);
		$this->m_user->delUser($username);
	}

}

/* End of file c_ManageUser.php */
/* Location: ./application/controllers/c_ManageUser.php */
