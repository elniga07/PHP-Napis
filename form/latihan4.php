<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="latihan4.css">
    <title>Raport</title>
</head>
<body>
    <center>
    <form action="" method="post">
    <center><h2>Nilai Ujian Nasional</h2></center>
    <table align="center">
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td><input type="text" name="kelas" value=""></td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>:</td>
            <td><select name="jurusan">
                <option  value = "RPL">Rekayasa Perangkat Lunak</option>
                <option  value = "TBSM">Teknik Ber Skala Motor</option>
                <option  value = "TKRO">Teknik Kendaraan Ringan </option>
            </select></td>
        </tr>

        
        <tr>
            <td style="padding-top:15px;padding-bottom:15px;"><h3>Nilai Ujian</h3></td>
        </tr>
        <tr>
            <td>Nilai Bahasa Indonesia</td>
            <td>:</td>
            <td><input type="number" name="indo"></td>
        </tr>
        <tr>
            <td>Nilai Bahasa Inggris</td>
            <td>:</td>
            <td><input type="number" name="inggris"></td>
        </tr>
        <tr>
            <td>Nilai Matematika</td>
            <td>:</td>
            <td><input type="number" name="mtk"></td>
        </tr>
        <tr>
            <td>Nilai Produktif</td>
            <td>:</td>
            <td><input type="number" name="pro"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><button name="simpan">Simpan</button></td>
        </tr>
    </table>
    </form>
    </center>
</body>
</html>
<?php

if (isset($_POST["simpan"])) {
    $nama = $_POST["nama"];
    $kelas = $_POST["kelas"];
    $jurusan = $_POST["jurusan"];
    $nilaib = $_POST["indo"];
    $nilaii = $_POST["inggris"];
    $nilaim = $_POST["mtk"];
    $nilaip = $_POST["pro"];

    $rata = $nilaib + $nilaii + $nilaim + $nilaip;
    $rata /=4;


    echo"
    <table align='center' cellpadding='10' style='background-color: white; border-radius: 10px;width: 75%; margin-top: 10%;'>
    <tr>
        <td><h2>Hasil Nilai Ujian Nasional</h2></td>
    </tr>
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td>$nama</td>
    </tr>
    <tr>
        <td>Kelas</td>
        <td>:</td>
        <td>$kelas</td>
    </tr>
    <tr>
        <td>Jurusan</td>
        <td>:</td>
        <td>$jurusan</td>
    </tr>
    <tr>
        <td>";if ($nilaib >= 100) {
            echo"Nilai Tidak Valid";
        }elseif ($nilaii >= 100) {
            echo"Nilai Tidak Valid";
        }elseif ($nilaim >= 100) {
            echo"Nilai Tidak Valid";
        }elseif ($nilaip >= 100) {
            echo"Nilai Tidak Valid";
        }else {
            echo"<tr>
            <td>Nilai Bahasa Indonesia</td>
            <td>:</td>
            <td>$nilaib</td>
        </tr>
        <tr>
            <td>Nilai Bahasa Inggris</td>
            <td>:</td>
            <td>$nilaii</td>
        </tr>
        <tr>
        <td>Nilai Matematika</td>
        <td>:</td>
        <td>$nilaim</td>
    </tr>
    <tr>
        <td>Nilai Produktif</td>
        <td>:</td>
        <td>$nilaip</td>
    </tr>
            <tr>
            <td>Nilai Rata - Rata</td>
            <td>:</td>
            <td>$rata</td>
        </tr>
        <tr>
        <td>Status</td>
        <td>:</td>
        <td>"; if ($rata > "100") {
            echo"Anda Ngecheat";
        }elseif ($rata >= "90") {
            echo"Anda Lulus Grade A!!";
        }elseif ($rata >= "75") {
            echo"Anda Lulus Grade B!!";
        }elseif ($rata >= "50") {
            echo"Anda Remedial Grade C";
        }else {
            echo"Anda Kocak";
        }"
    </td>";
        }"
    </tr>
</table>";

}


?>