<?php 
include("service/ui/common/header_pat_home.php"); 
$result = $scad->getUserDetails($_SESSION['userID']); 
$resu = $scad->getDetails($_SESSION['userID']);
foreach ($resu as $key => $value) {
  $ids[]=$value['doctor_id'];
  $res[]= $scad->getDocDetails($value['doctor_id']);
}  //  print_r($res);exit;
?>
<link rel="stylesheet" href="<?php echo WEB_ROOT?>service/public/css/setting_pg.css">
<script type='text/javascript' src='<?php echo WEB_ROOT?>service/public/js/doctor-profile-settings.js'></script>
<script type="text/javascript">
  $(document).ready(function(){
    //alert("in patient page");
      //alert($(document).height()+'--'+$(window).height());
      $( "a:contains('Services')" ).css( "color", "#02B8BF" );
    });
  </script>
  <style>
    .input-block {
      box-sizing: border-box;
      display: block;
      min-height: 40px;
      width: 100%;
    }
    .detail_box{
     float:left;
     width:80%;
   }
   .action_box{
    float:right;
    width:20%;
    margin-top:5%;
  }
  .dc_spec p {
  	margin: 0;
  	padding: 0;
  }
	
</style>
<!-- Past visited doctors script -->
<style>
</style>
<script>
  $( document ).ready(function() {
   $(".delete_apt").click(function(){
    var cnf= confirm('Are you sure to delete this?');
    if(cnf===true){
      df=$(this);
      var id=$(this).attr("target");
      $.ajax({
        type: 'POST',
        url: SITEURL + 'act-delete-appoinments',
        data: {"id":id},
        success: function(res) {
          if (res == 0) {
            $("#doc_setting_error").fadeIn(3000);
            $("#doc-setting-error").delay(1000).fadeOut(8000);
            document.getElementById('doc-detail').style.pointerEvents = 'auto';
            $("#doc-detail").text('Save');
          } else {
            $("#apntEdit").show().delay(1000);
            df.parent().parent().hide();
            $("#apntEdit").fadeOut(1000);
          }
        }
      });
    }
  });
   function test(){
     alert("in test");    
     $(".submit").click(function(){ 
  //alert ("okkk");
//var n=$("#userIdf").val();
var i = $(this).parent().find("#userIdf").val();
//alert(i); 
var ovrall=$("input[name='rating']:checked").val();
      // alert(ovrall);
      var bsidemnr=$("input[name='rating2']:checked").val();
      // alert(bsidemnr);
      var waiting=$("input[name='rating3']:checked").val();
      // alert(waiting);
      var msg =$("#message").val();
      var userget=$("#userid").val();
      //alert(userget);
      var docId=$("#dctid").val(); 
      //alert(docId);
      $.ajax({
        type: 'POST', 
        url: SITEURL+'patient/profile/ratingaction',
        data: {"ovrall":ovrall , "bsidemnr":bsidemnr , "waiting":waiting , "msg":msg , "userget":userget , "docId":docId },
        success: function(res)
        {
          $("#rateModl").modal('hide');
        }
      });
//*ajax end   
});
//id request 
$(".cancel").click(function(){
 $("#rateModl").modal('hide');
//alert ("ok");
});
}
$(".ratng").click(function(e)
{
  e.preventDefault();
  var sum= $(this).attr("target");
  // alert (sum);
  
  $.ajax({
    type: 'POST',       
    url: SITEURL+'patient/profile/ratingpopup',
    data: {"sum":sum},
    success: function(res)
    {
      //console.log(res);
      $("#rateModl").html(res);$('#rateModl').modal('show');        
      $('.submit').show();
      test();
           /*if (res === 0) {
                        $("#error").fadeIn(1000);
                        document.getElementById('ratings').style.pointerEvents = 'auto';
                        $("#continue-join-patient").text('Countinue');
                    } else {
      
                        $("#abnt-form").fadeOut(1000);
      $(".here").html(res);
    }*/
  }
});
//submitclickaction();
//alert ("ok"); 
});
});
  
