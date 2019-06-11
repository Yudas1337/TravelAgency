<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>
 <section class="content">
        <div class="container-fluid">
            
           
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <?= $admin; ?>
                            </h2>
                            
                        </div>
                        <form method = "POST" action = "">
                        <div class="body">

                            <div class="row clearfix">

                              <div class="col-sm-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <label for="nomor_penerbangan" class=" form-control-label">Nama Admin</label><br><small class = "form-text text-danger"><?= form_error('nama_user'); ?></small>
                                            <input type="text" name = "nama_user" class="form-control" autocomplete="off" value="<?= set_value('nama_user'); ?>">
                                            
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-sm-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <label for="email_user" class=" form-control-label">Email</label><br><small class = "form-text text-danger"><?= form_error('email_user'); ?></small>
                                            <input type="text" name = "email_user" class="form-control" autocomplete="off" value="<?= set_value('email_user'); ?>">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <label for="alamat_user" class=" form-control-label">Alamat</label><br><small class = "form-text text-danger"><?= form_error('alamat_user'); ?></small>
                                            <input type="text" name = "alamat_user" class="form-control" autocomplete="off" value="<?= set_value('alamat_user'); ?>">
                                            
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-sm-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <label for="no_telepon" class=" form-control-label">No Telepon</label><br><small class = "form-text text-danger"><?= form_error('no_telepon'); ?></small>
                                            <input type="text" name = "no_telepon" class="form-control" autocomplete="off" value="<?= set_value('no_telepon'); ?>">
                                            
                                        </div>
                                    </div>
                                </div>

                             

                                <div class="col-sm-4">
                                    <label for="gender" class=" form-control-label">Gender</label><br>
                                    <small class = "form-text text-danger"><?= form_error('gender'); ?></small>
                                    <select class="form-control show-tick" name = "gender" required>
                                        <option value="">-- Select One --</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <label for="password_user" class=" form-control-label">Password</label><br><small class = "form-text text-danger"><?= form_error('password_user'); ?></small>
                                            <input type="password" name = "password_user" class="form-control" autocomplete="off" >
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <label for="password_repeat" class=" form-control-label">Repeat Password</label><br><small class = "form-text text-danger"><?= form_error('password_repeat'); ?></small>
                                            <input type="password" name = "password_repeat" class="form-control" autocomplete="off">
                                            
                                        </div>
                                    </div>
                                </div>
                                
                               
                            </div>
                            <button class = "btn btn-primary btn-sm" type = "submit">Tambah Data</button>

                        </div>
                        </form>
                    </div>
                
                </div>
            </div>
            <!-- #END# Exportable Table -->
        </div>
    </section>


</body>

</html>
                          