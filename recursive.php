<?php

    // function iteration(int $num, int $index = 1) {
    //     echo "Proses ke-{$index}<br>";

    //     // Istilah mencapai akhir untuk di output-kan
    //     // pada kode ($index , $num)

    //     if($index < $num){
    //         iteration($num, $index + 1);
    //     }
    // }

    // iteration(1);

    // Menggunakan looping

    function iteration(int $num) {
        for ($i = 1; $i <= $num; $i++) {
            echo "Perulangan ke-{$i}<br>";
        }
    }

    iteration(10);


?>