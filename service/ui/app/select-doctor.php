<?php 
include("service/ui/common/header_pat_home.php"); 
$result = $scad->getUserDetails($_SESSION['userID']); 
$resu = $scad->getDetails($_SESSION['userID']);
//echo "<pre>";print_r($result);exit;
foreach ($resu as $key => $value) {
  $ids[]=$value['doctor_id'];
  $res[]= $scad->getDocDetails($value['doctor_id']);
}    
?>
<script>
$( document ).ready(function() {
$('#doctor_dropdown').change(function() {
  	window.location.href = SITEURL+'patient/check-in-online-form';
});
});
</script>
<main id="main" class="tg-haslayout">
  <section class="tg-main-section tg-haslayout">
   <div class="container">
   <form class="form-horizontal">
      <fieldset>
   <div class="form-group">
          <label class="col-md-4 control-label" for="doctor_dropdown">Select Physician</label>
          <div class="col-md-4">
            <select id="doctor_dropdown" name="doctor_dropdown" class="form-control">
             <option value="">Select Physician</option>
              <?php if(!empty($resu)){
            	
		          foreach ($resu as $key => $val) {
		              //echo $val['illness'];
		            //print_r($val);
		            $res= $scad->getDocDetails($val['doctor_id']);
		            foreach ($res as $key => $value) {
            	?>
            	<option value="<?php echo $val['doctor_id'];?>"><?php echo $value['firstname']." ".$value['lastname'];?></option>
            <?php 	}
            	}
            	}
             ?>
            </select>
           
          </div>
        </div>
        </fieldset>
        </form>
   </div>
  </section>
</main> 


<?php include("service/ui/common/footer.php"); ?>