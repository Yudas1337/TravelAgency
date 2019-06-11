<section class="content">
        <div class="container-fluid">
           

            <!-- CKEditor -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <?= $tambah_artikel; ?>
                               
                            </h2>
                            
                        </div>
                        <?= form_open_multipart(); ?>
                        <div class="body">
                             <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <label for="judul" class=" form-control-label">Judul</label><br> <small class = "form-text text-danger"><?= form_error('judul'); ?></small>
                                            <input type="text" name = "judul" class="form-control" autocomplete="off" value="<?= set_value('judul'); ?>">
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group form-float">
                                        
                                        <div class="form-line">
                                            <label for="tanggal" class=" form-control-label">Tanggal</label><br><i class="material-icons ">date_range</i><br><small class = "form-text text-danger"><?= form_error('tanggal'); ?></small>
                                            <input type="text" name = "tanggal" class=" datepicker form-control" placeholder="Please choose a date..." autocomplete="off" value="<?= set_value('tanggal'); ?>">
                                            
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                <label for="artikel" class=" form-control-label">Artikel</label>
                                <br><small class = "form-text text-danger"><?= form_error('artikel'); ?></small><br>
                                <textarea id="ckeditor" name="artikel">
                                    
                                </textarea></div></div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                <label for="foto" class=" form-control-label">Foto</label>
                                <input type="file" name="foto" accept="image/*" required>
                                </div></div>
                                <label>Status</label>
                                <div class="demo-radio-button">
                                <small class = "form-text text-danger"><?= form_error('status'); ?></small><br>
                                <input name="status" type="radio" id="radio_7" value="0" class="radio-col-red" />
                                <label for="radio_7">Draft</label>
                                <input name="status" type="radio" id="radio_17" value="1" class="radio-col-green"/>
                                <label for="radio_17">Published</label>

                                
                            </div>
                            <div class="col-sm-12" hidden>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <label for="judul" class=" form-control-label">Publisher</label>
                                            <input type="text" name = "username" class="form-control" autocomplete="off" value="<?= $user['nama_user']; ?>">
                                           
                                        </div>
                                    </div>
                                </div>

                                
                                </div>
                                <br>
                               <button type="submit" class="btn btn-primary">Tambah Artikel</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
            <!-- #END# CKEditor -->
           
           
        </div>
    </section>