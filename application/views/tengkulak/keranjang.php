<?php $this->load->view('layout/header'); ?>
<?php $this->load->view('layout/navbar_tengkulak'); ?>

<div class="container-fluid" style="background-color:#ffffff; padding-top:80px;">
    <div class=" row">
        <div class="col-2">
        </div>
        <div class="col-8">
            <div class="card" style="border-radius: 10px;">
                <div class="row">
                    <div class="col-1" style="background-color: #264E36;border-radius: 10px 0px 0px 10px;">
                    </div>
                    <div class="col-11" style="padding:20px;">
                        <p style="font-size: 20px; font-weight: bold; color:#264E36;">KERANJANG ANDA</p>
                        <div class="card-body table-responsive" style="height: 410px;">
                            <table class="table table-head-fixed text-nowrap">
                                <tbody>
                                <?php foreach ($produkDetail as $key ): ?>
                                    <tr>
                                        <td>
                                            <div class="row">
                                                <div class="col-2">
                                                    <img class="imgPesan"
                                                        src="<?= base_url('assets/img/default.jpg'); ?>" alt=""
                                                        width="80px" style="border-radius: 10px;">
                                                </div>
                                                <div class="col-8">
                                                    <h5>
                                                       Nama Produk
                                                    </h5>
                                                    <p><?= $key->nama_produk; ?></p>
                                                    <p>
                                                        <input type="checkbox" name="proses" id="proses">
                                                        <label for="proses">Status di proses</label>
                                                        <input type="checkbox" name="kemas" id="kemas">
                                                        <label for="kemas">Status di kemas</label>
                                                    </p>
                                                    <p>
                                                        <input type="checkbox" name="kirim" id="kirim">
                                                        <label for="kirim">Status di kirim</label>
                                                        <input type="checkbox" name="terima" id="terima">
                                                        <label for="terima">Status di terima</label>
                                                    </p>
                                                </div>
                                                <div class="col-2">
                                                    <h6 class="pb-1"><?php $date = substr($key->tanggal_pembelian,0,10);
                                                    echo $date;
                                                     ?> <span class="fas fa-calendar-alt"></span>
                                                    </h6>
                                                    <a href="<?= site_url('tengkulak/pembelian/'.$key->id_produk); ?>"
                                                        class="btn btn-default">Cek</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach ?>

                                </tbody>
                            </table>
                        </div>
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