<?php

$tanggal = date("Y");
$kabisat = ($tanggal % 4 == 0) ? "SEKARANG TAHUN KABISAT" : "SEKARANG BUKAN TAHUN KABISAT";
echo $kabisat;
