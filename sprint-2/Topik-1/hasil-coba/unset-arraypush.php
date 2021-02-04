<?php

$Array = ["Nomor1", "Nomor2", "Nomor3", "Nomor4"];

print_r($Array);

unset($Array[2]);

print_r($Array);

array_push($Array, "Nomor3");
sort($Array);
print_r($Array);