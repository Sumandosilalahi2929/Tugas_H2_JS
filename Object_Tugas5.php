<?php

require 'Tugas5.php';


$objek1 = new KonversiSuhu('Celcius', 25, 'Fahrenheit');
$objek2 = new KonversiSuhu('Fahrenheit', 77, 'Celcius');
$objek3 = new KonversiSuhu('Rheamur', 100, 'Celcius');
$objek4 = new KonversiSuhu('Celcius', 86, 'Rheamur');


//Menampilkan hasil konversi

$objek1->cetak();
$objek2->cetak();
$objek3->cetak();
$objek4->cetak();

?>