<?php

class Produk
{
  // PROPERTY 
  private $judul,
    $penulis,
    $penerbit,
    $harga,
    $diskon = 0;
  // protected $harga;




  /*Mantep lah*/


  // METHOD MAGIC
  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }
  public function setJudul($judul)
  {

    $this->judul = $judul;
  }
  public function getJudul()
  {
    return $this->judul;
  }
  public function setPenulis($penulis)
  {
    $this->penulis = $penulis;
  }
  public function getPenulis()
  {
    return    $this->penulis;
  }
  public function setPenerbit($penerbit)
  {
    $this->penerbit = $penerbit;
  }
  public function setDiskon($diskon)
  {
    return  $this->diskon = $diskon;
  }
  public function getDiskon()
  {
    return $this->diskon;
  }
  public function getPenerbit()
  {
    return   $this->penerbit;
  }
  public function setHarga($harga)
  {
    $this->harga = $harga;
  }

  // public function setDiskon($diskon)
  // {
  //   $this->diskon = $diskon;
  // }
  public function getHarga()
  {
    return $this->harga - ($this->harga * $this->diskon / 100);
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
  // public function setDiskon($diskon)
  // {
  //   $this->diskon = $diskon;
  // }
  // public function getHarga()
  // {
  //   return $this->harga;
  // }
  public function getInfoProduk()
  {
    $str = "Game:" . parent::getInfoProduk() . "| {$this->waktuMain}Jam";
    return $str;
  }
}
// Yang diatas juga child class hehehe



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
echo "<hr>";

$produk2->setDiskon(50);
echo $produk2->getHarga();
echo "<hr>";
$produk1->setJudul("Bang Dream");
echo $produk1->getJudul();
echo "<br>";
$produk1->setPenulis("Reza");
echo $produk1->getPenulis();
