<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tengkulak extends CI_Controller
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
        $this->load->view('web/tengkulak');
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
}