</script>
<main id="main" class="tg-haslayout">
  <section class="tg-main-section tg-haslayout">
   <div class="container">
    <div class="row study">
     <ul class="tabs" id="docTab" style="list-style:none; padding:0; margin:0;">
       <li class="active" ><a  href="#doc-visited">My Doctors</a></li>
       <li><a href="#past-appointments">Past Appointments</a></li>
       <li><a href="#ImmunizationReq">Immunization Req</a></li>
       <li><a href="#PrescriptionReq">Prescription Refill</a></li>
       <li><a href="#PrintForm">Print Forms</a></li>
     </ul>
     <div class="tabcontents">
      <div class="tab-pane active" id="doc-visited">
        <div class="row">
        </div>
        <div class="row">
          <div class="col-md-9 col-sm-12 col-xs-12">
           <ul class="welcomes">
            <?php
            $i=0;  
            foreach ($resu as $key => $val) {
              $i=$key;
              $res= $scad->getDocDetails($val['doctor_id']);
              $rat=$scad->getrting($val['doctor_id']);
              $len=count($rat);
              for($j=0;$j<$len;$j++){
                $overall[$val['doctor_id']][]=($rat[$j]['overall'] +$rat[$j]['beside'] +$rat[$j]['waiting'])/3  ;
              }
            //print_r($overall);
              $rateval=0; 
              for($k=0;$k<count($overall[$val['doctor_id']]);$k++){
                $rate = $overall[$val['doctor_id']][$k];
                $rateval= $rateval+$rate;
              }
              $doc_rating = round($rateval/count($overall[$val['doctor_id']]));
              foreach ($res as $key => $value) {
                $img= $scad->getDocProImg($value['id']);
                if ($img['name']) {
                  $docImage = $img['name'];
                } else {
                  $docImage = 'no_image.jpg';
                }
                ?>
                <li>
                 <div class="primary">
                  <div class="care">
                   <h4>Book a primary care physican  </h4>
                   <div class="crossbar">
                    <a href="#"><img src="<?php echo WEB_ROOT?>service/public/images/images/cross.png"></a> 
                  </div>
                </div>
                <div class="profile full phy">
                 <div class="col-md-4">
                  <div class="propic photo">
                   <img src="<?php echo WEB_ROOT;?>service/public/z_uploads/doctor/small/<?php echo $docImage ?>">
                 </div>
               </div>
               <div class="col-md-8">
                <div class="name">
                 <h3><?php echo $value['firstname']." ".$value['lastname'];?></h3>
               </div>
				<div class="dc_spec">
					<p><?php 
						$specialities = $scad->getDocSpeciality($val['doctor_id']);
						if(!empty($specialities)){
							foreach($specialities as $spec){
								$final[] = $spec['name'];
							}
							echo implode(", ",$final);
						}else{
							echo "No Speciality";
						}
					?></p>
				</div>
               <input type="hidden" value="<?php echo $val['doctor_id'];?>" id="userIdf">
               <input type="hidden" value="<?php echo $_SESSION['userID'];?>" id="userid">
               <span class="rating rate">
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
              </span>
              <?php
              $co=$scad->AppoinmentCount($val['doctor_id']);
              $totl= $co[0]["count(doctor_id)"];  
              ?>
              <div class="prodt">
                <?php
                $count=$scad->getratingDetails($val['doctor_id']);
                $c=count($count);
                if($c==0){
                  ?>
                  <a href="#" class="ratng" id="docid" datasrc="5" target="<?php echo $val['doctor_id'] ;?>">
                    <i class="fa fa-star-o"></i>
                    <span> Rate</span>
                  </a>
                  <?php } else{?>
                  <!--<a href="#" class="ratng" id="docid1" datasrc="5" target="<?php echo $val['doctor_id'] ;?>">
                    <i class="fa fa-star-half-o"></i>
                    <span> Rated</span>
                  </a>-->
                  <a href="javascript:void();" class=""  datasrc="5" target="<?php echo $val['doctor_id'] ;?>">
                    <i class="fa fa-star-half-o"></i>
                    <span> Rated</span>
                  </a>
                  <?php } ?>
                </div>
                <div class="prodt">
                  <a href="javascript:void(0);">
                    <i class="fa fa-info-circle"></i>
                    <span><?php echo $totl; ?> Appointments</span>
                  </a>
                </div>
                <div class="prodt">
                  <a href="<?php echo WEB_ROOT;?>index.php/view-prrofile/<?php echo $val['doctor_id'];?>">
                    <i class="fa fa-repeat"></i>
                    <span>Book Again</span>
                  </a>
                </div>
				<div class="prodt">
                  <a href="tel:<?php echo $value['phone'];?>">
                    <i class="fa fa-phone"></i>
                    <span><?php echo $value['phone'];?></span>
                  </a>
                </div>
                <!--<div class="prodt">
                  <a href="mailto:<?php echo $value['email'];?>">
                    <i class="fa fa-envelope-o"></i>
                    <span><?php echo $value['email'];?></span>
                  </a>
                </div>-->
                <div class="prodt">
                  <a  href="javascript:void(0);">
                    <i class="fa"></i>
                    <span><?php echo $value['address'];?></span>
                  </a>
                </div>
                <div class="row"></div>
              </div>
            </div>
          </div>
        </li>
        <?php } }
        ?>
        <li id="findDocli">
          <div class="primary">
            <div class="care">
              <h4> Book an Appointment </h4>
              <div class="crossbar">
                <a href="#"><img src="<?php echo WEB_ROOT?>service/public/images/images/cross.png"></a> 
              </div>
            </div>
            <div class="round">
              <div class="plus">
                <a href="#" style="color:#02B8BF;"> <img src="<?php echo WEB_ROOT;?>service/public/images/profile_add_dctr.png" alt=""> <br> Find a Doctor </a>
              </div>
            </div>
          </div>
        </li>
        <li id="bookDocli" style="display:none;">
          <div class="primary">
            <div class="care">
              <h4> Book an Appointment </h4>
              <div class="crossbar">
                <a href="#"><img src="<?php echo WEB_ROOT?>service/public/images/images/cross.png"></a> 
              </div>
            </div>
            <div class="profile full phy">
              <form style="margin-top:10px;">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="drop-select">
                    <select class="select2">
                     <option val="">Select a Speciality</option>
                     <?php $scad->listbox('speciality','id','name',$condition=NULL,'`name` ASC',$selected=NULL); ?>
                   </select>
                 </div>
               </div>
               <div class="col-md-offset-4 col-md-4 col-sm-offset-4 col-sm-4 col-xs-offset-0 col-xs-12 lg_btn" style="margin-top:10px;"><a style="color:#fff;" class="" href="<?php echo WEB_ROOT;?>index.php/search">Search</a></div>
             </form>
           </div>
         </div>
       </li>
     </ul>
   </div>
   <div style="padding:0;" class="col-md-3">
     <div class="upcoming">
      <div class="upcoming_head">
        <img src="<?php echo WEB_ROOT?>service/public/images/images/clock.png">
        <h4>Upcoming Events</h4>
      </div>
      <div class="upcoming_display">
        <?php
        $res=$scad->getUpcomingEvents($_SESSION['userID'],date("Y-m-d"));
               // echo "<pre>";
               // print_r($res);
               // echo "</pre>";
        ?>
        <?php 
        if(!empty($res)){
          $len=count($res);
          for($i=0;$i<$len;$i++){
            $user=$scad->getUserDetails($res[$i]["doctor_id"]);
            ?>
            <div class="up_event <?php echo (($i+1) % 2 == 0) ? 'even' : 'odd';?>">
              <div class="pfl_evntss prodt">
                <a href="javascript:void(0);">
                  <i class="fa fa-user-md"></i>
                  <span><?php echo $user["firstname"]." ".$user["lastname"];?></span>
                </a>
              </div>
              <div class="pfl_evntss prodt">
                <a href="javascript:void(0);">
                  <i class="fa fa-clock-o"></i>
                  <?php
                  $newDate = date_format(date_create_from_format('Y-m-d', $res[$i]["apnt_date"]), 'd-m-Y');
                  $newTime = date_format(date_create_from_format('h:i:s', $res[$i]["apnt_starttime"]), 'h:i a');
                  ?>
                  <span>Date: <?php echo $newDate?><br/>Time: <?php echo $newTime; ?></span>
                </a>
              </div>
              <div class="pfl_evntss prodt">
                <a href="javascript:void(0);">
                  <i class="fa fa-bell-o"></i>
                  <span><?php echo $res[$i]["apnt_note"];?></span>
                </a>
              </div>
            </div>
            <?php } }else{?>
            <p class="no_data">No data to display</p>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="between"></div>
  <div class="modal fade" tabindex="-1" role="dialog" id="rateModl">
  </div><!-- /.modal -->
</div>
</div>
<div class="tabcontents">
  <div class="tab-pane" id="past-appointments">
    <div class="profile_banner">
     <div id="apntEdit" style="left:240px;position: absolute;top: 140px;width: 400px;z-index: 999999; display:none;" role="alert" class="alert alert-success">
      Your changes saved successfully.
    </div>
    <?php if(empty($resu)){ ?>
    <div style=" color:#ccc; font-size: 31px;text-align:center">No data to display</div>
    <?php } else{?> 
    <div style="overflow-x:auto;height:500px">
      <table class="table  table-striped past_app" >
        <thead>
          <tr>
            <th colspan="">Doctor</th>
            <th colspan="">Reason For Visit</th>
            <th colspan="">Date Visited</th>
            <th colspan="">Time Visited</th>
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
                <td data-label="Appoinment Date"><?php echo $newDate = date("d-m-Y", strtotime($val['apnt_date'])); ?></td>
                <td data-label="Appoinment Time"><?php echo $newDate = date("H:i:s a", strtotime($val['apnt_starttime'])); ?></td>
                <?php           
              }
              $i++;
            }
            //echo $i;
            ?>
          </tbody>
        </table> 
        <?php } ?>      
      </div>
    </div>
  </div>
