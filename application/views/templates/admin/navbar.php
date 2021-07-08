<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="#">Start Bootstrap</a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    <ul class="navbar-nav ms-auto me-0 me-md-3 my-2 my-md-0">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#!">Settings</a></li>
                <li>
                    <hr class="dropdown-divider" />
                </li>
                <li><a class="dropdown-item" href="<?= base_url('auth/logout') ?> ">Logout</a></li>
            </ul>
        </li>
    </ul>
</nav>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <a class="nav-link" href="<?= base_url('dashboard') ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    <div class="sb-sidenav-menu-heading">Pelayanan</div>
                    <!-- <a class="nav-link" href=" <?= base_url('dashboard/pembuatan_Ektp') ?> ">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Pembuatan E-KTP
                            </a> -->
                    <!-- e-ktp -->
                    <a class="nav-link collapsed" href=" <?= base_url('admin/ektp_status') ?> " >
                        <div class="sb-nav-link-icon"></div>
                        Pembuatan E-KTP
                    </a>

                    <!-- kk -->
                    <a class="nav-link collapsed" href=" <?= base_url('admin/kk_status') ?> " >
                        <div class="sb-nav-link-icon"></div>
                        Pembuatan KK
                    </a>

                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                <?php if($this->session->userdata('role_id') == 1) {
                    echo "Admin";
                } else {
                    echo "User";
                } ?>
            </div>
        </nav>
    </div>