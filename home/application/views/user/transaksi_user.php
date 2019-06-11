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
                                <?= $riwayat_transaksi; ?>
                            </h2>
                            

                            
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
                                            <th>Total Beli</th>
                                            <th>Harga Total</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($transaksi_user as $tu):
                                            # code...
                                        
                                         ?>
                                        <tr>
                                            <td><?= $no; ?></td>
                                            <td><img width = "100px" height = "50px" src = "<?= base_url('assets/images/').$tu['gambar_maskapai']; ?>"><br><br><?= $tu['maskapai']; ?></td>
                                            <td><?= $tu['jenis_penerbangan']; ?>
                                             <br><br><?= $tu['nomor_penerbangan']; ?>       
                                            </td>
                                            <td><?= $tu['tiket_berangkat']; ?>
                                              <br><?= $tu['waktu_keberangkatan']; ?>
                                              <br><?= $tu['tanggal_berangkat']; ?>      
                                            </td>
                                            <td><?= $tu['tiket_tujuan']; ?>
                                              <br><?= $tu['waktu_datang']; ?>
                                              <br><?= $tu['tanggal_datang']; ?>      
                                            </td>
                                            <td><?= rupiah($tu['harga_tiket']); ?></td>
                                            <td><?= $tu['jumlah_pembelian']; ?></td>
                                            <td><?= rupiah($tu['harga_total']);?></td>
                                            
                                            
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

