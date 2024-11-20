<?php
$data = [
    [
    "nama" => "Jafar",
    "daftar" => [
        [
            "buah" => "Anggur",
            "anakbuah" => ["jenis1" => "Anggur Buruk",
                         "jenis2" => "Anggur Merah"]
        ]
    ]
    ],
    [
        "nama" => "Asep",
        "daftar" => [
                [
                    "buah" => "Alpukat",
                    "anakbuah" => ["jenis1" => "Alpukat hasem",
                                 "jenis2" => "Apel Merah"]
                ],
                [
                    "buah" => "Apel",
                    "anakbuah" => ["jenis1" => "Apel Buruk",
                                 "jenis2" => "Apel Merah"]
                ]
        ]
        ]
    ];

foreach ($data as $buah) {
    echo "Nama :".$buah["nama"]."<br>";
    echo "Daftar Buah Kesukaan :<ul>";
    foreach ($buah["daftar"] as $vaf) {
    echo "<li>".$vaf["buah"]."</li><br>";
    foreach ($vaf["anakbuah"] as $anak){
        echo "-".$anak."<br>";
    }
    }
    echo"</ul><br>";
    echo"<hr>";
}
?>
