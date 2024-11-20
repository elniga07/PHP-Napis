<?php

class ppdb{

    public function data($nama,$jr,$tanggal,$tempat,$jk,$nomor){
        echo "<h1>Data Diri</h1>
        Nama Lengkap : $nama <br>
        Jurusan : $jr <br>
        Tanggal Lahir: $tanggal <br>
        Tempat Lahir : $tempat <br>
        Jenis Kelamin : $jk <br>
        Nomor Siswa : $nomor";
    }
    public function alamat($provinsi,$kk,$kec,$desa,$alamat,$kode){
        echo "<h1>Alamat</h1>
        Provinsi : $provinsi <br>
        Kota / Kab : $kk <br>
        Kecamatan : $kec <br>
        Desa : $desa <br>
        Alamat : $alamat <br>
        Kode Pos : $kode";
    }
    public function asal_sekolah($asal_sekolah,$alamats){
        echo "<h1>Asal Sekolah</h1>
        Nama Asal Sekolah : $asal_sekolah <br>
        Alamat Sekolah : $alamats <br>";
    }
    public function data_ortu($namaa,$perkerjaan,$hp,$alort){
        echo "<h1>Data Orang Tua</h1>
        Nama Lengkap Ayah / Ibu / Wali : $namaa <br>
        Perkerjaan Ayah / Ibu / Wali : $perkerjaan <br>
        Nomor HP Orang tua : $hp <br>
        Alamat Lengkap Orang tua : $alort";
    }

}
$cetak = new ppdb();
echo $cetak -> data("Napis","RPL","07/07/2007","Cimahi","Laki - Laki","085724304030");
echo "<hr>";
echo $cetak -> alamat("Jawa Barat","Kota Bandung","BojongLoa Kaler","Suka Asih","Jl.Kopo Gg.Lapang 4","1350875");
echo "<hr>";
echo $cetak -> asal_sekolah("SMPN 24 Bandung","Suka Mulya Nomor 77");
echo "<hr>";
echo $cetak -> data_ortu("Jafar Ali Rahman","Wirausahawan","0889986512","Jl.Kopo Gg Lapang 4")

?>