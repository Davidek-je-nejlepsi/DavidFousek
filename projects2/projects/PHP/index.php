<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/css.css">
        <title>Moje první stránka</title>
    </head>
    <body>
        <p>Moje první html stránka.</p>
        A nějaké další <span>texty</span>.
        <a href="index.php"> php</a>
        <p><a href="http://www.seznam.cz">seznam</a></p>
        <hr>
        <h1 class="black">ahoj</h1>
        <h2>ahoj</h2>
        <h3>ahoj</h3>
        <h4>ahoj</h4>
        <h5>ahoj</h5>
        <h6>ahoj</h6>
        <!--Tady bude obrazek-->
        <img src="obrazek/1234.png" title="obrazek nelze najit"  alt="obrazek">
        <p>Random text</p>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; mezera
        <div>
            <div>
                <div>Text</div>
            </div>
        </div>
        <div class="neco">Div class</div>
        <form action="index.php" method="GET">
            <dl>
                <dt>UZIVATELSKE JMENO:</dt>
                <dd><input  name="username" value=""></dd>
            </dl>
            <dl>
                <dt>HESLO:</dt>
                <dd><input type="password" value=""></dd>
            </dl>
            <dl>
                <dt>Vyberte typ auta:</dt>
                <dd><input type="checkbox" name="Lada">Lada
                    <input type="checkbox" name="Skoda">Skoda
                    <input type="checkbox" name="Opel">Opel
                    <input type="checkbox" name="Citroen">Citroen
                </dd>
            </dl>
            <dl>
                <dt>Pohlavi:</dt>
                <dd>
                    <input type="radio" name="pohlavi">Muz
                    <input type="radio" name="pohlavi">Zena
                    <input type="radio" name="pohlavi">Buzerant
                </dd>
            </dl>
            <dl>
                <dt>Vyberte vek:</dt>
                <dd>
                    <input type="radio" name="rok"><20
                    <input type="radio" name="rok"><30
                    <input type="radio" name="rok"><40
                </dd>
            </dl>
            <input type="submit" name="pokus" value="pokus">
            <dl>
                <dt>Vyberte mesto:</dt>
            </dl>
            <dl>
                <dt></dt>
                <dd>
                    <select name="Mesto">
                        <option value=""selected>---Vyber mesto--</option>
                        <option value="Praha">Praha</option>
                        <option value="Brno">Brno</option>
                        <option value="Ostrava">Ostrava</option>
                    </select>
                </dd>
            </dl>
            <dl>
                <dt></dt>
                <dd>
                    <button name="pokus">kopnout do zadku</button>
                </dd>
            </dl>
        </form>
        <img src="obrazek/1234.png" title="obrazek nelze najit"  alt="obrazek">
        <a href="index.php"> php</a>
        <a href="http://www.seznam.cz">seznam</a>
        <a href="http://www.seznam.cz"><img src="obrazek/1234.png" alt="na seznam"></a>
        <a href="obrazek/1234.png"><img src="obrazek/1234.png" alt="na obrazek"></a>
        <br>
        <br>
        <br>
        <table class="tabulka" border="1" cellpadding="2" cellspacing="0">
            <thead>
                <tr>
                    <th  colspan="5">Potraviny</th>
                </tr>
            </thead>
            <tr>
                <td class="podnadpis">Pecivo</td>
                <td rowspan="2">Chleba</td>
                <td>Rohlik</td>
                <td>Housky</td>
                <td>kobliha</td>
            </tr>
             <tr>
                <td class="podnadpis">Maso</td>
                <td>Uzene</td>
                <td>Veprove</td>
                <td>skopove</td>
            </tr>
             <tr>
                <td class="podnadpis">Polevky</td>
                <td>bramboracka</td>
                <td>rajska</td>
                <td>koprova</td>
                <td>cesnecka</td>
            </tr>
             <tr>
                <td class="podnadpis">Ovoce</td>
                <td>jablko</td>
                <td>hruska</td>
                <td>banan</td>
                <td>jahoda</td>
            </tr>
             <tr>
                <td class="podnadpis">Zelenina</td>
                <td>okurka</td>
                <td>dyne</td>
                <td>meloun</td>
                <td>paprika</td>
            </tr>
             <tr>
                <td class="podnadpis">Sladke</td>
                <td>Bonbony</td>
                <td>lizatka</td>
                <td>cokolada</td>
                <td>susenky</td>
            </tr>
             <tr>
                <td class="podnadpis">Jogurty</td>
                <td>jahodovy</td>
                <td>cokoladovy</td>
                <td>vanilkovy</td>
                <td>malinovy</td>
            </tr>
             <tr>
                <td class="podnadpis">Dorty</td>
                <td>Marcipanovy</td>
                <td>Tiramisu</td>
                <td>misa</td>
                <td>Jahodovy</td>
            </tr>
             <tr>
                <td class="podnadpis">Zmrzliny</td>
                <td>citronova</td>
                <td>pistaciova</td>
                <td>vanilkova</td>
                <td>lesni plody</td>
            </tr>
             <tr>
                 <td class="podnadpis">Buchty</td>
                <td>pernik</td>
                <td>strudl</td>
                <td>cokoladova</td>
                <td>jablecna</td>
            </tr>
            <tfoot>
                <tr>
                    <th colspan="5">Konec</th>
                
                    
                </tr>
                
            </tfoot>
            
            
            
            
            
