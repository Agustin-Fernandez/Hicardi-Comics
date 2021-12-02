<?php

include 'db_connection.php';

$imgs1 = 'https://megabanana.mx/wp-content/uploads/2021/09/Portada_1_0-615x946-1.jpg'
. ',' . 'https://descargarcomic.com/wp-content/uploads/2020/10/4AA-666x1024.jpg'
. ',' . 'http://cdn.shopify.com/s/files/1/0051/8805/9206/products/injustice-gods-among-us-ano-dos1_1200x1200.jpg?v=1548183037'
. ',' . 'https://pm1.narvii.com/6085/d1fa71b856a94d652258de33383601fac1da43dc_hq.jpg'
. ',' . 'https://cdn.shopify.com/s/files/1/0051/8805/9206/products/injustice-gods-among-us-ano-cuatro3_1024x1024@2x.jpg?v=1548103550'
. ',' . 'http://cdn.shopify.com/s/files/1/0051/8805/9206/products/injustice-gods-among-us-ano-cuatro2_1200x1200.jpg?v=1548103549'
. ',' . 'https://2.bp.blogspot.com/-IIj-3XyjATw/Wlzbr5bTc7I/AAAAAAAAtwg/rC6wz5uSndIdH2vPs2p9eeU-M1NPOIzQgCLcBGAs/s1600/0.jpg';

$sql1 = "
    INSERT INTO comics VALUES (
        0,
        'Injustice: Gods Among Us',
        'Tom Taylor & Jheremy Raapack',
        '$imgs1'
    )
";

$query = $mysqli->query($sql1);

if($query) echo 'Comics creados correctamente';
if(!$query) echo 'Error al crear los comics';


$imgs2 = 'https://image.slidesharecdn.com/eleternautaparte01-140401185054-phpapp02/95/el-eternauta-parte-1-de-la-historieta-de-oesterheld-1-638.jpg?cb=1401780481'
. ',' . 'https://image.slidesharecdn.com/eleternautaparte01-140401185054-phpapp02/95/el-eternauta-parte-1-de-la-historieta-de-oesterheld-4-638.jpg?cb=1401780481'
. ',' . 'https://image.slidesharecdn.com/eleternautaparte01-140401185054-phpapp02/95/el-eternauta-parte-1-de-la-historieta-de-oesterheld-5-638.jpg?cb=1401780481'
. ',' . 'https://image.slidesharecdn.com/eleternautaparte01-140401185054-phpapp02/95/el-eternauta-parte-1-de-la-historieta-de-oesterheld-6-638.jpg?cb=1401780481'
. ',' . 'https://image.slidesharecdn.com/eleternautaparte01-140401185054-phpapp02/95/el-eternauta-parte-1-de-la-historieta-de-oesterheld-7-638.jpg?cb=1401780481'
. ',' . 'https://image.slidesharecdn.com/eleternautaparte01-140401185054-phpapp02/95/el-eternauta-parte-1-de-la-historieta-de-oesterheld-8-638.jpg?cb=1401780481'
. ',' . 'https://image.slidesharecdn.com/eleternautaparte01-140401185054-phpapp02/95/el-eternauta-parte-1-de-la-historieta-de-oesterheld-9-638.jpg?cb=1401780481'
. ',' . 'https://image.slidesharecdn.com/eleternautaparte01-140401185054-phpapp02/95/el-eternauta-parte-1-de-la-historieta-de-oesterheld-10-638.jpg?cb=1401780481'
. ',' . 'https://image.slidesharecdn.com/eleternautaparte01-140401185054-phpapp02/95/el-eternauta-parte-1-de-la-historieta-de-oesterheld-11-638.jpg?cb=1401780481'
. ',' . 'https://image.slidesharecdn.com/eleternautaparte01-140401185054-phpapp02/95/el-eternauta-parte-1-de-la-historieta-de-oesterheld-12-638.jpg?cb=1401780481'
. ',' . 'https://image.slidesharecdn.com/eleternautaparte01-140401185054-phpapp02/95/el-eternauta-parte-1-de-la-historieta-de-oesterheld-13-638.jpg?cb=1401780481'
. ',' . 'https://image.slidesharecdn.com/eleternautaparte01-140401185054-phpapp02/95/el-eternauta-parte-1-de-la-historieta-de-oesterheld-14-638.jpg?cb=1401780481'
. ',' . 'https://image.slidesharecdn.com/eleternautaparte01-140401185054-phpapp02/95/el-eternauta-parte-1-de-la-historieta-de-oesterheld-15-638.jpg?cb=1401780481'
. ',' . 'https://image.slidesharecdn.com/eleternautaparte01-140401185054-phpapp02/95/el-eternauta-parte-1-de-la-historieta-de-oesterheld-16-638.jpg?cb=1401780481'
. ',' . 'https://image.slidesharecdn.com/eleternautaparte01-140401185054-phpapp02/95/el-eternauta-parte-1-de-la-historieta-de-oesterheld-17-638.jpg?cb=1401780481'
. ',' . 'https://image.slidesharecdn.com/eleternautaparte01-140401185054-phpapp02/95/el-eternauta-parte-1-de-la-historieta-de-oesterheld-18-638.jpg?cb=1401780481'
. ',' . 'https://image.slidesharecdn.com/eleternautaparte01-140401185054-phpapp02/95/el-eternauta-parte-1-de-la-historieta-de-oesterheld-19-638.jpg?cb=1401780481'
. ',' . 'https://image.slidesharecdn.com/eleternautaparte01-140401185054-phpapp02/95/el-eternauta-parte-1-de-la-historieta-de-oesterheld-20-638.jpg?cb=1401780481'
. ',' . 'https://image.slidesharecdn.com/eleternautaparte01-140401185054-phpapp02/95/el-eternauta-parte-1-de-la-historieta-de-oesterheld-21-638.jpg?cb=1401780481'
. ',' . 'https://image.slidesharecdn.com/eleternautaparte01-140401185054-phpapp02/95/el-eternauta-parte-1-de-la-historieta-de-oesterheld-22-638.jpg?cb=1401780481'
. ',' . 'https://image.slidesharecdn.com/eleternautaparte01-140401185054-phpapp02/95/el-eternauta-parte-1-de-la-historieta-de-oesterheld-23-638.jpg?cb=1401780481'
. ',' . 'https://image.slidesharecdn.com/eleternautaparte01-140401185054-phpapp02/95/el-eternauta-parte-1-de-la-historieta-de-oesterheld-24-638.jpg?cb=1401780481'
. ',' . 'https://image.slidesharecdn.com/eleternautaparte01-140401185054-phpapp02/95/el-eternauta-parte-1-de-la-historieta-de-oesterheld-25-638.jpg?cb=1401780481'
. ',' . 'https://image.slidesharecdn.com/eleternautaparte01-140401185054-phpapp02/95/el-eternauta-parte-1-de-la-historieta-de-oesterheld-26-638.jpg?cb=1401780481'
. ',' . 'https://image.slidesharecdn.com/eleternautaparte01-140401185054-phpapp02/95/el-eternauta-parte-1-de-la-historieta-de-oesterheld-27-638.jpg?cb=1401780481'
. ',' . 'https://image.slidesharecdn.com/eleternautaparte01-140401185054-phpapp02/95/el-eternauta-parte-1-de-la-historieta-de-oesterheld-28-638.jpg?cb=1401780481'
. ',' . 'https://image.slidesharecdn.com/eleternautaparte01-140401185054-phpapp02/95/el-eternauta-parte-1-de-la-historieta-de-oesterheld-29-638.jpg?cb=1401780481'
. ',' . 'https://image.slidesharecdn.com/eleternautaparte01-140401185054-phpapp02/95/el-eternauta-parte-1-de-la-historieta-de-oesterheld-30-638.jpg?cb=1401780481'
. ',' . 'https://image.slidesharecdn.com/eleternautaparte01-140401185054-phpapp02/95/el-eternauta-parte-1-de-la-historieta-de-oesterheld-31-638.jpg?cb=1401780481'
. ',' . 'https://image.slidesharecdn.com/eleternautaparte01-140401185054-phpapp02/95/el-eternauta-parte-1-de-la-historieta-de-oesterheld-32-638.jpg?cb=1401780481';

