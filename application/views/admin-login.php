<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Login Admin</title>
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
    </div>
    </nav>
		<!--/navbar-->
    <!--form login-->
    <?php echo form_open('c_auth/loginAdmin');?>
    <div class="col-lg-4 col-lg-offset-4">
      <h1>Login Admin</h1>
      <form class="" action="" method="post">
        <div class="form-group">
          <label for="id">Username</label>
          <input class="form-control" type="text" name="username" value="">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input class="form-control" type="password" name="password" value="">
        </div>
        <div>
          <button class="btn" name="login">Login</button>
        </div>
      </form>
      <?php echo form_close();?>
      <!--/form login-->
    </div>
  </body>
</html>
