<?php
include("./conf/config.inc.php");
$res= $scad->getDocDetails($_POST['id']);
$rat=$scad->getrting($_POST['id']);
$len=count($rat);
for($j=0;$j<$len;$j++){
	$overall[$_POST['id']][]=($rat[$j]['overall'] +$rat[$j]['beside']+$rat[$j]['ansque']+$rat[$j]['spend']+$rat[$j]['office']+$rat[$j]['staff'] +$rat[$j]['waiting'])/7  ;
}
//print_r($overall);
$rateval=0; 
for($k=0;$k<count($overall[$_POST['id']]);$k++){
	$rate = $overall[$_POST['id']][$k];
	$rateval= $rateval+$rate;
}
$doc_rating = round($rateval/count($overall[$_POST['id']]));
?>
<span class="tg-stars star-rating">
	<span  class="ratng" target="<?php echo $val['doctor_id'];?>" style="width:<?php echo (ceil($doc_rating*26.6))?>%;line-height:20px;" ></span>
</span>