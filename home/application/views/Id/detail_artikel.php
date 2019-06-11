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

<img class="page_banner" src = "<?= base_url('images/tiket_header.png'); ?>">

<div class="breadcrumbs1_wrapper">
  <div class="container">
    <div class="breadcrumbs1"><a href="index.html">Home</a><span>/</span>Post</div>
  </div>
</div>


<div id="content">
  <div class="container">

    <div class="row">
      <div class="col-sm-9">
        <div class="blog_content">


          <div class="post post-full">

            <div class="post-story">
              <img src="<?= base_url('assets/images/artikel/').$getartikel['foto']; ?>" width = "850px" height = "450px">
              <h2><?= $getartikel['judul']; ?></h2>

              <div class="post-story-info">
                <div class="date1"><?= $getartikel['tanggal']; ?></div>
                <div class="by">Posted by <a href="#"><?= $getartikel['username']; ?></a></div>
              </div>

              <div class="post-story-body clearfix">

                <p>
                 <?= $getartikel['artikel']; ?>
                </p>


              </div>
              <div class="post-story-tags clearfix">

                <div class="tags_wrapper"><b>Tags</b>: <a href="#">Travel</a>, <a href="#">Flights</a>, <a href="#">Early Booking</a>, <a href="#">Cruises</a> </div>

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





















        </div>
      </div>
      <div class="col-sm-3">
        <div class="blog_sidebar">

          <div class="search-form-wrapper clearfix">
            <form class="clearfix" method="POST" action="<?= base_url('Id/artikel'); ?>">
              <input type="text" class="form-control" placeholder="Search.." name="search" autocomplete="off">
              <a href="#" class=""><i class="fa fa-search"></i></a>
            </form>
          </div>

          <div class="tabs3">
            <div class="tabs3_tabs">
              <ul>
                <li class="active"><a href="#tabs3-1">Popular</a></li>
                <li><a href="#tabs3-2">Recent</a></li>
              </ul>
            </div>
            <div class="tabs3_content">
              <div id="tabs3-1">

               <div class="news1">
                  <?php foreach($random_artikel as $aa): ?>
                  <a href="<?= base_url('Id/detail_artikel/').$aa['id_artikel']; ?>">
                    <div class="txt1"><?= $aa['judul']; ?></div>
                    <div class="txt2">Date: <span><?= $aa['tanggal']; ?></span></div>
                  </a>
                <?php endforeach; ?>
                </div>

              </div>
              <div id="tabs3-2">

                  <div class="news1">
                  <?php foreach($random_artikel as $aa): ?>
                  <a href="<?= base_url('Id/detail_artikel/').$aa['id_artikel']; ?>">
                    <div class="txt1"><?= $aa['judul']; ?></div>
                    <div class="txt2">Date: <span><?= $aa['tanggal']; ?></span></div>
                  </a>
                <?php endforeach; ?>
                </div>

              </div>
            </div>
          </div>



        </div>
      </div>
    </div>


  </div>
</div>
