<?php

class HeaderTitle {

    private $txt;

    function HeaderTitle($vTxt) {
        $this->txt    = $vTxt;
    }

    public function __toString() {
        return '<h1>' . $this->txt . '</h1>';
    }

}