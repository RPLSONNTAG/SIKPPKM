<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_project extends CI_Model {

	public function getInfo($id){
		return $this->db->query("SELECT isi FROM Project where ID_Project='$id'");
	}

	public function addVote($id){
		$value=$this->db->query("SELECT Satisfaction FROM Project where ID_Project='$id'");
		$value += 1;
		$this->db->query("UPDATE Project SET Satisfaction=$value where='$id'");
	}

	public function addPriority(){}

	public function addKomentar($id, $komentar, $user){
		$query=$this->db->query("INSERT INTO Komentar values('$id','$komentar','$user')");
	}

	public function addReport($id, $report, $user){
		$query=$this->db->query("INSERT INTO Report values('$id','$report','Pending','$user')");

	}

	public function getProgress(){}
	
	public function newProject(){
		$query=$this->db->query("INSERT INTO Project values('','','')");
	}

}

/* End of file m_project.php */
/* Location: ./application/models/m_project.php */