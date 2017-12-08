<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Home</title>
		<link href="<?php echo base_url() ?>assets/css/bootstrap.css" rel="stylesheet">
		<link href="<?php echo base_url() ?>/css/master.css" rel="stylesheet" >
		<script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
		<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
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
		<!--slideshow-->
		<div class="carousel slide" data-ride="carousel" id="HighlightProject">
			<ol class="carousel-indicator" style="list-style: none;">
				<!--jumlah gambar 3-->
				<li data-target="#HighlightProject" data-slide-to="0" class="active"></li>
				<li data-target="#HighlightProject" data-slide-to="1"></li>
				<li data-target="#HighlightProject" data-slide-to="2"></li>
			</ol>
			<!--source gambar slideshow-->
			<div class="carousel-inner">
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
		<div class="container">
			<div class="col-sm-6">
				<div class="" align="center">
					<!-- tampilin 5 project aja -->
					<h3>Project Berjalan</h3>
				</div>
				<!-- perulangan disini -->
				<?php foreach ($berjalan as $row){ ?>
	      <div class="" style="border-style: solid;border-width: thin;border-color: #cccccc;border-radius: 3px; padding: 10px;margin-top: 10px;">
	        <!-- info sekilas aja -->
	          <a href="#" style="text-decoration: none; color: black;">
	            <p><?php echo $row->judul ?></p>
							<!-- tampilin cuplikan -->
	            <p><?php $isip = substr($row->isi,0,100);echo $isip ?></p>
	          </a>
	      </div>
			<?php }; ?>
	      <!-- /perulangan disini -->
			</div>
			<div class="col-sm-6">
				<div class="" align="center">
					<!-- tampilin 5 project aja -->
					<h3>Project Selesai</h3>
				</div>
				<!-- perulangan disini -->
	      <div class="" style="border-style: solid;border-width: thin;border-color: #cccccc;border-radius: 3px; padding: 10px;margin-top: 10px;">
	        <!-- info sekilas aja -->
	          <a href="#" style="text-decoration: none; color: black;">
	            <p>Judul</p>
							<!-- tampilin cuplikan -->
	            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna....</p>
	          </a>
	      </div>
	      <!-- /perulangan disini -->
			</div>
		</div>
	</body>
</html>
