<?php

$jurusan = "TBSM";
$kelas = "10";

    if ($jurusan == "RPL") {

        if ($kelas == "10") {
            echo"Ini kelas 10 RPL";
        }elseif ($kelas == "11") {
            echo"Ini kelas 11 RPL";
        }elseif ($kelas == "12") {
            echo"Ini kelas 12 RPL";
        }else {
            echo"Kelas Tidak Tidak Tersedia";
        }
        
    }elseif ($jurusan == "TKRO") {

        if ($kelas == "10") {
            echo"Ini kelas 10 TKRO";
        }elseif ($kelas == "11") {
            echo"Ini kelas 11 TKRO";
        }elseif ($kelas == "12") {
            echo"Ini kelas 12 TKRO";
        }else {
            echo"Kelas Tidak Tidak Tersedia";
        }
        
    }elseif ($jurusan == "TBSM") {

        if ($kelas == "10") {
            echo"Ini kelas 10 TBSM";
        }elseif ($kelas == "11") {
            echo"Ini kelas 11 TBSM";
        }elseif ($kelas == "12") {
            echo"Ini kelas 12 TBSM";
        }else {
            echo"Kelas Tidak Tidak Tersedia";
        }
        
    }else {
        echo"Jurusan Tidak Tersedia";
    }




?>