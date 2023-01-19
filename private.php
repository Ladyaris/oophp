<?php

   class Mobil {
    private $namaMerk;

    private function hello() {
        return " dari class Mobil";
    }

    public function setNamaMerk($namaMerk) {
        $this->namaMerk = $namaMerk;
    }

    public function getPrivate(){
        return $this->namaMerk . "" . $this->hello();
    }

   }

   $mobil = new Mobil();
   $mobil->setNamaMerk("Honda");
   echo $mobil->getPrivate();

?>