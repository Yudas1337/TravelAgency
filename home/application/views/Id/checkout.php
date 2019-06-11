<?php
function rupiah($angka){

                                        $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
                                        return $hasil_rupiah;

                                        }


defined('BASEPATH') OR exit('No direct script access allowed');

 ?>
<div class="top2_wrapper">
  <div class="container">
    <div class="top2 clearfix">
      <header>
        <div class="logo_wrapper">
          <a href="<?= base_url('Id/index'); ?>" class="logo">
            <img src="<?= base_url()?>images/logo.png" alt="" class="img-responsive">
          </a>
        </div>
      </header>
      <div class="navbar navbar_ navbar-default">

        <div class="navbar-collapse navbar-collapse_ collapse">
          <ul class="nav navbar-nav sf-menu clearfix">
              <li><a href="<?= base_url('Id/index'); ?>">Home</a>

              </li>
            <li><a href="<?= base_url('Id/tiket'); ?>">Tiket</a></li>
            <li><a href="<?= base_url('Id/artikel'); ?>">Artikel</a></li>
            <li><a href="<?= base_url('Id/about'); ?>">About Us</a></li>
            <li><a href="<?= base_url('Id/contact'); ?>">Contact Us</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
            <!-- Basic Examples -->
            <div id="why1">
             <div class="container">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="header">
                            <h2 class="animated" data-animation="fadeInUp" data-animation-delay="100">
                                Checkout
                            </h2>

                        </div>

                        <div class="body">
                            <div class="table-responsive" >
                                <table class="table table-bordered js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Maskapai</th>
                                            <th>Penerbangan</th>
                                            <th>Berangkat</th>
                                            <th>Datang</th>
                                            <th>Kelas</th>
                                            <th>Harga</th>
                                            <th>Jumlah</th>
                                            <th>Total</th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                       <?php

                                      $no = 1;

                                      foreach ($keranjang as $items): ?>

                                        <?php
                                        $id_tiket = $items['id'];
                                        $qty = $items['qty'];
                                        $ambildata = $this->id_model->getTiketById($id_tiket);
                                        $stok_tiket = $ambildata['stok_tiket'];

                                        if($stok_tiket < $qty)
                                        {

                                          $this->session->set_flashdata('flash','<div class = "alert alert-danger">Stok Tiket tidak mencukupi!</div>');
                                          redirect(base_url('Id/keranjang'));
                                        }

                                      ?>
                                      <tr>

                                          <td><?= $no; ?></td>
                                            <td><img src="<?= base_url('assets/images/').$ambildata['gambar_maskapai']; ?>" width = "120px" height = "120px">
                                             </td>
                                            <td><?= $items['nomor_penerbangan']; ?><br>
                                                <?= $items['jenis_penerbangan']; ?></td>
                                            <td><?= $items['tiket_berangkat']; ?><br>
                                                <?= $items['waktu_keberangkatan']; ?><br>
                                                <?= $items['tanggal_berangkat']; ?>
                                                              </td>
                                            <td><?= $items['tiket_tujuan']; ?><br>
                                                <?= $items['waktu_datang']; ?><br>
                                                <?= $items['tanggal_datang']; ?>

                                            </td>
                                            <td><?= $items['kelas']; ?></td>
                                            <td><?= rupiah($items['price']); ?></td>
                                            <td><?= $items['qty']; ?></td>
                                            <td><?= rupiah($items['subtotal']); ?></td>

                                        </tr>
                                       <?php $no++; ?>
                                     <?php endforeach; ?>

                                    </tbody>
                                    <tr>
                                      <td colspan="7">Total Belanja:</td>
                                      <td colspan="1"><?= $this->cart->total_items(); ?></td>
                                      <td colspan="2"><font color="red"><?= rupiah($this->cart->total()); ?></font></td>
                                    </tr>
                                </table>
                                   <div class="col-md booking-row">

                        <?= form_open_multipart(); ?>
                        <?php
                        echo form_hidden('harga_total',$items['subtotal']);
                        echo form_hidden('id_user',$user['id_user']);
                        echo form_hidden('stok_tiket',$stok_tiket);

                        ?>

                        <h3 class="line">Informasi Pemesan</h3>

                        <div class="input2_wrapper">
                            <label class="col-md-5" style="padding-left:0;padding-top:12px;">Title <font color = "red">*</font></label>
                            <div class="col-md-7" style="padding-right:0;padding-left:0;">
                                <select class="form-control" name="title" required>
                                    <option value="Mr">Mr</option>
                                    <option value="Mrs">Mrs</option>
                                    <option value="Miss">Miss</option>
                                </select>
                            </div>
                        </div>
                        <div class="input2_wrapper">
                            <label class="col-md-5" style="padding-left:0;padding-top:12px;">Nama Pemesan <font color = "red">*</font></label>
                            <div class="col-md-7" style="padding-right:0;padding-left:0;">
                                <input type="text" class="form-control" value="<?= $user['nama_user'] ?>" spellcheck="false" name = "nama_user">
                                <small class = "form-text text-danger"><?= form_error('nama_user'); ?></small>
                            </div>
                        </div>

                        <div class="input2_wrapper">
                            <label class="col-md-5" style="padding-left:0;padding-top:12px;">Email <font color = "red">*</font></label>
                            <div class="col-md-7" style="padding-right:0;padding-left:0;">

                                <input type="text" class="form-control" value="<?= $user['email_user']; ?>" spellcheck="false" readonly name = "email_user">
                                 <small class = "form-text text-danger"><?= form_error('email_user'); ?></small>
                            </div>
                        </div>
                        <div class="input2_wrapper">
                            <label class="col-md-5" style="padding-left:0;padding-top:12px;">No Telepon <font color = "red">*</font></label>
                            <div class="col-md-7" style="padding-right:0;padding-left:0;">

                                <input type="text" class="form-control" value="<?= $user['no_telepon']; ?>" spellcheck="false" name = "no_telepon">
                                 <small class = "form-text text-danger"><?= form_error('no_telepon'); ?></small>
                            </div>
                        </div>
                        <div class="input2_wrapper">
                            <label class="col-md-5" style="padding-left:0;padding-top:12px;">Alamat User<font color = "red"> *</font></label>
                            <div class="col-md-7" style="padding-right:0;padding-left:0;">
                                <input type="text" class="form-control" value="<?= $user['alamat_user']; ?>" spellcheck="false" name = "alamat_user">
                                <small class = "form-text text-danger"><?= form_error('alamat_user'); ?></small>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="margin-top"></div>
                        <h3>Cara Pembayaran</h3>
                        <div class="input2_wrapper">
                          <div class="alert alert-warning col-lg-4">
                           Bank BCA  <br><br> 6860 1487 55
                          </div>
                        </div>
                        <div class="input2_wrapper">
                          <div class="alert alert-warning col-lg-4">
                          Bank BRI. <br><br> 0504.01.000239.30.0
                          </div>

                        </div>
                        <div class="input2_wrapper">
                          <div class="alert alert-warning col-lg-4">
                          Bank Mandiri <br><br> 070-00-0185555-5
                          </div>

                        </div>

                        <div class="clearfix"></div>

                        <div class="input2_wrapper">
                            <label class="col-md-5" style="padding-left:0;padding-top:12px;">Bukti Pembayaran<font color = "red"> *</font></label>
                            <div class="col-md-7" style="padding-right:0;padding-left:0;">

                                <input type="file" class="form-control" name = "bukti_transfer" required accept="image/*">
                            </div>
                        </div>

                               <div class="input2_wrapper">

                            <label class="col-md-5" style="padding-left:0;padding-top:12px;">Format File:</label>
                            <div class="col-md-7" style="padding-right:0;padding-left:0;"><br>

                                 <font color="red"> JPG JPEG PNG JPG</font></div>
                            </div>

                        <div class="col-lg-9"></div>
                        <div class="col-lg-3">
                        <button type="submit" class="btn btn-default btn-cf-submit3 float-right" style="width:100%;">Pesan Tiket</button>
                        </div>
                          <?php form_close(); ?>

                          </div>



                    </div>
                            </div>
                        </div>
                </div>
            </div>
          </div>
