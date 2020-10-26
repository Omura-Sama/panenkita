<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * 
 */
class M_admin extends CI_Model
{
	public function getAllpetani()
	{
		$this->db->select('*');
		$this->db->from('petani');

		$query = $this->db->get();
		return $query->result();
	}

	public function getAllkategori()
	{
		$this->db->select('*');
		$this->db->from('kategori');

		$query = $this->db->get();
		return $query->result();
	}

	public function getAlltransaksi()
	{
		$this->db->select('*');
		$this->db->from('transaksi');

		$query = $this->db->get();
		return $query->result();
	}

	public function getAllproduk()
	{
		$this->db->select('*');
		$this->db->from('produk');

		$query = $this->db->get();
		return $query->result();
	}

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
    
	public function getKategori($id)
	{
		$this->db->select('*');
		$this->db->from('kategori');
		$this->db->where('id_kategori', $id);

		$query = $this->db->get();
		return $query->result();
	}
}