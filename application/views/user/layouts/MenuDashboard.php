<div class="row">
<!-- ============================================================== -->
<!-- profile -->
<!-- ============================================================== -->
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
<a href="#pills-riwayatabsensi">
    <div class="alert <?=$absensiKaryawan[0]->absen ? 'btn-info' : 'btn-danger' ?>">
        <?php $dari = strtotime($start);$sampai = strtotime($end); 
        if (time() >= $dari && time()-(1 * 24 * 60 * 60) <= $sampai) { ?>
            <font color="white" size="5px" class="text-center">Hari ini LIBUR Karena <?=$kenapa ?></font>    
        <?php }else{ ?> 
    <font color="white" size="5px" class="text-center"><?=$absensiKaryawan[0]->absen ? "Horee! ".ucfirst($dataKaryawan[0]->position)." Berada dalam Zona Aman & Nyaman :)" : "Aigooo!!! ".ucfirst($dataKaryawan[0]->position)." Belum Hadir hari ini :( Buruan atuh geura Absen" ;?></font>
        <?php } ?>
</div>
</a>
</div>

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
<div class="row">
     <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="card">
    <div class="card-body border-top">
        <h3 class="font-16 text-center">Login</h3>
        <hr>
        <div class="">
            <ul class="list-unstyled mb-0">
                <?php foreach ($getUserOnlineByOnline as $key) :?>
                    <?php if ($key->name === $dataKaryawan[0]->name) {
                        $key->name .= " (Me)";
                    } ?>
            <li class="mb-2"><i class="fas fa-fw fa-minus mr-2" style="color: #23EF08;"></i><?= $key->name; ?></li>
        <?php endforeach; ?>
            
        </ul>
        </div>
    </div>
</div>
</div>
</div>
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
            <a class="nav-link" id="pills-tentang-tab" data-toggle="pill" href="#pills-tentang" role="tab" aria-controls="pills-tentang" aria-selected="true">My Information</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" id="pills-riwayatabsensi-tab" data-toggle="pill" href="#pills-riwayatabsensi" role="tab" aria-controls="pills-riwayatabsensi" aria-selected="false">My Absensi</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-ubahinfo-tab" data-toggle="pill" href="#pills-ubahinfo" role="tab" aria-controls="pills-ubahinfo" aria-selected="false">Ubah Info</a>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade" id="pills-tentang" role="tabpanel" aria-labelledby="pills-tentang-tab">
            <div class="card">
                <h5 class="card-header">Info Siswa <?= $dataKaryawan[0]->name; ?></h5>
    
            
        <div class="card-body border-top ">
            <p><?= $dataKaryawan[0]->tentang; ?></p>
        <h3 class="font-16">Contact Information</h3>
        <div class="">
            <ul class="list-unstyled mb-0">
            <li class="mb-2"><i class="fas fa-fw fa-key mr-2"></i>Nis : <?= $dataKaryawan[0]->nik; ?></li>
            <li class="mb-2"><i class="fas fa-fw fa-birthday-cake mr-2"></i>Birthdate : <?= $dataKaryawan[0]->start_date; ?></li>
            <li class="mb-2"><i class="fas fa-fw fa-users mr-2"></i>Parent's Name : <?= $dataKaryawan[0]->salary; ?></li>
            <li class="mb-0"><i class="fas fa-fw fa-home mr-2"></i>Address : <?= $dataKaryawan[0]->age; ?></li>
        </ul>
        </div>
     </div>
  

            </div>
        </div>
        <div class="tab-pane fade  show active" id="pills-riwayatabsensi" role="tabpanel" aria-labelledby="pills-riwayatabsensi-tab">
            <div class="card">
                <h5 class="card-header">Riwayat Absensi Siswa <?= $dataKaryawan[0]->name; ?></h5>
                <div class="card-body">
                    <div class="tentang-block">
                        <p class="tentang-text m-0">Mulai Absen: <?= $settingAbsensi[0]->mulai_absen; ?><br>Selesai Absen: <?= $settingAbsensi[0]->selesai_absen; ?><br>
                        Siswa wajib absen sehari sekali, jika tidak maka akan di anggap tidak hadir.</p><hr>
                        Total Absensi<br>Hadir: <?= $absensiKaryawan[0]->hadir; ?><br>Alpa: <?= $absensiKaryawan[0]->alpa; ?><br>Izin: <?= $absensiKaryawan[0]->izin; ?><br>Sakit: <?= $absensiKaryawan[0]->sakit; ?> <br><br>
                        <?php if (!(time() >= $dari && time() <= $sampai)) { ?>
                        <span class="text-primary font-weight-bold"><?=$absensiKaryawan[0]->absen ? "Anda sudah melakukan absen pada jam ".$absensiKaryawan[0]->terakhir_diupdate : "Klik Tombol dibawah untuk Absen hari ini" ;?></span><br>
                        <?php if(!$absensiKaryawan[0]->absen) : ?>
                        <a href="<?= base_url(); ?>user/absenKaryawan/<?= $dataKaryawan[0]->id; ?>" class="btn btn-primary float-left"><font color="WHITE"><i class="fa fa-fw fa-hand-pointer"></i>Absen Now</font></a>
                    <?php endif; ?>
                    <?php } ?>
                    </div>
                </div>
                <hr>

                <h5 class="card-header">Riwayat Absensi</h5>
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
                    <form method="POST" action="<?php echo base_url(); ?>user/changeInfoKaryawan">
                        <div class="row">
                            <div class="offset-xl-3 col-xl-6 offset-lg-3 col-lg-3 col-md-12 col-sm-12 col-12 p-4">
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
                                    <input type="email" class="form-control" onchange="document.getElementById('ubahInfoButton').style.display='block'" form-control-lg" name="email" value="<?= $dataKaryawan[0]->email; ?>">
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