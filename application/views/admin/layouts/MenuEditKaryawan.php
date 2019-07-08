                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- profile -->
                        <!-- ============================================================== -->
                        <div class="col-xl-3 col-lg-3 col-md-5 col-sm-12 col-12">
                            <!-- ============================================================== -->
                            <!-- card profile -->
                            <!-- ============================================================== -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="user-avatar text-center d-block">
                                        <img src="<?php echo base_url(); ?>images/<?= $dataKaryawan[0]->image_name; ?>" alt="<?= $dataKaryawan[0]->name; ?>" class="rounded user-avatar-xxl">
                                    </div>
                                    <div class="text-center">
                                        <h2 class="font-24 mb-0"><?= $dataKaryawan[0]->name; ?></h2>
                                        <p><?= $dataKaryawan[0]->position; ?><br><?= $dataKaryawan[0]->gender; ?><br><?= $dataKaryawan[0]->nik; ?></p>
                                    </div>
                                </div>
                                <div class="card-body border-top">
                                    <h3 class="font-16">Contact Information</h3>
                                    <div class="">
                                        <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="fas fa-fw fa-envelope mr-2"></i><?= $dataKaryawan[0]->email; ?></li>
                                        <li class="mb-2"><i class="fas fa-fw fa-phone mr-2"></i><?= $dataKaryawan[0]->handphone; ?></li>
                                        <li class="mb-0"><i class="fas fa-fw fa-home mr-2"></i><?= $dataKaryawan[0]->age; ?></li>
                                    </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end card profile -->
                            <!-- ============================================================== -->
                        </div>
                        <!-- ============================================================== -->
                        <!-- end profile -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- campaign data -->
                        <!-- ============================================================== -->
                        <div class="col-xl-9 col-lg-9 col-md-7 col-sm-12 col-12">
                            <!-- ============================================================== -->
                            <!-- campaign tab one -->
                            <!-- ============================================================== -->
                            <div class="influence-profile-content pills-regular">
                                <ul class="nav nav-pills mb-3 nav-justified" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-tentang-tab" data-toggle="pill" href="#pills-tentang" role="tab" aria-controls="pills-tentang" aria-selected="true">Tentang Siswa</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-riwayatabsensi-tab" data-toggle="pill" href="#pills-riwayatabsensi" role="tab" aria-controls="pills-riwayatabsensi" aria-selected="false">Riwayat Absensi</a>
                                    </li>  
                                    <?php if($this->session->userdata('level')=='Admin') : ?>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-ubahfoto-tab" data-toggle="pill" href="#pills-ubahfoto" role="tab" aria-controls="pills-ubahfoto" aria-selected="false">Ubah Foto</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-ubahinfo-tab" data-toggle="pill" href="#pills-ubahinfo" role="tab" aria-controls="pills-ubahinfo" aria-selected="false">Ubah Info</a>
                                    </li>
                                <?php endif; ?>
                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-tentang" role="tabpanel" aria-labelledby="pills-tentang-tab">
                                        <div class="card">
                                            <h5 class="card-header">Tentang <?= $dataKaryawan[0]->name; ?></h5>
                                            <div class="card-body">
                                                <div class="tentang-block">
                                                    <p class="tentang-text m-0"><?= $dataKaryawan[0]->tentang; ?></p><hr>
                                                    <span class="text-dark font-weight-bold">Total Absensi<br>Hadir: <?= $absensiKaryawan[0]->hadir; ?><br>Alpa: <?= $absensiKaryawan[0]->alpa; ?><br>Izin: <?= $absensiKaryawan[0]->izin; ?><br>Sakit: <?= $absensiKaryawan[0]->sakit; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-riwayatabsensi" role="tabpanel" aria-labelledby="pills-riwayatabsensi-tab">
                                        <div class="card">
                                            <h5 class="card-header">Riwayat Absensi <?= $dataKaryawan[0]->name; ?></h5>
                                            <?php foreach($alasanKaryawan as $rows) { ?>
                                            <div class="card-body border-top">
                                                <div class="riwayatabsensi-block">
                                                    <p class="riwayatabsensi-text m-0"><?= $rows->tanggal; ?></p>
                                                    <span class="text-dark font-weight-bold"><?= $rows->alasan; ?>
                                                </div>
                                            </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-ubahinfo" role="tabpanel" aria-labelledby="pills-ubahinfo-tab">
                                        <div class="card">
                                            <h5 class="card-header">Ubah Info</h5>
                                            <div class="card-body">
                                                <form method="POST" action="<?php echo base_url(); ?>siswa/changeInfoKaryawan">
                                                    <div class="row">
                                                        <div class="offset-xl-3 col-xl-6 offset-lg-3 col-lg-3 col-md-12 col-sm-12 col-12 p-4">
                                                            <div class="form-group">
                                                                <label for="name">Fullname</label>
                                                                <input type="text" class="form-control form-control-lg" onchange="document.getElementById('ubahInfoButton').style.display='block'" name="name" value="<?= $dataKaryawan[0]->name; ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="email">Nickname</label>
                                                                <input type="text" onchange="document.getElementById('ubahInfoButton').style.display='block'" class="form-control form-control-lg" name="position" value="<?= $dataKaryawan[0]->position; ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="subject">Address</label>
                                                                <input type="text" onchange="document.getElementById('ubahInfoButton').style.display='block'" class="form-control form-control-lg" name="age" value="<?= $dataKaryawan[0]->age; ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="subject">Birthdate</label>
                                                                <input type="text" onchange="document.getElementById('ubahInfoButton').style.display='block'" class="form-control form-control-lg" name="start_date" value="<?= $dataKaryawan[0]->start_date; ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="subject">Parents</label>
                                                                <input type="text" onchange="document.getElementById('ubahInfoButton').style.display='block'" class="form-control form-control-lg" name="salary" value="<?= $dataKaryawan[0]->salary; ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="subject">Email</label>
                                                                <input type="email" class="form-control onchange="document.getElementById('ubahInfoButton').style.display='block'" form-control-lg" name="email" value="<?= $dataKaryawan[0]->email; ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="subject">Handphone (ex: 62xxxxxxxxxxx)</label>
                                                                <input type="number" onchange="document.getElementById('ubahInfoButton').style.display='block'" class="form-control form-control-lg" name="handphone" value="<?= $dataKaryawan[0]->handphone; ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="subject">Tentang (*Use < br > no space, for new line)</label>
                                                                <textarea type="text" class="form-control form-control-lg" onchange="document.getElementById('ubahInfoButton').style.display='block'" rows="7" name="tentang"><?= $dataKaryawan[0]->tentang; ?></textarea>
                                                            </div>
                                                            <input type="hidden" name="id" value="<?= $dataKaryawan[0]->id; ?>">
                                                            <div id="ubahInfoButton" style="display: none">
                                                            <button type="submit" class="btn btn-primary float-left" id="changeInfo">Ubah</button>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-ubahfoto" role="tabpanel" aria-labelledby="pills-ubahfoto-tab">
                                        <div class="card">
                                            <h5 class="card-header">Ubah Foto</h5>
                                            <div class="card-body">
                                                <form method="POST" action="<?php echo base_url(); ?>siswa/changeFotoKaryawan" enctype="multipart/form-data">
                                                    <div class="row">
                                                        <div class="offset-xl-3 col-xl-6 offset-lg-3 col-lg-3 col-md-12 col-sm-12 col-12 p-4">
                                                            <div class="custom-file mb-3">
                                                                <input type="file" class="custom-file-input" id="uploadImage" name="upload_image" onchange="document.getElementById('ubah').style.display='block'">
                                                                <label class="custom-file-label btn-secondary" for="uploadImage"><i class="fa fa-fw fa-upload"></i> Click To Upload Photo</label>
                                                            </div>
                                                            <input type="hidden" name="id" value="<?=$dataKaryawan[0]->id;?>">
                                                            <div id="ubah" style="display: none">
                                                            <button type="submit" class="btn btn-primary float-left" id="changeFoto">Ubah</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end campaign tab one -->
                            <!-- ============================================================== -->
                        </div>
                        <!-- ============================================================== -->
                        <!-- end campaign data -->
                        <!-- ============================================================== -->
                    </div>
                </div>
            </div>