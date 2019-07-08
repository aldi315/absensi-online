                <div class="row">
                    <!-- ============================================================== -->
                    <!-- basic table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header"><i class="fa fa-fw fa-list-alt"></i>Data Siswa</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="data_karyawan" class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Fullname</th>
                                                <th>Nickname</th>
                                                <th>Gender</th>
                                                <th>Handphone</th>
                                                <th>NIS</th>
                                                <th>View</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; foreach($getAllDataKaryawan as $rows) { ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $rows->name; ?></td>
                                                <td><?= $rows->position; ?></td>
                                                <td><?= $rows->gender; ?></td>
                                                <td><?php if ($rows->handphone == !null) {
                                                        echo "<a href='https://wa.me/$rows->handphone' class='btn btn-success'>WA:$rows->handphone</a>";
                                                    }?></td>
                                                <td><?= $rows->nik; ?></td>
                                                <td>
                                                    <a href="<?php echo base_url(); ?>siswa/edit/<?= $rows->id; ?>" class="btn btn-info"><i class="fa fa-fw fa-edit"></i></a>
                                                <?php if($this->session->userdata('level')=='Admin') : ?>
                                                    <a href="<?php echo base_url(); ?>siswa/delete/<?= $rows->id; ?>" class="btn btn-secondary" onclick="return confirm('Serius?')"><i class="fa fa-fw fa-trash"></i></a></td>
                                            <?php endif; ?>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Fullname</th>
                                                <th>Nickname</th>
                                                <th>Address</th>
                                                <th>Handphone</th>
                                                <th>NIS</th>
                                                <th>View</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end basic table  -->
                    <!-- ============================================================== -->
                </div>
            </div>