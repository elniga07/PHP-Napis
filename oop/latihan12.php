<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penggajihan Karyawan Yayasan Assalaam</title>
    <link rel="stylesheet" href="latihan12.css">
</head>
<body>
    <form action="validasi12.php" method="post">
        <fieldset>
        <h2>Data Diri Calon Pendaftaran</h2>
        <table>
            <tr>
                <td>Jurusan</td>
                <td> : </td>
                <td><select name="jurusan" required>
                <option  value = "Rekayasa Perangkat Lunak">RPL</option>
                <option  value = "Teknik Ber Skala Motor">TBSM</option>
                <option  value = "Teknik Kendaraan Ringan">TKRO</option>
                </select></td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td> : </td>
                <td><input type="text" name="nama" placholder="Nama Lengkap" required></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td> : </td>
                <td><input type="radio" name ="jenis" value="Laki" required>Laki-Laki <br> 
                <input type="radio" name ="jenis" value="Perempuan" required>Perempuan</td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td> : </td>
                <td><input type="text" name="tempat" placholder="Tempat Lahir" required></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td> : </td>
                <td><input type="date" name="tanggal" placholder="Tanggal Lahir" required></td>
            </tr>
            <tr>
                <td>Nomor HP siswa yang bisa dihubungi</td>
                <td> : </td>
                <td><input type="number" name="no" placholder="HP" required></td>
            </tr>
            <tr>
                <td>Email</td>
                <td> : </td>
                <td><input type="text" name="email" placholder="Email" required></td>
            </tr>
        </table>
        </fieldset>
        <fieldset>
            <h2>Alamat Calon Pendaftar</h2>
            <table>
            <tr>
                <td>Provinsi</td>
                <td> : </td>
                <td>
                    <select name="provinsi" required>
                        <option value="-">Pilih Provinsi</option>
                        <option value="Aceh">Aceh</option>
                        <option value="Sumatera Utara">Sumatera Utara</option>
                        <option value="Sumatera Barat">Sumatera Barat</option>
                        <option value="Riau">Riau</option>
                        <option value="Kepulauan Riau">Kepulauan Riau</option>
                        <option value="Jawa Barat">Jawa Barat</option>
                        <option value="Jawa Tengah">Jawa Tengah</option>
                        <option value="Jawa Timur">Jawa Timur</option>
                        <option value="Bali">Bali</option>
                        <option value="Papua">Papua</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Kabupaten/Kota</td>
                <td> : </td>
                <td>
                    <select name="kota" required>
                        <option value="-">Pilih Kota</option>
                        <option value="Bandung">Bandung</option>
                        <option value="Bandung Barat">Bandung Barat</option>
                        <option value="Bekasi">Bekasi</option>
                        <option value="Bogor">Bogor</option>
                        <option value="Ciamis">Ciamis</option>
                        <option value="Cianjur">Cianjur</option>
                        <option value="Cimahi">Cimahi</option>
                        <option value="Cirebon">Cirebon</option>
                        <option value="Garut">Garut</option>
                        <option value="Indramayu">Indramayu</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Kecamatan</td>
                <td> : </td>
                <td>
                    <select name="kecamatan" required>
                        <option value="Andir">Andir</option>
                        <option value="Antapani">Antapani</option>
                        <option value="Arcamanik">Arcamanik</option>
                        <option value="Astanaanyar">Astanaanyar</option>
                        <option value="Babakan Ciparay">Babakan Ciparay</option>
                        <option value="Bandung Kidul">Bandung Kidul</option>
                        <option value="Bandung Kulon">Bandung Kulon</option>
                        <option value="Bandung Wetan">Bandung Wetan</option>
                        <option value="Batununggal">Batununggal</option>
                        <option value="Bojongloa Kaler">Bojongloa Kaler</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Desa</td>
                <td> : </td>
                <td>
                    <select name="desa" required>
                        <option value="Ciburial">Ciburial</option>
                        <option value="Cileunyi">Cileunyi</option>
                        <option value="Ciparay">Ciparay</option>
                        <option value="Margaluyu">Margaluyu</option>
                        <option value="Mekarsari">Mekarsari</option>
                        <option value="Cangkuang">Cangkuang</option>
                        <option value="Pangalengan">Pangalengan</option>
                        <option value="Rancamanyar">Rancamanyar</option>
                        <option value="Sukamaju">Sukamaju</option>
                        <option value="Sukasari">Sukasari</option>
                    </select>
                </td>
            </tr>
                <tr>
                    <td>Kode Pos</td>
                    <td> : </td>
                    <td><input type="text" name="kode" placholder="Kode Pos" required></td>
                </tr>
            </table>
        </fieldset>
        <fieldset>
            <h2>Data Asal Sekolah</h2>
            <table>
                <tr>
                    <td>Nama Asal Sekolah</td>
                    <td><input type="text" name="asal" placholder="Nama Asal Sekolah" required></td>
                </tr>
                <tr>
                    <td>Alamat Sekolah</td>
                    <td><textarea name="alamat_sekolah" placeholder="Alamat Lengkap" required></textarea></td>
                </tr>
            </table>
        </fieldset>
        <fieldset>
            <h2>Data Orang Tua</h2>
            <table>
                <tr>
                    <td>Nama Lengkap Ayah / Ibu / Wali</td>
                    <td> : </td>
                    <td><select name="wali" required>
                <option  value = "Ibu">Ibu</option>
                <option  value = "Ayah">Ayah</option>
                <option  value = "Wali">Wali</option>
                </select></td>
                <td><input type="text" name="nama_wali" placholder="Nama Lengkap Wali" required></td>
                </tr>
                <tr>
                    <td>Pekerjaan Ayah / Ibu / Wali</td>
                    <td> : </td>
                    <td colspan="2"><input type="text" name="kerja" placholder="Perkerjaan" required></td>
                </tr>
                <tr>
                    <td>Nomor HP yang bisa dihubungi </td>
                    <td> : </td>
                    <td colspan="2"><input type="text" name="nomor" placholder="Nomor HP" required></td>
                </tr>
                <tr>
                    <td>Alamat Lengkap</td>
                    <td> : </td>
                    <td colspan="2"><textarea name="alamat_lengkap" placeholder="Alamat Lengkap" required></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="2"><input type="submit" value="Simpan" name="simpan"></td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>