<?php

class Produk
{
  // PROPERTY 
  public $judul = "judul";
  public $penulis = "penulis";
  public $penerbit = "penerbit";
  public $harga = "0";

  // METHOD
  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }
}

// $produk1 = new Produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Uncharted";
// $produk2->tambahProperty = "hahaha";
// var_dump($produk2);

// OBJECT DARI CLASS
$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penerbit = "Shounen Jump";
$produk3->penulis = "Masashi Kishimoto";
$produk3->harga = "30000";

$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckman";
$produk4->penerbit = "Sony Computer";
$produk4->harga = "Sony 2500000";

// CETAK 
echo "Komik:" . $produk3->getLabel();
echo "<br>";
echo "Game:" . $produk4->getLabel();
