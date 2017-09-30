	<?php include("conf/config.inc.php");
	Function GetDays($sStartDate, $sEndDate){  
		$sStartDate = gmdate("Y-m-d", strtotime($sStartDate));  
		$sEndDate = gmdate("Y-m-d", strtotime($sEndDate));  
		$aDays[] = $sStartDate;  
		$sCurrentDate = $sStartDate;  
		while($sCurrentDate < $sEndDate){  
			$sCurrentDate = gmdate("Y-m-d", strtotime("+1 day", strtotime($sCurrentDate)));  
			$aDays[] = $sCurrentDate;  
		}  
		return $aDays;  
	}  
	//print_r(GetDays('2007-01-01', '2007-01-02'));exit;
	//print_r($data);exit;
	// $sql = "SELECT * FROM " . DB_PREFIX . "doctor_appointments` WHERE  apnt_date between ";			
	// 			$apntmnt= $this->db->get_results($sql,ARRAY_A);
	if($apntmnt){
		//echo "in if";
		$resID = explode("_",$groupID);
		$apntID = $resID['0'];
		$doctorID = $resID['1'];
		$patientID = $resID['2'];
		$result = $scad->getDisplayEvents($apntID,$doctorID,$patientID);
		echo json_encode($result);
	}else{
		//echo "in else";
		$cal_result=$scad->getUserDetails($doctorID);
		$result = $scad->getDoctorEvents($doctorID);
		//print_r($result);exit;
		$responseArr = array();
		$j=0;
		foreach($result as $key=>$value){
			$responseArr[$key]['id'] = $value['id']."_".$value['doctor_id']."_".$value['patient_id'];
			$responseArr[$key]['title'] = "Appointment ".$value['apnt_note'];
			$responseArr[$key]['start'] = $value['apnt_date']."T".$value['apnt_starttime'];
			$responseArr[$key]['end'] = $value['apnt_date']."T".$value['apnt_endtime'];
			$responseArr[$key]['allDay'] = false;
			if($value['status'] == '0'){
				$responseArr[$key]['className'] =	'customRequest test';
			}else if($value['status'] == '1'){
				$responseArr[$key]['className'] =	'customApproved test';		
			}else{
				$responseArr[$key]['className'] =	'customCancelled test';
			}
			$j++;
		}
		if(!empty($cal_result['vecation'])){
		//echo "in if loop";	
			$i =1;
		//print_r($cal_result['vecation']);
			$data['vecation']=json_decode($cal_result['vecation'],TRUE);
		//print_r($data);
			foreach($data['vecation'] as $key=>$value){

			//echo "in For loop for vacation";
			//echo $key."========".$value['startdate'];
				$responseArr[$j]['id'] = "vac_".$doctorID."_".$i++;
				$responseArr[$j]['title'] = "Vacation";
				$responseArr[$j]['start'] = $value['startdate']."T".$value['starttime'];
				$responseArr[$j]['end'] = $value['enddate']."T".$value['endtime'];
				$responseArr[$j]['allDay'] = false;
				$responseArr[$j]['className'] =	'customVacation test';
				$j++;
			}

		}
		if(!empty($cal_result['breaks'])){
		//print_r($cal_result['breaks']);
			$databr['breaks']=json_decode($cal_result['breaks'],TRUE);
			$days=GetDays($start,$end);
			foreach($days as $key=>$value) {
		//echo "-----------checking for ------------".$value;
		//echo $j;
				$newTime=date_format(date_create_from_format('Y-m-d', $value), 'D');
				$breakInfo=$databr['breaks'][$newTime];
				$i=1;
			//print_r($breakInfo);			
				if(is_array($breakInfo)) {
				//echo "in Array Check";
					foreach($breakInfo as $keybr=>$valuebr){
					//echo "in Forloop";
						if(is_array($valuebr) && (trim($valuebr['start'])) && (trim($valuebr['ends']))){
						//echo "in if";
							$responseArr[$j]['id'] = "brk_".$doctorID."_".$i++;
							$responseArr[$j]['title'] = "Break";
							$responseArr[$j]['start'] = $value."T".$valuebr['start'];
							$responseArr[$j]['end'] = $value."T".$valuebr['ends'];
							$responseArr[$j]['allDay'] = false;
							$responseArr[$j]['className'] =	'customBreak test';
							$j++;
						} elseif((trim($breakInfo['start'])) && (trim($breakInfo['ends']))) {
						//echo "in else";
							$responseArr[$j]['id'] = "brk_".$doctorID."_".$i++;
							$responseArr[$j]['title'] = "Break";
							$responseArr[$j]['start'] = $value."T".$breakInfo['start'];
							$responseArr[$j]['end'] = $value."T".$breakInfo['ends'];
							$responseArr[$j]['allDay'] = false;
							$responseArr[$j]['className'] =	'customBreak test';
							$j++;
							break;
						} 
					}
				}
			/*	foreach($breakInfo as $keybr=>$valuebr){
					if(is_array($valuebr)){
						$responseArr[$j]['id'] = "brk_".$doctorID."_".$i++;
						$responseArr[$j]['title'] = "Break";
						$responseArr[$j]['start'] = $value."T".$valuebr['start'];
						$responseArr[$j]['end'] = $value."T".$valuebr['end'];
						$responseArr[$j]['allDay'] = false;
						$responseArr[$j]['className'] =	'customVacation test';
					} else {
						$responseArr[$j]['id'] = "brk_".$doctorID."_".$i++;
						$responseArr[$j]['title'] = "Break";
						$responseArr[$j]['start'] = $value."T".$breakInfo['start'];
						$responseArr[$j]['end'] = $value."T".$breakInfo['end'];
						$responseArr[$j]['allDay'] = false;
						$responseArr[$j]['className'] =	'customVacation test';						
					}
					$j++;
				}	
				
			}*/
			//print_r($responseArr);
		//	foreach($breakInfo as $keybr=>$valuebr){
		/*	$responseArr[$keybr]['id'] = "brk_".$doctorID."_".$i++;
			$responseArr[$keybr]['title'] = "Break";
			$responseArr[$keybr]['start'] = $value."T".$breakInfo['start'];
			$responseArr[$keybr]['end'] = $value."T".$breakInfo['end'];
			$responseArr[$keybr]['allDay'] = false;
			$responseArr[$keybr]['className'] =	'customVacation test';
			//}*/
		}
		
	}
	echo json_encode($responseArr);

		/*$result=$scad->getUserDetails($doctorID);
		$vecation=$result[vecation];
		$vecationtime=json_decode($vecation,true);
		$len=count($vecationtime);
		//echo "len=".
		//echo "j=".$j;
		//echo "total=".($len+$j);
		$i=$j;
		$k=0;
		$z=0;
		for($i=$j;$i<$len+$j;$i++){
			$ve_dates=GetDays($vecationtime[$k][startdate], $vecationtime[$k][enddate]);
			$vec_dates[]=GetDays($vecationtime[$k][startdate], $vecationtime[$k][enddate]);
			$cot=count($ve_dates);
			$starttime=$vecationtime[$k][starttime];
			$endtime=$vecationtime[$k][endtime];
			for($l=$z,$y=0;$l<$r+$cot;$l++,$y++){
				$g=$l;
			$responseArr1['id'] = '';
			$responseArr1['title'] = 'vacation';
			$responseArr1['start'] = $ve_dates[$y]."T".$starttime;
			$responseArr1['end'] = $ve_dates[$y]."T".$endtime;
			$responseArr1['allDay'] = false;
			$responseArr1['className'] =	'vecation';
			array_push($responseArr,$responseArr1);
			  $z++;
			}
			$r = $z;
			$k++;
			}
			$vec_count=count($vec_dates);
			$date=date('Y-m-d');
			$Date1 = date('Y-m-d', strtotime($dateCnt. ' + 90 days'));
			$br_dates=GetDays($date, $Date1);
			$br_count=count($br_dates);
	 $breaks=$result[breaks];
		$breaktime=json_decode($breaks,true);
		for($m=0;$m<$br_count;$m++){
			$day=date('D',strtotime($br_dates[$m]));
			$responseArr2['id'] = '';
			$responseArr2['title'] = 'BreakTime';
			$responseArr2['start'] = $br_dates[$m]."T".$breaktime[$day][start];
			$responseArr2['end'] = $br_dates[$m]."T".$breaktime[$day][ends];
			$responseArr2['allDay'] = false;
			$responseArr2['className'] =	'breaks';
			array_push($responseArr,$responseArr2);
		}
		echo json_encode($responseArr);		*/
	}
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

	?>
