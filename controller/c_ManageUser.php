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
		$email=$this->security->sanitize_fielname($_POST['email']);
		$noTelp=$this->security->sanitize_fielname($_POST['telp']);
		$NIK=$this->security->sanitize_fielname($_POST['NIK']);
		$work=$this->m_user->addUser($username, $password, $email, $noTelp, $NIK);
	}

	public function delUser(){
		$username=$this->security->sanitize_filename($_POST['username']);
		$work=$this->m_user->delUser($username);
	}

}

/* End of file c_ManageUser.php */
/* Location: ./application/controllers/c_ManageUser.php */
