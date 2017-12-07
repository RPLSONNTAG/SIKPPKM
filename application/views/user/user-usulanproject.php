<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User - List Usulan</title>
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
    <!--form usulan project-->
     <div class="container">
	 <div align="center">
		<h1>Form Usulan Project </h1>
	 </div>
          <?php echo form_open('c_usulan/beriUsulan') ?>
            <div class="form-group">
              <label for="id">Judul Usulan Project</label>
              <input class="form-control" type="text" name="judul" value="">
            </div>
            <div class="form-group">
              <label for="isi">isi</label>
              <textarea class="form-control" name="isi" rows="8" cols="80"></textarea>
            </div>
            <div align="right">
              <button class="btn" name="submit">Kirim Usulan</button>
            </div>
          <?php echo form_close() ?>
        </div>
      <!--/form usulan project-->
    </div>
  </body>
</html>
