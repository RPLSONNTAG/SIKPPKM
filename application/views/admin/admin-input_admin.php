<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Home</title>
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/master.css" rel="stylesheet">
    <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
    <!--navbar-->
    <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header"><a href="<?php echo site_url('c_auth/home') ?>" class="navbar-brand navbar-link">SIKPPKM</a>
        <button data-toggle="collapse" data-target="#navcol-1" class="navbar-toggle collapsed"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      </div>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo site_url('c_auth/logout') ?>">Logout</a></li>
      </ul>
    </div>
    </nav>
    <!--/navbar-->
    <div class="container">
      <div class="" align="center">
        <h2>Home Admin</h2>
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
                  <li class="list-group-item"><a href="<?php echo site_url('c_ManageUser') ?>">List Admin</a></li>
                  <li class="list-group-item"><a href="<?php echo site_url('c_ManageUser/viewAddAdmin') ?>">Input Admin</a></li>
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
                  <li class="list-group-item"><a href="<?php echo site_url('c_ManageProject') ?>">List Project</a></li>
                  <li class="list-group-item"><a href="<?php echo site_url('c_ManageProject/viewAddProject') ?>">Input Project</a></li>
                  <li class="list-group-item"><a href="<?php echo site_url('c_ManageProject/viewPriority') ?>" >List Prioritas Project</a></li>
                  <li class="list-group-item"><a href="<?php echo site_url('c_ManageProject/viewSatisfaction') ?>">List Kepuasan Project</a></li>
                  <li class="list-group-item"><a href="<?php echo site_url('c_ManageProject/viewReport') ?>">List Report Project</a></li>
                  <li class="list-group-item"><a href="<?php echo site_url('c_ManageProject/viewUsulan') ?>">List Usulan</a></li>
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
                  <li class="list-group-item"><a href="<?php echo site_url('c_ManageUser/viewAllUser') ?>">List Kependudukan</a></li>
                  <li class="list-group-item"><a href="<?php echo site_url('c_ManageUser/viewAddUser') ?>">Input Kependudukan</a></li>
                </ul>
              </div>
            </div>
          </div>
          <!--/collapsible user-->
        </div>
        <!--/side menu-->
        <div class="col-sm-9">
        <?php echo validation_errors(); ?>
        <?php echo form_open('c_ManageUser/addAdmin'); ?>
          <form class="" action="" method="post">
            <div class="form-group">
              <label for="id">Username</label>
              <input class="form-control" type="text" name="username" value="" required="required">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input class="form-control" type="text" name="password" value="" required="required">
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
