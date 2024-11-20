<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Rapot Siswa</title>
</head>
<body>
    <center><h1>Rapot Siswa</h1>
    <form action="validasi11.php" method="post">
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td><input type="text" name="kelas"></td>
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
    </table>
    <h2>Nilai Matematika</h2>
    <table>
        <tr>
            <td>Nilai Harian</td>
            <td>:</td>
            <td><input type="number" name="hm"></td>
        </tr>
        <tr>
            <td>Nilai Tugas</td>
            <td>:</td>
            <td><input type="number" name="tm"></td>
        </tr>
        <tr>
            <td>Nilai UTS</td>
            <td>:</td>
            <td><input type="number" name="um"></td>
        </tr>
        <tr>
            <td>Nilai UAS</td>
            <td>:</td>
            <td><input type="number" name="am"></td>
        </tr>
    </table>
    <h2>Nilai Bahasa Indonesia</h2>
    <table>
        <tr>
            <td>Nilai Harian</td>
            <td>:</td>
            <td><input type="number" name="hb"></td>
        </tr>
        <tr>
            <td>Nilai Tugas</td>
            <td>:</td>
            <td><input type="number" name="tb"></td>
        </tr>
        <tr>
            <td>Nilai UTS</td>
            <td>:</td>
            <td><input type="number" name="ub"></td>
        </tr>
        <tr>
            <td>Nilai UAS</td>
            <td>:</td>
            <td><input type="number" name="ab"></td>
        </tr>
    </table>
    <h2>Nilai Bahasa Inggris</h2>
    <table>
        <tr>
            <td>Nilai Harian</td>
            <td>:</td>
            <td><input type="number" name="hi"></td>
        </tr>
        <tr>
            <td>Nilai Tugas</td>
            <td>:</td>
            <td><input type="number" name="ti"></td>
        </tr>
        <tr>
            <td>Nilai UTS</td>
            <td>:</td>
            <td><input type="number" name="ui"></td>
        </tr>
        <tr>
            <td>Nilai UAS</td>
            <td>:</td>
            <td><input type="number" name="ai"></td>
        </tr>
    </table>
    <h2>Nilai Produktif</h2>
    <table>
        <tr>
            <td>Nilai Harian</td>
            <td>:</td>
            <td><input type="number" name="hp"></td>
        </tr>
        <tr>
            <td>Nilai Tugas</td>
            <td>:</td>
            <td><input type="number" name="tp"></td>
        </tr>
        <tr>
            <td>Nilai UTS</td>
            <td>:</td>
            <td><input type="number" name="up"></td>
        </tr>
        <tr>
            <td>Nilai UAS</td>
            <td>:</td>
            <td><input type="number" name="ap"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="simpan" value="Simpan"></td>
        </tr>
    </table>
</form>
    </center>
</body>
</html>