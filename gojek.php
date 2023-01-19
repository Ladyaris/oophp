<?php

    class Gojek{

        public $username = "username";
        public $version = "version";
        public $goPay = "goPay";

        public function pesan() {
            return "'Bang pesen Mixue satu, ";
        }

        public function antar() {
            return "'Bang anterin, ";
        }

        public function jemput() {
            return "'Bang jemput, ";
        }

        public function bayar() {
            return "'Bang topap, ";
        }

        public function saySmth() {
            return "Payment Success!'";
        }

        public function getLabel(){
            return "$this->username<br> $this->version<br> $this->goPay<br>";
        }
    }

    $gojek_ledi = new Gojek();

    $gojek_ledi->username = "Ledi";
    $gojek_ledi->version = "4.58.1";
    $gojek_ledi->goPay = "1.000.000";

    echo $gojek_ledi->getLabel();

    echo $gojek_ledi->pesan();

    echo $gojek_ledi->saySmth();

?>