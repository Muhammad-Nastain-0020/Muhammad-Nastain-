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
        <form method="post" action="Proses.php?aksi=tambah" enctype="multipart/form-data">
          <div class="mb-3">
              <label for="nama" class="form-label">Nama : </label>
              <input type="text" class="form-control" id="nama" name="nama" required autocomplete="off">
          </div>

          <div class="mb-3">
              <label for="nim" class="form-label">Nim :</label>
              <input type="text" class="form-control" id="nim" name="nim" required autocomplete="off">
          </div>

          <div class="mb-3">
              <label for="kelas" class="form-label">Kelas :</label>
              <input type="text" class="form-control" id="kelas" name="kelas" required autocomplete="off">
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
            <input type="text" class="form-control" id="alamat" name="alamat" required autocomplete="off">
          </div>

          <div class="mb-3">
            <label for="no_hp" class="form-label">No Hp :</label>
            <input type="text" class="form-control" id="no_hp" name="nohp" required autocomplete="off">
          </div>
          
          <div class="mb-3">
            <label for="foto" class="form-label">Gambar : </label>
            <input type="file" class="form-control" name="foto" id="foto" required>
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
  </body>
</html>