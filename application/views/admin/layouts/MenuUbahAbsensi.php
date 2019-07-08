                <div class="row">
                    <!-- ============================================================== -->
                    <!-- basic table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Ubah Absen</h5>
                            <div class="card-body">
                                <form method="POST" action="<?php echo base_url(); ?>siswa/ubah_absen">
                                             <?php if($this->session->userdata('level')=='Admin') : ?>
                                            <h5 class="card-title">Ubah Absen Si <span class="text-primary"><?=$name; ?></span> Tanggal <span class="text-primary"><?=$tanggal; ?></span> Dari <?=strtoupper($ket) ?> Menjadi</h5>
                                            <select class="selectpicker" data-style="btn-primary" name="kehadiran">
                                                <option value="hadir" <?php if ($ket=='hadir') {
                                                    echo('selected');
                                                }?>>Hadir</option>
                                                <option value="alpa" <?php if ($ket=='alpa') {
                                                    echo('selected');
                                                }?>>Alpa</option>
                                                <option value="izin" <?php if ($ket=='izin') {
                                                    echo('selected');
                                                }?>>Izin</option>
                                                <option value="sakit" <?php if ($ket=='sakit') {
                                                    echo('selected');
                                                }?>>Sakit</option>
                                            </select><hr>
                                            <input type="hidden" name="id" value="<?= $id; ?>">
                                            <input type="hidden" name="name" value="<?= $name; ?>">
                                            <input type="hidden" name="dateInput" value="<?= $tanggal; ?>">
                                            <input type="hidden" name="ket" value="<?= $ket; ?>">
                                            
                                            <div class="form-group">
                                                <label for="alasan">Alasan (*Use < br > no space, for new line)</label>
                                                <textarea class="form-control" id="alasan" name="alasan" rows="3" placeholder="Kalo Hadir,Form ini gausah diisi"><?php if($ket !== 'hadir'){echo substr($alasan, 4);} ?></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Ubah</button>
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
                
                    <!-- ============================================================== -->
                    <!-- end basic table  -->
                    <!-- ============================================================== -->
                </div>  
                                  
                        




                <!-- penutup -->
            </div>