<?php
require_once 'Tugas6_Abstract.php';

class segitiga extends bentuk2d{
    public $alas;
    public $tinggi;
    public function __construct($alas, $tinggi){
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }
    public function namaBidang() {
        $nama = 'Segitiga';
        return $nama;
    }
    public function luasBidang() {
        return 0.5 * $this->alas * $this->tinggi;
    }
    public function kelilingBidang() {
        return $this->alas + $this->alas + $this->alas;
    }
}

?>