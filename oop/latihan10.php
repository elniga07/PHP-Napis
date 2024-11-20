<?php

class karyawan{

    public $potongan;
    public $gaji_bersih;

    public function gaji_pokok($a,$b,$e,$f){
        switch ($b) {
            case 'Direktur':
                $c = 10000000;
                break;
            case 'Manager':
                $c = 7500000;
                break;
            case 'Karyawan':
                $c = 5000000;
                break;
            case 'OB':
                $c = 2500000;
                break;
            default:
                $c = 0;
                break;
        }
        echo"<h1>Gaji Pokok</h1>";
        echo "Nama Karyawan : $a <br>
            Jabatan : $b <br>
            Gaji Pokok :$c <br>";
        echo"<hr>";
        switch ($e) {
            case 'S1':
                $d = 1000000;
                break;
            case 'SMA':
                $d = 750000;
                break;
            case 'SMP':
                $d = 500000;
                break;
            case 'SD':
                $d = 250000;
                break;
            default:
                $d = 0;
                break;
        }
        echo"<h1>Tunjangan</h1>";
        echo "Penididikan : $e <br>
        Tunjangan Pendidikan : $d <br>";
        echo "<hr>";
        echo"<h1>Potongan</h1>";
        echo "Tunjangan : $d <br>
        Pinjaman : $f <br>";
        $this->potongan = $d + $f;
        echo "Total Potongan : $this->potongan";
        echo "<hr>";
        echo"<h1>Gaji Bersih</h1>";
        $this->gaji_bersih = $c + $d - $this->potongan;
        echo "Total Gajih Bersih : $this->gaji_bersih";

    }
    
}
echo"<h1 align='center'>Penggajihan Karyawan</h1>";
$cetak = new karyawan();
$cetak->gaji_pokok("Muhammad Nafis. A","Direktur","S1",10000 );
echo "<hr>";


?>