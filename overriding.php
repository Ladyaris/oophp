<?php

    class Siswi {
        function biodata() {
            echo "Ledih ";
        }

        function dob() {
            echo "lahir di Tangerang, 10 Febuari 2006 <br>";
        }
    }

    // Child class function disesuaikan dengan kebutuhan
    class Mahasiswi extends Siswi {
        function dob() {
            echo "Selamat, anda LOLOS di UGM";
        }
    }

    $siswi = new Siswi();
    $siswi->biodata();
    $siswi->dob();

    $siswi2 = new Mahasiswi();
    $siswi2->dob();

?>