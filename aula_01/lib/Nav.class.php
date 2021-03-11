<?php

class Nav {

    private $aList = array();
    private $class;
    private $id;
    
    public function __construct($vClass,$vId) {
        $this->setNav($vClass, $vId);
    }
    
    public function setNav($vClass, $vId){
        $this->class = $vClass;
        $this->id = $vId;
    }

    public function addElementNav($sElement) {
        $this->aList[] = $sElement;
    }
    public function getNav(){
        $sScript = '<nav id='.$this->id.' class='.$this->class.'>';
        foreach ($this->aList as $sItemListElement) {
            $sScript .= $sItemListElement;
        }
        $sScript .= '</nav>';
        return $sScript;
    }
}