<?php
// jäädvustame selle lehe aadressi, et saaks kerge vaevaga sellele linkida
$myurl=$_SERVER['PHP_SELF'];

if (isset($_REQUEST['info'])){
    echo "<p>_REQUEST massiivis on väli 'info': ".$_REQUEST['info']."</p>"; }

if (isset($_POST['info'])){
    echo "<p>_POST massiivis on väli 'info': ".$_POST['info']."<br/>Pane tähele, et aadressiribal on ainult selle lehe aadress</p>"; }

if (isset($_GET['info'])){
    echo "<p>_GET massiivis on väli 'info': ".$_GET['info']."<br/>Pane tähele, et aadressiribal on GET parameetrid kuvatud</p>"; }
?>
<form action="<?php echo $myurl?>" method="GET">
    <input type="text" name="info" value="saadame GET meetodiga"/>
    <input type="submit" value="saada GET!"/>
</form>

<form action="<?php echo $myurl?>" method="POST">
    <input type="text" name="info" value="saadame POST meetodiga"/>
    <input type="submit" value="saada POST!"/>
</form>

<p><a href="<?php echo $myurl?>?info=lingis+on+GET">GET parameetriga link</a></p>