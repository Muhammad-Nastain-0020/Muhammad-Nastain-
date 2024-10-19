<?php
include "Database.php";
$db20 = new Database();

$aksi = $_GET["aksi"];
if ($aksi == "tambah") {

    $nama_file = $_FILES['foto']['name'];
    $ukuran_file = $_FILES['foto']['size'];
    $error = $_FILES['foto']['error'];
    $tmp_Nama = $_FILES['foto']['tmp_name'];

    $foto = $db20->uploadGambar($nama_file, $ukuran_file, $error, $tmp_Nama);

    if ($foto) {
        $db20->tambahData($_POST['nama'], $_POST['nim'], $_POST['kelas'], $_POST['jenis_kelamin'], $_POST['alamat'], $_POST['nohp'], $foto);
        die("<script>
                alert ('Data berhasil ditambahkan');
                document.location.href = 'index_0020.php';
              </script>");
    } else {
        die("<script>
                alert ('Data gagal ditambahkan');
                document.location.href = 'index_0020.php';
              </script>");
    }
} else if ($aksi == "edit") {
    $foto_lama = $_POST['foto_lama'];
    
    $nama_file = $_FILES['foto']['name'];
    $ukuran_file = $_FILES['foto']['size'];
    $error = $_FILES['foto']['error'];
    $tmp_Nama = $_FILES['foto']['tmp_name'];


    // cek apakah user pilih gambar baru atau tidak
    if ($error === 4) {
        // jika tidak mengedit foto maka akan dipilih var foto_lama
        $foto = $foto_lama;
    } else {
        // jalankan function upload jika input foto baru
        $foto = $db20->uploadGambar($nama_file, $ukuran_file, $error, $tmp_Nama);
    }
    if ($foto) {
        $db20->updateData($_POST['id'], $_POST['nama'], $_POST['nim'], $_POST['kelas'], $_POST['jenis_kelamin'], $_POST['alamat'], $_POST['nohp'], $foto);
        die("<script>
                alert ('Data berhasil diubah');
                document.location.href = 'index_0020.php';
              </script>");
    } else {
        die("<script>
                alert ('Data gagal diubah');
                document.location.href = 'index_0020.php';
              </script>");
    }
    exit();
} else if ($aksi == "hapus") {
    $hapus = $db20->hapusData($_GET["id"]);
    if ($hapus == true) {
        die("<script>
                alert ('Data berhasil dihapus');
                document.location.href = 'index_0020.php';
              </script>");
    } else {
        die("<script>
                alert ('Data gagal dihapus');
                document.location.href = 'index_0020.php';
              </script>");
    }
}
