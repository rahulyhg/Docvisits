<?php
include("./conf/config.inc.php");
$result = $scad->getUserDetails($doctorID);
$rating=$scad->getrting($doctorID);
$msg .=   '<h1> Patient Reviews for '. $result["firstname"] .$result["lastname"].' </h1> <div class="dr_review">';
$i=0; 
if(!empty($rating)){
	foreach ($rating as $key => $val) {
							//echo $val;
		$userdetails = $scad->getUserDetails($val[userid]);
						//print_r($userdetails);
		$msg .= '<div class="dr_viw_clm2_rewclm">
		<h2>  '.$val['date'].' by, ' . $userdetails["firstname"] .$userdetails["lastname"].'  </h2>
		<div class="dr_viw_clm2_rate"><div class="dr_viw_clm2_rateclm">
			<span>Overall Rating</span> <span class="rating rate">
			<input type="radio" ';
			if($val["overall"]==5)
				{ $msg.="checked ";} 
			if($val>0){ $msg.="disabled ";} 
			$msg.= ' name="rating'.$i.'" id="rating-'.$i.'-5" class="rating-input">
			<label class="rating-star" for="rating-'.$i.'-5"></label>
			<input type="radio" ';
			if($val["overall"]==4)
				{ $msg.="checked ";} 
			if($val>0){ $msg.="disabled ";} 
			$msg.= '  name="rating'.$i.'" id="rating-'.$i.'-4" class="rating-input">
			<label class="rating-star" for="rating-'.$i.'-4"></label>
			<input type="radio" ';
			if($val["overall"]==3)
				{ $msg.="checked ";} 
			if($val>0){ $msg.="disabled ";} 
			$msg.= '  name="rating'.$i.'" id="rating-'.$i.'-3" class="rating-input">
			<label class="rating-star" for="rating-'.$i.'-3"></label>
			<input type="radio" ';
			if($val["overall"]==2)
				{ $msg.="checked ";} 
			if($val>0){ $msg.="disabled ";} 
			$msg.= '  name="rating'.$i.'" id="rating-'.$i.'-2" class="rating-input">
			<label class="rating-star" for="rating-'.$i.'-2"></label>
			<input type="radio" ';
			if($val["overall"]==1)
				{ $msg.="checked ";} 
			if($val>0){ $msg.="disabled ";} 
			$msg.= '  name="rating'.$i.'" id="rating-'.$i.'-1" class="rating-input">
			<label class="rating-star" for="rating-'.$i.'-1"></label>
		</span>';
		
		
		
		$msg .= '
		
	</div>

	<div class="dr_viw_clm2_rateclm"> <span>Beside Manner</span>
		<span class="rating rate">
			<input type="radio" ';
			if($val["beside"]==5)
				{ $msg.="checked ";} 
			if($val>0){ $msg.="disabled ";} 
			$msg.= ' name="rating1'.$i.'" id="rating1-'.$i.'-5" class="rating-input">
			<label class="rating-star" for="rating1-'.$i.'-5"></label>
			<input type="radio" ';
			if($val["beside"]==4)
				{ $msg.="checked ";} 
			if($val>0){ $msg.="disabled ";} 
			$msg.= '  name="rating1'.$i.'" id="rating1-'.$i.'-4" class="rating-input">
			<label class="rating-star" for="rating1-'.$i.'-4"></label>
			<input type="radio" ';
			if($val["beside"]==3)
				{ $msg.="checked ";} 
			if($val>0){ $msg.="disabled ";} 
			$msg.= '  name="rating1'.$i.'" id="rating1-'.$i.'-3" class="rating-input">
			<label class="rating-star" for="rating1-'.$i.'-3"></label>
			<input type="radio" ';
			if($val["beside"]==2)
				{ $msg.="checked ";} 
			if($val>0){ $msg.="disabled ";} 
			$msg.= '  name="rating1'.$i.'" id="rating1-'.$i.'-2" class="rating-input">
			<label class="rating-star" for="rating1-'.$i.'-2"></label>
			<input type="radio" ';
			if($val["beside"]==1)
				{ $msg.="checked ";} 
			if($val>0){ $msg.="disabled ";} 
			$msg.= '  name="rating1'.$i.'" id="rating1-'.$i.'-1" class="rating-input">
			<label class="rating-star" for="rating1-'.$i.'-1"></label>
		</span>';
		
		
		$msg .= '                
	</div>
	
	<div class="dr_viw_clm2_rateclm">
		<span>Wait Time</span>
		<span class="rating rate">
			<input type="radio" ';
			if($val["waiting"]==5)
				{ $msg.="checked ";} 
			if($val>0){ $msg.="disabled ";} 
			$msg.= ' name="rating2'.$i.'" id="rating2-'.$i.'-5" class="rating-input">
			<label class="rating-star" for="rating2-'.$i.'-5"></label>
			<input type="radio" ';
			if($val["waiting"]==4)
				{ $msg.="checked ";} 
			if($val>0){ $msg.="disabled ";} 
			$msg.= '  name="rating2'.$i.'" id="rating2-'.$i.'-4" class="rating-input">
			<label class="rating-star" for="rating2-'.$i.'-4"></label>
			<input type="radio" ';
			if($val["waiting"]==3)
				{ $msg.="checked ";} 
			if($val>0){ $msg.="disabled ";} 
			$msg.= '  name="rating2'.$i.'" id="rating2-'.$i.'-3" class="rating-input">
			<label class="rating-star" for="rating2-'.$i.'-3"></label>
			<input type="radio" ';
			if($val["waiting"]==2)
				{ $msg.="checked ";} 
			if($val>0){ $msg.="disabled ";} 
			$msg.= '  name="rating2'.$i.'" id="rating2-'.$i.'-2" class="rating-input">
			<label class="rating-star" for="rating2-'.$i.'-2"></label>
			<input type="radio" ';
			if($val["waiting"]==1)
				{ $msg.="checked ";} 
			if($val>0){ $msg.="disabled ";} 
			$msg.= '  name="rating2'.$i.'" id="rating2-'.$i.'-1" class="rating-input">
			<label class="rating-star" for="rating2-'.$i.'-1"></label>
		</span>';
		
		
		$msg .= '
	</div> 
	<p>" '.$val[message].' "</p>
</div>
</div>







</div>';



$i++;

}
}
echo $msg;
//$jsonResult = json_encode($rat);
//echo $jsonResult;
?> 




