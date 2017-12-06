<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>User - Upload Foto Progress</title>
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
    <!--report progress user-->
	<div class="container">
   <h2>Form Upload Foto Progress User</h2>
   <?php echo form_open_multipart('c_ManageProject/beriReport') ?>
    
		    <div class="form-group">
		  <input class="form-control" type="text" name="id" value="<?php echo $id ?>">
        </div>  
          <input class="form-control" type="file" name="foto_progress" value="">
        </div>
        <div class="">
          <button class="btn btn-default" name="uploadfoto">Upload</button>
        </div>
    
    <?php echo form_close() ?>
      <!--/report progress user-->
  </div>
  </body>
</html>
