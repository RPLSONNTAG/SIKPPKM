<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class c_ManageProject extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('m_project');
	}

	public function index(){
		$data['proj'] = $this->getProjectList()->result();
		$this->load->view('/admin/admin-list_project', $data);
	}

	public function getProjectList(){
		return $this->db->get('project');
	}

	public function getProjectInfo($id){
		$this->db->where('ID_Project', $id);
		$data['proj'] = $this->getProjectList()->result();
		$this->load->view('/admin/admin-halaman_project', $data);
	}

	public function voteSatisfaction(){
		$id = $this->input->post('id_project');
		$this->m_project->addSatisfaction($id);
	}

	public function votePriority(){
		$id = $this->input->post('id_project');
		$this->m_project->addPriority($id);
	}

	public function beriKomentar(){
		$id = $this->input->post('id_project');
		$komentar = $this->input->post('komentar');
		$username = $this->session->user;
		$this->m_project->addKomentar($id, $komentar, $username);
	}

	public function beriReport(){
		$id = $this->input->post('id_project');
		$report = $this->input->post('report');
		$username = $this->session->user;
		$this->m_project->addReport($id, $report, $username);
	}

	public function addProject(){
		$id=$this->input->post('id_project');
		$judul=$this->input->post('judul');
		$isi=$this->input->post('isi');
		$this->m_project->newProject($username, $password);
		redirect('c_ManageProject');
	}

	public function deleteProject($id){
		$this->db->query("DELETE FROM project where ID_Project='$id'");
		redirect('c_ManageProject');
	}

}
/* End of file c_ManageProject.php */
/* Location: ./application/controllers/c_ManageProject.php */