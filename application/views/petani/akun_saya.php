<?php $this->load->view('layout/header'); ?>
<?php $this->load->view('layout/navbar_petani'); ?>

<div class="container-fluid" style="background-color:#ffffff; padding-top:80px;">
    <div class=" row">
        <div class="col-2">
        </div>
        <div class="col-8">
            <div class="card" style="border-radius: 10px;">
                <div style="width:10%; background-color: #264E36; height:550px;border-radius: 10px 0px 0px 10px;">
                </div>
                <div style="width:90%; height:100%; background-color:#ffffff; position:absolute; left:80px; padding: 30px; border-radius: 0px 10px 10px 0px;">
                    <form action="" method="POST">
                        <div class="row">
                            <div class="col-6">
                                <p style="font-size: 26px; font-weight: bold; color:#264E36;margin-bottom:20px">SELAMAT DATANG NAMA PETANI (getNamaPetani())</p>
                            </div>
                            <?php echo $this->session->flashdata('notif'); ?>

                            <div class="col-6">
                                <div class="custom-file" style="margin: 30px 0px;">
                                    <input type="file" class="custom-file-input" id="foto" name="foto" style="display: none;">
                                    <label for="foto">
                                        <img src="<?= base_url('../../assets/img/default.png'); ?>" alt="Upload Foto" width="50px">
                                        <b style=" color:#264E36;">Simpan Foto</b>
                                    </label>
                                </div>
                            </div>
                        </div>
                      <div class="row">
                            <div class="col-6">
                                <div class="input-group">
                                    <div class="wrap-input100 validate-input m-t-10 m-b-10" data-validate="Masukan Email">
                                        <!-- <span>Nama Petani: </span> -->
                                        <input class="input100" type="text" name="nama">
                                        <span class="focus-input100" data-placeholder="Nama Petani"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="input-group">
                                    <div class="wrap-input100 validate-input m-t-10 m-b-10" data-validate="Masukan Password">
                                        <!-- <span>Nik: </span> -->
                                        <input class="input100" type="text" name="nik">
                                        <span class="focus-input100" data-placeholder="NIK"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="input-group">
                                    <div class="wrap-input100 validate-input m-t-10 m-b-10" data-validate="Masukan Email">
                                        <input class="input100" type="email" name="email">
                                        <span class="focus-input100" data-placeholder="Email"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="input-group">
                                    <div class="wrap-input100 validate-input m-t-10 m-b-10" data-validate="Masukan Hari">
                                        <input class="input100" type="text" name="password">
                                        <span class="focus-input100" data-placeholder="password"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="input-group">
                                    <div class="wrap-input100 validate-input m-t-10 m-b-10" data-validate="Masukan NIK">
                                        <input class="input100" type="text" name="tgl">
                                        <span class="focus-input100" data-placeholder="Tanggal Lahir"></span>
                                    </div>
                                </div>
                            </div>
                             <div class="col-6">
                                <div class="input-group">
                                    <div class="wrap-input100 validate-input m-t-10 m-b-10" data-validate="Masukan NIK">
                                        <input class="input100" type="text" name="kontak">
                                        <span class="focus-input100" data-placeholder="Kontak"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                      
                        <div class="row">
                            <div class="col">
                                <div class="input-group">
                                    <div class="wrap-input100 validate-input m-t-15 m-b-20" data-validate="Masukan Alamat">
                                        <textarea class="input100" name="alamat" id="alamat" style="height:70px;padding:10px;"></textarea>
                                        <span class="focus-input100" data-placeholder="Masukan Alamat"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <!-- <button class="btn-default" > -->
                                    <a  class="btn-default" style="color: white;" href="<?php echo site_url('Petani/editPetani/')?>"> UBAH</a>
                                <!-- </button> -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <center style="font-size:14px;padding:10px;">
                <p style="color:#264E36;"><b>&copy; 2020.</b> <img src=" <?= base_url('assets/img/logo/text_eden_logo.png'); ?>" alt="" class="img-fluid" width="100px" style="margin-top:-3px;"></p>
            </center>
        </div>
    </div>
</div>
<?php $this->load->view('layout/footer'); ?>