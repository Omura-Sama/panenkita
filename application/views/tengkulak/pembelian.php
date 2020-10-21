<?php $this->load->view('layout/header'); ?>
<?php $this->load->view('layout/navbar_tengkulak'); ?>

<div class="container-fluid" style="background-color:#ffffff; padding-top:80px;">
    <div class=" row">
        <div class="col-2">
        </div>
        <div class="col-8">
            <div class="card" style="border-radius: 10px;">
                <div class="row" style="padding: 10px;">
                    <div class="col-10">
                        <p style="font-size: 20px; font-weight: bold; color:#264E36;">
                            PEMBELIAN ANDA
                        </p>
                    </div>
                    <div class="col-2"><a href="<?= site_url('tengkulak/keranjang'); ?>"
                            class="btn btn-danger">Kembali</a></div>
                </div>
                <div class="card-body table-responsive" style="height: 330px;padding:0px;">
                    <table class="table table-head-fixed text-nowrap">
                        <tbody>
                            <tr>
                                <td>
                                    <h5><b>Alamat Pengiriman</b></h5>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5><b>Informasi Pembayaran</b></h5>
                                    <div class="row">
                                        <div class="col-6">
                                            <p>Pembayaran Melalui</p>
                                            <p>Kode Pembayaran</p>
                                        </div>
                                        <div class="col-6" align="right">
                                            <p>Metode Pembbayaran xxx</p>
                                            <p>Kode xxxxxx</p>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5><b>Informasi Pesanan</b></h5>
                                    <div class="row">
                                        <div class="col-6">
                                            <p>Nama Petani (Regular) xxx</p>
                                        </div>
                                        <div class="col-6" align="right">
                                            <p>Tanggal Panen xxx</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-1">
                                            <img class="imgPesan" src="<?= base_url('assets/img/pisang.jpeg'); ?>"
                                                alt="" width="80px" style="border-radius: 5px;">
                                        </div>
                                        <div class="col-6" style="padding-left:25px;">
                                            <p>Nama Produk xxx</p>
                                            <p>Rp. 0</p>
                                        </div>
                                        <div class="col-5" align="right">
                                            <p>Tanggal Panen xxx</p>
                                            <p>Tanggal Transaksi xxx</p>
                                            <p>Pesanan xxx</p>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5><b>Total Pembayaran</b></h5>
                                    <div class="row">
                                        <div class="col-6">
                                            <p>Rincian (Reguler)</p>
                                            <p>Total (Reguler)</p>
                                        </div>
                                        <div class="col-6" align="right">
                                            <p>Rp. xxx x x</p>
                                            <p>Rp. xxx x x</p>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5><b>Status Pesanan</b></h5>
                                    <div class="row">
                                        <div class="col-3">
                                            <input type="checkbox" name="proses" id="proses">
                                            <label for="proses">Status di proses</label>
                                        </div>
                                        <div class="col-3">
                                            <input type="checkbox" name="kemas" id="kemas">
                                            <label for="kemas">Status di kemas</label>
                                        </div>
                                        <div class="col-3">
                                            <input type="checkbox" name="kirim" id="kirim">
                                            <label for="kirim">Status di kirim</label>
                                        </div>
                                        <div class="col-3">
                                            <input type="checkbox" name="terima" id="terima">
                                            <label for="terima">Status di terima</label>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-9"></div>
                    <div class="col-3" style="padding: 20px;">
                        <a href="<?= site_url('tengkulak/pembelian'); ?>" class="btn btn-default">Lihat Rincian</a>
                    </div>
                </div>
            </div>
            <center style="font-size:14px;padding:10px;">
                <p style="color:#264E36;"><b>&copy; 2020.</b> <img
                        src=" <?= base_url('assets/img/logo/text_eden_logo.png'); ?>" alt="" class="img-fluid"
                        width="100px" style="margin-top:-3px;"></p>
            </center>
        </div>
    </div>
    <?php $this->load->view('layout/footer'); ?>