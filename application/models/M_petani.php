<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * 
 */
class M_petani extends CI_Model
{
	private $_table = "petani";

	public function insert($dataPetani)
	{
		$query = $this->db->insert($this->_table, $dataPetani);
		if ($this->db->affected_rows() > 0) {
			// Code here after successful insert
			return true; // to the controller
		}
	}

	public function update($id, $dataPetani)
	{
		$this->db->where('id_petani', $id);
		$this->db->update($this->_table, $dataPetani);
		if ($this->db->affected_rows() > 0) {
			return true; // to the controller
		}
	}

	public function delete($id)
	{
		$this->db->where('id_petani', $id);
		$this->db->delete($this->_table);
	}

	public function getPetani($id)
	{
		$this->db->select('*');
		$this->db->from($this->_table);
		$this->db->where('id_petani', $id);

		$query = $this->db->get();
		return $query->result();
	}

	public function getListPetani()
	{
		$this->db->select('*');
		$this->db->from($this->_table);

		$query = $this->db->get();
		return $query->result();
	}

	public function getPetaniBio($idUser)
	{
		$this->db->select('*');
		$this->db->from($this->_table);
		$this->db->join('user', 'user.id_user = petani.id_user', 'left');
		$this->db->where('user.id_user =', $idUser);

		$query = $this->db->get();
		return $query->result();
	}

	public function setPetani($id, $namaDepan, $namaBelakang, $tlpn, $alamat, $dateL)
	{
		//Cabang
		// echo $key;
		$query =
			$this->db->set('nama_depan_petani', $namaDepan);
		$this->db->set('nama_belakang_petani', $namaBelakang);
		$this->db->set('tanggal_lahir_petani', $dateL);
		$this->db->set('alamat_petani', $alamat);
		$this->db->set('kontak_petani', $tlpn);
		// $this->db->set('foto_petani',$pic);
		$this->db->where('id_user', $id);

		$this->db->update('petani');
		return $query;
	}

	public function setUser($id, $email, $password)
	{
		$query =
			$this->db->set('email', $email);
		$this->db->set('password', $password);

		// $this->db->set('foto_tengkulak',$pic);
		$this->db->where('id_user', $id);

		$this->db->update('user');
		return $query;
	}

	public function getProdTani($idUser)
	{
		$this->db->select('*');
		$this->db->from($this->_table);
		$this->db->join('produk', 'produk.id_petani = petani.id_petani', 'left');
		// $this->db->join('pemasukan', 'pemasukan.id_petani = petani.id_petani', 'left');
		// $this->db->where('petani.id_user =', $idUser);
		$query = $this->db->get();
		return $query->result();
	}

	public function getIncomePetani($idUser)
	{
		$this->db->select('*');
		$this->db->from($this->_table);
		$this->db->join('produk', 'produk.id_petani = petani.id_petani', 'left');
		$this->db->join('pemasukan', 'pemasukan.id_petani = petani.id_petani', 'left');
		$this->db->where('petani.id_user =', $idUser);

		$query = $this->db->get();
		return $query->result();
	}
}
