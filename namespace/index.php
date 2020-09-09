<?php
require_once 'App/init.php';
// OBJECT DARI CLASS 
// $produk1 = new Komik("Naruto", "Shounen Jump", "Masashi Kishimoto", 30000, 100,);
// $produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 2500000, 50,);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);
// echo $cetakProduk->cetak();
// echo "<hr>";

// Ini Alias bro
use App\Service\User as ServiceUser;
use App\Produk\User as ProdukUser;

new ServiceUser();
echo "<br>";
new ProdukUser();
