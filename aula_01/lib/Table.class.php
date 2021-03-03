<?php
    class Table{
        private $class;
        private $id;
        private $trs;


        public function __construct($vTrs, $vClass = '', $vId = ''){
            $this->trs = $vTrs;
            $this->class = $vClass;
            $this->id = $vId;
        }

        public function __toString(){
            $table = '<table class="' . $this->class . '" id="' . $this->id . '">';
        }

        
    }

?>