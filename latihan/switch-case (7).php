<?php

$bulan = date("m");

"<br>";

switch ($bulan) {
    case '01':
        $namabulan = "Januari";
        break;
    case '02':
        $namabulan = "Februari";
        break;
    case '03':
        $namabulan = "Maret";
        break;
    case '04':
        $namabulan = "April";
        break;
    case '05':
        $namabulan = "Mei";
        break;
    case '06':
        $namabulan = "Juni";
        break;
    case '07':
        $namabulan = "Juli";
        break;
    case '08':
        $namabulan = "Agustus";
        break;
    case '09':
        $namabulan = "September";
        break;
    case '10':
        $namabulan = "Oktober";
        break;
    case '11':
        $namabulan = "November";
        break;
    case '12':
        $namabulan = "Desember";
        break;
    default:
        $namabulan = "tidak dikenal";
        break;
}

echo $namabulan;
