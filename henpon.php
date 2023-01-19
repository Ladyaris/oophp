<?php

    class Henpon {
        public $jumlah_pulsa;

        public function __construct($pulsa){
            $this->jumlah_pulsa = $pulsa;
        }

        public function ngirimPesan($tarif, $jumlah_pesan = 1) {
            $this->jumlah_pulsa -= $tarif*$jumlah_pesan;
        }

        public function __destruct(){
            echo "Jumlah pulsa sekarang: ";
            echo $this->jumlah_pulsa;
        }
    }

    $hp_ledi = new Henpon(5000);

    echo "Jumlah pulsa anda ";
    echo $hp_ledi->jumlah_pulsa;

    $hp_ledi->ngirimPesan(200);

?>