<?php

class bangun_datar{

    public $luas_persegi_panjang;
    public $luas_persegi;
    public $luas_lingkaran;
    public $luas_segitiga;
    public $keliling_persegi_panjang;
    public $keliling_persegi;
    public $keliling_lingkaran;
    public $keliling_segitiga;
}
class luas extends bangun_datar{

    public function persegi_panjang($a,$b){
        echo "<b>Menghitung Luas Persegi Panjang </b> <br>
        Rumus : P x L <br>
        Panjang : $a<br>
        Lebar : $b<br>";
        $this->luas_persegi_panjang = $a * $b;
        echo "Hasilnya $this->luas_persegi_panjang";
        echo "<hr>";
    }
    public function persegi($a){
        echo "<b>Menghitung Luas Persegi </b> <br>
        Rumus : S x S <br>
        Sisi : $a<br>";
        $this->luas_persegi = $a * $a;
        echo "Hasilnya $this->luas_persegi";
        echo "<hr>";
    }
    public function lingkaran($a){
        echo "<b>Menghitung Luas Lingkaran </b> <br>
        Rumus : V x r x r <br>
        jari-jari : $a<br>";
        $this->luas_lingkaran = 22/7 * $a * $a;
        echo "Hasilnya $this->luas_lingkaran";
        echo "<hr>";
    
    }
    public function segitiga($a,$b){
        echo "<b>Menghitung Luas Segitiga </b> <br>
        Rumus : A x T /2 <br>
        Alas : $a<br>
        Tinggi : $b<br>";
        $this->luas_segitiga = $a * $b / 2;
        echo "Hasilnya $this->luas_segitiga";
        echo "<hr>";
    
    }

}
class keliling extends bangun_datar{

    public function persegi_panjang($a,$b){
        echo "<b>Menghitung keliling Persegi Panjang </b> <br>
        Rumus : 2 x (P x L) <br>
        Panjang : $a<br>
        Lebar : $b<br>";
        $this->keliling_persegi_panjang = 2 * ($a * $b);
        echo "Hasilnya $this->keliling_persegi_panjang";
        echo "<hr>";
    }
    public function persegi($a){
        echo "<b>Menghitung keliling Persegi </b> <br>
        Rumus : 4 x S <br>
        Sisi : $a<br>";
        $this->keliling_persegi = 4 * $a;
        echo "Hasilnya $this->keliling_persegi";
        echo "<hr>";
    }
    public function lingkaran($a){
        echo "<b>Menghitung keliling Lingkaran </b> <br>
        Rumus : 2 x V x r <br>
        jari-jari : $a<br>";
        $this->keliling_lingkaran = 2 * 22/7 * $a;
        echo "Hasilnya $this->keliling_lingkaran";
        echo "<hr>";
    
    }
    public function segitiga($a,$b,$c){
        echo "<b>Menghitung keliling Segitiga </b> <br>
        Rumus : A + B + C <br>
        Alas : $a<br>
        Tinggi : $b<br>";
        $this->keliling_segitiga = $a + $b + $c;
        echo "Hasilnya $this->keliling_segitiga";
        echo "<hr>";
    
    }
    
}
echo "<h1>Luas</h1>";
$cetak = new luas();
$cetak -> persegi_panjang(10,5);
$cetak ->persegi(20);
$cetak ->lingkaran(7);
$cetak ->segitiga(15,20);
echo "<h1>Keliling</h1>";
$cetak = new keliling();
$cetak -> persegi_panjang(10,5);
$cetak ->persegi(20);
$cetak ->lingkaran(7);
$cetak ->segitiga(15,20,30);


?>