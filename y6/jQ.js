/**
 * Created by Priit on 24/03/2016.
 */
$(document).ready(function(){
    //mida teha, kui lehe struktuur on 'ra laetud
    $("#esimene").css("color","green");
    console.log($("#esimene").css("color"));

    $(".teine").css({
        "color":"red",
        "font-weight":"bold",
        "font-size":"20px"
    });
    //console.log($(".teine"));

    $(".teine").first().css("background-color","skyblue");
    console.log($("p").get(3));
    //$("p").get(3).innerHTML="toimib ka";
    $("#esimene").next().next().css("background-color","skyblue");

    $("li").each(function(index){
        //mida iga elemendiga teha
        $(this).css("background-color",$(this).html());
    })

    //$("img").attr("src","veeriku.JPG");

    //$("p").each(function(){
    //    if(($this).hasClass("teine")){
    //        $(this).css("font-style","italic");
    //    }
    //})

    $("p").first().remove();

    $('.pilt').click(function(){
        //mida teha klikitud paragrahvi korral
        if($(".pilt").attr("src")=="veeriku.JPG"){
            $(".pilt").attr("src","annelinn.JPG");
        } else if($(".pilt").attr("src")=="annelinn.JPG"){
            $(".pilt").attr("src","veeriku.JPG");
        }
    });

    $('li').on({ ///mitu tegevust koos: .on
        mouseenter: function(){//midateha
            $(this).css("background-color","white");
        },
        mouseleave: function(){
            $(this).css("background-color",$(this).html());
        },
        click: function(){
            $(this).css("color","Gold");
        }
    });

    $('p').click(function(){//animatsioon
        $(this).hide(1000);
        //.show()
        // .toggle() -vt html
        // .animate({omadus:vaartus}) - muudab elemendi stiili
        });

    $('.target').click(function(){
        $side=Math.random()*100;
        $(this).animate(
            {"top": (Math.random()*500)+"px",
                "right": (Math.random()*500)+"px",
                "width":"100%*"+$side,
                "height":"100%*"+$side
            },
            500
        );
    });

    //AJAX
    //vt ajax.html
});
$(document).load(function(){
    //mida teha, kui terve leht kogu kraamiga on ara laetud

})
$('CSS_Selector')//
$(this)//viitamaks elemendile, mis mingi syndmuse puhul fni v'lja kutsus, kasutatakse











