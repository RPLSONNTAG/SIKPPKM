<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_admin extends CI_Model {

	public function __construct(){
		
	}
	
	public function isValid($username, $password){
		$where = array(
						'username' => $username,
						'password' => $password
					  );
		//get data
		$dataReader=$this->db->get_where('admin',$where)->num_rows();
		if($dataReader>0){
			return true;
		} else {
			return false;
		}
	}

	public function addAdmin($username, $password){
		$query=$this->db->query("INSERT INTO admin values('', '$username','$password')");
	}
	public function editAdmin($id, $username, $password){
		$query=$this->db->query("UPDATE admin SET username='$username' AND password='$password' where id='$id')");
	}
	public function delAdmin($id){
		$query=$this->db->query("DELETE FROM admin where username='$id'");
	}
}

/* End of file m_admin.php */
/* Location: ./application/models/m_admin.php */