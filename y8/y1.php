
<?php
$myurl=$_SERVER['PHP_SELF'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo $myurl;
    //echo $_POST['textarea'];
}

$backcolor="#fff"; // vaikimisi valge
if (isset($_POST['backcolor']) && $_POST['backcolor']!="") {
    $backcolor=htmlspecialchars($_POST['backcolor']);
} ;
$fontcolor="#000000";
if (isset($_POST['fontcolor']) && $_POST['fontcolor']!="") {
    $fontcolor=htmlspecialchars($_POST['fontcolor']);
};
echo isset($_POST['textarea']);
echo $_POST['textarea']!="";
if (isset($_POST['textarea']) && $_POST['textarea']!="") {
    $textarea=htmlspecialchars($_POST['textarea']);
} else{
    $textarea="kirjuta midagi..";
};

?>
    <style type="text/css">
        #tekst {
            background-color: <?php echo  $backcolor ?>;
            color: <?php echo  $fontcolor ?>;
        }
        </style>

<div id="tekst">
    <?php if (isset($_POST['textarea']) && $_POST['textarea']!="") {
        $textarea=htmlspecialchars($_POST['textarea']);

    }; echo     $textarea     ?>
</div>
<br><br>
<form action="<?php echo $myurl?>" method="POST">
    <textarea name = 'textarea' rows="4" cols="50">kirjuta midagi..</textarea>
    <br>
    <input type="color" name ='backcolor'> Taustavarv
    <br>
    <input type="color" name='fontcolor'> Tekstivarv
    <br>
    <button type="submit">
        uuenda teksti kujundus
    </button>
</form>

<?php?>