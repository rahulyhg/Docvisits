<?php
echo $url = 'https://maps.googleapis.com/maps/api/distancematrix/json?units=imperial&origins='.$_SESSION['zip'].'&destinations=&key=AIzaSyDtCtNnx_y65T5gdUE2lkZ-fN8v2F86lfY';
$obj = json_decode(file_get_contents($url), true);
echo $obj;
?>