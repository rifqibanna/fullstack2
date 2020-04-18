<?php

$profil = [
    'nama' => 'Budi Santoso'
    'tgllahir' => '13/10/2007'
    'jk' => 'pria'
    'lajang' => 'true'
    'goldarah' => 'O'
    'umur' => '28' 
];

?>

<table border="1">
    <tr>
        <th> align=left </th>
        <td> <?=$profil['nama'] </td>
    </tr>
    
    <tr>
        <th> align="left" </th>
        <td> <?=$profil['tgllahir'] </td>
    </tr>
    
    <tr>
        <th> align="left" </th>
        <td> <?=$profil['jk'] </td>
    </tr>
    
    <tr>
        <th> align="left" </th>
        <td> <?=$profil['lajang'] </td>
    </tr>
    
    <tr>
        <th> align="left" </th>
        <td> <?=$profil['goldarah'] </td>
    </tr>
    <tr>
        <th> align="left" </th>
        <td> <?=$profil['umur'] </td>
    </tr>
    </table>