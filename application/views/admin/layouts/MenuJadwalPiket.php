                 <div class="row">                     
                    
                    

 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header"><i class="fa fa-fw fa-list-alt"></i>Piket Kelas</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="data_karyawan" class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
                                                <th>Hari</th>
                                                <th>Daftar siswa</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <form method="post" action="<?php echo base_url(); ?>siswa/ubahJadket" enctype="multipart/form-data" >
                                            <tr>
                                                <td>Senin</td>
                                                <td><div class="input-group">
                                                    <textarea class="form-control" name="senin"><?=$getJadwalPiket[0]->senin ?></textarea>
                                                </div></td>
                                            </tr>
                                            <tr>
                                                <td>Selasa</td>
                                                <td><div class="input-group">
                                                    <textarea class="form-control" name="selasa"><?=$getJadwalPiket[0]->selasa ?></textarea>
                                                </div></td>
                                            </tr>
                                            <tr>
                                                <td>Rabu</td>
                                                <td><div class="input-group">
                                                    <textarea class="form-control" name="rabu"><?=$getJadwalPiket[0]->rabu ?></textarea>
                                                </div></td>
                                            </tr>
                                            <tr>
                                                <td>Kamis</td>
                                                <td><div class="input-group">
                                                    <textarea class="form-control" name="kamis"><?=$getJadwalPiket[0]->kamis ?></textarea>
                                                </div></td>
                                            </tr>
                                            <tr>
                                                <td>Jumat</td>
                                                <td><div class="input-group">
                                                    <textarea class="form-control" name="jumat"><?=$getJadwalPiket[0]->jumat ?></textarea>
                                                </div></td>
                                            </tr>
                                            <tr>
                                                <td>Sabtu</td>
                                                <td><div class="input-group">
                                                    <textarea class="form-control" name="sabtu"><?=$getJadwalPiket[0]->sabtu ?></textarea>
                                                </div></td>
                                            </tr>
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <?php if($this->session->userdata('level')=='Admin') : ?>
                                <button type="submit" class="btn btn-success">Submit</button>
                         <?php endif; ?>
                                        </form>
                        </div>
                    </div>                                 


                     </div>
                    </div>
                


