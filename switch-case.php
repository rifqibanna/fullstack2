<?php

$month = date ("F");
switch ($month) {
    case 'january' : $month = "januari"; break;
    case 'february' : $month = "februari"; break;
    case 'march' : $month = "maret"; break;
    case 'april' : $month = "april"; break;
    case 'may' : $month = "mei"; break;
    case 'june' : $month = "june"; break;
    case 'july' : $month = "juli"; break;
    case 'august' : $month = "agustus"; break;
    case 'september' : $month = "september"; break;
    case 'otcober' : $month = "oktober"; break;
    case 'november' : $month = "november"; break;
    case 'december' : $month = "december"; break;
    default ; $month ="kiamat";
}

echo "hari ini hari <b> $month </b>";


