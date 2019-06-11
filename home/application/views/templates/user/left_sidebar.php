<section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="<?= base_url('assets/images/user_images/').$user['foto_user'];?>" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= $user['nama_user']; ?></div>
                    <div class="email"><?= $user['email_user']; ?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="<?= base_url('user/profile'); ?>"><i class="material-icons">person</i>Profile</a></li>
                            <li><a href="<?= base_url('user/change_password'); ?>"><i class="material-icons">lock</i>Update Password</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="" data-toggle="modal" data-target="#logoutModal"><i class="material-icons">input</i>Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <?php if($this->session->userdata('role_id') == '1') { ?>
            <div class="menu">
                <ul class="list">
                    <li class="header">Menu Utama</li>
                    <li>
                        <a href="<?= base_url('user'); ?>">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('user/list_maskapai'); ?>">
                             <i class="material-icons">flight_takeoff</i>
                            <span>List Maskapai</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('user/list_tiket'); ?>">
                            <i class="material-icons fas fa-ticket-alt"></i>
                            <span>List Tiket</span>
                        </a>
                    </li>
                    <li class="header">Transaksi</li>
                    <li>
                        <a href="<?= base_url('user/transaksi'); ?>">
                            <i class="material-icons">attach_money</i>
                            <span>Riwayat Transaksi</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('user/pemesanan_tiket'); ?>">
                        <i class="material-icons">library_books</i>
                            <span>Pemesanan Tiket</span>
                        </a>
                    </li>
                     <li class="header">Accounts</li>
                      <li>
                        <a href="<?= base_url('user/member_list'); ?>">
                        <i class="material-icons fas fa-users"></i>
                            <span>Member List</span>
                        </a>
                    </li>
                     <li>
                        <a href="<?= base_url('user/admin_list'); ?>">
                        <i class="material-icons fas fa-user-secret"></i>
                            <span>Administrator List</span>
                        </a>
                    </li>
                     <li class="header">Menu</li>
                     <li>
                        <a href="<?= base_url('user/list_artikel'); ?>">
                        <i class="material-icons">book</i>
                            <span>Article</span>
                        </a>
                    </li>
                    <li>
                        <a href="" data-toggle="modal" data-target="#logoutModal">
                        <i class="material-icons">input</i>
                            <span>Logout</span>
                        </a>
                    </li>

                </ul>

            </div>
        <?php }else{

            ?>

             <div class="menu">
                <ul class="list">
                    <li class="header">Menu Utama</li>
                    <li>
                        <a href="<?= base_url('user'); ?>">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('user/tiket_user'); ?>">
                            <i class="fas fa-ticket-alt material-icons"></i>
                            <span>Tiket</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('user/transaksi_user'); ?>">
                        <i class="material-icons">shopping_cart</i>
                            <span>Riwayat Belanja</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('user/testimoni'); ?>">
                            <i class="fas fa-sticky-note material-icons"></i>
                            <span>Ulasan</span>
                        </a>
                    </li>

                    <li>
                        <a href="<?= base_url('Id/tiket/'); ?>">

                            <i class="fas fa-ticket-alt material-icons"></i>

                            <span>Pesan Tiket</span>
                        </a>
                    </li>
                    <li>
                        <a href="" data-toggle="modal" data-target="#logoutModal">
                        <i class="material-icons">input</i>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul></div>
    <?php
        }  ?>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2018 - <?= date('Y'); ?> <a href="javascript:void(0);">Travel Agency</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.5
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->

    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Are You Sure?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">By Clicking "Logout" will remove your current session data</div>
        <div class="modal-footer">
          <a class="btn btn-primary" href="<?= base_url('user/logout'); ?>" >Logout</a>
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>
