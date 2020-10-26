<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * 
 */
class M_kategori extends CI_Model
{
	private $_table = "kategori";

	public function insert($dataKategori)
	{
		$query = $this->db->insert($this->_table, $dataKategori);
		if ($this->db->affected_rows() > 0) {
			return true; // to the controller
		}
	}

	public function update($id, $dataKategori)
	{
		$this->db->where('id_kategori', $id);
		$this->db->update($this->_table, $dataKategori);
		if ($this->db->affected_rows() > 0) {
			return true; // to the controller
		}
	}

	public function delete($id)
	{
		$this->db->where('id_kategori', $id);
		$this->db->delete('kategori');
	}

	public function getListKategori()
	{
		$this->db->select('*');
		$this->db->from($this->_table);

		$query = $this->db->get();
		return $query->result();
	}
}
