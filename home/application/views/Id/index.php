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
              <li class="sub-menu sub-menu-1 active"><a href="<?= base_url('Id/index'); ?>">Home</a>
                  
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

<div id="slider_wrapper">
  <div class="container">
    <div id="slider_inner">
      <div class="">
        <div id="slider">

          <div class="">
            <div class="carousel-box">
              <div class="inner">
                <div class="carousel main">
                  <ul>
                    <li>
                      <div class="slider">
                        <div class="slider_inner">
                          <div class="txt1"><span>Welcome To </span></div>
                          <div class="txt2"><span>TRAVEL AGENCY</span></div>
                          
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="slider">
                        <div class="slider_inner">
                          <div class="txt2"><span>Travel Agency</span></div>
                          <div class="txt1"><span>Dapatkan tiket pesawat terlengkap dan terupdate hanya di Travel Agency </span></div>
                          
                        </div>
                      </div>
                    </li>
                   
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="slider_pagination"></div>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="front_tabs">
  <div class="container">
    <div class="tabs_wrapper tabs1_wrapper">
      <div class="tabs tabs1">
        <div class="tabs_tabs tabs1_tabs">

            <ul>
              <li class="flights"><a href="#tabs-1">Flights</a></li>
            </ul>

        </div>
        <div class="tabs_content tabs1_content">

            <div id="tabs-1">
              <form action="<?= base_url('Id/tiket'); ?>" class="form1" method = "POST">
                <div class="row">
                  <div class="col-sm-4 col-md-2">
                    <div class="input1_wrapper">
                      <label>Dari:</label>
                      <div class="input2_inner">
                        <input type="text" class="input" value="Jakarta" name="tiket_berangkat">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4 col-md-2">
                     <div class="input1_wrapper">
                      <label>Ke:</label>
                      <div class="input2_inner">
                        <input type="text" class="input" value="Surabaya" name="tiket_tujuan" autocomplete="off">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4 col-md-2">
                    <div class="input1_wrapper">
                      <label>Tanggal:</label>
                      <div class="input1_inner">
                        <input type="text" class="input datepicker" name="tanggal_berangkat" autocomplete="off">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-2">
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
                  
                  <div class="col-sm-6 col-md-1">
                    <div class="select1_wrapper">
                      <label>Penumpang:</label>
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
                  </div>
                  <div class="col-sm-4 col-md-2">
                    <div class="button1_wrapper">
                      <button type="submit" class="btn-default btn-form1-submit">Search</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            
            
        </div>
      </div>
    </div>
  </div>
</div>

<div id="why1">
  <div class="container">

    <h2 class="animated" data-animation="fadeInUp" data-animation-delay="100">Mengapa Travel Agency ??</h2>

    <br><br>

    <div class="row">
      <div class="col-sm-3">
        <div class="thumb2 animated" data-animation="flipInY" data-animation-delay="200">
          <div class="thumbnail clearfix">
            <a href="#">
              <figure class="">
                <img src="<?= base_url()?>images/why1.png" alt="" class="img1 img-responsive">
                <img src="<?= base_url()?>images/why1_hover.png" alt="" class="img2 img-responsive">
              </figure>
              <div class="caption">
                <div class="txt1">Informasi Lengkap</div>
                <div class="txt2">Travel Agency berisi Informasi Tiket Online Pesawat yang lengkap dan Up to date</div>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="thumb2 animated" data-animation="flipInY" data-animation-delay="300">
          <div class="thumbnail clearfix">
            <a href="#">
              <figure class="">
                <img src="<?= base_url()?>images/why2.png" alt="" class="img1 img-responsive">
                <img src="<?= base_url()?>images/why2_hover.png" alt="" class="img2 img-responsive">
              </figure>
              <div class="caption">
                <div class="txt1">Aman Terpercaya</div>
                <div class="txt2">Travel Agency menjamin keamanan privasi data pengguna serta terpercaya 100%</div>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="thumb2 animated" data-animation="flipInY" data-animation-delay="400">
          <div class="thumbnail clearfix">
            <a href="#">
              <figure class="">
                <img src="<?= base_url()?>images/why3.png" alt="" class="img1 img-responsive">
                <img src="<?= base_url()?>images/why3_hover.png" alt="" class="img2 img-responsive">
              </figure>
              <div class="caption">
                <div class="txt1">Professional</div>
                <div class="txt2">Travel Agency melayani pemesanan Travelling dengan Profesional dan memuaskan</div>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="thumb2 animated" data-animation="flipInY" data-animation-delay="500">
          <div class="thumbnail clearfix">
            <a href="#">
              <figure class="">
                <img src="<?= base_url()?>images/why4.png" alt="" class="img1 img-responsive">
                <img src="<?= base_url()?>images/why4_hover.png" alt="" class="img2 img-responsive">
              </figure>
              <div class="caption">
                <div class="txt1">Respon Cepat</div>
                <div class="txt2">Travel Agency merespon pemesanan anda dengan secepat mungkin</div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="parallax1" class="parallax">
  <div class="bg1 parallax-bg"></div>
  <div class="overlay"></div>
  <div class="parallax-content">
    <div class="container">

      <div class="row">
        <div class="col-sm-10 animated" data-animation="fadeInLeft" data-animation-delay="100">
          <div class="txt1">Daftar Sebagai Member Travel Agency</div>
          <div class="txt2">Daftar Sekarang juga sebagai member travel agency untuk mempermudah transaksi tiket</div>
          
        </div>
        <div class="col-sm-2 animated" data-animation="fadeInRight" data-animation-delay="200">
          <a href="<?= base_url('auth/register'); ?>" class="btn-default btn0">Daftar Sekarang</a>
        </div>
      </div>

    </div>
  </div>