</div>
<div class="tabcontents">
  <div class="tab-pane" id="ImmunizationReq">
    <form class="form-horizontal">
      <fieldset>
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Patient Name</label>  
          <div class="col-md-4">
            <input id="textinput" name="textinput" placeholder="Give first and last names" class="form-control input-md" required="" type="text">
          </div>
        </div>
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="DateOfBirth">Date of Birth</label>  
          <div class="col-md-4">
            <input id="DateOfBirth" name="DateOfBirth" placeholder="Use the format MM/DD/YYY" class="form-control input-md" required="" type="text">
          </div>
        </div>
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="parentName">Parent or Guardian's Name</label>  
          <div class="col-md-4">
            <input id="parentName" name="parentName" placeholder="Give first and last names" class="form-control input-md" required="" type="text">
          </div>
        </div>
        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="physician">Primary Care Physician</label>
          <div class="col-md-4">
            <select id="physician" name="physician" class="form-control">
            </select>
          </div>
        </div>
        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="preferredOffice">Preferred Office</label>
          <div class="col-md-4">
            <select id="preferredOffice" name="preferredOffice" class="form-control">
            </select>
          </div>
        </div>
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="contactNum">Primary Phone</label>  
          <div class="col-md-4">
            <input id="contactNum" name="contactNum" placeholder="use the format 317-555-1212" class="form-control input-md" required="" type="text">
          </div>
        </div>
        <!-- Search input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="alternatePhone">Alternate Phone</label>
          <div class="col-md-4">
            <input id="alternatePhone" name="alternatePhone" placeholder="use the format 317-555-1212" class="form-control input-md" type="search">
          </div>
        </div>
        <!-- Search input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="email">Email</label>
          <div class="col-md-4">
            <input id="email" name="email" placeholder="email" class="form-control input-md" required="" type="search">
          </div>
        </div>
        <!-- Multiple Radios (inline) -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="radios">Subscribe to Mailing List</label>
          <div class="col-md-4"> 
            <label class="radio-inline" for="radios-0">
              <input name="radios" id="radios-0" value="1" checked="checked" type="radio" 
              style="width:auto;">
              Yes
            </label> 
            <label class="radio-inline" for="radios-1">
              <input name="radios" id="radios-1" value="2" type="radio" style="width:auto;">
              No
            </label>
          </div>
        </div>
        <!-- Textarea -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="additionalNotes">Additional Notest and Questions</label>
          <div class="col-md-4">                     
            <textarea class="form-control" id="additionalNotes" name="additionalNotes"></textarea>
          </div>
        </div>
        <!-- Multiple Radios (inline) -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="howto">Recieve your immunization copy through</label>
          <div class="col-md-4"> 
            <label class="radio-inline" for="howto-0">
              <input name="howto" id="howto-0" value="1" checked="checked" type="radio" style="width:auto;"> 
              email
            </label> 
            <label class="radio-inline" for="howto-1">
              <input name="howto" id="howto-1" value="2" type="radio" style="width:auto;">
              fax
            </label>
          </div>
        </div>
      </fieldset>
      <div class="form-group">
        <label class="col-md-4 control-label" for="Submit"></label>
        <div class="col-md-4">
          <button id="Submit" name="Submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </form>
  </div>
