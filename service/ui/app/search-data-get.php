<?php
include("./conf/config.inc.php");
error_reporting(E_ALL);
function search_data($data,$scad,$pagination,$totalPages,$status = null,$dateCnt=0,$columns =3){

            //default values
    $currDate = date('Y-m-d');
    $days=array('Mon','Tue','Wed','Thu','Fri','Sat','Sun');

    if($status=='next'){
        $date= ($dateCnt==0) ? date('Y-m-d') : date('Y-m-d' , strtotime($dateCnt. ' + '.$columns.' days'));
        $Day = ($dateCnt==0) ? date('D') : date('D',strtotime($dateCnt. ' + '.$columns.' days'));
    }else{
        $date= ($dateCnt==0) ? date('Y-m-d') : date('Y-m-d' , strtotime($dateCnt. ' - '.$columns.' days'));
        $Day = ($dateCnt==0) ? date('D') : date('D',strtotime($dateCnt. ' - '.$columns.' days'));
    }
    $end_date = date('Y-m-d', strtotime($currDate. ' + '.$columns.' days'));
    $query =$data;
            //print_r($data);die;
            //caLendar data begins
            //getting doctor details
    $data1=0;
    foreach ($query as $key => $value) {
        $cal_result=$scad->getUserDetails($value['doctorID']);
        $apntdetails=$scad->getAppointmentDetailsWithDate($value['doctorID'],$date,$end_date);
              // echo '<pre>';
              // print_r($cal_result);die;
        if ($value['imageName']) {
            $docImage = $value['imageName'];
        } else {
            $docImage = 'no_image.jpg';
        }
        $id1[]=$value['doctorID'];
        $userImg = WEB_ROOT . "service/public/z_uploads/doctor/small/" . $docImage;

        $rat=$scad->getrting($value['doctorID']);
        $len=count($rat);
        $rateval=0; 
        for($j=0;$j<$len;$j++){
            $rateval=$rateval+($rat[$j]['overall'] +$rat[$j]['beside'] +$rat[$j]['waiting'])/3  ;
            
        }
        $res_data[$value['doctorID']]['rating'] =$rateval;

        $res_data[$value['doctorID']]['name'] = (!empty($value['firstname']) || !empty($value['lastname'])) ? $value['firstname']."&nbsp".$value['lastname'] : 'Not specified';
        $res_data[$value['doctorID']]['address'] = (!empty($value['address']) || !empty($value['zipcode'])) ? $value['address'].'<br>'.$value['zipcode'] : 'Not Specified';
        $res_data[$value['doctorID']]['mapAddress'] = (!empty($value['address']) || !empty($value['zipcode'])) ? $value['address'].','.$value['zipcode'] : '';
        $res_data[$value['doctorID']]['zip'] =$value['zipcode'];
        $res_data[$value['doctorID']]['description'] = (! empty($value['description'])) ? $value['description'] : '--';
        $res_data[$value['doctorID']]['profile_pic'] = $userImg;

        if(! empty($cal_result['working_plan'])){
            $res_data[$value['doctorID']]['working_plan']=json_decode($cal_result['working_plan'],TRUE);
            $data1=1;
        }else{
            $res_data[$value['doctorID']]['working_plan']='none';
        }
        if(! empty($cal_result['breaks'])){
            $res_data[$value['doctorID']]['breaks']=json_decode($cal_result['breaks'],TRUE);
        }
        if(! empty($cal_result['vecation'])){
            $res_data[$value['doctorID']]['vecation']=json_decode($cal_result['vecation'],TRUE);
        }
        if(!empty($apntdetails)){
            $res_data[$value['doctorID']]['apntdate']=$apntdetails;
        }
        if(is_array($apntdetails)){
         foreach($apntdetails as $keey=>$valus){
            $res_data[$value['doctorID']]['appointmentDetails'][$valus['apnt_date']][$keey]=$valus['apnt_starttime'];
        }
       // print_r($res_data);
    }
}
            // echo '<pre>';
            //   print_r($res_data);die;
foreach ($res_data as $key => $value) {
    if($value['working_plan'] != 'none'){
        foreach ($days as  $day) {
            $res_data[$key][$day]['working_time'] = (array_key_exists('working_plan',$value) && $value['working_plan']!='none')  ? get_working_plan($value['working_plan'][$day]) : '';
            $res_data[$key][$day]['break_time'] = (array_key_exists('breaks',$value)) ? get_break_time($value['breaks'][$day]) : '';
            $res_data[$key]['vacation_date'] = (array_key_exists('vecation',$value)) ? get_vacation_date($value['vecation']) : '';
                        //echo '<pre>';
                        //print_r($res_data[$key]['vacation_date']);die;
            $res_data[$key]['vacation_time'] = (array_key_exists('vecation',$value)) ? get_vacation_time($value['vecation']) : '';
        }
    }
}

            //echo '<pre>';
              //print_r($res_data);die;
            //make time slot
$data_res ='';
$s =WEB_ROOT;
$data_res .= '<input type="hidden" class="currentDate"  value="'.$date.'">';
$count=0;
foreach ($res_data as $key => $value) {

                //print_r($value);exit;
                //foreach ($days as $day_key => $day_value) {
                // profile and popup
    $data_res .='<div class="row">';

    $data_res .='<div class="col-md-6">';
    $data_res .=profile_html($value,$s,$key,0,++$count);
    $data_res .='</div>';

    $data_res .='<div class="col-md-6"><div class="date-full">';
       // echo "calling calendar_html";
    $data_res .=calendar_html($value,$columns,$Day,$date,$s,$key);
    $data_res .='</div>';

    $data_res .='</div></div><div class="between"></div>';



               // $map_data[] = map_over_data($value,$scad);

}
$pagination_data ='<div class="row"><div class="col-md-offset-1 col-md-11">';
$pagination_data .=$pagination;
$pagination_data .='</div></div>';
/*  $data_res .= "<input type='hidden' value='" . json_encode($map_data) . "' class='allzips'>";*/
$data_res .="<input type='hidden' value='".json_encode($id1)."' class='allDoctors' name='allDoctors'>";
$date_slide= date_slide($columns,$date,0);
            //echo $data_res ;
$result_data['date_slide'] = $date_slide;
$result_data['html'] = $data_res;
$result_data['pagination'] = $pagination_data;
$result_data['status'] = 1;
$result_data['noOfPages']=$totalPages;
echo json_encode($result_data);
            //make time slot
            //calendar data begins

}
function get_days($startdate,$enddate){
    $begin = new DateTime(date("Y-m-d", strtotime($startdate)));
    $end = new DateTime(date("Y-m-d", strtotime($enddate)));

    $daterange = new DatePeriod($begin, new DateInterval('P1D'), $end);

    foreach($daterange as $date){
        $adays[] =$date->format("Y-m-d");
    }
    $adays[] =date("Y-m-d", strtotime($enddate)) ;
    return $adays;  
}
    //get vacation times with date
