/**
 * Created by Priit on 06/03/2016.
 */

//funktsioon
function liida(a){
    return a+1;
}
//alert(liida(1))


// mutuja voib olla anonyymne fn
var nimi= function(a){
    return a+1;
}
//alert(nimi(2))

//onload
/*
window.onload = function(){
    //mida teha kui leht on laetud
}
*/

//syndmuse haldur on parem kui onload, ei teki koodis konflikte
//load ootab kogu lehe laadimist, sh pildid jm
/*window.addEventListener("load", function(){
    //mida teha kui leht on laetud
})*/
//DOM laadimine ootab ainult lehe struktuuri laadimist
/*window.addEventListener("DOMContentLoaded", function(){
    //mida teha kui DOM puu on laetud
})*/

///skoop ja muutujad
var num;//globaalne muutuja, globaalne skoop
function miski(){
    var text="asd"; //lokaalne
    text="fgh";//lokaalse yle vaartustamine
    num=100;//globaalse yle vaartustamine
    uus=true;//uus globaalmuutuja, aga ara pigem kasuta, "strict modes" ei toota
}

//massiivid
var massiiv=new Array();//pikkust ei pea lisama
massiiv[0]="element";
var ostud=["juust","sai"];
var mitu =ostud.length; //annab tegelt viimasena kasutatud elemendi+1

//ts[klid
/*for(var i=0;i<10;i++){
    //tegevus
}*/
/*while (tingimus){
    //tegevus
}*/
/*if(tingimus1){
    //
} else if (tingimus2){
    //
} else {

}*/

//hankimine id j'rgi
var nr = document.getElementById('nr');
//var nr = document.getElementById('nr').innerHTML;
if(nr){
    nr.innerHTML=1
}

//hankimine css selectorite j'rgi
//esimene selctorile vastav
var nr = document.querySelector('body p#nr');
if(nr){
    nr.innerHTML=2
}
//koik selektorile vastavad
var nr = document.querySelectorAll('body p#nr');
if(nr[0]){
    nr[0].innerHTML=3
}

//saan muutujast ka selectorit kasutada
var p=document.querySelectorAll('p');
var b = p[1].querySelector('b');
//umbes nagu CSSiga saan kujundust muuta
b.style.color='red';
b.style.fontSize='30px';

//Events

//kuulajad Events
//onclick vt html osa
//onmouseover
//onmouseout
//onchange

//saan muuta pilti
var pilt=document.querySelector('.pilt');
pilt.onclick=function(){
    pilt.src="http://geekscience.net/wp-content/uploads/2014/08/pato-gigante-3.jpg";
}
//voi
pilt.addEventListener('dblclick',function midateha(){
    pilt.src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcSWmezpCb6OnfcK_RIHZNV9mV0HWOz9EHHDkqDBU2ykRtBxIXz9";
})






