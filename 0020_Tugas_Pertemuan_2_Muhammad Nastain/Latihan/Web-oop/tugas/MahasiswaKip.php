<?php

class MahasiswaKip extends Mahasiswa{
    private $aktif;

    function infoKip($aktif){
        $this->aktif = $aktif;
        if($this->aktif == true){
            echo "Kip dari Mahasiswa {$this->getNama()} Masih aktif" .PHP_EOL;
        }else{
            echo "Kip dari Mahasiswa {$this->getNama()} Sudah tidak aktif" . PHP_EOL;
        }
    }

}