<?php

class Database{
    // properti
    public  $host = "Localhost",
        $user = "root",
        $password = "",
        $database = "db_php_0020",
        $connect;

    // construct 
    public function __construct(){
        // koneksi ke database
        $this->connect = mysqli_connect($this->host, $this->user, $this->password);
        mysqli_select_db($this->connect, $this->database);

        // cek koneksi error
        // if($this->connect->connect_error){
        //     die("Koneksi Gagal : " . $this->connect->connect_error);
        // }
        // echo "Koneksi Berhasil";
    }

    function tampilData(){
        $data = mysqli_query($this->connect, "SELECT * FROM user");
        $row = mysqli_fetch_all($data, MYSQLI_ASSOC);
        // var_dump($row);
        return $row;
    }

    function tambahData($nama, $nim, $kelas, $jenis_kelamin, $alamat, $nohp, $foto){
        // function upload gambar
        mysqli_query($this->connect, "INSERT INTO user VALUE ('','$nama','$nim','$kelas','$jenis_kelamin','$alamat','$nohp','$foto')");
        return true;
    }

    function editData($id){
        $data = mysqli_query($this->connect, "SELECT * FROM user WHERE id = $id");
        $rows = mysqli_fetch_all($data, MYSQLI_ASSOC);
        return $rows;
    }

    function updateData($id, $nama, $nim, $kelas, $jenis_kelamin, $alamat, $nohp, $foto){


        $sql = "UPDATE user SET nama = '$nama', 
                            nim = '$nim', 
                            kelas = '$kelas',
                            jenis_kelamin = '$jenis_kelamin', 
                            alamat = '$alamat', 
                            nohp = '$nohp', 
                            foto = '$foto' 
                    WHERE id = '$id'";
        mysqli_query($this->connect, $sql);
        return true;
    }

    function hapusData($id){
        mysqli_query($this->connect, "DELETE FROM user WHERE id = $id");
        return true;
    }

    function DetailData($id){
        $data = mysqli_query($this->connect, "SELECT * FROM user WHERE id = $id");
        $rows = mysqli_fetch_all($data, MYSQLI_ASSOC);
        return $rows;
    }

    function uploadGambar($nama_file, $ukuran_file, $error, $tmp_Nama){

        // CEK apakah gambar tidak diupload
        if ($error === 4) {
            // tampilkan pesan kesalahan
            echo "<script>
                    alert('Upload gambar terlebih dahulu');
                    document.location.href = 'index_0020.php;
            </script>";
            // berhentikan function upload
            return false;
            exit();
        }
        // Cek apakah yang diupload hanya gambar dan ekstensi yang diboleh kan
        $ektensi_yang_boleh = ['jpg', 'png', 'jpeg'];
        //pecah nama gambar yang duploaded. explode digunakan untuk memecah string menjadi array
        $ektensi_gambar = explode('.', $nama_file);
        // strtolower digunakan agar nama ektensi yang diupload menjadi huruf kecil JPG => jpg
        // end digunakan untuk memilih kata pada nama_file yang paling akhir
        $ektensi_gambar = strtolower(end($ektensi_gambar));

        //in_array digunakan untuk mengecek sebuah string di dalam array
        // jika pada var $ektensi_gambar tidak memiliki sebuah string yang sama pada var $ektensi_yang_boleh maka ...
        if (! in_array($ektensi_gambar, $ektensi_yang_boleh)) {
            echo "<script>
                    alert('Yang anda upload bukan gambar');
            </script>";
            // berhentikan function upload
            return false;
            exit();
        }

        // Cek ukuran pada gambar, memiliki satuan yaitu byte 1.000.000 b = 1mb
        if ($ukuran_file > 2000000) {
            echo "<script>
                    alert('Ukuran gambar terlalu besar');
            </script>";
            // berhentikan function upload
            return false;
            exit();
        }

        // jika sudah lolos pengecekan
        //pindahkan gambar ke folder yang diinginkan 
        // uniqid digunakan untuk mengacak string
        $nama_file_baru = uniqid();
        $nama_file_baru .= '.';
        $nama_file_baru .= $ektensi_gambar;

        move_uploaded_file($tmp_Nama, 'foto/' . $nama_file_baru);

        return $nama_file_baru;
    }
}
