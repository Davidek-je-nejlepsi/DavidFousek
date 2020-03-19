 <?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ustredna
 *
 * @author Fousek
 */
 // 1. Zápis obecné třídy
 // 3. Zápis dědičnosti
class ustredna extends Honzicek {

    public $gsmmodule = 1;
    public $radia;
    private $napajeni;
    public static $baterie = null;
    public $pocetsbernic;

    function _construct(XiaomiBattery\Baterie12V3A $baterie) {
        $this->napajeni = $baterie;
    }

    function getBaterie() {
        return $this->baterie;
    }

    function setBaterie(XiaomiBattery\Baterie12V3A $baterie) {
        $this->baterie = $baterie;
    }

    function getGsmmodule() {
        return $this->gsmmodule;
    }

    function getRadia() {
        return $this->radia;
    }

    function getNapajeni() {
        return $this->napajeni;
    }

    function getPocetsbernic() {
        return $this->pocetsbernic;
    }

    function setGsmmodule($gsmmodule) {
        $this->gsmmodule = $gsmmodule;
    }

    function setRadia($radia) {
        $this->radia = $radia;
    }

    function setNapajeni($napajeni) {
        $this->napajeni = $napajeni;
    }

    function setPocetsbernic($pocetsbernic) {
        $this->pocetsbernic = $pocetsbernic;
    }

}
$gsmmodule = 1;
function pocetgsm($gsmmodule) {
    if($gsmmodule == 1) {
        return "Pocet je vporadku";
    } else {
        return "Spatny pocet gsm";
    }
        
 }
 echo pocetgsm($gsmmodule);
 echo "<br><br>";
$ustredny = array (1 => "ustredna", 2 => "Ja106k");
$ustredna = 2;
var_dump($ustredna);
$ustredny = array("ustredna", "103", "106", "108");
echo 'ustredny';  
foreach ($ustredny as $hodnota){
    echo $hodnota;"<br>";
}
$hezkaustredna = "Ja miluju jablotron.";
echo mb_strtoupper($hezkaustredna);

