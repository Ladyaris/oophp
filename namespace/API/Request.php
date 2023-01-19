<?php

    namespace API;
    use RequestInterface;
    
    class Request implements RequestInterface {
        public function handle() {
            echo 'Handle API Request';
        }
    }

?>