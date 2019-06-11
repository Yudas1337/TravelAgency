<?php
defined('BASEPATH') OR exit('No direct script access allowed');
function rupiah($angka){

                              $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
                              return $hasil_rupiah;

                                        }


?>


    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
            	<?php if($this->session->userdata('role_id') == '1'){
            	?>

                <h2><?= "Selamat Datang Administrator ".$user['nama_user']." ! ";?></h2>
                <br><br>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">shopping_cart</i>
                        </div>
                        <div class="content">
                            <div class="text">Jumlah Pemesanan</div>
                            <div class="number"><?= count($pemesanan_tiket); ?></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-red hover-expand-effect hover-zoom-effect">
                        <div class="icon">
                            <i class="fas fa-ticket-alt"></i>
                        </div>
                        <div class="content">
                            <div class="text">Jumlah Tiket</div>
                            <div class="number"><?= count($jumlah_tiket); ?></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-green hover-expand-effect hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">flight_takeoff</i>
                        </div>
                        <div class="content">
                            <div class="text">Maskapai</div>
                            <div class="number"><?= count($jumlah_maskapai); ?></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">email</i>
                        </div>
                        <div class="content">
                            <div class="text">Inbox</div>
                            <div class="number"><?= count($inbox); ?></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-red hover-expand-effect hover-zoom-effect">
                        <div class="icon">
                               <i class="material-icons fas fa-user-secret"></i>
                        </div>
                        <div class="content">
                            <div class="text">Administrator</div>
                            <div class="number"><?= count($admin); ?></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect hover-zoom-effect">
                        <div class="icon">
                             <i class="material-icons fas fa-users"></i>
                        </div>
                        <div class="content">
                            <div class="text">MEMBERS</div>
                            <div class="number"><?= count($members); ?></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect hover-zoom-effect">
                        <div class="icon">
                          <i class="material-icons">book</i>
                        </div>
                        <div class="content">
                            <div class="text">Artikel</div>
                            <div class="number"><?= count($artikel); ?></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-green hover-expand-effect hover-zoom-effect">
                        <div class="icon">
                               <i class="material-icons">attach_money</i>
                        </div>
                        <div class="content">
                            <div class="text">Penghasilan</div>
                            <div class="number"><?= $pendapatan ; ?></div>
                        </div>
                    </div>
                </div>

            	<?php }

            		else{
            			?>
            			<h2><?= "Selamat Datang ".$user['nama_user']." ! ";?></h2>
                  <br>

            			<?php

                  if($this->session->flashdata('flash')):
                   echo $this->session->flashdata('flash');
                 endif;

            		}

            	 ?>
            </div>
        </div>
    </section>

    <!-- Jquery Core Js -->
