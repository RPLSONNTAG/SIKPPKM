<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>User - Profile</title>
		<link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/master.css" rel="stylesheet">
		<script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
		<script src="<?php echo base_url() ?>assets/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
    <!--navbar-->
		<nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header"><a href="<?php echo site_url('c_auth/uHome') ?>" class="navbar-brand navbar-link">SIKPPKM</a>
        <button data-toggle="collapse" data-target="#navcol-1" class="navbar-toggle collapsed"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      </div>
      <div class="collapse navbar-collapse" id="navcol-1">
				<ul class="nav navbar-nav">
					<li><a href="<?php echo site_url('c_ManageProject/berjalan') ?>">Project Berjalan</a></li>
					<li><a href="<?php echo site_url('c_ManageProject/projectSelesai') ?>">Project Selesai</a></li>
					<!--Usulan dan beri usulan untuk yg sudah login-->
					<li><a href="<?php echo site_url('c_usulan/viewUsulan') ?>">Usulan</a></li>
					<li><a href="<?php echo site_url('c_usulan/viewAdd') ?>">Beri Usulan</a></li>
					<!---->
				</ul>
        <?php $name = $this->session->userdata('user'); if($name) { ?>
        <ul class="nav navbar-nav navbar-right">
          <!-- logout kalau ada session -->
          <li><a href="<?php echo site_url('c_auth/logout') ?>">Logout</a></li>
        </ul>
        <?php } else { ?>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Login/Register</a></li>
        </ul>
        <?php }; ?>
      </div>
    </div>
    </nav>
		<!--/navbar-->
    <!--profile user-->
	  <div class="container">
	    <div class="" align="center">
	      <h2>Biodata User</h2>
	    </div>
      <div class="row">
        <div class="col-md-3">
          <!-- foto -->
          <!-- contoh -->
          <img src="<?php echo base_url() ?>assets/img/carousel (2).jpg" alt="Project2" style="width: 260px; height: 260px;">
        </div>
        <div class="col-sm-9">
          <!-- data user - database -->
          <?php $no=1; foreach ($user as $row) { ?>
          
          <h3><?php echo $row->username ?></h3>
          <p><span class="glyphicon glyphicon-globe"></span> <?php echo $row->NIK ?></p>
          <p><span class="glyphicon glyphicon-envelope"></span> <?php echo $row->email ?></p>
          <p><span class="glyphicon glyphicon-earphone"></span> <?php echo $row->noTelp ?></p>
          <?php } ?>
          <!-- ganti Password -->
          <a href="<?php echo site_url('c_auth/viewGPassword') ?>" class="btn btn-default">Ganti Password</a>
          <!-- ganti Password -->
          <!-- data user - database -->
        </div>
      </div>
	  </div>
  <!--/profile user-->
  </body>
</html>
