<?php

class contoh{
    private $nama = "Nafis";

    public function perkenalan(){
        echo "Assalaamualaikum <br> $this->nama";
    }
}
$cetak = new contoh();
$cetak->perkenalan();


?>