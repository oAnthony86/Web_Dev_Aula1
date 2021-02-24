<?php

class Head {
    private $props = array();
    private $title;

    function Head($vTitle){
        $this->title = $vTitle;
    }

    function addProp($vProps){
        $this->props[] = $vProps;
    }

    function __toString() {
        $head = '<head>';
        foreach ($this->props as $valor) {
            $head .= $valor;
        }
        $head .= '<title>' . $this->title . '</title>';
        $head .= '</head>';
        return $head;
    }
}