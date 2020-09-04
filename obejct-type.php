<?php

class Produk
{
  // PROPERTY 
  public $judul,
    $penulis,
    $penerbit,
    $harga;

  // METHOD MAGIC
  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }
  // METHOD
  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }
}



class CetakInfoProduk
{
  public function cetak(Produk $produk)
  {
    $str = "{$produk->judul} | {$produk->getLabel()}(Rp. {$produk->harga})";
    return $str;
  }
}


// OBJECT DARI CLASS 
$produk1 = new Produk("Naruto", "Shounen Jump", "Masashi Kishimoto", 30000);
$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer", 2500000);


// CETAK 
echo "Komik:" . $produk1->getLabel();
echo "<br>";
echo "Game:" . $produk2->getLabel();
echo "<br>";



$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);
