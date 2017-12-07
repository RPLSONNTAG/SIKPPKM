<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User - Project Berjalan</title>
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
    <!-- list project berjalan -->
   <div class="container">
     <div class="" align="center">
       <h2>Daftar Project Berlangsung</h2>
     </div>
     <!-- perulangan disini -->
     <?php $no=1; foreach ($blm as $row){ ?>
     <div class="usulan" style="border-style: solid;border-width: thin;border-color: #cccccc;border-radius: 3px; padding-top: 10px;margin-top: 10px;">
       <div class="container">
         <div class="col-sm-10">
           <!-- info sekilas aja -->
           <a href="<?php echo site_url('c_ManageProject/halamanProject/'.$row->ID_Project) ?>">
             <p><?php echo $row->judul ?></p>
             <p><?php echo $row->isi ?></p>
           </a>
         </div>
         <div class="col-md-1" style="padding-top: 40px; padding-left:0px;">
           <!-- upvote -->
           <a href="<?php echo site_url('c_ManageProject/votePriority/'.$row->ID_Project) ?>" class="btn btn-default"><span class="glyphicon glyphicon-arrow-up"></span> Upvote</a>
         </div>
       </div>
     </div>
     <?php }; ?>
     <!-- /perulangan disini -->
   </div>
   <!-- list project berjalan -->

  </body>
</html>
