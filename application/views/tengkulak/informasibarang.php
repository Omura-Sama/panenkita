<?php $this->load->view('layout/header'); ?>
<?php $this->load->view('layout/navbar_tengkulak'); ?>

<div class="container-fluid" style="background-color:#ffffff; padding-top:80px;">
    <div class=" row">
        <div class="col-2">
        </div>
        <div class="col-8">
            <div class="card" style="border-radius: 10px;">
                <div class="row">
                    <div class="col-1" style="background-color: #264E36;border-radius: 10px 0px 0px 10px;">
                    </div>
                    <div class="col-11" style="padding:0px 5px 0px 0px;">
                        <table class="table table-bordered">
                            <tr>
                                <td width="75%" style="padding: 0;">
                                    <img src=" <?= base_url('assets/img/pisang.jpeg'); ?>" alt="" width="100%">
                                </td>
                                <td align="center">
                                    <button class="btn btn-default"
                                        style="margin-bottom: 20px; width:170px;">Beli</button>
                                    <button class="btn btn-default"
                                        style="margin-bottom: 20px; width:170px;">Simpan</button>
                                    <button class="btn btn-default" style="margin-bottom: 20px; width:170px;">Kirim
                                        Pesan</button>
                                    <button class="btn btn-danger"
                                        style="margin-bottom: 20px; width:170px;">Kembali</button>
                                </td>
                            </tr>
                            <tr>
                                <td rowspan="2">
                                    <h4><b>Rp. Harga</b></h4>
                                    <h6><b>Nama Produk</b></h6>
                                    <br>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere eos beatae
                                        perspiciatis rem enim sapiente ratione! Sit, ad corrupti quo vero ab doloremque
                                        excepturi quas praesentium nam omnis, corporis accusamus?</p>
                                </td>
                                <td>
                                    <h6><b>Infromasi Barang</b></h6>
                                    <p style="text-align: right;"><b>Tanggal Panen</b></p>
                                    <p>Stok</p>
                                    <p style="text-align: right;">0</p>
                                    <p>Terjual</p>
                                    <p style="text-align: right;">0</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6><b>Petani</b></h6>
                                    <div class="row">
                                        <div class="col-4">
                                            <img class="imgPesan" src="<?= base_url('assets/img/user.jpg'); ?>" alt=""
                                                width="50px" style="position:initial; border-radius: 30px;">
                                        </div>
                                        <div class="col-8">
                                            <h6><b>Nama Petani</b></h6>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam iste aspernatur
                                        sint
                                        sit corporis, rem architecto fugit, adipisci saepe nulla omnis ut consectetur,
                                        maxime necessitatibus voluptates pariatur. Saepe, sequi aliquam.</p>
                                </td>
                            </tr>
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