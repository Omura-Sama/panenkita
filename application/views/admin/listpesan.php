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
                    style="height:100%; background-color:#ffffff; position:absolute; left:80px; padding: 20px; border-radius: 0px 10px 10px 0px;">
                    <p style="font-size: 16px; font-weight: bold; color:#264E36;margin-bottom:20px">PESAN ANDA</p>
                    <div class="card-body table-responsive p-0" style="width: 700px; height: 450px;">
                        <table class="table table-head-fixed text-nowrap">
                            <tbody>
                                <?php foreach ($isipesan as $pesan): ?>
                                <tr>
                                    <td><img class="imgPesan" src="<?= base_url('assets/img/user.jpg'); ?>" alt=""
                                            width="60px" style="border-radius: 30px;"></td>
                                    <td>
                                        <h5><b><?=$pesan->pengirim?></b></h5>
                                        <p>
                                            <?= (str_word_count($pesan->isi_pesan) > 10 ? substr($pesan->isi_pesan,0,50)."[..]" : $pesan->isi_pesan)?>
                                        </p>
                                    </td>
                                    <td>
                                        <center><?=date('d-m-Y', strtotime($pesan->tanggal_pesan))?> <span
                                                class="fas fa-calendar-alt"></span></center>
                                        <a href="<?=site_url('admin/isipesan/?pengirim='.$pesan->pengirim.'&tanggal='.date('d-m-Y', strtotime($pesan->tanggal_pesan)))?>"
                                            class="btn-default">BACA</a>
                                    </td>
                                </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
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