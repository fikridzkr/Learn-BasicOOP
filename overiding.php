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

    public function getinfoProduk(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }
}

class Komik extends Produk{
    public $jmlHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit",$harga = "harga",$jmlHalaman = 0){

    parent::__construct($judul, $penulis, $penerbit,$harga);

    $this->jmlHalaman = $jmlHalaman;
    }

    public function getinfoProduk(){
        $str = "Komik : " . parent::getinfoProduk() ." - {$this->jmlHalaman} Halaman.";

        return $str;
    }
}

class Game extends Produk{
    public $waktuMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit",$harga = "harga",$waktuMain = 0){

    parent::__construct($judul  , $penulis, $penerbit,$harga);

    $this->waktuMain = $waktuMain;
    }

    public function getinfoProduk(){
        $str = "Game : ". parent::getinfoProduk()." ~ {$this->waktuMain} Jam.";
        return $str;
    }
}

class CetakInfoProduk {
    public function cetak(produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}



$produk1 = new Komik("Naruto","Masashih","Shonen", 30000,100);
$produk2 = new Game("Pes 2020","Drunkman","Unreal Engine",250000,50);


echo "Komik : ". $produk1->getLabel();
echo "<br>";
echo "Game : ". $produk2->getLabel();
echo "<br>";


echo $produk1->getinfoProduk();
echo "<br>";
echo $produk2->getinfoProduk();
?>