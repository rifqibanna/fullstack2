<?php
$tanggal = date("Y");
$kabisat = ($tanggal % 4 == 0) ? "sekarang tahun kabisat" : "bukan tahun kabisat";

echo $kabisat;
