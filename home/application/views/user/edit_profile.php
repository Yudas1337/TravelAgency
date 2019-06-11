<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

<style type="text/css">

  .imgcontainer {
  text-align: center;
  margin: 14px 0 12px 0;
}

img.avatar {
  width: 80%;
  border-radius: 50%;
  margin-left:4px; 

}

</style>
    <section class="content">
        <div class="container-fluid">
            
           
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <?= $profilnya; ?>
                            </h2>
             
                          
                        </div>
                        <?= form_open_multipart(); ?>
                        <div class="body">
                            <div class="row clearfix">

                          <div class="col-lg-3">
                            <div id="targetPhoto"></div>
                            <img src="<?= base_url('assets/images/user_images/').$user['foto_user']; ?>" class="card-img avatar" width = "120px" height = "160px">

                          </div>
                          <div class="col-md-4">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <label for="nama_user" class=" form-control-label">Nama</label>
                                            <input type="text" class="form-control" name = "nama_user" autocomplete="off" value="<?= $user['nama_user']; ?>">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <label for="email_user" class=" form-control-label">Email </label>
                                            <input type="text" class="form-control" name = "email_user" autocomplete="off" value="<?= $user['email_user']; ?>" readonly>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <label for="alamat_user" class=" form-control-label">Alamat </label>
                                            <input type="text" class="form-control" name = "alamat_user" autocomplete="off" value="<?= $user['alamat_user']; ?>">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <label for="no_telepon" class=" form-control-label">No Telepon </label>
                                            <input type="text" class="form-control" name = "no_telepon" autocomplete="off" value="<?= $user['no_telepon']; ?>">
                                            
                                        </div>
                                    </div>
                                </div>
                          <div class="col-sm-8">
                              <p class="card-text"><small class="text-muted">Member Since : <?= date('d M Y',$user['date_created']); ?> </small></p>
                            <input type="file" name="foto_user" accept="image/*"><br><br>
                              <button type="submit" class="btn btn-primary">Update</button>
                           
                          </div>
                          </div>
                            
                        </div>
                        <?= form_close(); ?>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
        </div>
    </section>


</body>

</html>
