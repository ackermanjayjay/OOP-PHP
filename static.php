<?php
// Class template dari object!!!!
// Property dan method dalam konteks class!!

// class ContohStatic
// {
//   public static $angka = 1;

//   public static function halo()
//   {
//     return "halo." . self::$angka++ . "kali.";
//   }
// }
// echo ContohStatic::$angka;
// echo "<br>";
// echo ContohStatic::halo();
// echo "<hr>";
// echo ContohStatic::halo();
// Member terikat dengan kelas bukan object ini static
// nilai akan tetap 
// Kode menjadi Prosedural
// Untuk helper/ bantuan
// Di class framework utility

class Contoh
{
  public static $angka = 1;
  public function halo()
  {
    return "halo" . self::$angka++ . "kali. <br>";
  }
}
$obj = new Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();
echo "<br>";
echo "<hr>";
$obj2 = new Contoh;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();
