<?php
/**
 * Created by PhpStorm.
 * User: Priit
 * Date: 02/04/2016
 * Time: 12:17
 */

$kassid= array(
    array('nimi'=>'Miisu', 'vanus'=>2, 'sugu'=>'m', 'omanik'=>'Priit'),
    array('nimi'=>'Tom', 'vanus'=>1, 'sugu'=>'m', 'omanik'=>'Mailis'),
    array('nimi'=>'Miau', 'vanus'=>4, 'sugu'=>'n', 'omanik'=>'Teo')
);

foreach($kassid as $kass){


    include("kassid.html");
}

?>