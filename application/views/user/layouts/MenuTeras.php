                    <div class="row">
	                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
	                        <div class="card influencer-profile-data">
	                            <div class="card-body">
	                                <div class="row">
	                                    <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-12">
	                                        <div class="text-center">
	                                            <img src="<?= base_url(); ?>assets/images/pelita.png" alt="User Avatar" class="rounded-circle user-avatar-xxl">
	                                            </div>
	                                        </div>
	                                        <div class="col-xl-10 col-lg-8 col-md-8 col-sm-8 col-12">
	                                            <div class="user-avatar-info">
	                                                <div class="m-b-20">
	                                                    <div class="user-avatar-name">
	                                                        <h2 class="mb-1"><?= PT_NAME; ?></h2>
	                                                    </div>
	                                                    <div class="rating-star  d-inline-block">
	                                                        <i class="fa fa-fw fa-star"></i>
	                                                        <i class="fa fa-fw fa-star"></i>
	                                                        <i class="fa fa-fw fa-star"></i>
	                                                        <i class="fa fa-fw fa-star"></i>
	                                                        <i class="fa fa-fw fa-star"></i>
	                                                    </div>
	                                                </div>
	                                                <!--  <div class="float-right"><a href="#" class="user-avatar-email text-secondary">www.henrybarbara.com</a></div> -->
	                                                <div class="user-avatar-address">
	                                                    <p class="border-bottom pb-3">
	                                                        <span class="d-xl-inline-block d-block mb-2"><i class="fa fa-map-marker-alt mr-2 text-danger "></i>Ciampea, Bogor Barat</span>
	                                                        <span class="mb-2 ml-xl-4 d-xl-inline-block d-block"><i class="fa fa-signal mr-2 text-success "></i>Teknik Komputer Jaringan</span>
	                                                        <span class=" mb-2 d-xl-inline-block d-block ml-xl-4"><i class="fa fa-wifi mr-2 text-primary "></i>Pemburu Hotspot</span>
	                                                        <span class=" mb-2 d-xl-inline-block d-block ml-xl-4"><i class="fa fa-trophy mr-2 text-warning "></i>2018-<?= date('Y'); ?> </span>
	                                                    </p>
	                                                    <div class="mt-3">
	                                                        <a href="#" class="badge badge-light mr-1">Tkj</a> <a href="#" class="badge badge-light mr-1">Lulus 100%</a> <a href="#" class="badge badge-light">Success</a>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>

	                    <div class="row">
	                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
	                    <div class="card">
                                <div class="card-header text-center">
                                        <h2 class="font-22 mb-0 card-title">Organigram</h2>
                                </div>
                                <hr>
 							<div class="influence-profile-content pills-regular">
                                <ul class="nav nav-pills mb-3 nav-justified" id="pills-tab" role="tablist">
 								<?php foreach ($organigram as $key) : ?>
                                    <li class="nav-item">
                                        <a class="nav-link <?php if($key['seksi']=='WaliKelas'){echo "active";} ?>" id="<?=$key['seksi']; ?>" data-toggle="pill" href="#pills-<?=$key['seksi']; ?>" role="tab" aria-controls="pills-<?=$key['seksi']; ?>" aria-selected="<?php if($key['seksi']=='WaliKelas'){echo "true";} ?>"><?=$key['seksi']; ?></a>
                                    </li>
                                <?php endforeach; ?>
                                </ul>
                                

                                <div class="tab-content" id="pills-tabContent">
                                    <?php foreach ($organigram as $key) : ?>
                                    <div class="tab-pane fade <?php if($key['seksi']=='WaliKelas'){echo " show active";} ?>" id="pills-<?=$key['seksi']; ?>" role="tabpanel" aria-labelledby="pills-<?=$key['seksi']; ?>-tab">
                                        <div class="card">
                                            <!-- <h5 class="card-header">Tentang <?= $dataKaryawan[0]->name; ?></h5> -->
                                            <div class="card-body">
                                            	<div class="card-body  card accrodion-outline">
                                    	<h4 class="text-center"><?= $key['seksi']; ?></h4>
                                    	<div class="user-avatar text-center d-block">
                                        <img src="<?= base_url().$key['img']; ?>" alt="<?= base_url(); ?>assets/images/pelita.png"  class="rounded user-avatar-xxl rounded-circle">
                                    	</div>
                                        <h4 class="text-center"><?= $key['Nama']; ?></h4>
                                        <hr>
                                  		  <h5 class="font-13">Contact Information</h5>
                                        <div class="">
                                        <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="fas fa-fw fa-envelope mr-2"></i>email</li>
                                        <li class="mb-2"><i class="fas fa-fw fa-phone mr-2"></i>s</li>
                                        <li class="mb-0"><i class="fas fa-fw fa-home mr-2"></i></li>
                                   		 </ul>	
                                    	</div>
                                   		 </div>
                                            </div>
                                        </div>
                                    </div>
                                	 <?php endforeach; ?>
                                	 
                                </div>
						</div>
					</div>
				</div>
			</div>
</div>