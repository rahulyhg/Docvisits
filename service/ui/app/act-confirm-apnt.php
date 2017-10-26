<?php
include("./conf/config.inc.php");
$patientData = $_POST;
if(!empty($patientData)){
  $apntData['doctor_id'] = $patientData['doctor_id']; 
  $apnttime = $patientData['apnttime'];
  $time=explode(",",$apnttime);
  $tim=explode(" ",$time[2]);
  $time1=$tim[2];
  $ti=strtotime($time1);
  $apntData['patient_id'] = $patientData['patiendid'];
  $apntData['apnt_note'] = $patientData['apnt_note'];
  $apntData['apnt_starttime'] = $time1; 
  $apntData['apnt_date'] = date("Y-m-d", strtotime($time[0]));
  $time2 = strtotime('+15 minutes', $ti);
  $Times = date('H:i A', $time2);
  $apntData['apnt_endtime'] = $Times; 
  //print_r($apntData);

  $result=$scad->getApntDetails($apntData['doctor_id'],date("Y-m-d", strtotime($time[0])),$time1,$apntData['patient_id']);
  //echo $result;
  if(empty($result)){
    //echo "in if";
    $userID =  $scad->insert('doctor_appointments',$apntData);
    //echo $userID;
    $_SESSION['apnt_ID']=$userID;
    if(!empty($userID)){
     $toMail  = $patientData['email'];
     $ma=base64_encode($toMail);
     $toName  = $patientData['name'];
     $subject = 'Appointment Conformation!';
		 //$mailTemplate = '<div><img src="'.WEB_ROOT.'/service/public/images/logo1.png" ><br/><br />
     $mailTemplate = '<div>
     <div style="padding:12px;font-family:Arial, Helvetica, sans-serif;font-size:14px;">
      <b>Confirm appointment with '.$patientData[docname].' has been scheduled for '.$patientData[apnttime].'.</b><br /><br />
      Doc Visits<br />
      To Me Today at '.date("H:i").' PM Doc Visits '.$patientData[docname].' on '.$patientData[apnttime].'.<br /><br/>
      Kind Regards,<br />
      Your Doc Visits Team<br /><br />
      <a href="'.WEB_ROOT.'index.php/patient/profile" target="_blank">My Dashboard</a> | <a target="_blank" href="'.WEB_ROOT.'index.php/past_appoinments">My Appointments</a>  | <a target="_blank" href="'.WEB_ROOT.'index.php//patient/profile">My Preferred Doctors</a>  |<a target="_blank" href="'.WEB_ROOT.'index.php/search"> Find Doctors</a> <br /><br />
      Doc Visits Contact us at service@docvisits.om<br />
      1180 Spring Centre South Blvd. Suite 209, Altamonte Springs, FL 32714<br /><br />
      Kind Regards,<br />
      Your Doc Visits Team<br /><br />
    </div>';
    //echo "before sending email".$toMail;
    $scad->mailSending($toMail,$toName,$subject,$mailTemplate);	
    //echo "after sending email";
  }
}
else{
  echo $errorflag=0;
  //echo "in else loop";
}

$docresult = $scad->getUserDetails($patientData['doctor_id']);
$from_name = "Doc Visits";        
$from_address = "support@docvisits.com";        
$to_name = $patientData[docname];        
$to_address = $docresult['email'];       
$startTime = $apntData['apnt_starttime'];        
$endTime = $apntData['apnt_endtime'];        
$subject = $apntData['apnt_note'];  
$mailSubject = "Appointment Booked by Patient ".$$patientData['name'];
$mailTemplate = '<div>
<div style="padding:12px;font-family:Arial, Helvetica, sans-serif;font-size:14px;">
  Confirm Appointment booked by patient '.$patientData['name'].' scheduled for '.$patientData['apnttime'].'. Reason for Visit: '.$subject.'<br /><br />
  <a href="'.WEB_ROOT.'index.php/doctor/profile" target="_blank">My Calendar</a> <br /><br />
  Doc Visits Contact us at info@docvisits.om<br />
  4 Ardmore Pl, East Brunswick, New Jersey, 08816<br /><br />
  Kind Regards,<br />
  Your Doc Visits Team<br /><br />
</div>';
$scad->mailSending($to_address,$to_name,$mailSubject,$mailTemplate);  
//sendIcalEvent($from_name, $from_address, $to_name, $to_address, $startTime, $endTime, $subject);     
//echo 1;
}

else{
	echo $errorflag=0;
}

function sendIcalEvent($from_name, $from_address, $to_name, $to_address, $startTime, $endTime, $subject)
{
  $domain = 'docvisits.com';

    //Create Email Headers
  $mime_boundary = "----Meeting Booking----".MD5(TIME());

  $headers = "From: ".$from_name." <".$from_address.">\n";
  $headers .= "Reply-To: ".$from_name." <".$from_address.">\n";
  $headers .= "MIME-Version: 1.0\n";
  $headers .= "Content-Type: multipart/alternative; boundary=\"$mime_boundary\"\n";
  $headers .= "Content-class: urn:content-classes:calendarmessage\n";

    //Create Email Body (HTML)
  $message = "--$mime_boundary\r\n";
  $message .= "Content-Type: text/html; charset=UTF-8\n";
  $message .= "Content-Transfer-Encoding: 8bit\n\n";
  $message .= "<html>\n";
  $message .= "<body>\n";
  $message .= '<p>Dear '.$to_name.',</p>';
  $message .= "</body>\n";
  $message .= "</html>\n";
  $message .= "--$mime_boundary\r\n";
  $message .= "Content-Transfer-Encoding: 8bit\n\n";
  $scad->mailSending($to_address,$from_name,$subject,$message);	
}
?>