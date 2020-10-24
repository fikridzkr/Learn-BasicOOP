<?php
require_once "App/init.php";

$produk1 = new Komik("Naruto","Masashih","Shonen", 30000,100);
$produk2 = new Game("Pes 2020","Drunkman","Unreal Engine",250000,50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();