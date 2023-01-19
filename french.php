<?php

    include ('Nation/french.php');

    class French {
        public $test;
        public function __construct() {
            $this->test = new \OOPHP\Nation\French();
            echo "Capital: " . $this->test->capital("Paris");
            echo "<br>";
            echo "Language: " . $this->test->language("French");
        }
    }

    $jalan = new French();

?>