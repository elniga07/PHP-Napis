<?php

$data = ' [
    {
        "nama": "Nafis",
        "alamat": "Cimahi"
    },
    {
        "nama": "Dudi",
        "alamat": "Bandung"
    }
] ';

$list = json_decode($data);

foreach($list as $siswa){
    echo "Nama : {$siswa ->nama} <br>";
    echo "Alamat : {$siswa ->alamat} <br>";
    echo "<hr>";

}



?>