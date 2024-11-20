<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="validasi5.css">
    <title>Stroke Gaji</title>
</head>
<body>
    
</body>
</html>
<?php

if (isset($_POST["proses"])) {
$no = $_POST["no"];
$nama = $_POST["nama"];
$unit = $_POST["unit"];
$tanggal = $_POST["tanggal"];
$jabatan = $_POST["jabatan"];
$lama = $_POST["lama"];
$status = $_POST["status"];
$bpjs = $_POST["bpjs"];
$pinjaman = $_POST["pinjaman"];
$tabungan = $_POST["tabungan"];
$lainnya = $_POST["lainya"];

switch ($jabatan) {
    case 'Kepala Sekolah':
        $gaji = 10000000;
        break;
    case 'Wakasek':
        $gaji = 7500000;
        break;
    case 'Guru':
        $gaji = 5000000;
        break;
    case 'OB':
        $gaji = 2500000;
        break;
    default:
        $gaji = 0;
        break;
}

if ($lama >= 5) {
    $tunjangan = 1000000;
}else{
    $tunjangan = 0;
}
if ($status == "Tetap") {
    $bonus = 500000;
} else{
    $bonus = 0;
}

$Gaji_kotor = $gaji + $tunjangan + $bonus;

$total_potongan = $bpjs + $pinjaman + $tabungan + $lainnya;

$gaji_bersih = $Gaji_kotor -  $total_potongan;

echo"<table align='center' style='color:blue;'>
        <tr align='center'>
            <td colspan='2' bgcolor='grey' style='color:black;'><h3>$nama</h3></td>
        </tr>
        <tr>
            <td colspan='2' align='center'><h3>Primary card title</h3></td>
        </tr>
        <tr>
            <td>No</td>
            <td>:$no</td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:$nama</td>
        </tr>
        <tr>
            <td>Unit Pendidikan</td>
            <td>:$unit</td>
        </tr>
        <tr>
            <td>Tanggal Gaji</td>
            <td>:$tanggal</td>
        </tr>
        <tr>
            <td colspan='2' align='center'><h1><i>Gaji</i></h1></td>
        </tr>
        <tr>
            <td>Jabatan</td>
            <td>:$jabatan</td>
        </tr>
        <tr>
            <td>Gaji</td>
            <td>:$gaji</td>
        </tr>
        <tr>
            <td>Lama Kerja</td>
            <td>:$lama</td>
        </tr>
        <tr>
            <td>Tunjangan Lama Kerja</td>
            <td>:$tunjangan</td>
        </tr>
        <tr>
            <td>Status Kerja</td>
            <td>:$status</td>
        </tr>
        <tr>
            <td>Bonus</td>
            <td>:$bonus</td>
        </tr>
        <tr>
            <td>Gaji Kotor</td>
            <td>:$Gaji_kotor</td>
        </tr>
        <tr>
            <td colspan='2' align='center'><h1>Potongan</h1></td>
        </tr>
        <tr>
            <td>BPJS</td>
            <td>:$bpjs</td>
        </tr>
        <tr>
            <td>Pinjaman</td>
            <td>:$pinjaman</td>
        </tr>
        <tr>
            <td>Tabungan</td>
            <td>:$tabungan</td>
        </tr>
        <tr>
            <td>Lainya</td>
            <td>:$lainnya</td>
        </tr>
        <tr>
            <td>Total Potongan</td>
            <td>: <b> $total_potongan </b></td>
        </tr>
        <tr>
            <td colspan='2' align='center'><h1>Total</h1></td>
        </tr>
        <tr>
            <td><b>Gaji Bersih</b></td>
            <td> <b>:$gaji_bersih</b></h1></td>
        </tr>
    </table>";


}


?>