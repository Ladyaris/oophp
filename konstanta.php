<?php

    // define('NAMA', 'Ledi');
    // echo NAMA;

    class Leptop {
        const DOLLAR = 14000;

        public function beliLeptop($harga){
            return "Beli Leptop baru Rp. " . $harga*self::DOLLAR;
        }
    }

    // Const lewat object
    $leptop = new Leptop();
    echo $leptop->beliLeptop(5000000);

    // class
    echo Leptop::DOLLAR;

    echo __LINE__;

    function coba(){
        return __FUNCTION__;
    }

    echo coba();
?>