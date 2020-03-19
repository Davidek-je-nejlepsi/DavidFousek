<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Zdroj220V3A
 *
 * @author uzivatel
 */
final class Zdroj12VDC implements Izdroje {
    private $napeti = 220;
    
    public function getNapeti(){
        return $this ->napeti;
}
}
