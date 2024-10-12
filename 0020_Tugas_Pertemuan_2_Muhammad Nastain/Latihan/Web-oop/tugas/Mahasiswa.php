<?php
class Mahasiswa
{
    // property
    private $nama, $nim, $kelas, $prodi, $ipk;
    // contruct
    // parameter pada constructor  diisi dengan nilai default parameter 
    public function __construct(
        $nama = "Nama Mahasiswa",
        $nim = "Nim Mahasiswa",
        $ipk = 0.0,
        $prodi = "Prodi Mahasiswa",
        $kelas = "Kelas Mahasiswa"
    ) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->ipk = $ipk;
        $this->prodi = $prodi;
        $this->kelas = $kelas;
    }
    function getNama()
    {
        return $this->nama;
    }
    function setNama($nama)
    {
        return $this->nama = $nama;
    }
    function getNim()
    {
        return $this->nim;
    }
    function setNim($nim)
    {
        return $this->nim = $nim;
    }
    function getIpk()
    {
        return $this->ipk;
    }
    function setIpk($ipk)
    {
        return $this->ipk = $ipk;
    }
    function getProdi()
    {
        return $this->prodi;
    }
    function setProdi($prodi)
    {
        return $this->prodi = $prodi;
    }
    function getKelas()
    {
        return $this->kelas;
    }
    function setKelas($kelas)
    {
        return $this->kelas = $kelas;
    }
    function infoMahasiswa()
    {
        echo PHP_EOL . " Data Mahasiswa     " . PHP_EOL;
        echo "Nama     :  {$this->nama}     " . PHP_EOL;
        echo "Nim      :  {$this->nim}      " . PHP_EOL;
        echo "IPK      :  {$this->ipk}      " . PHP_EOL;
        echo "Prodi    :  {$this->prodi}    " . PHP_EOL;
        echo "Kelas    :  {$this->kelas}    " . PHP_EOL;
    }
    function tambahMatkul()
    {
        if ($this->ipk >= 3 && $this->ipk <= 4) {
            echo "Tambah Mata kuliah 2 SKS" . PHP_EOL;
        } else if ($this->ipk < 3) {
            echo "Mata kuliah tidak bertambah 2 SKS" . PHP_EOL;
        }
    }
}
