<?php $this->load->view('layout/header_dsh'); ?>
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
                        <p style="font-size: 20px; font-weight: bold; color:#264E36;">RIWAYAT SEMUA TRANSAKSI ANDA</p>
                        <div class="card-body table-responsive" style="height: 410px;">
                            <table class="table table-head-fixed text-nowrap">
                                <tbody>
                                    <?php for ($i = 0; $i < 10; $i++) { ?>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="col-2">
                                                        <img class="imgPesan" src="<?= base_url('assets/img/pisang.jpeg'); ?>" alt="" width="120px" style="border-radius: 10px;">
                                                    </div>
                                                    <div class="col-10" style="padding-left: 30px;">
                                                        <div class="row">
                                                            <div class="col-8">
                                                                <h5><b>Nama Produk</b></h5>
                                                            </div>
                                                            <div class="col-4">
                                                                <h6><b>Tanggal Transaksi <span class="fas fa-calendar-alt"></span></b></h6>
                                                            </div>
                                                        </div>
                                                        <p style="word-wrap: break-word;">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php } ?>
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