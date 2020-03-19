<?php

$t1 = 10;  

// 1. Zápis obecné třídy
 // 3. Zápis dědičnosti
class Honzicek extends honza{
   // 7.Private
    private $neco = 2;
   // 8.static 
    static $hovno = 5;
   // 9. nette framework s MVC architekturou
}
//10. instance třídy
 $zarovka = new clsZarovka; 
 //11. konstanta třídy jednou se na začátku určí a pak se nedá přepsat
 const ja = 10;
 //12. Staciký přístup k proměné třídy
 A::$e = neco;
 //13. instantční přístup k proměné
 $b->b= hovno;
 //14.přístup k proměné uvnitř třídy
self::$e = ja;
//15. instantční přístup k metodě třídy
$this -> methodFoo(neco, neco);
//16. přístup ke statické vně
self::Methodstatic();