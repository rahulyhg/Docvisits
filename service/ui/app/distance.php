<?php
echo $url = 'https://maps.googleapis.com/maps/api/distancematrix/json?units=imperial&origins='.urlencode($_SESSION['userAddress']).'&destinations=500050&key=AIzaSyDtCtNnx_y65T5gdUE2lkZ-fN8v2F86lfY';
$obj = json_decode(file_get_contents($url), true);
//print_r($obj);
if($obj['status'] == 'OK'){
//print_r($obj['rows'][0]['elements'][0]);
	echo $distance=$obj['rows'][0]['elements'][0]['distance']['text'];

} else {
	echo $obj['status'].strtoupper();
}
//['elements']['distance'];
//echo $obj[0].destination_addresses;
//echo $distance=$obj[0].rows[0].elements[0].distance;

?>