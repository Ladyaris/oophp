<?php

    class Langit {
        public $nama;
        public $cahaya;

        public function __construct($nama, $cahaya) {
            $this->nama = $nama;
            $this->cahaya = $cahaya;
        }

        public function namaBintang() {
            echo "Contoh nama bintang yaitu {$this->nama} dan warnanya {$this->cahaya}";
        }
    }

    // Inheritance class nya -Keyword nya "extends"
    class Bintang extends Langit {
        public function pesan() {
            echo "Benda-benda langit <br>";
        }
    }

    $bintang = new Bintang("Canopus, capella, vega", "terang");
    $bintang->pesan();
    $bintang->namaBintang();

?>