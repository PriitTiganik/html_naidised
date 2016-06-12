<?php
$pictures=array(
    array("big"=>"../pildid/nameless1.jpg", "alt"=>"img1"),
    array("big"=>"../pildid/nameless2.jpg", "alt"=>"img2"),
    array("big"=>"../pildid/nameless3.jpg", "alt"=>"img3"),
    array("big"=>"../pildid/nameless4.jpg", "alt"=>"img4"),
    array("big"=>"../pildid/nameless5.jpg", "alt"=>"img5"),
    array("big"=>"../pildid/nameless6.jpg", "alt"=>"img6")
);

include_once("header.html");

$mode="";
if(!empty($_GET)){
    $mode=$_GET["mode"];
    switch($mode){
        case("pealeht"):
            include_once("pealeht.html");
            break;
        case("galerii"):
            include_once("galerii.html");
            break;
        case("vote"):
            include_once("vote.html");
            break;
        case("tulemus"):
            include_once("tulemus.html");
            break;
    }
} else {
    include_once("pealeht.html");
}

include_once("footer.html");
?>