$sql2 = "
    INSERT INTO comics VALUES (
        0,
        'El Eternauta (Parte 1)',
        'Hector German Oesterheld',
        '$imgs2'
    )
";

$query = $mysqli->query($sql2);

if($query) echo 'Comics creados correctamente';
if(!$query) echo 'Error al crear los comics';


$imgs3 = 'https://steamcdn-a.akamaihd.net/apps/tf2/tf01_ring_of_fired/images/comic/2048x1536/001.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf01_ring_of_fired/images/comic/2048x1536/002.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf01_ring_of_fired/images/comic/2048x1536/003.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf01_ring_of_fired/images/comic/2048x1536/004.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf01_ring_of_fired/images/comic/2048x1536/005.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf01_ring_of_fired/images/comic/2048x1536/006.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf01_ring_of_fired/images/comic/2048x1536/007.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf01_ring_of_fired/images/comic/2048x1536/008.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf01_ring_of_fired/images/comic/2048x1536/009.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf01_ring_of_fired/images/comic/2048x1536/010.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf01_ring_of_fired/images/comic/2048x1536/011.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf01_ring_of_fired/images/comic/2048x1536/013.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf01_ring_of_fired/images/comic/2048x1536/014.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf01_ring_of_fired/images/comic/2048x1536/015.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf01_ring_of_fired/images/comic/2048x1536/016.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf01_ring_of_fired/images/comic/2048x1536/017.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf01_ring_of_fired/images/comic/2048x1536/018.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf01_ring_of_fired/images/comic/2048x1536/019.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf01_ring_of_fired/images/comic/2048x1536/020.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf01_ring_of_fired/images/comic/2048x1536/021.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf01_ring_of_fired/images/comic/2048x1536/022.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf01_ring_of_fired/images/comic/2048x1536/023.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf01_ring_of_fired/images/comic/2048x1536/024.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf01_ring_of_fired/images/comic/2048x1536/025.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf01_ring_of_fired/images/comic/2048x1536/026.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf01_ring_of_fired/images/comic/2048x1536/027.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf01_ring_of_fired/images/comic/2048x1536/028.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf01_ring_of_fired/images/comic/2048x1536/029.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf01_ring_of_fired/images/comic/2048x1536/030.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf01_ring_of_fired/images/comic/2048x1536/031.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf01_ring_of_fired/images/comic/2048x1536/032.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf01_ring_of_fired/images/comic/2048x1536/034.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf01_ring_of_fired/images/comic/2048x1536/035.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf01_ring_of_fired/images/comic/2048x1536/036.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf01_ring_of_fired/images/comic/2048x1536/037.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf01_ring_of_fired/images/comic/2048x1536/038.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf01_ring_of_fired/images/comic/2048x1536/039.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf01_ring_of_fired/images/comic/2048x1536/040.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf01_ring_of_fired/images/comic/2048x1536/041.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf01_ring_of_fired/images/comic/2048x1536/042.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf01_ring_of_fired/images/comic/2048x1536/043.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf01_ring_of_fired/images/comic/2048x1536/044.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf01_ring_of_fired/images/comic/2048x1536/045.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf01_ring_of_fired/images/comic/2048x1536/046.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf01_ring_of_fired/images/comic/2048x1536/047.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf01_ring_of_fired/images/comic/2048x1536/048.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf01_ring_of_fired/images/comic/2048x1536/049.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf01_ring_of_fired/images/comic/2048x1536/050.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf01_ring_of_fired/images/comic/2048x1536/051.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf01_ring_of_fired/images/comic/2048x1536/052.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf01_ring_of_fired/images/comic/2048x1536/053.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf01_ring_of_fired/images/comic/2048x1536/054.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf01_ring_of_fired/images/comic/2048x1536/055.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf01_ring_of_fired/images/comic/2048x1536/056.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf01_ring_of_fired/images/comic/2048x1536/057.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf01_ring_of_fired/images/comic/2048x1536/058.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf01_ring_of_fired/images/comic/2048x1536/059.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf01_ring_of_fired/images/comic/2048x1536/060.jpg?v=3';

$sql3 = "
    INSERT INTO comics VALUES (
        0,
        'TF2 Comics #1: Ring of Fired',
        'Valve',
        '$imgs3'
    )
";

$query = $mysqli->query($sql3);

if($query) echo 'Comics creados correctamente';
if(!$query) echo 'Error al crear los comics';


$imgs4 = 'https://steamcdn-a.akamaihd.net/apps/tf2/tf02_unhappy_returns/images/comic/2048x1536/001.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf02_unhappy_returns/images/comic/2048x1536/002.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf02_unhappy_returns/images/comic/2048x1536/003.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf02_unhappy_returns/images/comic/2048x1536/004.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf02_unhappy_returns/images/comic/2048x1536/005.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf02_unhappy_returns/images/comic/2048x1536/006.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf02_unhappy_returns/images/comic/2048x1536/007.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf02_unhappy_returns/images/comic/2048x1536/008.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf02_unhappy_returns/images/comic/2048x1536/009.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf02_unhappy_returns/images/comic/2048x1536/010.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf02_unhappy_returns/images/comic/2048x1536/011.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf02_unhappy_returns/images/comic/2048x1536/013.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf02_unhappy_returns/images/comic/2048x1536/014.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf02_unhappy_returns/images/comic/2048x1536/015.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf02_unhappy_returns/images/comic/2048x1536/016.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf02_unhappy_returns/images/comic/2048x1536/017.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf02_unhappy_returns/images/comic/2048x1536/018.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf02_unhappy_returns/images/comic/2048x1536/019.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf02_unhappy_returns/images/comic/2048x1536/020.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf02_unhappy_returns/images/comic/2048x1536/021.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf02_unhappy_returns/images/comic/2048x1536/022.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf02_unhappy_returns/images/comic/2048x1536/023.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf02_unhappy_returns/images/comic/2048x1536/024.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf02_unhappy_returns/images/comic/2048x1536/025.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf02_unhappy_returns/images/comic/2048x1536/026.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf02_unhappy_returns/images/comic/2048x1536/027.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf02_unhappy_returns/images/comic/2048x1536/028.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf02_unhappy_returns/images/comic/2048x1536/029.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf02_unhappy_returns/images/comic/2048x1536/030.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf02_unhappy_returns/images/comic/2048x1536/031.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf02_unhappy_returns/images/comic/2048x1536/032.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf02_unhappy_returns/images/comic/2048x1536/034.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf02_unhappy_returns/images/comic/2048x1536/035.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf02_unhappy_returns/images/comic/2048x1536/036.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf02_unhappy_returns/images/comic/2048x1536/037.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf02_unhappy_returns/images/comic/2048x1536/038.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf02_unhappy_returns/images/comic/2048x1536/039.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf02_unhappy_returns/images/comic/2048x1536/040.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf02_unhappy_returns/images/comic/2048x1536/041.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf02_unhappy_returns/images/comic/2048x1536/042.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf02_unhappy_returns/images/comic/2048x1536/043.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf02_unhappy_returns/images/comic/2048x1536/044.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf02_unhappy_returns/images/comic/2048x1536/045.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf02_unhappy_returns/images/comic/2048x1536/046.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf02_unhappy_returns/images/comic/2048x1536/047.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf02_unhappy_returns/images/comic/2048x1536/048.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf02_unhappy_returns/images/comic/2048x1536/049.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf02_unhappy_returns/images/comic/2048x1536/050.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf02_unhappy_returns/images/comic/2048x1536/051.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf02_unhappy_returns/images/comic/2048x1536/052.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf02_unhappy_returns/images/comic/2048x1536/053.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf02_unhappy_returns/images/comic/2048x1536/054.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf02_unhappy_returns/images/comic/2048x1536/055.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf02_unhappy_returns/images/comic/2048x1536/056.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf02_unhappy_returns/images/comic/2048x1536/057.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf02_unhappy_returns/images/comic/2048x1536/058.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf02_unhappy_returns/images/comic/2048x1536/059.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf02_unhappy_returns/images/comic/2048x1536/060.jpg?v=3';

