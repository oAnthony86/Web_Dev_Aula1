<?php

class HeaderTitle {

    private $txt;
    private $h;

    function HeaderTitle($vTxt, $vH) {
        $this->txt    = $vTxt;
        $this->h    = $vH;
    }

    public function __toString() {
        return '<h' . $this->h . '>' . $this->txt . '</h' . $this->h . '>';
    }

}