<?php

class Produk {
    public $judul,
    $penulis,
    $penerbit,
    $harga;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit",$harga = "harga"){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
}

class CetakInfoProduk {
    public function cetak(produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga}";
        return $str;
    }
}

// $produk1 = new Produk();
// $produk1->judul = "Naruto"; 
// var_dump($produk1);
// echo("<br>");
// $produk2 = new Produk();
// $produk2->judul = "Pes2020"; 
// var_dump($produk2);

$produk1 = new Produk("Naruto","Masashih","Shonen");
$produk2 = new Produk("Pes 2020","Drunkman","Unreal Engine");


echo "Komik : ". $produk1->getLabel();
echo "<br>";
echo "Game : ". $produk2->getLabel();
echo "<br>";

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);
?>