$sql4 = "
    INSERT INTO comics VALUES (
        0,
        'TF2 Comics #2: Unhappy Returns',
        'Valve',
        '$imgs4'
    )
";

$query = $mysqli->query($sql4);

if($query) echo 'Comics creados correctamente';
if(!$query) echo 'Error al crear los comics';


$imgs5 = 'https://2.bp.blogspot.com/fhJCiaOv7yM7whLFcOxPb8cS0gMXUgXq1zFDHGFQ647zdDyLq5Z21B4AVldUxMZPCaeFFcNmi9ME=s1600'
. ',' . 'https://2.bp.blogspot.com/Tbgg5sFR_so4fg4f2c3evcIiDxZJ-pTKv3rFgdsGdKphpodiuVqd4VaZE6qdi5R5vU-zormQBI6y=s1600'
. ',' . 'https://2.bp.blogspot.com/lLEgwsCNIxDQJXW7943s9V8ycvJ9ZJEfDaMxJh_kSyzT_17mXMtuxBhHrovLmVk-BRPNqCVLVLaR=s1600'
. ',' . 'https://2.bp.blogspot.com/5TlJt6CL1jYmNSjjr_MuTkN1Hjn-qkkzgTwcBB-_6pdZiA8crm9eCkcK8-I_dHbBonyMRw-B4DkP=s1600'
. ',' . 'https://2.bp.blogspot.com/1sahh-Qj6y6uJrLQ0cHo9b53s6CPTs9zFX3HV-Tm5h9daVPEx4DJA2jXpIa7DRDqjaTaxyxGTblq=s1600'
. ',' . 'https://2.bp.blogspot.com/y72bYVRSBuqig4lzMGEMy065Vn1xxhaM2bvfKNAi3UWyjf99z43-w_c73BbASB8MsVjruvTMzZ78=s1600'
. ',' . 'https://2.bp.blogspot.com/Ik599Gz3puiEEW1rbgtcr7TGDX2m98xz-ppYnD9o-ukQJ3BLcmB6Lg_igX4E3Vo7QwMLiVmbZQSQ=s1600';

$sql5 = "
    INSERT INTO comics VALUES (
        0,
        'Batman: The Killing Joke',
        'Alan Moore, Brian Bolland & John Higgins',
        '$imgs5'
    )
";

$query = $mysqli->query($sql5);

if($query) echo 'Comics creados correctamente';
if(!$query) echo 'Error al crear los comics';


$imgs6 = 'https://steamcdn-a.akamaihd.net/apps/tf2/tf03_cold_day_in_hell/images/comic/2048x1536/001.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf03_cold_day_in_hell/images/comic/2048x1536/002.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf03_cold_day_in_hell/images/comic/2048x1536/003.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf03_cold_day_in_hell/images/comic/2048x1536/004.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf03_cold_day_in_hell/images/comic/2048x1536/005.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf03_cold_day_in_hell/images/comic/2048x1536/006.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf03_cold_day_in_hell/images/comic/2048x1536/007.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf03_cold_day_in_hell/images/comic/2048x1536/008.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf03_cold_day_in_hell/images/comic/2048x1536/009.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf03_cold_day_in_hell/images/comic/2048x1536/010.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf03_cold_day_in_hell/images/comic/2048x1536/011.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf03_cold_day_in_hell/images/comic/2048x1536/013.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf03_cold_day_in_hell/images/comic/2048x1536/014.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf03_cold_day_in_hell/images/comic/2048x1536/015.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf03_cold_day_in_hell/images/comic/2048x1536/016.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf03_cold_day_in_hell/images/comic/2048x1536/017.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf03_cold_day_in_hell/images/comic/2048x1536/018.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf03_cold_day_in_hell/images/comic/2048x1536/019.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf03_cold_day_in_hell/images/comic/2048x1536/020.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf03_cold_day_in_hell/images/comic/2048x1536/021.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf03_cold_day_in_hell/images/comic/2048x1536/022.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf03_cold_day_in_hell/images/comic/2048x1536/023.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf03_cold_day_in_hell/images/comic/2048x1536/024.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf03_cold_day_in_hell/images/comic/2048x1536/025.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf03_cold_day_in_hell/images/comic/2048x1536/026.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf03_cold_day_in_hell/images/comic/2048x1536/027.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf03_cold_day_in_hell/images/comic/2048x1536/028.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf03_cold_day_in_hell/images/comic/2048x1536/029.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf03_cold_day_in_hell/images/comic/2048x1536/030.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf03_cold_day_in_hell/images/comic/2048x1536/031.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf03_cold_day_in_hell/images/comic/2048x1536/032.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf03_cold_day_in_hell/images/comic/2048x1536/034.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf03_cold_day_in_hell/images/comic/2048x1536/035.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf03_cold_day_in_hell/images/comic/2048x1536/036.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf03_cold_day_in_hell/images/comic/2048x1536/037.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf03_cold_day_in_hell/images/comic/2048x1536/038.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf03_cold_day_in_hell/images/comic/2048x1536/039.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf03_cold_day_in_hell/images/comic/2048x1536/040.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf03_cold_day_in_hell/images/comic/2048x1536/041.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf03_cold_day_in_hell/images/comic/2048x1536/042.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf03_cold_day_in_hell/images/comic/2048x1536/043.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf03_cold_day_in_hell/images/comic/2048x1536/044.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf03_cold_day_in_hell/images/comic/2048x1536/045.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf03_cold_day_in_hell/images/comic/2048x1536/046.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf03_cold_day_in_hell/images/comic/2048x1536/047.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf03_cold_day_in_hell/images/comic/2048x1536/048.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf03_cold_day_in_hell/images/comic/2048x1536/049.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf03_cold_day_in_hell/images/comic/2048x1536/050.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf03_cold_day_in_hell/images/comic/2048x1536/051.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf03_cold_day_in_hell/images/comic/2048x1536/052.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf03_cold_day_in_hell/images/comic/2048x1536/053.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf03_cold_day_in_hell/images/comic/2048x1536/054.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf03_cold_day_in_hell/images/comic/2048x1536/055.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf03_cold_day_in_hell/images/comic/2048x1536/056.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf03_cold_day_in_hell/images/comic/2048x1536/057.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf03_cold_day_in_hell/images/comic/2048x1536/058.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf03_cold_day_in_hell/images/comic/2048x1536/059.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf03_cold_day_in_hell/images/comic/2048x1536/060.jpg?v=3';

