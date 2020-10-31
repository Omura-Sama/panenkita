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
                    <div class="col-2"><a href="<?= site_url('tengkulak/informasibarang/'.$key->id_produk); ?>" class="btn btn-danger">Kembali</a></div>
                    <div class="col-10">
                        <p style="font-size: 20px; font-weight: bold; color:#264E36;">
                            TRANSAKSI PRODUK
                        </p>
                    </div>
                </div>
            <?php endforeach ?>
                <div class="card-body table-responsive" style="height: 410px;padding:0px;">
<form action="<?php echo base_url() ?>index.php/tengkulak/keranjang" method="POST">
            <?php foreach ($userData as $key ): ?>
                    <table class="table table-head-fixed text-nowrap">
                        <tbody>
                            <tr>
                                <td>
                                    <h5><b>Alamat Pengiriman</b></h5>
                                    <p> <?= $key->alamat_tengkulak; ?></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5><b>Informasi Pembayaran</b></h5>
                                    <div class="input-group">
                                        <div class="wrap-input100 validate-input m-t-10 m-b-10">
                                            <select class="custom-select" name="metode" id="metode" style="border: 0;box-shadow:none;" required>
                                                <option value="">- Pilih Metode Pembayaran -</option>
                                                <option value="COD"> COD </option>
                                            </select>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <input hidden type="text" name="idTengkulak" value="<?= $key->id_tengkulak; ?>">
            <?php endforeach ?>


            <?php foreach ($produkDetail as $key ): ?>
                            <tr>
                            <input hidden type="text" name="kode_produk" value="<?= $key->id_produk; ?>">
                            <input hidden type="text" name="idPetani" value="<?= $key->id_petani; ?>">
                            <input hidden type="text" name="qtyProduk" value="<?= $key->stok_produk; ?>">
                            <input hidden type="text" name="price" value="<?= $key->harga_produk; ?>">
                                <td>
                                    <h5><b>Daftar Belanja</b></h5>
                                    <div class="row">
                                        <div class="col-6">
                                            <p>Nama Petani <br> <?= $key->nama_petani; ?></p>
                                        </div>
                                        <div class="col-6" align="right">
                                            <p>Tanggal Panen  <br><?php $date = substr($key->tanggal_panen,0,10); echo $date; ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-1">
                                            <img class="imgPesan" src="<?= base_url('assets/img/pisang.jpeg'); ?>" alt="" width="80px" style="border-radius: 5px;">
                                        </div>
                                        <div class="col-6" style="padding-left:25px;">
                                            <p>Nama Produk <br> <?= $key->nama_produk; ?></p>
                                            <p>Rp. <?= $key->harga_produk; ?></p>
                                        </div>
                                        <!-- <div class="col-5" align="right">
                                            <p>Tanggal Transaksi xxx</p>
                                            <p>Pesanan xxx</p>
                                        </div> -->
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5><b>Rincian Harga</b></h5>
                                    <div class="row">
                                        <div class="col-6">
                                            <p>Harga Barang </p>
                                            <p>Tota Pembelian </p>
                                        </div>
                                        <div class="col-6" align="right">
                                            <p>Rp. <?= $key->harga_produk; ?></p>
                                            <p>Qty <?= $key->stok_produk; ?></p>
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
                                            <h5><b>Rp. <?= $key->harga_produk*$key->stok_produk; ?></b></h5>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <button class="btn btn-default" type="submit" name="submit" class="btn btn-primary">BAYAR</button>
                <!-- <a href="<?= site_url('tengkulak/keranjang/'.$key->id_produk); ?>" class="btn btn-default" style="margin: 10px;">BAYAR</a> -->
            </div>
            <?php endforeach ?>
            </form>

            <center style="font-size:14px;padding:10px;">
                <p style="color:#264E36;"><b>&copy; 2020.</b> <img src=" <?= base_url('assets/img/logo/text_eden_logo.png'); ?>" alt="" class="img-fluid" width="100px" style="margin-top:-3px;"></p>
            </center>
        </div>
    </div>
    <?php $this->load->view('layout/footer'); ?>