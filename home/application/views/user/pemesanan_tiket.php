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
                                <?= $pesan_tiket; ?>
                            </h2><br>
                            <?php

            if ($this->session->flashdata('flash') ):

                echo $this->session->flashdata('flash');

                endif;
    ?>


                            <br>

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
                                            <th>Nama Pemesan</th>
                                            <th>Maskapai</th>
                                            <th>Kelas</th>
                                            <th>Total Beli</th>
                                            <th>Harga Total</th>
                                            <th>Bukti Pembayaran</th>
                                            <th>Status</th>
                                            <th>Aksi</th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach($pemesanan_tiket as $pt):

                                         ?>
                                        <tr>
                                            <td><?= $no; ?></td>
                                            <td>
                                                <?= $pt['nama_user']; ?>
                                                <br>
                                                <?= $pt['email_user']; ?>
                                            </td>
                                            <td><img width = "100px" height = "50px" src = "<?= base_url('assets/images/').$pt['gambar_maskapai']; ?>"><br><br><?= $pt['jenis_penerbangan']; ?></td>
                                            <td><?= $pt['kelas']; ?></td>
                                            <td><?= $pt['jumlah_pembelian']; ?></td>
                                            <td><?= rupiah($pt['harga_total']); ?></td>
                                            <td><?php  ?>
                                                <img width = "120px" height = "50px" src = "<?= base_url('assets/images/bukti_pembayaran/').$pt['bukti_transfer']; ?>"></td>
                                            <td>

                                            <small class = 'form-text text-danger'>Not Verified</small>

                                                 </td>
                                                <td>

                                                 <a href="<?= base_url('user/valid_transaksi/'). $pt['id_transaksi']; ?>" class="btn btn-success btn-sm" onclick = "return confirm('Apakah anda yakin untuk menyetujui transaksi ini ??');"><i class="fas fa-check"></i> Accept&nbsp;</a>
                                                 <br><br>
                                                 <a href="<?= base_url('user/invalid_transaksi/').$pt['id_transaksi']; ?>" class="btn btn-danger btn-sm" onclick = "return confirm('Apakah anda yakin untuk menghapus transaksi ini ??');"><i class="material-icons">close</i> Reject &nbsp;</a>

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
