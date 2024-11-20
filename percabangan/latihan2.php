<html>

<?php
$n = "Muhammad Nafis Arahman";
$jk = "Laki-Laki";
$jenis = "minum";
$menu = "Jus";
$jumlah = "7";
$total1 = 10000 * $jumlah;
$total2 = 15000 * $jumlah;
$total3 = 20000 * $jumlah;
$total4 = 5000 * $jumlah;
$total5 = 7000 * $jumlah;
$total6 = 12000 * $jumlah;


echo"~~~~~~~RESTORAN SELALU RAME~~~~~~<br>";
echo"----------------------------------------------------------";




    if ($jenis == "makan") {
        if ($menu == "Nasi goreng") {
            echo"<table>
    <tr>
        <td>Nama</td>
        <td>: $n</td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>: $jk</td>
    </tr>
    <tr>
        <td>Jenis</td>
        <td>: $jenis</td>
    </tr>
    <tr>
        <td>Menu</td>
        <td>: $menu</td>
    </tr>
    <tr>
        <td>Harga</td>
        <td>: 10.000</td>
    </tr>
    <tr>
        <td>Jumlah</td>
        <td>: $jumlah</td>
    </tr>
    <tr>
        <td>-------------------------</td>
        <td>--------------------------------</td>
    </tr>
    <tr>
        <td>Total</td>
        <td>:$total1</td>
    </tr>
    <tr>
        <td>Diskon</td>
        <td>:"; if ($total1 >= 50000) {
            $diskon = $total1 / 100 * 20;
            $bayar = $total1 - $diskon;
            echo"$diskon";
        } else {
            echo"<tr>
            <td>Total Bayar</td>
            <td>:$total1</td>
        </tr>";
         }echo" </td>
    </tr>
    <tr>
        <td>-------------------------</td>
        <td>---------------------------------</td>
    </tr>
    <tr>
        <td>Total Bayar</td>
        <td>:$bayar</td>
    </tr>
</table>";
        }elseif ($menu == "Mie goreng") {
            echo"<table>
    <tr>
        <td>Nama</td>
        <td>: $n</td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>: $jk</td>
    </tr>
    <tr>
        <td>Jenis</td>
        <td>: $jenis</td>
    </tr>
    <tr>
        <td>Menu</td>
        <td>: $menu</td>
    </tr>
    <tr>
        <td>Harga</td>
        <td>: 15.000</td>
    </tr>
    <tr>
        <td>Jumlah</td>
        <td>: $jumlah</td>
    </tr>
    <tr>
        <td>-------------------------</td>
        <td>--------------------------------</td>
    </tr>
    <tr>
        <td>Total</td>
        <td>:$total2</td>
    </tr>
    <tr>
        <td>Diskon</td>
        <td>:"; if ($total2 >= 50000) {
            $diskon = $total2 / 100 * 20;
            $bayar = $total2 - $diskon;
            echo"$diskon";
        } else {
            echo"<tr>
            <td>Total Bayar</td>
            <td>:$total2</td>
        </tr>";
         }echo" </td>
    </tr>
    <tr>
        <td>-------------------------</td>
        <td>---------------------------------</td>
    </tr>
    <tr>
        <td>Total Bayar</td>
        <td>:$bayar</td>
    </tr>
</table>";
        }elseif ($menu == "Ayam goreng") {
            echo"<table>
    <tr>
        <td>Nama</td>
        <td>: $n</td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>: $jk</td>
    </tr>
    <tr>
        <td>Jenis</td>
        <td>: $jenis</td>
    </tr>
    <tr>
        <td>Menu</td>
        <td>: $menu</td>
    </tr>
    <tr>
        <td>Harga</td>
        <td>: 20.000</td>
    </tr>
    <tr>
        <td>Jumlah</td>
        <td>: $jumlah</td>
    </tr>
    <tr>
        <td>-------------------------</td>
        <td>--------------------------------</td>
    </tr>
    <tr>
        <td>Total</td>
        <td>:$total3</td>
    </tr>
    <tr>
        <td>Diskon</td>
        <td>:"; if ($total3 >= 50000) {
            $diskon = $total3 / 100 * 20;
            $bayar = $total3 - $diskon;
            echo"$diskon";
        } else {
            echo"<tr>
            <td>Total Bayar</td>
            <td>:$total3</td>
        </tr>";
         } echo" </td>
    </tr>
    <tr>
        <td>-------------------------</td>
        <td>---------------------------------</td>
    </tr>
    <tr>
        <td>Total Bayar</td>
        <td>:$bayar</td>
    </tr>
