<?php
function rupiah($angka){
    
                                        $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
                                        return $hasil_rupiah;
 
                                        }


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
                                <?= $tiket; ?>
                            </h2><br>
                            <?php 

            if ($this->session->flashdata('flash') ): 
                    # code...
                    

    ?>
                            <div class = "row mt-3">
                            <div class="col-md-6">
                             <div class="alert alert-success alert-dismissible" role="alert">
                                Data Tiket <strong> berhasil </strong> <?= $this->session->flashdata('flash'); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                               
                            </div></div>
                        </div> 
                    <?php endif; ?> 
                            <br>
                            <a class = "btn btn-primary btn-md" href = "tambah_tiket"><i class="material-icons">add</i> Tambah Tiket</a>
                            

                            
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
                                            <th>Maskapai</th>
                                            <th>Jenis Penerbangan</th>
                                            <th>Tiket Berangkat</th>
                                            <th>Tiket Tujuan</th>
                                            <th>Harga Tiket</th>
                                            <th>Kelas</th>
                                            <th>Stok Tiket </th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach($list_tiket as $lt):

                                         ?>
                                        <tr>
                                            <td><?= $no; ?></td>
                                            <td><img width = "100px" height = "50px" src = "<?= base_url('assets/images/').$lt['gambar_maskapai']; ?>"><br><br><?= $lt['maskapai']; ?></td>
                                            <td><?= $lt['jenis_penerbangan']; ?>
                                             <br><br><?= $lt['nomor_penerbangan']; ?>       
                                            </td>
                                            <td><?= $lt['tiket_berangkat']; ?>
                                              <br><?= $lt['waktu_keberangkatan']; ?>
                                              <br><?= $lt['tanggal_berangkat']; ?>      
                                            </td>
                                            <td><?= $lt['tiket_tujuan']; ?>
                                              <br><?= $lt['waktu_datang']; ?>
                                              <br><?= $lt['tanggal_datang']; ?>      
                                            </td>
                                            <td><?= rupiah($lt['harga_tiket']); ?></td>
                                            <td><?= $lt['kelas']; ?></td>
                                            <td><?= $lt['stok_tiket'];?></td>
                                            <td>                                                
                                            <a href = "<?= base_url('user/edit_tiket/').$lt['id_tiket']?>" id = "edit" class = "btn btn-warning btn-sm mb-10"><i class="fas fa-edit"></i>&nbsp; Edit &nbsp;</a><br><br>
                                            <a href = "<?= base_url('user/hapus_tiket/').$lt['id_tiket'];?>" class = "btn btn-danger btn-sm" onclick = "return confirm ('Apakah Anda Yakin Ingin Menghapus Data Ini ??')"><i class="fas fa-trash-alt"></i> Hapus </a>

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

