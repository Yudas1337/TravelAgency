
<!DOCTYPE html>
<html lang="en">
<head>
<title>Travel Agency</title>
  <link rel="canonical" href="index.html" />

  <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Travel Agency">
    <meta name="keywords" content="Travel Agency">
<link rel="SHORTCUT ICON" href="<?= base_url('favicon.ico'); ?>">

<link href="<?= base_url()?>css/bootstrap.css" rel="stylesheet">
<link href="<?= base_url()?>css/font-awesome.css" rel="stylesheet">
<link href="<?= base_url()?>css/animate.css" rel="stylesheet">
<link href="<?= base_url()?>css/select2.css" rel="stylesheet">
<link href="<?= base_url()?>css/smoothness/jquery-ui-1.10.0.custom.css" rel="stylesheet">
<link href="<?= base_url()?>css/style.css" rel="stylesheet">

<script src="<?= base_url()?>js/jquery.js"></script>
<script src="<?= base_url()?>js/jquery-ui.js"></script>
<script src="<?= base_url()?>js/jquery-migrate-1.2.1.min.js"></script>
<script src="<?= base_url()?>js/jquery.easing.1.3.js"></script>
<script src="<?= base_url()?>js/superfish.js"></script>

<script src="<?= base_url()?>js/select2.js"></script>

<script src="<?= base_url()?>js/jquery.parallax-1.1.3.resize.js"></script>

<script src="<?= base_url()?>js/SmoothScroll.js"></script>

<script src="<?= base_url()?>js/jquery.appear.js"></script>

<script src="<?= base_url()?>js/jquery.caroufredsel.js"></script>
<script src="<?= base_url()?>js/jquery.touchSwipe.min.js"></script>

<script src="<?= base_url()?>js/jquery.ui.totop.js"></script>

<script src="<?= base_url()?>js/script.js"></script>


 <script src="<?= base_url('assets/')?>plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

    <!-- Bootstrap Datepicker Plugin Js -->
    <script src="<?= base_url('assets/')?>plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>

    <script src="<?= base_url('assets/')?>js/pages/forms/basic-form-elements.js"></script>

    <script src="<?= base_url('assets/')?>plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
     <link href="<?= base_url('assets/') ?>plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />

    <!-- Bootstrap DatePicker Css -->
    <link href="<?= base_url('assets/') ?>plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="front">

<div id="main">

<body class="front">

<div id="main">

<div class="top1_wrapper">
  <div class="container">
    <div class="top1 clearfix">
      <div class="email1"><a href="#">support@travelagency.com</a></div>
      <div class="phone1">081-359-158-535</div>
      <div class="social_wrapper">
        <ul class="social clearfix">
          <li><a href="https://www.facebook.com/ydsh4xor"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram"></i></a></li>
          <li><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
        </ul>
      </div>
      <div class="lang1">

        <div class="dropdown">
          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><span class="caret"></span>
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <?php if(!$this->session->userdata('email_user')){ ?>
            <li><a class="ge" href="<?= base_url('auth/'); ?>">Login</a></li>
            <li><a class="ru" href="<?= base_url('auth/register'); ?>">Register</a></li>
          <?php }else{ ?>
           <li><a class="ge" href="<?= base_url('user/') ?>">Dashboard</a></li>
            <li><a class="ru" href="<?= base_url('user/logout'); ?>">Logout</a></li>
          <?php } ?>
          </ul>
        </div>
      </div>

       <div class="lang1">

        <div class="dropdown">
          <button class="btn btn-default dropdown-2" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><span class="caret"></span>
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a class="ge" href="<?= base_url('Id/keranjang'); ?>">Keranjang</a></li>
            <li><a class="ru" href="<?= base_url('Id/checkout'); ?>">Checkout</a></li>
          </ul>
        </div>
      </div>

    </div>
  </div>
</div>
