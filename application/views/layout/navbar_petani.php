<!-- Navbar -->
<nav class="main-header navbar navbar-expand-md" style="width:100%;position:fixed;background-color:#264E36;margin:0px;padding:0px;height:60px;">
    <div class="container">
        <a href="<?= site_url('Petani/index'); ?>">
            <img src="<?= base_url('assets/img/logo/emblem_white_logo.png'); ?>" alt="Panenkita Logo" width="40px">
        </a>
        <div class="collapse navbar-collapse order-3" style="padding-left:30px;">
            <!-- SEARCH FORM -->
<!--             <form class="form-inline ml-0 ml-md-3">
                <div class="input-group input-group-sm" style="background-color: white; border-radius:5px; width:300px">
                    <input class="form-control form-control-navbar" type="search" placeholder="Pencarian" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form> -->
        </div>
        <!-- Right navbar links -->
        <ul class="order-3 order-md-3 navbar-nav navbar-no-expand ml-auto ul-petani">
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" href="<?= site_url('Petani/akunSaya'); ?>">
                    <i class="fas fa-user"></i>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="<?= site_url('Petani/halPenghasilan'); ?>">
                    <i class="fas fa-money-bill"></i>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="fas fa-comment-dots"></i>
                    <span class="badge badge-warning navbar-badge">1</span>
                </a>
                <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                    <a href="#" class="dropdown-item">Pesan tengkulak </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">Pesan petani</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="fas fa-shopping-basket"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                    <a href="<?= site_url('Admin/tambahproduk'); ?>" class="dropdown-item">Tambah Produk</a>
                    <div class="dropdown-divider"></div>
                    <a href="<?= site_url('Admin/tambahpetani'); ?>" class="dropdown-item">Tambah Petani</a>
                    <div class="dropdown-divider"></div>
                    <a href="<?= site_url('Admin/tambahkategori'); ?>" class="dropdown-item">Tambah Kategori</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('Login/logout'); ?>">
                    <i class="fas fa-sign-out-alt"></i>
                </a>
            </li>
        </ul>
    </div>
</nav>
<!-- /.navbar -->