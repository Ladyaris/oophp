<?php

   class Mobil {
    public $namaMerk;

    public function hello() {
        return " dari class Mobil";
    }
   }

   $mobil = new Mobil();
   echo $mobil->namaMerk = "Avanza";
   echo $mobil->hello();

?>