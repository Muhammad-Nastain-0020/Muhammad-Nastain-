<?php 
class buah1{
    // properti
    public $nama, $warna;

    // Construct
    function __construct($namaBaru, $warnaBaru) {
        $this->nama = $namaBaru;
        $this->warna = $warnaBaru;
    }
    
    //Function deskripsi (function yang diakses oleh objek untuk menampilkan deskripsi objek)
    function deskripsiBuah(){
        echo "Nama Saya $this->nama warna Saya $this->warna";
    }


    
}
//  Membuat objek mangga
$mangga = new buah1("Nopal", "hijau");
// objek mangga diakses oleh function deskripsiBuah
echo $mangga->deskripsiBuah();

?>