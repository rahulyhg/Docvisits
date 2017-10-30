<?php
include("./conf/config.inc.php");
$result = $scad->getUserDetails($_POST['id']);
//print_r($result);
if($_POST['page'])
{
$page = $_POST['page'];
$cur_page = $page;
$page -= 1;
$per_page = 1;
$previous_btn = true;
$next_btn = true;
$first_btn = true;
$last_btn = true;
$start = $page * $per_page;
$rating1 = $scad->getrting($_POST['id']);
$rating = $scad->ratinglimit($_POST['id'],$start,$per_page);
/*echo "<pre>";
print_r($rating1);
print_r($rating);*/
//exit;
$end  = count($rating1);
foreach($rating as $key=>$value){
    	/*echo "<pre>";
    	print_r($value);
		echo $value[userid];
		exit;*/
		$userresult = $scad->getUserDetails($value[userid]);
		$finalresult[]=$userresult;
    } 
                         	//echo$val['overall'];
                         	//$ra[] = $value[ra];
						 //print_r($val);
					         // echo $i;
							// echo round($ra[$i]);
   $msg .=   '<h1> Patient Reviews for '. $result["firstname"] .$result["lastname"].' </h1>
		    	<div class="dr_review">';
				$i=0; 
				if(!empty($rating)){
						foreach ($rating as $key => $val) {
							//echo $val;
							$overAll = ((int)$val['beside']+(int)$val['ansque']+(int)$val['spend']+(int)$val['office']+(int)$val['staff']+(int)$val['waiting'])/6;
						$final_overall = round($overAll);
						$userdetails = $scad->getUserDetails($val[userid]);
						//print_r($userdetails);
             $msg .= '<div class="dr_viw_clm2_rewclm">
                <h2>  '.$val['date'].'' . $userdetails["firstname"].' '.$userdetails["lastname"].'  </h2>
                <div class="dr_viw_clm2_rate"><div class="dr_viw_clm2_rateclm">
					<span>Overall Rating</span><div class="feature-rating" style="float: right;margin-right: 20px;">
             <span class="tg-stars star-rating" style="height: 20px;">
                <span targets="'. $final_overall .'" style="width:'.(ceil($final_overall*26.6)).'%;line-height:20px;" ></span>
            </span>
        </div>';
			   $msg .= '
                </div>
            <div class="dr_viw_clm2_rateclm"> <span>Explains condition(s) well</span>
            <div class="feature-rating" style="float: right;margin-right: 20px;">
             <span class="tg-stars star-rating" style="height: 20px;">
                <span targets="'. $val["beside"] .'" style="width:'.(ceil($val["beside"]*26.6)).'%;line-height:20px;" ></span>
            </span>
        </div>';
        $msg .= '
                </div>
            <div class="dr_viw_clm2_rateclm"> <span>Answers Questions</span>
            <div class="feature-rating" style="float: right;margin-right: 20px;">
             <span class="tg-stars star-rating" style="height: 20px;">
                <span targets="'. $val["ansque"] .'" style="width:'.(ceil($val["ansque"]*26.6)).'%;line-height:20px;" ></span>
            </span>
        </div>';
        $msg .= '
                </div>
            <div class="dr_viw_clm2_rateclm"> <span>Spend time</span>
            <div class="feature-rating" style="float: right;margin-right: 20px;">
             <span class="tg-stars star-rating" style="height: 20px;">
                <span targets="'. $val["spend"] .'" style="width:'.(ceil($val["spend"]*26.6)).'%;line-height:20px;" ></span>
            </span>
        </div>';
        $msg .= '
                </div>
            <div class="dr_viw_clm2_rateclm"> <span>Office environment</span>
            <div class="feature-rating" style="float: right;margin-right: 20px;">
             <span class="tg-stars star-rating" style="height: 20px;">
                <span targets="'. $val["office"] .'" style="width:'.(ceil($val["office"]*26.6)).'%;line-height:20px;" ></span>
            </span>
        </div>';
        $msg .= '
                </div>
            <div class="dr_viw_clm2_rateclm"> <span>Staff friendliness</span>
            <div class="feature-rating" style="float: right;margin-right: 20px;">
             <span class="tg-stars star-rating" style="height: 20px;">
                <span targets="'. $val["staff"] .'" style="width:'.(ceil($val["staff"]*26.6)).'%;line-height:20px;" ></span>
            </span>
        </div>';
         $msg .= '                
                </div>
                <div class="dr_viw_clm2_rateclm">
                <span>Wait Time</span>
                <div class="feature-rating" style="float: right;margin-right: 20px;">
             <span class="tg-stars star-rating" style="height: 20px;">
                <span targets="'. $val["waiting"] .'" style="width:'.(ceil($val["waiting"]*26.6)).'%;line-height:20px;" ></span>
            </span>
        </div>';
               $msg .= '
                </div>
                <div class="comment"> 
                <p> '.$val[message].' </p>
                
                </div>
                </div>
               </div>
          </div>';
                      $i++;}
/* --------------------------------------------- */
//$query_pag_num = "SELECT COUNT(*) AS count FROM scad_speciality";
 $no_of_paginations = ceil($end / $per_page);
/* ---------------Calculating the starting and endign values for the loop----------------------------------- */
if ($cur_page >= 7) {
    $start_loop = $cur_page - 3;
    if ($no_of_paginations > $cur_page + 3)
        $end_loop = $cur_page + 3;
    else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6) {
        $start_loop = $no_of_paginations - 6;
        $end_loop = $no_of_paginations;
    } else {
        $end_loop = $no_of_paginations;
    }
} else {
    $start_loop = 1;
    if ($no_of_paginations > 7)
        $end_loop = 7;
    else
        $end_loop = $no_of_paginations;
}
/* ----------------------------------------------------------------------------------------------------------- */
$msg .= "<div class='paginatin'><ul>";
// FOR ENABLING THE FIRST BUTTON
if ($first_btn && $cur_page > 1) {
    $msg .= "<li p='1' class='activ'>First</li>";
} else if ($first_btn) {
    $msg .= "<li p='1' class='inactiv'>First</li>";
}
// FOR ENABLING THE PREVIOUS BUTTON
if ($previous_btn && $cur_page > 1) {
    $pre = $cur_page - 1;
    $msg .= "<li p='$pre' class='activ'>Prev</li>";
} else if ($previous_btn) {
    $msg .= "<li class='inactiv'>Prev</li>";
}
for ($i = $start_loop; $i <= $end_loop; $i++) {
    if ($cur_page == $i)
        $msg .= "<li p='$i' style='color:#fff;background-color:#0099cc;' class='activ'>{$i}</li>";
    else
        $msg .= "<li p='$i' class='activ'>{$i}</li>";
}
// TO ENABLE THE NEXT BUTTON
if ($next_btn && $cur_page < $no_of_paginations) {
    $nex = $cur_page + 1;
    $msg .= "<li p='$nex' class='activ'>Next</li>";
} else if ($next_btn) {
    $msg .= "<li class='inactiv'>Next</li>";
}
// TO ENABLE THE END BUTTON
if ($last_btn && $cur_page < $no_of_paginations) {
    $msg .= "<li p='$no_of_paginations' class='activ'>Last</li>";
} else if ($last_btn) {
    $msg .= "<li p='$no_of_paginations' class='inactiv'>Last</li>";
}
$msg = $msg . "</ul>" . $goto . $total_string . "</div>";  // Content for pagination
echo $msg;
				}
				else{
					$msg .=   '<p style="text-align:center;margin-top:3%;">No data to display</p></div>';
				echo $msg;
					}
//echo $_POST['id'];
}
?>