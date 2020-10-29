<div class="container-fluid" style="background-color:#ffffff; padding-top:80px;">
    <div class=" row">
        <div class="col-2">
        </div>
        <div class="col-8">
            <div class="card" style="border-radius: 10px;">
                <div style="width:10%; background-color: #264E36; height:550px;border-radius: 10px 0px 0px 10px;">
                </div>
                <div style="height:100%; background-color:#ffffff; position:absolute; left:80px; padding: 20px; border-radius: 0px 10px 10px 0px;">
                    <p style="font-size: 20px; font-weight: bold; color:#264E36;">PESAN ANDA</p>
                    <div class="row" style="margin-bottom:10px;">
                        <div class="col-8">
                            <p style="font-size: 16px; color:#000000; "><b><?= strtoupper($pengirim) ?></b></p>
                        </div>
                        <div class="col-4">
                            <p style="font-size: 16px; color:#000000; text-align:right;"><?= $tanggal ?> <span class="fas fa-calendar-alt"></span></p>
                        </div>
                    </div>
                    <div class="card-body table-responsive p-0" style="width: 700px; height: 300px;">
                        <table class="table table-head-fixed">
                            <tbody>
                                <?php foreach ($pesan as $isiPesan) : ?>
                                    <?php if ($isiPesan->id_user == $this->session->userdata('iduser')) : ?>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="col-10">
                                                        <h5><b><?= strtoupper($isiPesan->username) ?></b></h5>
                                                        <p><?= $isiPesan->isi_pesan ?></p>
                                                    </div>
                                                    <div class="col-2">
                                                        <img class="imgPesan" src="<?= base_url('assets/img/user.jpg'); ?>" alt="" width="60px" style="border-radius: 30px;">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="col-2">
                                                        <img class="imgPesan" src="<?= base_url('assets/img/user.jpg'); ?>" alt="" width="60px" style="border-radius: 30px;">
                                                    </div>
                                                    <div class="col-10">
                                                        <h5><b><?= strtoupper($isiPesan->username) ?></b></h5>
                                                        <p><?= $isiPesan->isi_pesan ?></p>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endif ?>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                    <form action="<?php echo base_url() ?>index.php/admin/insertPesan" method="POST">
                        <div class="row">
                            <div class="col">
                                <input type="hidden" name="pengirim" id="pengirim" value="<?= $pengirim ?>">
                                <input type="hidden" name="id_user" id="id_user" value="<?= $this->session->userdata('iduser') ?>">
                                <input type="hidden" name="unicode" id="unicode" value="<?= $unicode ?>">
                                <div class="input-group">
                                    <div class="wrap-input100 validate-input m-t-10 m-b-20" data-validate="Masukan Pesan">
                                        <input class="input100" type="text" name="isi_pesan">
                                        <span class="focus-input100" data-placeholder="Masukan Pesan"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2">
                                <button type="submit" class="btn btn-default">
                                    Balas
                                </button>
                            </div>
                            <!-- <div class="col-2">
                                <button class="btn btn-danger" style="padding: 10px 28px;">
                                    Hapus
                                </button>
                            </div> -->
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