<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>porto terbaru</title>
  <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.css" />
  <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/" />
</head>
</head>

<body id="home">

<?php 
  $nama = "Sumando Silalahi";
  $whatsapp = "0822221111";
  $telegram = "Sumando_S";
  $email = "SumandoSilalahi@gmail.com";
  ?>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#project">Project</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#Kontak">Kontak</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!--start home-->
  <div class="jumbotron text-center">
    <div class="col-md-12">
      <br><br><br>
      <h6 class="display-6">
        Sumando Silalahi
      </h6>
      <p>
        Saya Sumando Silalahi. Saya mahasiswa jurusan Sistem Informasi Semester VII di Universitas Mikroskil Kota Medan,
        Sumatera Utara. Saya Memiliki Minat menjadi Frontend Developer, Saat ini saya sedang Merintis Ilmu untuk
        mewujudkan Karir Saya..</small>
      </p>
    </div>
  </div>
  <!-- end home -->
  <br><br>
  <!-- projek -->
  <section id="project">
    <div class="container">
      <div class="row text-center">
        <div class="col mb-3">
          <h2>Project</h2>
        </div>
      </div>
      <!-- first layout start -->
      <div class="row justify-content-center">
        <div class="card m-3" style="max-width: 540px;cursor: pointer;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="img/marvel.jpg" class="img-fluid" alt="..." style="height: 100%;">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Website Film</h5>
                <p class="card-text">Destinasi utama untuk nonton para penggemar Marvel di seluruh dunia! Kami dengan bangga
                  mempersembahkan koleksi lengkap film dan serial TV Marvel, memungkinkan Anda untuk menikmati
                  petualangan pahlawan super favorit Anda kapan saja dan di mana saja. </p>
              </div>
            </div>
          </div>
        </div>
        <div class="card m-3" style="max-width: 540px;cursor: pointer;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="img/restaurant.jpg" class="img-fluid" alt="..." style="height: 100%;">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Website Restaurant</h5>
                <p class="card-text">destinasi kuliner terbaik untuk Anda yang mencari pengalaman makan yang tak
                  terlupakan. Dengan suasana yang nyaman dan menu yang beragam</p>
              </div>
            </div>
          </div>
        </div>
        <div class="card m-3" style="max-width: 540px;cursor: pointer;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="img/jual.jpg" class="img-fluid" alt="..." style="height: 100%;">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Marketplace</h5>
                <p class="card-text">Tempat terbaik untuk memenuhi semua kebutuhan belanja Anda! Kami bangga menjadi
                  destinasi online yang memungkinkan Anda menjelajahi dan membeli berbagai produk dengan harga terbaik.
                  Di sini.</p>
              </div>
            </div>
          </div>
        </div>
  </section>
  <!-- project end -->

  <!-- kontak start -->
  <section id="Kontak">
    <div class="container-fluid  text-light text-center">
      <div class="alert alert-primary" role="alert">
        <h1>Kontak Saya</h1>
        <?php
          echo '<br>Nama :  ' .$nama;
        ?>
        <?php
          echo '<br>WhatsApp :  ' .$whatsapp;
        ?>
        <?php
          echo '<br>Telegram :  ' .$telegram;
        ?>
        <?php
          echo '<br>Email :  ' .$email;
        ?>
      </div>
    </div>
    <!-- kontak end -->
  </section>
  <script src="bootstrap-5.3.2-dist/js/bootstrap.js"></script>
</body>

</html>