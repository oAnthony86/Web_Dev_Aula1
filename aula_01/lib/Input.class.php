<?php

    class Input{
        private $type;
        private $name;
        private $id;
        private $class;

        public function Input($vType, $vName, $vId, $vClass){
            $this->type = $vType;
            $this->name = $vName;
            $this->id = $vId;
            $this->class = $vClass;
        }

        public function __toString(){
            $input = '<input type="' . $this->type . '" class="' . $this->class . '" name="' . $this->name . '" id="' . $this->id . '" />';
        }
    }