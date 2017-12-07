<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_usulan extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

	public function usulan($username, $judul, $isi){
		$query=$this->db->query("INSERT INTO usulan values('','$username','$judul','$isi',0, 'pending')");
	}

	public function addPriority($id){
		//get priority
		$this->db->select('vote');
		$this->db->where('id_usulan', $id);
		$query = $this->db->get('usulan');
		$tmp = $query->result();
		$val = $tmp[0];
		$priority = $val->vote;
		$priority = $priority+1;
		//add priority
		$query=$this->db->query("UPDATE usulan SET vote=$priority where id_usulan='$id'");
	}

	public function approve($id){
		$query=$this->db->query("UPDATE usulan SET status='approve' where id_usulan='$id' ");
	}
}
/* End of file m_usulan.php */
/* Location: ./application/models/m_usulan.php */