<?php $this->load->view('layout/header'); ?>
<?php $this->load->view('layout/navbar'); ?>

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
                                <p style="font-size: 26px; font-weight: bold; color:#264E36;margin-bottom:20px">TAMBAH PRODUK</p>
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
                            <div class="col">
                                <div class="input-group">
                                    <div class="wrap-input100 validate-input m-b-10" data-validate="Masukan Nama Produk">
                                        <input class="input100" type="text" name="nama_produk">
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
                                            <?php foreach ($listpetani as $key): ?>
                                                <option value="<?= $key->nama_petani; ?>"> <?= $key->nama_petani; ?></option>
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
                                            <?php foreach ($listkategori as $key): ?>
                                                <option value="<?= $key->name_kategori; ?>"> <?= $key->name_kategori;  ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="wrap-input100 validate-input m-t-10 m-b-10" data-validate="Masukan Stok / Kuintal">
                                    <div class="input-group date" id="tanggalpanen" data-target-input="nearest">
                                        <input type="text" name="tanggal" id="tanggal" class="form-control datetimepicker-input" data-target="#tanggalpanen" style="border: 0;box-shadow:none;" placeholder="Pilih Tanggal Panen" />
                                        <label for="tanggal">
                                            <div class="input-group-append" data-target="#tanggalpanen" data-toggle="datetimepicker">
                                                <div class="input-group-text" style="border:0;background-color:#ffffff;"><i class="fa fa-calendar"></i></div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="input-group">
                                    <div class="wrap-input100 validate-input m-t-10 m-b-10" data-validate="Masukan Stok / Kuintal">
                                        <input class="input100" type="text" name="stok">
                                        <span class="focus-input100" data-placeholder="Masukan Stok / Kuintal"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="input-group">
                                    <div class="wrap-input100 validate-input m-t-15 m-b-20" data-validate="Masukan Deskripsi Produk">
                                        <textarea class="input100" name="deskripsi" id="deskripsi" style="height:70px;padding:10px;"></textarea>
                                        <span class="focus-input100" data-placeholder="Masukan Deskripsi Produk"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="input-group">
                                    <div class="wrap-input100 validate-input m-b-10" data-validate="Masukan Harga / Rupiah">
                                        <input class="input100" type="text" name="harga">
                                        <span class="focus-input100" data-placeholder="Masukan Harga / Rupiah"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px;">
                            <div class="col-4">
                                <button class="btn-default">
                                    TAMBAH
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