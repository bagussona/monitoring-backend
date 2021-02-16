<?php require 'konekdb.php';

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
    <table>
    <tr id="add">
        <td colspan="5"><a href="add.php">Add More+</a></td>
    </tr>
    <tr>
        <th id="id">ID</th>
        <th>Barang Masuk</th>
        <th>Barang Keluar</th>
        <th>Catatan..</th>
        <th>Fungsi</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach($result as $row) : ?>
    <tr>
        <td id="no" align="center"><?= $i; ?></td>
        <td><?= $row["in_barang"] ?></td>
        <td><?= $row["out_barang"] ?></td>
        <td><?= $row["note"] ?></td>
        <td align="center"> <a href="update.php">UPDATE</a>  | <a href="delete.php">DELETE</a> </td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
    </table>
    </div>
</body>
</html>