</div>
<div class="tabcontents">
  <div class="tab-pane" id="PrescriptionReq">
    <form class="form-horizontal">
      <fieldset>
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Patient Name</label>  
          <div class="col-md-4">
            <input id="textinput" name="textinput" placeholder="Give first and last names" class="form-control input-md" required="" type="text">
          </div>
        </div>
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="DateOfBirth">Date of Birth</label>  
          <div class="col-md-4">
            <input id="DateOfBirth" name="DateOfBirth" placeholder="Use the format MM/DD/YYY" class="form-control input-md" required="" type="text">
          </div>
        </div>
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="parentName">Parent or Guardian's Name</label>  
          <div class="col-md-4">
            <input id="parentName" name="parentName" placeholder="Give first and last names" class="form-control input-md" required="" type="text">
          </div>
        </div>
        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="physician">Primary Care Physician</label>
          <div class="col-md-4">
            <select id="physician" name="physician" class="form-control">
            </select>
          </div>
        </div>
        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="preferredOffice">Preferred Office</label>
          <div class="col-md-4">
            <select id="preferredOffice" name="preferredOffice" class="form-control">
            </select>
          </div>
        </div>
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="contactNum">Primary Phone</label>  
          <div class="col-md-4">
            <input id="contactNum" name="contactNum" placeholder="use the format 317-555-1212" class="form-control input-md" required="" type="text">
          </div>
        </div>
        <!-- Search input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="alternatePhone">Alternate Phone</label>
          <div class="col-md-4">
            <input id="alternatePhone" name="alternatePhone" placeholder="use the format 317-555-1212" class="form-control input-md" type="text">
          </div>
        </div>
        <!-- Search input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="email">Email</label>
          <div class="col-md-4">
            <input id="email" name="email" placeholder="email" class="form-control input-md" required="" type="email">
          </div>
        </div>
        <!-- Multiple Radios (inline) -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="radios">Subscribe to Mailing List</label>
          <div class="col-md-4"> 
            <label class="radio-inline" for="radios-0">
              <input name="radios" id="radios-0" value="1" checked="checked" type="radio" style="width:auto;">
              Yes
            </label> 
            <label class="radio-inline" for="radios-1">
              <input name="radios" id="radios-1" value="2" type="radio" style="width:auto;">
              No
            </label>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label" for="medicationReq">Medication Requested</label>
          <div class="col-md-4">
            <input id="medReq" name="medReq" placeholder="Medication Requested" class="form-control input-md" required="" type="text">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label" for="dose">Dosage</label>
          <div class="col-md-4">
            <input id="dose" name="dose" placeholder="Dose" class="form-control input-md" required="" type="text">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label" for="days">Days Supply</label>
          <div class="col-md-4">
            <input id="days" name="days" placeholder="No of Days" class="form-control input-md" required="" type="text">
          </div>
        </div>
        <!-- Textarea -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="additionalNotes">Additional Information</label>
          <div class="col-md-4">                     
            <textarea class="form-control" id="additionalNotes" name="additionalNotes"></textarea>
          </div>
        </div>
        <!-- Multiple Radios (inline) -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="howto">Prescription Delivery Options</label>
          <div class="col-md-4"> 
            <label class="radio-inline" for="howto-0">
              <input name="howto" id="howto-0" value="1" checked="checked" type="radio" style="width:auto;">
              Call in to Pharmacy
            </label> 
            <label class="radio-inline" for="howto-1">
              <input name="howto" id="howto-1" value="2" type="radio" style="width:auto;">
              Pick Up in Person
            </label>
          </div>
        </div>
      </fieldset>
    </fieldset>
    <div class="form-group">
      <label class="col-md-4 control-label" for="Submit"></label>
      <div class="col-md-4">
        <button id="Submit" name="Submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>
</div>
</div>
<div class="tabcontents">
  <div class="tab-pane" id="PrintForm">
  </div>
</div>
</div>
</section>
</main>
<?php include("service/ui/common/footer.php"); ?>