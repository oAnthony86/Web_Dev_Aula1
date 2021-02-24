<?php

class HtmlComment {

    private $txt;

    function HtmlComment($vTxt) {
        $this->txt    = $vTxt;
    }

    public function __toString() {
        return '<!-- ' . $this->txt . ' -->';
    }
}