<?php

    function factorial($n) {
        echo "Factorial({$n}) = factorial(" . ($n - 1) . ") <br>";

        if($n > 1){
            factorial($n - 1);
        }
    }

    factorial(5);

?>