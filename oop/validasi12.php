<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="validasi12.css">
</head>
<body>
    <center>
    <h1>BIODATA CALON SISWA SMK ASSALAAM BANDUNG</h1>
    <fieldset>
<?php

if (isset($_POST["simpan"])) {
$jurusan = $_POST["jurusan"];
$nama = $_POST["nama"];
$jenis_kelamin = $_POST["jenis"];
$tempat_lahir = $_POST["tempat"];
$tanggal_lahir = $_POST["tanggal"];
$no_siswa = $_POST["no"];
$email = $_POST["email"];

$provinsi = $_POST["provinsi"];
$kota = $_POST["kota"];
$kecamatan = $_POST["kecamatan"];
$desa = $_POST["desa"];
$kode_pos = $_POST["kode"];

$nama_asal_sekolah = $_POST["asal"];
$alamat_asal_sekolah = $_POST["alamat_sekolah"];

$wali = $_POST["wali"];
$nama_wali = $_POST["nama_wali"];
$kerjaan_wali = $_POST["kerja"];
$nomor_telpon_wali = $_POST["nomor"];
$alamat_lengkap_wali = $_POST["alamat_lengkap"];


class data{

    public function data_siswa($a,$b,$c,$d,$e,$f,$g){

    echo "<table>
        <tr>
            <td colspan='3'><h2>Data Diri Siswa</h2></td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td> : </td>
            <td>$a</td>
        </tr>
        <tr>
            <td>Nama</td>
            <td> : </td>
            <td>$b</td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td> : </td>
            <td>$c</td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td> : </td>
            <td>$d</td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td> : </td>
            <td>$e</td>
        </tr>
        <tr>
            <td>Nomor Telpon Siswa</td>
            <td> : </td>
            <td>$f</td>
        </tr>
        <tr>
            <td>Email</td>
            <td> : </td>
            <td>$g</td>
        </tr>";
    }
    public function alamat_siswa($a,$b,$c,$d,$e){
        echo "
        <tr>
            <td colspan='3'><h2>Alamat Siswa</h2></td>
        </tr>
        <tr>
            <td>Provinsi</td>
            <td> : </td>
            <td>$a</td>
        </tr>
        <tr>
            <td>Kab/Kota</td>
            <td> : </td>
            <td>$b</td>
        </tr>
        <tr>
            <td>Kecamatan</td>
            <td> : </td>
            <td>$c</td>
        </tr>
        <tr>
            <td>Desa</td>
            <td> : </td>
            <td>$d</td>
        </tr>
        <tr>
            <td>Kode Pos</td>
            <td> : </td>
            <td>$e</td>
        </tr>
        ";
    }
    public function asal_sekolah($a,$b){
        echo "<tr>
            <td colspan='3'><h2>Asal Sekolah Siswa</h2></td>
        </tr>
        <tr>
            <td>Nama Asal Sekolah</td>
            <td> : </td>
            <td>$a</td>
        </tr>
        <tr>
            <td>Alamat Sekolah</td>
            <td> : </td>
            <td>$b</td>
        </tr>";
    }
    public function data_orangtua($a,$b,$c,$d,$e){
        echo "
        <tr>
            <td colspan='3'><h2>Data Diri Orangtua Siswa</h2></td>
        </tr>
        <tr>
            <td>Diwakili Oleh</td>
            <td> : </td>
            <td>$a</td>
        </tr>
        <tr>
            <td>Nama Lengkap Wali</td>
            <td> : </td>
            <td>$b</td>
        </tr>
        <tr>
            <td>Perkerjaan Wali</td>
            <td> : </td>
            <td>$c</td>
        </tr>
        <tr>
            <td>Nomor HP Wali</td>
            <td> : </td>
            <td>$d</td>
        </tr>
        <tr>
            <td>Alamat Lengkap</td>
            <td> : </td>
            <td>$e</td>
        </tr>
        </table>";
    }
}
$cetak = new data();
echo $cetak->data_siswa($jurusan,$nama,$jenis_kelamin,$tempat_lahir,$tanggal_lahir,$no_siswa,$email);
echo $cetak->alamat_siswa($provinsi,$kota,$kecamatan,$desa,$kode_pos);
echo $cetak->asal_sekolah($nama_asal_sekolah,$alamat_asal_sekolah);
echo $cetak->data_orangtua($wali,$nama_wali,$kerjaan_wali,$nomor_telpon_wali,$alamat_lengkap_wali);
}


?>
</fieldset>
</center>
</body>
</html>