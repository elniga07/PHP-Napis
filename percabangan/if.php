<?php

    ANGKA

    $a = 90;

    if ($a > 90) {
        echo"Grade A!";
    } else if ($a > 80) {
        echo"Grade B!";
    }

    Latihan

    $a = 95;

    if ($a > 100 || $a < 0) {
        echo"Nilai Tidak Valid";
    }else if ($a > 90) {
        echo"Grade A!";
    } else if ($a > 80) {
        echo"Grade B!";
    } else if ($a > 70) {
        echo"Grade C!";
    } else if ($a > 60) {
        echo"Grade D!";
    } else if ($a > 50) {
        echo"Grade E!";
    } else if ($a >= 0) {
        echo"Kacau!";
    }

    BUKAN ANGKA

    $password = "nafisgntng";

    if ($password == "nafisgntng") {
        echo"Password Anda Benar";
    } else {
        echo"Password Anda Salah"; 
    }


    $a = "merah";
    
    if ($a == "merah") {
        echo"Berhenti!";
    } else if ($a == "kunging") {
        echo"Siap-Siap!";
    } else if ($a == "hijau") {
        echo"Maju!";
    } else {
        echo"Lampu tidak ada";
    }

?>