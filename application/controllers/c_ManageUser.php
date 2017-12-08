<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class c_ManageUser extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('m_admin');
		$this->load->model('m_user');
	}

	public function index(){
		$data['admin'] = $this->getAllAdmin()->result();
		$this->load->view('/admin/admin-list_admin', $data);
	}

	public function viewAllUser(){
		$this->getAllUser();
	}

	public function getAllAdmin(){
		return $this->db->get('admin');
	}

	public function getAllUser(){
		$data['user'] = $this->db->get('kependudukan')->result();
		$this->load->view('/admin/admin-list_kependudukan', $data);
	}

	public function viewAddAdmin(){
		$this->load->view('/admin/admin-input_admin');
	}

	public function addAdmin(){
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$this->m_admin->addAdmin($username, $password);
		redirect('c_ManageUser');
	}

	public function delAdmin($id){
		$this->m_admin->delAdmin($id);
		redirect('c_ManageUser');
	}

	public function regUser(){
		$username=$this->input->post('username');
		$NIK=$this->input->post('NIK');
		$email=$this->input->post('email');
		$noTelp=$this->input->post('noTelp');
		$password=$this->input->post('password');
		if ($this->m_user->isPenduduk($NIK)) {
			$this->m_user->addUser($username, $password, $email, $noTelp, $NIK);
			echo "<script>alert('Sukses!')</script>";
			redirect('c_auth/viewLogUser');
		} else {
			echo "<script>alert('Gagal','NIK belum terdaftar')</script>";
			redirect('c_auth/regUser');
		}

	}

	public function viewAddUser(){
		$this->load->view('/admin/admin-input_kependudukan');
	}

	public function delUser($id){
		$this->m_user->delUser($id);
		redirect('c_ManageUser');
	}
}

/* End of file c_ManageUser.php */
/* Location: ./application/controllers/c_ManageUser.php */
