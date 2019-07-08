        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard <?= $this->session->userdata('level')=='Guru' ? "Guru" : "Admin Gans"; ?></a>
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
                                <a class="nav-link" href="<?php echo base_url(); ?>siswa"><i class="fa fa-fw fa-home"></i>Dashboard </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url(); ?>siswa/data_siswa"><i class="fa fa-fw fa-table"></i>Data Siswa </a>
                            </li>
                            <?php if($this->session->userdata('level')=='Admin') : ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url(); ?>siswa/tambah_siswa"><i class="fa fa-fw fa-plus"></i>Tambah Siswa </a>
                            </li>
                        <?php endif; ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url(); ?>siswa/absensi_siswa"><i class="fa fa-fw fa-book"></i>Absensi Siswa </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url(); ?>siswa/organisasi"><i class="fa fa-fw fa-users"></i>Organisasi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url(); ?>siswa/jadket"><i class="fa fa-fw fa-list"></i>Jadwal Piket</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url(); ?>siswa/history"><i class="fa fa-fw fa-history"></i>Activity</a>
                            </li>
                            <li class="nav-divider">
                                Setting
                            </li><?php if($this->session->userdata('level')=='Admin') : ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url(); ?>siswa/setting_absensi"><i class="fa fa-fw fa-lock"></i>Pengaturan Absensi </a>
                            </li><?php endif; ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url(); ?>siswa/logout" onclick="return confirm('Beneran???');"><i class="fa fa-fw fa-power-off"></i>Logout </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->