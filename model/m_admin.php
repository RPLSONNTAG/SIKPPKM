<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_admin extends CI_Model {

	public function isValid($id,$password)
	{
		$this->db->where('username', $id);
		$this->db->where('password', $password);
		$dataReader=$this->db->get('admin');
		$dataReader = $dataReader->num_rows();
		if($dataReader>0){
			return true;
		} else {
			return false;
		}
	}

	public function addAdmin($id, $nama, $password){
		$query=$this->db->query("INSERT INTO Admin values('$id','$nama','$password')");
	}
	public function editAdmin(){
		$query=$this->db->query("UPDATE TABLE Admin SET where");
	}
	public function delAdmin($id){
		$query=$this->db->query("DELETE FROM Admin where ID='$id'");
	}
}

/* End of file M_login.php */
/* Location: ./application/models/m_admin.php */
