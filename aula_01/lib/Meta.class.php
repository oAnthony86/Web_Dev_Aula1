<?php

class Meta {

    private $name;
    private $content;

    function Meta($vName,$vContent) {
        $this->name = $vName;
        $this->content = $vContent;
    }

    public function __toString() {
        return '<meta name="' . $this->name . '" content="' . $this->content . '">';
    }

}