$sql6 = "
    INSERT INTO comics VALUES (
        0,
        'TF2 Comics #3: A Cold Day in Hell',
        'Valve',
        '$imgs6'
    )
";

$query = $mysqli->query($sql6);

if($query) echo 'Comics creados correctamente';
if(!$query) echo 'Error al crear los comics';


$imgs7 = 'https://steamcdn-a.akamaihd.net/apps/tf2/tf04_blood_in_the_water/images/comic/2048x1536/001.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf04_blood_in_the_water/images/comic/2048x1536/002.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf04_blood_in_the_water/images/comic/2048x1536/003.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf04_blood_in_the_water/images/comic/2048x1536/004.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf04_blood_in_the_water/images/comic/2048x1536/005.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf04_blood_in_the_water/images/comic/2048x1536/006.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf04_blood_in_the_water/images/comic/2048x1536/007.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf04_blood_in_the_water/images/comic/2048x1536/008.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf04_blood_in_the_water/images/comic/2048x1536/009.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf04_blood_in_the_water/images/comic/2048x1536/010.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf04_blood_in_the_water/images/comic/2048x1536/011.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf04_blood_in_the_water/images/comic/2048x1536/013.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf04_blood_in_the_water/images/comic/2048x1536/014.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf04_blood_in_the_water/images/comic/2048x1536/015.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf04_blood_in_the_water/images/comic/2048x1536/016.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf04_blood_in_the_water/images/comic/2048x1536/017.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf04_blood_in_the_water/images/comic/2048x1536/018.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf04_blood_in_the_water/images/comic/2048x1536/019.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf04_blood_in_the_water/images/comic/2048x1536/020.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf04_blood_in_the_water/images/comic/2048x1536/021.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf04_blood_in_the_water/images/comic/2048x1536/022.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf04_blood_in_the_water/images/comic/2048x1536/023.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf04_blood_in_the_water/images/comic/2048x1536/024.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf04_blood_in_the_water/images/comic/2048x1536/025.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf04_blood_in_the_water/images/comic/2048x1536/026.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf04_blood_in_the_water/images/comic/2048x1536/027.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf04_blood_in_the_water/images/comic/2048x1536/028.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf04_blood_in_the_water/images/comic/2048x1536/029.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf04_blood_in_the_water/images/comic/2048x1536/030.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf04_blood_in_the_water/images/comic/2048x1536/031.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf04_blood_in_the_water/images/comic/2048x1536/032.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf04_blood_in_the_water/images/comic/2048x1536/034.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf04_blood_in_the_water/images/comic/2048x1536/035.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf04_blood_in_the_water/images/comic/2048x1536/036.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf04_blood_in_the_water/images/comic/2048x1536/037.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf04_blood_in_the_water/images/comic/2048x1536/038.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf04_blood_in_the_water/images/comic/2048x1536/039.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf04_blood_in_the_water/images/comic/2048x1536/040.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf04_blood_in_the_water/images/comic/2048x1536/041.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf04_blood_in_the_water/images/comic/2048x1536/042.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf04_blood_in_the_water/images/comic/2048x1536/043.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf04_blood_in_the_water/images/comic/2048x1536/044.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf04_blood_in_the_water/images/comic/2048x1536/045.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf04_blood_in_the_water/images/comic/2048x1536/046.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf04_blood_in_the_water/images/comic/2048x1536/047.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf04_blood_in_the_water/images/comic/2048x1536/048.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf04_blood_in_the_water/images/comic/2048x1536/049.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf04_blood_in_the_water/images/comic/2048x1536/050.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf04_blood_in_the_water/images/comic/2048x1536/051.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf04_blood_in_the_water/images/comic/2048x1536/052.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf04_blood_in_the_water/images/comic/2048x1536/053.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf04_blood_in_the_water/images/comic/2048x1536/054.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf04_blood_in_the_water/images/comic/2048x1536/055.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf04_blood_in_the_water/images/comic/2048x1536/056.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf04_blood_in_the_water/images/comic/2048x1536/057.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf04_blood_in_the_water/images/comic/2048x1536/058.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf04_blood_in_the_water/images/comic/2048x1536/059.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf04_blood_in_the_water/images/comic/2048x1536/060.jpg?v=3';

$sql7 = "
    INSERT INTO comics VALUES (
        0,
        'TF2 Comics #4: Blood In The Water',
        'Valve',
        '$imgs7'
    )
";

$query = $mysqli->query($sql7);

if($query) echo 'Comics creados correctamente';
if(!$query) echo 'Error al crear los comics';


$imgs8 = 'https://steamcdn-a.akamaihd.net/apps/tf2/tf05_old_wounds/images/comic/2048x1536/001.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf05_old_wounds/images/comic/2048x1536/002.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf05_old_wounds/images/comic/2048x1536/003.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf05_old_wounds/images/comic/2048x1536/004.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf05_old_wounds/images/comic/2048x1536/005.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf05_old_wounds/images/comic/2048x1536/006.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf05_old_wounds/images/comic/2048x1536/007.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf05_old_wounds/images/comic/2048x1536/008.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf05_old_wounds/images/comic/2048x1536/009.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf05_old_wounds/images/comic/2048x1536/010.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf05_old_wounds/images/comic/2048x1536/011.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf05_old_wounds/images/comic/2048x1536/013.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf05_old_wounds/images/comic/2048x1536/014.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf05_old_wounds/images/comic/2048x1536/015.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf05_old_wounds/images/comic/2048x1536/016.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf05_old_wounds/images/comic/2048x1536/017.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf05_old_wounds/images/comic/2048x1536/018.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf05_old_wounds/images/comic/2048x1536/019.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf05_old_wounds/images/comic/2048x1536/020.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf05_old_wounds/images/comic/2048x1536/021.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf05_old_wounds/images/comic/2048x1536/022.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf05_old_wounds/images/comic/2048x1536/023.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf05_old_wounds/images/comic/2048x1536/024.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf05_old_wounds/images/comic/2048x1536/025.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf05_old_wounds/images/comic/2048x1536/026.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf05_old_wounds/images/comic/2048x1536/027.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf05_old_wounds/images/comic/2048x1536/028.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf05_old_wounds/images/comic/2048x1536/029.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf05_old_wounds/images/comic/2048x1536/030.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf05_old_wounds/images/comic/2048x1536/031.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf05_old_wounds/images/comic/2048x1536/032.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf05_old_wounds/images/comic/2048x1536/034.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf05_old_wounds/images/comic/2048x1536/035.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf05_old_wounds/images/comic/2048x1536/036.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf05_old_wounds/images/comic/2048x1536/037.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf05_old_wounds/images/comic/2048x1536/038.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf05_old_wounds/images/comic/2048x1536/039.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf05_old_wounds/images/comic/2048x1536/040.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf05_old_wounds/images/comic/2048x1536/041.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf05_old_wounds/images/comic/2048x1536/042.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf05_old_wounds/images/comic/2048x1536/043.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf05_old_wounds/images/comic/2048x1536/044.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf05_old_wounds/images/comic/2048x1536/045.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf05_old_wounds/images/comic/2048x1536/046.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf05_old_wounds/images/comic/2048x1536/047.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf05_old_wounds/images/comic/2048x1536/048.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf05_old_wounds/images/comic/2048x1536/049.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf05_old_wounds/images/comic/2048x1536/050.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf05_old_wounds/images/comic/2048x1536/051.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf05_old_wounds/images/comic/2048x1536/052.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf05_old_wounds/images/comic/2048x1536/053.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf05_old_wounds/images/comic/2048x1536/054.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf05_old_wounds/images/comic/2048x1536/055.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf05_old_wounds/images/comic/2048x1536/056.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf05_old_wounds/images/comic/2048x1536/057.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf05_old_wounds/images/comic/2048x1536/058.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf05_old_wounds/images/comic/2048x1536/059.jpg?v=3'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf05_old_wounds/images/comic/2048x1536/060.jpg?v=3';

