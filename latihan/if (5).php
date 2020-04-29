<?php

$nilaitugas = 90;
$nilaiujian = 90;

$nilaiakhir = ($nilaitugas + $nilaiujian) / 2;

if ($nilaiakhir >= 80 and $nilaiakhir <= 100) {
    echo "nilai anda $nilaiakhir , anda lulus terbaik";
} elseif ($nilaiakhir >= 60 and $nilaiakhir < 80) {
    echo "nilai anda $nilaiakhir, anda lulus";
} elseif ($nilaiakhir >= 0 and $nilaiakhir < 60) {
    echo "nilai anda $nilaiakhir,  anda tidak lulus";
} elseif ($nilaiakhir < 0) {
    echo "nilai anda tidak terdefinisi";
} else {
    echo "NILAI ANDA TIDAK TERDEFINISI";
}
