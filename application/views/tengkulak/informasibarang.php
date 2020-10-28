<?php $this->load->view('layout/header'); ?>
<?php $this->load->view('layout/navbar_tengkulak'); ?>

<div class="container-fluid" style="background-color:#ffffff; padding-top:80px;">
    <div class=" row">
        <div class="col-2">
        </div>
        <div class="col-8">
            <div class="card" style="border-radius: 10px;">
            <?php foreach ($produkDetail as $key ): ?>

                <div class="row">
                    <div class="col-1" style="background-color: #264E36;border-radius: 10px 0px 0px 10px;">
                    </div>
                    <div class="col-11" style="padding:0px 5px 0px 0px;">
                        <table class="table table-bordered">
                            <tr>
                                <td width="75%" style="padding: 0;">
                                    <img src=" <?= base_url('assets/img/pisang.jpeg'); ?>" alt="" width="100%">
                                </td>
                                <td align="center">
                                    <a href="<?= site_url('tengkulak/transaksiproduk/'.$key->id_produk) ?>" class="btn btn-default" style="margin-bottom: 20px; width:170px;">Beli</a>
                                    <a href="<?= site_url('tengkulak/transaksiproduk') ?>" class="btn btn-default" style="margin-bottom: 20px; width:170px;">Simpan</a>
                                    <a href="<?= site_url('tengkulak/kirimpesan/?id=') ?>" class="btn btn-default" style="margin-bottom: 20px; width:170px;">Kirim
                                        Pesan</a>
                                    <a href="<?= site_url('tengkulak/index') ?>" class="btn btn-danger" style="margin-bottom: 20px; width:170px;">Kembali</a>
                                </td>
                            </tr>
                            <tr>
                                <td rowspan="2">
                                    <h4><b>Rp. <?php echo $key->harga_produk; ?> </b></h4>
                                    <h6><b><?php echo $key->nama_produk; ?></b></h6>
                                    <br>
                                    <p><?php echo $key->deskripsi_produk; ?></p>
                                </td>
                                <td>
                                    <h6><b>Infromasi Barang</b></h6>
                                    <p style="text-align: right;"><b><?php $date = substr($key->tanggal_panen,0,10);
                                    echo $date; ?></b></p>
                                    <p>Stok</p>
                                    <p style="text-align: right;"><?php echo $key->stok_produk; ?></p>
                                    <p>Terjual</p>
                                    <p style="text-align: right;">0</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6><b>Petani</b></h6>
                                    <div class="row">
                                        <div class="col-4">
                                            <img class="imgPesan" src="<?= base_url('assets/img/user.jpg'); ?>" alt="" width="50px" style="position:initial; border-radius: 30px;">
                                        </div>
                                        <div class="col-8">
                                            <h6><b><?php echo $key->nama_petani; ?></b></h6>
                                        </div>
                                    </div>
                                    <p><?php echo $key->alamat_petani; ?> <br>
                                    <?= $key->kontak_petani; ?></p>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <?php endforeach ?>

            </div>
            <center style="font-size:14px;padding:10px;">
                <p style="color:#264E36;"><b>&copy; 2020.</b> <img src=" <?= base_url('assets/img/logo/text_eden_logo.png'); ?>" alt="" class="img-fluid" width="100px" style="margin-top:-3px;"></p>
            </center>
        </div>
    </div>
</div>
<?php $this->load->view('layout/footer'); ?>