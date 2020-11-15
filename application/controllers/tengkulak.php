<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tengkulak extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('M_admin', 'M_kategori', 'M_petani', 'M_produk', 'M_tengkulak'));
    }

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $idUser = $this->session->userdata('iduser');
        // echo $idUser;
        $data['userData'] = $this->M_tengkulak->getTengkulakBio($idUser);

        // print_r($getBio);
        // echo $idUser;
        $this->load->view('web/tengkulak', $data);
    }

    public function akunSaya()
    {
        $idUser = $this->session->userdata('iduser');
        $data['userData'] = $this->M_tengkulak->getTengkulakBio($idUser);

        // print_r($getBio);
        // echo $idUser;
        $this->load->view('web/tengkulak', $data);
    }

    public function hasilCari()
    {
        // $id = $this->uri->segment(3);
        $cari = $this->input->post('cari');
        $data["produk"] = $this->M_tengkulak->getProduk($cari);

        // print_r($data1);

        $this->load->view('tengkulak/halaman_produk', $data);
    }

    public function simpanproduk()
    {
        $id = $this->uri->segment(3);
        $idUser = $this->session->userdata('iduser');
        $dataTengkulak = $this->M_tengkulak->getTengkulakBio($idUser);
        foreach ($dataTengkulak as $key ) {
            $id_tengkulak = $key->id_tengkulak;
        }
        // echo $id_tengkulak;

        $dataSimpan = array(
            'id_produk' => $id,
            'id_tengkulak' => $id_tengkulak
        );
        // print_r($dataTengkulak);

        $cekdata = $this->M_tengkulak->cekSimpan($id,$id_tengkulak);

        if ($cekdata->num_rows() > 0) {
            echo $this->session->set_flashdata('msg', '<span class="badge badge-warning">Data Sudah Tersimpan</span>');
            
        }else{
            $this->M_tengkulak->insertSimpan($dataSimpan);
            echo $this->session->set_flashdata('msg', '<span class="badge badge-success">Data Berhasil Tersimpan</span>');

        }
        
        $data["produkDetail"] = $this->M_tengkulak->getDetailProduk($id);
        $this->load->view('tengkulak/informasibarang', $data);
    }
    public function informasibarang()
    {
        $id = $this->uri->segment(3);
        $data["produkDetail"] = $this->M_tengkulak->getDetailProduk($id);

        $this->load->view('tengkulak/informasibarang', $data);
    }
    public function pemberitahuan()
    {
        $idUser = $this->session->userdata('iduser');
            $data["produkDetail"] = $this->M_tengkulak->getProdukid($idUser);
            // $data["produkDetail"] = $this->M_tengkulak->userTransaksi($idUser);
        
        $this->load->view('tengkulak/pemberitahuan',$data);
    }
    public function cekpemberitahuan()
    {
        $id = $this->uri->segment(3);
        $idUser = $this->session->userdata('iduser');
        $data["produkDetail"] = $this->M_tengkulak->getDetailTransaksi($id);
        $data['userData'] = $this->M_tengkulak->getTengkulakBio($idUser);

        $this->load->view('tengkulak/cekpemberitahuan',$data);
    }

    public function tersimpan()
    {
        $idUser = $this->session->userdata('iduser');
        $data["produkDetail"] = $this->M_tengkulak->getProdukIdByUser($idUser);
        // $data["produkDetail"] = $this->M_tengkulak->getProdukIdByUserOnly($idUser);
        
        $this->load->view('tengkulak/tersimpan',$data);
    }
    public function keranjang()
    {
        $kodeP = $this->input->post('kode_produk');
        $metodeTrans = $this->input->post('metode');
        $tengkulakID = $this->input->post('idTengkulak');
        $petaniID = $this->input->post('idPetani');
        $qtyProduk = $this->input->post('qtyProduk');
        $harga = $this->input->post('price');

        // echo $kodeP;
        // echo $tengkulakID;
        // echo $qtyProduk;
        // echo $harga;
        
        if ($metodeTrans != '') {

            $dataTransaksi = array(
                'id_tengkulak' => $tengkulakID,
                'id_petani' => $petaniID,
                'metode_transaksi' => $metodeTrans,
                'status' => 0,
            );
            
            $this->M_tengkulak->insertTrans($dataTransaksi);
    
            $dataUpStok = array(
                'stok_produk' => 0
            );
            $this->db->where('id_produk =', $kodeP);
            $this->db->update('produk', $dataUpStok);

            $getIDtrasn = $this->M_tengkulak->getIdTrans($tengkulakID,$petaniID,$metodeTrans);

            foreach ($getIDtrasn as $key) {
                $idTransaksi = $key->id_transaksi;
            }
    
            $dataPembelian = array(
                'kuantiti_pembelian' => $qtyProduk,
                'id_petani' => $petaniID,
                'id_tengkulak' => $tengkulakID,
                'id_transaksi' => $idTransaksi,
            );

            print_r($dataPembelian);
            
            $this->M_tengkulak->insertSales($dataPembelian);
    
            $dataPemasukan = array(
                'keuntungan' => $harga,
                'id_petani' => $petaniID,
            );

            // print_r($dataPemasukan);
            
            $this->M_tengkulak->insertIncome($dataPemasukan);

            $data["produkDetail"] = $this->M_tengkulak->getDetailTransaksi($kodeP);

        } else {
            // echo $id;
            $idUser = $this->session->userdata('iduser');
            $data["produkDetail"] = $this->M_tengkulak->getProdukid($idUser);
            // print_r($this->session->userdata);
            // print_r($this->M_tengkulak->getProdukid($idUser));
        }
        
      

        $this->load->view('tengkulak/keranjang', $data);
    }
    public function pembelian()
    {
        $id = $this->uri->segment(3);
        $idUser = $this->session->userdata('iduser');
        
        // echo $id;
        // echo $idUser;

        $data["produkDetail"] = $this->M_tengkulak->getDetailTransaksi($id);
        $data['userData'] = $this->M_tengkulak->getTengkulakBio($idUser);

        $this->load->view('tengkulak/pembelian', $data);
    }
    public function statuspembelian()
    {
        $id = $this->uri->segment(3);
        $idUser = $this->session->userdata('iduser');

        // $data["produkDetail"] = $this->M_tengkulak->getDetailProduk($id);
        // $data["produktransaksi"] = $this->M_tengkulak->getDetailTransaksi($id);
        $data["produkDetail"] = $this->M_tengkulak->getDetailTransaksi($id);
        // $data["produkDetail"] = $this->M_tengkulak->getDetailProduk($id);
        $data['userData'] = $this->M_tengkulak->getTengkulakBio($idUser);
        // echo $id;

        $this->load->view('tengkulak/statuspembelian', $data);
    }
    public function transaksiproduk()
    {
        $id = $this->uri->segment(3);
        $idUser = $this->session->userdata('iduser');
        
        $data["produkDetail"] = $this->M_tengkulak->getDetailProduk($id);
        $data['userData'] = $this->M_tengkulak->getTengkulakBio($idUser);

        $this->load->view('tengkulak/transaksiproduk', $data);
    }
    public function detailtransaksi()
    {
        $this->load->view('tengkulak/detailtransaksi');
    }

    public function riwayattransaksi()
    {
        $this->load->view('tengkulak/riwayattransaksi');
    }
    public function kirimpesan()
    {
        $this->load->view('pesan/kirimpesan');
    }


    public function edit()
    {
        // print_r($_POST);
        if (isset($_POST['submit'])) {

            $id = $this->input->post('idUser');
            $namaDepan = $this->input->post('namaDepan');
            $namaBelakang = $this->input->post('namaBelakang');
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $tlpn = $this->input->post('telepon');
            $alamat = $this->input->post('alamat');
            $day = $this->input->post('hari');
            $mth = $this->input->post('bulan');
            $year = $this->input->post('tahun');

            $dateL = $year . "-" . $mth . "-" . $day;

            // echo $id;
            // echo "<br>";
            // echo $namaDepan;
            // echo "<br>";
            // echo $namaBelakang;
            // echo "<br>";
            // echo $email;
            // echo "<br>";
            // echo $password;
            // echo "<br>";
            // echo $tlpn;
            // echo "<br>";
            // echo $alamat;
            // echo "<br>";


            // print_r($dataInCab);
            // echo $id;
            // echo $namaCab;
            // echo $alamat;
            // echo $no_tlp_cab;
            // echo $pic;
            $updateT = $this->M_tengkulak->setTengkulak($id, $namaDepan, $namaBelakang, $tlpn, $alamat, $dateL);
            $updateU = $this->M_tengkulak->setUser($id, $email, $password);


            // print_r($update);

            if ($updateT && $updateU) {
                $this->session->set_flashdata('hasil', 'Update Data Berhasil');
            } else {
                $this->session->set_flashdata('hasil', 'Update Data Gagal');
            }
            redirect('tengkulak/index');
        } else {

            $id = $this->uri->segment(3);
            // echo $id;
            $data["dataUser"] = $this->M_tengkulak->getTengkulakBio($id);
            // echo $id;

            // print_r($data)

            // $data['dataitem'] = $query->row();

            // if (!$data["dataitem"]) show_404();

            $this->load->view('tengkulak/kelola_akun', $data);
        }
    }
    public function listpesan()
    {
        $jenis = $_GET['jenis'];
        $data['isipesan'] = $this->M_admin->getIsiPesan($jenis, $this->session->userdata('iduser'));
        $this->load->view('layout/header');
        $this->load->view('layout/navbar_tengkulak');
        $this->load->view('pesan/listpesan', $data);
        $this->load->view('layout/footer');
    }
    public function isipesan()
    {
        $data['pengirim'] = $_GET['pengirim'];
        $data['tanggal'] = $_GET['tanggal'];
        $data['unicode'] = $_GET['unicode'];
        $data['pesan'] = $this->M_admin->getPesan($_GET['unicode']);
        $this->load->view('layout/header');
        $this->load->view('layout/navbar_tengkulak');
        $this->load->view('pesan/isipesan', $data);
        $this->load->view('layout/footer');
    }
}
