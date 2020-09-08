<?php

abstract class Produk
{
  // PROPERTY 
  private $judul,
    $penulis,
    $penerbit,
    $harga,
    $diskon = 0;





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
  abstract public function getInfoProduk();

  public function getInfo()
  {


    // Komik : Naruto | Masashi Kisimoto, Shounen Jump(RP.30000)- 100Halaman.
    // Game : Uncharted | Neil Durckman, Sony Computer (Rp.25000) - 50 Jam.
    $str = "{$this->judul}|{$this->getLabel()} Harga(Rp.{$this->harga})";



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
    $str = "Komik:" . $this->getInfo() . "|{$this->jmlHalaman}Halaman";
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
    $str = "Game:" . $this->getInfo() . "| {$this->waktuMain}Jam";
    return $str;
  }
}
// Yang diatas juga child class hehehe



class CetakInfoProduk
{
  public $daftarProduk = [];
  public function tambahProduk(Produk $produk)
  {
    $this->daftarProduk[] = $produk;
  }
  public function cetak()
  {
    $str = "DAFTAR PRDUK: <br>";
    foreach ($this->daftarProduk as $p) {
      $str .= "-{$p->getInfoProduk()}<br>";
    }
    return $str;
  }
}


// OBJECT DARI CLASS 
$produk1 = new Komik("Naruto", "Shounen Jump", "Masashi Kishimoto", 30000, 100,);
$produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 2500000, 50,);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();
