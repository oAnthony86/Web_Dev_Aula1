<?php

class Body {
    private $props = array();

    function addProp($vProps) {
        $this->props[] = $vProps;
    }

    public function __toString() {
        $body = '<body>';
        foreach ($this->props as $valor) {
            $body .= $valor;
        }
        $body .= '</body>';
        return $body;
    }
}