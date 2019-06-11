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
                                <?= $ubah_pass; ?>
                            </h2><br>
                
              <?php  if ($this->session->flashdata('flash') ): 
                    # code...
                    

    ?>
                            <div class = "row mt-3">
                            <div class="col-md-6">
                              
                              <?= $this->session->flashdata('flash'); ?>

                             </div>
                        </div> 
                    <?php endif; ?> 
                          
                        </div>
                        <form method = "POST" action="<?= base_url('user/change_password'); ?>">
                        <div class="body">
                            <div class="row clearfix">

                          <div class="col-md">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <label for="password_lama" class=" form-control-label">Password Lama</label><br>
                                            <small class = "form-text text-danger"><?= form_error('password_lama'); ?></small>
                                            <input type="password" class="form-control" name = "password_lama" autocomplete="off">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <label for="password_baru" class=" form-control-label">Password Baru</label>
                                            <small class = "form-text text-danger"><?= form_error('password_baru'); ?></small>
                                            <input type="password" class="form-control" name = "password_baru" autocomplete="off" id="password_baru">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <label for="ulangi_password" class=" form-control-label">Ulangi Password</label>
                                            <small class = "form-text text-danger"><?= form_error('ulangi_password'); ?></small>
                                            <input type="password" class="form-control" name = "ulangi_password" autocomplete="off" id="ulangi_password">
                                            
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" name="ubah" class="btn btn-primary">Update Password</button>
                                
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
