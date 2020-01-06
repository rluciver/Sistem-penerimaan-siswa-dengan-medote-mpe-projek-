<!DOCTYPE php>
<php>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets5/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets5/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets5/https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets5/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets5/dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets5/plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets5/plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets5/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets5/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets5/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysiphp5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets5/plugins/bootstrap-wysiphp5/bootstrap3-wysiphp5.min.css">

  <link rel="stylesheet" href="<?php echo base_url();?>assets5/bootstrap/css/style.css">

  <!-- php5 Shim and Respond.js IE8 support of php5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/php5shiv/3.7.3/php5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo" id="mainheader">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Panel-</b>KS</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" id="header">
      <!-- Sidebar toggle button-->
      <img id="img" src="<?php echo base_url();?>assets5/img/aaa.jpeg">
      <span class="logo-lg" id="smk"><b>SMK Ma'arif 1 Kalirejo Lampung Tengah</span>

      

      
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->

      <!-- search form -->

      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <a href="<?php echo base_url();?>index.php/kepalasekolah">
        <li class="header">MAIN MENU</li>
      </a>

      
        <li class="treeview">
          <a href="<?php echo base_url();?>index.php/h_siswa">
            <span>Laporan Siswa</span>
            <span class="pull-right-container">
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url();?>index.php/ksc_cetaksiswa"><i class="fa fa-circle-o"></i>X RPL I</a></li>

            <li><a href="<?php echo base_url();?>index.php/ksc_cetaksiswa2"><i class="fa fa-circle-o"></i>X RPL II</a></li>

            <li class="active"><a href="<?php echo base_url();?>index.php/ksc_cetaksiswa3"><i class="fa fa-circle-o"></i>X RPL III</a></li>

            <li><a href="<?php echo base_url();?>index.php/ksc_cetaksiswa4"><i class="fa fa-circle-o"></i>XI RPL I</a></li>

            <li class="active"><a href="<?php echo base_url();?>index.php/ksc_cetaksiswa5"><i class="fa fa-circle-o"></i>XI RPL II</a></li>

            <li><a href="<?php echo base_url();?>index.php/ksc_cetaksiswa6"><i class="fa fa-circle-o"></i>XI RPL III</a></li>

            <li class="active"><a href="<?php echo base_url();?>index.php/ksc_cetaksiswa7""><i class="fa fa-circle-o"></i>XII RPL I</a></li>

            <li><a href="<?php echo base_url();?>index.php/ksc_cetaksiswa8"><i class="fa fa-circle-o"></i>XII RPL II</a></li>

            <li><a href="<?php echo base_url();?>index.php/ksc_cetaksiswa9"><i class="fa fa-circle-o"></i>XII RPL III</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="<?php echo base_url();?>index.php/h_siswa">
            <span>Laporan MPE</span>
            <span class="pull-right-container">
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url();?>index.php/ksclaporan_mpe"><i class="fa fa-circle-o"></i>X RPL I</a></li>

            <li><a href="<?php echo base_url();?>index.php/ksclaporan_mpe2"><i class="fa fa-circle-o"></i>X RPL II</a></li>

            <li class="active"><a href="<?php echo base_url();?>index.php/ksclaporan_mpe3"><i class="fa fa-circle-o"></i>X RPL III</a></li>

            <li><a href="<?php echo base_url();?>index.php/ksclaporan_mpe4"><i class="fa fa-circle-o"></i>XI RPL I</a></li>

            <li class="active"><a href="<?php echo base_url();?>index.php/ksclaporan_mpe5"><i class="fa fa-circle-o"></i>XI RPL II</a></li>

            <li><a href="<?php echo base_url();?>index.php/ksclaporan_mpe6"><i class="fa fa-circle-o"></i>XI RPL III</a></li>

            <li class="active"><a href="<?php echo base_url();?>index.php/ksclaporan_mpe7""><i class="fa fa-circle-o"></i>XII RPL I</a></li>

            <li><a href="<?php echo base_url();?>index.php/ksclaporan_mpe8"><i class="fa fa-circle-o"></i>XII RPL II</a></li>

            <li><a href="<?php echo base_url();?>index.php/ksclaporan_mpe9"><i class="fa fa-circle-o"></i>XII RPL III</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="<?php echo base_url();?>index.php/h_siswa">
            <span>Laporan BEASISWA</span>
            <span class="pull-right-container">
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url();?>index.php/ksclaporan_beasiswa"><i class="fa fa-circle-o"></i>X RPL I</a></li>

            <li><a href="<?php echo base_url();?>index.php/ksclaporan_beasiswa2"><i class="fa fa-circle-o"></i>X RPL II</a></li>

            <li class="active"><a href="<?php echo base_url();?>index.php/ksclaporan_beasiswa3"><i class="fa fa-circle-o"></i>X RPL III</a></li>

            <li><a href="<?php echo base_url();?>index.php/ksclaporan_beasiswa4"><i class="fa fa-circle-o"></i>XI RPL I</a></li>

            <li class="active"><a href="<?php echo base_url();?>index.php/ksclaporan_beasiswa5"><i class="fa fa-circle-o"></i>XI RPL II</a></li>

            <li><a href="<?php echo base_url();?>index.php/ksclaporan_beasiswa6"><i class="fa fa-circle-o"></i>XI RPL III</a></li>

            <li class="active"><a href="<?php echo base_url();?>index.php/ksclaporan_beasiswa7""><i class="fa fa-circle-o"></i>XII RPL I</a></li>

            <li><a href="<?php echo base_url();?>index.php/ksclaporan_beasiswa8"><i class="fa fa-circle-o"></i>XII RPL II</a></li>

            <li><a href="<?php echo base_url();?>index.php/ksclaporan_beasiswa"><i class="fa fa-circle-o"></i>XII RPL III</a></li>
          </ul>
        </li>

        <!-- <li class="treeview">
          <a href="#">
            <span>Laporan Siswa</span>
            <i class="fa fa-angle-left pull-right"></i>
            <span class="pull-right-container">
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url();?>index.php/ksclaporan_siswa"><i class="fa fa-circle-o"></i>Laporan Siswa</a></li>
            <li><a href="<?php echo base_url();?>index.php/ksclaporan_beasiswa"><i class="fa fa-circle-o"></i>Laporan Beasiswa</a></li>
            <li class="active"><a href="<?php echo base_url();?>index.php/ksclaporan_mpe"><i class="fa fa-circle-o"></i>Laporan Perhitungan MPE</a></li>
          </ul>
        </li> -->

        </li>

        <li class="treeview">
          <a href="<?php echo base_url('index.php/login/logout'); ?>">
            <span>Logout</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>

        

        <li class="treeview">
          <a href="<?php echo base_url('index.php/up_ks/index'); ?>">
            <span>Ubah Password</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>

        

        
        
        
    </section>
    <!-- /.sidebar -->
  </aside>
