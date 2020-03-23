<?php

// třída dědí abstraktní třídu

/*
 * @author David Fousek
 */
class ustrednaFousek extends ustrednyFousek{
    
    const TYPE = 1;  // konstanta se jednou nastaví a pak se nemění

   
    //funkce kvůli atributu
    public function getNapetiFousek() {
      return $this->napetiFousek;
  }
  
//fuknce nastaví hodnotu
   public function setNapetiFousek($napetiFousek) {
      $this->napetiFousek = $napetiFousek;
  }
}