$sql8 = "
    INSERT INTO comics VALUES (
        0,
        'TF2 Comics #5: Old Wounds',
        'Valve',
        '$imgs8'
    )
";

$query = $mysqli->query($sql8);

if($query) echo 'Comics creados correctamente';
if(!$query) echo 'Error al crear los comics';


$imgs9 = 'https://blasto.enterprises/comics/1/1.png'
. ',' . 'https://blasto.enterprises/comics/1/2.png'
. ',' . 'https://blasto.enterprises/comics/1/3.png'
. ',' . 'https://blasto.enterprises/comics/1/4.png'
. ',' . 'https://blasto.enterprises/comics/1/5.png'
. ',' . 'https://blasto.enterprises/comics/1/6.png';

$sql9 = "
    INSERT INTO comics VALUES (
        0,
        'Bittersweet Candy Bowl',
        'Veronica Vera',
        '$imgs9'
    )
";

$query = $mysqli->query($sql9);

if($query) echo 'Comics creados correctamente';
if(!$query) echo 'Error al crear los comics';


$imgs10 = 'https://steamcdn-a.akamaihd.net/apps/tf2/tf06_thenakedandthedead/images/comic/2048x1536/001.png?v=2'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf06_thenakedandthedead/images/comic/2048x1536/002.png?v=2'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf06_thenakedandthedead/images/comic/2048x1536/003.png?v=2'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf06_thenakedandthedead/images/comic/2048x1536/004.png?v=2'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf06_thenakedandthedead/images/comic/2048x1536/005.png?v=2'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf06_thenakedandthedead/images/comic/2048x1536/006.png?v=2'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf06_thenakedandthedead/images/comic/2048x1536/007.png?v=2'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf06_thenakedandthedead/images/comic/2048x1536/008.png?v=2'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf06_thenakedandthedead/images/comic/2048x1536/009.png?v=2'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf06_thenakedandthedead/images/comic/2048x1536/010.png?v=2'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf06_thenakedandthedead/images/comic/2048x1536/011.png?v=2'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf06_thenakedandthedead/images/comic/2048x1536/013.png?v=2'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf06_thenakedandthedead/images/comic/2048x1536/014.png?v=2'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf06_thenakedandthedead/images/comic/2048x1536/015.png?v=2'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf06_thenakedandthedead/images/comic/2048x1536/016.png?v=2'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf06_thenakedandthedead/images/comic/2048x1536/017.png?v=2'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf06_thenakedandthedead/images/comic/2048x1536/018.png?v=2'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf06_thenakedandthedead/images/comic/2048x1536/019.png?v=2'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf06_thenakedandthedead/images/comic/2048x1536/020.png?v=2'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf06_thenakedandthedead/images/comic/2048x1536/021.png?v=2'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf06_thenakedandthedead/images/comic/2048x1536/022.png?v=2'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf06_thenakedandthedead/images/comic/2048x1536/023.png?v=2'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf06_thenakedandthedead/images/comic/2048x1536/024.png?v=2'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf06_thenakedandthedead/images/comic/2048x1536/025.png?v=2'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf06_thenakedandthedead/images/comic/2048x1536/026.png?v=2'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf06_thenakedandthedead/images/comic/2048x1536/027.png?v=2'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf06_thenakedandthedead/images/comic/2048x1536/028.png?v=2'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf06_thenakedandthedead/images/comic/2048x1536/029.png?v=2'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf06_thenakedandthedead/images/comic/2048x1536/030.png?v=2'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf06_thenakedandthedead/images/comic/2048x1536/031.png?v=2'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf06_thenakedandthedead/images/comic/2048x1536/032.png?v=2'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf06_thenakedandthedead/images/comic/2048x1536/034.png?v=2'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf06_thenakedandthedead/images/comic/2048x1536/035.png?v=2'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf06_thenakedandthedead/images/comic/2048x1536/036.png?v=2'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf06_thenakedandthedead/images/comic/2048x1536/037.png?v=2'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf06_thenakedandthedead/images/comic/2048x1536/038.png?v=2'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf06_thenakedandthedead/images/comic/2048x1536/039.png?v=2'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf06_thenakedandthedead/images/comic/2048x1536/040.png?v=2'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf06_thenakedandthedead/images/comic/2048x1536/041.png?v=2'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf06_thenakedandthedead/images/comic/2048x1536/042.png?v=2'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf06_thenakedandthedead/images/comic/2048x1536/043.png?v=2'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf06_thenakedandthedead/images/comic/2048x1536/044.png?v=2'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf06_thenakedandthedead/images/comic/2048x1536/045.png?v=2'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf06_thenakedandthedead/images/comic/2048x1536/046.png?v=2'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf06_thenakedandthedead/images/comic/2048x1536/047.png?v=2'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf06_thenakedandthedead/images/comic/2048x1536/048.png?v=2'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf06_thenakedandthedead/images/comic/2048x1536/049.png?v=2'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf06_thenakedandthedead/images/comic/2048x1536/050.png?v=2'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf06_thenakedandthedead/images/comic/2048x1536/051.png?v=2'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf06_thenakedandthedead/images/comic/2048x1536/052.png?v=2'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf06_thenakedandthedead/images/comic/2048x1536/053.png?v=2'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf06_thenakedandthedead/images/comic/2048x1536/054.png?v=2'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf06_thenakedandthedead/images/comic/2048x1536/055.png?v=2'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf06_thenakedandthedead/images/comic/2048x1536/056.png?v=2'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf06_thenakedandthedead/images/comic/2048x1536/057.png?v=2'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf06_thenakedandthedead/images/comic/2048x1536/058.png?v=2'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf06_thenakedandthedead/images/comic/2048x1536/059.png?v=2'
. ',' . 'https://steamcdn-a.akamaihd.net/apps/tf2/tf06_thenakedandthedead/images/comic/2048x1536/060.png?v=2';

$sql10 = "
    INSERT INTO comics VALUES (
        0,
        'TF2 Comics #6: The Naked And The Dead',
        'Valve',
        '$imgs10'
    )
";

$query = $mysqli->query($sql10);

if($query) echo 'Comics creados correctamente';
if(!$query) echo 'Error al crear los comics';


$imgs11 = 'https://www.housepetscomic.com/wp-content/uploads/2016/07/2008-06-02-when-boredom-strikes.png'
. ',' . 'https://www.housepetscomic.com/wp-content/uploads/2016/07/2008-06-04-mission-cleanliness.png'
. ',' . 'https://www.housepetscomic.com/wp-content/uploads/2016/07/2008-06-06-the-first-comic-with-ninjas-in-it.png'
. ',' . 'https://www.housepetscomic.com/wp-content/uploads/2016/07/2008-06-09-negotiations-break-down.png'
. ',' . 'https://www.housepetscomic.com/wp-content/uploads/2016/07/2008-06-11-it-gets-worse.png'
. ',' . 'https://www.housepetscomic.com/wp-content/uploads/2016/07/2008-06-13-it-always-comes-to-an-end.png';

