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