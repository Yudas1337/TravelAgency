<?php 
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
            <li class="sub-menu sub-menu-1 active"><a href="<?= base_url('Id/contact'); ?>">Contact Us</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<img class="page_banner" src = "<?= base_url('images/tiket_header.png'); ?>">
<div class="breadcrumbs1_wrapper">
  <div class="container">
    <div class="breadcrumbs1"><a href="<?= base_url('Id/index') ?>">Home</a><span>/</span>Contact</div>
  </div>
</div>


<div id="content">
  <div class="container">

    <div class="row">
      <div class="col-sm-6">

        <h3>Hubungi Kami</h3>

        <p>
          Tanyakan Informasi Travelling hanya di website kami . Jangan sampai kamu melewatkan informasi penting tentang Travelling ! Kamu bisa menanyakannya Via email , maupun Sosial Media kami . 
        </p>

        <h4>PHONE</h4>

        <p>
          081 359 158 535
        </p>

        <div class="social3_wrapper">
          <ul class="social3 clearfix">
            <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
          </ul>
        </div>


      </div>
      <div class="col-sm-6">

        <h3>CONTACT FORM</h3>
        <p>
         <?= $this->session->flashdata('flash'); ?>
        </p>

        <div id="note"></div>
        <div id="fields">
          <form id="ajax-contact-form" class="form-horizontal" action="" method="POST">

            <div class="form-group">
               <label for="inputName">Nama</label>
               <small class = "form-text text-danger"><?= form_error('nama'); ?></small>
                <input type="text" class="form-control" name="nama" placeholder="Full Name" autocomplete="off">
            </div>

            <div class="form-group">
                <label for="inputEmail">Email</label>
                <small class = "form-text text-danger"><?= form_error('email'); ?></small>
                <input type="text" class="form-control" name="email" placeholder="E-mail address" autocomplete="off">
            </div>


            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                    <label for="inputMessage">Your Message</label>
                    <small class = "form-text text-danger"><?= form_error('pesan'); ?></small>
                    <textarea class="form-control" rows="7" name="pesan" autocomplete="off" placeholder="Message"></textarea>
                </div>
              </div>
            </div>
            <button type="submit" class="btn-default btn-cf-submit">send message</button>
          </form>
        </div>


      </div>
    </div>

  </div>
</div>
