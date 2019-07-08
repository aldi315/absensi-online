                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Absensi Siswa</h5>
                                    <div class="card-body">
                                        <form method="POST" action="<?php echo base_url(); ?>karyawan/absensiKaryawan">
                                            <h5 class="card-title">Pilih nama Siswa dan kehadiran</h5>
                                            <select class="selectpicker" data-style="btn-primary" name="name">
                                                <?php foreach($dataKaryawan as $rows) { ?>
                                                <option value="<?= $rows->name; ?>"><?= $rows->name; ?></option>
                                                <?php } ?>
                                            </select>
                                            <select class="selectpicker" data-style="btn-primary" name="kehadiran">
                                                <option value="alpa">Alpa</option>
                                                <option value="izin">Izin</option>
                                                <option value="sakit">Sakit</option>
                                            </select>
                                            <div class="form-group">
                                                <label for="jumlah" class="col-form-label">Jumlah (*Just number)</label>
                                                <input id="jumlah" name="jumlah" type="number" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="alasan">Alasan (*Use < br > no space, for new line)</label>
                                                <textarea class="form-control" id="alasan" name="alasan" rows="3"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Tambah</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>