<?php 
class buah{
    // properti
    public $nama, $warna;

    //method
    function deskripsiBuah(){
        $this->nama;
        $this->warna;

        echo "Nama Buah : $this->nama Memiliki warna : $this->warna";
    }


    
}

$mangga = new buah ();
$mangga->nama = "Mangga Harum Manis";
$mangga->warna = "Hijau";

echo $mangga->deskripsiBuah() . PHP_EOL;



?>