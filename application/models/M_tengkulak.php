<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class M_tengkulak extends CI_Model
{
	private $_table = "tengkulak";
	private $_tableProd = "produk";

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

	public function getTengkulakBio($idUser)
	{
        $this->db->select('*');
        $this->db->from($this->_table);
        $this->db->join('user', 'user.id_user = tengkulak.id_user','left');
        $this->db->join('transaksi', 'transaksi.id_tengkulak = tengkulak.id_tengkulak','left');
		$this->db->where('user.id_user =',$idUser);
		$this->db->limit(1);

        $query = $this->db->get();
        return $query->result();
    }
    
    public function setTengkulak($id,$namaDepan,$namaBelakang,$tlpn,$alamat,$dateL){
		//Cabang
			// echo $key;
			$query=
			$this->db->set('nama_depan_tengkulak',$namaDepan);
			$this->db->set('nama_belakang_tengkulak',$namaBelakang);
			$this->db->set('tanggal_lahir_tengkulak',$dateL);
			$this->db->set('alamat_tengkulak',$alamat);
			$this->db->set('kontak_tengkulak',$tlpn);
			// $this->db->set('foto_tengkulak',$pic);
			$this->db->where('id_user',$id);

			$this->db->update('tengkulak');
        return $query;

		
    }
    
    public function setUser($id,$email,$password)
    {
        $query=
			$this->db->set('email',$email);
			$this->db->set('password',$password);
			
			// $this->db->set('foto_tengkulak',$pic);
			$this->db->where('id_user',$id);

			$this->db->update('user');
        return $query;
	}
	
	public function getProduk($cari)
	{
		$this->db->select('*');
        $this->db->from($this->_tableProd);
        // $this->db->join('user', 'user.id_user = tengkulak.id_user','left');
        $this->db->like('nama_produk',$cari);

        $query = $this->db->get();
        return $query->result();
	}

	public function getProdukId($idUser)
	{
		$this->db->select('*');
        $this->db->from($this->_table);
        $this->db->join('user', 'user.id_user = tengkulak.id_user','left');
        $this->db->join('transaksi', 'transaksi.id_tengkulak = tengkulak.id_tengkulak','left');
        $this->db->join('produk', 'transaksi.id_petani = produk.id_petani','left');
        $this->db->join('petani', 'petani.id_petani = produk.id_petani','left');
		$this->db->where('user.id_user',$idUser);
		// $this->db->limit(1);

        $query = $this->db->get();
        return $query->result();
	}

	public function getProdukIdByUser($idUser)
	{
		$this->db->select('*');
        $this->db->from($this->_table);
        $this->db->join('user', 'user.id_user = tengkulak.id_user','left');
        $this->db->join('transaksi', 'transaksi.id_tengkulak = tengkulak.id_tengkulak','left');
        $this->db->join('produk', 'produk.id_petani = transaksi.id_petani','left');
        $this->db->join('simpan', 'simpan.id_tengkulak = transaksi.id_tengkulak','left');
        $this->db->where('user.id_user',$idUser);

        $query = $this->db->get();
        return $query->result();
	}

	public function getProdukIdByUserOnly($idUser)
	{
		$this->db->select('*');
        $this->db->from($this->_table);
        $this->db->join('user', 'user.id_user = tengkulak.id_user','left');
        $this->db->join('transaksi', 'transaksi.id_tengkulak = tengkulak.id_tengkulak','left');
        $this->db->join('produk', 'produk.id_petani = transaksi.id_petani','left');
        $this->db->join('simpan', 'simpan.id_tengkulak = transaksi.id_tengkulak','left');
		$this->db->where('user.id_user',$idUser);
		$this->db->limit(1);

        $query = $this->db->get();
        return $query->result();
	}

	public function cekSimpan($id,$id_tengkulak)
	{
        $this->db->where('id_produk',$id);
        $this->db->where('id_tengkulak',$id_tengkulak);

		$result = $this->db->get('simpan');
		return $result;
	}

	public function userTransaksi($idUser)
	{
		$this->db->select('*');
        $this->db->from($this->_table);
        $this->db->join('user', 'user.id_user = tengkulak.id_user','left');
        $this->db->join('transaksi', 'transaksi.id_tengkulak = tengkulak.id_tengkulak','left');
        $this->db->join('pembelian', 'pembelian.id_transaksi = transaksi.id_transaksi','left');
        $this->db->join('produk', 'produk.id_petani = transaksi.id_petani','left');
        $this->db->where('user.id_user',$idUser);

        $query = $this->db->get();
        return $query->result();
	}

	function insertSimpan($dataSimpan){
        $query = $this->db->insert("simpan",$dataSimpan);

        // return $this->db->insert_id();// return last insert id
	}

	public function insertTrans($dataTransaksi)
	{
        $query = $this->db->insert("transaksi",$dataTransaksi);
		
	}

	public function insertSales($dataPembelian)
	{
        $query = $this->db->insert("pembelian",$dataPembelian);
		
	}

	public function insertIncome($dataPemasukan)
	{
        $query = $this->db->insert("pemasukan",$dataPemasukan);
		
	}	  

	public function getDetailProduk($id)
	{
		$this->db->select('*');
        $this->db->from($this->_tableProd);
        $this->db->join('petani', 'petani.id_petani = produk.id_petani','left');
		$this->db->where('id_produk',$id);
			// $this->db->like('nama_produk',$cari);

        $query = $this->db->get();
        return $query->result();
	}

	public function getIdTrans($tengkulakID,$petaniID,$metodeTrans)
	{
		$this->db->select('id_transaksi');
        $this->db->from('transaksi');
		$this->db->where('id_tengkulak',$tengkulakID);
		$this->db->where('id_petani',$petaniID);
		$this->db->where('metode_transaksi',$metodeTrans);
		$this->db->order_by('tanggal_transaksi', "desc");
		$this->db->limit(1);
			// $this->db->like('nama_produk',$cari);

        $query = $this->db->get();
        return $query->result();
	}

	public function getDetailTransaksi($id)
	{
		$this->db->select('*');
        $this->db->from($this->_tableProd);
        $this->db->join('petani', 'petani.id_petani = produk.id_petani','left');
        $this->db->join('transaksi', 'transaksi.id_petani = produk.id_petani','left');
        $this->db->join('pembelian', 'pembelian.id_transaksi = transaksi.id_transaksi','left');
		$this->db->where('transaksi.id_transaksi',$id);
		// $this->db->limit(1);

        $query = $this->db->get();
        return $query->result();
	}
	
}

 ?>