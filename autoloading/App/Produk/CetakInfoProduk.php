<?php
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