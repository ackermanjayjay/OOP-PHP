<?php

class Produk
{
  // PROPERTY 
  public $judul,
    $penulis,
    $penerbit,
    $harga,
    $jmlHalaman,
    $waktuMain,
    $tipe;

  /*Mantep lah*/


  // METHOD MAGIC
  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe)
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    $this->jmlHalaman = $jmlHalaman;
    $this->waktuMain = $waktuMain;
    $this->tipe = $tipe;
  }
  // METHOD
  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }
  public function getInfolengkap()
  {
    // Komik : Naruto | Masashi Kisimoto, Shounen Jump(RP.30000)- 100Halaman.
    // Game : Uncharted | Neil Durckman, Sony Computer (Rp.25000) - 50 Jam.
    $str = "{$this->tipe}:{$this->judul}|{$this->getLabel()} Harga(Rp.{$this->harga})";

    if ($this->tipe == "Komik") {
      $str .= " -{$this->jmlHalaman}Halaman";
    } elseif ($this->tipe == "Game") {
      $str .= " -{$this->waktuMain}Jam";
    }
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
$produk1 = new Produk("Naruto", "Shounen Jump", "Masashi Kishimoto", 30000, 100, 0, "Komik");
$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer", 2500000, 0, 50, "Game");

echo $produk1->getInfolengkap();
echo "<br>";
echo $produk2->getInfolengkap();
