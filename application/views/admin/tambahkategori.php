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
                <div
                    style="width:90%; height:100%; background-color:#ffffff; position:absolute; left:80px; padding: 30px; border-radius: 0px 10px 10px 0px;">
                    <p style="font-size: 16px; font-weight: bold; color:#264E36;margin-bottom:20px">TAMBAH KATEGORI</p>
                    <?php echo $this->session->flashdata('notif'); ?>

                    <form action="<?php echo base_url() ?>index.php/admin/insertKategori" method="POST">
                        <?php foreach ($kategori as $key) : ?>
                        <div class="input-group">
                            <div class="wrap-input100 validate-input m-t-10 m-b-10"
                                data-validate="Masukan Nama Kategori">
                                <input class="input100" type="text" name="nama_kategori"
                                    value="<?=@$key->name_kategori ? $key->name_kategori : ''?>">
                                <span class="focus-input100"
                                    data-placeholder="<?=@$key->name_kategori ? $key->name_kategori : 'Masukan Nama Kategori'?>"></span>
                            </div>
                        </div>
                        <div class="input-group">
                            <div class="wrap-input100 validate-input m-t-10 m-b-10" data-validate="Masukan Tipe Panen">
                                <input class="input100" type="text" name="tipe_panen"
                                    value="<?=@$key->tipe_panen ? $key->tipe_panen : '' ?>">
                                <span class="focus-input100" data-placeholder="Masukan Tipe Panen"></span>
                            </div>
                        </div>
                        <div class="input-group">
                            <div class="wrap-input100 validate-input m-t-10 m-b-10" data-validate="Masukan PPN">
                                <input class="input100" type="text" name="ppn" value="<?=@$key->ppn?>">
                                <span class="focus-input100" data-placeholder="Masukan PPN"></span>
                            </div>
                        </div>
                        <div class="input-group">
                            <div class="wrap-input100 validate-input m-t-10 m-b-10" data-validate="Masukan Deskripsi">
                                <textarea class="input100" name="deskripsi" style="height:70px;padding:10px;"
                                    value="<?=@$key->dekripsi?>"></textarea>
                                <span class="focus-input100" data-placeholder="Masukan Deskripsi"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <button type="submit" class="btn-default">
                                    TAMBAH
                                </button>
                            </div>
                        </div>
                        <?php endforeach ?>
                    </form>
                </div>
            </div>
            <center style="font-size:14px;padding:10px;">
                <p style="color:#264E36;"><b>&copy; 2020.</b> <img
                        src=" <?= base_url('assets/img/logo/text_eden_logo.png'); ?>" alt="" class="img-fluid"
                        width="100px" style="margin-top:-3px;"></p>
            </center>
        </div>
    </div>
</div>
<?php $this->load->view('layout/footer'); ?>