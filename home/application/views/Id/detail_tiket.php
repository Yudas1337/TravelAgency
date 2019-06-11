<?php

defined('BASEPATH') OR exit('No direct script access allowed');
function rupiah($angka){

                                        $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
                                        return $hasil_rupiah;

                                        }
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
            <li class="sub-menu sub-menu-1 active"><a href="<?= base_url('Id/tiket'); ?>">Tiket</a></li>
            <li><a href="<?= base_url('Id/artikel'); ?>">Artikel</a></li>
            <li><a href="<?= base_url('Id/about'); ?>">About Us</a></li>
            <li><a href="<?= base_url('Id/contact'); ?>">Contact Us</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<img class="page_banner" src = "<?= base_url('images/tiket_header.png'); ?>">


    <div class="breadcrumbs1_wrapper">
        <div class="container">
            <div class="breadcrumbs1"><a href="<?= base_url('Id/') ?>">Home</a><span>/</span><a href="<?= base_url('Id/tiket'); ?>">Tiket</a><span>/</span><a href="<?= base_url('Id/detail_tiket/').$getTiket['id_tiket']; ?>"></a><?= $getTiket['maskapai']; ?></div>
        </div>
    </div>


    <div id="content">
        <div class="container">

            <div class="row">
                <div class="col-sm-3">
                    <div class="sidebar-block">
                        <?= form_open(base_url('Id/tiket')); ?>
                            <h3>Flights</h3>
                            <div class="col-sm-12 no-padding margin-top">
                                <div class="input1_wrapper">
                                    <label>Dari:</label>
                                    <div class="input2_inner">
                                          <input type="text" class="input" value="Jakarta" name="tiket_berangkat" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-sm-12 no-padding margin-top">
                                <div class="input1_wrapper">
                                    <label>Ke:</label>
                                    <div class="input2_inner">
                                          <input type="text" class="input" value="Surabaya" name="tiket_tujuan" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-sm-12 no-padding margin-top">
                                <div class="input1_wrapper">
                                    <label>Tanggal:</label>
                                    <div class="input1_inner">
                                        <input type="text" class="input datepicker" name="tanggal_berangkat" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-sm-12 no-padding margin-top">
                              <div class="select1_wrapper">
                                <label>Kelas:</label>
                                <div class="select1_inner">
                                  <select class="select2 select select3" style="width: 100%" name="kelas">
                                    <option value="First Class">First Class</option>
                                    <option value="Eksekutif">Eksekutif</option>
                                    <option value="Bisnis">Bisnis</option>
                                    <option value="Ekonomi">Ekonomi</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-sm-12 no-padding margin-top">
                              <label>Jumlah Penumpang:</label>
                              <div class="select1_inner">
                                <select class="select2 select select3" style="width: 100%" name="stok_tiket">
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                  <option value="5">5</option>
                                  <option value="6">6</option>
                                  <option value="7">7</option>
                                  <option value="8">8</option>
                                </select>
                              </div>
                            </div>
                            <div class="no-padding margin-top text-center" style="margin-top:30px;">
                                <button type="submit" name="search" class="btn-default btn-form1-submit" style="width:100%;">Cari Tiket</button>
                            </div>
                            <div class="clearfix"></div>

                        <?= form_close(); ?>

                    </div>

                    <div class="clearfix"></div>
                    <div class="margin-top"></div>
                    <div class="sm_slider sm_slider1">
                        <a class="sm_slider_prev" href="#"></a>
                        <a class="sm_slider_next" href="#"></a>
                        <div class="">
                            <div class="carousel-box">
                                <div class="inner">
                                    <div class="carousel main">
                                        <ul>
                                          <?php foreach ($testimoni as $t): ?>
                                            <li>
                                                <div class="sm_slider_inner">
                                                    <div class="txt1"><?= $t['testimoni']; ?></div>
                                                    <div class="txt2"><?= $t['nama_user']; ?></div>
                                                </div>
                                            </li>
                                          <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-sm-9">
                    <div class="blog_content">

                    <?php 
                    
                    if($this->session->flashdata('flash')):
                      echo $this->session->flashdata('flash');
                    endif;

                    ?>

                        <?php echo form_open(base_url('Id/add'));


                        echo form_hidden('id_tiket',$getTiket['id_tiket']);
                        echo form_hidden('maskapai',$getTiket['maskapai']);
                        echo form_hidden('jenis_penerbangan',$getTiket['jenis_penerbangan']);
                        echo form_hidden('nomor_penerbangan',$getTiket['nomor_penerbangan']);
                        echo form_hidden('tiket_berangkat',$getTiket['tiket_berangkat']);
                        echo form_hidden('tiket_tujuan',$getTiket['tiket_tujuan']);
                        echo form_hidden('tanggal_berangkat',$getTiket['tanggal_berangkat']);
                        echo form_hidden('tanggal_datang',$getTiket['tanggal_datang']);
                        echo form_hidden('waktu_keberangkatan',$getTiket['waktu_keberangkatan']);
                        echo form_hidden('waktu_datang',$getTiket['waktu_datang']);
                        echo form_hidden('harga_tiket',$getTiket['harga_tiket']);
                        echo form_hidden('kelas',$getTiket['kelas']);
                        echo form_hidden('redirect_page', str_replace('index.php/','', base_url('Id/keranjang')));

                        ?>
                        <div class="post post-full">
                            <h3 class="hch"><?= $getTiket['maskapai']; ?></h3>

                            <div class="clearfix"></div>
                            <p class="address">Kode Penerbangan : <?= $getTiket['nomor_penerbangan']; ?></p>
                            <p class="address"><img src="<?= base_url('assets/images/').$getTiket['gambar_maskapai']; ?>" width = "150px" class="img1 img-responsive"></p>

                            <div class="post-story">
                                <hr>

                                <div class="post-story-body clearfix">

                                    <h4>Details:</h4>
                                    <h5><?= $getTiket['tanggal_berangkat']; ?></h5>

                                      <ul>
                                           <li>Jenis Penerbangan: <?= $getTiket['jenis_penerbangan']; ?></li>
                                          <li>Dari: <?= $getTiket['tiket_berangkat']; ?></li>
                                          <li>Ke: <?= $getTiket['tiket_tujuan']; ?></li>
                                          <li>Waktu Berangkat: <?= $getTiket['waktu_keberangkatan']; ?> </li>
                                          <li>Waktu Datang: <?= $getTiket['waktu_datang']; ?></li>
                                          <li>Kelas: <?= $getTiket['kelas']; ?></li>

                                          <li>Status Tiket:
                                            <?php
                                            $stok = $getTiket['stok_tiket'];
                                            if($stok > 0){

                                             ?>
                                             <small class = "form-text text-success">Tersedia</small>
                                            <?php
                                            }
                                            else{ ?>

                                                <small class = "form-text text-danger">Stok Habis</small>
                                          <?php  }  ?>
                                          </li>
                                      </ul>
                                    <h5><font color = "red">Harga Tiket: <?= rupiah($getTiket['harga_tiket']); ?></font></h5>

                                 <?php if($stok > 0 ){ ?>
                                <button type="submit" value="submit" class="btn btn-default btn-cf-submit3" style="width:30%;">BOOKING NOW</button>
                                <?php }else{ ?>
                                   <button type="button" class="btn btn-default btn-cf-submit3" style="width:30%;">Stok Tiket Habis</button>
                               <?php } ?>
                                </div>
                                <div class="post-story-tags clearfix">

                                    <div class="tags_wrapper"><b>Tags</b>: <a href="<?= base_url('Id/tiket') ?>">Tiket Pesawat</a>, <a href="<?= base_url('Id/') ?>">Travel Agency</a></div>

                                    <div class="share_post clearfix">
                                        <div class="txt1">Share Post:</div>
                                        <div class="social4_wrapper">
                                            <ul class="social4 clearfix">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <?php echo form_close(); ?>

                    </div>
                </div>
            </div>


        </div>
    </div>
