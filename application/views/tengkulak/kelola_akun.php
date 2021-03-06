<?php $this->load->view('layout/header'); ?>
<?php $this->load->view('layout/login_navbar'); ?>

<div class="container-fluid">
    <div class=" row">
        <div class="col-2">
        </div>
        <div class="col-8">
            <div class="card" style="border-radius: 10px;">
                <div style="width:10%; background-color: #264E36; height:570px;border-radius: 10px 0px 0px 10px;">
                </div>
                <div style="height:100%; background-color:#ffffff; position:absolute; left:80px; padding: 20px; border-radius: 0px 10px 10px 0px;">
                    <form action="<?php echo base_url() ?>index.php/tengkulak/edit" method="post">
                        <!-- <?php print_r($dataUser); ?> -->

                    <?php foreach ($dataUser as $key ): ?>
                        
                        <div class="row">
                            <div class="col-6">
                                <p style="font-size: 26px; font-weight: bold; color:#264E36;margin-bottom:20px"> UBAH AKUN</p>
                                <input hidden type="text" name="idUser" value="<?= $key->id_user;?>">
                            </div>
                            
                            <div class="col-6">
                                <div class="custom-file" style="margin: 30px 0px;">
                                    <input type="file" class="custom-file-input" id="foto" name="foto" style="display: none;">
                                    <label for="foto">
                                        <img src="<?= base_url('assets/img/user.jpg'); ?>" alt="Upload Foto" width="50px">
                                        <b style=" color:#264E36;">Simpan Foto</b>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="input-group">
                                    <div class="wrap-input100 validate-input m-b-10" data-validate="Masukan Nama Depan">
                                        <input class="input100" type="text" value="<?= $key->nama_depan_tengkulak; ?>" name="namaDepan">
                                        <span class="focus-input100" data-placeholder="Masukan Nama Depan"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="input-group">
                                    <div class="wrap-input100 validate-input m-b-10" data-validate="Masukan Nama Belakang">
                                        <input class="input100" type="text" value="<?= $key->nama_belakang_tengkulak; ?>" name="namaBelakang">
                                        <span class="focus-input100" data-placeholder="Masukan Nama Belakang"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="input-group">
                                    <div class="wrap-input100 validate-input m-t-10 m-b-10" data-validate="Masukan Email">
                                        <input class="input100" type="email" value="<?= $key->email; ?>" name="email">
                                        <span class="focus-input100" data-placeholder="Masukan Email"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="input-group">
                                    <div class="wrap-input100 validate-input m-t-10 m-b-10" data-validate="Masukan Password">
                                        <input class="input100" type="password" value="<?= $key->password; ?>" name="password">
                                        <span class="focus-input100" data-placeholder="Masukan Password"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <?php 
                                $date = $key->tanggal_lahir_tengkulak;
                                // echo $date;
                                $year = substr($date, 0, 4);
                                $mth = substr($date, 5, 2);
                                $day = substr($date, 8, 10);
                            ?>
                            <div class="col-3">
                                <div class="input-group">
                                    <div class="wrap-input100 validate-input m-t-10 m-b-10" data-validate="Masukan Hari">
                                        <input class="input100" type="text" name="hari" value="<?= $day; ?>">
                                        <span class="focus-input100" data-placeholder="Masukan Hari"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="input-group">
                                    <div class="wrap-input100 validate-input m-t-10 m-b-10" data-validate="Masukan Bulan">
                                        <input class="input100" type="text" name="bulan" value="<?= $mth; ?>">
                                        <span class="focus-input100" data-placeholder="Masukan Bulan"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="input-group">
                                    <div class="wrap-input100 validate-input m-t-10 m-b-10" data-validate="Masukan Tahun">
                                        <input class="input100" type="text" name="tahun" value="<?= $year; ?>">
                                        <span class="focus-input100" data-placeholder="Masukan Tahun"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="input-group">
                                    <div class="wrap-input100 validate-input m-t-10 m-b-10" data-validate="Masukan Telepon/HP">
                                        <input class="input100" type="text" value="<?= $key->kontak_tengkulak; ?>" name="telepon">
                                        <span class="focus-input100" data-placeholder="Masukan Telepon/HP"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="input-group">
                                    <div class="wrap-input100 validate-input m-t-10 m-b-20" data-validate="Masukan Alamat">
                                        <input class="input100" type="text" value="<?= $key->alamat_tengkulak;?>" name="alamat">
                                        <span class="focus-input100" data-placeholder="Masukan Alamat"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach ?>

                        <div class="row">
                            <div class="col-4">
                                <button class="btn-default" type="submit" name="submit" > 
                                    SIMPAN
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<center style="font-size:14px;">
    <p style="color:#264E36;"><b>&copy; 2020.</b> <img src=" <?= base_url('assets/img/logo/text_eden_logo.png'); ?>" alt="" class="img-fluid" width="100px" style="margin-top:-3px;"></p>
</center>
<?php $this->load->view('layout/footer'); ?>