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
                                Keranjang
                            </h2>

                        </div>
                        <?php

                        if($this->session->flashdata('flash')):

                          echo $this->session->flashdata('flash');

                         endif;


                         ?>
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
                                            <th width="20%">Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                       <?php

                                      $no = 1;


                                      foreach ($keranjang as $items): ?>
                                        <?php



                                        $id_tiket = $items['id'];
                                        $ambildata = $this->id_model->getTiketById($id_tiket);
                                        echo form_open(base_url('Id/updatecart/'.$items['rowid']));
                                        echo form_open(base_url('Id/updatecart/'.$items['rowid']));
                                        echo form_hidden('stok_tiket',$ambildata['stok_tiket']);

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
                                            <td><input min="1" class="form-control" type = "number" name="qty" value="<?= $items['qty']; ?>" style = "width:100%;"></td>
                                            <td><?= rupiah($items['subtotal']); ?></td>
                                            <td>
                                              <button type="submit" class="btn btn-success" name="update"><i class="fa fa-edit"></i> Update</button>
                                              <a href="<?= base_url('Id/deletecart/').$items['rowid']; ?>" class="btn btn-danger" onclick = "return confirm('Apakah anda yakin ingin menghapus tiket ini?') "><i class="fa fa-trash-o"></i> Hapus</a>
                                            </td>
                                        </tr>
                                         <?php echo form_close(); ?>
                                       <?php $no++; ?>
                                     <?php endforeach; ?>

                                    </tbody>
                                    <tr>
                                      <td colspan="7">Total Belanja:</td>
                                      <td colspan="1"><?= $this->cart->total_items(); ?></td>
                                      <td colspan="2"><font color="red"><?= rupiah($this->cart->total()); ?></font></td>
                                    </tr>
                                </table>
                                    <a href="<?= base_url('Id/destroycart'); ?>" class = "btn btn-danger" onclick = "return confirm('Apakah anda yakin untuk mengkosongkan keranjang?')"><i class="fa fa-trash-o"></i> Kosongkan Keranjang</a>

                                 <a href="<?= base_url('Id/checkout'); ?>" class="btn btn-success" onclick = "return confirm('Apakah anda yakin untuk checkout?')"><i class="fa fa-shopping-cart"></i> Checkout</a>
                            </div>
                        </div>
                </div>
            </div>
          </div>
        </div>