</div>

<div id="popular_cruises1">
  <div class="container">

    <h2 class="animated" data-animation="fadeInUp" data-animation-delay="100">Tiket Terbaru</h2>

    <br><br>
    <div id="popular_wrapper" class="animated" data-animation="fadeIn" data-animation-delay="300">
      <div id="popular_inner">
        <div class="">
          <div id="popular">
            <div class="">
              <div class="carousel-box">
                <div class="inner">
                  <div class="carousel main">
                    <ul>
                      <?php foreach ($tiket as $t ) : ?>
                      <li>
                        <div class="popular">
                          <div class="popular_inner">
                            <figure>
                              <img src="<?= base_url('assets/images/').$t['gambar_maskapai'];?>"  height = "100px" class="img-responsive">
                              <div class="over">
                                <div class="v1"><?= $t['maskapai']; ?><span><?= $t['kelas']; ?></span></div>
                                <div class="v2"><?= $t['tanggal_berangkat'] .' , '. $t['tiket_berangkat']. ' - '. $t['tiket_tujuan']; ?></div>
                              </div>
                            </figure>
                            <div class="caption">
                              <div class="txt1"><span><?= $t['maskapai']; ?></span><?= rupiah($t['harga_tiket']); ?></div>
                              <div class="txt2"><?= $t['tanggal_berangkat'] .'<br><br>'. $t['tiket_berangkat']. ' - '. $t['tiket_tujuan'].'<br><br>'.$t['kelas']; ?></div>
                              <div class="txt3 clearfix">
                                
                                <div class="right_side"><a href="<?= base_url('Id/detail_tiket/').$t['id_tiket']; ?>" class="btn-default btn1">Detail</a></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                    
                     <?php endforeach; ?>

                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="popular_pagination"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<h2 class="animated" data-animation="fadeInLeft" data-animation-delay="100">What our client say?</h2><br>
<div class="sm_slider sm_slider1">
                    <a class="sm_slider_prev" href="#"></a>
                    <a class="sm_slider_next" href="#"></a>
                    <div class="">
                      <div class="carousel-box">
                        <div class="inner">
                          <div class="carousel main">
                            <ul>
                              <?php foreach($client as $c): ?>
                              <li>
                                
                                <div class="sm_slider_inner">
                                  <div class="txt1"><?= $c['testimoni']; ?></div>
                                  <div class="txt2"><?= $c['nama_user']; ?></div>
                                </div>
                              </li>
                               <?php endforeach; ?>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

<div id="partners">
  <h2 class="animated" data-animation="fadeInUp" data-animation-delay="100">Partner Maskapai</h2><br>
  <center>
  <font class="animated" data-animation="fadeInUp" data-animation-delay="100">Dengan berbagai maskapai mitra, kami siap menerbangkan Anda ke mana pun.</font></center>

    <br><br>
  <div class="container">
    <div class="row">
      <?php foreach($maskapai as $m): ?>
      <div class="col-sm-4 col-md-2 col-xs-6">
        <div class="thumb1 animated" data-animation="flipInX" data-animation-delay="100">
         
          <div class="thumbnail clearfix">
            
           <img src="<?= base_url('assets/images/').$m['gambar_maskapai']; ?>" width = "150px" class="img1 img-responsive">
         
          </div>
          
        </div>
      </div>
       <?php endforeach; ?>
   
    </div>
  </div>
</div>
