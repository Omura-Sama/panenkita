<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class M_admin extends CI_Model
{
	
	public function getIsiPesan($penerima)
	{
		$this->db->select('*');
        $this->db->from('pesan');
        $this->db->where('penerima', $penerima);
        $this->db->group_by('pengirim');

		$query = $this->db->get();
		return $query->result();
	}
}

 ?>