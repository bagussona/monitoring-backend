<!-- 1. Rumus Konversi Suhu dari Celcius ke Reamur

    R = (4/5) C

    Diketahui :
    R adalah Suhu dlm Skala Reamur
    C adalah Suhu dlm Skala Celcius -->

<!-- 2. Rumus Konversi Suhu Celcius ke Fahrenheit

    F = (9/5) C + 32

    Diketahui :
    F adalah Suhu dlm Skala Fahrenheit
    C adalah Suhu dlm Skala Celcius -->

<!-- 3. Rumus Konversi Suhu Celcius ke Kelvin

    K = C + 273

    Diketahui :
    K adalah Suhu dlm Skala Kelvin
    C adalah Suhu dlm Skala Celcius -->

<?php

$C = 34;
$R = 4 * $C /5;
$F = 9 * $C /5 + 32;
$K = $C + 273;

echo "Suhu $C celcius <br>";
echo "<br><br><br>";
echo "diconvert ke reamur jadi? <br>";
echo "$R reamur<br>";
echo "<br><br><br>";
echo "diconvert ke fahreinheit jadi? <br>";
echo "$F fahreinheit<br>";
echo "<br><br><br>";
echo "diconvert ke kelvin jadi? <br>";
echo "$K kelvin<br>";


?>
