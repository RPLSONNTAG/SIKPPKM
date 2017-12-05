<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Usr - Halaman Project</title>
		<link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
		<script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
		<script src="<?php echo base_url() ?>assets/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>

  <!---Halaman Project User-->
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
	<div class="container">
    <div align="left">
			<a href="uploadfoto" class="btn btn-default">Upload Foto Progress </a>
    </div>
		  <h1> Judul Project</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <div class="" align="left">
      <!-- kumpulan foto progress -->
      <!--slideshow-->
  		<div class="carousel slide" data-ride="carousel" id="HighlightProject">
  			<ol class="carousel-indicator" style="list-style: none;">
  				<!--jumlah gambar berdasarkan project-->
  				<li data-target="#HighlightProject" data-slide-to="0" class="active"></li>
  				<li data-target="#HighlightProject" data-slide-to="1"></li>
  				<li data-target="#HighlightProject" data-slide-to="2"></li>
  			</ol>
  			<!--source gambar slideshow-->
  			<div class="carousel-inner">
          <!-- perulangan gambar disini -->
  				<div class="item active" align="center">
  					<img src="<?php echo base_url() ?>assets/img/carousel (1).jpg" alt="Project1" style="height: 400px; width: auto;">
  				</div>
  				<div class="item" align="center">
  					<img src="<?php echo base_url() ?>assets/img/carousel (2).jpg" alt="Project2" style="height: 400px; width: auto;">
  				</div>
  				<div class="item" align="center">
  					<img src="<?php echo base_url() ?>assets/img/carousel (3).jpg" alt="Project3" style="height: 400px; width: auto;">
  				</div>
  			</div>
  			<a class="left carousel-control" href="#HighlightProject" data-slide="prev">
  				<span class="glyphicon glyphicon-chevron-left"></span>
  				<span class="sr-only">Previous</span>
  			</a>
  			<a class="right carousel-control" href="#HighlightProject" data-slide="next">
  				<span class="glyphicon glyphicon-chevron-right"></span>
  				<span class="sr-only">Next</span>
  			</a>
  		</div>
  		<!--/slideshow-->
      <!-- /kumpulan foto progress -->
    </div>
	  <div class="" align="left">
      <!-- upvote untuk project berjalan/ vote kepuasan untuk yg sudah selesai -->
			<a href="" class="btn btn-default">Upvote</a>
      <!-- <a href="" class="btn btn-default">Satisfied</a> -->
      <!-- upvote untuk project berjalan/ vote kepuasan untuk yg sudah selesai -->
    </div>
    <!-- form komentar -->
    <form class="" action="" method="post">
      <div class="form-group">
        <label for="komentas">Komentar</label>
        <textarea class="form-control" name="isi" rows="3"></textarea>
      </div>
      <div align="left">
        <button class="btn" name="komentar">Kirim Komentar</button>
      </div>
    </form>
    <!-- /form Komentar -->
    <!-- perulangan Komentar -->
    <div class="komentar" style="border-style: solid;border-width: thin;border-color: #cccccc;border-radius: 3px;padding: 3px; margin-top: 10px;">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <p>User pengirim komentar</p>
    </div>
    <!-- /perulangan Komentar -->
    <!--/Halaman Project User-->
    </div>
  </body>
</html>
