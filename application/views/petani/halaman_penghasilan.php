<?php $this->load->view('layout/header_dsh'); ?>
<?php $this->load->view('layout/navbar_petani'); ?>

<div class="container-fluid">
    <div class="row" style="padding-top: 100px;">

        <div class="col-12">
            <div class="card" style="border-radius: 10px;">

                <div style=" text-align:center; color: #ffffff; border-radius: 10px 10px 0px 0px;  background-color:#264E36; padding: 20px 10px 10px 10px; font-size:12px;">
                    <!--  <table border="0" width="100%">
                        <tr>
                            <th>NO.</th>
                            <th>Nama Produk</th>
                            <th>Gambar</th>
                            <th>Tanggal Panen</th>
                            <th>Kode Pemasukan</th>
                            <th>Tanggal Pemasukan</th>
                            <th>Status</th>
                            <th>Pemasukan</th>
                            <th>Detail</th>
                        </tr>
                    </table> -->
                </div>

                <div style="text-align:center; padding:10px 10px 10px 10px;">
                    <table border="0" width="100%">
                        <!-- <tr hidden> -->
                        <tr>
                            <th>NO.</th>
                            <th>Nama Produk</th>
                            <th>Gambar</th>
                            <th>Tanggal Panen</th>
                            <th>Kode Pemasukan</th>
                            <th>Tanggal Pemasukan</th>
                            <th>Status</th>
                            <th>Pemasukan</th>
                            <th>Detail</th>
                        </tr>
                        <tr>
                            <td>1</td>
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
                    </table>
                </div>

                <div style="color: #ffffff; border-radius: 0px 0px 10px 10px; background-color: #8d9449; padding: 20px 10px 10px 10px; font-size:12px;">

                </div>
            </div>
        </div>
    </div>
</div>


<?php $this->load->view('layout/footer'); ?>