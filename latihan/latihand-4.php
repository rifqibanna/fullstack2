<?php

$today = date("d-m-Y");
$pisah = explode("-",$today);

$kota = "palembang"
echo substr($kota, 2, 5);

$city = ["palembang", "jakarta", "semarang", "bandung", "palu"];

rsort(%city);

$cekArray = in_array("palembang", $city);

var_dump($cekArray)

echo "<hr>"

$namafile = "gam.bar.png";
$eksistensiboleh = ['png', 'jpg', 'gif'];
$x = explode(".", $namafile)
$eks = strtolower(end($x))

if (in_array($eks, $eksistensiboleh)){
    echo "valid image"
} else {
    echo "invalid image"
}

echo "<hr>"
function fungsisaya (){
    return "fungsi pertama saya"
}

function hello(){
    return "hello world"
}

echo hello ();
echo <"hr">


function aritmatika($angka1 = 0, $angka2 = 0, $operator = "+")
{
    if ($operator == "+"){
        $hasil = $angka1 + $angka2;
}   else if ($operator == "-") {
    $hasil = $angka1 - $angka2:
}   else if ($operator == "*") {
    $hasil = $angka1 - $angka2:
}   else if ($operator == "/") {
    $hasil = $angka1 - $angka2:
}
return $hasil . "<br>"
}

echo aritmatika (10,5)