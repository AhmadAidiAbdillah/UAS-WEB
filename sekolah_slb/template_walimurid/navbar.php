<?php 



error_reporting(0);
 
session_start();
$id_wali_murid = $_SESSION['id_wali_murid'];
$nama_ayah = $_SESSION['nama_ayah'];



?>

<header id="header" class="fixed-top">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href=""><span>E</span>-SLB</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
      <ul>
  
          <li><a href="walimurid/pendaftaran.php">Pendaftaran</a></li>
          <li><a href="#portfolio">Gallery</a></li>
          <li><a href="#blog">Information</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="walimurid/konsultasi.php">Konsultasi</a></li>
          <li><a href="walimurid/monitoring.php">Monitoring</a></li>
          <li><a href="walimurid/laporan.php">Laporan</a></li>
          <?php if( $id_wali_murid  == ''){?>
            <li><a href="walimurid/login.php">Login</a></li>
          <?php }else{ ?>
            <li class="drop-down"><a href="#"><?= $nama_ayah?></a>
              <ul>
                <li><a href="walimurid/profile.php">Profile</a></li>
                <li><a href="auth/logout.php">Logout</a></li>
              </ul>
            </li>
          <?php }?>
        

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->