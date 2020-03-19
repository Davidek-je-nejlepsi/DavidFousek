<?php

$slova = array("hovno","kunda");
$veta = "někteří lidi jsou hovna";
var_dump(isvalid($slova, $veta));
$text = array ("kundu");

function isValid ($text,$vulgarni){
    foreach ($vulgarni as $slovo){
        if (strpos($text, $slovo)){
            return false;
        }else{
        return $text;
            
        }
    }
};



die;
require 'class/IosobniAuto.php';
require 'class/Ivozidla.php';
require 'class/InakladniAuto.php';
require 'class/Vozidla.php';
require 'class/osobniAuto.php';
require 'class/nakladniAuto.php';

$osobniAuto = new osobniAuto();

var_dump($osobniAuto);

$nakladniAuto = new nakladniAuto();

var_dump($nakladniAuto);

echo '<br>';
$a = 5;
$b = 10;
$c = "10";
$d = TRUE;
$e = 10.54;
$f = "hvdk";
$g = array("jablka", "hrusky");
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
echo '<br>';
echo $f;
echo '<br>';
var_dump($f);
echo '<br>';
echo '\\';
echo '<br>';
echo "<a href =\"index2.php\">uvod</a>";
echo '<br>';
$data = "abfdg";
echo $data;
echo '<br>';
$data1 = 1;
echo $data1;
echo '<br>';
$data3 = 1.1;
echo $data3;
echo '<br>';
echo $a++;
echo '<br>';
echo $a--;
echo '<br>';
var_dump($a && $b);
var_dump($a or $b);
var_dump($a == $b);
var_dump($a === $b);
echo '<br>';
foreach ($g as $key => $value) {
    
}
echo '<br>';

function chutny() {
    echo 'Damnnn';
}

echo 'chutny';
echo '<br>';
// toto je jednořádkový 

/**
 * @param string $f
 * @name $globalVariableName
 * @author David Fousek
 * @category test
 * @copyright (c) 2018, Andrej Sklonný 
 * @version new
 * @ignore
 * @package moje
 * @tutorial package
 * @access public
 */
echo '<img src="obrazky/obrazek/1234.png" title="obrazek nelze najit"  alt="obrazek">';
echo '<br>';
const Datahaf = "dobry pes";
echo Datahaf;
echo '<br>';
$k = TRUE;
var_dump($k);
$l = "hjknhjkj";
var_dump($l);
echo '<br>';
var_dump($a + $b);
var_dump($a / $b);
var_dump($a > $b);
var_dump($a < $b);
var_dump($a++);
var_dump($a = $b);
var_dump($a != $b);
$email_a = "joe@seznam.cz";
$email_b = "bogus";
/**
 * @name validator email 
 */
if (filter_var($email_a, FILTER_VALIDATE_EMAIL)) {
    echo "Email adress '$email_a' is valid.\n";
}
if (filter_var($email_b, FILTER_VALIDATE_EMAIL)) {
    echo "Email adress '$email_b ' is valid.\n";
} else {
    echo "Email adress '$email_b' is invalid.\n";
}

/** Kontrola e-mailové adresy
 * @param string e-mailová adresa
 * @return bool syntaktická správnost adresy
 */
function check_email($email) {
    $atom = '[-a-z0-9!#$%&\'*+/=?^_`{|}~]'; // znaky tvořící uživatelské jméno
    $domain = '[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])'; // jedna komponenta domény
    return eregi("^$atom+(\\.$atom+)*@($domain?\\.)+$domain\$", $email);
}

echo '<br>';
$cislo = "60274147"; // projde

if (preg_match('#\d{3} ?\d{3} ?\d{3}#', $cislo))
    echo "zadaný text je správné telefonní číslo";
echo '<br>';
$PSC = "27555"; // projde

if (preg_match('#\d{5}#', $PSC))
    echo "zadaný text je správné PSC";

