<?php

class Script {

    private $src;
    private $integrity;
    private $crossorigin;
    private $scriptContent;

    function Script($vSrc,$vIntegrity,$vCrossorigin, $vScriptContent) {
        $this->src = $vSrc;
        $this->integrity = $vIntegrity;
        $this->crossorigin = $vCrossorigin;
        $this->scriptContent = $vScriptContent;
    }

    public function __toString() {
        $script = '<script ';
        
        if(!is_null($this->src) && !empty($this->src)){
            $script .= ' src= "' . $this->src . '"';
        } 
        
        if(!is_null($this->integrity) && !empty($this->integrity)){
            $script .= ' integrity= "' . $this->integrity . '"';
        } 
        
        if(!is_null($this->crossorigin) && !empty($this->crossorigin)){
            $script .= ' crossorigin= "' . $this->crossorigin . '"';
        } 
        
        $script .= '>';
        $script .= $this->scriptContent;
        $script .= '</script>';

        return $script;
    }

}