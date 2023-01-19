<?php

    interface Buah {
        public function makan();
        public function warna($warna);
    }

    interface Benda {
        public function setUkuran($ukuran);
    }

    class Apel implements Buah, Benda {
        protected $warna;
        protected $ukuran;

        public function makan() {

        }

        public function setWarna($warna) {
            $this->warna = $warna;
        }

        public function setUkuran($ukuran) {
            $this->ukuran = $ukuran;
        }
    }

?>