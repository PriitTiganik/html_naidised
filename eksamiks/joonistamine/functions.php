<?php
/**
 * Created by PhpStorm.
 * User: Priit
 * Date: 10/06/2016
 * Time: 22:55
 */
//echo $_POST["size"];


alusta_sessioon();

if(isset($_POST["size"])){
    lopeta_sessioon();
}


//echo $_POST["size"];

function alusta_sessioon(){
    // siin ees võiks muuta ka sessiooni kehtivusaega, aga see pole hetkel tähtis
    session_start();
    //echo "start";
    if(!isset($_SESSION["matrix"])){

        if(isset($_POST["size"])){
            $_SESSION["size"]=$_POST["size"];
        } else {
            $_SESSION["size"]=10;
        }

        $_SESSION["matrix"]=array();
        initialize_matrix();

    }
    read();
    include_once ("header.html");
    draw();

}

function lopeta_sessioon(){
    $_SESSION = array();
    if (isset($_COOKIE[session_name()])) {
        setcookie(session_name(), '', time()-42000, '/');
    }
    session_destroy();
}
function initialize_matrix(){
    for($i=0;$i< $_SESSION["size"];$i=$i+1){ //rows
        for($j=0;$j< $_SESSION["size"];$j=$j+1){//columns
            $_SESSION["matrix"][$i][$j]=0;
            //echo $_SESSION["matrix"][$i][$j];
        }
    }
}
function read(){
    if(isset($_GET["i"])&& isset($_GET["j"])){
        $_SESSION["i"]=$_GET["i"];
        $_SESSION["j"]=$_GET["j"];
        //$_SESSION["matrix"][$_SESSION["i"]][$_SESSION["j"]] = ($some_condition ? 1 : 2);
        //echo  $_SESSION["matrix"][$_SESSION["i"]][$_SESSION["j"]];
        $_SESSION["matrix"][$_SESSION["i"]][$_SESSION["j"]]=abs($_SESSION["matrix"][$_SESSION["i"]][$_SESSION["j"]]-1);
        //echo  $_SESSION["matrix"][$_SESSION["i"]][$_SESSION["j"]];
        //echo !1;
        header("Location:functions.php");
    }
}
function draw(){
    //echo $_SESSION["i"];
    //echo $_SESSION["j"];
    echo "<table border='1'>";
    for($i=0;$i< $_SESSION["size"];$i=$i+1){ //rows
        echo "<tr>";
        for($j=0;$j< $_SESSION["size"];$j=$j+1){//columns

            echo "<td>";

            echo '<a class="';
            if($_SESSION["matrix"][$i][$j]==1){
                echo 'black';
            } else {
                echo "white";
            }
            echo '" href="functions.php?i='.$i.'&j='.$j.'"><div>&nbsp;</div></a>';//&nbsp;

            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

