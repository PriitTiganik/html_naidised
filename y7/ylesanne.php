<?php
/**
 * Created by PhpStorm.
 * User: Priit
 * Date: 01/04/2016
 * Time: 22:17
 */
ini_set("display_errors", 1);
echo "tere tali";
echo "<br>";

$tekst = "Tere Priit";
//echo strlen($tekst);
echo $tekst."<br>";
//echo $tekst;
for($i=0;$i<strlen($tekst);$i++){
    //echo $i;
    //if(isset($tekst[strlen($tekst)-1-$i])){
        echo $tekst[strlen($tekst)-1-$i];
    //};
};
echo "<br>";
echo "<br>";
echo "<br>";
?>
////////////////////////////////////////////////////////
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Suur täht</title>
    <link href='http://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
    <style>
body {
    font-family: 'Dancing Script', cursive;
    }
span {
    font-size: 3em;
    display: inline-block;
    text-align: center;
    width: 1em;
    font-weight: bold;
    float:left; /* et oleks teksti kõrval */
    clear: both; /* et iga paragrahv algaks oma realt */
}
#wrap {
    width: 800px;
    margin: auto;
}
    </style>
</head>
<body>
<div id="wrap">
    <h1>Some title</h1>
<?php
$text="Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsaariatur?
At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores easperiores repellat
Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatanim id est laborum.";

$atext =explode("\n",$text);

foreach($atext as $p){
    //add ending p
    $p=$p."</p>";

    //span first letter and add leading p ^ span
    $p="<p><span>".$p[0]."</span>".substr($p,1);

    echo $p;
}

?>
</div>
</body>
</html>
