<?php


$kota = [
    1 => "palembang", "semarang", "palu", "medan", "gorontalo", "bandung"
];

for ($i = 1; $i <= count($kota); $i++) {
    echo $kota[$i];
    echo "<br>";
}

foreach ($kota as $data) {
    echo $data, "<br>";
}
