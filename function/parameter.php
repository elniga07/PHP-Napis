<?php

function biodata($nama,$tempat_lahir,$tanggal_lahir,$jk,$agama,$alamat,$hobi){
    echo"Nama : $nama<br>
    Tempat Lahir : $tempat_lahir<br>
    Tanggal Lahir : $tanggal_lahir<br>
    Jenis Kelamin : $jk<br>
    Agama : $agama<br>
    Alamat : $alamat<br>
    Hobi : $hobi";

}
function menghitung($a,$b){
    echo "Kalikan bilangan di bawah ini<br>";
    echo "Bilangan 1 : $a <br>
    Bilangan 2 : $b <br>";
    $hasil = $a * $b;
    echo "Hasilnya $a x $b = $hasil";
}

menghitung(50,30);




?>