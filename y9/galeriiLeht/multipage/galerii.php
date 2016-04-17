<?php require_once('header.html');


$pictures=array(
    array("big"=>"../pildid/nameless1.jpg", "alt"=>"img1"),
    array("big"=>"../pildid/nameless2.jpg", "alt"=>"img2"),
    array("big"=>"../pildid/nameless3.jpg", "alt"=>"img3"),
    array("big"=>"../pildid/nameless4.jpg", "alt"=>"img4"),
    array("big"=>"../pildid/nameless5.jpg", "alt"=>"img5"),
    array("big"=>"../pildid/nameless6.jpg", "alt"=>"img6")
);


?>
<div id="wrap">
	<h3>Fotod</h3>
	<div id="gallery">
		<?php
		foreach($pictures as $pic){
            //var_dump($pic);
            $jpgimg=$pic["big"];
            $alt=$pic["alt"];
            echo '<img src="'.$jpgimg.'" alt="'.$alt.'">';
        }
		?>
<!--		<img src="pildid/nameless1.jpg" alt="nimetu 1" />
		<img src="pildid/nameless2.jpg" alt="nimetu 2" />
		<img src="pildid/nameless3.jpg" alt="nimetu 3" />
		<img src="pildid/nameless4.jpg" alt="nimetu 4" />
		<img src="pildid/nameless5.jpg" alt="nimetu 5" />
		<img src="pildid/nameless6.jpg" alt="nimetu 6" />-->
	</div>
</div>
<?php require_once('footer.html')?>