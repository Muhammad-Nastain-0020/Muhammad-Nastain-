<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../bootstrap-5.0.2-dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-3">
        <h1>Halaman Utama</h1>
        <hr>
        <!-- tombol tambah data -->
        <a href="index.php?aksi=tambah" class="btn btn-success" onclick="return confirm('yakin ingin Menambah Data');">Tambah Data</a>
        <hr>
        <!-- tabel untuk menampilkan data user -->
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">No Hp</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;

                foreach ($user as $info) {
                ?>
                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><?= $info["nama"]; ?></td>
                        <td><?= $info["email"]; ?></td>
                        <td><?= $info["nohp"]; ?></td>
                        <td>
                            <a href="index.php?id=<?= $info["id"] ?>&aksi=edit" class=" btn btn-warning btn-sm" onclick="return confirm('yakin ingin diedit');">Edit</a>
                            <a href="index.php?id=<?= $info["id"] ?>&aksi=detail" class=" btn btn-primary btn-sm">Detail</a>
                            <a href="index.php?id=<?= $info["id"] ?>&aksi=hapus" class="btn btn-danger btn-sm" onclick="return confirm('yakin ingin dihapus');">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>