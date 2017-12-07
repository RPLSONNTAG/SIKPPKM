<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_user extends CI_Model {
	
	public function __construct(){
		
	}

	public function isValid($username, $password){
		$where = array(
						'username' => $username,
						'password' => $password
				 	  );
		$dataR = $this->db->get_where('user', $where)->num_rows();
		if($dataR>0){
			return true;
		} else {
			return false;
		}
	}

	public function validPass($username, $password){
		$where = array(
						'username' => $username,
						'password' => $password
				 	  );
		$dataR = $this->db->get_where('user', $where)->num_rows();
		if($dataR>0){
			return true;
		} else {
			return false;
		}
	}

	public function data($username, $password){
		$where = array(
						'username' => $username,
						'password' => $password
				);
		return $this->db->get_where('user', $where)->result();
	}

	public function setPassword($username ,$password){
		$query=$this->db->query("UPDATE user SET password='$password' where username='$username'");
	}

	public function getUsername($id){
		$query=$this->db->query("SELECT username FROM TABLE user where ID='$id'");
	}

	public function delUser($username){
		$query=$this->db->query("DELETE FROM user where username='$username'");
	}

	public function addUser($username, $password, $email, $noTelp, $NIK){
		$query=$this->db->query("INSERT INTO user values('$username','$password','$email', '$noTelp', '$NIK')");
	}
}

/* End of file m_user.php */
/* Location: ./application/models/m_user.php */