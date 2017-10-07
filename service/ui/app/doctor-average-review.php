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
<input type="radio" <?php if($doc_rating==5){echo "checked ";}  ?> name="rating-input-<?php echo $i; ?>-5" id="rating-input-<?php echo $i; ?>-5" class="rating-input">
<label class="rating-star" for="rating-input-<?php echo $i; ?>-5"></label>
<input type="radio" <?php if($doc_rating==4){echo "checked ";}  ?> name="rating-input-<?php echo $i; ?>-4" id="rating-input-<?php echo $i; ?>-4" class="rating-input">
<label class="rating-star" for="rating-input-<?php echo $i; ?>-4"></label>
<input type="radio" <?php if($doc_rating==3){echo "checked ";}  ?> name="rating-input-<?php echo $i; ?>-3" id="rating-input-<?php echo $i; ?>-3" class="rating-input">
<label class="rating-star" for="rating-input-<?php echo $i; ?>-3"></label>
<input type="radio" <?php if($doc_rating==2){echo "checked ";}  ?> name="rating-input-<?php echo $i; ?>-2" id="rating-input-<?php echo $i; ?>-2" class="rating-input">
<label class="rating-star" for="rating-input-<?php echo $i; ?>-2"></label>
<input <?php if($doc_rating==1){echo "checked ";}  ?> type="radio" name="rating-input-<?php echo $i; ?>-1" id="rating-input-<?php echo $i; ?>-1" class="rating-input">
<label class="rating-star" for="rating-input-<?php echo $i; ?>-1"></label>