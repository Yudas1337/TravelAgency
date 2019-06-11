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
            <?php
            if(empty($tiket_user))
            {
              echo 'Anda belum memesan tiket atau tiket anda masih diverifikasi admin';
            }

            foreach ($tiket_user as $tu):
                # code...

             ?>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">

                        <div class="body">
                            <div class="table-responsive">
                                <table class="table">

                                    <tbody>

                                        <tr>

                                            <td><img width = "150px" height = "100px" src = "<?= base_url('assets/images/').$tu['gambar_maskapai']; ?>"></td>
                                            <td>
                                              <b>Nama Pemesan</b>
                                              <br><?= $tu['nama_user']; ?>
                                              <br><br>
                                              <b>Tanggal Pemesanan</b>
                                              <br><?= $tu['tanggal_pembelian']; ?>
                                            </td>
                                          <td>
                                            <b>Kode Booking</b>
                                            <br><font color = 'orange'><?= $tu['id_transaksi']; ?></font>
                                            <br><br>
                                            <b>Jumlah Tiket</b>
                                            <br><?= $tu['jumlah_pembelian'].' Tiket'; ?>
                                          </td>

                                          <tr>
                                            <td>
                                              <b>Penerbangan</b>
                                              <br><?= $tu['nomor_penerbangan']; ?>
                                              <br><?= $tu['jenis_penerbangan']; ?>
                                            </td>
                                            <td>
                                            <i class = "fa fa-plane"></i>  <b>Keberangkatan</b>
                                              <font color = "orange"><?= $tu['waktu_keberangkatan']; ?></font>
                                              <br><?= $tu['tiket_berangkat']; ?>
                                              <br><?= $tu['tanggal_berangkat']; ?>
                                            </td>
                                            <td>
                                            <i class = "fa fa-plane"></i>  <b>Kedatangan</b>
                                              <font color = "orange"><?= $tu['waktu_datang']; ?></font>
                                              <br><?= $tu['tiket_tujuan']; ?>
                                              <br><?= $tu['tanggal_datang']; ?>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td style="background:#0861c9" colspan="3">
                                            <font size = "5" color = "white">DETAIL PENUMPANG</font>
                                          </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <b>Kode Tiket</b>
                                              <br>
                                              <?= $tu['kode_tiket']; ?>
                                            </td>
                                            <td>
                                              <b>Title</b>
                                              <br>
                                              <?= $tu['title']; ?>
                                            </td>
                                            <td>
                                              <b>Nama Penumpang</b>
                                              <br>
                                              <?= $tu['nama_user']; ?>
                                            </td>
                                          </tr>

                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            <!-- #END# Exportable Table -->
        </div>
    </section>


</body>

</html>
