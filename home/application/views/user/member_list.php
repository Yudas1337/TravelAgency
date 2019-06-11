<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

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
    <section class="content">
        <div class="container-fluid">
           

          <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  
                        
                           <?php foreach($member as $m): ?>
                            
                            <div class="col-lg-6">
                           <div class="card mb-3" style="max-width: 540px;">

                        <div class="row clearfix">

                          <div class="col-sm-4">
                            <div class="imgcontainer">
                            <img src="<?= base_url('assets/images/user_images/').$m['foto_user']; ?>" class="card-img avatar" width = "140px" height = "140px">
                            </div>
                          </div>
                          <div class="col-sm-8">
                            <div class="card-body">
                              <h5 class="card-title"><?= $m['nama_user']; ?></h5>
                              <p class="card-text">
                                <?= "Email: ". $m['email_user']; ?>
                                <br><br>
                                <?= "Address: ".$m['alamat_user']; ?>
                                <br><br>
                                <?= "Phone : ".$m['no_telepon']; ?>
                              </p>
                              <p class="card-text"><small class="text-muted">Member Since : <?= date('d M Y',$m['date_created']); ?> </small></p>
                            </div>
                          </div>
                          </div>
                        </div>
                      </div>
                  
                    <?php endforeach; ?>
                       
                    </div>
                </div>
                
            
          
        </div>
    </section>


</body>

</html>



