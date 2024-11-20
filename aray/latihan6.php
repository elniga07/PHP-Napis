<?php

echo "<h1>Kumpulan Novel</h1>";

$buku = [
    [
        "judul" => "Dilan 1990",
        "penulis" => "Pidi Baiq",
        "tanggal" => "20 Desember 2018",
        "penerbit" => "Airlangga"
    ],
    [
        "judul" => "Dilan 1991",
        "penulis" => "Pidi Baiq",
        "tanggal" => "20 Desember 2019",
        "penerbit" => "Airlangga"
    ],
    [
        "judul" => "Milea",
        "penulis" => "Pidi Baiq",
        "tanggal" => "20 Desember 2021",
        "penerbit" => "Airlangga"
    ],
    [
        "judul" => "Ancika",
        "penulis" => "Pidi Baiq",
        "tanggal" => "20 Desember 2024",
        "penerbit" => "Airlangga"
    ],
    [
        "judul" => "Sangkuriang",
        "penulis" => "Yuliadi Soekardi",
        "tanggal" => "9 September 2002",
        "penerbit" => "Pustaka Setia"
    ]

];

foreach($buku as $novel){
    echo "Judul :".$novel["judul"]."<br>";
    echo "Penulis :".$novel["penulis"]."<br>";
    echo "Tanggal :".$novel["tanggal"]."<br>";
    echo "Penerbit :".$novel["penerbit"]."<br>";
    echo "<hr>";  
}




?>