<?php


$nTugas = 300;
$nUjian = 113.80;

$nAkhir = ($nTugas+$nUjian)/2;


echo $nAkhir ;
echo "<br>" ;
if ($nAkhir>=80 and $nAkhir <=100){
    echo "lulus terbaik" ;
} else if ($nAkhir < 80 AND $nAkhir<=60){
    echo "lulus";
}else if  ($nAkhir>=50 and $nAkhir <60) {
    echo "cukup";
}else if  ($nAkhir>=0 and $nAkhir <50) {
    echo "gagal";
}else if  ($nAkhir < 0) {
    echo "nilai kurang dari 0. silahkan cek kembali";
}else {
    echo "nilai anda tidak terdefinisi karna melebihi ambang batas";
}

