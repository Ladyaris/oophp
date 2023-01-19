<?php

    class Shape {
        function __call($name_function, $arguments) {
            if($name_function == 'area'){
                switch (count($arguments)){
                    // Making circle
                    case 1:
                        return 3.14 * $arguments[0];

                    case 2:
                        return $arguments[0] * $arguments[1];
                }
            }
        }
    }

    $shape = new Shape();
    // Circle
    echo ($shape->area(8));
    echo "<br>";

    // Rectangle
    echo ($shape->area(8, 4));

?>