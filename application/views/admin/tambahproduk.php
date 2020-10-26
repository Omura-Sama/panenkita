<?php $this->load->view('layout/header'); ?>
<?php $this->load->view('layout/navbar'); ?>

<?php
$id = '';
$foto = '';
$nama_produk = '';
$nama_petani = '';
$kategori = '';
$tanggal = '';
$stok = '';
$deskripsi = '';
$harga = '';
$button = 'TAMBAH';
if ($produk) {
    foreach ($produk as $key) {
        $id = $key->id_produk;
        $foto = $key->foto_produk;
        $nama_produk = $key->nama_produk;
        $nama_petani = $key->nama_petani;
        $kategori = $key->nama_kategori;
        $tanggal = date('m/d/Y', strtotime($key->tanggal_panen));
        $stok = $key->stok_produk;
        $deskripsi = $key->deskripsi_produk;
        $harga = $key->harga_produk;
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
                    <form action="<?php echo base_url() ?>index.php/admin/insertProduk" method="POST">
                        <div class="row">
                            <div class="col-6">
                                <p style="font-size: 26px; font-weight: bold; color:#264E36;margin-bottom:20px"><?= $button ?>
                                    PRODUK</p>
                                <?php echo $this->session->flashdata('notif'); ?>
                            </div>

                            <div class="col-6">
                                <div class="custom-file" style="margin: 30px 0px;">
                                    <input type="file" class="custom-file-input" id="foto" name="foto" style="display: none;" value="<?= $foto ? $foto : '' ?>">
                                    <label for="foto">
                                        <img src="<?= base_url('assets/img/default.jpg'); ?>" alt="Upload Foto" width="50px">
                                        <b style=" color:#264E36;">Simpan Foto</b>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="input-group">
                                    <div class="wrap-input100 validate-input m-b-10" data-validate="Masukan Nama Produk">
                                        <input type="hidden" name="id" value="<?= $id ? $id : '' ?>">
                                        <input class="input100" type="text" name="nama_produk" value="<?= $nama_produk ? $nama_produk : '' ?>">
                                        <span class="focus-input100" data-placeholder="Masukan Nama Produk"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="input-group">
                                    <div class="wrap-input100 validate-input m-t-10 m-b-10">
                                        <select class="custom-select" name="nama_petani" id="nama_petani" style="border: 0;box-shadow:none;">
                                            <option value="">- Pilih Nama Petani -</option>
                                            <?php foreach ($listpetani as $key) : ?>
                                                <?php
                                                $selected = '';
                                                if ($key->nama_petani == $nama_petani) {
                                                    $selected = 'selected=true';
                                                }
                                                ?>
                                                <option value="<?= $key->nama_petani; ?>" <?= $selected ?>> <?= $key->nama_petani; ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="input-group">
                                    <div class="wrap-input100 validate-input m-t-10 m-b-10">
                                        <!-- <?php print_r($listkategori); ?> -->
                                        <select class="custom-select" name="kategori" id="kategori" style="border: 0;box-shadow:none;">
                                            <option value="">- Pilih Kategori Produk -</option>
                                            <?php foreach ($listkategori as $key) : ?>
                                                <?php
                                                $selected = '';
                                                if ($key->nama_kategori == $kategori) {
                                                    $selected = 'selected=true';
                                                }
                                                ?>
                                                <option value="<?= $key->nama_kategori; ?>" <?= $selected ?>> <?= $key->nama_kategori;  ?>
                                                </option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="wrap-input100 validate-input m-t-10 m-b-10" data-validate="Masukan Stok / Kuintal">
                                    <div class="input-group date" id="tanggal" data-target-input="nearest">
                                        <input type="text" name="tanggal" id="tanggal" class="form-control datetimepicker-input" data-target="#tanggal" style="border: 0;box-shadow:none;" placeholder="Pilih Tanggal Panen" value="<?= $tanggal ? $tanggal : '' ?>" />
                                        <label for="tanggal">
                                            <div class="input-group-append" data-target="#tanggal" data-toggle="datetimepicker">
                                                <div class="input-group-text" style="border:0;background-color:#ffffff;"><i class="fa fa-calendar"></i></div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="input-group">
                                    <div class="wrap-input100 validate-input m-t-10 m-b-10" data-validate="Masukan Stok / Kuintal">
                                        <input class="input100" type="text" name="stok" value="<?= $stok ? $stok : '' ?>">
                                        <span class="focus-input100" data-placeholder="Masukan Stok / Kuintal"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="input-group">
                                    <div class="wrap-input100 validate-input m-t-15 m-b-20" data-validate="Masukan Deskripsi Produk">
                                        <textarea class="input100" name="deskripsi" id="deskripsi" style="height:70px;padding:10px;"><?= $deskripsi ? $deskripsi : '' ?></textarea>
                                        <span class="focus-input100" data-placeholder="Masukan Deskripsi Produk"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="input-group">
                                    <div class="wrap-input100 validate-input m-b-10" data-validate="Masukan Harga / Rupiah">
                                        <input class="input100" type="text" name="harga" value="<?= $harga ? $harga : '' ?>">
                                        <span class="focus-input100" data-placeholder="Masukan Harga / Rupiah"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px;">
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