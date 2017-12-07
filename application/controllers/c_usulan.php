<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class c_usulan extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('m_usulan');
	}

	public function viewAdd(){
		$this->load->view('/user/user-usulanproject');
	}

	public function viewUsulan(){
		$data['usul']=$this->db->get('usulan')->result();
		$this->load->view('/user/user-listusulan', $data);
	}

	public function beriUsulan(){
		$username=$this->session->userdata('user');
		$judul=$this->input->post('judul');
		$isi=$this->input->post('isi');
		$this->m_usulan->usulan($username, $judul, $isi);
		$this->viewAdd();
	}

	public function addVote($id){
		$this->m_usulan->addPriority($id);
		$this->viewUsulan();
	}

	public function approve($id){
		$this->m_usulan->approve($id);
		redirect('c_auth/home');
	}
}

/* End of file c_usulan.php */
/* Location: ./application/controllers/c_usulan.php */