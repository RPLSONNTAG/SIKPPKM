<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Ganti Password User</title>
		<link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
		<script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
		<script src="<?php echo base_url() ?>assets/js/bootstrap.bundle.min.js"></script>
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
					<li><a href="#">Usulan</a></li>
					<li><a href="#">Beri Usulan</a></li>
					<!---->
				</ul>
        <ul class="nav navbar-nav navbar-right">
          <!-- logout kalau ada session -->
          <li><a href="#">Logout</a></li>
        </ul>
      </div>
    </div>
    </nav>
		<!--/navbar-->
    <div class="col-lg-4 col-lg-offset-4">
      <h1>Form Ganti Password</h1>
      <!-- form ganti password -->
      <?php echo form_open('c_auth/gantiPassword') ?>
      <form class="" action="" method="post">
		    <div class="form-group">
          <label for="password">Password Lama</label>
          <input class="form-control" type="password" name="password-lama" value="">
        </div>
		    <div class="form-group">
          <label for="password">Password Baru</label>
          <input class="form-control" type="password" name="password-baru1" value="">
        </div>
		    <div class="form-group">
          <label for="password">Ulangi Password Baru</label>
          <input class="form-control" type="password" name="password-baru2" value="">
        </div>
		    <div>
		       <button class="btn" name="gantipassword">Ganti Password</button>
        </div>
      </form>
      <?php echo form_close() ?>
      <!--/form ganti password-->
    </div>
  </body>
</html>
