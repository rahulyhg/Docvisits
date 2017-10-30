<?php 
include("./conf/config.inc.php");
$result = $scad->getUserDetails($_SESSION['userID']); 
$resu = $scad->getAppointmentDetailsPatient($_SESSION['userID'],$_REQUEST['sum']);
$res= $scad->getDocDetails($_REQUEST['sum']);
 foreach ($res as $key => $value) {
 	$docName = $value['firstname']." ".$value['lastname'];
 }
?>
<?php if(empty($resu)){ ?>
    <div style=" color:#ccc; font-size: 31px;text-align:center">No data to display</div>
    <?php } else{?> 
    <div style="overflow-x:auto;height:500px">
      <table class="table  table-striped past_app" >
        <thead>
          <tr>
            <th colspan="">Doctor</th>
            <th colspan="">Reason For Visit</th>
            <th colspan="">Appointment Date/Time</th>
            <th colspan="">Status</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i=0;  
          foreach ($resu as $key => $val) {
          	if($val['illness']== "0"){
				$illName = "No response";
			}else{
             $ill = $scad->getIllness($val['illness']);
				foreach($ill as $key => $illness){
					$illName = $illness['name'];
				}			
			}
              ?>  
              <tr>          
                <td data-label="Doc Name" ><?php echo $docName;?></td>            
                <td data-label="Illness"class="name"><?php echo $val['apnt_note'];?></td>
                <td data-label="Appoinment Date"><?php $newDate = date("M-d-Y", strtotime($val['apnt_date'])); $newTime = date("H:i a", strtotime($val['apnt_starttime'])); $fianDate = $newDate." ".$newTime;echo $newDate." / ".$newTime;?></td>
               <td data-label="status">
				<?php 
						$fianDate = date("M-d-Y H:i:s", strtotime($val['apnt_date'].' '.$val['apnt_starttime']));  
						
					if(strtotime("now") < strtotime($fianDate)){
						echo '<a href="'.WEB_ROOT.'index.php/patient/select-doctor" >check-in-online</a>';
					}if(strtotime("now") > strtotime($fianDate)){
						echo "Completed";
					}
					?></td>
                </tr>
                <?php           
              //}
              $i++;
            }
            //echo $i;
            ?>
          </tbody>
        </table> 
        <?php } ?>  