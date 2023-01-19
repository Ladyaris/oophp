<?php

    abstract class Dino {
        public $category;

        abstract function jenis();

        public function category($category) {
            $this->category($category);
        }
    }

    class Ayam extends Dino{
        function jenis() {
            $nama = "Nama ayam: Kaepci";
            $gender = "Gender: Jantan";

            echo $nama;
            echo "<br>";
            echo $gender;
        }
    }

    $ayam = new Ayam();
    $ayam->jenis();

?>