<?php $this->load->view('layout/header'); ?>
<?php $this->load->view('layout/navbar'); ?>

<style type="text/css">
    .Table
    {
        display: table;
    }
    .Title
    {
        display: table-caption;
        text-align: center;
        font-weight: bold;
        font-size: larger;
    }
    .Heading
    {
        display: table-row;
        font-weight: bold;
        text-align: center;
    }
    .Row
    {
        display: table-row;
    }
    .Cell
    {
        display: table-cell;
        border: solid;
        border-width: thin;
        padding-left: 5px;
        padding-right: 5px;
    }
</style>

<div class="container-fluid" style="background-color:#ffffff; padding-top:80px;">
    <div class=" row">
        <div class="col-1">
        </div>
        <div class="col-10">
            <div class="card" style="border-radius: 10px;">
                <div style="height:550px;border-radius: 0px 0px 0px 0px;"></div>
                <div style="width:100%; height:100%; background-color:#ffffff; position:absolute; left:0px; padding: 10px; border-radius: 0px 10px 10px 0px;">
                    <div class="table">
                        <div class="Heading">
                        <div class="Cell">
                            <p>No</p>
                        </div>
                        <div class="Cell">
                            <p>Nama Produk</p>
                        </div>
                        <div class="Cell">
                            <p>Produk</p>
                        </div>
                        <div class="Cell">
                            <p>Foto</p>
                        </div>
                        <div class="Cell">
                            <p>Nama Petani</p>
                        </div>
                        <div class="Cell">
                            <p>Kategori</p>
                        </div>
                        <div class="Cell">
                            <p>Tanggal Panen</p>
                        </div>
                        <div class="Cell">
                            <p>Stok/Kuintal</p>
                        </div>
                        <div class="Cell">
                            <p>Deskripsi Produk</p>
                        </div>
                        <div class="Cell">
                            <p>Harga</p>
                        </div>
                        <div class="Cell">
                            <p>Ubah Data</p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <center style="font-size:14px;padding:10px;">
                <p style="color:#264E36;"><b>&copy; 2020.</b> <img src=" <?= base_url('assets/img/logo/text_eden_logo.png'); ?>" alt="" class="img-fluid" width="100px" style="margin-top:-3px;"></p>
            </center>
        </div>
    </div>
</div>
<?php $this->load->view('layout/footer'); ?>