                <div class="row">

<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="influence-profile-content pills-regular">
                                <ul class="nav nav-pills mb-3 nav-justified" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link " id="pills-tentang-tab" data-toggle="pill" href="#pills-tentang" role="tab" aria-controls="pills-tentang" aria-selected="true">Full Absensi</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-riwayatabsensi-tab" data-toggle="pill" href="#pills-riwayatabsensi" role="tab" aria-controls="pills-riwayatabsensi" aria-selected="false">Absensi Hari ini</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-ubahinfo-tab" data-toggle="pill" href="#pills-ubahinfo" role="tab" aria-controls="pills-ubahinfo" aria-selected="false">Belum Absen</a>
                                    </li>
                                </ul>
               
                     <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade" id="pills-tentang" role="tabpanel" aria-labelledby="pills-tentang-tab">
                      <div class="card">
                            <h5 class="card-header">Full Absensi</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="data_karyawan" class="table first">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Date</th>
                                                <th>Presence</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; foreach($getAbsensi as $rows) { ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $rows->name; ?></td>
                                                <td><?= $rows->date; ?></td>
                                                <td><a href="#<?= $rows->id?>">
                                                <?php if ($rows->Ket == 'alpa'):?>
                                                <span class="text-danger"><?= strtoupper( $rows->Ket); ?></span>
                                            <?php elseif ($rows->Ket == 'hadir'):?>
                                                <span class="text-primary"><?= strtoupper( $rows->Ket); ?></span>
                                            <?php elseif ($rows->Ket == 'sakit'):?>
                                                <span class="text-warning"><?= strtoupper( $rows->Ket); ?></span>
                                            <?php else:?>
                                                <span class="text-info"><?= strtoupper( $rows->Ket); ?></span>

                                                <?php endif; ?>
                                            </a></td>
                                            </tr> <div class="overlay" id="<?= $rows->id ?>">
                                             <div class="row justify-content-md-center justify-content-center">
                                             <a href="#close" class="close">X Close</a>
                                             <div class="col-xl-3 col-lg-3 col-md-3 col-sm-10 col-10">
                                             <div class="card">
                                <div class="card-body border-top">
                                    <?php foreach ($this->karyawan->getAlasanKaryawanByNameDate($rows->name,$rows->date) as $key ) :?>
                                    <h3 class="font-16">Alasan</h3>
                                    <p><?= $key->alasan ?></p>
                                <?php endforeach; ?>
                                   
                            </div>
                        </div>
                        </div>
                      </div>
                      </div>
                                            <?php } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Date</th>
                                                <th>Presence</th>

                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            <?php if($this->session->userdata('level')=='Admin') : ?>
                            <div class="card-body">
                                <form method="post" action="<?php echo base_url(); ?>siswa/ubahAbsen">
                                    <div class="card-title border-top">
                                        <h4>Ubah Absensi</h4>
                                    </div>
                                    <h5>Pilih Nama dan Tanggal</h5>
                                    <select class="selectpicker" data-style="btn-info" name="name">
                                     <?php foreach($getAllDataKaryawan as $rows) { ?>
                                        <option value="<?= $rows->name; ?>"><?= $rows->name; ?></option>
                                      <?php } ?>
                                      </select>
                                      <div class="form-group">
                                        <label for="date" class="col-form-label">Tanggal</label>
                                        <input id="date" name="date" type="date" class="form-control datepicker" onchange="document.getElementById('ubah').style.display='block'">
                                    </div>
                                    <div id="ubah" style="display: none;">
                                    <button type="submit" class="btn btn-info"><i class="fa fa-edit"></i>Ubah</button>
                                    </div>
                                    
                                </form>
                            </div>
                        <?php endif; ?>
                        </div>
                        </div>
                    
                        <div class="tab-pane fade show active" id="pills-riwayatabsensi" role="tabpanel" aria-labelledby="pills-riwayatabsensi-tab">
                        <div class="card">
                            <h5 class="card-header">Absensi Hari ini</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                     <table id="data_karyawann" class="table first ">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Presence</th>
                                                <th>Time</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; foreach($getAbsensiByDate as $rows) { ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $rows->name; ?></td>
                                                <td>
                                                <?php if ($rows->Ket == 'alpa'):?>
                                                <span class="text-danger"><?= strtoupper( $rows->Ket); ?></span>
                                            <?php elseif ($rows->Ket == 'hadir'):?>
                                                <span class="text-primary"><?= strtoupper( $rows->Ket); ?></span>
                                            <?php elseif ($rows->Ket == 'sakit'):?>
                                                <span class="text-warning"><?= strtoupper( $rows->Ket); ?></span>
                                            <?php else:?>
                                                <span class="text-info"><?= strtoupper( $rows->Ket); ?></span>

                                                <?php endif; ?>
                                            </td>
                                            <td><?= $rows->time ?></td>
                                            </tr>
                                           
                                            <?php } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Presence</th>
                                                <th>Time</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-ubahinfo" role="tabpanel" aria-labelledby="pills-ubahinfo-tab">
                        <div class="card">
                                    <h5 class="card-header">Siswa yang belum Absen Hari ini</h5>
                                    <div class="card-body">
                                        <form method="POST" action="<?php echo base_url(); ?>siswa/absensiKaryawan">
                                             <?php if($this->session->userdata('level')=='Admin') : ?>
                                            <h5 class="card-title">Pilih nama Siswa dan Ketidakhadiran</h5>
                                            <select class="selectpicker" data-style="btn-primary" name="name">
                                                <?php foreach($getAbsensiByAbsen as $rows) { ?>
                                                <option value="<?= $rows->nama; ?>"><?= $rows->nama; ?></option>
                                                <?php } ?>
                                            </select>
                                            <select class="selectpicker" data-style="btn-primary" name="kehadiran">
                                                <option value="alpa">Alpa</option>
                                                <option value="izin">Izin</option>
                                                <option value="sakit">Sakit</option>
                                            </select><hr>
                                            <!-- <div class="form-group">
                                                <label for="jumlah" class="col-form-label">Tanggal</label>
                                                <input id="jumlah" name="jumlah" type="date" class="form-control datepicker">
                                            </div> -->
                                            <div class="form-group">
                                                <label for="alasan">Alasan (*Use < br > no space, for new line)</label>
                                                <textarea class="form-control" id="alasan" name="alasan" rows="3" required=""></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Tambah</button>
                                        <?php else: ?>
                                        <div class="">
                                        <ul class="list-unstyled mb-0">
                                            <?php foreach ($getAbsensiByAbsen as $key):?>
                                        <li class="mb-2"><i class="fas fa-fw fa-minus-circle mr-2 text-danger"></i><?= $key->nama; ?></li>
                                            <?php endforeach; ?>
                                    </ul>
                                    </div>
                                        <?php endif; ?>
                                        </form>
                                    </div>
                                </div>
                        </div>
                   </div>
                </div>
           </div>
                       
     
                                

 
               </div>
           </div>
        </div>
            