$sql11 = "
    INSERT INTO comics VALUES (
        0,
        'Housepets!',
        'Rick Griffin',
        '$imgs11'
    )
";

$query = $mysqli->query($sql11);

if($query) echo 'Comics creados correctamente';
if(!$query) echo 'Error al crear los comics';


$imgs12 = 'https://www.normaeditorial.com/upload/media/albumes/0001/07/daabfaa9b80dc5f8c76c74e7aa4199e5bb0e4720.jpeg'
. ',' . 'https://www.normaeditorial.com/upload/media/lecturas/0001/12/cca229e1824b1f7ec82fc41c20048ad7461cf01d.jpeg'
. ',' . 'https://www.normaeditorial.com/upload/media/lecturas/0001/12/082b9a778c79ab682d9257a0d488f5b1f361792f.jpeg'
. ',' . 'https://www.normaeditorial.com/upload/media/lecturas/0001/12/5ecfac1bfb9001d309cfaccfb8d1e42eed05357a.jpeg'
. ',' . 'https://www.normaeditorial.com/upload/media/lecturas/0001/12/326fed54c6b93adac6d857a38c711fe9e4c1748b.jpeg'
. ',' . 'https://www.normaeditorial.com/upload/media/lecturas/0001/12/a2652dd343bccabf160cffb3288ad51152513ad2.jpeg';

$sql12 = "
    INSERT INTO comics VALUES (
        0,
        'Bloodborne: La Muerte Del Sueño',
        'William Simpson, Ales Kot & Piotr Kowalski',
        '$imgs12'
    )
";

$query = $mysqli->query($sql12);

if($query) echo 'Comics creados correctamente';
if(!$query) echo 'Error al crear los comics';


$imgs13 = 'http://media.steampowered.com/apps/portal2/comic/part1/p00.jpg'
. ',' . 'http://media.steampowered.com/apps/portal2/comic/part1/p01.jpg'
. ',' . 'http://media.steampowered.com/apps/portal2/comic/part1/p02.jpg'
. ',' . 'http://media.steampowered.com/apps/portal2/comic/part1/p03.jpg'
. ',' . 'http://media.steampowered.com/apps/portal2/comic/part1/p04.jpg'
. ',' . 'http://media.steampowered.com/apps/portal2/comic/part1/p05.jpg'
. ',' . 'http://media.steampowered.com/apps/portal2/comic/part1/p06.jpg'
. ',' . 'http://media.steampowered.com/apps/portal2/comic/part1/p07.jpg'
. ',' . 'http://media.steampowered.com/apps/portal2/comic/part1/p08.jpg'
. ',' . 'http://media.steampowered.com/apps/portal2/comic/part1/p09.jpg'
. ',' . 'http://media.steampowered.com/apps/portal2/comic/part1/p10.jpg'
. ',' . 'http://media.steampowered.com/apps/portal2/comic/part1/p11.jpg'
. ',' . 'http://media.steampowered.com/apps/portal2/comic/part1/p12.jpg'
. ',' . 'http://media.steampowered.com/apps/portal2/comic/part1/p13.jpg'
. ',' . 'http://media.steampowered.com/apps/portal2/comic/part1/p14.jpg'
. ',' . 'http://media.steampowered.com/apps/portal2/comic/part1/p15.jpg'
. ',' . 'http://media.steampowered.com/apps/portal2/comic/part1/p16.jpg'
. ',' . 'http://media.steampowered.com/apps/portal2/comic/part1/p17.jpg'
. ',' . 'http://media.steampowered.com/apps/portal2/comic/part1/p18.jpg'
. ',' . 'http://media.steampowered.com/apps/portal2/comic/part1/p19.jpg'
. ',' . 'http://media.steampowered.com/apps/portal2/comic/part1/p20.jpg'
. ',' . 'http://media.steampowered.com/apps/portal2/comic/part1/p21.jpg'
. ',' . 'http://media.steampowered.com/apps/portal2/comic/part1/p22.jpg'
. ',' . 'http://media.steampowered.com/apps/portal2/comic/part1/p23.jpg'
. ',' . 'http://media.steampowered.com/apps/portal2/comic/part1/p24.jpg'
. ',' . 'http://media.steampowered.com/apps/portal2/comic/part1/p25.jpg'
. ',' . 'http://media.steampowered.com/apps/portal2/comic/part1/p26.jpg';

$sql13 = "
    INSERT INTO comics VALUES (
        0,
        'Portal2: Lab Rat',
        'Michael Avon Oeming, Andrea Wicklund, Erik Wolpaw, Chet Faliszek, Jay Pinkerton & Ted Kosmatka',
        '$imgs13'
    )
";

$query = $mysqli->query($sql13);

if($query) echo 'Comics creados correctamente';
if(!$query) echo 'Error al crear los comics';


$imgs14 = 'https://nimg.taadd.com/manga3/29/10030748/100262140/2613464_2021031217449.jpg'
. ',' . 'https://nimg.taadd.com/manga3/29/10030748/100262140/2613464_202103129442.jpg'
. ',' . 'https://nimg.taadd.com/manga3/29/10030748/100262140/2613464_202103122794.jpg'
. ',' . 'https://nimg.taadd.com/manga3/29/10030748/100262140/2613464_2021031210722.jpg'
. ',' . 'https://nimg.taadd.com/manga3/29/10030748/100262140/2613464_202103121903.jpg'
. ',' . 'https://nimg.taadd.com/manga3/29/10030748/100262140/2613464_2021031218603.jpg'
. ',' . 'https://nimg.taadd.com/manga3/29/10030748/100262140/2613464_2021031210816.jpg'
. ',' . 'https://nimg.taadd.com/manga3/29/10030748/100262140/2613464_2021031211379.jpg'
. ',' . 'https://nimg.taadd.com/manga3/29/10030748/100262140/2613464_20210312951.jpg'
. ',' . 'https://nimg.taadd.com/manga3/29/10030748/100262140/2613464_202103124298.jpg'
. ',' . 'https://nimg.taadd.com/manga3/29/10030748/100262140/2613464_2021031212020.jpg'
. ',' . 'https://nimg.taadd.com/manga3/29/10030748/100262140/2613464_202103126797.jpg'
. ',' . 'https://nimg.taadd.com/manga3/29/10030748/100262140/2613464_202103123692.jpg'
. ',' . 'https://nimg.taadd.com/manga3/29/10030748/100262140/2613464_202103127306.jpg'
. ',' . 'https://nimg.taadd.com/manga3/29/10030748/100262140/2613464_2021031216769.jpg'
. ',' . 'https://nimg.taadd.com/manga3/29/10030748/100262140/2613464_2021031216713.jpg'
. ',' . 'https://nimg.taadd.com/manga3/29/10030748/100262140/2613464_202103128934.jpg'
. ',' . 'https://nimg.taadd.com/manga3/29/10030748/100262140/2613464_2021031217182.jpg'
. ',' . 'https://nimg.taadd.com/manga3/29/10030748/100262140/2613464_202103125226.jpg'
. ',' . 'https://nimg.taadd.com/manga3/29/10030748/100262140/2613464_2021031215048.jpg'
. ',' . 'https://nimg.taadd.com/manga3/29/10030748/100262140/2613464_2021031218924.jpg';

$sql14 = "
    INSERT INTO comics VALUES (
        0,
        'God Of War: Dios Caído',
        'Chris Roberson, Tony Parker & Dan Jackson',
        '$imgs14'
    )
";

$query = $mysqli->query($sql14);

