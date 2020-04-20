<?php 
$def_lat=29.5;
$def_log=35.4;
$user_lat=89.54;

$lat=isset($user_lat)?$user_lat:$def_lat;
$coal=$user_lat??$def_lat;

echo $lat.PHP_EOL;
echo $coal.PHP_EOL;