$ip = "27555"; // projde

if (preg_match('#\d{8}#', $ip))
    echo "spatna ip";
require 'Vesnice.php';

$data_Vesnice [1] ["nazev"] = "Hobsovice";
$data_Vesnice [1] ["pocet_obyvatel"] = "400";
$data_Vesnice [1] ["pocet_baraku"] = "200";
$data_Vesnice [1] ["rozloha"] = "1";
$data_Vesnice [1] ["Autobus"] = TRUE;
$data_Vesnice [1] ["Obchod"] = TRUE;
$data_Vesnice [1] ["Posta"] = FALSE;
$data_Vesnice [1] ["Kanalizace"] = TRUE;
$data_Vesnice [2] ["nazev"] = "Skury";
$data_Vesnice [2] ["pocet_obyvatel"] = "100";
$data_Vesnice [2] ["pocet_baraku"] = "30";
$data_Vesnice [2] ["rozloha"] = "0.5";
$data_Vesnice [2] ["Autobus"] = TRUE;
$data_Vesnice [2] ["Obchod"] = FALSE;
$data_Vesnice [2] ["Posta"] = FALSE;
$data_Vesnice [2] ["Kanalizace"] = FALSE;
$data_Vesnice [3] ["nazev"] = "Nabdin";
$data_Vesnice [3] ["pocet_obyvatel"] = "300";
$data_Vesnice [3] ["pocet_baraku"] = "20";
$data_Vesnice [3] ["rozloha"] = "0.2";
$data_Vesnice [3] ["Autobus"] = TRUE;
$data_Vesnice [3] ["Obchod"] = FALSE;
$data_Vesnice [3] ["Posta"] = FALSE;
$data_Vesnice [3] ["Kanalizace"] = TRUE;
$data_Vesnice [4] ["nazev"] = "Picin";
$data_Vesnice [4] ["pocet_obyvatel"] = "800";
$data_Vesnice [4] ["pocet_baraku"] = "500";
$data_Vesnice [4] ["rozloha"] = "10";
$data_Vesnice [4] ["Autobus"] = TRUE;
$data_Vesnice [4] ["Obchod"] = TRUE;
$data_Vesnice [4] ["Posta"] = TRUE;
$data_Vesnice [4] ["Kanalizace"] = TRUE;
$data_Vesnice [5] ["nazev"] = "Cernuc";
$data_Vesnice [5] ["pocet_obyvatel"] = "1500";
$data_Vesnice [5] ["pocet_baraku"] = "1000";
$data_Vesnice [5] ["rozloha"] = "5";
$data_Vesnice [5]["Autobus"] = TRUE;
$data_Vesnice [5] ["Obchod"] = TRUE;
$data_Vesnice [5] ["Posta"] = TRUE;
$data_Vesnice [5] ["Kanalizace"] = TRUE;
$data_Vesnice [6] ["nazev"] = "Hospozin";
$data_Vesnice [6] ["pocet_obyvatel"] = "500";
$data_Vesnice [6] ["pocet_baraku"] = "300";
$data_Vesnice [6] ["rozloha"] = "2";
$data_Vesnice [6] ["Autobus"] = TRUE;
$data_Vesnice [6] ["Obchod"] = TRUE;
$data_Vesnice [6] ["Posta"] = TRUE;
$data_Vesnice [6] ["Kanalizace"] = FALSE;
$data_Vesnice [7] ["nazev"] = "Hospozinek";
$data_Vesnice [7] ["pocet_obyvatel"] = "40";
$data_Vesnice [7] ["pocet_baraku"] = "2";
$data_Vesnice [7] ["rozloha"] = "0.1";
$data_Vesnice [7] ["Autobus"] = FALSE;
$data_Vesnice [7] ["Obchod"] = FALSE;
$data_Vesnice [7] ["Posta"] = FALSE;
$data_Vesnice [7] ["Kanalizace"] = FALSE;
$data_Vesnice [8] ["nazev"] = "Uhy";
$data_Vesnice [8] ["pocet_obyvatel"] = "300";
$data_Vesnice [8] ["pocet_baraku"] = "200";
$data_Vesnice [8] ["rozloha"] = "1";
$data_Vesnice [8] ["Autobus"] = TRUE;
$data_Vesnice [8] ["Obchod"] = TRUE;
$data_Vesnice [8] ["Posta"] = FALSE;
$data_Vesnice [9] ["Obchod"] = FALSE;
$data_Vesnice [9] ["Posta"] = FALSE;
$data_Vesnice [9] ["Kanalizace"] = TRUE;
$data_Vesnice [10] ["nazev"] = "Hobsovice";
$data_Vesnice [10] ["pocet_obyvatel"] = "400";
$data_Vesnice [10] ["pocet_baraku"] = "200";
$data_Vesnice [10] ["rozloha"] = "1";
$data_Vesnice [10] ["Autobus"] = TRUE;
$data_Vesnice [10] ["Obchod"] = TRUE;
$data_Vesnice [10] ["Posta"] = FALSE;
$data_Vesnice [10] ["Kanalizace"] = TRUE;
$data_Vesnice [8] ["Kanalizace"] = TRUE;
$data_Vesnice [9] ["nazev"] = "Velka Bucina";
$data_Vesnice [9] ["pocet_obyvatel"] = "100";
$data_Vesnice [9] ["pocet_baraku"] = "10";
$data_Vesnice [9] ["rozloha"] = "2";
$data_Vesnice [9] ["Autobus"] = TRUE;

