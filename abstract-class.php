<?php

abstract class Produk {
    private $judul,
    $penulis,
    $harga,
    $diskon = 0,
    $penerbit;


    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit",$harga = "harga"){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

    public function setJudul($judul){
        $this->judul = $judul;
    }
    public function getJudul(){
        return $this->judul;
    }

    public function setPenulis($penulis){
        $this->penulis = $penulis;
    }

    public function getPenulis(){
        return $this->penulis;
    }

    public function setPenerbit($penerbit){
        $this->penerbit = $penerbit;
    }

    public function getPenerbit(){
        return $this->penerbit;
    }

    public function setDiskon($diskon){
        $this->diskon = $diskon;
    }

    public function getDiskon(){
        return $this->diskon;
    }
    public function setHarga($harga){
        $this->harga = $harga;
    }
    public function getHarga(){
        return $this->harga - ($this->harga * $this->diskon /100);
    }

    abstract public function getinfoProduk();

    public function getInfo(){
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
        $str = "Komik : " . parent::getInfo() ." - {$this->jmlHalaman} Halaman.";

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
        $str = "Game : ". parent::getInfo()." ~ {$this->waktuMain} Jam.";
        return $str;
    }
}

class CetakInfoProduk {
    public $daftarProduk = array();

    public function tambahProduk( Produk $produk){
        $this->daftarProduk[]=$produk;
    }

    public function cetak(){
        $str = "DAFTAR PRODUK : <BR>";

        foreach($this->daftarProduk as $p){
            $str .= "-{$p->getinfoProduk()} <br>";
        }
        return $str;
    }
}



$produk1 = new Komik("Naruto","Masashih","Shonen", 30000,100);
$produk2 = new Game("Pes 2020","Drunkman","Unreal Engine",250000,50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();
?>