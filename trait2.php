<?php

    trait Kucing {
        public function bunyi() {
            echo "Meong";
        }
    }

    trait Anjing {
        public function bunyi2() {
            echo "Guk";
        }
    }

    trait Ayam {
        public function bunyi3() {
            echo "Bekakak";
        }
    }

    class Binatang {
        use Kucing, Anjing, Ayam;
    }

    $budi = new Binatang();
    $budi->bunyi();

    echo "<br>";

    $asep = new Binatang();
    $asep->bunyi2();

    echo "<br>";

    $kevin = new Binatang();
    $kevin->bunyi3();

?>