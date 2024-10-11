<?php 
class Buah{
    protected $nama;

    function gantiNama($namaBuah){
        $this->nama = $namaBuah;
    }
    
    function tampilNama(){
       echo $this->nama;
    }
}
class Apel extends Buah {
    function tampilData(){
        echo $this->nama;
    }
}


// $buah = new Buah();
// $buah->gantiNama("Apel Malang 1") ;
// $buah->tampilNama();

$apel = new apel();
$apel->gantiNama("Apel Malang 1") ;
$apel->tampilData()




?>