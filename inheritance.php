

<?php

class Produk {
    public $judul,
    $penulis,
    $penerbit,
    $jmlHalaman,
    $waktuMain,
    $harga;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit",$harga = "harga",$jmlHalaman = 0,$waktuMain = 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
    }
    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

    public function getinfoProduk(){
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        if ($this->tipe == "komik") {
            $str .= "- {$this->jmlHalaman} Halaman.";
        }else if ($this->tipe == "game") {
            $str .= "- {$this->waktuMain} Jam.";
        }

        return $str;
    }
}

class Komik extends Produk{
    public function getinfoProduk(){
        $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";

        return $str;
    }
}

class Game extends Produk{
    public function getinfoProduk(){
        $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->waktuMain} Jam.";

        return $str;
    }
}

class CetakInfoProduk {
    public function cetak(produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}



$produk1 = new Komik("Naruto","Masashih","Shonen", 30000,100,0);
$produk2 = new Game("Pes 2020","Drunkman","Unreal Engine",250000,0,50);


echo "Komik : ". $produk1->getLabel();
echo "<br>";
echo "Game : ". $produk2->getLabel();
echo "<br>";


echo $produk1->getinfoProduk();
echo "<br>";
echo $produk2->getinfoProduk();
?>