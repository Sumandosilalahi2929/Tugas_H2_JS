<?php
class KonversiSuhu{
    private $satuanSuhuAwal;
    private $besaranSuhu;
    private $satuanSuhuTujuan;

    
    //konstruktur untuk menghantarkan variable atau paramater kedalam file lainnnya
    public function __construct ( $satuanSuhuAwal, $besaranSuhu, $satuanSuhuTujuan){
        $this->suhuawal = $satuanSuhuAwal;
        $this->besarsuhu = $besaranSuhu;
        $this->suhutujuan = $satuanSuhuTujuan;
    }

    function hasilkonversisuhu($satuanSuhuAwal, $besaranSuhu, $satuanSuhuTujuan) {
        if ($satuanSuhuAwal == 'Celcius' && $satuanSuhuTujuan == 'Fahrenheit') {
            // Konversi Celcius ke Fahrenheit
            $hasil = ($besaranSuhu * 9/5) + 32;
        } elseif ($satuanSuhuAwal == 'Fahrenheit' && $satuanSuhuTujuan == 'Celcius') {
            // Konversi Fahrenheit ke Celcius
            $hasil = ($besaranSuhu - 32) * 5/9;
        } elseif ($satuanSuhuAwal == 'Celcius' && $satuanSuhuTujuan == 'Rheamur') {
            // Konversi Celcius ke Rheamur
            $hasil = $besaranSuhu * 4/5;
        } elseif ($satuanSuhuAwal == 'Rheamur' && $satuanSuhuTujuan == 'Celcius') {
            // Konversi Rheamur ke Celcius
            $hasil = $besaranSuhu * 5/4;
        } else {
            // Satuan suhu tidak valid atau konversi tidak mendukung
            $hasil = "Konversi tidak valid";
        }
    
        return $hasil;
    }

    public function cetak(){
        echo "<table border='1'>";
        echo '<br><tr><td>Satuan Suhu Awal : '.$this->suhuawal;
        echo '</tr></td><td>Besaran Suhu : '.$this->besarsuhu ;
        echo '<tr><td>Satuan Suhu Tujuan : '.$this->suhutujuan;
        echo '<tr><td>Hasil akhir suhu : '.$this->hasilkonversisuhu($this->suhuawal, $this->besarsuhu, $this->suhutujuan);
        echo "</table>";
    }

}

?>