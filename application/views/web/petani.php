<?php $this->load->view('layout/header_dsh'); ?>
<?php $this->load->view('layout/navbar_petani'); ?>

<div class="container-fluid">
    <div class="row" style="padding-top: 100px;">
        <div class="col-2">
        </div>
        <div class="col-8">
            <div class="card" style="border-radius: 10px;">
                <!-- <?php echo $username; ?>
                <?php echo $email; ?> -->
                <!-- <?php 
                        
                print_r($this->session->userdata);
                ?> -->

                <div style="color: #ffffff; border-radius: 10px 10px 0px 0px;  background-color:#264E36; padding: 20px 10px 10px 10px; font-size:12px;">
                </div>

                <div style="text-align:center; padding:150px 10px 150px 10px;">
                    <h1> SELAMAT DATANG DI HALAMAN PETANI (SEMENTARA) </h1>
                    <!-- <?php echo print_r($this->session->userdata()); ?> -->
                </div>

                <div style="color: #ffffff; border-radius: 0px 0px 10px 10px; background-color: #8d9449; padding: 20px 10px 10px 10px; font-size:12px;">

                </div>
            </div>
        </div>
    </div>
</div>


<?php $this->load->view('layout/footer'); ?>