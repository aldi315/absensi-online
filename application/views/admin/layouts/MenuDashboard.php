<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card influencer-profile-data">
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-12">
                        <div class="text-center">
                            <img src="<?= base_url(); ?>assets/images/pelita.png" alt="User Avatar" class="rounded user-avatar-xxl">
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-8 col-md-8 col-sm-8 col-12">
                            <div class="user-avatar-info">
                                <div class="m-b-20">
                                    <div class="user-avatar-name">
                                        <h2 class="mb-1"><?= PT_NAME; ?></h2>
                                    </div>
                                    <div class="rating-star  d-inline-block">
                                    	<?php for ($i=1; $i <=5 ; $i++) { 
                                    		echo "<i class='fa fa-fw fa-star'></i>";
                                    	} ?>
                                        
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
        <div class="card influencer-profile-data">
        	 
            <div class="card-body">
            	<div class="text-center">
            		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            		<h2 class="mb-1">WALI KELAS</h2>
            		<hr>
            	</div>
            	</div>
                <div class="row">
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">
                        <div class="text-center">
                    	<?php foreach ($dataWaliKelas as $key ):?>
                    <img src="<?php echo base_url(); ?>/images/<?= $key->image_name; ?>" alt="<?= $key->name; ?>" class="rounded user-avatar-xxl">
                        <?php endforeach; ?>
                		</div>
                 <!--    <form method="post" action="karyawan/changeFotoWaliKelas">
                    	<div class="custom-file mb-3">
                    	<input type="file" class="custom-file-input" id="uploadImage" name="upload_image">
                        <label class="custom-file-label" for="uploadImage"><i class="fa fa-fw fa-upload"></i></label>
                    </div>
                        <button type="submit" class="btn btn-success"></button>
                    </form> -->
             </div>
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                               <?php foreach ($dataWaliKelas as $key ):?>
                             
                            <div class="user-avatar-info">
                                <div class="m-b-20">
                                    <div class="user-avatar-name">
                                        <h2 class="mb-1"><?= $key->name ?></h2>
                                    </div>
                                    <br>
                                </div>
                                <div class="user-avatar-address">
                                    <p class="border-bottom pb-3">
                                        <span class="d-xl-inline-block d-block mb-2"><i class="fa fa-home mr-2 text-success "></i><?= $key->address ?></span>
                                        <span class="mb-2 ml-xl-4 d-xl-inline-block d-block"><i class="fa fa-envelope mr-2 text-danger "></i><?= $key->email ?></span>
                                        <span class=" mb-2 d-xl-inline-block d-block ml-xl-4"><i class="fa fa-phone	 mr-2 text-primary "></i><?= $key->handphone ?></span>
                                    </p>
                                    <p class="pb-3">
                                    	<i class="fa fa-pencil-alt"></i> <?= $key->tentang ?>
                                    </p>
                                </div>
                            <?php endforeach; ?>
                            
                        </div>
                    </div>
                </div>
                <?php if($this->session->userdata('level')=='Admin') : ?>
                <div class="card-body">
                	<div class="table-responsive">
                	<table class="table table-bordered first">
                		<form method="POST" action="<?php echo base_url(); ?>siswa/waliKelas" enctype="multipart/form-data" >
                		<thead>
                			<tr>
                				<th>Index</th>
                				<th>Value</th>
                			</tr>
                		</thead>
                		<tbody>
                			<?php foreach ($dataWaliKelas as $key ):?>
                			<tr>
                				<td>Nama</td>
                				<td><input type="text" name="name" value="<?=$key->name; ?>" class="form-control" onchange="ubah()"></td>
                			</tr>
                			<tr>
                				<td>Address</td>
                				<td><input type="text" name="address" value="<?=$key->address; ?>" class="form-control" onchange="ubah()"></td>
                			</tr>
                			<tr>
                				<td>Email</td>
                				<td><input type="email" name="email" value="<?=$key->email; ?>" class="form-control" onchange="ubah()"></td>
                			</tr>
                			<tr>
                				<td>Handphone</td>
                				<td><input type="text" name="phone" value="<?=$key->handphone; ?>" class="form-control" onchange="ubah()"></td>
                			</tr>
                			<tr>
                				<td>More Info</td>
                				<td>
                					<textarea class="form-control" id="tentang" name="tentang" rows="3" required="" onchange="ubah()"><?=$key->tentang; ?></textarea></td>
                			</tr>
                			<tr>
                				<td>Photo</td>
                				<input type="hidden" name="currentImage" value="<?=$key->image_name; ?>" class="form-control" >
                				<td><div class="custom-file mb-3">
                                            <input type="file" class="custom-file-input" id="uploadImage" name="upload_image" onchange="ubah()">
                                            <label class="custom-file-label btn-secondary" for="uploadImage">Upload Image</label>
                                        </div></td>
                				</tr>
                			<tr>
                				<td>Action</td>
                				<td><span style="display: none" id="button"><button type="submit" class="btn btn-primary"><i class="fa fa-edit" ></i>Ubah</button></span></td>
                				</tr>
                			<?php endforeach; ?>
                		</tbody>
                	</form>
                		<script>
                			function ubah(){
                				document.getElementById('button').style.display='block';
                			}
                		</script>
                	</table>
                	</div>
                </div>
            <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<div class="row" id="chatRow">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
<div class="card influencer-profile-data">
<div class="card-body">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">Chat</h3>
</div>
<div class="panel-body" style="overflow: auto;" id="isi_chat">
</div>
<input type="hidden" id="user" class="form-control" value="<?=$this->session->userdata('nickname');?>">

<div class="input-group">
	<textarea class="form-control" placeholder="Tulis Pesan ... "  id="pesan"></textarea>
		<button type="button" value="kirim" id="kirim" class="btn btn-md btn-success">Kirim</button>
</div>

</div>
<?php if($this->session->userdata('level')=='Admin') : ?>
	<!-- <div id="btn-clear" style="display: none"> -->
<a href="<?php echo base_url(); ?>siswa/clearChat" class="btn btn-danger" onclick="return confirm('Beneran???');"><i class="fa fa-fw fa-trash"></i><font color="WHITE"></font>Delete All Chat</a>
<!-- </div> -->
<?php endif; ?>
</div>
</div>

</div>
</div>


<?php if($this->session->userdata('level')=='Guru') : ?>
	</div>

<?php endif; ?>
<?php if($this->session->userdata('level')=='Admin') : ?>
	</div>

<?php endif; ?>
