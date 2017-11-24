<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Admin - Input Project</title>
		<link href="<?php echo base_url() ?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/master.css" rel="stylesheet">
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
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Logout</a></li>
      </ul>
    </div>
    </nav>
		<!--/navbar-->
    <div class="container">
      <div class="" align="center">
        <h2>Input Project</h2>
      </div>
      <div class="row">
        <!--side menu-->
        <div class="col-md-3">
          <!--collapsible admin-->
          <div class="panel-group">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" href="#collapse1">Admin</a>
                </h4>
              </div>
              <div id="collapse1" class="panel-collapse collapse">
                <ul class="list-group">
                  <li class="list-group-item"><a href="f1_admin">List Admin</a></li>
                  <li class="list-group-item"><a href="f2_admin">Input Admin</a></li>
                </ul>
              </div>
            </div>
          </div>
          <!--/collapsible admin-->
          <!--collapsible project-->
          <div class="panel-group">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" href="#collapse2">Project</a>
                </h4>
              </div>
              <div id="collapse2" class="panel-collapse collapse">
                <ul class="list-group">
                  <li class="list-group-item"><a href="f3_admin">List Project</a></li>
                  <li class="list-group-item"><a href="f4_admin">Input Project</a></li>
                  <li class="list-group-item"><a href="f5_admin">List Prioritas Project</a></li>
                  <li class="list-group-item"><a href="f6_admin">List Kepuasan Project</a></li>
                  <li class="list-group-item"><a href="f7_admin">List Report Project</a></li>
                  <li class="list-group-item"><a href="f8_admin">List Usulan</a></li>
                </ul>
              </div>
            </div>
          </div>
          <!--/collapsible project-->
          <!--collapsible user-->
          <div class="panel-group">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" href="#collapse3">User</a>
                </h4>
              </div>
              <div id="collapse3" class="panel-collapse collapse">
                <ul class="list-group">
                  <li class="list-group-item"><a href="f9_admin">List Kependudukan</a></li>
                  <li class="list-group-item"><a href="f10_admin">Input Kependudukan</a></li>
                </ul>
              </div>
            </div>
          </div>
          <!--/collapsible user-->
        </div>
        <!--/side menu-->
        <div class="col-sm-9">
        <?php echo form_open('c_ManageProject/addProject'); ?>
          <form class="" action="" method="post">
            <div class="form-group">
              <label for="id">ID Project</label>
              <input class="form-control" type="text" name="id_project" value="" required="required">
            </div>
            <div class="form-group">
              <label for="judul">Judul</label>
              <input class="form-control" type="text" name="judul" value="" required="required">
            </div>
            <div class="form-group">
              <label for="isi">Isi</label>
              <textarea class="form-control" name="isi" rows="8" cols="80" required="required"></textarea>
            </div>
            <div align="right">
              <button class="btn" name="submit">Submit</button>
            </div>
          </form>
        <?php form_close(); ?>
        </div>
      </div>
    </div>
  </body>
</html>
