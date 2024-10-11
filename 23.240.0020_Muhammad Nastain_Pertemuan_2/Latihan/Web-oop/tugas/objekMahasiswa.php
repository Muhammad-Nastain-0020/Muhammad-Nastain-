<?php 
require_once "Mahasiswa.php";

$Mahasiswa1 = new Mahasiswa("Muhammad Nastain", "23.240.0020", "3P41A", "Pemrograman Berbasis WEB 2");
$Mahasiswa1->infoMahasiswa();
echo "<br>";
// contoh jika parameter pada objek jika tidak diisi, maka output yang keluar adalah isi parameter yang ada dalam constructor
$Mahasiswa2 = new Mahasiswa();
$Mahasiswa2->infoMahasiswa() ;

?>