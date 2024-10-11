<?php 
    class buah{
        public $nama, $warna;

    }

$pisang = new buah ();
$pisang->nama = "Pisang Hijau";
$pisang->warna = "Hijau";

$mangga = new buah ();
$mangga->nama = "Mangga Harum Manis";
$mangga->warna = "Hijau";

echo $pisang->nama . PHP_EOL;
echo $pisang->warna . PHP_EOL;

echo $mangga->nama . PHP_EOL;
echo $mangga->warna . PHP_EOL;







?>