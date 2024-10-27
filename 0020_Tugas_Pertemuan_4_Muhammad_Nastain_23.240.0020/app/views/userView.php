<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../bootstrap-5.0.2-dist/css/bootstrap.min.css">
</head>

<body> 
    <div class="container mt-3">

        <h1>Data diri dari user <?= $user["nama"] ?></h1>
        <hr>
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-8">
                    <div class="card-body">
                        <h5>ID              : <?= $user["id"] ?></h5>
                        <h5>Nama            : <?= $user["nama"] ?></h5>
                        <h5>Email           : <?= $user["email"] ?></h6>
                        <h5>No hp           : <?= $user["nohp"] ?></h6>
                        <h5>Jenis Kelamin   : <?= $user["jenis_kelamin"] ?></h6>
                        <h5>Alamat          : <?= $user["alamat"] ?></h6>
                        <a href="index.php" class="btn btn-success">Kembali</a>
                    </div>
                </div>
            </div>

        </div>
</body>

</html>