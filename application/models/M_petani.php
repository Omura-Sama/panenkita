<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class M_petani extends CI_Model
{
	private $_table = "petani";

	public function insert($dataPetani)
	{
        $query = $this->db->insert($this->_table,$dataPetani);
        if($this->db->affected_rows() > 0)
		{
		    // Code here after successful insert
		    return true; // to the controller
		}
	}

	public function getListPetani()
	{
		$this->db->select('*');
		$this->db->from($this->_table);

		$query = $this->db->get();
		return $query->result();
	}

	public function getIncomePetani()
	{
		# code...
	}
	
}

 ?>