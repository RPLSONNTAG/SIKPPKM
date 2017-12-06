<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_project extends CI_Model {

	public function __construct(){

	}

	public function getInfo($id){
		return $this->db->query("SELECT isi FROM Project where ID_Project='$id'");
	}

	public function addSatisfaction($id){
		//get vote
		$this->db->select('satisfaction');
		$this->db->where('ID_Project', $id);
		$query = $this->db->get('project');
		$tmp = $query->result();
		$val = $tmp[0];
		$satisfaction = $val->satisfaction;
		$satisfaction =$satisfaction+1;
		//add vote
		$query=$this->db->query("UPDATE project SET satisfaction=$satisfaction where ID_Project='$id'");
	}

	public function addPriority($id){
		//get priority
		$this->db->select('priority');
		$this->db->where('ID_Project', $id);
		$query = $this->db->get('project');
		$tmp = $query->result();
		$val = $tmp[0];
		$priority = $val->priority;
		$priority = $priority+1;
		//add priority
		$query=$this->db->query("UPDATE project SET priority=$priority where ID_Project='$id'");
	}

	public function addKomentar($id, $komentar, $username){
		$query=$this->db->query("INSERT INTO komentar values('','$komentar','$username','$id')");
	}

	public function addReport($id, $report, $user){
		$query=$this->db->query("INSERT INTO report values('','$report','pending','$user','$id')");
	}

	public function getBlmSelesai(){
		return $this->db->query('SELECT*FROM project where progress < 100');
	}

	public function getProgress(){}
	
	public function newProject($id, $judul, $isi){
		$query=$this->db->query("INSERT INTO project values('$id','$judul','$isi',0,0,0)");
	}

	public function delProject($id){
		$query=$this->db->query("DELETE FROM project where ID_Project='$id'");
	}

}

/* End of file m_project.php */
/* Location: ./application/models/m_project.php */