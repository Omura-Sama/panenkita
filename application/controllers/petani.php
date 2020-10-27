<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Petani extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('M_kategori', 'M_petani', 'M_produk'));
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
        // print_r($this->session->userdata);
        $this->load->view('web/petani');
    }

    public function akunSaya()
    {
        // print_r($this->session->userdata);
        $idUser = $this->session->userdata('iduser');

        $data['userData'] = $this->M_petani->getPetaniBio($idUser);
        // $tes = $this->M_petani->getPetaniBio($idUser);
        // print_r($idUser);

        $this->load->view('petani/akun_saya', $data);
    }

    public function editPetani()
    {
        $this->load->view('petani/editpetani');
    }
    public function produkAnda()
    {
        $this->load->view('petani/produk_anda');
    }

    public function halPenghasilan()
    {
        $idUser = $this->session->userdata('iduser');

        $data['incomeP'] = $this->M_petani->getIncomePetani($idUser);
        $this->load->view('petani/halaman_penghasilan', $data);
    }

    public function statPenghasilan()
    {
        // $data['incomeP'] = $this->M_petani->getIncomePetani();
        $id = $this->uri->segment(3);

        $data['detailPeng'] = $this->M_produk->getProdukTrans($id);

        $this->load->view('petani/status_penghasilan', $data);
    }

    public function detailPenghasilan()
    {
        // $data['incomeP'] = $this->M_petani->getIncomePetani();
        $this->load->view('petani/penghasilan');
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
            'nama_kategori' => $this->input->post('kategori'),
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
            'nama_kategori' => $this->input->post('nama_kategori'),
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
            $updateT = $this->M_petani->setPetani($id, $namaDepan, $namaBelakang, $tlpn, $alamat, $dateL);
            $updateU = $this->M_petani->setUser($id, $email, $password);

            // $this->M_masterdata->insertCab($dataInCab);

            // print_r($update);

            if ($updateT && $updateU) {
                $this->session->set_flashdata('hasil', 'Update Data Berhasil');
            } else {
                $this->session->set_flashdata('hasil', 'Update Data Gagal');
            }
            redirect('petani/akunSaya');
        } else {

            $id = $this->uri->segment(3);
            // echo $id;
            $data["dataUser"] = $this->M_petani->getPetaniBio($id);
            // echo $id;

            // print_r($data)

            // $data['dataitem'] = $query->row();

            // if (!$data["dataitem"]) show_404();

            $this->load->view('petani/kelola_akun', $data);
        }
    }
}
