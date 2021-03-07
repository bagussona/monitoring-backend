<!DOCTYPE html>
<?php
error_reporting(0);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/my.css">
    <title>Document</title>
</head>
<body>
    <h2>Hasil Input : </h2>
    <div class="inputPOST">
        <?php
           $barang = $_POST["barang"];
           $harga = $_POST["harga"];

           $kurir = $_GET["kurir"];
           $pengirim = $_GET["pengirim"];
           $barang1 = $_GET["barang"];
           $tujuan = $_GET["tujuan"];

           if (empty($barang && $harga)) {
            echo "Nama kurir =>" . $kurir . ", " . "Pengirim =>" . $pengirim . ", " . "Asal =>" . $barang1 . ", " . "Tujuan =>" . $tujuan;
           } elseif (empty($kurir && $pengirim && $barang1 && $tujuan)) {
            echo "Nama barang  => $barang" . ", " . "Harganya => $harga";
           } else {
               echo "Awkwkwk";
           }
        //    echo "Nama barang : $barang" . ", " . "Harganya: $harga" . ", " . "Nama kurir : $kurir" . ", " . "Pengirim: $pengirim" . ", " . "Asal: $barang1" . ", " . "Tujuan: $tujuan";
        ?>
    </div>

<a href="index.php">kembali..</a>
</body>
</html>