<?php

class Produk {
    public $judul = "judul",
    $penulis = "penulis",
    $penerbit = "penerbit",
    $harga = 0;

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
}

// $produk1 = new Produk();
// $produk1->judul = "Naruto"; 
// var_dump($produk1);
// echo("<br>");
// $produk2 = new Produk();
// $produk2->judul = "Pes2020"; 
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Mashasih";
$produk3->penerbit = "Shonen";
$produk3->harga = 30000;

$produk4 = new Produk();
$produk4->judul = "Pes 2020";
$produk4->penulis = "Drunkmannn";
$produk4->penerbit = "Unreal Engine";
$produk4->harga = 30000;

echo "Komik : ". $produk3->getLabel();
echo "<br>";
echo "Game : ". $produk4->getLabel();
?>