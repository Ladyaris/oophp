<?php

    class Mobil2{
        protected $namaMerk = "Daihatsu";

        protected function helloMobil() {
            return "dari class Mobil";
        }
    }

    class Mobil extends Mobil2{
        public function getMobil() {
            return $this->helloMobil() . " " . $this->namaMerk;
        }
    }

    $mobil2 = new Mobil();
    echo $mobil2->getMobil();

?>