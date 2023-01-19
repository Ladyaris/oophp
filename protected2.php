<?php

    class Gojek1{
        protected $username = "Ledi";

        protected function pesen() {
            return "Mixue satu";
        }
    }

    class Gojek2 extends Gojek1{
        public function getPesanan() {
            return $this->pesen() . " " . $this->username;
        }
    }

    $gojek_ledi = new Gojek2();
    echo $gojek_ledi->getPesanan();

?>