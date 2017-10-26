<?php
include ("service/ui/common/header.php");
$apntDetails = base64_decode($apntDetails);
$allData = explode("_",$apntDetails);
$doctorID  = $allData[0];
$_SESSION['regDocid']=$doctorID;
$date    = $allData[1];
$time      = $allData[2];
$insuranceSelect = $ins;
$search=$search;
$subInsuranceSelect = $subins;
$result = $scad->getUserDetails($doctorID);
$resImage = $scad->getImages($doctorID);
$userdetails=$scad->getUserDetails($_SESSION[userID]);
?>
<style>
  .check_button{

   background-color: #ffffff;
   background-image: linear-gradient(to bottom, #fe6afe, #f819f8);
   background-repeat: repeat-x;
   border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
   border-radius: 6px;
   color: #ffffff;
   cursor: pointer;
   font-family: roboto;
   font-size: 19px;
   font-weight: 700;
   padding: 12px 19px;
   position: relative;
   text-align: center;
   text-decoration: none;
   text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);}
   .check_button1{

    background-color: #ccc;
    background-repeat: repeat-x;
    border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
    border-radius: 6px;
    color: #ffffff;
    cursor: pointer;
    font-family: roboto;
    font-size: 19px;
    font-weight: 700;
    padding: 12px 19px;
    position: relative;
    text-align: center;
    text-decoration: none;
    text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);}
    .active-nav {
     background: none repeat scroll 0 0 #2a9cdc;
     color: #fff;
     float: left;
     height: 50px;
     line-height: 50px;
     text-align: center;
     width: 20%;
   }
   .inactive-nav {
     background: none repeat scroll 0 0 #ccc;
     color: #fff;
     float: left;
     height: 50px;
     line-height: 50px;
     text-align: center;
     width: 20%;
   }



   /* Form Progress */
   .progress1 {
    width: 1000px;
    margin:0px auto 50px auto ;
    text-align: center;
  }
  .progress1 .circles,
  .progress1 .bar {
    display: inline-block;
    background: #fff;
    width: 40px; height: 38px;
    border-radius: 40px;
    border: 1px solid #d5d5da;
  }
  .progress1 .bar {
    position: relative;
    width: 180px;
    height: 6px;
    margin: 0 -5px 2px;
    border-left: none;
    border-right: none;
    border-radius: 0;
  }
  .progress1 .circles .label1 {
    display: inline-block;
    width: 32px;
    height: 32px;
    line-height: 32px;
    border-radius: 32px;
    margin-top: 3px;
    color: #b5b5ba;
    font-size: 17px;
  }
  .progress1 .circles .title1 {
    color: #b5b5ba;
    font-size: 13px;
    line-height: 18px;
    margin-left: -5px;
    text-align:left;
  }

  /* Done / Active */
  .progress1 .bar.done,
  .progress1 .circles.done {
    background: #eee;
  }
  .progress1 .bar.active {
    background: linear-gradient(to right, #EEE 40%, #FFF 60%); 
  }
  .progress1 .circles.done .label1 {
    color: #FFF;
    background: #07BC83;
    box-shadow: inset 0 0 2px rgba(0,0,0,.2);
  }
  .progress .circles.done .title1 {
    color: #444;
  }
  .progress1 .circles.active .label1 {
    color: #FFF;
    background: #02B8BF;
    box-shadow: inset 0 0 2px rgba(0,0,0,.2);
  }
  .progress1 .circles.active .title1 {
    color: #0c95be; 
  } 
  .job{ width:120px; float:left; text-align:center; font-size:12px; margin:5px 0 0 -35px;white-space: nowrap; }

</style>
<input type="hidden" name="insuranceSelect" id="insuranceSelectS" value="<?php echo $insuranceSelect;?>"/>
<input type="hidden" name="subInsuranceSelect" id="subInsuranceSelectS" value="<?php echo $insuranceSelect;?>"/>
<input type="hidden" name="Search" id="Search" value="<?php echo $search;?>"/>

<main id="main" class="tg-haslayout">
 <!--  Appointment -->
 <div class="dr_apoint_dtl">
  <div class="progress1">
    <div class="circles apnt_fixing active">
      <span class="label1 apnt_fixing_label">1</span>
      <span class="job ">Appointment Confirmation </span>
    </div>
    <span class="bar apnt_fixing_bar "></span>
    <div class="circles apnt_details">
      <span class="label1 apnt_details_label">2</span>
      <span class="job ">Enter Patient Info  </span>
    </div>
    <span class="bar apnt_details_bar"></span>
    <div class="circles check_in_details ">
      <span class="label1 check_in_details_label">3</span>
      <span class="job ">Review Patient Info </span>
    </div>
  </div>


</div>

<div class="container">
  <div class="row">
   <div class="col-md-4">
    <div class="row">
      <?php 
      if(!empty($resImage)){
       foreach($resImage as $keys=>$value){
         if($value['set_profile']==1){
          $profileImage = $value['name'];
        }

      }
    }else{ 
      $imageName = 'no_image.jpg';
    }
    if(!empty($profileImage)){ $imageName = $profileImage; }
    ?>
    <div class="fill">
      <div class="col-md-4">
       <div class="propic photo">
        <img src="<?php echo WEB_ROOT;?>service/public/z_uploads/doctor/small/<?php echo $imageName;?>">
      </div>
    </div>
    <div class="col-md-8">
     <div class="name">
      <h3><a href='<?php echo WEB_ROOT;?>index.php/view-prrofile/<?php echo $doctorID;?>'><?php echo $result['firstname']." ".$result['lastname'];?></a></h3>
    </div>
    <div class="prodt">
      <?php $res = $scad->getSpeciality($result['speciality']); echo $res['name']; ?><br>
      <?php echo $result['address']?>
    </div>
  </div>
</div>
</div>
<div class="between"></div>
<div class="patient weight time">
 <h3>Appointment time</h3>
 <p id="apnttime">
  <?php 
  $days = explode(" ",$date);
  $timestamp=strtotime($date);
  //echo $date;
  //echo $timestamp;
  echo  $day = date('l', $timestamp).",".date('F', $timestamp)." ".date('d',$timestamp).",".date('Y', $timestamp)." at ".$time;
  ?>
  <input type="hidden" class="time" id="time_val" value="<?php echo $day;?>">
</p>
</div>
</div>
<div class="col-md-8">
  <div id="apnt-success" style="display:none">
   <?php /*<div  style="text-align:center;" class="alert alert-success">Your appointment booked successfully!<br /></div>
    <div  align="center">
      a style="padding:8px;" href="<?php echo WEB_ROOT;?>index.php/checkin-registration/<?php echo $date." ".$time;?> " class="lg_btn alert_link">Check-in online</a>
      <a style="cursor:pointer;padding:8px;" class="lg_btn disabled alert_link">No thanks</a>  
    </div>-->*/?>
    <div  style="text-align:center;" class="alert alert-success"> Your appointment booked successfully!<br /><a class="alert_link" href="<?php echo WEB_ROOT;?>index.php" >Click here to proceed.</a></div>
  </div>

  <div id="apnt-confirm-success" style="display:none">
    <div  style="text-align:center;" class="alert alert-success"> Your appointment booked successfully!<br /><a class="alert_link" href="<?php echo WEB_ROOT;?>index.php" >Click here to proceed.</a></div>
  </div>

  <!--insurence select check login -->
  <div class="col-md-6" id="abnt-form">
    <div class="">
     <h3>Patient Information</h3>
   </div>
   <form  id="appointment-info-form" name="appointment-info-form">

     <fieldset>
       <div class="section italic">
         <h4>Insurance Carrier</h4>
       </div>
       <div class="form-group">
         <select name="insuranceSelect" class="advanceSearch" id="insuranceSelect">
          <option value="">Select Insurance</option>
          <?php if(!empty($insuranceSelect)){$selected = $insuranceSelect;}else{$selected = NULL;}  $scad->listbox('insurance','id','name','`parent_id`=0','`name` ASC',$selected); ?>
        </select>
      </div>
      <div class="section italic">
        <h4>Insurance Plan</h4>
      </div>
      <div class="form-group">
       <select name="subInsuranceSelect" class="advanceSearch" id="subInsuranceSelect">
        <option value="">Select Insurance</option>
        <?php if(!empty($subInsuranceSelect)){$selected = $subInsuranceSelect;}else{$selected = NULL;}  $scad->listbox('insurance','id','name',$condition=NULL,'`name` ASC',$selected); ?>
      </select>
    </div>
    <div class="section italic">
      <h4>Reason For Visit</h4>
    </div>
    <div class="form-group">
      <input type="text" id="srchReason" name="srchReason" placeholder="Condition" value="" class="input-block-level" data-required="true" style="min-height:36px;" >
    </div>
    <div class="clearBoth"></div>
    <?php 
    if(!$_SESSION['userID']){
      ?>
      <div class="rad-but ex">
        <input name="regStatus" id="nextSh" value="" type="radio"> I have used DocVisits <br>
        <input name="regStatus" id="newSch" value="" type="radio"> I am new to DocVisits 
        <div class="clearBoth"></div>
      </div>
      <?php
    } else {
      ?>
      <input type="button" class="tg-btn tg-btn-lg" id="patient-signin" name="Continue" value="Continue">
      <?php
    }
    ?>
  </fieldset>
</form>
</div>
<!--insurence select check login -->

<!--nurse image-->
<div class="col-md-6" id="docnurseImg">
  <div class="nurse">
    <!-- login form-->
    <div  class="col-md-12 col-sm-12 col-xs-12">
      <div class="alert alert-error" style="margin-top: 20px;display:none;" id="errorlogin">Username or password is Incorrect.</div>
      <div class="alert alert-error" style="margin-top:20px;display:none;" id="error">Email Already Exist.</div>
      <div class="alert alert-error" style="margin-top:20px;display:none;" id="emaillogin">Email not verified.</div>
    </div>
    <div class="col-md-12" id="login" style="display:none;">
      <h3>Sign In</h3>
      <form class="tg-form-modal tg-form-signin" id="patient-signin-form" name="patient-signin-form">
        <fieldset>
          <div class="form-group">
            <input type="email" class="form-control" placeholder="Email Address" data-type="email" data-trigger="change" data-required="true" id="email-login" name="email" >
          </div>
          <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" data-trigger="change" data-required="true" name="password" id="password-LOGIN" >
          </div>
        </fieldset>
                    <!-- <fieldset>
                    <div class="form-group tg-checkbox">
                        <label>
                            <input type="checkbox" class="form-control">
                            Remember Me
                        </label>
                        <a class="tg-forgot-password" href="#">
                            <i>Forgot Password</i>
                            <i class="fa fa-question-circle"></i>
                        </a>
                      </div>-->
                      <input type="button" class="tg-btn tg-btn-lg" id="continue-patient-signin" name="Continue" value="Continue">
                      <!--</fieldset>-->
                    </form>

                  </div>
                  <!-- login form-->

                  <!-- register form -->
                  <div style="display:none;" class="col-md-12 col-sm-12 col-xs-12" id="register">
                   <h3>Sign Up</h3>
                   <form  class="tg-form-modal tg-form-signup do-registration-form" id="patient-form" name="patient-form">
                    <fieldset>
                      <div class="form-group">
                        <input type="text" name="email" id="email" data-type="email" data-trigger="change" data-required="true" value="" placeholder="Email" class="form-control">
                      </div>
                      <div class="form-group">
                        <input type="text" data-regexp="^[a-zA-Z]+$" data-trigger="change" data-minlength="3" data-required="true" placeholder="First Name" id="firstname-reg" name="firstname"  class="form-control" >      
                      </div>
                      <div class="form-group">
                        <input type="text" data-regexp="^[a-zA-Z]+$" data-trigger="change" data-minlength="3" data-required="true" placeholder="Last Name" id="lastname-reg" name="lastname" class="form-control">
                      </div>
                      <div class="form-group">
                        <input name="phone" type="text" data-trigger="change" data-maxlength="10" data-minlength="10" data-type='number' data-required="true" placeholder="phone" class="form-control">
                      </div> 
                      <div class="form-group">
                        <input type="password" name="password" value="" data-minlength="6" data-trigger="change" data-required="true" id="password" placeholder="Password" class="form-control">
                      </div>
                      <div class="form-group">
                        <input type="password" name="confirmpassword" value="" data-minlength="6" data-trigger="change" data-required="true" data-parsley-equalto="#password" id="confirmpassword" placeholder="Confirm Password" class="form-control" data-error-message="Passwords should match">
                      </div>

                      <div class="clearBoth"></div>
                      <div class="form-group">
                        <input id="male" name="gender" value="1" data-required="true" type="radio" checked="checked"> Male
                        &nbsp;&nbsp;
                        <input id="female" name="gender" value="2" data-required="true" type="radio"> Female
                        <div class="clearBoth"></div>
                      </div>
                      <div class="form-group tg-checkbox">
                        <label>
                          <input data-trigger="change" data-required="true" name="patprivacy" type="checkbox">
                          <a href="<?php echo WEB_ROOT;?>index.php/terms" target="_blank">I agree to the Terms and Conditions</a>
                        </label>
                      </div>
                      <button class="tg-btn tg-btn-lg  do-register-button" type="button" id="continue-join-patient">Continue</button>
                    </fieldset>
                  </form>
                </div>
                <!-- register form -->

              </div>
            </div>
            <!--nurse image-->


            <!-- appointment book -->
            <div class="col-md-12 apnt_book">
             <div class="patient weight out">
               <h3 style="text-align:center;">Appointment details</h3>
               <input type="hidden" class="doc_name" value="<?php echo $result['firstname']." ".$result['lastname'];?>">
               <p>Dr.<?php echo $result['firstname']." ".$result['lastname'];?> accepts patient check-in forms online.No more papers to fill out!
               </p>
               <br>
             </div>
             <table class="table table-bordered">
              <tbody>
                <tr>
                  <td style="color:#ca1f53;" width="50%">
                   <div class="pa_name">Patient Name</div>
                 </td>
                 <td>
                   <div class="patientname"></div>
                 </td>
               </tr>
               <tr>
                <td style="color:#ca1f53;">
                 <div class="pa_name">Insurance</div>
               </td>

               <td>
                 <div class="insurences"></div>
               </td>
             </tr>
             <tr>
              <td style="color:#ca1f53;">
               <div class="pa_name">Reason for Visit</div>
             </td>
             <td>
               <div class="reason"></div>
             </td>
           </tr>
           <tr>
            <td style="color:#ca1f53;">
             <div class="pa_name">Appointment Time</div>
           </td>
           <td>
             <div class="apnttime"></div>
           </td>
         </tr>
       </tbody>
     </table>
     <div class="col-md-4"></div>
     <div class="col-md-4"><input type="button" class="tg-btn tg-btn-lg" id="Approved" name="Confirm" value="Confirm" style="margin-top: 20px;"></div>
     <div class="col-md-4"></div>
   </div>
   <!-- appointment book -->
   <input type="hidden" id="userid" value="<?php echo $_SESSION['userID']; ?>" />
   <input type="hidden" class="sess" value="<?php echo $_SESSION['userID']; ?>" />
   <input type="hidden" class="pat_name" value="<?php echo $userdetails['firstname'].$userdetails['lastname']; ?>" />
   <input type="hidden" class="email" value="<?php echo $userdetails['email']; ?>" />
   <input type="hidden" class="dob" value="<?php echo $userdetails['dob']; ?>" />
   <input type="hidden" class="gender" value="<?php echo $userdetails['gender']; ?>" />
 </div>

</div>    

</div>
</div>
<div class='between'></div>
<div class='between'></div>
<div class='between'></div>

<script type="text/javascript">
  $(document).ready(function(){
   // resonforvisitData(1);
   $(".apnt_book").hide();
   $("#newSch").click(function(){
    $("#login").hide();
    $("#register").show();
    $("#register").slideDown(1000);
    $(".apnt_fixing").removeClass("active");
    $(".apnt_fixing").addClass("done");
    $(".apnt_details").addClass("active");
    $(".apnt_fixing_label").html("&#10003;");
    $(".apnt_fixing_bar").css("background","#f8a431");
  });
   $("#patient-signin").click(function() {
    /* Act on the event */
      //alert("inside button click");
      $("#docnurseImg").hide();
      var formData = $("#patient-form").serialize();
      //alert($("#insuranceSelect option:selected").text());
      var ins_val =$( "#insuranceSelect option:selected" ).val();
      //alert(ins_val);
      var subins_val=$( "#subInsuranceSelect option:selected" ).val();
      //alert(subins_val);

      var ins=(ins_val=='') ? 'Not Specified' : $( "#insuranceSelect option:selected" ).text();
      var subins=(subins_val=='') ? 'Not Specified' : $( "#subInsuranceSelect option:selected" ).text();
      var srchins=$("#srchReason").val();
     // alert(srchins);

     var gender=$("input[name='gender']:checked").val();
     if(gender==1){
      var gen="male";
    }else{
     var gen="female";
   }

   var dob=$(".dob").val();
   var email=$(".email").val();
   var apnttime=$("#apnttime").text();
   var name=$(".pat_name").val();
   var insu=ins+"-"+subins;
   console.log(dob,email,apnttime,name,insu);
   $("#abnt-form").hide();
   $(".patientname").text(name);
   $(".insurences").text(insu);
   $(".reason").text(srchins);
   $(".dat-o-b").text(dob);
   $(".sex").text(gen);
   $(".apnttime").text(apnttime);
   $(".apnt_book").show();
 });
   $("#nextSh").click(function(){
    $("#register").hide();  
    var ses=$(".sess").val();
    if(ses==''){
      $("#login").show();
    }
    else{
     $("#docnurseImg").hide();
     var formData = $("#patient-form").serialize();
     var ins_val =$( "#insuranceSelect option:selected" ).val();
     var subins_val=$( "#subInsuranceSelect option:selected" ).val();

     var ins=(ins_val=='') ? 'Not Specified' : $( "#insuranceSelect option:selected" ).text();
     var subins=(subins_val=='') ? 'Not Specified' : $( "#subInsuranceSelect option:selected" ).text();
     var srchins=$("#srchReason").val();

     var gender=$("input[name='gender']:checked").val();
     if(gender==1){
      var gen="male";
    }else{
     var gen="female";
   }

   var dob=$(".dob").val();
   var email=$(".email").val();
   var apnttime=$("#apnttime").text();
   var name=$(".pat_name").val();
   var insu=ins+"-"+subins;
   console.log(dob,email,apnttime,name,insu);
   $("#abnt-form").hide();
   $(".patientname").text(name);
   $(".insurences").text(insu);
   $(".reason").text(srchins);
   $(".dat-o-b").text(dob);
   $(".sex").text(gen);
   $(".apnttime").text(apnttime);
   $(".apnt_book").show();
 }

 $(".apnt_fixing").removeClass("active");
 $(".apnt_fixing").addClass("done");
 $(".apnt_details").addClass("active");
 $(".apnt_fixing_label").html("&#10003;");
 $(".apnt_fixing_bar").css("background","#f8a431");
});

   $("#continue-join-patient").click(function() {
    var htmlData = '';
    $('#patient-form').parsley('validate');
    var validation = $('#patient-form').parsley('isValid');
    if (validation == true) {
      document.getElementById('continue-join-patient').style.pointerEvents = 'none';
      $("#continue-join-patient").text('Processing...');
      var formData = $("#patient-form").serialize();
      var ins_val =$( "#insuranceSelect option:selected" ).val();
      var subins_val=$( "#subInsuranceSelect option:selected" ).val();

      var ins=(ins_val=='') ? 'Not Specified' : $( "#insuranceSelect option:selected" ).text();
      var subins=(subins_val=='') ? 'Not Specified' : $( "#subInsuranceSelect option:selected" ).text();
      var srchins=$("#srchReason").val();

      //var gender=$("input[name='gender']:checked").val();
      var gender=$("gender").val();
      if(gender==1){
        var gen="male";
      }else{
       var gen="female";
     }
     var firstname=$("#firstname-reg").val();
     var lastname=$("#lastname-reg").val();
     var dob=$("#dob").val();
     var email=$("#email").val();
     $(".email").val(email);
     var apnttime=$("#apnttime").text();
     var name=firstname+" "+lastname;
     var insu=ins+"-"+subins;
     $.ajax({
      type: 'POST',
      dataType: 'json',
      url: SITEURL + 'act-signin-book-doctor',
      data: formData,
      success: function(res) {
       console.log(res);
       if (res === 0) {
        $("#error").fadeIn(1000);
        document.getElementById('continue-join-patient').style.pointerEvents = 'auto';
        $("#continue-join-patient").text('Continue');
      } else {
        $("#error").hide();
        $("#docnurseImg").hide();
        $("#abnt-form").fadeOut();
        $("#patient-form").fadeOut();
        $(".patientname").text(name);
        $(".insurences").text(insu);
        $(".reason").text(srchins);
        $(".dat-o-b").text(dob);
        $(".sex").text(gen);
        $(".apnttime").text(apnttime);
        $(".apnt_book").show();

      }
    }
  });
   }
 });
   $("#continue-patient-signin").click(function() {
    var htmlData = '';
    $('#patient-signin-form').parsley('validate');
    var validation = $('#patient-signin-form').parsley('isValid');
    if (validation == true) {
      document.getElementById('continue-patient-signin').style.pointerEvents = 'none';
      $("#continue-patient-signin").text('Processing...');
      var formData = $("#patient-signin-form").serialize();
      var ins_val =$( "#insuranceSelect option:selected" ).val();
      var subins_val=$( "#subInsuranceSelect option:selected" ).val();

      var ins=(ins_val=='') ? 'Not Specified' : $( "#insuranceSelect option:selected" ).text();
      var subins=(subins_val=='') ? 'Not Specified' : $( "#subInsuranceSelect option:selected" ).text();
      var srchins=$("#srchReason").val();

      var gender=$("input[name='gender']:checked").val();
      var email=$("#email-login").val();
      var apnttime=$("#apnttime").text();
      var insu=ins+"-"+subins;
      $.ajax({
        type: 'POST',
        url: SITEURL + 'act-signin',
        data: formData,
        success: function(res) {
         console.log(res);
         if (res == 0) {
          $("#errorlogin").fadeIn(1000);
          document.getElementById('continue-patient-signin').style.pointerEvents = 'auto';
          $("#continue-patient-signin").text('Countinue');
          $("#email-login").removeClass("parsley-success");
          $("#email-login").addClass("parsley-error");
          $("#password-LOGIN").removeClass("parsley-success");
          $("#password-LOGIN").addClass("parsley-error");
        }
        else if(res==3){
          $("#emaillogin").fadeIn(500);
          document.getElementById('continue-patient-signin').style.pointerEvents = 'auto';
          $("#continue-patient-signin").text('Countinue');
          $("#email-login").removeClass("parsley-success");
          $("#email-login").addClass("parsley-error");
          $("#emaillogin").delay(1000).fadeOut(1500);
        } 
        else {
          var respon=res.split(",");
          if(respon[1]==0){
            var sex="--";
          }
          else if(respon[1]==1){
            var sex="male";
          }
          else{
           var sex="female";
         }
         $("#abnt-form").fadeOut(500);
         $(".patientname").text(email);
         $(".insurences").text(insu);
         $(".reason").text(srchins);
         $(".dat-o-b").text(respon[0]);
         $(".sex").text(sex);
         $("#userid").val(respon[2]);
         $(".apnttime").text(apnttime);
         $('#patient-signin-form').hide();
         $(".apnt_book").show(1000);
         $("#docnurseImg").hide();
           //alert("before nav refresh");
           $.ajax({
            url: SITEURL + 'sub-header',
            type: 'GET',
          })
           .done(function(res) {
             console.log("success");
             $('#tg-navigation').html(res);
           });
         }
       }
     });
    }
  });
      //approve function
      $("#Approved").click(function() {
        document.getElementById('Approved').style.pointerEvents = 'none';
        $("#Approved").text('Processing...');
        var doctor_id = <?php echo $doctorID;?>;
        var apnttime = $("#time_val").val();  
        var patiendid = $("#userid").val();
        var apnt_note = $(".reason").text();
        var email=$(".email").val();  
        var name=$(".patientname").text();  
        var docname=$(".doc_name").val();       
        $.ajax({
          type: 'POST',
          url: SITEURL + 'act-confirm-apnt',
          data: {"doctor_id":doctor_id,"apnttime":apnttime,"patiendid":patiendid,"apnt_note":apnt_note,"email":email,"name":name,"docname":docname,},
          success: function(res) {
            if (res === 0) {
              $("#error").show();
            } else {
              document.getElementById('Approved').style.pointerEvents = 'auto';
              $("#Approved").text('Confirm');
              $(".apnt_book").slideUp(500);
              $("#apnt-success").fadeIn(1500);
              $(".apnt_details").removeClass("active");
              $(".apnt_details").addClass("done");
              $(".apnt_fixing_bar").css("background","#ca1f53");
              $(".check_in_details").addClass("active");
              $(".apnt_details_label").html("&#10003;");
              $(".apnt_details_bar").css("background","#f8a431");
            }
          }
        });
      });
      
      $(".lg_btn.disabled").click(function(){
        $("#apnt-success").hide();
        $("#apnt-confirm-success").show();
        $(".check_in_details").removeClass("active");
        $(".check_in_details").addClass("done");
        $(".apnt_details_bar").css("background","#ca1f53");
        $(".finish_step").addClass("active");
        $(".check_in_details_label").html("&#10003;");
        $(".check_in_details_bar").css("background","#f8a431");
      });
    }); 
  </script>

</main>
<?php include("service/ui/common/footer.php"); ?>