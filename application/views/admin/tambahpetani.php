<?php $this->load->view('layout/header'); ?>
<?php $this->load->view('layout/navbar'); ?>

<?php
$id = '';
$foto = '';
$nama_petani = '';
$email = '';
$password = '';
$hari = '';
$bulan = '';
$tahun = '';
$nik = '';
$kontak = '';
$alamat = '';
$button = 'TAMBAH';
if ($petani) {
    foreach ($petani as $key) {
        $ttl = explode('-', $key->tanggal_lahir_petani);
        $id = $key->id_petani;
        $foto = $key->foto_petani;
        $nama_petani = $key->nama_petani;
        $email = $key->email_petani;
        $password = $key->password_petani;
        $hari = $ttl[2];
        $bulan = $ttl[1];
        $tahun = $ttl[0];
        $nik = $key->nik_petani;
        $kontak = $key->kontak_petani;
        $alamat = $key->alamat_petani;
        $button = 'UBAH';
    }
}
?>
<div class="container-fluid" style="background-color:#ffffff; padding-top:80px;">
    <div class=" row">
        <div class="col-2">
        </div>
        <div class="col-8">
            <div class="card" style="border-radius: 10px;">
                <div style="width:10%; background-color: #264E36; height:550px;border-radius: 10px 0px 0px 10px;">
                </div>
                <div style="width:90%; height:100%; background-color:#ffffff; position:absolute; left:80px; padding: 30px; border-radius: 0px 10px 10px 0px;">
                    <form action="<?php echo base_url() ?>index.php/admin/insertPetani" method="POST">
                        <div class="row">
                            <div class="col-6">
                                <p style="font-size: 26px; font-weight: bold; color:#264E36;margin-bottom:20px"><?= $button ?> PETANI</p>
                                <?php echo $this->session->flashdata('notif'); ?>
                            </div>

                            <div class="col-6">
                                <div class="custom-file" style="margin: 30px 0px;">
                                    <input type="file" class="custom-file-input" id="foto" name="foto" style="display: none;" value="<?= $foto ? $foto : '' ?>">
                                    <label for="foto">
                                        <img src="<?= base_url('assets/img/user.jpg'); ?>" alt="Upload Foto" width="50px">
                                        <b style=" color:#264E36;">Simpan Foto</b>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="input-group">
                                    <div class="wrap-input100 validate-input m-b-10" data-validate="Masukan Nama Petani">
                                        <input type="hidden" name="id" value="<?= $id ? $id : '' ?>">
                                        <input class="input100" type="text" name="nama_petani" value="<?= $nama_petani ? $nama_petani : '' ?>">
                                        <span class="focus-input100" data-placeholder="Masukan Nama Petani"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="input-group">
                                    <div class="wrap-input100 validate-input m-t-10 m-b-10" data-validate="Masukan Email">
                                        <input class="input100" type="email" name="email" value="<?= $email ? $email : '' ?>">
                                        <span class="focus-input100" data-placeholder="Masukan Email"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="input-group">
                                    <div class="wrap-input100 validate-input m-t-10 m-b-10" data-validate="Masukan Password">
                                        <input class="input100" type="password" name="password" value="<?= $password ? $password : '' ?>">
                                        <span class="focus-input100" data-placeholder="Masukan Password"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <div class="input-group">
                                    <div class="wrap-input100 validate-input m-t-10 m-b-10" data-validate="Masukan Hari">
                                        <input class="input100" type="text" name="hari" value="<?= $hari ? $hari : '' ?>">
                                        <span class="focus-input100" data-placeholder="Masukan Hari"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="input-group">
                                    <div class="wrap-input100 validate-input m-t-10 m-b-10" data-validate="Masukan Bulan">
                                        <input class="input100" type="text" name="bulan" value="<?= $bulan ? $bulan : '' ?>">
                                        <span class="focus-input100" data-placeholder="Masukan Bulan"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="input-group">
                                    <div class="wrap-input100 validate-input m-t-10 m-b-10" data-validate="Masukan Tahun">
                                        <input class="input100" type="text" name="tahun" value="<?= $tahun ? $tahun : '' ?>">
                                        <span class="focus-input100" data-placeholder="Masukan Tahun"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="input-group">
                                    <div class="wrap-input100 validate-input m-t-10 m-b-10" data-validate="Masukan NIK">
                                        <input class="input100" type="text" name="nik" value="<?= $nik ? $nik : '' ?>">
                                        <span class="focus-input100" data-placeholder="Masukan NIK"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="input-group">
                                    <div class="wrap-input100 validate-input m-t-10 m-b-10" data-validate="Masukan Kontak">
                                        <input class="input100" type="text" name="kontak" value="<?= $kontak ? $kontak : '' ?>">
                                        <span class="focus-input100" data-placeholder="Masukan Kontak"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="input-group">
                                    <div class="wrap-input100 validate-input m-t-15 m-b-20" data-validate="Masukan Alamat">
                                        <textarea class="input100" name="alamat" id="alamat" style="height:70px;padding:10px;"><?= $alamat ? $alamat : '' ?></textarea>
                                        <span class="focus-input100" data-placeholder="Masukan Alamat"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <button class="btn-default">
                                    <?= $button ?>
                                </button>
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