<?php


    abstract class Mobil {
        public $setharga;

        abstract function spec();

        public function setHarga($setharga) {
            $this->setHarga($setharga);
        }
    }

    class Pajero extends Mobil{
        function spec() {
            $nama = "Nama mobil: Pajero";
            $kapasitas = "Kapasitas: 7 orang";

            // Output
            echo $nama;
            echo "<br>";
            echo $kapasitas;
        }
    }

    $mobil = new Pajero();
    $mobil->spec();
?>
