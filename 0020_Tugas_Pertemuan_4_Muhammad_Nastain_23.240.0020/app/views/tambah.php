<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Halaman Tambah Data</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="../../bootstrap-5.0.2-dist/css/bootstrap.min.css">
</head>

<body>
  <div class="container mt-3">
    <h1>Tambah Data User</h1>
    <hr>
    <!-- form input data -->
    <form method="post" action="index.php?aksi=tambah" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="nama" class="form-label">Nama : </label>
        <input type="text" class="form-control" id="nama" name="nama" required>
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Email :</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>

      <div class="mb-3">
        <label for="no_hp" class="form-label">No Hp :</label>
        <input type="tel" class="form-control" id="no_hp" name="nohp" required pattern="[0-9]{10,12}" title="Masukkan nomor telepon yang valid">
      </div>

      <div class="mb-3">
        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
          <option value="">---Pilih Jenis Kelamin---</option>
          <option value="Laki-laki">Laki Laki</option>
          <option value="Perempuan">Perempuan</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="alamat" class="form-label">Alamat :</label>
        <input type="text" class="form-control" id="alamat" name="alamat" required>
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</body>

</html>