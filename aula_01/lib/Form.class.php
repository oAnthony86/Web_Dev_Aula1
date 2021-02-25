<?php

class Form{
    private $name;
    private $method;
    private $id;
    private $content;


    public function Form($vName, $vMethod='POST', $vId){
        $this->name = $vName;
        $this->method = $vMethod;
        $this->id = $vId;
    }

    public function addContent($vContent){
        $this->content[] = $vContent;
    }

    public function __toString(){
        $form = '<form name="' . $this->name . '" method="' . $this->method . '" id="' . $this->id . '">';
        foreach ( $this->content as $var){
            $form .= $var; 
        }
        $form .= '</form>';
        return $form;
    }


}