<?php $this->load->view('layout/header'); ?>
<?php $this->load->view('layout/navbar_petani'); ?>

<div class="container-fluid" style="background-color:#ffffff; padding-top:80px;">
    <div class=" row">
        <div class="col-2">
        </div>
        <div class="col-8">
            <div class="card" style="border-radius: 10px;">
                <div class="row" style="padding: 10px;">
                    <div class="col-2"><a href="<?= site_url('petani/halPenghasilan'); ?>" class="btn btn-danger">Kembali</a></div>
                    <div class="col-10">
                        <p style="font-size: 20px; font-weight: bold; color:#264E36;">
                            PENGHASILAN ANDA
                        </p>
                    </div>
                </div>
                <div class="card-body table-responsive" style="height: 410px;padding:0px;">
                <?php foreach ($detailPeng as $key ): ?>
                    <table class="table table-head-fixed text-nowrap">
                        <tbody>
                            <tr>
                                <td>
                                    <div class="row">
                                        <div class="col-6">
                                            <h5><b>Kode Pemasukan</b></h5>
                                            <?= $key->id_pemasukan; ?>
                                        </div>
                                        <div class="col-6" align="right">
                                            <h5><b>Tanggal Pemasukan</b></h5>
                                            <?= $key->tanggal_pemasukan; ?>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5><b>Detail Produk</b></h5>
                                    
                                    <div class="row">
                                    <div class="col-1">
                                        <img class="imgPesan" src="<?= base_url('assets/img/pisang.jpeg'); ?>" alt="" width="80px" style="border-radius: 5px;">
                                    </div>
                                        <div class="col-6" style="padding-left:25px;">
                                            <p>Pembayaran Melalui</p>
                                            <p>Kode Pembayaran</p>
                                        </div>
                                        <div class="col-5" align="right">
                                            <p><?= $key->metode_transaksi; ?> </p>
                                            <p><?= $key->id_transaksi; ?></p>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <h5><b>Laba Kotor</b></h5>
                                    <div class="row">
                                        <div class="col-6">
                                            <p>Harga Barang </p>
                                            <p>Total pembelian </p>
                                            <p>Total</p>
                                        </div>
                                        <div class="col-6" align="right">
                                            <p>Rp. <?= $key->harga_produk; ?></p>
                                            <p><?= $key->kuantiti_pembelian; ?></p>
                                            <p>Rp. <?= $key->harga_produk*$key->kuantiti_pembelian; ?></p>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5><b>Penghasilan</b></h5>
                                    <div class="row">
                                        <div class="col-6">
                                            <p>Biaya Operasional</p>
                                            <p>Total penghasilan</p>
                                        </div>
                                        <div class="col-6" align="right">
                                            <p>PPN Rp. <?= $key->harga_produk*($key->PPN/100); ?> (5%)</p>
                                            <p>Rp. <?= ($key->harga_produk*$key->kuantiti_pembelian)-($key->harga_produk*($key->PPN/100)); ?> </p>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: center;">
                                    <!-- <a class="btn-default" style="color: white; width: 100px;" href="<?php echo site_url('Petani/detailPenghasilan/') ?>"> <b>DETAIL PENGHASILAN</b></a> -->
                                    <a class="btn-default" style="color: white; width: 100px;" href="#"> <b>DETAIL PENGHASILAN</b></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <?php endforeach ?>
            </div>
            <center style="font-size:14px;padding:10px;">
                <p style="color:#264E36;"><b>&copy; 2020.</b> <img src=" <?= base_url('assets/img/logo/text_eden_logo.png'); ?>" alt="" class="img-fluid" width="100px" style="margin-top:-3px;"></p>
            </center>
        </div>
    </div>
    <?php $this->load->view('layout/footer'); ?>