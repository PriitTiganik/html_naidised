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
	<h3>Vali oma lemmik :)</h3>
	<form action="tulemus.php" method="GET">

		<?php
		    $i=0;
			foreach($pictures as $pic){

                $jpgimg=$pic["big"];
                $alt=$pic["alt"];
                //echo '<img src="'.$jpgimg.'" alt="'.$alt.'">';

                echo '<p><label for="p'.$i.'">
                        <img src="'.$jpgimg.'" alt="'.$alt.'" height="100" />
                    </label>
                    <input type="radio" value="'.$i.'" id="p'.$i.'" name="pilt"/></p>';
                $i++;
            }
		?>
		<!--
		<p>
			<label for="p1">
				<img src="pildid/nameless1.jpg" alt="nimetu 1" height="100" />
			</label>
			<input type="radio" value="1" id="p1" name="pilt"/>
		</p>
		<p>			
			<label for="p2">
				<img src="pildid/nameless2.jpg" alt="nimetu 2" height="100" />
			</label>
			<input type="radio" value="2" id="p2" name="pilt"/>
		</p>
		<p>			
			<label for="p3">
				<img src="pildid/nameless3.jpg" alt="nimetu 3" height="100" />
			</label>
			<input type="radio" value="3" id="p3" name="pilt"/>
		</p>
		<p>			
			<label for="p4">
				<img src="pildid/nameless4.jpg" alt="nimetu 4" height="100" />
			</label>
			<input type="radio" value="4" id="p4" name="pilt"/>
		</p>
		<p>			
			<label for="p5">
				<img src="pildid/nameless5.jpg" alt="nimetu 5" height="100" />
			</label>
			<input type="radio" value="5" id="p5" name="pilt"/>
		</p>
		<p>			
			<label for="p6">
				<img src="pildid/nameless6.jpg" alt="nimetu 6" height="100" />
			</label>
			<input type="radio" value="6" id="p6" name="pilt"/>
		</p>-->
		<br/>
		<input type="submit"  value="Valin!"/>
	</form>

</div>
<?php require_once('footer.html')?>