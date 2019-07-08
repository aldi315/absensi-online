        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#"><?=$this->session->userdata('name') ?></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"><i class="fa fa-fw fa-calendar-alt"></i><?= date('l, j F Y') ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url(); ?>user"><i class="fa fa-fw fa-home"></i>Home </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url(); ?>user/teras"><i class="fa fa-fw fa-university"></i>Dashboard </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url(); ?>user/daftarTeman"><i class="fa fa-fw fa-users"></i>Daftar Teman</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url(); ?>user/absensiSiswa"><i class="fa fa-fw fa-book"></i>Absensi Siswa </a>
                            </li>
                            <li class="nav-divider">
                                Setting
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url(); ?>user/logout" onclick="return confirm('Beneran???');"><i class="fa fa-fw fa-power-off"></i>Logout </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->