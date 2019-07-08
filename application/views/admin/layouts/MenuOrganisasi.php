                 <div class="row">                     
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="height: 65px;">
                        <div class="card">
                            <div class="card-header text-center">
                                        <h2 class="font-22 mb-0 card-title">STRUKTUR ORGANISASI KELAS</h2>
                                </div>
                        </div>
                    </div>
                
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="influence-profile-content pills-regular">
                <ul class="nav nav-pills mb-3 nav-justified" id="pills-tab" role="tablist">      <li class="nav-item">
                                <a class="nav-link active" id="pills-walikelas-tab" data-toggle="pill" href="#pills-walikelas" role="tab" aria-controls="pills-walikelas" aria-selected="true">Wali Kelas</a>
                            </li>   
                        <?php foreach ($getJabatan as $key) :?>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-<?= $key->jabatan;  ?>-tab" data-toggle="pill" href="#pills-<?= $key->jabatan;  ?>" role="tab" aria-controls="pills-<?= $key->jabatan;  ?>" aria-selected="false"><?= $key->name_jabatan;  ?></a>
                            </li>
                        <?php endforeach; ?>
                        </ul>
                
            <div class="tab-content" id="pills-tabContent">
                         <?php foreach ($getWaliKelas as $key) :?>
                <div class="tab-pane fade show active" id="pills-walikelas" role="tabpanel" aria-labelledby="pills-walikelas-tab">
                    <div class="card">
                        <div class="card-header text-center">
                            <h2 class="font-22 mb-0 card-title">Wali Kelas</h2>
                        </div>          
                        <div class="card-body">
                            <div class="user-avatar text-center d-block">
                                <img src="<?php echo base_url(); ?>images/<?= $key->image_name; ?>" alt="<?= $key->name; ?>" class="rounded user-avatar-xxl">
                            </div>
                            <h4 class="text-center"><?= $key->name;  ?></h4>
                                <hr>
                            <h5 class="font-13">More Information</h5>
                            <div class="">
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2"><i class="fas fa-fw fa-envelope mr-2"></i><?= $key->email;  ?></li>
                                    <li class="mb-2"><i class="fas fa-fw fa-phone mr-2"></i><?= $key->handphone;  ?></li>
                                    <li class="mb-2"><i class="fas fa-fw fa-home mr-2"></i><?= $key->address;  ?></li>
                                </ul>  
                            </div>
                        </div>   
                    </div>
                </div>
                        <?php endforeach; ?>
                        <?php foreach ($getJabatan as $key) :?>
                <div class="tab-pane fade <?php if($key->jabatan == 'wali_kelas'){echo('show active');} ?> " id="pills-<?= $key->jabatan;  ?>" role="tabpanel" aria-labelledby="pills-<?= $key->jabatan;  ?>-tab">
                    <div class="card">
                        <div class="card-header text-center">
                            <h2 class="font-22 mb-0 card-title"><?= $key->name_jabatan;  ?></h2>
                        </div>
                        <div class="card-body">
                            
                                <?php if ($this->karyawan->getOrganisasiByJabatan($key->jabatan)) : ?>
                                        <div class="row">
                                        <?php $jumlah = $this->karyawan->getJabatanByJabatan($key->jabatan)[0]->jumlah;
                                        for ($i=0; $i < $jumlah; $i++) :?>
                                        <?php if ($jumlah > 1) {
                                            echo "<div class='col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12'>";
                                        }else{
                                            echo "<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>";
                                        } ?>
                                    
                                    <div class="card">
                                        <div class="card-body text-center">
                                        <div class="user-avatar text-center d-block">
                                     <img src="<?php echo base_url(); ?>images/<?= $this->karyawan->getOrganisasiByJabatan($key->jabatan)[$i]->foto; ?>"  class="rounded user-avatar-xxl">
                                      </div>
                                    <h4 class="text-center"><?=$this->karyawan->getOrganisasiByJabatan($key->jabatan)[$i]->name;  ?></h4>
                                    </div>
                                    </div>

                                </div>
                                <?php endfor; ?>
                                    </div>
                                    <?php if($this->session->userdata('level')=='Admin') { ?>
                                    <a href="<?php echo base_url(); ?>siswa/clearRoom/<?= $key->jabatan;  ?>" class="btn btn-danger" onclick="return confirm('Serius?')"><i class="fa fa-fw fa-trash"></i>Clear Room</a>
                                <?php } ?>
                                <?php else:?>
                                <p class="text-center text-warning">Hah Kosong</p>
                            <?php endif; ?>
                            
                        </div>
                    </div>
                </div>
                             <?php endforeach; ?>
            </div>
            </div>
                     </div>
                 </div>

                         

                <div class="row">
                    <?php if($this->session->userdata('level')=='Admin') : ?>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header"><i class="fa fa-fw fa-users"></i> Tambah Anggota</h5>
                            <div class="card-body">
                                        <form method="POST" action="<?php echo base_url(); ?>siswa/addAnggota">
                                             
                                            <h5 class="card-title">Pilih Nama Siswa dan Seksi</h5>
                                            <select class="selectpicker btn-space" data-style="btn-primary" name="name" id="add" onchange="addf()">
                                                <option>Pilih Nama</option>
                                                <?php foreach($getAllDataKaryawan as $rows) { ?>
                                                <option value="<?= $rows->name; ?>"><?= $rows->name; ?></option>
                                                <?php } ?>
                                            </select>
                                            <select class="selectpicker" data-style="btn-primary" name="position">
                                                <?php foreach ($getJabatan as $key):?>
                                                <option value="<?= $key->jabatan ?>"><?= $key->name_jabatan ?></option>
                                            <?php endforeach; ?>
                                            </select>
                                            <div id="addBut" style="display: none;">
                                            <hr>
                                            <button type="submit" class="btn btn-primary">Tambah</button>
                                            </div>
                                        </form>
                                          <script>
    function addf(){
         var x = document.getElementById("add").value;
         if(x == "Pilih Nama"){
         document.getElementById("addBut").style.display="none";
         }else{
            document.getElementById("addBut").style.display="block";
         }

}
                                        </script>
                                    </div>
                                    
                                </div>
                    <?php endif; ?>
                        </div>
                    <?php if($this->session->userdata('level')=='Admin') : ?>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header"><i class="fa fa-fw fa-plus"></i> Tambah Bagian</h5>
                            <div class="card-body">
                                        <form method="POST" action="<?php echo base_url(); ?>siswa/addSeksi">
                                               <select class="selectpicker" data-style="btn-primary" name="selectPosition" id="mySelect" onchange="tes()">
                                                <option>Pilih Seksi</option>
                                                <option value="ketua_kelas">Ketua Kelas</option>
                                                <option value="wakil_ketua_kelas">Wakil Ketua Kelas</option>    
                                                <option >More</option>
                                            
                                            </select>
                                            <div id="lain" style="display: none">
                                            <hr>
                                            <h5 class="card-title">Atau Tulis Seksi Disini</h5>
                                            <input type="text" name="seksi" class="form-control" placeholder="ex : Keamanan">
                                            <hr>
                                            </div>
                                            <div id="button" style="display: none;">
                                            <button type="submit" class="btn btn-primary">Tambah</button>
                                            </div>
                                             <script>
    function tes(){
         var x = document.getElementById("mySelect").value;
      if(x == "ketua_kelas" || x == "wakil_ketua_kelas" || x == "Pilih Seksi"){
      document.getElementById("lain").style.display="none";
      }else{
      document.getElementById("lain").style.display="block";
      }
      if(x == "Pilih Seksi"){
            document.getElementById("button").style.display="none";
        }else{
            document.getElementById("button").style.display="block";
        }

}
                                        </script>
                                        
                                        </form>
                                    </div>
                                    
                                </div>
                        </div>
                         <?php endif; ?>
                    

                    <?php if($this->session->userdata('level')=='Admin') : ?>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header"><i class="fa fa-fw fa-plus"></i> Hapus Bagian</h5>
                            <div class="card-body">
                                        <form method="POST" action="<?php echo base_url(); ?>siswa/deleteSeksi">
                                               <select class="selectpicker" data-style="btn-warning" name="seksi" id="seksi" onchange="hapusSeksi()">
                                                <option>Pilih Seksi </option>
                                                <?php foreach ($getJabatan as $key) : ?>
                                                <option value="<?=$key->jabatan ?>"><?=$key->name_jabatan ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <div id="divHapus" style="display: none">
                                            <hr>
                                            <button type="submit" class="btn btn-warning" onclick="return confirm('Serius?')">Hapus</button>
                                            </div>
                                        </form>
                                        <script>
    function hapusSeksi(){
         var x = document.getElementById("seksi").value;
         if(x == "Pilih Seksi"){
         document.getElementById("divHapus").style.display="none";
         }else{
            document.getElementById("divHapus").style.display="block";
         }

}
                                        </script>
                              </div>
                                    
                                </div>
                        </div>
                         <?php endif; ?>
                    <?php if($this->session->userdata('level')=='Guru') : ?>
                     </div>
                <?php endif; ?>
                    <?php if($this->session->userdata('level')=='Admin') : ?>
                     </div>
                    </div>
                <?php endif; ?>
                


