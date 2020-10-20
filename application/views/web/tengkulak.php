<?php $this->load->view('layout/header'); ?>
<?php $this->load->view('layout/navbar_tengkulak'); ?>

<div class="container-fluid">
    <div class="row" style="padding-top: 100px;">
        <div class="col-2">
        </div>
        <div class="col-8">
            <div class="card" style="border-radius: 10px;">
                <div class="row">
                    <div class="col-1" style="background-color: #264E36;border-radius: 10px 0px 0px 10px;">
                    </div>
                    <div class="col-11" style="padding:20px;">
                        <p style="font-size: 20px; font-weight: bold; color:#000000;">SELAMAT DATANG NAMA TENGKULAK</p>
                        <div class="card-body" style="height: 410px;">
                            <div class="row">
                                <div class="col-6"></div>
                                <div class="col-6">
                                    <img class="imgPesan" src="<?= base_url('assets/img/user.jpg'); ?>" alt="" width="60px" style="border-radius: 30px;">
                                </div>
                            </div>
                            <div class="row pb-3" style="color:#000000;">
                                <div class="col-6">
                                    <b>Nama Depan</b>
                                </div>
                                <div class="col-6">
                                    <b>Nama Belakang</b>
                                </div>
                            </div>
                            <div class="row pb-3" style="color:#000000;">
                                <div class="col">
                                    <b>Email</b>
                                </div>
                            </div>
                            <div class="row pb-3" style="color:#000000;">
                                <div class="col">
                                    <b>*********** (<a href="#">hidden password</a>)</b>
                                </div>
                            </div>
                            <div class="row pb-3" style="color:#000000;">
                                <div class="col-3">
                                    <b>Hari</b>
                                </div>
                                <div class="col-5">
                                    <b>Bulan</b>
                                </div>
                                <div class="col-4">
                                    <b>Tahun</b>
                                </div>
                            </div>
                            <div class="row pb-3" style="color:#000000;">
                                <div class="col">
                                    <b>Kontak</b>
                                    <p></p>
                                </div>
                            </div>
                            <div class="row pb-3" style="color:#000000;">
                                <div class="col">
                                    <b>Alamat</b>
                                    <p></p>
                                </div>
                            </div>
                            <a href="#" class="btn btn-default">UBAH</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php $this->load->view('layout/footer'); ?>