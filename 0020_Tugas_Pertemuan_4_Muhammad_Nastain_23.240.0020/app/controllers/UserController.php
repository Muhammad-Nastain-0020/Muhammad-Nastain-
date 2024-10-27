<?php 
require_once 'app/models/User.php';

class UserController{

    private $userModel;

    public function __construct($dbKoneksi){
        $this->userModel = new User ($dbKoneksi);
    }

    public function tampilan(){
        $user = $this->userModel->HalIndex();
        require_once 'app/views/index_0020.php';
    }

    public function show($id){
        // Mengambil data Pengguna dari Model
        $user = $this->userModel->HalDetail($id);
        
        // Memuat View dan meneruskan data pengguna
        require_once 'app/views/userView.php';
    }

    public function Editdata($id) {
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            // Ambil elemen dari $_POST dari form edit
            $id             = $_POST['id'];
            $nama           = $_POST['nama'];
            $email          = $_POST['email'];
            $nohp           = $_POST['nohp'];
            $jenis_kelamin  = $_POST['jenis_kelamin'];
            $alamat         = $_POST['alamat'];
            
            $ambil = $this->userModel->updateData($id, $nama, $email, $nohp, $jenis_kelamin, $alamat);
            if ($ambil) {
                    die("<script>
                            alert ('Data berhasil diubah');
                            document.location.href = 'index.php';
                        </script>");
                } else {
                    die("<script>
                            alert ('Data gagal diubah');
                            document.location.href = 'index.php';
                        </script>");
                }
        }else {
            // Tampilkan form edit
            $user = $this->userModel->HalDetail($id);
            require_once 'app/views/edit_020.php';
        }   
    }
    
    public function Hapus($id){
        $user = $this->userModel->hapusData($id);
        if ($user) {
            die("<script>
                    alert ('Data berhasil dihapus');
                    document.location.href = 'index.php';
                  </script>");
        } else {
            die("<script>
                    alert ('Data gagal dihapus');
                    document.location.href = 'index.php';
                  </script>");
        }
    }

    public function tambah(){
        require_once "app/views/tambah.php";
        // Ambil elemen dari $_POST dari form edit
        if($_SERVER["REQUEST_METHOD"] === "POST"){
            $nama           = $_POST['nama'];
            $email          = $_POST['email'];
            $nohp           = $_POST['nohp'];
            $jenis_kelamin  = $_POST['jenis_kelamin'];
            $alamat         = $_POST['alamat'];
            
            $kirim = $this->userModel->tambahData($nama, $email, $nohp, $jenis_kelamin, $alamat);
                if ($kirim) {
                    die("<script>
                            alert ('Data berhasil ditambahkan');
                            document.location.href = 'index.php';
                        </script>");
                } else {
                    die("<script>
                            alert ('Data gagal ditambahkan');
                            document.location.href = 'index.php';
                        </script>");
                }  

        }else{
            require_once "app/views/tambah.php";
        }
    }

}

?>