</table>
<?php
echo "<br><br><br><br><br><br>";
/* normalni podminka */ 
$ovoce = "jablko";
 $zelenina = "okurka";
   if ($ovoce == $zelenina) {
	   echo "stejne jidlo";
   } else {
	   echo "neni to stejne jidlo";
   }
   echo "<br>";
   /* switch */
   $jidlo = "pomeranc";
   switch ($jidlo) {
	   case "pomeranc":
		  echo $jidlo;

		   break;
	   case "jablko";
		   echo $jidlo;
		   break;
	   default: "Neni zadne ovoce";
		   break;
	   
   }
echo "<br><br>";
/* vlozena podminka */
$a = 6;
$b = 5;
if ($a == $b) {
   echo "je rovno";

if ($a > $b) {
   echo "podminka funguje";
}
} elseif ($a != $b) {
   echo "podminka nefunguje";
} else {
   echo "nic nefunguje";
}
   
echo "<br><br><br><br><br>"; 
$pole = array(1 =>"Jablko", 2 => "Hruska", 3 => "Banan");
echo "$pole[1]";
   
echo "<br><br><br><br><br>"; 
$auta["Auto"]["skoda"]["1"] = "Fabia";
$auta["Auto"]["skoda"]["2"] = "Octavia";
$auta["Nakladak"]["tatra"]["1"] = "asacasca";
$auta["Nakladak"]["tatra"]["2"] = "adajdhajcha";
echo $auta["Auto"]["skoda"]["2"];
echo "<br><br><br><br><br>"; 
/*
foreach ($pole as $value => $key) {
	echo $key." - ".$value."<br>";
}


echo "<br><br><br><br><br>"; 
echo "<table border=1>";
for ($i = 0; $i < 50; $i++) {
   echo "<tr>";
	for ($t = 0; $t < 50; $t++) {
		echo "<td>".$i." - ".$t."</td>";
	}
	echo "</tr>";
}

echo "</table>";
echo "<br><br><br><br><br>";
$zprava = "Matej je mega pstros";
$pole = array("hovnocuc","pica","Zachod","Ocas");
$error = "Tahle zprava obsahuje nevhodne slovo.";
function check($zprava, $pole = array("hovnocuc","pica","Zachod","Ocas"), $error = "Tahle zprava obsahuje nevhodne slovo.") {
	$pole2 = explode(" ", $zprava);
	foreach ($pole as $value) {
		foreach ($pole2 as $value2) {
			if($value == $value2) {
				echo $error;
				break;
			}
		}
	} return $zprava;
}
echo check($zprava, $pole = array("hovnocuc","pica","Zachod","Ocas"), $error = "Tahle zprava obsahuje nevhodne slovo.");*/

###############################################################################################################################################################
/*abstract class Napoj {
	protected $prisady;
	function __construct($prisady) {
		$this->prisady = $prisady;
	}
	abstract function pridatsubstanci();
	function priprav() {
		$this->uvarvodu();
		$this->pridatsubstanci();
		$this->zalijvodou();
		$this->pridaniprisad();
	}
	function uvarvodu() {
		echo "Vařím vodu."."<br>";
	}
	function zalijvodou() {
		echo "Nalévám vodu do šálku."."<br>";
	}
	function pridaniprisad() {
		echo "Přidávám " . $this->prisady."."."<br>";
	}
}
class TureckaKava extends Napoj {
	function pridatsubstanci() {
		echo "Dávám do šálku lžičku mleté kávy."."<br>";
	}
}
class Caj extends Napoj {
	function pridatsubstanci() {
		echo "Dávám do šálku sáček čaje."."<br>";
	}
}
$objednavka = [new TureckaKava('mléko a cukr'), new Caj('citrón'), new TureckaKava('mléko')];
foreach($objednavka as $napoj){
    $napoj->priprav();
	echo "<br>";
}
 */
  ###############################################################################################################################################################
?>
        
<?php


require 'index2.php';

?>























</body> 

</html>