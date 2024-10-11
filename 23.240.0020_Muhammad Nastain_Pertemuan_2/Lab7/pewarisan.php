<?php 
// kelas buah
class Buah{
    // properti
    public $nama, $warna;

}

// kelas pisang
class pisang extends Buah{
    function deskripsiBuah(){
        echo "Nama aing $this->nama warna aing $this->warna";
    }

}

//  Membuat objek mangga
$objekPisang = new pisang();
$objekPisang->nama = "Pisang Raja";
$objekPisang->warna = "Kuning";
echo $objekPisang->deskripsiBuah() . PHP_EOL;

$objekBuah = new Buah();
$objekBuah->nama = "Mangga";
$objekBuah->nama = "hijau";



?> 