function get_vacation_time($va_time_plan){
    foreach ($va_time_plan as $key => $value) {
        $vdate = get_days($value['startdate'], $value['enddate']);
        foreach ($vdate as $key => $value1) {
            $vd[$value1] = get_times($value['starttime'], $value['endtime']);
        }
    }
    return $vd;
}
    //get vacation times with date
function get_apnt_times($starttime,$endtime){
    $vd[] = get_times($starttime, $endtime);
    return $flat = array_unique(call_user_func_array('array_merge', $vd));
}
    //get vacation days
function get_vacation_date($va_time_plan){
    foreach ($va_time_plan as $key => $value) {
        $vd[] = get_days($value['startdate'], $value['enddate']);
    }
    return $flat = array_unique(call_user_func_array('array_merge', $vd));
}
function get_times($startdate,$enddate){
    $begin = new DateTime(date("H:i", strtotime($startdate)));
    $end = new DateTime(date("H:i", strtotime($enddate)));

    $daterange = new DatePeriod($begin, new DateInterval('PT900S'), $end);

    foreach($daterange as $date){
        $atimes[] =$date->format("H:i A");
    }
    $atimes[] =date("H:i A", strtotime($enddate)) ;
    return $atimes;  
}
function get_working_plan($wr_plan){
    return get_times($wr_plan['start'],$wr_plan['ends']);
}
    //get working plan

    //get break time
