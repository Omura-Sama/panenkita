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
                    <?php foreach ($userData as $key ): ?>
                   
                        <p style="font-size: 20px; font-weight: bold; color:#000000;">SELAMAT DATANG  
                            <?php echo $key->nama_depan_tengkulak." ".$key->nama_belakang_tengkulak; ?> 
                        </p>
                        <div class="card-body" style="height: 410px;">
                            <div class="row">
                                <div class="col-6"></div>
                                <div class="col-6">
                                    <img class="imgPesan" src="<?= base_url('assets/img/user.jpg'); ?>" alt="" width="60px" style="border-radius: 30px;">
                                </div>
                            </div>
                            <div class="row pb-3" style="color:#000000;">
                                <div class="col-6">
                                    <b>Nama Depan :</b><br>
                                    <?php echo $key->nama_depan_tengkulak; ?>
                                </div>
                                <div class="col-6">
                                    <b>Nama Belakang :</b><br>
                                    <?php echo $key->nama_belakang_tengkulak; ?>
                                </div>
                            </div>
                            <div class="row pb-3" style="color:#000000;">
                                <div class="col">
                                    <b>Email :</b><br>
                                    <?php echo $key->email; ?>
                                </div>
                                <div class="col">
                                    <b>
                                    <?php echo "<b type='password'>".$key->password."</b>" ?><br>
                                    (<a href="#">hidden password</a>)</b>
                                </div>
                            </div>
                            <div class="row pb-3" style="color:#000000;">
                            <?php 
                                $date = $key->tanggal_lahir_tengkulak;
                                // echo $date;
                                $year = substr($date, 0, 4);
                                $mth = substr($date, 5, 2);
                                $day = substr($date, 8, 10);
                            ?>
                                <div class="col-3">
                                    <b>Hari</b>
                                    <p><?= $day; ?></p>
                                </div>
                                <div class="col-5">
                                    <b>Bulan</b>
                                    <p><?= $mth; ?></p>
                                </div>
                                <div class="col-4">
                                    <b>Tahun</b>
                                    <p><?= $year; ?></p>
                                </div>
                            </div>
                            <div class="row pb-3" style="color:#000000;">
                                <div class="col">
                                    <b>Kontak</b><br>
                                    <p>
                                        <?= $key->kontak_tengkulak; ?>
                                    </p>
                                </div>
                            </div>
                            <div class="row pb-3" style="color:#000000;">
                                <div class="col">
                                    <b>Alamat</b><br>
                                    <p>
                                        <?= $key->alamat_tengkulak; ?>
                                    </p>
                                </div>
                            </div>
                            <a href="<?= site_url('tengkulak/edit/'.$key->id_user) ?>" class="btn btn-default">UBAH</a>
                        </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php $this->load->view('layout/footer'); ?>