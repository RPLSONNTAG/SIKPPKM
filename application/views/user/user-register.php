<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Register</title>
		<link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
		<script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
		<script src="<?php echo base_url() ?>assets/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
    <!--navbar-->
		<nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header"><a href="<?php echo site_url('c_auth') ?>" class="navbar-brand navbar-link">SIKPPKM</a>
        <button data-toggle="collapse" data-target="#navcol-1" class="navbar-toggle collapsed"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      </div>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Login</a></li>
      </ul>
    </div>
    </nav>
		<!--/navbar-->
    <!--form login-->
    <div class="col-lg-4 col-lg-offset-4">
      <h1>Register</h1>
      <?php echo form_open('c_ManageUser/regUser') ?>
        <div class="form-group">
          <label for="id">Username</label>
          <input class="form-control" type="text" name="username" value="" required="required">
        </div>
        <div class="form-group">
          <label for="NIK">NIK</label>
          <input class="form-control" type="text" name="NIK" value="" required="required">
        </div>
		<div class="form-group">
          <label for="Email">E-mail</label>
          <input class="form-control" type="text" name="email" value="" required="required">
        </div>
		<div class="form-group">
          <label for="notlp">No Tlp</label>
          <input class="form-control" type="text" name="noTelp" value="" required="required">
        </div>
		<div class="form-group">
          <label for="password">Password</label>
          <input class="form-control" type="password" name="password" value="" required="required">
        </div>
		<div>

		  <button class="btn" name="daftar">Daftar</button>
        </div>

      <?php echo form_close()?>
      <!--/form login-->
    </div>
  </body>
</html>
