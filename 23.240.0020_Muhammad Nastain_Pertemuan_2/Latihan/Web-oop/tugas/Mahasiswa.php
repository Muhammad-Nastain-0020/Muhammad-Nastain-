<?php 
class Mahasiswa {
    // property
    public $nama, $nim, $kelas, $matkul;
    // contruct
    // parameter pada constructor  diisi dengan nilai default parameter 
    public function __construct($nama = "Nama Mahasiswa", $nim = "Nim Mahasiswa", $kelas = "Kelas Mahasiswa", 
                                $matkul = "Matakuliah yang diambil") {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->kelas = $kelas;
        $this->matkul = $matkul;
    }
    function infoMahasiswa(){
        echo " Data Mahasiswa  <br>";
        echo "Nama     :  {$this->nama} <br>" . PHP_EOL;
        echo "Nim      :  {$this->nim} <br>" . PHP_EOL;
        echo "Kelas    :  {$this->kelas} <br>" . PHP_EOL;
        echo "Matkul   :  {$this->matkul} <br>" . PHP_EOL;
    }
}







?>