if($query) echo 'Comics creados correctamente';
if(!$query) echo 'Error al crear los comics';


$imgs15 = 'https://www.sdamned.com/comics/2004-03-13.png'
. ',' . 'https://www.sdamned.com/comics/1634247239-001.jpg'
. ',' . 'https://www.sdamned.com/comics/1634246777-002.jpg'
. ',' . 'https://www.sdamned.com/comics/1634246748-003.jpg'
. ',' . 'https://www.sdamned.com/comics/1634247153-004.jpg'
. ',' . 'https://www.sdamned.com/comics/1634590883-005.jpg'
. ',' . 'https://www.sdamned.com/comics/1634590895-006.jpg'
. ',' . 'https://www.sdamned.com/comics/1634590914-007.jpg'
. ',' . 'https://www.sdamned.com/comics/2004-05-02.jpg'
. ',' . 'https://www.sdamned.com/comics/2004-05-03.jpg'
. ',' . 'https://www.sdamned.com/comics/2004-05-10.jpg'
. ',' . 'https://www.sdamned.com/comics/2004-06-18.jpg'
. ',' . 'https://www.sdamned.com/comics/2004-06-20.jpg'
. ',' . 'https://www.sdamned.com/comics/2004-06-21.jpg'
. ',' . 'https://www.sdamned.com/comics/2004-06-22.jpg'
. ',' . 'https://www.sdamned.com/comics/2004-06-23.jpg'
. ',' . 'https://www.sdamned.com/comics/2004-06-26.jpg'
. ',' . 'https://www.sdamned.com/comics/2004-06-29.jpg'
. ',' . 'https://www.sdamned.com/comics/2004-07-10.jpg'
. ',' . 'https://www.sdamned.com/comics/2004-07-18.jpg'
. ',' . 'https://www.sdamned.com/comics/2004-07-25.jpg'
. ',' . 'https://www.sdamned.com/comics/2004-08-05.jpg'
. ',' . 'https://www.sdamned.com/comics/2004-08-08.jpg';

$sql15 = "
    INSERT INTO comics VALUES (
        0,
        'Slightly Damned',
        'Chu',
        '$imgs15'
    )
";

$query = $mysqli->query($sql15);

if($query) echo 'Comics creados correctamente';
if(!$query) echo 'Error al crear los comics';


$imgs16 = 'https://2.bp.blogspot.com/-KWm8f2C-U34/VqHtS1HC3-I/AAAAAAAASVA/jCvksQ_lh34/s1600-Ic42/RCO001.jpg'
. ',' . 'https://2.bp.blogspot.com/-ZuUu8yoNG8c/VqHtTLtrMLI/AAAAAAAASVA/whqVo7I9B5c/s1600-Ic42/RCO003.jpg'
. ',' . 'https://2.bp.blogspot.com/-g8tltSqVvT8/VqHtTkQZlLI/AAAAAAAASVA/FuebRPG9AbM/s1600-Ic42/RCO004.jpg'
. ',' . 'https://2.bp.blogspot.com/-jGLXHGcPrt0/VqHtUWHs0HI/AAAAAAAASVA/h0JsTQuZo00/s1600-Ic42/RCO005.jpg'
. ',' . 'https://2.bp.blogspot.com/-LOtxBsLadLY/VqHtU7E4bBI/AAAAAAAASVA/uba5MENZ4SY/s1600-Ic42/RCO006.jpg'
. ',' . 'https://2.bp.blogspot.com/-bc0cwHp74m0/VqHtU3K_vBI/AAAAAAAASVA/BOU2ziC7TyI/s1600-Ic42/RCO007.jpg'
. ',' . 'https://2.bp.blogspot.com/-aSYyE2XB73M/VqHtVEwT3gI/AAAAAAAASVA/LPX0OBRv7jk/s1600-Ic42/RCO008.jpg'
. ',' . 'https://2.bp.blogspot.com/-gNTT3ZGZAVc/VqHtV0AJWZI/AAAAAAAASVA/nGog5YE4ZgY/s1600-Ic42/RCO009.jpg'
. ',' . 'https://2.bp.blogspot.com/-1HcGLzb673g/VqHtWqWqN8I/AAAAAAAASVA/vzDHt5aoogo/s1600-Ic42/RCO010.jpg'
. ',' . 'https://2.bp.blogspot.com/-og5tYfmdIko/VqHtW9Nl84I/AAAAAAAASVA/zS2Os784hMw/s1600-Ic42/RCO011.jpg'
. ',' . 'https://2.bp.blogspot.com/-nK6yjOw9Rqs/VqHtXLi2PWI/AAAAAAAASVA/4n25Plok_FQ/s1600-Ic42/RCO012.jpg'
. ',' . 'https://2.bp.blogspot.com/-m0iFtX9FWkY/VqHtXJK27_I/AAAAAAAASVQ/qb-q7R3bUTM/s1600-Ic42/RCO013.jpg'
. ',' . 'https://2.bp.blogspot.com/-5oyfmwJ_A84/VqHtXlj5o6I/AAAAAAAASVM/BpAcgw36rpg/s1600-Ic42/RCO014.jpg'
. ',' . 'https://2.bp.blogspot.com/-61uchi7JbnU/VqHtX1zFkeI/AAAAAAAASVA/xCBZC6yOLog/s1600-Ic42/RCO015.jpg'
. ',' . 'https://2.bp.blogspot.com/-o2a13_Y77RI/VqHtYPgVYnI/AAAAAAAASVA/PRzAdvLSgS0/s1600-Ic42/RCO016.jpg'
. ',' . 'https://2.bp.blogspot.com/-gnyqGQ1b9PU/VqHtYGlW1cI/AAAAAAAASVA/AvM82q-bu3o/s1600-Ic42/RCO017.jpg'
. ',' . 'https://2.bp.blogspot.com/-_4uKodaQDRI/VqHtYpkp_GI/AAAAAAAASVA/ESO2vumS3fk/s1600-Ic42/RCO018.jpg'
. ',' . 'https://2.bp.blogspot.com/-SBRSUYJaITM/VqHtY6-Ix9I/AAAAAAAASVY/X8ydXqLXBbQ/s1600-Ic42/RCO019.jpg'
. ',' . 'https://2.bp.blogspot.com/-dICjL5K10EA/VqHtYy2IGGI/AAAAAAAASVA/TRZsZHIL1Nc/s1600-Ic42/RCO020.jpg'
. ',' . 'https://2.bp.blogspot.com/-WiRkRXTaMaM/VqHtZQ7PSRI/AAAAAAAASVA/ZT4MyrVUWtw/s1600-Ic42/RCO021.jpg'
. ',' . 'https://2.bp.blogspot.com/-BuKNn0tnCFo/VqHtZWx4BhI/AAAAAAAASVA/JxlUKyvjCMs/s1600-Ic42/RCO022.jpg'
. ',' . 'https://2.bp.blogspot.com/-AgGBUqUg7u4/VqHtZunBpMI/AAAAAAAASVI/MwsnU6TSCoY/s1600-Ic42/RCO023.jpg'
. ',' . 'https://2.bp.blogspot.com/-uh1bPM-jP50/VqHtZoEHscI/AAAAAAAASVA/A5KkMGWvInY/s1600-Ic42/RCO024.jpg';

$sql16 = "
    INSERT INTO comics VALUES (
        0,
        'Watchmen',
        'Alan Moore, Dave Gibbons & John Higgins',
        '$imgs16'
    )
";

$query = $mysqli->query($sql16);

if($query) echo 'Comics creados correctamente';
if(!$query) echo 'Error al crear los comics';


