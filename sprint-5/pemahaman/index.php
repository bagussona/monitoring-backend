<?php

$app_path = "./";
$class = ["LuasPersegi\Persegi" => $app_path."class/LuasPersegi.php"];

spl_autoload_register(function($name) use ($class){
    $file = $class[$name];
include_once $file;
});

use LuasPersegi\Persegi;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="my.css">
    <title>Document</title>
</head>
<body>
    
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
                        $hasil = Persegi::luas($n1, $n2);
                    }
                ?>
                <?php 
                    if(isset($_POST['kel_persegi_panjang'])){
                        $n1 = $_POST['panjang'];
                        $n2 = $_POST['lebar'];
                        $hasil = Persegi::keliling($n1, $n2);
                    }
                ?>
            </div>
        </div>


</body>
</html>