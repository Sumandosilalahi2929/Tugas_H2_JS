<?php
require_once 'Tugas6_Abstract.php';
class persegipanjang extends bentuk2d {
    public $panjang;
    public $lebar;

    public function __construct($panjang,$lebar){
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }
    
    public function namaBidang() {
        $nama = 'Persegi Panjang';
        return $nama;
    }
    public function luasBidang() {
        return $this->panjang * $this->lebar;
    }
    public function kelilingBidang() {
        return (2 * $this->panjang) + (2 * $this->lebar);
    }
}
?>