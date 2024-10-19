<?php 
include "Database.php";
$db020 = new Database(); 
$detail = $db020->editData($_GET["id"]);
  
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Tambah Data</title>
    <link rel="stylesheet" href="CSS/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container mt-3">
        <h1>CRUD OOP PHP</h1>
        <hr>
        <h4>Tambah Data</h4>
        <hr>
        <!-- form input data  -->
        <form method="post" action="Proses.php?aksi=edit" enctype="multipart/form-data">
 
            <?php foreach($detail as $info) { ?>
            <!-- kirim id ke database -->
            <input type="hidden" name="id"  value="<?=$info['id']; ?>">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama : </label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?=$info['nama']; ?>" required>
            </div>

            <div class="mb-3">
                <label for="nim" class="form-label">Nim : </label>
                <input type="text" class="form-control" id="nim" name="nim" value="<?=$info['nim']; ?>" required>
            </div>

            <div class="mb-3">
                <label for="kelas" class="form-label">Kelas : </label>
                <input type="text" class="form-control" id="kelas" name="kelas" value="<?=$info['kelas']; ?>" required>
            </div>

            <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                    <option value="Laki-laki" <?= ($info['jenis_kelamin'] == 'Laki-laki') ? 'selected' : ''; ?>>Laki Laki</option>
                    <option value="Perempuan" <?= ($info['jenis_kelamin'] == 'Perempuan') ? 'selected' : ''; ?>>Perempuan</option>
                </select>    
            </div>  

            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat :</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="<?=$info['alamat']; ?>" required>
            </div>

            <div class="mb-3">
                <label for="no_hp" class="form-label">No Hp :</label>
                <input type="text" class="form-control" id="no_hp" name="nohp" value="<?=$info['nohp']; ?>" required>
            </div>

            <div class="mb-3">
                <label for="foto" class="form-label">Gambar <?= $info['nama'] ?></label><br>
                <img src="foto/<?= $info['foto'] ?>" alt="<?= $info['nama'] ?>" width="80" class="img-thumbnail">
                <input type="file" class="form-control" name="foto" id="foto" value="<?=$info['foto']; ?>">
                <!-- agar tidak upload foto lagi -->
                <input type="hidden" name="foto_lama" value="<?=$info['foto']; ?>">
            </div>

            <?php } ?>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
  </body>
</html>