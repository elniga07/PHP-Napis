<?php

class kendaraan{

    public $warna = "Biru";
    public function a(){
        echo"Saya adalah kendaraan";
    }
}
class mobil extends kendaraan{

    public function b(){
        echo $this->a();
        echo"<br>";
        echo "Warna saya adalah $this->warna";
    }
}
$cetak = new mobil();
echo $cetak->b();

?>