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
                                <?= $maskapai; ?>
                            </h2><br>
                            <?php 

            if ($this->session->flashdata('flash') ): 
                    # code...
                    

    ?>
                            <div class = "row mt-3">
                            <div class="col-md-6">
                             <div class="alert bg-green alert-dismissible" role="alert">
                                Data Maskapai <strong> berhasil </strong> <?= $this->session->flashdata('flash'); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                               
                            </div></div>
                        </div> 
                    <?php endif; ?> 
                            <br>
                            <a class = "btn btn-primary btn-md" href = "" data-toggle="modal" data-target="#TambahMaskapaiModal"><i class="material-icons">add</i> Tambah Maskapai</a>
                            

                            
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
                                            <th>Gambar Maskapai</th>
                                            <th>Maskapai</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach($list_maskapai as $lm):

                                         ?>
                                        <tr>
                                            <td><?= $no; ?></td>
                                            <td><img width = "100px" height = "50px" src = "<?= base_url('assets/images/').$lm['gambar_maskapai']; ?>"></td>
                                            <td><?= $lm['maskapai']; ?></td>
                                            <td>
                                            <a href="" class = "btn btn-success detailmaskapai" data-toggle="modal" data-target="#DetailMaskapaiModal" data-id_maskapai = "<?= $lm['id_maskapai']; ?>"><i class="fas fa-info-circle"></i> Detail</a>                               
                                            <a href = "" class = "btn btn-warning btn-sm editMaskapai" data-toggle="modal" data-target="#EditMaskapaiModal" data-id_maskapai = "<?= $lm['id_maskapai']; ?>"><i class="fas fa-edit" ></i>&nbsp; Edit &nbsp;</a>
                                            <a href = "<?= base_url('user/hapus_maskapai/').$lm['id_maskapai']; ?>" class = "btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin Menghapus Data ini ??')"><i class="fas fa-trash-alt"></i> Hapus </a>

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

<div class="modal fade" id="TambahMaskapaiModal" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="MaskapaiModalTitle">Tambah Data Maskapai</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <?= form_open_multipart('user/list_maskapai'); ?>
              <div class="modal-body">
                <div class="form-group">
                    <div class="form-group form-float">
                                        
                    <div class="form-line">
                   <label for="maskapai" class=" form-control-label">Maskapai</label><br><small class = "form-text text-danger"><?= form_error('maskapai'); ?></small>
                  <input type="text" name = "maskapai" class=" form-control" placeholder="Lion Air" autocomplete="off" value="<?= set_value('maskapai'); ?>">                                
                  </div>
                </div>

                <label for="gambar_maskapai" class=" form-control-label">Gambar Maskapai</label>
              <div class="image-upload-wrap">
                <input class="file-upload-input" type='file' name="gambar_maskapai" onchange="readURL(this);" accept="image/*"  required />
                <div class="drag-text">
                  <h3>Drag and drop a file or select add Image</h3>
                </div>
              </div>
              <div class="file-upload-content">
                <img class="file-upload-image" src="#" alt="your image" />
                <div class="image-title-wrap">
                  <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
                </div>
              </div>
            
                            
              
            </div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
              </div>
            </form>
            </div>
          </div>
        </div>
        <!-- Detail Maskapai -->
        <div class="modal fade" id="DetailMaskapaiModal" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="MaskapaiModal">Detail Maskapai</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form action = "" method="POST">
              <div class="modal-body">
                <div class="form-group">
               <div class="form-group form-float">
                                        
                    <div class="form-line">
                   <label for="maskapai" class=" form-control-label">Maskapai</label>
                  <input type="text" name = "maskapai" class=" form-control" placeholder="Lion Air" autocomplete="off" id = "maskapai" readonly>                                
                  </div>
                </div>
                <div class="row m-5">
               <div class="col-sm-4">
                                    
                <label for="gambar_maskapai" class=" form-control-label">Gambar Maskapai</label><br>
                <img src="" id = "gambar_maskapai" class="thumbnail" width="150px" height="150px">
                              
                  </div>

                </div>
                
            </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
              </div>
            </form>
            </div>
          </div>
        </div>

          <!-- Edit Maskapai -->
        <div class="modal fade" id="EditMaskapaiModal" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="MaskapaiModal">Edit Maskapai</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <?= form_open_multipart('user/edit_maskapai'); ?>
              <div class="modal-body">
                <div class="form-group">
                  <div class="form-group form-float" hidden>
                                        
                    <div class="form-line" >
                   <label for="id_maskapai" class=" form-control-label">ID Maskapai</label>
                   <br><small class = "form-text text-danger"><?= form_error('maskapai'); ?></small>
                  <input type="text" name = "id_maskapai" class=" form-control" autocomplete="off" id="editid_maskapai">                                
                  </div>
                </div>
               <div class="form-group form-float">
                                        
                    <div class="form-line">
                   <label for="maskapai" class=" form-control-label">Maskapai</label>
                   <br><small class = "form-text text-danger"><?= form_error('maskapai'); ?></small>
                  <input type="text" name = "maskapai" class=" form-control" autocomplete="off" id="editmaskapai">                                
                  </div>
                </div>

                <label for="gambar_maskapai" class=" form-control-label">Gambar Maskapai</label><br>
                <img src="" id="editgambarmaskapai" width="100px" height="150px" class="img-thumbnail">
                <br><br><br>
                <input type="file" name="gambar_maskapai" accept="image/*">
                 
                
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
