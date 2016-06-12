<?php require_once('header.html')?>
<div id="wrap">
	<h3>Valiku tulemus</h3>

	<?php
    //var_dump($_GET);
    if(!empty($_GET)){
        echo'<p>valisid pildi nr '.($_GET["pilt"]+1).'</p>';
        echo '<img src="../pildid/nameless'.($_GET["pilt"]+1).'.jpg" alt=""/>';
    }else{
        echo '<p>Sa ei valinudki yhtegi pilti</p>';
    }

    ?>

</div>
<?php require_once('footer.html')?>