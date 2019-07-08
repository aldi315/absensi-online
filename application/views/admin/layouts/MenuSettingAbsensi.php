<div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Pengaturan Absensi</h5>
                                    <div class="card-body">
                                        <form method="POST" action="<?php echo base_url(); ?>siswa/settingAbsensi">
                                            <div class="form-group">
                                                <label for="start" class="col-form-label">Mulai absen (*Example: 06:00)</label>
                                                <input id="start" name="start" type="text" class="form-control" value="<?= $getSettingAbsensi[0]->mulai_absen;?>" required="">
                                            </div>
                                            <div class="form-group">
                                                <label for="end" class="col-form-label">Selesai absen (*Example: 17:00)</label>
                                                <input id="end" name="end" type="text" class="form-control" value="<?= $getSettingAbsensi[0]->selesai_absen;?>" required="">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Ubah</button>
                                            <hr>
                                            <h5 class="card-title">Reset absen hari ini (*Semua siswa)</h5>
                                            <a href="<?= base_url(); ?>siswa/resetAbsen" class="btn btn-danger" onclick="return confirm('Beneran???');"><font color="WHITE">Reset</font></a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Tentukan Libur</h5>
                                    <div class="card-body">
                                        <?php if ($start == !null) {
                                            echo "<p>Current : Libur dari $start s/d $end Karena $kenapa</p>";
                                        } ?>
                                        
                                        <form method="POST" action="<?php echo base_url(); ?>siswa/libur">
                                        <div class="form-group">
                                        <label for="dari" class="col-form-label">Dari Tanggal</label>
                                        <input id="dari" required="" name="dari" type="date" class="form-control datepicker">
                                    </div>
                                    <div class="form-group">
                                        <label for="sampai" class="col-form-label">Sampai Tanggal</label>
                                        <input id="sampai" required="" name="sampai" type="date" class="form-control datepicker">
                                    </div>
                                    <div class="form-group">
                                        <label for="kenapa" class="col-form-label">Alasan</label>
                                        <input id="kenapa" name="kenapa" type="text" required="" class="form-control datepicker" placeholder="ex: Memperingati Hari Sumpah Pemuda">
                                    </div>
                                    <button type="submit" name="submitLibur" class="btn btn-primary">Submit</button>
                                    <a href="<?= base_url(); ?>siswa/resetLibur" class="btn btn-danger" onclick="return confirm('Beneran???');"><font color="WHITE">Reset</font></a>
                                </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>