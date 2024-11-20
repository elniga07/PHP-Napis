<?php

class bangun_datar{

    public $luas;

    public function persegi_panjang($a,$b){
        echo "<b>Menghitung Luas Persegi Panjang </b> <br>
        Rumus : P x L <br>
        Panjang : $a<br>
        Lebar : $b<br>";
        $this->luas = $a * $b;
        echo "Hasilnya $this->luas";
        echo "<hr>";
    }
    public function persegi($a){
        echo "<b>Menghitung Luas Persegi </b> <br>
        Rumus : S x S <br>
        Sisi : $a<br>";
        $this->luas = $a * $a;
        echo "Hasilnya $this->luas";
        echo "<hr>";
    }
    public function lingkaran($a){
        echo "<b>Menghitung Luas Lingkaran </b> <br>
        Rumus : V x r x r <br>
        jari-jari : $a<br>";
        $this->luas = 3.14 * $a * $a;
        echo "Hasilnya $this->luas";
        echo "<hr>";
    
    }
    public function segitiga($a,$b){
        echo "<b>Menghitung Luas Segitiga </b> <br>
        Rumus : A x T /2 <br>
        Alas : $a<br>
        Tinggi : $b<br>";
        $this->luas = $a * $b / 2;
        echo "Hasilnya $this->luas";
        echo "<hr>";
    
    }
}
$cetak = new bangun_datar();
$cetak -> persegi_panjang(10,5);
$cetak ->persegi(20);
$cetak ->lingkaran(7);
$cetak ->segitiga(15,20);

?>