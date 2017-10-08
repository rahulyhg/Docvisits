<?php
include("./conf/config.inc.php");
$Data = $_POST;
//print_r($Data);
//echo $email=base64_decode($Data['mail']);
$result = $scad->userExistancy(base64_decode($Data['mail']));	
//print_r($result);
//exit;
//echo $result['usertype'];
if(!empty($result)){
	$data['status']=1;
	$table='users';
	$where='email=\''.base64_decode($Data['mail']).'\' and secret_key=\''.$Data['key'].'\'';
	$userID =  $scad->update($table, $data, $where);
	$_SESSION['userID'] = $result['id'];
	$_SESSION['userType']=	$result['usertype'];
	$_SESSION['name']=$result['firstname'];
	echo $result['usertype'];
}
else{
	echo 0;
}

?>