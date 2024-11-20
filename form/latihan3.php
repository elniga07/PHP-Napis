<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="latihan3.css">
    <title>Formulir</title>
</head>
<body>

    <form action="" method="post">
        <h2><center>Form Biodata Diri</center></h2>
    <table align="center">
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" class="inp"></td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td><input type="text" name="tempat" value="" class="inp"></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><input type="date" name="tanggal" value="" class="inp"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><input type="radio" name="jenis" value="Laki-Laki">Laki-Laki 
            <input type="radio" name ="jenis" value="Perempuan">Perempuan</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><textarea name="alamat" style="width: 205px; height: 100px;"></textarea></td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>:</td>
            <td><select name="agama">
                <option  value = "Islam">Islam</option>
                <option  value = "Kristen">Kristen</option>
                <option  value = "Konghucu">Konghucu</option>
                <option  value = "Hindu">Hindu</option>
                <option  value = "Budha">Budha</option>
            </select></td>
        </tr>
        <tr>
            <td>Pendidikan Terakhir</td>
            <td>:</td>
            <td><select name="pendidikan">
                <option value = "SD">SD</option>
                <option value = "SMP">SMP</option>
                <option value = "SMA">SMA</option>
                <option value = "SMK">SMK</option>
                <option value = "Universitas">Universitas</option>
            </select></td>
            </tr>
            <tr>
            <td>Status</td>
            <td>:</td>
            <td><select name="status">
                <option value = "Menikah">Menikah</option>
                <option value = "Pacar">Pacar</option>
                <option value = "Cerai">Cerai</option>
            </select></td>
        </tr>
            <tr>
            <td>Hobi</td>
            <td>:</td>
            <td><input type="checkbox" name="hobi" value="Membaca">Membaca 
            <input type="checkbox" name ="hobi" value="Menulis">Menulis 
            <input type="checkbox" name ="hobi" value="Ngepush">Ngepush</td>
        </tr>
        <tr>
            <td>Cita - Cita</td>
            <td>:</td>
            <td><select name="cita">
                <option value = "Programer">Programer</option>
                <option value = "Proplayer">Proplayer</option>
                <option value = "Presiden">Presiden</option>
            </select></td>
        </tr>
        <tr>
            <td>Kata - Kata Bijak</td>
            <td>:</td>
            <td><textarea name="kata" style="width: 205px; height: 100px;"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><button name="simpan">Kirim</button></td>
        </tr>
    </table>
    </form>
    <br><br><br>
    <hr color="black">
</body>
</html>

<?php

if (isset($_POST["simpan"])) {
    $nama = $_POST["nama"];
    $tempat = $_POST["tempat"];
    $tanggal = $_POST["tanggal"];
    $jenisk = $_POST["jenis"];
    $alamat = $_POST["alamat"];
    $agama = $_POST["agama"];
    $pendidikan = $_POST["pendidikan"];
    $status = $_POST["status"];
    $hobi = $_POST["hobi"];
    $cita = $_POST["cita"];
    $kata = $_POST["kata"];

    

    echo"<table align='center'>
    <tr>
        <td>Nama</td>
        <td>:$nama</td>
    </tr>
    <tr>
        <td>Tempat Lahir</td>
        <td>:$tempat</td>
    </tr>
    <tr>
        <td>Tanggal Lahir</td>
        <td>:$tanggal</td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>:$jenisk</td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:$alamat</td>
    </tr>
    <tr>
        <td>Agama</td>
        <td>:$agama</td>
    </tr>
    <tr>
        <td>Pendidikan Terakhir</td>
        <td>:$pendidikan</td>
    </tr>
    <tr>
        <td>Status</td>
        <td>:$status</td>
    </tr>
    <tr>
        <td>Hobi</td>
        <td>:$hobi</td>
    </tr>
    <tr>
        <td>Cita - Cita</td>
        <td>:$cita</td>
    </tr>
    <tr>
        <td>Kata - Kata Bijak</td>
        <td>:$kata</td>
    </tr>
</table>";
    
}
?>
