<?php require 'konekdb.php';
$result = pdo_connect_mysql();
// $msg = '';

// $in_brg = isset($_POST['barangin-post']);
// $out_brg = isset($_POST['barangout-post']);
// $ntd = isset($_POST['note']);

$in_brg = $_POST['barangin-post'];
$out_brg = $_POST['barangout-post'];
$ntd = $_POST['note'];

$sql = "INSERT INTO tb_all_barang (in_barang, out_barang, note) VALUES (?,?,?)";
$stmt = $result->prepare($sql);
$stmt->execute([$in_brg, $out_brg, $ntd]);
// Output message
$msg = 'Created Successfully!';




// // var_dump($_POST);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="MethodPost">
            <form action="" method="post">
            <h2 class="HeaderPost" id="HeaderPost"> Tambah Barang baru</h2><br>
                <label for="in_barang">Barang masuk</label><br>
                <input type="text" name="barang" id="barangin-post" placeholder="masukkan in_barang.."><br>
                    <label for="out_barang">Barang keluar</label><br>
                    <input type="text" name="barang" id="barangout-post" placeholder="masukkan out_barang.."><br>
                <label for="noted">Catatan</label><br>
                 <input type="text" name="note" id="noted" placeholder="tulis catatan.."><br>
            <input type="submit" value="submit"><br>
            <a href="index.php">Kembali..</a>
            </form>
        </div>
    </div>

</body>
</html>