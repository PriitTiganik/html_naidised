/**
 * Created by Priit on 27/03/2016.
 */
$(document).ready(function(){
    $("li.click").click(function(){
        //$("ul>li>ul").hide();
        $("#menu ul").hide(300);
        $(this).children($("ul")).show(300);
    })
    $("li.hover").mouseenter(function(){
        //$("ul>li>ul").hide();
        $("#menu ul").hide(300);
        $(this).children($("ul")).show(300);
    })
    $("li.hover").mouseleave(function(){
        //$("ul>li>ul").hide();
        $("#menu ul").hide(300);

    })

});