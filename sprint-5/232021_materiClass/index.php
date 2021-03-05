<?php 
namespace IndexOperasi;

include 'kalibataku/Bagi.php';
include 'kalibataku/Kali.php';
include 'kalibataku/Kurang.php';
include 'kalibataku/Tambah.php';


// include 'kalibataku.php';

// use kalibataku\Perkalian as kali;
// use kalibataku\Pembagian as bagi;
// use kalibataku\Penjumlahan as tambah;
// use kalibataku\Pengurangan as kurang;




use Pembagian\Bagi as Division;
use Perkalian\Kali as Multiply;
use Pengurangan\Kurang as Subtract;
use Penjumlahan\Tambah as Add;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="calc">
        <form action="" method="post">
        <label for="angka1">Masukan Angka 1</label>
            <input type="number" name="angka1"><br>
        <label for="angka2">Masukan Angka 2</label>
            <input type="number" name="angka2"><br>
            <input type="submit" name="/" value="/">
            <input type="submit" name="*" value="*">
            <input type="submit" name="-" value="-">
            <input type="submit" name="+" value="+">
        </form>
        <div class="hasil">
        <?php 
    if(isset($_POST['/'])){
        $n1 = $_POST['angka1'];
        $n2 = $_POST['angka2'];
        $Div = new Division($n1, $n2);
    }
    
    if(isset($_POST['*'])){
        $n1 = $_POST['angka1'];
        $n2 = $_POST['angka2'];
        $Div = new Multiply($n1, $n2);
    }

    if(isset($_POST['-'])){
        $n1 = $_POST['angka1'];
        $n2 = $_POST['angka2'];
        $Div = new Subtract($n1, $n2);
    }
    
    if(isset($_POST['+'])){
        $n1 = $_POST['angka1'];
        $n2 = $_POST['angka2'];
        $Div = new Add($n1, $n2);
    }

    ?>
        </div>
    </div>
</div>
    
</body>
</html>


