<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cena
 *
 * @author uzivatel
 */
class Cena {
   public $cena;
    public $mena;

 function setCena($cena){
     $this->cena;
 }
 function setMena($mena){
     $this->mena;
 }
 function _contruct($cena, $mena){
     $this->cena = $cena;
     $this->mena = $mena; 
 }
 
 public function getCena($cena, $mena) {
     
     return number_format(round($cena, 1), $decimals = 2, $dec_point = ".",$thousands = "," ).$mena;
}
}
