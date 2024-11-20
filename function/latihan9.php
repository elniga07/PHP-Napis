<?php

function persegi_panjang($a,$b){
    echo "<b>Menghitung Luas Persegi Panjang </b> <br>
    Rumus : P x L <br>
    Panjang : $a<br>
    Lebar : $b<br>";
    $hasil = $a * $b;
    echo "Hasilnya $hasil";
    echo "<hr>";

}
function persegi($a){
    echo "<b>Menghitung Luas Persegi </b> <br>
    Rumus : S x S <br>
    Sisi : $a<br>";
    $hasil = $a * $a;
    echo "Hasilnya $hasil";
    echo "<hr>";

}
function lingkaran($a){
    echo "<b>Menghitung Luas Lingkaran </b> <br>
    Rumus : V x r x r <br>
    jari-jari : $a<br>";
    $hasil = 22/7 * $a * $a;
    echo "Hasilnya $hasil";
    echo "<hr>";

}
function segitiga($a,$b){
    echo "<b>Menghitung Luas Segitiga </b> <br>
    Rumus : A x T /2 <br>
    Alas : $a<br>
    Tinggi : $b<br>";
    $hasil = $a * $a / 2;
    echo "Hasilnya $hasil";
    echo "<hr>";

}
persegi_panjang(10,5);
persegi(20);
lingkaran(7);
segitiga(15,20);





?>