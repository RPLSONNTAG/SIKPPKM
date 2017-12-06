<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>List Project Yang Sudah Selesai </title>
		<link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/master.css" rel="stylesheet">
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
    <!-- list project berjalan -->
   <div class="container">
     <div class="" align="center">
       <h2>Daftar Project Selesai</h2>
     </div>
     <!-- perulangan disini -->
     <div class="usulan" style="border-style: solid;border-width: thin;border-color: #cccccc;border-radius: 3px; padding-top: 10px;margin-top: 10px;">
       <div class="container">
         <div class="col-sm-10">
           <!-- info sekilas aja -->
           <a href="#">
             <p>Judul</p>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
           </a>
         </div>
         <div class="col-md-1" style="padding-top: 40px; padding-left:0px;">
           <!-- upvote -->
           <a href="#" class="btn btn-default"><span class="glyphicon glyphicon-arrow-up"></span>Satisfied</a>
         </div>
       </div>
     </div>
     <!-- /perulangan disini -->
   </div>
   <!-- list project berjalan -->
    </div>
  </body>
</html>