function get_break_time($br_plan){
    foreach ($br_plan as $key => $value) {
        if($key==='start' || $key==='ends'){
            $br[] = get_times($br_plan['start'],$br_plan['ends']);
        }else{
            $br[] = get_times($br_plan[$key]['start'],$br_plan[$key]['ends']);    
        }
        
    }
    return $flat = call_user_func_array('array_merge', $br);
}
function profile_html($value,$s,$key,$button,$count){
    $distance="Invalid Distance, too far";
    try {
        $url = 'https://maps.googleapis.com/maps/api/distancematrix/json?units=imperial&origins='.urlencode($_SESSION['userAddress']).'&destinations='.urlencode($value["mapAddress"]).'&key=AIzaSyDtCtNnx_y65T5gdUE2lkZ-fN8v2F86lfY';
        $obj = json_decode(file_get_contents($url), true);
//print_r($obj);
        if($obj['status'] == 'OK'){
//print_r($obj['rows'][0]['elements'][0]);
            $distance=$obj['rows'][0]['elements'][0]['distance']['text'];

        } 
    } catch(Exception $e) {

    }
    $style = ($button==1)? 'style="display:none"' : '';
    return $profile_html = '<div class="profile Doc'.$key.'">
    <div class="col-md-4">
        <div class="propic">
            <img src='.$value["profile_pic"].'>
        </div>
        <div class="feature-rating" style="padding-top: 10px;">
            <span class="tg-stars star-rating">
                <span  class="dr_rating" targets="'. $key .'" style="width:'.(ceil($value["rating"]*26.6)).'%;line-height:20px;" ></span>
            </span>
        </div>        
    </div>
    <div class="col-md-8">
        <div class="name">
            <h3>'.$value["name"].'</h3>
        </div>
        <div class="prodt">'.$value["address"].'
        </div>
        <div class="row"></div>
        <div class="viewpro">
            <p><a href="javascript:void(0);" data-toggle="modal" class="dr_viewProfile" targets="'. $key .'">View Profile</a></p>
        </div>
        <div class="book">
            <p><a href="javascript:void(0);" data-toggle="modal" class="dr_bkonline" targets="'. $key .'">Book Online</a></p>
        </div>
    </div>

    <div class="row"> 
        <div class="col-md-12">
            <div class="text">
                <p>'.substr($value["description"], 0, 100) . '....</p>         
            </div>
        </div>
    </div>
    <div class="row"> 
        <div class="col-md-12">
            <div class="text">
                <p><a href="https://www.google.com/maps/dir//'.$value["mapAddress"].'" target="popup" class="dr_getDirections"><img src='.WEB_ROOT.'service/public/images/spotlight-poi.png style="width:2%;"><span style="padding-left:5px;">'.$distance.'</span></a></p>         
            </div>
        </div>
    </div>
</div>';
}
function calendar_html($value,$columns,$Day,$date,$s,$key){
    if($columns==3){$cal_cls='col-sm-4 col-sm-4';}else{$cal_cls='col-sm-2';}
    $calendar_html = '';
    if($value['working_plan']=='none'){
        $calendar_html .= '<div class="sch-profile-box" style="text-align:center;
        ">
        <p style="margin:0 auto;padding:20px">No availability these days</p></div></div>';
    }
    else{
        for($i=0;$i<$columns;$i++){
            $day_C = date('D', strtotime($Day. ' + '.$i.' days'));
            $date_C = date('Y-m-d', strtotime($date. ' + '.$i.' days'));
                            //if($day_C == $days[$i]){
            $cls = ($i==0) ? 'firstDate_0' : '';
            $calendar_html .='<div class="date"><ul class="hri'.$i.$key.'">';

            foreach ($value[$day_C]['working_time'] as $ve_key => $ve_value) {
                //echo "--------------checking for ".$date_C."------".$day_C."---------".$ve_value."------------------";
                if($ve_key>4){
                    $cls_hi='hiddens show'.$key;
                }else{
                    $cls_hi='';
                }
                if($ve_key==4){
                  //  echo ":More \n";
                    $calendar_html .= '<li  class="bottomBorder active moreClk'.$key.' more '.$cls_hi.' sss" value="'.$key.'"  > <div class="sch-slotex">
                    More
                </div> </li>';
            }elseif($ve_value==end($value[$day_C]['working_time'])){
                //echo ":Less \n";
                $calendar_html .= '<li class="last active less '.$cls_hi.' sss'.$key.'" value="'.$key.'" > <div class="sch-slotex">Less </div></li>';
            }
            elseif(is_array($value['vacation_date']) && in_array($date_C, $value['vacation_date'])&&in_array($date_C, $value['vacation_date'])&&in_array($ve_value, $value['vacation_time'][$date_C])){

                //echo ":Vacation \n";
                $calendar_html .= '<li class="disabled '.$cls_hi.' "><div class="sch-slot">vacation</div></li>';

            }elseif(is_array($value[$day_C]['break_time'])&&in_array($ve_value, $value[$day_C]['break_time'])){ 

               // echo ":Break \n";
                $calendar_html .= '<li class="disabled '.$cls_hi.' "> <div class="sch-slot">Break </div></li>';

            }elseif(array_key_exists('appointmentDetails',$value)) {
                if(array_key_exists($date_C,$value['appointmentDetails'])) {
                    foreach ($value['appointmentDetails'][$date_C] as $no => $time) {
                        $newTime=date_format(date_create_from_format('H:i a', $ve_value), 'H:i:s');
                        if($newTime==$time) {
                           // echo "******:Booked***********".$ve_value."\n";
                         $calendar_html .='<li class="disabled '.$cls_hi.'"><div class="sch-slot">Booked</div></li>';
                         break;
                     }
                 }
             }                

         }else {

            $calendar_html .= '<li class="active '.$cls_hi.' appointDate" id="'.$key.'_'.$day_C.' '.$date.'_'.$ve_value.'"> <div class="sch-slot" id="'.$date.'">'.$ve_value.'</div></li>';
        }
    }
    $calendar_html .= '</ul></div>';
                //}

}
            //$calendar_html .= '</div>';

}
return $calendar_html;
}
    //get date slide
