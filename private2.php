<?php

   class Gojek {
    private $username;

    private function pesen() {
        return ", bang";
    }

    public function setPesanan($username) {
        $this->username = $username;
    }

    public function getPrivate(){
        return $this->username . "" . $this->pesen();
    }

   }

   $gojek_ledi = new Gojek();
   $gojek_ledi->setPesanan("Mixue satu");
   echo $gojek_ledi->getPrivate();

?>