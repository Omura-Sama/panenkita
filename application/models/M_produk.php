<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class M_produk extends CI_Model
{
	private $_table = "produk";

	public function insert($dataProduk)
	{
        $query = $this->db->insert($this->_table,$dataProduk);
        if($this->db->affected_rows() > 0)
		{
		    // Code here after successful insert
		    return true; // to the controller
		}
	}
	
	public function getListProduk()
	{
		$this->db->select('*');
		$this->db->from($this->_table);

		$query = $this->db->get();
		return $query->result();
	}

	public function getProdukTrans($id)
	{
		$this->db->select('*');
        $this->db->from($this->_table);
        $this->db->join('pemasukan', 'pemasukan.id_petani = produk.id_petani','left');
        $this->db->join('transaksi', 'transaksi.id_petani = produk.id_petani','left');
        $this->db->join('pembelian', 'pembelian.id_petani = produk.id_petani','left');
        $this->db->join('kategori', 'kategori.id_kategori = produk.id_kategori','left');
        $this->db->where('produk.id_produk =',$id);

        $query = $this->db->get();
        return $query->result();
	}
}

 ?>