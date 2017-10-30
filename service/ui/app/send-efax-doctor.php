<?php
include("conf/config.inc.php");
$id = $_SESSION['userID'];

$data = $_POST;
 
if(isset($data['req']) && $data['req'] != ""){

$doc = $scad->getDocDetails($data['phy_name']);
//print_r($doc[0]['email']);exit;
//echo str_replace("-","",$data['fax_num']);exit;
$content = "<!DOCTYPE html>
<html>
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>

<table>
  <tr>
    <td>Patient Name</td>
    <td>".$data['name']."</td>
  </tr>
  <tr>
    <td>Patient DOB</td>
    <td>".$data['dob']."</td>
  </tr> 
  <tr>
    <td>Parent or Guardian's Name</td>
    <td>".$data['perent_name']."</td>
  </tr>
  <tr>
    <td>Patient Primary Phone</td>
    <td>".$data['number1'] ."</td>
  </tr>
  <tr>
    <td>Patient Alternate Phone</td>
    <td>".$data['number2'] ."</td>
  </tr>
  <tr>
    <td>Additional Notest and Questions</td>
    <td>".$data['note']."</td>
  </tr>
  
</table>

</body>
</html>
";
$faxfile = fopen(getcwd()."/service/ui/app/immu_efaxfiles/req_efax".$id.".html", "w");
fwrite($faxfile, $content);
fclose($faxfile);

$fileContents=file_get_contents(getcwd()."/service/ui/app/immu_efaxfiles/req_efax".$id.".html");
$fileContentsEncoded=base64_encode($fileContents);
$xml = "<?xml version=\"1.0\"?>
	<OutboundRequest>
		<AccessControl>
			<UserName>docvisit732</UserName>
			<Password>docvisit732</Password>
		</AccessControl>
	<Transmission>
		<TransmissionControl>
			<TransmissionID>".$id."</TransmissionID>
			<Resolution>STANDARD</Resolution>
			<Priority>NORMAL</Priority>
			<SelfBusy>ENABLE</SelfBusy>
			<FaxHeader>\"@DATE1 @TIME3 @ROUTETO{26} @RCVRFAX Pg%P/@TPAGES\"</FaxHeader>
		</TransmissionControl>
		<DispositionControl>
			<DispositionURL>http://docvisits.com</DispositionURL>
			<DispositionLevel>BOTH</DispositionLevel>
			<DispositionMethod>EMAIL</DispositionMethod>
			<DispositionEmails>
				<DispositionEmail>
					<DispositionRecipient>".$doc[0]['firstname']." ".$doc[0]['lastname']."</DispositionRecipient>
					<DispositionAddress>sridhar749@gmail.com</DispositionAddress>
				</DispositionEmail>
			</DispositionEmails>
		</DispositionControl>
		<Recipients>
			<Recipient>
				<RecipientName>".$data['name']."</RecipientName>
				<RecipientCompany>docvisits</RecipientCompany>
				<RecipientFax>".str_replace("-","",$data['fax_num'])."</RecipientFax> 
			</Recipient>
		</Recipients>
		<Files>
			<File>
				<FileContents>".$fileContentsEncoded."</FileContents>
				<FileType>html</FileType>
			</File>
		</Files>
	</Transmission>
</OutboundRequest>";

$encodexml=urlencode($xml);

$faxPost=array(
	'id'=>urlencode('7328621191'),
	'xml'=>urlencode($xml),
	'responde'=>urlencode('array'),
	);
$postString='';   // initialize the post string
foreach($faxPost as $key=>$value){
	$postString.= $key . '=' . $value . '&';
}
rtrim ($postString,'&');

$url="https://secure.efaxdeveloper.com/EFax_WebFax.serv";
$conn=curl_init($url);
curl_setopt($conn,CURLOPT_RETURNTRANSFER,1);
curl_setopt($conn, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($conn,CURLOPT_POST,count($faxPost));
curl_setopt($conn,CURLOPT_POSTFIELDS,$postString);

$ret=curl_exec($conn);

echo $ret;
curl_close($conn);
}else if(isset($data['refill']) && $data['refill'] != ""){
	$doc = $scad->getDocDetails($data['phy_name']);
	$content = "<!DOCTYPE html>
<html>
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>

<table>
  <tr>
    <td>Patient Name</td>
    <td>".$data['name']."</td>
  </tr>
  <tr>
    <td>Patient DOB</td>
    <td>".$data['dob']."</td>
  </tr> 
  <tr>
    <td>Parent or Guardian's Name</td>
    <td>".$data['perent_name']."</td>
  </tr>
  <tr>
    <td>Patient Primary Phone</td>
    <td>".$data['number1'] ."</td>
  </tr>
  <tr>
    <td>Patient Alternate Phone</td>
    <td>".$data['number2'] ."</td>
  </tr>
  <tr>
    <td>Medication Requested</td>
    <td>".$data['medReq'] ."</td>
  </tr>
  <tr>
    <td>Dosage</td>
    <td>".$data['dose'] ."</td>
  </tr>
  <tr>
    <td>Days Supply</td>
    <td>".$data['days'] ."</td>
  </tr>
  <tr>
    <td>Additional Notest and Questions</td>
    <td>".$data['note']."</td>
  </tr>
  
</table>

</body>
</html>
";
$faxfile = fopen(getcwd()."/service/ui/app/immu_efaxfiles/refill_efax".$id.".html", "w");
fwrite($faxfile, $content);
fclose($faxfile);

$fileContents=file_get_contents(getcwd()."/service/ui/app/immu_efaxfiles/refill_efax".$id.".html");
$fileContentsEncoded=base64_encode($fileContents);
$xml = "<?xml version=\"1.0\"?>
	<OutboundRequest>
		<AccessControl>
			<UserName>docvisit732</UserName>
			<Password>docvisit732</Password>
		</AccessControl>
	<Transmission>
		<TransmissionControl>
			<TransmissionID>".$id."</TransmissionID>
			<Resolution>STANDARD</Resolution>
			<Priority>NORMAL</Priority>
			<SelfBusy>ENABLE</SelfBusy>
			<FaxHeader>\"@DATE1 @TIME3 @ROUTETO{26} @RCVRFAX Pg%P/@TPAGES\"</FaxHeader>
		</TransmissionControl>
		<DispositionControl>
			<DispositionURL>http://docvisits.com</DispositionURL>
			<DispositionLevel>BOTH</DispositionLevel>
			<DispositionMethod>EMAIL</DispositionMethod>
			<DispositionEmails>
				<DispositionEmail>
					<DispositionRecipient>".$doc[0]['firstname']." ".$doc[0]['lastname']."</DispositionRecipient>
					<DispositionAddress>sridhar749@gmail.com</DispositionAddress>
				</DispositionEmail>
			</DispositionEmails>
		</DispositionControl>
		<Recipients>
			<Recipient>
				<RecipientName>".$data['name']."</RecipientName>
				<RecipientCompany>docvisits</RecipientCompany>
				<RecipientFax>".str_replace("-","",$data['fax_num'])."</RecipientFax>
			</Recipient>
		</Recipients>
		<Files>
			<File>
				<FileContents>".$fileContentsEncoded."</FileContents>
				<FileType>html</FileType>
			</File>
		</Files>
	</Transmission>
</OutboundRequest>";

$encodexml=urlencode($xml);

$faxPost=array(
	'id'=>urlencode('7328621191'),
	'xml'=>urlencode($xml),
	'responde'=>urlencode('array'),
	);
$postString='';   // initialize the post string
foreach($faxPost as $key=>$value){
	$postString.= $key . '=' . $value . '&';
}
rtrim ($postString,'&');

$url="https://secure.efaxdeveloper.com/EFax_WebFax.serv";
$conn=curl_init($url);
curl_setopt($conn,CURLOPT_RETURNTRANSFER,1);
curl_setopt($conn, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($conn,CURLOPT_POST,count($faxPost));
curl_setopt($conn,CURLOPT_POSTFIELDS,$postString);

$ret=curl_exec($conn);

echo $ret;
curl_close($conn);
}
?>