$Vesnice = new Vesnice($data_Vesnice);
var_dump($Vesnice);
echo '<br>';
echo $Vesnice->nejvetsivesnice();
echo '<br>';
echo $Vesnice->nejmensivesnice();
echo '<br>';
echo $Vesnice->nejmenebaraku();
echo '<br>';
echo $Vesnice->nejvicebaraku();
echo '<br>';
/**
$honzik = 3;
function pocethonziku($honzik) {
    if($honzik == 2) {
        return "Spravny honzik";
    } else {
        return "Spatny honzik";
    }
        
 }
var_dump(pocethonziku($honzik));

echo '<br>';
include 'class/Honza.php';
include 'class/Honzik.php';
include 'class/Honzicek.php'; 
 */
$jmena = "David, Andrej, Monika Karel-Ivana, Maxim_Monik, Kaja ";
var_dump($jmena);
$jmena = str_replace('-', ',', '_', $jmena);
$jmena = str_replace(' ', '', $jmena);
var_dump($jmena);

$jmena = strtolower($jmena);

$jmena = explode(',', $jmena);

var_dump($jmena);


//strtolower($jmena);
//ucwords($jmena);
//var_dump($jmena);
/**str_replace($jmena, $JA106k, $Ja101k);
preg_replace($jmena, $JA106k, 
$explode ($jmena, $detectors);
foreach ($zelenina as $key => $value);

strtolower($jmena);
ucwords($jmena);
 * 
 */


include 'class/Cena.php';

 
$cena = 28.55678;
require $cena;
/*$mena = " CZK ";
$penize = new cena($cena, $mena);
var_dump($penize);
echo $penize->getCena($cena, $mena);

include 'class/Baterie/AlzaBattery/Baterie12V3A.php';
include 'class/Baterie/XiaomiBattery/Baterie12V3A.php';
include 'class/Baterie12V3A.php';
include 'class/Zdroj12VDC.php';
include 'class/Zdroj220V5A.php';
include 'class/ustedna.php';
include 'class/Ja101k.php';
include 'class/Ja106k.php';
include 'interface/Izdroje.php';

var_dump($ustredny);

var_dump($ustredna);

$slovo = kunda;

if (preg_match('kunda', $slovo))
    echo "sproste slovo";
 */