<?php

class Produk
{
  // PROPERTY 
  public $judul,
    $penulis,
    $penerbit,
    $harga;



  /*Mantep lah*/


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
  public function getInfoProduk()
  {
    // Komik : Naruto | Masashi Kisimoto, Shounen Jump(RP.30000)- 100Halaman.
    // Game : Uncharted | Neil Durckman, Sony Computer (Rp.25000) - 50 Jam.
    $str = "{$this->judul}|{$this->getLabel()} Harga(Rp.{$this->harga})";

    // if ($this->tipe == "Komik") {
    //   $str .= " -{$this->jmlHalaman} Halaman";
    // } elseif ($this->tipe == "Game") {
    //   $str .= " -{$this->waktuMain} Jam";
    // }

    return $str;
  }
}


// Child Class
class Komik extends Produk
{
  public $jmlHalaman;
  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0)
  {
    parent::__construct($judul, $penulis, $penerbit, $harga, $jmlHalaman);
    $this->jmlHalaman = $jmlHalaman;
  }
  public function getInfoProduk()
  {
    $str = "Komik:" . parent::getInfoProduk() . "|{$this->jmlHalaman}Halaman";
    return $str;
  }
}
class Game extends Produk
{
  public $waktuMain;
  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0)
  {
    parent::__construct($judul, $penulis, $penerbit, $harga, $waktuMain);
    $this->waktuMain = $waktuMain;
  }
  public function getInfoProduk()
  {
    $str = "Game:" . parent::getInfoProduk() . "| {$this->waktuMain}Jam";
    return $str;
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
$produk1 = new Komik("Naruto", "Shounen Jump", "Masashi Kishimoto", 30000, 100,);
$produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 2500000, 50,);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