$imgs17 = 'https://cdn.imagecomics.com/files/read/die/die_0001.jpg'
. ',' . 'https://cdn.imagecomics.com/files/read/die/die_0002.jpg'
. ',' . 'https://cdn.imagecomics.com/files/read/die/die_0004.jpg'
. ',' . 'https://cdn.imagecomics.com/files/read/die/die_0005.jpg'
. ',' . 'https://cdn.imagecomics.com/files/read/die/die_0006.jpg'
. ',' . 'https://cdn.imagecomics.com/files/read/die/die_0007.jpg'
. ',' . 'https://cdn.imagecomics.com/files/read/die/die_0008.jpg'
. ',' . 'https://cdn.imagecomics.com/files/read/die/die_0009.jpg'
. ',' . 'https://cdn.imagecomics.com/files/read/die/die_0010.jpg'
. ',' . 'https://cdn.imagecomics.com/files/read/die/die_0011.jpg';

$sql17 = "
    INSERT INTO comics VALUES (
        0,
        'DIE',
        'Kieron Gillen & Stephanie Hans',
        '$imgs17'
    )
";

$query = $mysqli->query($sql17);

if($query) echo 'Comics creados correctamente';
if(!$query) echo 'Error al crear los comics';


$imgs18 = 'https://1.bp.blogspot.com/-0fpXc13eNyI/XcQvXIDu3lI/AAAAAAAAANQ/HHGsygRNsG43OcuEL9y5WFwx-K07QSv3wCNcBGAsYHQ/s1600/003.jpg'
. ',' . 'https://1.bp.blogspot.com/-f3z8SBLRKT8/XcQvYABfGWI/AAAAAAAAANU/egrFPJG4ojsruF1pt8y2abGx767QzA5QQCNcBGAsYHQ/s1600/004.jpg'
. ',' . 'https://1.bp.blogspot.com/-Xmnr8QD6KVo/XcQvYvCYm0I/AAAAAAAAANY/wq1969f8ZasdRDGBaRL4J5hUkG8IgL30ACNcBGAsYHQ/s1600/005.jpg'
. ',' . 'https://1.bp.blogspot.com/-8zYNc2r219k/XcQvZlPPe7I/AAAAAAAAANo/71zbCTU7zacH20XtqpbcNbu1Nltuw7HfACNcBGAsYHQ/s1600/009.jpg'
. ',' . 'https://1.bp.blogspot.com/-0IpgIXSd1Bk/XcQvaHX-mAI/AAAAAAAAANw/saporLldC8UcxP8kHpGk-Sb9DNnN5q6pwCNcBGAsYHQ/s1600/011.jpg';

$sql18 = "
    INSERT INTO comics VALUES (
        0,
        'Gantz',
        'Hiroya Oku',
        '$imgs18'
    )
";

$query = $mysqli->query($sql18);

if($query) echo 'Comics creados correctamente';
if(!$query) echo 'Error al crear los comics';


$imgs19 = 'https://2.bp.blogspot.com/9Nlf_EHAZRL3CtpcSFSlONxoyC_2LyW3358-1h2eEMbCqUK47RijeO81MxXuz1Pfr04PeafHpSUGulGbtkOM249y6yanurVDQBiDIfgNS0Yo-1VI63dLLAw7gi2USENoG64qFBRqjg=s1600'
. ',' . 'https://2.bp.blogspot.com/redojQmAAlO36aEGcXp33TZbH16kQy6ouJebIS0li7b0stPXAdq8j3J00QCRXp5kg6Hrnkl7Sh0l2h2Olf0e4NaXSKnpKe5QMRXnSORHTAni7nEPy9QmvTfktTWTujp9gWMlHsigPQ=s1600'
. ',' . 'https://2.bp.blogspot.com/G8dEsia61eCEIp0BfTnlkj9XDnpJKfAH7cVWkYFLix6I3ZBjd-eeSTJa8ffmAC3kdzLhgp0QAPaLCw0anayowXmlxelvPZkqfkZtjUCAYW6R2CQYyG2komjPJ-9gWIW0X-piaoGqUw=s1600'
. ',' . 'https://2.bp.blogspot.com/xpukSZBwTgms_BxAXWH7hf75WcYRlyDdXecd2LN0BbYMUdQyfTqx_9msn9LlC7KcbcovmoqtZRrsz6cD6e1admGr-ys5seDBhL67LUgOaaGaoaIBqpC9yihmm1l9FiHIs03refUSpA=s1600'
. ',' . 'https://2.bp.blogspot.com/C0un4pvDFZZLfGo7q2k5NDYz9O8h8xBzbrdM05cVIeKji2WhC7RjwF-OC3KYQAdxTJoZbpVL9Nq74NrRa_x_xWpCXthEE_54NPMeUAD2Bb6NzMNUxEOUw97ANcqhOzDf8N4xF-YvRg=s1600'
. ',' . 'https://2.bp.blogspot.com/tfJFrUyNfPy6vrzudFtxtYVTOA3T0jqp0A8JATXnPufCQC8QNC4EPPWA1Vu5Y1cKZbwpO4wYI1XnVlURpGpj2u_lLKw5txDsLw3RDCgJlMg2nXmeAM_QKTKHi6Ral3qtJYaos2VS1w=s1600'
. ',' . 'https://2.bp.blogspot.com/ltbrvEjdLohRofiwIcHscdrWVHWln_W_zD4QSyTUidSYKmRSo-WNybTFUGc3t9-RhzrR7rPhm8N4Msr-3GIj8CUtDtegl3Ov0W0SRywNX5UDR9yb6WbU80cdgN4DGKF0EqSO-V2ekw=s1600';

$sql19 = "
    INSERT INTO comics VALUES (
        0,
        'Dark Ark',
        'Cullen Bunn & Juan Doe',
        '$imgs19'
    )
";

$query = $mysqli->query($sql19);

if($query) echo 'Comics creados correctamente';
if(!$query) echo 'Error al crear los comics';


$imgs20 = 'https://2.bp.blogspot.com/aYoJl2hxs-_NdqAZX4YBmAkw4KCJ6_YlmXtKfybf2fe29P6Drjd22Rs2qEgLrCOtkmqC39lgbA003sw=w700'
. ',' . 'https://2.bp.blogspot.com/8WDAKgKuKWt5x6cNeUsngYNpnzXrur5G7C1fMT2aocfMdCHUo_yP17ZX2P4aYU3mnwk-TH391CvO4Fo=w700'
. ',' . 'https://2.bp.blogspot.com/eRhkMgWEhdnv7EvPMfD9g2bn-oKgKqpV0bV2Rio-DrRf_1VDWqPJqT40FSVM0IPSdk7Fj7NMe7q13dM=w700'
. ',' . 'https://2.bp.blogspot.com/Fg69wbWNtxTfwt5-C9nLzzABnDDfyTcKhLm9-YvUAe9cgIkWwRyTVjExIRjBmk7SRDX4IBZTxl9hT6o=w700'
. ',' . 'https://2.bp.blogspot.com/1-o1-LVDTv6z8nJx2wdzRMJJvLe0ByVbSou0u94jvacJFvVad17IvJFGOBQ3vnQ8l0Df1auZQvChQ5M=w700';

$sql20 = "
    INSERT INTO comics VALUES (
        0,
        'Alice in Borderlands',
        'Haro Aso',
        '$imgs20'
    )
";

$query = $mysqli->query($sql20);

if($query) echo 'Comics creados correctamente';
if(!$query) echo 'Error al crear los comics';

?>