function date_slide($columns,$date,$cls){
    $data = '';
    for($i=0;$i<$columns;$i++){
        $date_C = date('D Y-m-d', strtotime($date. ' + '.$i.' days'));
        if($cls==1){
            $data .='<div class="col-sm-2 padding0"><div class="sch-dtetime width100">'.$date_C.'</div></div>';
        }else{
            $data .='<div class="dttime-list">'.$date_C.'</div>';
        }
    }
    return $data;
}

//parse_str($search);
  //echo "in if";
$docName=$_GET['docName'];
$docSpeciality=$_GET['docSpeciality'];
$docZip=0;
//$srchZipcode=$_GET['srchZipcode'];
$insuranceSelect=0;
//$insuranceSelect=$_GET['insuranceSelect'];
$subInsuranceSelect=0;
//$_GET['subInsuranceSelect'];
$srchReason=0;
$gender=0;
//$gender=$_GET['gender'];

$page     = 1;
$cur_page = $page;
$page -= 1;
$per_page     = 5;
$previous_btn = true;
$next_btn     = true;
$first_btn    = true;
$last_btn     = true;
$start        = $page * $per_page;
//echo "compiled";
$docName=str_replace('+', " ", $docName);
$result  = $scad->searchDoctorLimit($docName,$docSpeciality, $docZip, $insuranceSelect, $subInsuranceSelect,$srchReason,$gender, $start, $per_page);
$result1 = $scad->searchDoctor($docName,$docSpeciality, $docZip, $insuranceSelect, $subInsuranceSelect,$srchReason,$gender);

$end  = count($result1);
$end1 = count($result);

$no_of_paginations = ceil($end / $per_page);
$totalPages=$end;

/* ---------------Calculating the starting and endign values for the loop----------------------------------- */
if ($cur_page >= 7) {
    $start_loop = $cur_page - 3;
    if ($no_of_paginations > $cur_page + 3)
        $end_loop = $cur_page + 3;
    else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6) {
        $start_loop = $no_of_paginations - 6;
        $end_loop   = $no_of_paginations;
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
$msg = "<div class='pagination'>";

    // FOR ENABLING THE FIRST BUTTON
if ($first_btn && $cur_page > 1) {
    $msg .= "<a href='javascript:void(0);' p='1' class='page acti'>First</a>";
} else if ($first_btn) {
    $msg .= "<a href='javascript:void(0);' p='1' class='page1'>First</a>";
}

    // FOR ENABLING THE PREVIOUS BUTTON
if ($previous_btn && $cur_page > 1) {
    $pre = $cur_page - 1;
    $msg .= "<a href='javascript:void(0);' p='$pre' class='page acti'>Prev</a>";
} else if ($previous_btn) {
    $msg .= "<a href='javascript:void(0);' class='page1'>Prev</a>";
}
for ($i = $start_loop; $i <= $end_loop; $i++) {

    if ($cur_page == $i)
        $msg .= "<a href='javascript:void(0);' p='$i'  class='page active acti'>{$i}</a>";
    else
        $msg .= "<a href='javascript:void(0);' p='$i' class='page1 acti'>{$i}</a>";
}

    // TO ENABLE THE NEXT BUTTON
if ($next_btn && $cur_page < $no_of_paginations) {
    $nex = $cur_page + 1;
    $msg .= "<a href='javascript:void(0);' p='$nex' class='page acti'>Next</a>";
} else if ($next_btn) {
    $msg .= "<a href='javascript:void(0);' class='page1'>Next</a>";
}

    // TO ENABLE THE END BUTTON
if ($last_btn && $cur_page < $no_of_paginations) {
    $msg .= "<a  href='javascript:void(0);' p='$no_of_paginations' class='page acti'>Last</a>";
} else if ($last_btn) {
    $msg .= "<a href='javascript:void(0);' p='$no_of_paginations' class='page1'>Last</a>";
}

if($end1>0){
    search_data($result,$scad,$msg,$totalPages); 
}else{
        //$result_data['date_slide'] = $date_slide;
    $result_data['html'] = '<p><i class="fa fa-exclamation-triangle fa-2x"></i><br />No Results Found<br /><small>There are no search results for the requested search. Perform the search option with different search conditions</small></p>';
    $result_data['status'] = 0;
    echo json_encode($result_data);
}

?>