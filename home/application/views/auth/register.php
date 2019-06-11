<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<link rel="stylesheet" type="text/css" href="<? base_url('assets/') ?>css/stars.css">
  <link href="<?= base_url('assets/') ?>login_css/sb-admin-2.min.css" rel="stylesheet">
<link rel = "stylesheet" href = "<?= base_url('assets/') ?>login_css/register.css">
<link rel="SHORTCUT ICON" href="<?= base_url('favicon.ico'); ?>">
<title>Register</title>
<div class="login">
	<h1>Register Member</h1>
	<?= $this->session->flashdata('message'); ?>
    <form method="post" action = "">
      
      <input type="text" name="nama_user" placeholder="Username" autocomplete="off" value="<?= set_value('nama_user') ?>" />
      <small class = "form-text text-danger"><?= form_error('nama_user'); ?></small>
     
      <input type="text" name="email_user" placeholder="Email" autocomplete="off" value="<?= set_value('email_user') ?>" />
      <small class = "form-text text-danger"><?= form_error('email_user'); ?></small>
   
      <input type="text" name="alamat_user" placeholder="Alamat" autocomplete="off" value="<?= set_value('alamat_user') ?>"/>
      <small class = "form-text text-danger"><?= form_error('alamat_user'); ?></small>

      <input type="text" name="no_telepon" placeholder="No Telepon" autocomplete="off" value="<?= set_value('no_telepon') ?>"/>
      <small class = "form-text text-danger"><?= form_error('no_telepon'); ?></small>

      <select name="gender" required>
          
          <option>-- Gender --</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>

      </select>
        <div class="row">
          <div class="col-lg-6">
            <input type="password" name="password_user" placeholder="Password" autocomplete="off"/>
           <small class = "form-text text-danger"><?= form_error('password_user'); ?></small>
          </div>
          <div class="col-lg-6">
          <input type="password" name="password_repeat" placeholder="Ulangi Password" autocomplete="off" />
          <small class = "form-text text-danger"><?= form_error('password_repeat'); ?></small>

          </div>
        </div>
        
       
        <button type="submit" class="btn btn-primary btn-block btn-large" name = "register">Register</button>
        <br>
        <center><font color="white" size="3">Sudah punya akun ?<a href="<?= base_url('auth/') ?>"> Login sekarang</a></font></center>
    </form>
</div>

<div id="particles-js"></div>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js" charset="utf-8"></script>
    <script type="text/javascript">
      particlesJS("particles-js",

{
  "particles": {
    "number": {
      "value": 50,
      "density": {
        "enable": true,
        "value_area": 800
      }
    },
    "color": {
      "value": "#ffffff"
    },
    "shape": {
      "type": "circle",
      "stroke": {
        "width": 0,
        "color": "#000000"
      },
      "polygon": {
        "nb_sides": 5
      },
      "image": {
        "src": "img/github.svg",
        "width": 100,
        "height": 100
      }
    },
    "opacity": {
      "value": 1,
      "random": false,
      "anim": {
        "enable": false,
        "speed": 1,
        "opacity_min": 0.1,
        "sync": false
      }
    },
    "size": {
      "value": 3,
      "random": true,
      "anim": {
        "enable": false,
        "speed": 40,
        "size_min": 0.1,
        "sync": false
      }
    },
    "line_linked": {
      "enable": true,
      "distance": 150,
      "color": "#ffffff",
      "opacity": 0.2,
      "width": 1
    },
    "move": {
      "enable": true,
      "speed": 3,
      "direction": "none",
      "random": false,
      "straight": false,
      "out_mode": "out",
      "bounce": false,
      "attract": {
        "enable": false,
        "rotateX": 600,
        "rotateY": 1200
      }
    }
  },
  "interactivity": {
    "detect_on": "window",
    "events": {
      "onhover": {
        "enable": true,
        "mode": "repulse"
      },
      "onclick": {
        "enable": false,
        "mode": "push"
      },
      "resize": true
    },
    "modes": {
      "grab": {
        "distance": 200,
        "line_linked": {
          "opacity": 0.2
        }
      },
      "bubble": {
        "distance": 400,
        "size": 40,
        "duration": 2,
        "opacity": 8,
        "speed": 3
      },
      "repulse": {
        "distance": 200,
        "duration": 0.4
      },
      "push": {
        "particles_nb": 4
      },
      "remove": {
        "particles_nb": 2
      }
    }
  },
  "retina_detect": true
}
)

    </script>