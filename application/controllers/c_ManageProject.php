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

	public function getBlmSelesai(){
		return $this->m_project->getBlmSelesai();
	}

	public function getProjectInfo($id){
		$this->db->where('ID_Project', $id);
		$data['proj'] = $this->getProjectList()->result();
		$this->load->view('/admin/admin-halaman_project', $data);
	}

	public function viewSatisfaction(){
		$data['proj'] = $this->getProjectList()->result();
		$this->load->view('/admin/admin-list_kepuasan', $data);
	}

	public function voteSatisfaction($id){
		$this->m_project->addSatisfaction($id);
		$this->projectSelesai($id);
	}

	public function viewPriority(){
		$data['proj'] = $this->getProjectList()->result();
		$this->load->view('/admin/admin-list_prioritas', $data);
	}

	public function votePriority($id){
		$this->m_project->addPriority($id);
		$this->berjalan();
	}

	public function beriKomentar(){
		$id = $this->input->post('id_project');
		$komentar = $this->input->post('komentar');
		$username = $this->session->user;
		$this->m_project->addKomentar($id, $komentar, $username);
	}

	public function viewReport(){
		$data['proj'] = $this->db->get('report')->result();
		$this->load->view('/admin/admin-list_report', $data);
	}

	public function beriReport(){
		$config['upload_path']= './uploads/';
		$config['allowed_types']= 'gif|jpg|png';
		$config['max_size']= '100';
		$config['max_width']= '1024';
		$config['max_heiht']= '768';
		$this->upload->initialize($config);

		$id = $this->input->post('id');
		$data['id'] = $id;
		if($_FILES['foto_progress']['name']){
			if($this->upload->do_upload('foto_progress')){
				$img = $this->upload->data();
				$report = $img['file_name'];
				$username = $this->session->user;
				$this->m_project->addReport($id, $report, $username);
				echo "<script>alert('Berhasil Upload!')</script>";
				$this->load->view('user/user-reportprogress', $data);
			} else {
				echo "<script>alert('Gagal Upload!')</script>";
				$this->load->view('user/user-reportprogress', $data);
			}
		}
	}

	public function viewReportProg($id){
		$data['id'] = $id;
		$this->load->view('/user/user-reportprogress', $data);
	}

	public function viewUsulan(){
		$data['usul']=$this->db->get('usulan')->result();
		$this->load->view('/admin/admin-list_usulan', $data);
	}

	public function viewAddProject(){
		$data['jalan']=$this->getBlmSelesai()->result();
		$this->load->view('/admin/admin-input_project', $data);
	}

	public function viewPageUsulan($id){
		$this->db->where('id_usulan', $id);
		$data['usul']=$this->db->get('usulan')->result();
		$this->load->view('/admin/admin-halaman_usulan', $data);
	}

	public function addProject(){
		$id=$this->input->post('id_project');
		$judul=$this->input->post('judul');
		$isi=$this->input->post('isi');
		$this->m_project->newProject($id, $judul, $isi);
		redirect('c_ManageProject');
	}

	public function deleteProject($id){
		$this->db->query("DELETE FROM project where ID_Project='$id'");
		redirect('c_ManageProject');
	}

	public function berjalan(){
		$data['blm']=$this->getBlmSelesai()->result();
		$this->load->view('/user/user-projectberjalan', $data);
	}

	public function projectSelesai(){
		$data['selesai']=$this->m_project->getSelesai()->result();
		$this->load->view('/user/user-projectselesai', $data);
	}

	public function halamanProject($id){
		$this->db->where('ID_Project', $id);
		$data['proj']=$this->getProjectList()->result();
		$this->load->view('/user/user-halamanproject', $data);
	}

	public function halamanUtama(){
		$data['berjalan']=$this->m_project->getLimBlmSelesai(5);
		$data['selesai']=$this->m_project->getLimSelesai(5);
		$this->load->view('/user/index', $data);
	}
}
/* End of file c_ManageProject.php */
/* Location: ./application/controllers/c_ManageProject.php */
