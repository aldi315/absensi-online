                    <div class="row">
                        
                        <!-- ============================================================== -->
                        <!-- campaign data -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <!-- ============================================================== -->
                            <!-- campaign tab one -->
                            <!-- ============================================================== -->
                            <div class="influence-profile-content pills-regular">
                                <ul class="nav nav-pills mb-3 nav-justified" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-tentang-tab" data-toggle="pill" href="#pills-tentang" role="tab" aria-controls="pills-tentang" aria-selected="true">Absensi Siswa</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link active" id="pills-riwayatabsensi-tab" data-toggle="pill" href="#pills-riwayatabsensi" role="tab" aria-controls="pills-riwayatabsensi" aria-selected="false">Riwayat Absensi <?= $dataKaryawan[0]->name; ?></a>
                                    </li>
                                </ul>
                            </div>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade" id="pills-tentang" role="tabpanel" aria-labelledby="pills-tentang-tab">
                                        <div class="card">
                            <h5 class="card-header">Full Absensi</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="adata_karyawan" class="table first">
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
                                            </tr>
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
                                         </div>
                                    </div>
                                
                                    <div class="tab-pane fade show active" id="pills-riwayatabsensi" role="tabpanel" aria-labelledby="pills-riwayatabsensi-tab">
                                        <div class="card">
                                            <h5 class="card-header">Riwayat Absensi <?= $dataKaryawan[0]->name; ?></h5>
                                            <div class="card-body">
                                                <div class="table-responsive">
                                    <table id="data_karyawan" class="table first">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Date</th>
                                                <th>Presence</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; foreach($alasanKaryawan as $rows) { ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $rows->tanggal; ?></td>
                                                <td><?= $rows->alasan; ?></td>
                                                
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Date</th>
                                                <th>Presence</th>

                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                                            <!-- <?php foreach($alasanKaryawan as $rows) { ?>
                                            <div class="card-body border-top">
                                                <div class="riwayatabsensi-block">
                                                    <p class="riwayatabsensi-text m-0"><?= $rows->tanggal; ?></p>
                                                    <span class="text-dark font-weight-bold"><?= $rows->alasan; ?>
                                                </div>
                                            </div>
                                            <?php } ?> -->
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