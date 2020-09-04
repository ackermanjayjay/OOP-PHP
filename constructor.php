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


// OBJECT DARI CLASS 
$produk1 = new Produk("Naruto", "Shounen Jump", "Masashi Kishimoto", 30000);
$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer", 2500000);
$produk3 = new Produk("Bang Dream");

// CETAK 
echo "Komik:" . $produk1->getLabel();
echo "<br>";
echo "Game:" . $produk2->getLabel();
echo "<br>";
var_dump($produk3);
