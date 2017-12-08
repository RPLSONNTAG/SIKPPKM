<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Classname extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model('m_admin');
  }

  function index()
  {
    $data['admin'] = $this->getAllAdmin()->result();
		$this->load->view('/admin/admin-list_admin', $data);
  }

  public function getAllAdmin(){
		return $this->db->get('admin');
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
		redirect('c_ManageAdmin/index');
	}

}
