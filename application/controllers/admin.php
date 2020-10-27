<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('M_kategori', 'M_petani', 'M_produk', 'M_admin'));
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
        $this->load->view('admin/index');
    }

    public function daftar()
    {
        $this->load->view('admin/daftar');
    }
    public function listpesan()
    {
        // die(print_r($this->session->userdata()));
        $user = $this->session->userdata('user');
        $data['isipesan'] = $this->M_admin->getIsiPesan($user);
        $this->load->view('pesan/listpesan', $data);
    }
    public function isipesan()
    {
        $data['pengirim'] = $_GET['pengirim'];
        $data['tanggal'] = $_GET['tanggal'];
        $data['unicode'] = $_GET['unicode'];
        $data['pesan'] = $this->M_admin->getPesan($_GET['unicode']);
        $this->load->view('pesan/isipesan', $data);
    }
    public function insertPesan()
    {
        $dataPesan = array(
            'unicode' => $this->input->post('unicode'),
            'penerima' => $this->input->post('penerima'),
            'pengirim' => $this->input->post('pengirim'),
            'isi_pesan' => $this->input->post('isi_pesan'),
            'tanggal_pesan' => date('Y-m-d H:i:s'),
        );

        $this->M_admin->insert($dataPesan);

        $data['pengirim'] = $this->input->post('pengirim');
        $data['tanggal'] = date('Y-m-d H:i:s');
        $data['unicode'] = $this->input->post('unicode');
        $data['pesan'] = $this->M_admin->getPesan($this->input->post('unicode'));

        $this->load->view('pesan/isipesan', $data);
    }
    public function tambahkategori()
    {
        $data['kategori'] = '';
        if ($_GET) {
            $data['kategori'] = $this->M_admin->getKategori($_GET['id']);
        }
        $this->load->view('admin/tambahkategori', $data);
    }
    public function tambahpetani()
    {
        $data['petani'] = '';
        if ($_GET) {
            $data['petani'] = $this->M_petani->getPetani($_GET['id_petani']);
        }
        $this->load->view('admin/tambahpetani', $data);
    }
    public function kelolapetani()
    {
        $data['listpetani'] = $this->M_admin->getAllpetani();
        $this->load->view('admin/kelola_petani', $data);
    }
    public function kelolaproduk()
    {
        $data['listproduk'] = $this->M_admin->getAllproduk();
        $this->load->view('admin/kelola_produk', $data);
    }
    public function kelolakategori()
    {
        $data['listkategori'] = $this->M_admin->getAllkategori();
        $this->load->view('admin/kelola_kategori', $data);
    }

    public function kelolatransaksi()
    {
        $data['listtransaksi'] = $this->M_admin->getAlltransaksi();
        $this->load->view('admin/kelola_transaksi', $data);
    }

    public function tambahproduk()
    {
        $data['listpetani'] = $this->M_petani->getListPetani();
        $data['listkategori'] = $this->M_kategori->getListKategori();
        $data['produk'] = '';
        if ($_GET) {
            $data['produk'] = $this->M_admin->getProduk($_GET['id_produk']);
        }
        $this->load->view('admin/tambahproduk', $data);
    }

    public function insertProduk()
    {
        $dataProduk = array(
            'nama_produk' => $this->input->post('nama_produk'),
            'nama_petani' => $this->input->post('nama_petani'),
            'nama_kategori' => $this->input->post('kategori'),
            'foto_produk' => $this->input->post('foto'),
            'tanggal_panen' => $this->input->post('tanggal'),
            'stok_produk' => $this->input->post('stok'),
            'deskripsi_produk' => $this->input->post('deskripsi'),
            'harga_produk' => $this->input->post('harga'),
        );

        if ($this->input->post('id')) {
            $insert = $this->M_produk->update($this->input->post('id'), $dataProduk);
            $text = 'diubah';
        } else {
            $insert = $this->M_produk->insert($dataProduk);
            $text = 'ditambah';
        }

        if ($insert) {
            $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! Produk berhasil ' . $text . '. </div>');
        } else {
            $this->session->set_flashdata('notif', '<div class="alert alert-warning alert-dismissible"> Gagal! Mohon cek kembali stock. </div>');
        }

        $data['listpetani'] = $this->M_petani->getListPetani();
        $data['listkategori'] = $this->M_kategori->getListKategori();
        $data['produk'] = '';
        // redirect('admin/tambahkategori');
        $this->load->view('admin/tambahproduk', $data);
    }

    public function insertKategori()
    {
        // $nama_kategori = $this->input->post('nama_kategori');
        // $tipe_panen = $this->input->post('tipe_panen');
        // $ppn = $this->input->post('ppn');
        // $desc = $this->input->post('deskripsi');

        $dataKategori = array(
            'nama_kategori' => $this->input->post('nama_kategori'),
            'tipe_panen' => $this->input->post('tipe_panen'),
            'ppn' => $this->input->post('ppn'),
            'deskripsi' => $this->input->post('deskripsi'),
        );
        if ($this->input->post('id')) {
            $insert = $this->M_kategori->update($this->input->post('id'), $dataKategori);
            $text = 'diubah';
        } else {
            $insert = $this->M_kategori->insert($dataKategori);
            $text = 'ditambah';
        }

        if ($insert) {
            $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! Produk berhasil ' . $text . '. </div>');
        } else {
            $this->session->set_flashdata('notif', '<div class="alert alert-warning alert-dismissible"> Gagal! Mohon cek kembali stock. </div>');
        }

        $data['kategori'] = '';
        $this->load->view('admin/tambahkategori', $data);
    }

    public function insertPetani()
    {
        $day = $this->input->post('hari');
        $month = $this->input->post('bulan');
        $year = $this->input->post('tahun');

        $date = $year . "-" . $month . "-" . $day;

        $dataPetani = array(
            'nama_petani' => $this->input->post('nama_petani'),
            'nik_petani' => $this->input->post('nik'),
            'email_petani' => $this->input->post('email'),
            'password_petani' => $this->input->post('password'),
            'tanggal_lahir_petani' => $date,
            'alamat_petani' => $this->input->post('alamat'),
            'kontak_petani' => $this->input->post('kontak'),
            'foto_petani' => $this->input->post('foto'),
        );

        if ($this->input->post('id')) {
            $insert = $this->M_petani->update($this->input->post('id'), $dataPetani);
            $text = 'diubah';
        } else {
            $insert = $this->M_petani->insert($dataPetani);
            $text = 'ditambah';
        }


        // print_r($insert);

        if ($insert == 1) {
            $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! Produk berhasil ' . $text . '. </div>');
        } else {
            $this->session->set_flashdata('notif', '<div class="alert alert-warning alert-dismissible"> Gagal! Mohon cek kembali stock. </div>');
        }

        $data['petani'] = '';
        $this->load->view('admin/tambahpetani', $data);
    }

    public function deleteKategori()
    {
        $this->M_kategori->delete($_GET['id_kategori']);
        $data['listkategori'] = $this->M_admin->getAllkategori();
        $this->load->view('admin/kelola_kategori', $data);
    }

    public function deletePetani()
    {
        $this->M_petani->delete($_GET['id_petani']);
        $data['listpetani'] = $this->M_admin->getAllpetani();
        $this->load->view('admin/kelola_petani', $data);
    }

    public function deleteProduk()
    {
        $this->M_produk->delete($_GET['id_produk']);
        $data['listproduk'] = $this->M_admin->getAllproduk();
        $this->load->view('admin/kelola_produk', $data);
    }
}
