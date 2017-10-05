<?php 
include("./conf/config.inc.php");
$result = $scad->getUserDetails($_SESSION['userID']); 
$resu = $scad->getDetails($_SESSION['userID']);
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
              //echo $val['illness'];
            //print_r($val);
            $res= $scad->getDocDetails($val['doctor_id']);
            foreach ($res as $key => $value) {
                        //echo $val['illness'];
              //print_r($val);exit;
                      //print_r($value);exit;
              ?>  
              <tr>          
                <td data-label="Doc Name" ><?php echo $value['firstname']." ".$value['lastname'];?></td>            
                <td data-label="Illness"class="name"><?php  if(empty($val['illness'])){echo "No response";}else{echo $val['illness'];}?></td>
                <td data-label="Appoinment Date"><?php $newDate = date("m-d-Y", strtotime($val['apnt_date'])); $newTime = date("H:i a", strtotime($val['apnt_starttime'])); echo $newDate." / ".$newTime;?></td>
               <td data-label="status"><?php $status = $val['status'];
               	if($status == 0){
					echo "Pending";
				}if($status == 1){
					echo "Approved";
				}if($status == 2){
					echo "Cancelled";
				}
                ?></td>
                <?php           
              }
              $i++;
            }
            //echo $i;
            ?>
          </tbody>
        </table> 
        <?php } ?>  