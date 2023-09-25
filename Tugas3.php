<?php
    $m1 = ['nim' => '010101','nama' =>'Adi', 'nilai' => 95];
    $m2 = ['nim' => '010102','nama' =>'Boni', 'nilai' => 85];
    $m3 = ['nim' => '010103','nama' =>'Caca', 'nilai' => 75];
    $m4 = ['nim' => '010104','nama' =>'Doni', 'nilai' => 65];
    $m5 = ['nim' => '010105','nama' =>'Foni', 'nilai' => 55];
    $m6 = ['nim' => '010106','nama' =>'Nisa', 'nilai' => 45];
    $m7 = ['nim' => '010107','nama' =>'Anisa', 'nilai' => 35];
    $m8 = ['nim' => '010108','nama' =>'Polin', 'nilai' => 25];
    $m9 = ['nim' => '010109','nama' =>'Violin', 'nilai' => 15];
    $m10 = ['nim' => '010100','nama' =>'Rehan', 'nilai' => 42];

    $ar_judul = ['No', 'NIM','Nama Mahasiswa','Nilai','Keterangan','Grade','Predikat'];
    $mahasiswa = [$m1,$m2,$m3,$m4,$m5,$m6,$m7,$m8,$m9,$m10];
    $jumlah_mahasiswa = count($mahasiswa);
    $jumlah_nilai = array_column($mahasiswa,'nilai');
    $total_nilai = array_sum($jumlah_nilai);
    $nilai_tertinggi = max($jumlah_nilai);
    $nilai_terendah = min($jumlah_nilai);
    $nilai_rata_rata = $total_nilai /  $jumlah_mahasiswa;
    $terakhir = [
        'Jumlah Mahasiswa' => $jumlah_mahasiswa,
        'Nilai Terendah' => $nilai_terendah,
        'Nilai Tertinggi' => $nilai_tertinggi,
        'Total Nilai' => $total_nilai,
        'Nilai Rata-Rata' => $nilai_rata_rata
    ];
    ?>
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body align="center">
    <h3 align="center">Daftar Nilai Mahasiswa</h3>
    <table border = "1" cellspading="10" cellspading="2" width=100%>
        <thead>
            <tr>
                <?php
                foreach($ar_judul as $judul ){?>
                <th style="background-color: cyan"><?= $judul ?></th>
                <?php } ?>
                
            </tr>
        </thead>
        <tbody>
        <tbody>
            <?php $no=1;
            foreach ($mahasiswa as $nilai_mahasiswa){
                $keterangan = ($nilai_mahasiswa ['nilai'] >= 60) ? "Lulus" : "Tidak Lulus";
                if ($nilai_mahasiswa ['nilai'] >= 85 && $nilai_mahasiswa ['nilai'] <= 100) $grade = "A";
                else if ($nilai_mahasiswa ['nilai'] >= 75 && $nilai_mahasiswa ['nilai'] <=84)$grade = "B";
                else if ($nilai_mahasiswa ['nilai'] >= 60 && $nilai_mahasiswa ['nilai'] <= 74)$grade ="C";
                else if ($nilai_mahasiswa ['nilai'] >= 30 && $nilai_mahasiswa ['nilai'] <= 59)$grade = "D";
                else if ($nilai_mahasiswa ['nilai'] >=0 && $nilai_mahasiswa ['nilai'] <= 29)$grade = "E";
                else $grade = " ";
                
                switch ($grade){
                    case"A" : $predikat = "Memuaskan"; break;
                    case"B" : $predikat = "Baik"; break;
                    case"C" : $predikat = "Cukup"; break;
                    case"D" : $predikat = "Kurang"; break;
                    case"E" : $predikat = "Buruk"; break;
                    default: $predikat = ' ';

}
                ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $nilai_mahasiswa['nim'] ?></td>
                    <td><?= $nilai_mahasiswa['nama'] ?></td>
                    <td><?= $nilai_mahasiswa['nilai'] ?></td>
                    <td><?= $keterangan?></td>
                    <td><?= $grade?></td>
                    <td><?= $predikat?></td>
                </tr>
             <?php } ?>
        </tbody>
        <tfoot>
            <?php
                foreach($terakhir as $akhir => $hasil){
                    ?>
                    <tr>
                        <th colspan="2"><?= $akhir ?></th>
                        <th colspan="5"><?= $hasil ?></th>
                    </tr>
                
               <?php  }

?>
        </tfoot>
    </table>
</body>
</html>