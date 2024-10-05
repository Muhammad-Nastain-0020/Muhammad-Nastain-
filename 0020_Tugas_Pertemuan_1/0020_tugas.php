<?php
// Nama     : Muhammad Nastain
// Kelas    : 3P41
// NIM      : 23.240.0020
// Matkul   : PBW2(Pemrograman Berbasis WEB 2)
$statusMember = "";
if (isset($_POST["bayar"])) {

    $totalPembelian = $_POST["totalPembelian"];
    // jika checkbok (member) dicentang akan menghasilkan true
    $member = (isset($_POST["member"])) ? true : false;

    $diskon = 0; // diskon = 0
    // jika pembeli adalah member maka akan mendapatkan diskon 10%
    if ($member) {
        $statusMember = "Member"; 
        $diskon = 0.1; // diskon member
        // jika total pembelian lebih atau sama dengan 500.000 maka akan mendapatkan tambahan diskon 10% menjadi 20%
        if ($totalPembelian >= 500000) {
            $diskon = $diskon + 0.1; // Diskon 20%
        } else if ($totalPembelian >= 300000) {
            // jika total pembelian lebih atau sama dengan 300.000 akan mendapatkan tambahan diskon 5% menjadi 15%
            $diskon = $diskon + 0.05; // Diskon 15%
        } else if ($totalPembelian < 300000) {
            // jika total pembelian kurang dari 300.000 hanya mendapatkan diskon member saja
            $diskon = $diskon; // Diskon member (10%)
        }
    } else {
        $statusMember = "Bukan Member";
        //jika pembeli bukan member maka tidak akan mendapatkan diskon member
        if ($totalPembelian >= 500000) {
            // jika pembelian lebih atau sama dengan 500.000 maka akan mendapatkan diskon 10 %
            $diskon = 0.1; // Diskon 10% untuk non-member
        }
    }

    $totalAkhir = $totalPembelian - ($totalPembelian * $diskon);
    // aktifkan pesan ketikan sudah menghitung total pembelian
    $pesan = true;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Pembelian</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>

<body>

    <div class="kotak">
        <h1>Halaman Pembayaran Barang</h1>

        <form method="post">
            <table>
            
                <label for="totalPembelian">Total Pembelian :</label>
                <input type="number" class=" form" name="totalPembelian" id="totalPembelian" required>
            
                <input type="checkbox" name="member" id="member">
                <label for="member">Member</label>

                <button type="submit" name="bayar" class="tombol">Bayar</button>

                <!-- jika kota inputan sudah diisi dan tombol bayar sudah ditekan maka akan menampilkan sebuah pesan -->
                <?php if (isset($pesan)) { ?>
                    <h4>Status              : <?= $statusMember ?></h4>
                    <h4>Total harga barang  : Rp <?= number_format($totalPembelian, 0, ',', '.') ?></h4>
                    <h4>Diskon              : <?= $diskon * 100 ?>%</h4>
                    <h4>Total bayar         : Rp <?= number_format($totalAkhir, 0, ',', '.') ?></h4>
                <?php } ?>
            </table>
        </form>
    </div>

</body>

</html>