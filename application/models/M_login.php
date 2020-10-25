<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class M_login extends CI_Model
{
	public function validate($email,$password)
	{
		$this->db->where('username',$email);
		$this->db->where('password', $password);
		$result = $this->db->get('user');
		return $result;
	}

	public function cekEmail($email)
	{
		$this->db->where('username',$email);
		$result = $this->db->get('user');
		return $result->row();
	}

	function insertUser($dataInCab){
        $query = $this->db->insert("user",$dataInCab);

        // return $this->db->insert_id();// return last insert id
  	}

  	function insertEmp($dataInCab){
        $query = $this->db->insert("m_karyawan",$dataInCab);

        // return $this->db->insert_id();// return last insert id
  	}
	
}

 ?>