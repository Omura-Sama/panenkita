<?php $this->load->view('layout/header'); ?>
<?php $this->load->view('layout/navbar_tengkulak'); ?>

<div class="container-fluid" style="background-color:#ffffff; padding-top:80px;">
    <div class=" row">
        <div class="col-2">
        </div>
        <div class="col-8">
            <div class="card" style="border-radius: 10px;">
                <div class="row" style="padding: 10px;">
                    <div class="col-2"><a href="<?= site_url('tengkulak/pemberitahuan'); ?>" class="btn btn-danger">Kembali</a></div>
                    <div class="col-10">
                        <p style="font-size: 20px; font-weight: bold; color:#264E36;">
                            TRANSAKSI PRODUK
                        </p>
                    </div>
                </div>
                <div class="card-body table-responsive" style="height: 410px;padding:0px;">
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
                                    <div class="input-group">
                                        <div class="wrap-input100 validate-input m-t-10 m-b-10">
                                            <select class="custom-select" name="metode" id="metode" style="border: 0;box-shadow:none;">
                                                <option value="">- Pilih Metode Pembayaran -</option>
                                            </select>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5><b>Daftar Belanja</b></h5>
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
                                            <img class="imgPesan" src="<?= base_url('assets/img/pisang.jpeg'); ?>" alt="" width="80px" style="border-radius: 5px;">
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
                                    <h5><b>Rincian Harga</b></h5>
                                    <div class="row">
                                        <div class="col-6">
                                            <p>Harga Barang (Reguler)</p>
                                            <p>Tota Pembelianl (Reguler)</p>
                                        </div>
                                        <div class="col-6" align="right">
                                            <p>Rp. xxx x x</p>
                                            <p>Qty xxx x x</p>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="row">
                                        <div class="col-6">
                                            <h5><b>Total Pembayaran</b></h5>
                                        </div>
                                        <div class="col-6" align="right">
                                            <h5><b>Rp. Total</b></h5>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <a href="<?= site_url('tengkulak/statuspembelian'); ?>" class="btn btn-default" style="margin: 10px;">BAYAR</a>
            </div>
            <center style="font-size:14px;padding:10px;">
                <p style="color:#264E36;"><b>&copy; 2020.</b> <img src=" <?= base_url('assets/img/logo/text_eden_logo.png'); ?>" alt="" class="img-fluid" width="100px" style="margin-top:-3px;"></p>
            </center>
        </div>
    </div>
    <?php $this->load->view('layout/footer'); ?>