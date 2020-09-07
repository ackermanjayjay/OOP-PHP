<!-- Identifiyer untuk simpan nilai -->
<!-- NILAI NYA TIDAK DAPAT DIBUAH -->
<!-- BEDA NIH AMA VARIABEL -->
<!-- define() -->
<!-- conts -->
<!-- Huruf besar semua -->

<!-- tidak bisa disimpan di class 'define' ini yak
 define('NAMA', 'Reza Hammad');
 echo NAMA;
 echo "<br>";
 const bisa di class
 const UMUR = 19;
 echo UMUR; -->
<?php
// echo __FILE__;
// class Coba
// {
//   const NAMA = 'Imai lisa';
// }  
// echo Coba::NAMA;
// Magic Constans
// function coba()
// {
//   return __FUNCTION__;
// }
// echo coba();
class Coba
{
  public $kelas = __CLASS__;
}
$obj = new Coba;
echo $obj->kelas;
