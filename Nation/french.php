<?php

    namespace OOPHP\Nation;

    class French {
        public $capital;
        public $language;

        public function capital($capital) {
            $this->capital = $capital;
            return $this->capital;
            }

        public function language($language){
            $this->language = $language;
            return $this->language;
        }
    }

?>