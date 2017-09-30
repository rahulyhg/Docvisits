<?php
include("./conf/config.inc.php");
$patientData = $_POST;
//print_r($patientData);
if(!empty($patientData)){
	$result = $scad->userExistancy($patientData['email']);	
	if(!$result >=1){
		$patientData['password'] = md5($patientData['password']);
		$patientData['createdate'] = date('Y-m-d H:i:s');
		$patientData['usertype'] = 2;
		unset($patientData['patprivacy']);
		unset($patientData['confirmpassword']);
		$random = substr(number_format(time() * mt_rand(),0,'',''),0,10);
		$ran=md5($random);
		$patientData['secret_key']=$ran;
		$patientData['status']=0;
		$userID =  $scad->insert('users',$patientData);
		console.log($userID);
		//$_SESSION['userID'] = $userID;		
		echo $userID;
		$toMail  = $patientData['email'];
		$ma=base64_encode($toMail);
		$toName  = $patientData['firstname']." ".$patientData['lastname'];
		$subject = 'Welcome to DocVisits!';
		$mailTemplate = '<div><h3 style="padding:12px;">Congratulations...!</h3><div style="padding:12px;font-family:Arial, Helvetica, sans-serif;font-size:14px;">You are successfully registered with DocVisits.<br /><a href="'.WEB_ROOT.'index.php/verify_account/'.$ran.'/'.$ma.'">Click  here to verify your account</a></div>';
		$scad->mailSending($toMail,$toName,$subject,$mailTemplate);	
	}else{	
		echo $errorflag = 0;
	}
}
?>