<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Login User</title>
		<link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
		<script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
		<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
  </head>
  <body>
    <!--navbar-->
		<nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header"><a href="#" class="navbar-brand navbar-link">SIKPPKM</a>
        <button data-toggle="collapse" data-target="#navcol-1" class="navbar-toggle collapsed"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      </div>
      <div class="collapse navbar-collapse" id="navcol-1">
				<ul class="nav navbar-nav">
					<li><a href="#">Project Berjalan</a></li>
					<li><a href="#">Project Selesai</a></li>
					<!--Usulan dan beri usulan untuk yg sudah login-->
					<?php $name = $this->session->userdata('user'); if($name) { ?>
          <li><a href="#">Usulan</a></li>
					<li><a href="#">Beri Usulan</a></li>
					<!---->
				</ul>
        <?php }; ?>
        <ul class="nav navbar-nav navbar-right">
          <!-- logout kalau ada session -->
          <li><a href="#">Login/Register</a></li>
        </ul>
      </div>
    </div>
    </nav>
		<!--/navbar-->
    <!--form login-->
    <?php echo form_open('c_auth/loginUser') ?>
    <div class="col-lg-4 col-lg-offset-4">
      <h1>Login</h1>
      <form class="" action="" method="post">
        <div class="form-group">
          <label for="id">Username</label>
          <input class="form-control" type="text" name="username" value="" required>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input class="form-control" type="password" name="password" value="" required>
        </div>
		    <div>
		        <button class="btn" name="login">Login</button>
        </div>
      </form>
      <div class="" style="margin-top: 10px;">
        <p>Belum daftar? <a href="<?php echo site_url('c_auth/regUser') ?>">Daftar sekarang</a></p>
      </div>
    <?php echo form_close() ?>
      <!--/form login-->
    </div>
  </body>
</html>
