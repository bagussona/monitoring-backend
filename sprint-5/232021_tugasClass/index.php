<?php namespace index;

include 'class/Lingkaran.php';
include 'class/Persegi.php';
include 'class/Segitiga.php';

use calcLingkaran\Lingkaran as LuasLingkaran;
use calcPersegi\LuasPersegi as LuasPersegiPanjang;
use calcPersegi\KelPersegi as KelPersegiPanjang;
use calcSegitiga\LuasSegitiga as LuasSegitiga;
use calcSegitiga\KelSegitiga as KelSegitiga;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/my.css">

    <title>Document</title>
</head>
<body>
    <div class="header">
        <h1 align="center">Hitung Bangun Datar</h1>
    </div>
    <div class="container">
    <!-- <input type="text" value="LINGKARAN">
    <div id="content"> -->
        <div class="lingkaran">
            <form action="" method="post">
                <span>Hitung Lingkaran</span><br>
                <label for="">Phi = 3.14</label><br>
                <label for="jari">Jari-Jari</label><br>
                <input type="number" name="jari"><br>
                <input type="submit" name="luas_lingkaran" value="Hitung Luas">
                <input type="submit" name="kel_lingkaran" value="Hitung Kel">
            </form>
            <div class="hasil">
                <?php 
                    if(isset($_POST['luas_lingkaran'])){
                        $n1 = $_POST['jari'];
                        // $n2 = $_POST['angka2'];
                        $hasil = new LuasLingkaran($n1);
                    }
                ?>
            </div>
        </div>
    <!-- </div> -->

    <!-- <input type="text" value="PERSEGI">
    <div id="content"> -->
        <div class="persegi">
            <form action="" method="post">
                <span>Hitung Persegi Panjang</span><br>
                <label for="panjang">Panjang</label><br>
                <input type="number" name="panjang"><br>
                <label for="lebar">Lebar</label><br>
                <input type="number" name="lebar"><br>
                <input type="submit" name="luas_persegi_panjang" value="Hitung Luas">
                <input type="submit" name="kel_persegi_panjang" value="Hitung Kel">
            </form>
            <div class="hasil">
                <?php 
                    if(isset($_POST['luas_persegi_panjang'])){
                        $n1 = $_POST['panjang'];
                        $n2 = $_POST['lebar'];
                        $hasil = new LuasPersegiPanjang($n1, $n2);
                    }
                ?>
                <?php 
                    if(isset($_POST['kel_persegi_panjang'])){
                        $n1 = $_POST['panjang'];
                        $n2 = $_POST['lebar'];
                        $hasil = new KelPersegiPanjang($n1, $n2);
                    }
                ?>
            </div>
        </div>
    <!-- </div> -->

    <!-- <input type="text" value="SEGITIGA">
    <div id="content"> -->
        <div class="segitiga">
            <form action="" method="post">
                <span>Hitung Segitiga</span><br>
                <label for="alas">Alas</label><br>
                <input type="number" name="alas"><br>
                <label for="tinggi">Tinggi</label><br>
                <input type="number" name="tinggi"><br>
                <input type="submit" name="luas_segitiga" value="Hitung Luas">
                <input type="submit" name="kel_segitiga" value="Hitung Kel">
            </form>
            <div class="hasil">
                <?php 
                    if(isset($_POST['luas_segitiga'])){
                        $n1 = $_POST['alas'];
                        $n2 = $_POST['tinggi'];
                        $hasil = new LuasSegitiga($n1, $n2);
                    }
                ?>
                <?php 
                    if(isset($_POST['kel_segitiga'])){
                        $n1 = $_POST['alas'];
                        $n2 = $_POST['tinggi'];
                        $hasil = new KelSegitiga($n1, $n2);
                    }
                ?>
            </div>
        </div>
    </div>
    <!-- </div> -->
</body>
</html>