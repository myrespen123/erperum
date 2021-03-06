<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css') ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/adminlte/bower_components/font-awesome/css/font-awesome.min.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/adminlte/bower_components/Ionicons/css/ionicons.min.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/adminlte/dist/css/AdminLTE.min.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/adminlte/dist/css/skins/_all-skins.min.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/adminlte/bower_components/morris.js/morris.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/adminlte/bower_components/jvectormap/jquery-jvectormap.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/adminlte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/adminlte/bower_components/bootstrap-daterangepicker/daterangepicker.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/admin/custom-style.css'); ?>">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue-light sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="" class="user-image img-fluid" alt="User Image">
              <span class="hidden-xs"><?= $this->session->userdata('username'); ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="" class="img-circle img-fluid" alt="User Image">

                <p>
                  <?= $this->session->userdata('username'); ?>
                  <!-- <small>Pengembang</small> -->
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo site_url('Login/logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <ul class="sidebar-menu" data-widget="tree">
        <li>
          <a href="<?php echo site_url('Operator/index'); ?>">
            <i class="fa fa-bar-chart"></i> <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('Operator/data_background'); ?>">
            <i class="fa fa-image"></i> <span>Main Banner</span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('Operator/data_info') ?>">
            <i class="fa fa-book"></i> <span>Main Info</span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('Operator/data_setting') ?>">
            <i class="fa fa-gear"></i> <span>Setting</span>
          </a>
        </li>
    </section>
  </aside>


  