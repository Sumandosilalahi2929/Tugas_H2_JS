<?php 
require_once 'Tugas6_Abstract.php';

class Lingkaran extends Bentuk2d {
    public $jari2;
    public function __construct($jari2) {
        $this->jari2 = $jari2;
    }

    public function namaBidang() {
        $nama = 'Lingkaran';
        return $nama;
    }

    public function luasBidang() {
        return 3.14 * $this->jari2 * $this->jari2;
    }

    public function kelilingBidang() {
        return 2 * 3.14 * $this->jari2;
    }

}


?>