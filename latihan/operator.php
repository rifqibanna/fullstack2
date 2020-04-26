<?php

$angka1 = 25;
$angka2 = 28;

$tambah = $angka1 + $angka2;
$kurang = $angka1 - $angka2;
$kali = $angka1 * $angka2;
$bagi = $angka1 / $angka2;
$modulus = $angka1 % $angka2;
$hasil = $angka2 + $angka1 * $angka2 / $angka1;

echo "hasil dari 25+28 adalah " . $tambah . "<br>";
echo $kurang . "<br>";
echo $kali . "<br>";
echo $bagi . "<br>";
echo $modulus . "<br>";
echo $hasil . "<br>";

echo "<hr>";

// OPERATOR PERBANDINGAN

$angka3 = 30;
$angka4 = 20;

var_dump($angka3 < $angka4);
var_dump($angka3 > $angka4);
var_dump($angka3 <> $angka4);
var_dump($angka3 <= $angka4);
var_dump($angka3 >= $angka4);
var_dump($angka3 == $angka4);

echo $angka3 < $angka4 . "<br>";
echo $angka3 > $angka4 . "<br>";
echo $angka3 <> $angka4 . "<br>";
echo $angka3 <= $angka4 . "<br>";
echo $angka3 >= $angka4 . "<br>";
echo $angka3 == $angka4 . "<br>";

// OPERATOR LOGIKA
//OR,XOR,AND,NOT

echo "<hr>";

$angka5 = 39;
$angka6 = 88;

var_dump(($angka5 == $angka6) xor ($angka6 < $angka5));
echo "<br>";
var_dump(($angka6 > $angka5) and ($angka5 < $angka6));
