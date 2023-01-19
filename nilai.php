<?php

    class Nilai{
        public $angka = 1;

        public function halo(){
            // return "Halo " . $this->angka++ . "kali <br>";
            return "Halo " . self::$angka++ . "kali <br>";

        }
    }

    $objek = new Nilai();
    echo $objek->halo();
    echo $objek->halo();
    echo $objek->halo();

    echo "<br>";

    $objek2 = new Nilai();
    echo $objek2->halo();
    echo $objek2->halo();
    echo $objek2->halo();


?>