<?php
require_once "Mahasiswa.php";
require_once "MahasiswaKip.php";

$Mahasiswa1 = new MahasiswaKip("Muhammad Nastain", "23.240.0020", 3.0, "Teknik Informatika (Murni)", "3P41A");
$Mahasiswa1->infoMahasiswa();
$Mahasiswa1->tambahMatkul();
$Mahasiswa1->infoKip(true);

$Mahasiswa2 = new Mahasiswa("Muhammad Tejo", "23.240.0090", 2.5, "Sistem Informasi", "3P21", "Pemrograman Berbasis Destkop");
$Mahasiswa2->infoMahasiswa();
$Mahasiswa2->tambahMatkul();

// contoh jika parameter pada objek jika tidak diisi, maka output yang keluar adalah isi parameter yang ada dalam constructor
$Mahasiswa3 = new Mahasiswa();
$Mahasiswa3->infoMahasiswa();
