<?php

include 'db_connection.php';

$imgs1 = 'https://www.housepetscomic.com/wp-content/uploads/2021/11/2021-11-26-life-is-gross-kill-it-all.png'
. ',' . 'https://brandemia.org/sites/default/files/inline/images/volkswagen_logo-portada.jpg'
. ',' . 'https://www.tailorbrands.com/wp-content/uploads/2020/07/mcdonalds-logo.jpg';

$sql1 = "
    INSERT INTO comics VALUES (
        0,
        'El eternauta (english) 12',
        'Hector German HEsTEerngeerg',
        '$imgs1'
    )
";

$query = $mysqli->query($sql1);

if($query) echo 'Comics creados correctamente';
if(!$query) echo 'Error al crear los comics';

?>
