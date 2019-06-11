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
                                <?= $transaksi; ?>
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

                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach($list_transaksi as $lt):

                                         ?>
                                        <tr>
                                            <td><?= $no; ?></td>
                                            <td>
                                                <?= $lt['nama_user']; ?>
                                                <br>
                                                <?= $lt['email_user']; ?>
                                            </td>
                                            <td><img width = "100px" height = "50px" src = "<?= base_url('assets/images/').$lt['gambar_maskapai']; ?>"><br><br><?= $lt['jenis_penerbangan']; ?></td>
                                            <td><?= $lt['kelas']; ?></td>
                                            <td><?= $lt['jumlah_pembelian']; ?></td>
                                            <td><?= rupiah($lt['harga_total']); ?></td>
                                            <td><img width = "120px" height = "50px" src = "<?= base_url('assets/images/bukti_pembayaran/').$lt['bukti_transfer']; ?>"></td>
                                            <td>

                                            <small class = 'form-text text-success'>Verified</small>

                                                 </td>

                                        </tr>
                                        <?php $no++; endforeach; ?>
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
