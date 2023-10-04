<?php
include_once 'top.php';
include_once 'menu.php';

?>

<div>
  <div class="container-fluid px-4">
    <!-- <h1>Selamat Datang di halaman Admin</h1> -->

    <!-- file mengarahkan url -->
    <?php
    $url =!isset($_GET['url'])? 'dashboard' : $_GET['url'];
    if($url == 'dashboard'){
        include_once 'dashboard.php';
    } else if (!empty($url)){
        include_once ''.$url.'.php';
    } else {
        'dashboard.php';
    }
    ?>
</div>


<?php

include_once 'bottom.php';

?>