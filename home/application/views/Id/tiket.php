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
    <div class="breadcrumbs1"><a href="<?= base_url('Id/') ?>">Home</a><span>/</span>Tiket</div>
  </div>
</div>


<div id="content">
  <div class="container">

    <div class="tabs_wrapper tabs1_wrapper">
      <div class="tabs tabs2">
        <div class="tabs_tabs tabs1_tabs">

            <ul>
              <li class="active flights"><a href="#tabs-1">Flights</a></li>
            </ul>

        </div>
        <div class="tabs_content tabs1_content">

            <div id="tabs-1">
              <form action="" class="form1" method = "POST">
                <div class="row">
                  <div class="col-sm-4 col-md-2">
                    <div class="input1_wrapper">
                      <label>Dari:</label>
                      <div class="input2_inner">
                        <input type="text" class="input" value="Jakarta" name="tiket_berangkat" autocomplete="off">
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
                      <button type="submit" class="btn-default btn-form1-submit" name="search">Search</button>
                    </div>
                  </div>
                </div>
              </form>
              <div class="row">
                <div class="col-sm-3">

                  <ul class="ul3">
                    <li><a href="<?= base_url('Id/artikel'); ?>">Article</a></li>
                    <li><a href="<?= base_url('Id/about'); ?>">About Us</a></li>
                    <li><a href="<?= base_url('Id/contact'); ?>">Contact Us</a></li>
                  </ul>

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


                </div>
                <div class="col-sm-9">

                  <form action="" class="form3 clearfix">
                    <div class="select1_wrapper txt">
                      <label>Search Tiket:</label>
                    </div>
                    <div class="select1_wrapper sel" style="width:50%">
                     <div class="input1_wrapper">
                      <div class="input2_inner">
                        <input type="text" class="input" name="tiket_tujuan" autocomplete="off" id="search">
                      </div>
                    </div>
                  </div>

                  </form>

                  <div class="row" id="container">
                    <?php if($this->input->post('tiket_berangkat')){
                          if(count($all_tiket) > 0) {
                        echo 'items found : '.count($all_tiket);

                        }else{
                          echo 'Sorry . No items found :( ';
                        }

                        }
                    ?><br><br>
                    <?php
                    if(count($all_tiket) > 0)
                    {


                    foreach($all_tiket as $at):

                    ?>
                    <div class="col-sm-4">

                      <div class="thumb4">
                        <div class="thumbnail clearfix">
                          <div class="popular">
                          <div class="popular_inner">
                          <figure>
                            <img src="<?= base_url('assets/images/').$at['gambar_maskapai']; ?>" class="img-responsive">
                             <div class="over">
                                <div class="v1"><?= $at['maskapai']; ?><br><span><?= $at['kelas']; ?></span></div>

                              </div>
                          </figure>
                          <div class="caption">
                            <div class="txt1"><?= $at['maskapai']; ?></div>
                            <div class="txt2"><?= $at['tiket_berangkat']. ' - ' . $at['tiket_tujuan']; ?></div><br>
                            <div class="txt3"><?= $at['tanggal_berangkat'] ?></div><br>
                            <div class="txt3 clearfix">
                              <div class="left_side">
                                <div class="price"><?= rupiah($at['harga_tiket']);  ?></div>
                                <div class="nums">avg/person</div>
                              </div>
                              <div class="right_side"><a href="<?= base_url('Id/detail_tiket/').$at['id_tiket']; ?>" class="btn-default btn1">Details</a></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                      </div>
                    </div>

                  <?php endforeach; }?>

                  </div>

                  <div class="pager_wrapper">
                    <ul class="pager clearfix">

                      <?php if(!$this->input->post('tiket_berangkat')): ?>
                      <?= $pagination; ?>
                    <?php endif; ?>
                    </ul>
                  </div>


                </div>
              </div>
            </div>




        </div>
      </div>
    </div>








  </div>
</div>
