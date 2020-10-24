<?php

class Produk {
    public $judul,
    $penulis,
    $penerbit,
    $jmlHalaman,
    $waktuMain,
    $tipe,
    $harga;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit",$harga = "harga",$jmlHalaman = 0,$waktuMain = 0,$tipe){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }
    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

    public function getinfoLengkap(){
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        if ($this->tipe == "komik") {
            $str .= "- {$this->jmlHalaman} Halaman.";
        }else if ($this->tipe == "game") {
            $str .= "- {$this->waktuMain} Jam.";
        }

        return $str;
    }
}

class CetakInfoProduk {
    public function cetak(produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
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

$produk1 = new Produk("Naruto","Masashih","Shonen", 30000,100,0,"komik");
$produk2 = new Produk("Pes 2020","Drunkman","Unreal Engine",250000,0,50,"game");


echo "Komik : ". $produk1->getLabel();
echo "<br>";
echo "Game : ". $produk2->getLabel();
echo "<br>";


echo $produk1->getinfoLengkap();
echo "<br>";
echo $produk2->getinfoLengkap();
?>