<?php $this->load->view('layout/header'); ?>
<?php $this->load->view('layout/navbar_tengkulak'); ?>

<div class="container-fluid" style="background-color:#ffffff; padding-top:80px;">

    <div class=" row">
        <!-- <?php print_r($produkDetail); ?> -->
        <div class="col-2">
        </div>
        <div class="col-8">
            <div class="card" style="border-radius: 10px;">
                <div class="row">
                    <div class="col-1" style="background-color: #264E36;border-radius: 10px 0px 0px 10px;">
                    </div>
                    <div class="col-11" style="padding:20px;">
                        <p style="font-size: 20px; font-weight: bold; color:#264E36;">PRODUK TERSIMPAN</p>
                        <div class="card-body table-responsive" style="height: 410px;">
                            <table class="table table-head-fixed text-nowrap">
                                <tbody>
                                        <tr>
                                            <td>
                        <?php foreach ($produkDetail as $key ): ?>
                                                <div class="row">
                                                    <div class="col-1">
                                                        <img class="imgPesan" src="<?= base_url('assets/img/pisang.jpeg'); ?>" alt="" width="60px" style="border-radius: 10px;">
                                                    </div>
                                                    <div class="col-9" style="padding-left: 20px;">
                                                        <h5><?= $key->nama_produk; ?> </h5>
                                                        <p><?= $key->deskripsi_produk; ?>.</p>
                                                    </div>
                                                    <div class="col-2">
                                                        <h6 class="pb-1">Tanggal <br> <?php $date = substr($key->date_simpan,0,10); echo $date; ?> <span class="fas fa-calendar-alt"></span>
                                                        </h6>
                                                    </div>
                                                </div>
                        <?php endforeach ?>

                                            </td>
                                        </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <center style="font-size:14px;padding:10px;">
                <p style="color:#264E36;"><b>&copy; 2020.</b> <img src=" <?= base_url('assets/img/logo/text_eden_logo.png'); ?>" alt="" class="img-fluid" width="100px" style="margin-top:-3px;"></p>
            </center>
        </div>

    </div>
    <?php $this->load->view('layout/footer'); ?>