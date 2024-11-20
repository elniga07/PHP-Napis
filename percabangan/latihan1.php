<html>
<fieldset>
    <legend><b>Hasil Raport Kelas XI RPL 1</b></legend> 
<?php

    $n = "Nafis Arahman";
    $k = "XI RPL 1";
    $nb = 85;
    $nbi = 90;
    $nm = 85;
    $np = 95;
    $rata = $nb + $nbi + $nm + $np;
    $rata /=4;

    echo"<br>
    Nama : $n <br>
    Kelas : $k <br>

    <table>
    <tr>
        <td>Nilai B.Indonesia</td>
        <td>: $nb</td>
    </tr>
    <tr>
        <td>Nilai B.Inggris </td>
        <td>: $nbi </td>
    </tr>
    <tr>
        <td>Nilai Matematika </td>
        <td>: $nm </td>
    </tr>
    <tr>
        <td>Nilai Produktif </td>
        <td>: $np </td>
    </tr>
    <tr>
        <td>_____________________ </td>
        <td>_____</td>
    </tr>
    <tr>
        <td>Nilai Rata - Rata </td>
        <td>: $rata </td>
    </tr>
</table>
    -------------------------------- --------<br>";

    if ($rata >= 75) {
        echo"Status : *Anda Lulus*";
    } else {
        echo"Status : *Maaf Anda Tidak Lulus*";
    }


?>
</fieldset>
</html>