<!-- Navbar -->
<nav class="main-header navbar navbar-expand-md"
    style="width:100%;position:fixed;background-color:#264E36;margin:0px;padding:0px;height:60px;">
    <div class="container">
        <a href="<?= site_url('tengkulak/index'); ?>">
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
                <a class="nav-link" href="<?= site_url('tengkulak/pemberitahuan'); ?>">
                    <i class="fas fa-bell"></i>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="">
                    <i class="fas fa-comment-dots"></i>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="">
                    <i class="fas fa-shopping-cart"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="fas fa-caret-down"></i>
                </a>
            </li>
        </ul>
    </div>
</nav>
<!-- /.navbar -->