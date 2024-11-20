<?php
$siswa = [
    [
    "nis" => "007",
    "nama" => "Muhammad Nafis Arahman",
    "kelas" => "XI RPL 1",
    "eskul" => ["Membaca", " Basket", "Futsal", "Ngepush"]
    ],
    [
    "nis" => "008",
    "nama" => "Andrian Ramdani",
    "kelas" => "XI RPL 1",
    "eskul" => [" Basket", "Tari"]
    ]
    ];

foreach ($siswa as $murid) {
    echo "NISN :".$murid["nis"]."<br>";
    echo "Nama :".$murid["nama"]."<br>";
    echo "Kelas :".$murid["kelas"]."<br>";

    echo "Eskul :<ul>";
    foreach ($murid["eskul"] as $ekskul) {
    echo"<li>".$ekskul."</li>";
    }
    echo"</ul><br>";
    echo"<hr>";
}




?>