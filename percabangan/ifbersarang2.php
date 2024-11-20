<?php

$provinsi = "";
$kota = "";

    if ($provinsi == "Jawa barat") {
        if ($kota == "Bandung") {
            echo"Selamat Datang Di Kota Bandung Provinsi Jawa barat";
        }elseif ($kota == "Cimahi") {
            echo"Selamat Datang Di Cimahi Provinsi Jawa barat";
        }elseif ($kota == "Bogor") {
            echo"Selamat Datang Di Bogor Provinsi Jawa barat";
        }elseif ($kota == "Depok") {
            echo"Selamat Datang Di Depok Provinsi Jawa barat";
        }elseif ($kota == "Bekasi") {
            echo"Selamat Datang Di Bekasi Provinsi Jawa barat";
        }else {
            echo"Kota Tidak Ada";
        }
    }elseif ($provinsi == "Jawa tengah") {
        if ($kota == "Semarang") {
            echo"Selamat Datang Di Semarang Provinsi Jawa tengah";
        }elseif ($kota == "Tegal") {
            echo"Selamat Datang Di Tegal Provinsi Jawa tengah";
        }elseif ($kota == "Karanganyar") {
            echo"Selamat Datang Di Karanganyar Provinsi Jawa tengah";
        }elseif ($kota == "Pekalongan") {
            echo"Selamat Datang Di Pekalongan Provinsi Jawa tengah";
        }elseif ($kota == "Salatiga") {
            echo"Selamat Datang Di Salatiga Provinsi Jawa tengah";
        }else {
            echo"Kota Tidak Ada";
        }
        
    }elseif ($provinsi == "Jawa timur") {
        if ($kota == "Surabaya") {
            echo"Selamat Datang Di Kota Surabaya Provinsi Jawa timur";
        }elseif ($kota == "Blitar") {
            echo"Selamat Datang Di Kota Surabaya Provinsi Jawa timur";
        }elseif ($kota == "Kediri") {
            echo"Selamat Datang Di Kediri Provinsi Jawa timur";
        }elseif ($kota == "Madiun") {
            echo"Selamat Datang Di Madiun Provinsi Jawa timur";
        }elseif ($kota == "Malang") {
            echo"Selamat Datang Di Malang Provinsi Jawa timur";
        }else {
            echo"Kota Tidak Ada";
        }
        
    }else{
        echo"Provinsi Tidak Ada";
    }




?>