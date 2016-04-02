/**
 * Created by Priit on 27/03/2016.
 */
$(document).ready(function(){
    $('#menu li').mouseenter(function(){
        //var el = $('this').find('li');
        $(this).find('li').show();
        //$(this).find('li').css("height","20px");
        $(this).find('li').animate({"height": "20px"},
            200,
            function(){
                /* funktsioon, mis käivitatakse animatsiooni lõpus*/

            })/**/
    });

    $('#menu >li').mouseleave(function(){
        $(this).find('li').animate({"height": "0px"},
            1000, function(){
                $(this).hide();
            })
    });

});