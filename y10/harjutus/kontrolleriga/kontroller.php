<?php
session_start();

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
            if(isset($_SESSION["voted_for"])){
                kuva_tulemus("vote");
            } else{
                include_once("vote.html");
            }
            break;
        case("tulemus"):
            kuva_tulemus("tulemus");
            break;
        case("newvote"):
            session_destroy();
            include_once("pealeht.html");
            break;
    }
} else {
    include_once("pealeht.html");
}

function kuva_tulemus($source){
    echo '<div id="wrap"><h3>Valiku tulemus</h3>';

    if(!empty($_POST)&&$source=='tulemus'){
        if(!isset($_SESSION["voted_for"])){
            $_SESSION["voted_for"]=$_POST["pilt"];
            echo'<p>valisid pildi nr '.($_POST["pilt"]+1).'</p>';
        } else {
            echo'<p>Kuigi praegu valisid pildi '.($_POST["pilt"]+1).',
                    siis juba varem oled valinud pildi '.($_SESSION["voted_for"]+1).'</p>';
        }
        echo '<img src="../pildid/nameless'.($_SESSION["voted_for"]+1).'.jpg" alt=""/>';
    }
    if(empty($_POST)&&$source=='tulemus'){
        echo '<p>Sa ei valinudki yhtegi pilti</p>';
    }
    if($source=='vote'&&empty($_POST)){
        echo'<p>oled juba valinud pildi nr '.($_SESSION["voted_for"]+1).'</p>';
        echo '<img src="../pildid/nameless'.($_SESSION["voted_for"]+1).'.jpg" alt=""/>';
    }

    echo '</div>';
}


include_once("footer.html");
?>