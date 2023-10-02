
<?php
  
  require_once 'Tugas6_Lingkaran.php';
  require_once 'Tugas6_Persegipjg.php';
  require_once 'Tugas6_Segitiga.php';
$KumpulanData = ['No','Nama Bidang','keterangan','Luas Bidang','keliling Bidang'];

$lkrn = new Lingkaran(20);
$persegipjg = new PersegiPanjang(8,16);
$sgt = new Segitiga(8,20);

$d1 =['nama' => $lkrn -> namaBidang(), 'keterangan' => 'Jari-Jari = '.$lkrn -> jari2, 'luas' => $lkrn->luasBidang(), 'keliling' => $lkrn -> kelilingBidang()];
$d2 =['nama' => $persegipjg -> namaBidang(), 'keterangan' => 'Panjang = '.$persegipjg -> panjang.' dan Lebar = '.$persegipjg -> lebar, 'luas' => $persegipjg->luasBidang(), 'keliling' => $persegipjg -> kelilingBidang()];
$d3 =['nama' => $sgt -> namaBidang(), 'keterangan' => 'Alas = '.$sgt -> alas.' dan Tinggi = '.$sgt -> tinggi, 'luas' => $sgt->luasBidang(), 'keliling' => $sgt -> kelilingBidang()];

$Var_data = [$d1, $d2, $d3];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Bidang 2D</title>
</head>
<body>
    <h1 align ="center">Bentuk 2D </h1>
    <table border = "1" cellspading="10" cellspading="2" width=100%>
        <thead>
            <tr style="background-color: cyan">
                <th>No</th>
                <th>Nama Bidang</th>
                <th>Keterangan</th>
                <th>Luas Bidang</th>
                <th>Keliling Bidang</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $no=1;
        foreach ($Var_data as $data){

            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $data ['nama']?></td>
                <td><?= $data ['keterangan']?></td>
                <td><?= $data ['luas']?></td>
                <td><?= $data ['keliling']?></td>
            </tr>
        <?php }
        ?>
        </tbody>
    </table>
</body>
</html>