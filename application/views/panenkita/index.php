<?php $this->load->view('layout/header'); ?>
<?php $this->load->view('layout/navbar'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="width:100%; margin: 0px; padding-top:60px">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container" align="center">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="width: 1000px;">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-50" src="<?= base_url('assets/img/pisang.jpeg'); ?>" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-50" src="<?= base_url('assets/img/pisang.jpeg'); ?>" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-50" src="<?= base_url('assets/img/pisang.jpeg'); ?>" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <div class="card card-solid">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-sm-6 col-md-4">
                                    <div class="card" style="border-radius: 10px;">
                                        <img src=" <?= base_url('assets/img/pisang.jpeg'); ?>" alt="" class="img-fluid" style="border-radius: 10px 10px 0px 0px;">
                                        <a href="#">
                                            <span class="badge navbar-badge" style="background-color: #ffffff; opacity: 0.5; font-size:20px; padding:10px; border-radius:20px;"><i class="fas fa-star"></i></span>
                                        </a>
                                        <a href="">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <h2 class="lead"><b>Pisang</b></h2>
                                                        <p>Buah-buahan segar</p>
                                                        <p class="text-blue"><b>Rp. 100.000</b></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4">
                                    <div class="card" style="border-radius: 10px;">
                                        <img src=" <?= base_url('assets/img/pisang.jpeg'); ?>" alt="" class="img-fluid" style="border-radius: 10px 10px 0px 0px;">
                                        <a href="#">
                                            <span class="badge navbar-badge" style="background-color: #ffffff; opacity: 0.5; font-size:20px; padding:10px; border-radius:20px;"><i class="fas fa-star"></i></span>
                                        </a>
                                        <a href="">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <h2 class="lead"><b>Pisang</b></h2>
                                                        <p>Buah-buahan segar</p>
                                                        <p class="text-blue"><b>Rp. 100.000</b></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4">
                                    <div class="card" style="border-radius: 10px;">
                                        <img src=" <?= base_url('assets/img/pisang.jpeg'); ?>" alt="" class="img-fluid" style="border-radius: 10px 10px 0px 0px;">
                                        <a href="#">
                                            <span class="badge navbar-badge" style="background-color: #ffffff; opacity: 0.5; font-size:20px; padding:10px; border-radius:20px;"><i class="fas fa-star"></i></span>
                                        </a>
                                        <a href="">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <h2 class="lead"><b>Pisang</b></h2>
                                                        <p>Buah-buahan segar</p>
                                                        <p class="text-blue"><b>Rp. 100.000</b></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <nav aria-label="Contacts Page Navigation">
                                <ul class="pagination justify-content-center m-1">
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                                    <li class="page-item"><a class="page-link" href="#">7</a></li>
                                    <li class="page-item"><a class="page-link" href="#">8</a></li>
                                </ul>
                            </nav>
                            <center style="font-size:14px;padding-top:30px;">
                                <p style="color:#264E36;"><b>&copy; 2020.</b> <img src=" <?= base_url('assets/img/logo/text_eden_logo.png'); ?>" alt="" class="img-fluid" width="100px" style="margin-top:-3px;"></p>
                            </center>
                        </div>
                        <!-- /.card-footer -->
                    </div>
                </div>
                <!-- /.col -->
            </div>
        </div><!-- /.container-fluid -->
    </section>

</div>
<?php $this->load->view('layout/footer'); ?>