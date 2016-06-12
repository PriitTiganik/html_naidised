/**
 * Created by Priit on 10/06/2016.
 */


//alert('tere1');
window.onload=function(){
    var popup = document.querySelectorAll('.popup');

    var closepopup = document.querySelectorAll('.close');

    closepopup[0].onclick=function tere(){
        //alert('klikk1');
        popup[0].style.display='none';
    };
}
