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
                                <?= $edit_artikel; ?>
                            </h2>
                            
                        </div>
                        <?= form_open_multipart(); ?>
                        <div class="body">

                            <div class="row clearfix">
                                <div class="col-sm-12" hidden>
                                    <div class="form-group form-float">
                                        <div class="form-line" >
                                            <label for="id_artikel" class=" form-control-label">ID Artikel</label>
                                            <input type="text" name = "id_artikel" class="form-control" readonly value = "<?= $get_artikel['id_artikel']; ?>" id = "id_artikel">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group form-float">
                                        <div class="form-line" >
                                            <label for="judul" class=" form-control-label">Judul</label>
                                           <small class = "form-text text-danger"><?= form_error('judul'); ?></small>
                                            <input type="text" name = "judul" class="form-control"value = "<?= $get_artikel['judul']; ?>" id = "judul">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group form-float">
                                        <div class="form-line" >
                                            <label for="tanggal" class="form-control-label">Tanggal</label><br><i class="material-icons ">date_range</i><br><small class = "form-text text-danger"><?= form_error('tanggal'); ?></small>
                                            <input type="text" name = "tanggal" class="datepicker form-control"value = "<?= $get_artikel['tanggal']; ?>" id = "tanggal">

                                        </div>
                                    </div>
                                </div>
                                 <div class="col-sm-12">
                                    <div class="form-group form-float">
                                        <div class="form-line" >
                                            <label for="artikel" class="form-control-label">Artikel</label> 
                                            <br><small class = "form-text text-danger"><?= form_error('artikel'); ?></small>
                                            <textarea id="ckeditor" name="artikel">
                                                <?= $get_artikel['artikel']; ?>
                                    
                                        </textarea>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group form-float">
                                        
                                            <label for="foto" class=" form-control-label">Foto</label>
                                            <br>
                                            <img src="<?= base_url('assets/images/artikel/').$get_artikel['foto']; ?>" width = "150px" height = "100px">
                                            <br><br>
                                            <div class="form-line">
                                            <input type="file" name = "foto" class="form-control" accept="image/*">
                                        </div>


                                       
                                    </div>
                                </div>
                                <?php $status = $get_artikel['status']; ?>
                                <div class="col-sm-12">
                                    <div class="form-group form-float">
                                        
                                  <label>Status</label>      
                                 <div class="demo-radio-button">
                                <small class = "form-text text-danger"><?= form_error('status'); ?></small><br>

                                <input name="status" type="radio" id="radio_7" value="0" class="radio-col-red"<?php if($status == '0'){echo "checked=\"checked\"";}; ?> />
                                <label for="radio_7">Draft</label>
                                <input name="status" type="radio" id="radio_17" value="1" class="radio-col-green" <?php if($status == '1'){echo "checked=\"checked\"";}; ?>/>
                                <label for="radio_17">Published</label>

                                
                            </div>
                            <div class="col-md" hidden>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <label for="judul" class=" form-control-label">Publisher</label>
                                            <input type="text" name  = "username" class="form-control" autocomplete="off" value ="<?= $get_artikel['username']; ?>">
                                           
                                        </div>
                                    </div>
                                </div>
                                            
                                       
                                    </div>
                                </div>
                                
                               
                                

                            </div>
                            <button class = "btn btn-primary btn-sm" type = "submit">Edit Data </button>

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
                          