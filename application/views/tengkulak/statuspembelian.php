<?php $this->load->view('layout/header'); ?>
<?php $this->load->view('layout/navbar_tengkulak'); ?>

<div class="container-fluid" style="background-color:#ffffff; padding-top:80px;">
    <div class=" row">
        <div class="col-2">
        </div>
        <div class="col-8">
            <!-- <?php print_r($userData);?> -->
            <?php foreach ($produkDetail as $key ): ?>
            <div class="card" style="border-radius: 10px;">
                <div class="row" style="padding: 10px;">
                    <div class="col-10">
                        <p style="font-size: 20px; font-weight: bold; color:#264E36;">
                            STATUS PEMBELIAN
                        </p>
                    </div>
                    <div class="col-2"><a href="<?= site_url('tengkulak/pembelian/'.$key->id_produk); ?>"
                            class="btn btn-danger">Kembali</a></div>
                </div>
            <?php endforeach ?>
           
                <div class="card-body table-responsive" style="height: 350px;padding:0px;">
                <?php foreach ($userData as $key ): ?>
                    <table class="table table-head-fixed text-nowrap">
                        <tbody>
                            <tr>
                                <td>
                                    <h5><b>Alamat Pengiriman</b></h5>
                                    <p><?= $key->alamat_tengkulak; ?></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5><b>Status Pesanan</b></h5>
                                    <div class="row">
                                        <div class="col-6">
                                            <p>Kode Pembayaran</p>
                                        </div>
                                        <div class="col-6" align="right">
                                            <p>Kode <?= $key->id_transaksi; ?></p>
                                        </div>
                                    </div>
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
                        <?php endforeach ?>

                        <?php foreach ($produktransaksi as $key ): ?>
                            <tr>
                                <td>
                                    <h5><b>Informasi Pesanan</b></h5>
                                    <div class="row">
                                        <div class="col-6">
                                            <p>Nama Petani <?= $key->nama_petani; ?></p>
                                        </div>
                                        <div class="col-6" align="right">
                                            <p>Tanggal Panen <br><?php $date = substr($key->tanggal_panen,0,10); echo $date; ?></p>
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
                                            <p>Tanggal Transaksi <br><?php $date = substr($key->tanggal_pembelian,0,10); echo $date; ?></p>
                                            <!-- <p>Pesanan xxx</p> -->
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5><b>Total Pembayaran</b> </h5>
                                    <ul>
                                        <li>Pesanan di proses</li>
                                        <p><?php $date = substr($key->tanggal_pembelian,0,10); echo $date; ?></p>
                                        <li>Pesanan di kemas</li>
                                        <p>-</p>
                                        <li>Pesanan di kirim</li>
                                        <p>-</p>
                                        <li>Pesanan di terima</li>
                                        <p>-</p>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    <?php endforeach ?>

                    </table>
                </div>
                <div class="row">
                    <div class="col-9"></div>
                    <div class="col-3" style="padding: 10px;">
                        <!-- <a href="<?= site_url('tengkulak/statuspembelian'); ?>" class="btn btn-default">Lihat
                            Rincian</a> -->
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