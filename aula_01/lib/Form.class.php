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
        $form = '<form '; //name="' . $this->name . '" method="' . $this->method . '" id="' . $this->id . '">';
        if(isset($this->name) && !is_null($this->name)){
            $form .= 'name="' . $this->name . '" ';
        }
        if(isset($this->method) && !is_null($this->method)){
            $form .= 'method="' . $this->method . '" ';
        }
        if(isset($this->id) && !is_null($this->id)){
            $form .= 'id="' . $this->id . '" ';
        }
        $form .= '">';
        foreach ( $this->content as $var){
            $form .= $var; 
        }
        $form .= '</form>';
        return $form;
    }


}