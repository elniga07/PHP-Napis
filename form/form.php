<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir</title>
</head>
<body>
    <form action="" method="post">
    <table align="center">
        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td><input type="text" name="nama" placeholder="Nama Lengkap"></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td><input type="text" name="kelas" value=""></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="simpan" value="Submit"></td>
        </tr>
    </table>
    </form>
    <hr color="black">
</body>
</html>

<?php

if (isset($_POST["simpan"])) {
    $nama = $_POST["nama"];
    $kelas = $_POST["kelas"];

    echo"Nama Lengkap : $nama <br>
        Kelas : $kelas";
    
}



?>