<?php 
include "Database.php";
$db20 = new Database(); 
$detail = $db20->DetailData($_GET["id"]);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
    <link rel="stylesheet" href="CSS/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-3">
    <?php foreach($detail as $info){ ?>
    
    <h1>Data diri dari user <?= $info["nama"] ?></h1>
    <hr>    
    <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
            <div class="col-md-4">
            <img src="foto/<?= $info['foto'] ?>" alt="<?= $info['nama'] ?>" alt="<?= $info['nama'] ?>"class="img-fluid rounded-start">
            </div>
            <div class="col-md-8">
            <div class="card-body">
                <h6>Nama            : <?= $info["nama"] ?></h6>
                <h6>Nim             : <?= $info["nim"] ?></h6>
                <h6>kelas           : <?= $info["kelas"] ?></h6>
                <h6>Jenis Kelamin   : <?= $info["jenis_kelamin"] ?></h6>
                <h6>Alamat          : <?= $info["alamat"] ?></h6>
                <h6>No hp           : <?= $info["nohp"] ?></h6>
                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
            </div>
            </div>
        </div>
    </div>
    <?php } ?>
</body>
</html>