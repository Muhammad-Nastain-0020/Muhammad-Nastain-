<?php 
class Mahasiswa {
    // property
    public $nama, $nim, $kelas, $matkul, $prodi, $ipk;
    // contruct
    // parameter pada constructor  diisi dengan nilai default parameter 
    public function __construct($nama = "Nama Mahasiswa", $nim = "Nim Mahasiswa",$ipk = 0.0, $prodi = "Prodi Mahasiswa", 
                                $kelas = "Kelas Mahasiswa",  $matkul = "Matakuliah yang diambil") {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->ipk = $ipk;
        $this->prodi = $prodi;
        $this->kelas = $kelas;
        $this->matkul = $matkul;
    }
    function infoMahasiswa(){
        echo PHP_EOL . " Data Mahasiswa     ";
        echo "Nama     :  {$this->nama}     " . PHP_EOL;
        echo "Nim      :  {$this->nim}      " . PHP_EOL;
        echo "IPK      :  {$this->ipk}      " . PHP_EOL;
        echo "Prodi    :  {$this->prodi}    " . PHP_EOL;
        echo "Kelas    :  {$this->kelas}    " . PHP_EOL;
        echo "Matkul   :  {$this->matkul}   " . PHP_EOL;
    }
    function tambahMatkul(){
        if($this->ipk >= 3){
            echo "Tambah Mata kuliah 2 SKS" . PHP_EOL;
        }else{
            echo "Mata kuliah tidak bertambah 2 SKS" .PHP_EOL;
        }
    }
}







?>