<?php
if (isset($_POST["simpan"])) {
    $nama = $_POST["nama"];
    $kelas = $_POST["kelas"];
    $jurusan = $_POST["jurusan"];

    $hmtk = $_POST["hm"];
    $tmtk = $_POST["tm"];
    $umtk = $_POST["um"];
    $amtk = $_POST["am"];

    $hindo = $_POST["hb"];
    $tindo = $_POST["tb"];
    $uindo = $_POST["ub"];
    $aindo = $_POST["ab"];

    $hing = $_POST["hi"];
    $ting = $_POST["ti"];
    $uing = $_POST["ui"];
    $aing = $_POST["ai"];

    $hpro = $_POST["hp"];
    $tpro = $_POST["tp"];
    $upro = $_POST["up"];
    $apro = $_POST["ap"];

    class rapot{
        public $rata_mtk;
        public $rata_bindo;
        public $rata_ing;
        public $rata_pro;
        public $grade_mtk;
        public $grade_bindo;
        public $grade_ing;
        public $grade_pro;

        public function hasil_rapot($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m,$n,$o,$p,$q,$r,$s){
            echo"<center><h3>Hasil Rapot</h3></center>";
            echo "Nama : $a <br>
            Kelas : $b <br>
            Jurusan : $c <br>";

            $this->rata_mtk = ($d + $e + $f + $g) / 4;
            $this->rata_bindo = ($h + $i + $j + $k) / 4;
            $this->rata_ing = ($l + $m + $n + $o) / 4;
            $this->rata_pro = ($p + $q + $r + $s) /4;

            if ($this->rata_mtk > 75) {
                $this->grade_mtk = 'Tuntas!';
            } else {
                $this->grade_mtk = 'Tidak Tuntas!';
            }

            if ($this->rata_bindo > 75) {
                $this->grade_bindo = 'Tuntas!';
            } else {
                $this->grade_bindo = 'Tidak Tuntas!';
            }

            if ($this->rata_ing > 75) {
                $this->grade_ing = 'Tuntas!';
            } else {
                $this->grade_ing = 'Tidak Tuntas!';
            }
            
            if ($this->rata_pro > 75) {
                $this->grade_pro = 'Tuntas!';
            } else {
                $this->grade_pro = 'Tidak Tuntas!';
            }

            echo "<table border='1'>
        <tr>
            <th>Mapel</th>
            <th>Harian</th>
            <th>Tugas</th>
            <th>UTS</th>
            <th>UAS</th>
            <th>Rata - Rata</th>
            <th>Grade</th>
        </tr>
        <tr>
            <td>Matematika</td>
            <td>$d</td>
            <td>$e</td>
            <td>$f</td>
            <td>$g</td>
            <td>".$this->rata_mtk."</td>
            <td>$this->grade_mtk</td>
        </tr>
        <tr>
            <td>Indonesia</td>
            <td>$h</td>
            <td>$i</td>
            <td>$j</td>
            <td>$k</td>
            <td>".$this->rata_bindo."</td>
            <td> $this->grade_bindo</td>
        </tr>
        <tr>
            <td>Inggris</td>
            <td>$l</td>
            <td>$m</td>
            <td>$n</td>
            <td>$o</td>
            <td>".$this->rata_ing."</td>
            <td>$this->grade_ing</td>
        </tr>
        <tr>
            <td>Produktif</td>
            <td>$p</td>
            <td>$q</td>
            <td>$r</td>
            <td>$s</td>
            <td>".$this->rata_pro."</td>
            <td>$this->grade_pro</td>
        </tr>
    </table>";

        }
    }
    $cetak = new rapot();
    echo $cetak->hasil_rapot($nama,$kelas,$jurusan,$hmtk,$tmtk,$umtk,$amtk,
    $hindo,$tindo,$uindo,$aindo,$hing,$ting,$uing,$aing,$hpro,$tpro,$upro,$apro);
}
?>