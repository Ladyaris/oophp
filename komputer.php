<?php

    class Komputer {

        public static $processor = "Core i5";
        public static function memutar_video(){
            return "Komputer memutar video" . self::$processor;
        }
    }

    // $komputer_khesya = new Komputer();
    // echo $komputer_khesya->processor;
    // echo $komputer_khesya->memutar_video();
    // echo Komputer::$processor;
    
    echo Komputer::memutar_video();

?>