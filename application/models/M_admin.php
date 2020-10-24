<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
	public function getPesan($unicode)
	{
		$this->db->select('*');
		$this->db->from('pesan');
		$this->db->where('unicode', $unicode);
		$this->db->order_by('id_pesan');

		$query = $this->db->get();
		return $query->result();
	}

	public function insert($dataPesan)
	{
		$query = $this->db->insert('pesan', $dataPesan);
		if ($this->db->affected_rows() > 0) {
			return true; // to the controller
		}
	}
}