</table>";
        }else{
            echo"Anda Belum Memilih Menu Makanan";
        }

    }elseif ($jenis == "minum") {
        if ($menu == "Air mineral") {
            echo"<table>
    <tr>
        <td>Nama</td>
        <td>: $n</td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>: $jk</td>
    </tr>
    <tr>
        <td>Jenis</td>
        <td>: $jenis</td>
    </tr>
    <tr>
        <td>Menu</td>
        <td>: $menu</td>
    </tr>
    <tr>
        <td>Harga</td>
        <td>: 5.000</td>
    </tr>
    <tr>
        <td>Jumlah</td>
        <td>: $jumlah</td>
    </tr>
    <tr>
        <td>-------------------------</td>
        <td>--------------------------------</td>
    </tr>
    <tr>
        <td>Total</td>
        <td>:$total4</td>
    </tr>
    <tr>
        <td>Diskon 20%</td>
        <td>:"; if ($total4 >= 50000) {
            $diskon = $total4 / 100 * 20;
            $bayar = $total4 - $diskon;
            echo"$diskon";
        } else {
            echo"<tr>
            <td>Total Bayar</td>
            <td>:$total4</td>
        </tr>";
        }echo" </td>
    </tr>
</table>";
        }elseif ($menu == "Fresh tea") {
            echo"<table>
    <tr>
        <td>Nama</td>
        <td>: $n</td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>: $jk</td>
    </tr>
    <tr>
        <td>Jenis</td>
        <td>: $jenis</td>
    </tr>
    <tr>
        <td>Menu</td>
        <td>: $menu</td>
    </tr>
    <tr>
        <td>Harga</td>
        <td>: 7.000</td>
    </tr>
    <tr>
        <td>Jumlah</td>
        <td>: $jumlah</td>
    </tr>
    <tr>
        <td>-------------------------</td>
        <td>--------------------------------</td>
    </tr>
    <tr>
        <td>Total</td>
        <td>:$total5</td>
    </tr>
    <tr>
        <td>Diskon 20%</td>
        <td>:"; if ($total5 >= 50000) {
            $diskon = $total5 / 100 * 20;
            $bayar = $total5 - $diskon;
            echo"$diskon";
        } else {
            echo"<tr>
            <td>Total Bayar</td>
            <td>:$total5</td>
        </tr>";
        }echo" </td>
    </tr>
</table>";
        }elseif ($menu == "Jus") {
            echo"<table>
    <tr>
        <td>Nama</td>
        <td>: $n</td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>: $jk</td>
    </tr>
    <tr>
        <td>Jenis</td>
        <td>: $jenis</td>
    </tr>
    <tr>
        <td>Menu</td>
        <td>: $menu</td>
    </tr>
    <tr>
        <td>Harga</td>
        <td>: 12.000</td>
    </tr>
    <tr>
        <td>Jumlah</td>
        <td>: $jumlah</td>
    </tr>
    <tr>
        <td>-------------------------</td>
        <td>--------------------------------</td>
    </tr>
    <tr>
        <td>Total</td>
        <td>:$total6</td>
    </tr>
    <tr>
        <td>Diskon 20%</td>
        <td>:"; if ($total6 >= 50000) {
            $diskon = $total6 / 100 * 20;
            $bayar = $total6 - $diskon;
            echo"$diskon";
        } else {
            echo"<tr>
            <td>Total Bayar</td>
            <td>:$total6</td>
        </tr>";
        }echo" </td>
    </tr>
</table>";
        }else{
            echo"Anda Belum Memilih Menu Minuman";
        }
    }



   
?>
</html>