                <div class="row">
                    <!-- ============================================================== -->
                    <!-- basic table  -->
                    <!-- ============================================================== -->
                    <?php if ($sessionAdmin) :  ?>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Activity</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="data_karyawan" class="table first">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Info</th>
                                                <th>Tanggal</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; foreach($getAllHistory as $rows) { ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $rows->nama; ?></td>
                                                <td><?= $rows->info; ?></td>
                                                <td><?= $rows->tanggal; ?></td>
                                                <td><a href="<?php echo base_url(); ?>siswa/deleteHistory/<?= $rows->id; ?>" class="btn btn-danger" ><i class="fa fa-fw fa-trash"></i><font color="WHITE"></font></a></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Info</th>
                                                <th>Tanggal</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <a href="<?php echo base_url(); ?>siswa/deleteAllHistory" class="btn btn-warning" onclick="return confirm('Beneran???');"><i class="fa fa-fw fa-trash"></i><font color="WHITE"></font> Clear All Activity</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                    <!-- ============================================================== -->
                    <!-- end basic table  -->
                    <!-- ============================================================== -->
                </div>  
                                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">User Log</h5>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <?php if ($sessionAdmin) :  ?>
                                                <table id="adata_karyawan" class="table table-striped table-bordered first">
                                            <?php else: ?>
                                    <table id="data_karyawan" class="table table-striped table-bordered first">
                                    <?php endif; ?>
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; foreach($getUserOnline as $rows) { ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $rows->name; ?></td>
                                                
                                                 <td>
                                                    <?php 
                                                    $date = $rows->date;
                                                    $jam = substr($date, 11,8);
                                                    if (substr($date, 0,10) == date('d/m/Y')) {
                                                        $date = "Hari ini ".$jam;
                                                    }
                                                    echo $rows->online ? "Login ".$date : "Logout ".$date;
                                                    ?>    
                                                    </td>

                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Status</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                    </div>
                                </div>
                            </div>
                        </div>




                <!-- penutup -->
            </div>