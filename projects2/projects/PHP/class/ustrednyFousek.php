<?php


/**
 * @author David Fousek
 */
abstract class ustrednyFousek implements iustrednyFousek {
   
  protected $napetiFousek; //  je viditelná jen ve třídě a při dědění
  
  //funkce pro získání hodnoty
    function getNapetiFousek() {
      return $this->napetiFousek;
  }

  //fuknce nastaví hodnotu
  function setNapetiFousek($napetiFousek) {
      $this->napetiFousek = $napetiFousek;
  }




}
