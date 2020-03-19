<?php
 




class honza {
    public $jablko = 1;
    public $mrkev;
    public $krev;
    public $hlava = 3;
    public $pocty;
    
    
    function getJablko() {
        return $this->jablko;
    }

    function getMrkev() {
        return $this->mrkev;
    }

    function getKrev() {
        return $this->krev;
    }

    function getHlava() {
        return $this->hlava;
    }
    
    function setHlava($hlava) {
        $this->hlava = $hlava;
    }

    function getPocty() {
        return $this->pocty;
    }


}