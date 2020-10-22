<?php $this->load->view('layout/header'); ?>
<?php $this->load->view('layout/navbar'); ?>

<div class="container-fluid" style="background-color:#ffffff; padding-top:80px;">
    <div class=" row">
        <div class="col-2">
        </div>
        <div class="col-8">
            <div class="card" style="border-radius: 10px;">
                <div style="height:550px;">
                    <div style="width:100%; height:70px;background-color:#264E36; border-radius: 10px 10px 0px 0px;"></div>
                    <center style="padding: 135px;">
                        <h1>SELAMAT DATANG DIHALAMAN ADMIN (SEMENTARA)</h1>
                        <p><?= @$data ?></p>
                    </center>
                    <div style="width:100%; height:70px;top:100px;background-color:#8D9449; border-radius: 0px 0px 10px 10px;"></div>
                </div>
            </div>
            <center style="font-size:14px;padding:10px;">
                <p style="color:#264E36;"><b>&copy; 2020.</b> <img src=" <?= base_url('assets/img/logo/text_eden_logo.png'); ?>" alt="" class="img-fluid" width="100px" style="margin-top:-3px;"></p>
            </center>
        </div>
    </div>
</div>
<?php $this->load->view('layout/footer'); ?>