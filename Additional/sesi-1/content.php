<?php

$page = isset($_GET['page']) ? $_GET(['page']) : 'awal';


switch ($page) {
    case 'awal':
        include "VIEW/Home.php";
        break;
    case 'home':
        include "VIEW/Home.php";
        break;
    case 'about':
        include "VIEW/about.php";
        break;
    case 'contact':
        include "VIEW/contact.php";
        break;

    default:
        include "VIEW/404.php";
        break;
}
