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
                                <?= $profilnya; ?>
                                
                            </h2>
                            <?php 

            if ($this->session->flashdata('flash') ): 
                    # code...
                    

    ?>
                            <div class = "row mt-3">
                            <div class="col-md-6"><br>
                             <div class="alert bg-green alert-dismissible" role="alert">
                                Profil <strong> berhasil </strong> <?= $this->session->flashdata('flash'); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>


                               
                            </div></div>
                        </div> 
                    <?php endif; ?> 
                            
                            
<style type="text/css">

  .imgcontainer {
  text-align: center;
  margin: 14px 0 12px 0;
}

img.avatar {
  width: 100%;
  border-radius: 50%;
  margin-left:4px; 

}

</style>
                            
    
                            
                        </div>
                        <div class="body">
                            
                                <div class="card mb-3" style="max-width: 540px;">

                        <div class="row clearfix">

                          <div class="col-sm-4">
                            <div class="imgcontainer">
                            <img src="<?= base_url('assets/images/user_images/').$user['foto_user']; ?>" class="card-img avatar" width = "120px" height = "160px">
                            </div>
                          </div>
                          <div class="col-sm-8">
                            <div class="card-body">
                              <h5 class="card-title"><?= $user['nama_user']; ?></h5>
                              <p class="card-text">
                                <?= "Email: ". $user['email_user']; ?>
                                <br><br>
                                <?= "Address: ".$user['alamat_user']; ?>
                                <br><br>
                                <?= "Phone : ".$user['no_telepon']; ?>
                              </p>
                              <p class="card-text"><small class="text-muted">Member Since : <?= date('d M Y',$user['date_created']); ?> </small></p>
                              <a href="edit_profile" class="btn btn-primary">Edit Profile</a>
                            </div>
                          </div>
                          </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
        </div>
    </section>


</body>

</html>
