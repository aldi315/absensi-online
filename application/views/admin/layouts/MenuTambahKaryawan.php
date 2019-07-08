                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Tambah Siswa</h5>
                                    <div class="card-body">
                                        <form method="POST" action="<?php echo base_url(); ?>siswa/tambahKaryawan" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="name" class="col-form-label">*Fullname</label>
                                                <input id="name" name="name" type="text" class="form-control" required="" autofocus="">
                                            </div>
                                            <div class="form-group">
                                                <label for="position" class="col-form-label">Nickname</label>
                                                <input id="position" name="position" type="text" class="form-control" >
                                            </div>
                                            <div class="form-group" >
                                                <label>Gender</label><br>
                                                <div  style="display: inline-block;">
                                                <label class="container">Boy
                                                  <input type="radio" name="gender" value="Laki-laki" checked="">
                                                  <span class="checkmark"></span>
                                                </label>
                                                </div>
                                                <div  style="display: inline-block;">
                                                <label class="container">Girl
                                                  <input type="radio" name="gender" value="Perempuan">
                                                  <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="age" class="col-form-label">Address</label>
                                                <input id="age" name="age" type="text" class="form-control" >
                                            </div>
                                            <div class="form-group">
                                                <label for="start_date" class="col-form-label">Birthdate (dd/mm/yyyy)</label>
                                                <input id="start_date" name="start_date" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="salary" class="col-form-label">Nama Orang Tua</label>
                                                <input id="salary" name="salary" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="email" class="col-form-label">Email</label>
                                                <input id="email" name="email" type="email" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="handphone" class="col-form-label">Handphone (ex : 62838xxxxxxxx)</label>
                                                <input id="handphone" name="handphone" type="number" class="form-control">
                                                
                                            </div>

                                            <div class="form-group">
                                                <label for="nik" class="col-form-label">*NIS</label>
                                                <input id="nik" name="nik" type="number" class="form-control" required="">
                                            </div>
                                            <div class="form-group">
                                                <label for="password" class="col-form-label">*Password</label>
                                                <input id="password" name="password" type="password" class="form-control" required="">
                                            </div>
                                            <div class="custom-file mb-3">
                                                <input type="file" class="custom-file-input" id="uploadImage" name="upload_image">
                                                <label class="custom-file-label btn-secondary" for="uploadImage"><i class="fa fa-fw fa-upload"></i>Upload Image</label>
                                            </div>
                                            <div class="form-group">
                                                <label for="tentangKaryawan">Tentang Siswa (*Use < br > no space, for new line)</label>
                                                <textarea class="form-control" id="tentangKaryawan" name="tentang" rows="3"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Tambah</button>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
