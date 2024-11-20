<?php

    $siswa = [
        [
            "nama" => "Muhammad Nafis Arahman",
            "jk" => "Laki - Laki",
            "kelas" => "XI RPL 1"
        ],
        [
            "nama" => "Andrian Ramdani",
            "jk" => "Laki - Laki",
            "kelas" => "XI RPL 1"
        ]
    ];

    foreach($siswa as $murid){
        echo "Nama :".$murid["nama"]."<br>";
        echo "Jenis Kelamin :".$murid["jk"]."<br>";
        echo "Kelas :".$murid["kelas"]."<br>";
        echo "<hr>";
    }



?>