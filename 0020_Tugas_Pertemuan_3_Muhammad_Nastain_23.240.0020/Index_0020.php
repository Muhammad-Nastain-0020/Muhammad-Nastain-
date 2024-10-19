<?php 
include "Database.php";
$db_0020 = new Database; 
$db_0020->tampilData();
 
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Utama</title>
    <link rel="stylesheet" href="CSS/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container mt-3">
        <h1>CRUD OOP PHP</h1>
        <hr>
        <!-- tombol tambah data -->
        <a href="Input.php" class="btn btn-success" onclick="return confirm('yakin ingin Menambah Data');">Tambah Data</a>
        <hr>
        <!-- tabel untuk menampilkan data user -->
        <table class="table table-hover">
            <thead>
                <tr> 
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No Hp</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $i = 1;
                    foreach($db_0020->tampilData() as $info){
                ?>
                <tr>
                    <th scope="row"><?= $i++; ?></th>
                    <td><?= $info["nama"]; ?></td>
                    <td><?= $info["alamat"]; ?></td>
                    <td><?= $info["nohp"]; ?></td>
                    <td>
                        <a href="edit.php?id=<?=$info['id'] ?>" class="btn btn-warning btn-sm"  onclick="return confirm('yakin ingin diedit');">Edit</a>
                        <a href="detail.php?id=<?=$info['id'] ?>" class="btn btn-primary btn-sm">Detail</a>
                        <a href="proses.php?id=<?=$info["id"]?>&aksi=hapus" class="btn btn-danger"  onclick="return confirm('yakin ingin dihapus');">Hapus</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
  </body>
</html>