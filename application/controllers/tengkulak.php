<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tengkulak extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('M_kategori', 'M_petani', 'M_produk', 'M_tengkulak'));
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
        $this->load->view('web/tengkulak',$data);
    }
    public function informasibarang()
    {
        $this->load->view('tengkulak/informasibarang');
    }
    public function pemberitahuan()
    {
        $this->load->view('tengkulak/pemberitahuan');
    }
    public function cekpemberitahuan()
    {
        $this->load->view('tengkulak/cekpemberitahuan');
    }
    public function keranjang()
    {
        $this->load->view('tengkulak/keranjang');
    }
    public function pembelian()
    {
        $this->load->view('tengkulak/pembelian');
    }
    public function statuspembelian()
    {
        $this->load->view('tengkulak/statuspembelian');
    }
    public function transaksiproduk()
    {
        $this->load->view('tengkulak/transaksiproduk');
    }
    public function detailtransaksi()
    {
        $this->load->view('tengkulak/detailtransaksi');
    }

    public function edit()
    {
        // print_r($_POST);
        if(isset($_POST['submit'])){

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

            $dateL = $year."-".$mth."-".$day;

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
        $updateT = $this->M_tengkulak->setTengkulak($id,$namaDepan,$namaBelakang,$tlpn,$alamat,$dateL);
        $updateU = $this->M_tengkulak->setUser($id,$email,$password);
           
           // $this->M_masterdata->insertCab($dataInCab);

        // print_r($update);

        if($updateT && $updateU)
        {
            $this->session->set_flashdata('hasil','Update Data Berhasil');
        }else
        {
           $this->session->set_flashdata('hasil','Update Data Gagal');
        }
        redirect('tengkulak/index');
    }else{

        $id = $this->uri->segment(3);
        // echo $id;
        $data["dataUser"] = $this->M_tengkulak->getTengkulakBio($id);
        // echo $id;

        // print_r($data)

        // $data['dataitem'] = $query->row();

        // if (!$data["dataitem"]) show_404();

        $this->load->view('tengkulak/kelola_akun',$data);
    }
       
    }
}
