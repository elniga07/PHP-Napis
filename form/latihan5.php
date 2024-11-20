<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penggajihan Karyawan Yayasan Assalaam</title>
    <link rel="stylesheet" href="latihan5.css">
</head>
<body>
    <center><img src="y.png" ></center>
    <br>
    <center><h2>PENGGAJIHAN <br>
    GURU/KARYAWAN YAYASAN ASSALAAM</h2></center>
    <br>
    <form action="validasi5.php" method="post">
        <table align="center">
            <tr>
                <td colspan="2" bgcolor="grey">Data penggajihan</td>
            </tr>
            <tr>
                <td colspan="2">No</td>
            </tr>
            <tr>
                <td colspan="2"><input type="text" name="no" placeholder="No"></td>
            </tr>
            <tr>
                <td colspan="2">Nama</td>
            </tr>
            <tr>
                <td colspan="2"><input type="text" name="nama" placeholder="Nama"></td>
            </tr>
            <tr>
                <td colspan="2">Unit Pendidikan</td>
            </tr>
            <tr>
                <td colspan="2">
                <select name="unit">
                    <option>Pilih Unit Pendidikan</option>
                    <option value="TK">TK</option>
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                    <option value="SMA">SMA</option>
                    <option value="SMK">SMK</option>
                </select>
                </td>
            </tr>
            <tr>
                <td colspan="2">Tanggal Gaji</td>
            </tr>
            <tr>
                <td colspan="2"><input type="date" name="tanggal"></td>
            </tr>
            <tr>
                <td><table>
                    <tr>
                        <td>
                            <h2><i>Gaji</i></h2>
                        </td>
                    </tr>
                    <tr>
                <td>Jabatan</td>
            </tr>
            <tr>
            <td><select name="jabatan">
                    <option>Pilih Jabatan</option>
                    <option value="Kepala Sekolah">Kepala Sekolah</option>
                    <option value="Wakasek">Wakasek</option>
                    <option value="Guru">Guru</option>
                    <option value="OB">OB</option>
                </select></td>
            </tr>
            <tr>
                <td>Lama Kerja</td>
            </tr>
            <tr>
                <td><input type="number" name="lama" placeholder="Lama Kerja"></td>
            </tr>
            <tr>
                <td>Jabatan</td>
            </tr>
            <tr>
            <td><select name="status" placeholder="Pilih Status Kerja">
                    <option value="Tetap">Tetap</option>
                    <option value="Tidak Tetap">Tidak Tetap</option>
                </select></td>
            </tr>
                </table></td>
                <td>
                    <table>
                        <tr>
                            <td><h2><i>Potongan</i></h2></td>
                        </tr>
                        <td>BPJS</td>
                    </tr>
                    <tr>
                        <td><input type="number" name="bpjs"></td>
                    </tr>
                    <tr>
                    <td>Pinjaman</td>
                    </tr>
                    <tr>
                        <td><input type="number" name="pinjaman" placeholder="Pinjaman"></td>
                    </tr>
                    <tr>
                    <td>Tabungan</td>
                    </tr>
                    <tr>
                        <td><input type="number" name="tabungan" placeholder="Tabungan"></td>
                    </tr>
                    <tr>
                    <td>Lainya</td>
                    </tr>
                    <tr>
                        <td><input type="number" name="lainya" placeholder="Lainya"></td>
                    </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td><button name="proses" >Proses</button></td>
            </tr>
        </table>
    </form>
</body>
</html>