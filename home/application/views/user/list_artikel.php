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
                                <?= $list_artikel; ?>
                            </h2><br>
                            <?php 

            if ($this->session->flashdata('flash') ): 
                    # code...
                    

    ?>
                            <div class = "row mt-3">
                            <div class="col-md-6">
                             <div class="alert bg-green alert-dismissible" role="alert">
                                Artikel <strong> berhasil </strong> <?= $this->session->flashdata('flash'); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                               
                            </div></div>
                        </div> 
                    <?php endif; ?> 
                            <br>
                            <a class = "btn btn-primary btn-md" href = "tambah_artikel"><i class="material-icons">add</i> Tambah Artikel</a>
                            

                            
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
                                            <th>Judul</th>
                                            <th>Tanggal</th>
                                            <th>Isi Artikel</th>
                                            <th>Gambar</th>
                                            <th>Status</th>
                                            <th>Publisher</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach($artikel as $a):

                                         ?>
                                        <tr>
                                            <td><?= $no; ?></td>
                                            <td><?= $a['judul']; ?></td>
                                            <td><?= $a['tanggal']; ?></td>
                                            <td><?= substr($a['artikel'],0,50); ?></td>
                                            <td><img width = "120px" height = "50px" src = "<?= base_url('assets/images/artikel/').$a['foto']; ?>"></td>
                                            <td><?php

                                            $status = $a['status'];

                                            if ($status == 1): ?>
                                                <small class = 'form-text text-success'>Published</small> 
                                             <?php else: ?>
                                                <small class = 'form-text text-danger'>Draft</small> 
                                                
                                             <?php endif;      
                                             ?></td>
                                            <td><?= $a['username'];?></td>
                                            <td>                                                
                                            <a href = "<?= base_url('user/edit_artikel/').$a['id_artikel']?>" class = "btn btn-warning btn-sm mb-10"><i class="fas fa-edit"></i>&nbsp; Edit &nbsp;</a><br><br>
                                            <a href = "<?= base_url('user/hapus_artikel/').$a['id_artikel'];?>" class = "btn btn-danger btn-sm" onclick = "return confirm ('Apakah Anda Yakin Ingin Menghapus Data Ini ??')"><i class="fas fa-trash-alt"></i> Hapus </a>

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

