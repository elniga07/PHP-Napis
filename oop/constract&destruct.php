<?php

class kucing {

    public function __destruct(){
        echo "Miawwwwwwwwww";
    }
    public function __construct(){
        echo "Halo saya kucing <br>";
    }
}
$cetak = new kucing();
 
?>