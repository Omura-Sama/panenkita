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
        $this->load->view('admin/tambahkategori');
    }
    public function tambahpetani()
    {
        $this->load->view('admin/tambahpetani');
    }
    public function kelolapetani()
    {
        $this->load->view('admin/kelola_petani');
    }
    public function tambahproduk()
    {
        $data['listpetani'] = $this->M_petani->getListPetani();
        $data['listkategori'] = $this->M_kategori->getListKategori();
        $this->load->view('admin/tambahproduk', $data);
    }

    public function insertProduk()
    {
        $dataProduk = array(
            'nama_produk' => $this->input->post('nama_produk'),
            'nama_petani' => $this->input->post('nama_petani'),
            'name_kategori' => $this->input->post('kategori'),
            'foto_produk' => $this->input->post('foto'),
            'tanggal_panen' => $this->input->post('tanggal'),
            'stok_produk' => $this->input->post('stok'),
            'deskripsi_produk' => $this->input->post('deskripsi'),
            'harga_produk' => $this->input->post('harga'),
        );

        // print_r($dataProduk);
        $insert = $this->M_produk->insert($dataProduk);

        // print_r($insert);

        if ($insert == 1) {
            $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! Produk berhasil ditambah. </div>');
        } else {
            $this->session->set_flashdata('notif', '<div class="alert alert-warning alert-dismissible"> Gagal! Mohon cek kembali stock. </div>');
        }

        // redirect('admin/tambahkategori');
        $this->load->view('admin/tambahproduk');
    }

    public function insertKategori()
    {
        // $nama_kategori = $this->input->post('nama_kategori');
        // $tipe_panen = $this->input->post('tipe_panen');
        // $ppn = $this->input->post('ppn');
        // $desc = $this->input->post('deskripsi');

        $dataKategori = array(
            'name_kategori' => $this->input->post('nama_kategori'),
            'tipe_panen' => $this->input->post('tipe_panen'),
            'ppn' => $this->input->post('ppn'),
            'deskripsi' => $this->input->post('deskripsi'),
        );

        $insert = $this->M_kategori->insert($dataKategori);

        // print_r($insert);

        if ($insert == 1) {
            $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! Produk berhasil ditambah. </div>');
        } else {
            $this->session->set_flashdata('notif', '<div class="alert alert-warning alert-dismissible"> Gagal! Mohon cek kembali stock. </div>');
        }

        // redirect('admin/tambahkategori');
        $this->load->view('admin/tambahkategori');
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

        // print_r($dataPetani);
        $insert = $this->M_petani->insert($dataPetani);

        // print_r($insert);

        if ($insert == 1) {
            $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! Produk berhasil ditambah. </div>');
        } else {
            $this->session->set_flashdata('notif', '<div class="alert alert-warning alert-dismissible"> Gagal! Mohon cek kembali stock. </div>');
        }

        $this->load->view('admin/tambahpetani');
    }
}
