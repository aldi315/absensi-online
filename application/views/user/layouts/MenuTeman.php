                    <div class="row">
                        
                        <!-- ============================================================== -->
                        <!-- campaign data -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <!-- ============================================================== -->
                            <!-- campaign tab one -->
                            <!-- ============================================================== -->
                          
                              
                                        <div class="card">
                            <h5 class="card-header">Daftar Teman</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="data_karyawan" class="table first table-hover">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; foreach($dataKaryawan as $rows) { ?>
                                           <?php if($rows->name != $this->session->userdata('name')): ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $rows->name ?></td>
                                                <td><a href="#<?= $rows->id?>" class="btn btn-secondary">View</a>
                                                    <?php if ($rows->handphone == !null) {
                                                        echo "<a href='https://wa.me/$rows->handphone' class='btn btn-success'><i class='fa fa-fw fa-whatsapp'></i>Chat</a>";
                                                    }?>
                                                </td>
                                            </tr>
                                             <?php foreach ($dataKaryawan as $key) :?>
                                               <div class="overlay" id="<?= $key->id ?>">
                                             <div class="row justify-content-md-center justify-content-center">
                                             <a href="#close" class="close">X Close</a>
                                             <div class="col-xl-3 col-lg-3 col-md-3 col-sm-10 col-10">
                                             <div class="card">
                                <div class="card-body">
                                    <div class="user-avatar text-center d-block">
                                        <img src="<?php echo base_url(); ?>images/<?= $key->image_name; ?>" alt="<?= $key->name; ?>" class="rounded user-avatar-xxl">
                                    </div>
                                    <div class="text-center">
                                        <h2 class="font-24 mb-0"><?= $key->name; ?></h2>
                                        <p><?= $key->position; ?><br><?= $key->gender; ?><br><?= $key->nik; ?></p>
                                    </div>
                                </div>
                                <div class="card-body border-top">
                                    <h3 class="font-16">Contact Information</h3>
                                    <div class="">
                                        <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="fas fa-fw fa-envelope mr-2"></i><?= $key->email; ?></li>
                                        <li class="mb-2"><i class="fas fa-fw fa-phone mr-2"></i><?= $key->handphone; ?></li>
                                        <li class="mb-0"><i class="fas fa-fw fa-home mr-2"></i><?= $key->age; ?></li>
                                    </ul>
                                    </div>
                            </div></div>
                        </div>
                      </div>
                      </div>
                  <?php endforeach; ?>
                                            <?php endif; ?>
                                            <?php } ?>

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Action</th>   

                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                                         </div>
                                   
                                
                          
                        <!-- ============================================================== -->
                        <!-- end campaign data -->
                        <!-- ============================================================== -->
                    </div>
                </div>
            </div>