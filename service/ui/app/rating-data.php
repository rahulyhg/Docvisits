<?php
include("./conf/config.inc.php");
$postData = $_POST;
 if(!empty($postData)){
	if($postData['update'] == '0'){
		
		$Data['overall'] = $postData['ovrall'];
		$Data['beside'] = $postData['condition'];
		$Data['ansque'] = $postData['ansque'];
		$Data['spend'] = $postData['spend'];
		$Data['office'] = $postData['office'];
		$Data['staff'] = $postData['staff'];
		$Data['waiting'] = $postData['waiting'];
		$Data['message'] = $postData['msg'];
		$Data['userid'] = $postData['userget'];
		$Data['doctor_id'] = $postData['docId'];
		$userID =  $scad->insert('ratings',$Data);		 

	}else{
		$Data['overall'] = $postData['ovrall'];
		$Data['beside'] = $postData['condition'];
		$Data['ansque'] = $postData['ansque'];
		$Data['spend'] = $postData['spend'];
		$Data['office'] = $postData['office'];
		$Data['staff'] = $postData['staff'];
		$Data['waiting'] = $postData['waiting'];
		$Data['message'] = $postData['msg'];
		$condition="userid='".$postData['userget']."' AND doctor_id='".$postData['docId']."'";
		$userID =  $scad->update('ratings',$Data,$condition);
	}
	}
	else
	{	
		echo $errorflag = 0;
	}

?> 









