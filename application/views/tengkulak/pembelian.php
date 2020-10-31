<?php $this->load->view('layout/header'); ?>
<?php $this->load->view('layout/navbar_tengkulak'); ?>

<div class="container-fluid" style="background-color:#ffffff; padding-top:80px;">
    <div class=" row">
        <div class="col-2">
        </div>
        <div class="col-8">
            <div class="card" style="border-radius: 10px;">
            <?php foreach ($produkDetail as $key ): ?>

                <div class="row" style="padding: 10px;">
                    <div class="col-10">
                        <p style="font-size: 20px; font-weight: bold; color:#264E36;">
                            PEMBELIAN ANDA
                        </p>
                    </div>
                    <div class="col-2"><a href="<?= site_url('tengkulak/keranjang/'.$key->id_produk); ?>"
                            class="btn btn-danger">Kembali</a></div>
                </div>
                <div class="card-body table-responsive" style="height: 350px;padding:0px;">
            <?php endforeach ?>
            <!-- <?php print_r($produkDetail);?> -->
                <?php foreach ($userData as $key): ?>
                    <table class="table table-head-fixed text-nowrap">
                        <tbody>
                            <tr>
                                <td>
                                    <h5><b>Alamat Pengiriman</b></h5>
                                    <p><?= $key->alamat_tengkulak; ?></p>
                                </td>
                            </tr>
                <?php endforeach ?>
                <?php foreach ($produkDetail as $key ): ?>
                            <tr>
                                <td>
                                    <h5><b>Informasi Pembayaran</b></h5>
                                    <div class="row">
                                        <div class="col-6">
                                            <p>Pembayaran Melalui</p>
                                            <p>Kode Pembayaran</p>
                                        </div>
                                        <div class="col-6" align="right">
                                            <p><?= $key->metode_transaksi; ?></p>
                                            <p><?= $key->id_transaksi; ?></p>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                
                            <tr>
                                <td>
                                    <h5><b>Informasi Pesanan</b></h5>
                                    <div class="row">
                                        <div class="col-6">
                                            <p>Nama Petani <?= $key->nama_petani; ?></p>
                                        </div>
                                        <div class="col-6" align="right">
                                            <p>Tanggal Panen <br> <?php $date = substr($key->tanggal_panen,0,10); echo $date; ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-1">
                                            <img class="imgPesan" src="<?= base_url('assets/img/pisang.jpeg'); ?>"
                                                alt="" width="80px" style="border-radius: 5px;">
                                        </div>
                                        <div class="col-6" style="padding-left:25px;">
                                            <p>Nama Produk <?= $key->nama_produk; ?></p>
                                            <p>Rp. <?= $key->harga_produk; ?></p>
                                        </div>
                                        <div class="col-5" align="right">
                                            <p>Tanggal Transaksi <br> <?php $date = substr($key->tanggal_transaksi,0,10); echo $date; ?></p>
                                            <!-- <p>Pesanan xxx</p> -->
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5><b>Total Pembayaran</b></h5>
                                    <div class="row">
                                        <div class="col-6">
                                            <p>Rincian </p>
                                            <p>Total </p>
                                        </div>
                                        <div class="col-6" align="right">
                                            <p>Rp. <?= $key->harga_produk; ?> x <?= $key->kuantiti_pembelian; ?></p>
                                            <p>Rp.<?= $key->harga_produk*$key->kuantiti_pembelian; ?></p>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5><b>Status Pesanan</b></h5>
                                    <div class="row">
                                        <div class="col-3">
                                            <?php
                                                $cektrans = $key->status;
                                                // echo $cektrans;
                                            ?>

                                            <?php if ($cektrans == 0): ?>
                                                <input type="checkbox" checked name="proses" id="proses">
                                                <?php else: ?>
                                                <input type="checkbox" name="proses" id="proses">
                                            <?php endif ?>
                                            <label for="proses">Status di proses</label>
                                        </div>
                                        <div class="col-3">
                                        <?php if ($cektrans == 1): ?>
                                                    <input type="checkbox" name="kemas" id="kemas">
                                                <?php else: ?>
                                                    <input type="checkbox" name="kemas" id="kemas">
                                            <?php endif ?>
                                            
                                            <label for="kemas">Status di kemas</label>
                                        </div>
                                        <div class="col-3">
                                            <?php if ($cektrans == 2): ?>
                                                    <input type="checkbox" name="kirim" id="kirim">
                                                <?php else: ?>
                                                    <input type="checkbox" name="kirim" id="kirim">
                                            <?php endif ?>
                                           
                                            <label for="kirim">Status di kirim</label>
                                        </div>
                                        <div class="col-3">
                                        <?php if ($cektrans == 3): ?>
                                                    <input type="checkbox" name="terima" id="terima">
                                                <?php else: ?>
                                                    <input type="checkbox" name="terima" id="terima">
                                            <?php endif ?>
                                           
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
                    <div class="col-3" style="padding: 10px;">
                        <a href="<?= site_url('tengkulak/statuspembelian/'.$key->id_transaksi); ?>" class="btn btn-default">Lihat
                            Rincian</a>
                    </div>
                </div>
            </div>
            <?php endforeach ?>

            <center style="font-size:14px;padding:10px;">
                <p style="color:#264E36;"><b>&copy; 2020.</b> <img
                        src=" <?= base_url('assets/img/logo/text_eden_logo.png'); ?>" alt="" class="img-fluid"
                        width="100px" style="margin-top:-3px;"></p>
            </center>
        </div>
    </div>
    <?php $this->load->view('layout/footer'); ?>