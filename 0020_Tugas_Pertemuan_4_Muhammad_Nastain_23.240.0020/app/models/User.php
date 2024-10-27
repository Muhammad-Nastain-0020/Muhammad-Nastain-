<?php

class User
{

    private $db;

    public function __construct($dbKoneksi)
    {
        $this->db = $dbKoneksi;
    }

    public function HalDetail($id)
    {
        $query = $this->db->prepare("SELECT * FROM user WHERE id = :id");
        $query->bindParam(':id', $id);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function HalIndex()
    {
        $query = $this->db->prepare("SELECT * FROM user");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC); // Menggunakan fetchAll untuk mendapatkan array
    }

    public function updateData($id, $nama, $email, $nohp, $jenis_kelamin, $alamat)
    {
        $sql = "UPDATE user SET nama = :nama, email = :email, nohp = :nohp, jenis_kelamin = :jenis_kelamin,
                             alamat = :alamat WHERE id = :id";
        $query = $this->db->prepare($sql);

        $query->bindParam(':nama', $nama);
        $query->bindParam(':email', $email);
        $query->bindParam(':nohp', $nohp);
        $query->bindParam(':jenis_kelamin', $jenis_kelamin);
        $query->bindParam(':alamat', $alamat);
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        return $query->execute();
    }

    public function tambahData($nama, $email, $nohp, $jenis_kelamin, $alamat)
    {
        $sql = "INSERT INTO user (nama, email, nohp, jenis_kelamin, alamat) 
                            VALUES (:nama, :email, :nohp, :jenis_kelamin, :alamat)";
        $query = $this->db->prepare($sql);

        $query->bindParam(':nama', $nama);
        $query->bindParam(':email', $email);
        $query->bindParam(':nohp', $nohp);
        $query->bindParam(':jenis_kelamin', $jenis_kelamin);
        $query->bindParam(':alamat', $alamat);
        return $query->execute();
    }


    public function hapusData($id)
    {
        $sql = "DELETE FROM user WHERE id = :id";
        $query = $this->db->prepare($sql);
        $query->bindParam(":id", $id, PDO::PARAM_INT);
        return $query->execute();
    }

}
