<?php
//   error_reporting(0);

echo "isikan inputan ke 1: ";
$input1 = trim(fgets(STDIN));
echo "isikan inputan ke 2: ";
$input2 = trim(fgets(STDIN));
$hasil = ($input1 + $input2);


// if ($hasil < 10) {
//     throw new Error('Hasil tidak boleh < 10 !');
//   }

// class Bagus extends Exception{}
try {

if ($hasil < 10) {
    throw new Exception('Hasil tidak boleh < 10 !');
  }
    $hasil < 10;
  }
  catch (Exception $error) {
    echo "Error: {$error->getMessage()}";
  }