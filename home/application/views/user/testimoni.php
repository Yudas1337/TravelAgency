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
                                <?= $testimoni; ?>
                            </h2><br>
                            <?php 

            if ($this->session->flashdata('flash') ): 
                    # code...
                    

    ?>
                            <div class = "row mt-3">
                            <div class="col-md-6">
                             <div class="alert bg-green alert-dismissible" role="alert">
                                Testimoni <strong> berhasil </strong> <?= $this->session->flashdata('flash'); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                               
                            </div></div>
                        </div> 
                    <?php endif; ?> 
                            <br>
                            <a class = "btn btn-primary btn-md" href = "" data-toggle="modal" data-target="#TambahTestimoniModal"><i class="material-icons">add</i>Tambah Testimoni</a>
                            

                            
    <div class = "row mt-3">
        <div class = "col-md-6">
           

        </div></div>    
    
                            
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Ulasan</th>
                                            <th>Aksi</th>
                                            
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach($get_testimoni as $gt):

                                         ?>
                                        <tr>
                                            <td><?= $no; ?></td>
                                            <td><?= $gt['testimoni']; ?></td>
                                            <td>                               
                                            <a href = "" class = "btn btn-warning btn-sm editUlasan" data-toggle="modal" data-target="#EditTestimoniModal" data-id_testimoni = "<?= $gt['id_testimoni']; ?>"><i class="fas fa-edit" ></i>&nbsp; Edit &nbsp;</a>
                                            <a href = "<?= base_url('user/hapus_testimoni/').$gt['id_testimoni']; ?>" class = "btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin Menghapus Data ini ??')"><i class="fas fa-trash-alt"></i> Hapus </a>

                                            </td>
                                            
                                        </tr>
                                        <?php $no++; ?>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
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

<div class="modal fade" id="TambahTestimoniModal" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="MaskapaiModalTitle">Tambah Testimoni</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <?= form_open_multipart('user/testimoni'); ?>
              <div class="modal-body">
                <div class="form-group">
                    <div class="form-group form-float">
                                        
                    <div class="form-line">
                   <label for="testimoni" class=" form-control-label">Ulasan Anda</label><br><small class = "form-text text-danger"><?= form_error('testimoni'); ?></small><br>
                   <small class = "form-text text-danger"><?= form_error('email_user'); ?></small>
                  <input type="text" name = "testimoni" class=" form-control" autocomplete="off" value="<?= set_value('testimoni'); ?>">                                
                  </div>
                  </div>
                  <div class="form-group form-float" hidden>
                  <div class="form-line">
                   <label for="nama_user" class=" form-control-label">Nama_user</label><br><small class = "form-text text-danger"><?= form_error('nama_user'); ?></small>
                  <input type="text" name = "nama_user" class=" form-control" autocomplete="off" value="<?= $user['nama_user']; ?>">                                
                  </div></div>
                  <div class="form-group form-float" hidden>
                  <div class="form-line">
                   <label for="email_user" class=" form-control-label">Email User</label>
                  <input type="text" name = "email_user" class=" form-control" autocomplete="off" value="<?= $user['email_user']; ?>">                                
                  </div></div>
                

            </div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
              </div>
            <?= form_close(); ?>
            </div>
          </div>
        </div>
        <!-- Detail Maskapai -->
        

          <!-- Edit Maskapai -->
        <div class="modal fade" id="EditTestimoniModal" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="EditTestimoniModal">Edit Testimoni</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <?= form_open_multipart('user/edit_testimoni'); ?>
              <div class="modal-body">
                <div class="form-group">
                  <div class="form-group form-float">
                                        
                    <div class="form-line" hidden>
                   <label for="id_testimoni" class=" form-control-label">ID Testimoni</label>
                   <br><small class = "form-text text-danger"><?= form_error('maskapai'); ?></small>
                  <input type="text" name = "id_testimoni" class=" form-control" autocomplete="off" id="editid_testimoni">                                
                  </div>
                </div>
               <div class="form-group form-float">
                                        
                    <div class="form-line">
                   <label for="edit_testimoni" class=" form-control-label">Testimoni</label>
                   <br><small class = "form-text text-danger"><?= form_error('testimoni'); ?></small>
                  <input type="text" name = "testimoni" class=" form-control" autocomplete="off" id="edit_testimoni">                                
                  </div>
                </div>

            </div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Edit Maskapai</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
              </div>
            </form>
            </div>
          </div>
        </div>

        <!-- Hapus Maskapai -->
