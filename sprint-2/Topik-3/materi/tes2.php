<?php

function rerataNilai (array $listNilai) {
  if (count($listNilai) < 1) {
    # jika array kosong, dia akan melempar objek Exception baru
    throw new Exception('Array tidak boleh kosong!');
  }

  # hitung rata-rata
  $total = 0;
  foreach ($listNilai as $nilai) {
    $total += $nilai;
  }

  return $total / count($listNilai);
}

try {
    $arrayKosong = [1];
    # panggil fungsi rerataNilai() dengan parameter array kosong
    $rataRata = rerataNilai($arrayKosong);
  } catch (Exception $error) {
    echo "Error: {$error->getMessage()}";
  }