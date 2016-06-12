<?php
/**
 * Created by PhpStorm.
 * User: Priit
 * Date: 01/04/2016
 * Time: 19:19
 */

echo "Tere tali!";
echo "<br>";
$muutuja1="11";
$muutuja2="22";
echo $muutuja1 . $muutuja2;
echo "<br>";
echo $muutuja1 + $muutuja2;
echo "<br>";
$tekst= "mul on
<b>$muutuja1</b>
ja
${muutuja2}-ed";//muutuja on loogelistes, et kohe selle j'rgi panna s
echo $tekst;

//endofdoc
$tekst = <<<LOPU_TAHIS
t
e
r
e
LOPU_TAHIS;
echo $tekst;


function mingiTegevus($param1, $param2){
    //funktsiooni sisu
    global $muutuja1, $muutuja2;//toome sisse globaalsed muutujad nendega tegutsemiseks
}
$aaa=1;
if (isset($aa)){
    echo "olemas;";
} else {
    echo "ei ole oelmas";
}


$kass =array();
$kass=array("kiisu","3","hall");
$kass=array(
    "nimi"=>"kiisu",
    "vanus"=>3,
    "karv"=>"hall"
);
$kass[] ="kala";//viimane numbriline indeks +1 asendatakse
$kass[]="piim";
var_dump ($kass);
echo $kass["nimi"];

$kass["toidud"]=array("kala","piim","rohi");
echo $kass["toidud"][0];//kala

//unset() kustutab massiivi elemendi v]i terve muutuja
foreach ($kass as $vaartus){
   echo "$vaartus" ;
}
foreach ($kass as $voti => $vaartus){
    echo $voti . $vaartus;
}


?>