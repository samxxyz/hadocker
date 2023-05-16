<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= $title['dash']?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?= base_url();?>assets/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="<?= base_url();?>assets/dist/css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
  <link rel="stylesheet" href="<?= base_url();?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <script src="<?= base_url();?>assets/plugins/jquery/jquery.min.js"></script>
  <link rel="stylesheet" href="<?= base_url();?>assets/css/style.css">
  <script src="<?= base_url();?>assets/bower_components/angular/angular.min.js"></script>
  <style>
    .center {
      margin: 0;
      position: absolute;
      align-items: center;
      top: 50%;
      left: 50%;
      -ms-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
    }
  </style>
</head>

<body class="hold-transition sidebar-mini">
  <?php
  if(!$this->session->userdata('jenis') && $this->session->userdata('jenis')!='Member'){
    $this->session->set_flashdata('pesan', 'Anda tidak memiliki akses, error');
    $this->session->sess_destroy();
    redirect('authorization');
  }
  ?>
 <div class="wrapper ">
    <nav class="main-header navbar navbar-expand navbar-dark navbar-light fixed-top">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="<?=base_url()?>member/home" role="button"><i class="fas fa-bars"></i></a>
        </li>

        <ol class="breadcrumb float-sm-right" style="background: none;">
                <li class="breadcrumb-item"><a href="<?= base_url();?>member/home">Home</a></li>
                <li class="breadcrumb-item active"><?= $title['dash'];?></li>
              </ol>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url()?>authorization/logout" role="button">
            <b>LOGOUT</b>
          </a>
        </li>
      </ul>
    </nav>
    <aside class="main-sidebar sidebar-dark-primary elevation-4" style="position: fixed;">
      <a href="<?= base_url();?>member/home" class="brand-link">
        <img src="<?= base_url();?>assets/dist/img/laundryy.png" alt="AdminLTE Logo"
          class="brand-image img-circle elevation-5" style="opacity: 100">
        <span class="brand-text font-weight-light">H&M LAUNDRY</span>
      </a>
      <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        
          <div class="info">
            <a href="<?= base_url();?>member/home" class="d-block"><?= $this->session->userdata('nama');?></a>
          </div>
        </div>

        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="<?= base_url()?>member/home" class="nav-link">
                <i class="nav-icon fas fa-home"></i>
                <p>
                  Home
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url()?>member/pemesanan" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Pemesanan
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url()?>member/transaksi" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Transaksi
                </p>
              </a>
            </li>
            <li class="nav-item bottom">
              <a href="<?= base_url()?>member/ulasan" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Ulasan
                </p>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </aside>
    <div class="content-wrapper">
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1><?= $title['dash'];?></h1>
            </div>
            <div class="col-sm-6 ">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?= base_url();?>member/home">Home</a></li>
                <li class="breadcrumb-item active"><?= $title['dash'];?></li>
              </ol>
            </div>
          </div>
        </div>
      </section>
      <section class="content">
        <div class="container-fluid">
          <div class="data-flush" data-flash="<?= $this->session->flashdata('pesan');?>"></div>
