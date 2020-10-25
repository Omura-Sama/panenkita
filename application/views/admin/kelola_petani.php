<?php $this->load->view('layout/header'); ?>
<?php $this->load->view('layout/navbar'); ?>
<div class="container-fluid">
    <div class="row" style="background-color:white;padding-top: 100px;">

        <div class="col-12">
            <div class="card" style="border-radius: 10px;">

                <div class="card-body table-responsive p-0" style="text-align:center; border-radius: 10px 10px 0px 0px;font-size:12px;">
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="background: #264E36; color:#ffffff;">NO.</th>
                                <th style="background: #264E36; color:#ffffff;">Nama Produk</th>
                                <th style="background: #264E36; color:#ffffff;">Gambar</th>
                                <th style="background: #264E36; color:#ffffff;">Tanggal Panen</th>
                                <th style="background: #264E36; color:#ffffff;">Kode Pemasukan</th>
                                <th style="background: #264E36; color:#ffffff;">Tanggal Pemasukan</th>
                                <th style="background: #264E36; color:#ffffff;">Status</th>
                                <th style="background: #264E36; color:#ffffff;">Pemasukan</th>
                                <th style="background: #264E36; color:#ffffff;">Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i = 1; $i <= 20; $i++) : ?>
                                <tr>
                                    <td><?= $i ?></td>
                                    <td>Pisang</td>
                                    <td>null</td>
                                    <td>tes</td>
                                    <td>tes</td>
                                    <td>tes</td>
                                    <td>tes</td>
                                    <td>tes</td>
                                    <td>
                                        <a href="<?php echo site_url('Petani/statPenghasilan/') ?>"> Cek</a>
                                    </td>
                                </tr>
                            <?php endfor ?>
                        </tbody>
                    </table>
                </div>

                <div style="color: #ffffff; border-radius: 0px 0px 10px 10px; background-color: #8d9449; padding: 20px 10px 10px 10px; font-size:12px;">

                </div>
            </div>
            <center style="font-size:14px;padding:10px;">
                <p style="color:#264E36;"><b>&copy; 2020.</b> <img src=" <?= base_url('assets/img/logo/text_eden_logo.png'); ?>" alt="" class="img-fluid" width="100px" style="margin-top:-3px;"></p>
            </center>
        </div>
    </div>
</div>


<?php $this->load->view('layout/footer'); ?>