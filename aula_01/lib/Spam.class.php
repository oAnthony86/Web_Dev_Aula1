<?php

class Spam {

    private $txt;

    function Spam($vTxt) {
        $this->txt    = $vTxt
    }

    public function __toString() {
        return '<spam>' . $this->txt . '<spam>';
    }

}