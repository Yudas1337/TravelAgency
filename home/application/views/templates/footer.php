<div class="bot1_wrapper">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <div class="logo2_wrapper">
          <a href="<?= base_url('Id/index'); ?>" class="logo2">
            <img src="<?= base_url()?>images/logo2.png" alt="" class="img-responsive">
          </a>
        </div>
        <p>
          Travel Agency adalah sebuah Website yang menjual berbagai tiket online pesawat untuk berwisata ke seluruh dunia . Bagi traveller , Travel Agency memberi Banyak manfaat yang bisa di ambil, membuat liburan kamu jadi tidak membosankan! . Dengan ini maka Travel Agency siap Mengantarkan anda semua kemanapun destinasi yang diinginkan diseluruh dunia... CARINYA CEPAT TRAVELLING JADI MUDAH.. 
        </p>
    
      </div>
      <div class="col-sm-3">
        <div class="bot1_title">Links</div>
        <ul class="ul1">
          <li><a href="<?= base_url('Id/tiket'); ?>">Tiket</a></li>
          <li><a href="<?= base_url('Id/artikel'); ?>">Artikel</a></li>
          <li><a href="<?= base_url('Id/about'); ?>">About Us</a></li>
          <li><a href="<?= base_url('Id/contact'); ?>">Contact Us</a></li>
        </ul>

        <div class="social2_wrapper">
          <ul class="social2 clearfix">
            <li class="nav1"><a href="https://www.facebook.com/ydsh4xor"></a></li>
            <li class="nav2"><a href="#"></a></li>
            <li class="nav3"><a href="#"></a></li>
            <li class="nav5"><a href="#"></a></li>
            <li class="nav6"><a href="https://www.youtube.com/channel/UCOLrvOtKcWngGTMrUwhzrFA"></a></li>
          </ul>
        </div>

      </div>
      
      <div class="col-sm-3">
        <div class="bot1_title">Subscribe Newsletter</div>
        <div class="newsletter_block">
          <div class="txt1">Subscribe untuk update bersama kami</div>
          <div class="newsletter-wrapper clearfix">
          <form class="newsletter" method = "POST" action="<?= base_url('Id/index'); ?>">
             <small class = "form-text text-danger"><?= form_error('email'); ?></small>
            <input type="text" name="email" placeholder="Email Adress" autocomplete="off">
            <button class="btn-default btn3">SUBMIT</button>
          </form>
        </div>
        </div>
        <div class="phone2">081-359-158-535</div>
      </div>
    </div>
  </div>
</div>

<div class="bot2_wrapper">
  <div class="container">
    <div class="left_side">
      Copyright © 2019 <strong>Travel Agency</strong> <span>|</span> <a href="<?= base_url('Id/about'); ?>">About Us</a> <span>|</span><a href="<?= base_url('Id/contact'); ?>">Contact Support</a>
            </div>
            <div class="right_side">Designed by <strong>Yudas Malabi</strong></div>
  </div>
</div>

</div>
<script src="<?= base_url()?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?= base_url('assets/')?>js/ajax_search.js"></script>
</body>
</html>