<?php 
include("service/ui/common/header_pat_home.php"); 
?>
<link rel="stylesheet" href="<?php echo WEB_ROOT?>service/public/css/setting_pg.css">
<script type="application/javascript" src="<?php echo WEB_ROOT?>service/public/js/search.js"></script>
<script type='text/javascript' src='<?php echo WEB_ROOT?>service/public/js/doctor-profile-settings.js'></script>
<script type="text/javascript" src="<?php echo WEB_ROOT?>service/public/js/light/html5lightbox.js"></script>
<script type="text/javascript" src="<?php echo WEB_ROOT?>service/public/js/jquery.base64.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo WEB_ROOT?>service/public/css/light/thumbelina.css" />
<script type="text/javascript" src="<?php echo WEB_ROOT?>service/public/js/light/thumbelina.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<!--<script src="https://code.jquery.com/jquery-1.12.4.js"></script>-->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript" src="http://code.jquery.com/qunit/qunit-1.11.0.js"></script>
<script type="text/javascript" src="<?php echo WEB_ROOT?>service/public/js/mask/sinon-1.10.3.js"></script>
<script type="text/javascript" src="<?php echo WEB_ROOT?>service/public/js/mask/sinon-qunit-1.0.0.js"></script>
<script src="<?php echo WEB_ROOT?>service/public/js/mask/jquery.mask.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
	$(document).ready(function(){
			$("#contactNum").mask("999-999-9999");
			$("#alternatePhone").mask("999-999-9999");
			$("#patientEmployer").mask("999-999-9999");
			$("#soc_sec_no").mask("999-999-9999");
			$("#rel_phn").mask("999-999-9999");
			$("#emg_no").mask("999-999-9999");
			$("#sec_no").mask("999-999-9999");
			$("#dob").mask("99/99/9999");
			$("#rel_dob").mask("99/99/9999");
  	
		});
</script>
<script type="text/javascript">
	$(document).ready(function(){
  
			myDatePicker.on("select", function (data) {
		       
		       var dob = new Date(data.string);
						var today = new Date();
						var age = parseInt(today.getFullYear()) - parseInt(dob.getFullYear());
						//console.log(dob.getFullYear(),today.getFullYear(),age);
						$('#age').val(age);
		    });
				
			$(document).on('click', '#Submit_checkin', function(e) {
					var name = $('#textinput').val();
					var contactNum = $('#contactNum').val();
					var alternatePhone = $('#alternatePhone').val();
					var email = $('#email').val();
					var address = $('#address').val();
					var apt = $('#apt').val();
					var zip = $('#zip').val();
					var city = $('#city').val();
					var state = $('#state').val();
					var dob = $('#dob').val();
					var age = $('#age').val();
					var sec_no = $('#sec_no').val();
					var patientEmployer = $('#patientEmployer').val();
					var emg_cnct = $('#emg_cnct').val();
					var rel_cnct = $('#rel_cnct').val();
					var emg_add = $('#emg_add').val();
					var emg_no = $('#emg_no').val();
					var primary_ins = $('#primary_ins').val();
					var seconary_ins = $('#seconary_ins').val();
					var policy_hold = $('#policy_hold').val();
					var rel_hold = $('#rel_hold').val();
					var rel_address = $('#rel_address').val();
					var soc_sec_no = $('#soc_sec_no').val();
					var rel_dob = $('#rel_dob').val();
					var rel_empl = $('#rel_empl').val();
					var rel_phn = $('#rel_phn').val();
					var release_name = $('#release_name').val();
					var release_pat = $('#release_pat').val();
					
					var sex = $('input[name=sex]:checked').val();
					var emp_status = $('input[name=emp_status]:checked').val();
					var marital = $('input[name=marital]:checked').val();
					var primary_holder = $('input[name=primary_holder]:checked').val();
					var secondary_holder = $('input[name=secondary_holder]:checked').val();
  		
					var error = false;
					if(name == ''){
						$('#name_err').html("<p>The field must be filled in.</p>");
						error = true;
					}if(contactNum == ''){
						$('#contactNum_err').html("<p>The field must be filled in.</p>");
						error = true;
					}if(alternatePhone == ''){
						$('#alternatePhone_err').html("<p>The field must be filled in.</p>");
						error = true;
					}if(email == ''){
						$('#email_err').html("<p>The field must be filled in.</p>");
						error = true;
					}if(address == ''){
						$('#address_err').html("<p>The field must be filled in.</p>");
						error = true;
					}if(zip == ''){
						$('#zip_err').html("<p>The field must be filled in.</p>");
						error = true;
					}if(city == ''){
						$('#city_err').html("<p>The field must be filled in.</p>");
						error = true;
					}if(state == ''){
						$('#state_err').html("<p>The field must be filled in.</p>");
						error = true;
					}if(dob == ''){
						$('#dob_err').html("<p>The field must be filled in.</p>");
						error = true;
					}if(age == ''){
						$('#age_err').html("<p>The field must be filled in.</p>");
						error = true;
					}if(sec_no == ''){
						$('#sec_no_err').html("<p>The field must be filled in.</p>");
						error = true;
					}if(patientEmployer == ''){
						$('#patientEmployer_err').html("<p>The field must be filled in.</p>");
						error = true;
					}if(emg_cnct == ''){
						$('#emg_cnct_err').html("<p>The field must be filled in.</p>");
						error = true;
					}if(rel_cnct == ''){
						$('#rel_cnct_err').html("<p>The field must be filled in.</p>");
						error = true;
					}if(emg_add == ''){
						$('#emg_add_err').html("<p>The field must be filled in.</p>");
						error = true;
					}if(emg_no == ''){
						$('#emg_no_err').html("<p>The field must be filled in.</p>");
						error = true;
					}if(primary_ins == ''){
						$('#primary_ins_err').html("<p>The field must be filled in.</p>");
						error = true;
					}if(policy_hold == ''){
						$('#policy_hold_err').html("<p>The field must be filled in.</p>");
						error = true;
					}if(rel_hold == ''){
						$('#rel_hold_err').html("<p>The field must be filled in.</p>");
						error = true;
					}if(rel_address == ''){
						$('#rel_address_err').html("<p>The field must be filled in.</p>");
						error = true;
					}if(soc_sec_no == ''){
						$('#soc_sec_no_err').html("<p>The field must be filled in.</p>");
						error = true;
					}if(rel_dob == ''){
						$('#rel_dob_err').html("<p>The field must be filled in.</p>");
						error = true;
					}if(rel_empl == ''){
						$('#rel_empl_err').html("<p>The field must be filled in.</p>");
						error = true;
					}if(rel_phn == ''){
						$('#rel_phn_err').html("<p>The field must be filled in.</p>");
						error = true;
					}if(release_name == ''){
						$('#release_name_err').html("<p>The field must be filled in.</p>");
						error = true;
					}if(release_pat == ''){
						$('#release_pat_err').html("<p>The field must be filled in.</p>");
						error = true;
					}if(sex == ''){
						$('#sex_err').html("<p>Please select one of the options</p>");
						error = true;
					}if(emp_status == ''){
						$('#emp_status_err').html("<p>Please select one of the options</p>");
						error = true;
					}if(marital == ''){
						$('#marital_err').html("<p>Please select one of the options</p>");
						error = true;
					}if(primary_holder == ''){
						$('#primary_holder_err').html("<p>Please select one of the options</p>");
						error = true;
					}
					if(error){
						return false;
					}
					$("#fax_response .apo_con").html('');
					$.ajax({
							type: "POST",
							url: SITEURL+'patient/efax',
							data: {"name" :pt_name,"dob" :pt_dob,"perent_name" :pt_prname,"phy_name" :pt_phyname,"fax_num" :phy_fax,"number1" :pt_cnct_1,"number2" :pt_cnct_2,"note" :pt_note,"office_address" :pt_office,"medReq" :pt_medReq,"dose" :pt_dose,"days" :pt_day,"refill":'1'},
							success: function(msg)
							{	
								$("#fax_response .apo_con").html(msg);$('#fax_response').modal('show');        
     			 
							}
						});
      	
				});
		});
		$( document ).ready(function() {
			$('#textinput').focusout(function() {
					if($(this).val() == ''){
						$('#name_err').html("<p>The field must be filled in.</p>");	
					}else{
						$('#name_err').html("");
					}
				});
			$('#contactNum').focusout(function() {
					if($(this).val() == ''){
						$('#contactNum_err').html("<p>The field must be filled in.</p>");		
					}else{
						$('#contactNum_err').html("");
					}
				});
			$('#alternatePhone').focusout(function() {
					if($(this).val() == ''){
						$('#alternatePhone_err').html("<p>The field must be filled in.</p>");		
					}else{
						$('#alternatePhone_err').html("");
					}
				});
			$('#email').focusout(function() {
					if($(this).val() == ''){
						$('#email_err').html("<p>The field must be filled in.</p>");		
					}else{
						$('#email_err').html("");
					}
				});
			$('#address').focusout(function() {
					if($(this).val() == ''){
						$('#address_err').html("<p>The field must be filled in.</p>");		
					}else{
						$('#address_err').html("");
					}
				});
			$('#apt').focusout(function() {
					if($(this).val() == ''){
						$('#apt_err').html("<p>The field must be filled in.</p>");		
					}else{
						$('#apt_err').html("");
					}
				});
			$('#zip').focusout(function() {
					if($(this).val() == ''){
						$('#zip_err').html("<p>The field must be filled in.</p>");		
					}else{
						$('#zip_err').html("");
					}
				});
			$('#city').focusout(function() {
					if($(this).val() == ''){
						$('#city_err').html("<p>The field must be filled in.</p>");		
					}else{
						$('#city_err').html("");
					}
				});
			$('#state').focusout(function() {
					if($(this).val() == ''){
						$('#state_err').html("<p>The field must be filled in.</p>");		
					}else{
						$('#state_err').html("");
					}
				});
			$('#dob').focusout(function() {
					if($(this).val() == ''){
						$('#dob_err').html("<p>The field must be filled in.</p>");		
					}else{
						$('#dob_err').html("");
					}
				});
			$('#age').focusout(function() {
					if($(this).val() == ''){
						$('#age_err').html("<p>The field must be filled in.</p>");		
					}else{
						$('#age_err').html("");
					}
				});
			$('#sec_no').focusout(function() {
					if($(this).val() == ''){
						$('#sec_no_err').html("<p>The field must be filled in.</p>");		
					}else{
						$('#sec_no_err').html("");
					}
				});
			$('#patientEmployer').focusout(function() {
					if($(this).val() == ''){
						$('#patientEmployer_err').html("<p>The field must be filled in.</p>");		
					}else{
						$('#patientEmployer_err').html("");
					}
				});
			$('#emg_cnct').focusout(function() {
					if($(this).val() == ''){
						$('#emg_cnct_err').html("<p>The field must be filled in.</p>");		
					}else{
						$('#emg_cnct_err').html("");
					}
				});
			$('#rel_cnct').focusout(function() {
					if($(this).val() == ''){
						$('#rel_cnct_err').html("<p>The field must be filled in.</p>");		
					}else{
						$('#rel_cnct_err').html("");
					}
				});
			$('#emg_add').focusout(function() {
					if($(this).val() == ''){
						$('#emg_add_err').html("<p>The field must be filled in.</p>");		
					}else{
						$('#emg_add_err').html("");
					}
				});
			$('#emg_no').focusout(function() {
					if($(this).val() == ''){
						$('#emg_no_err').html("<p>The field must be filled in.</p>");		
					}else{
						$('#emg_no_err').html("");
					}
				});
			$('#primary_ins').focusout(function() {
					if($(this).val() == ''){
						$('#primary_ins_err').html("<p>The field must be filled in.</p>");		
					}else{
						$('#primary_ins_err').html("");
					}
				});
			
			$('#policy_hold').focusout(function() {
					if($(this).val() == ''){
						$('#policy_hold_err').html("<p>The field must be filled in.</p>");		
					}else{
						$('#policy_hold_err').html("");
					}
				});
			$('#rel_hold').focusout(function() {
					if($(this).val() == ''){
						$('#rel_hold_err').html("<p>The field must be filled in.</p>");		
					}else{
						$('#rel_hold_err').html("");
					}
				});
			$('#rel_address').focusout(function() {
					if($(this).val() == ''){
						$('#rel_address_err').html("<p>The field must be filled in.</p>");		
					}else{
						$('#rel_address_err').html("");
					}
				});
			$('#soc_sec_no').focusout(function() {
					if($(this).val() == ''){
						$('#soc_sec_no_err').html("<p>The field must be filled in.</p>");		
					}else{
						$('#soc_sec_no_err').html("");
					}
				});
			$('#rel_dob').focusout(function() {
					if($(this).val() == ''){
						$('#rel_dob_err').html("<p>The field must be filled in.</p>");		
					}else{
						$('#rel_dob_err').html("");
					}
				});
			$('#rel_empl').focusout(function() {
					if($(this).val() == ''){
						$('#rel_empl_err').html("<p>The field must be filled in.</p>");		
					}else{
						$('#rel_empl_err').html("");
					}
				});
			$('#rel_phn').focusout(function() {
					if($(this).val() == ''){
						$('#rel_phn_err').html("<p>The field must be filled in.</p>");		
					}else{
						$('#rel_phn_err').html("");
					}
				});
			$('#release_name').focusout(function() {
					if($(this).val() == ''){
						$('#release_name_err').html("<p>The field must be filled in.</p>");		
					}else{
						$('#release_name_err').html("");
					}
				});
			$('#release_pat').focusout(function() {
					if($(this).val() == ''){
						$('#release_pat_err').html("<p>The field must be filled in.</p>");		
					}else{
						$('#release_pat_err').html("");
					}
				});
			$('#zip').blur(function(){
			  var zip = $(this).val();
			  var city = '';
			  var state = '';

			  //make a request to the google geocode api
			  $.getJSON('https://maps.googleapis.com/maps/api/geocode/json?address='+zip).success(function(response){
			    //find the city and state
			    //console.log(response);
			    var address_components = response.results[0].address_components;
			    $.each(address_components, function(index, component){
			      var types = component.types;
			      $.each(types, function(index, type){
			        if(type == 'locality') {
			          city = component.long_name;
			        }
			        if(type == 'administrative_area_level_1') {
			          state = component.long_name;
			        }
			      });
			    });

			    //pre-fill the city and state
			    $('#city').val(city);
			    $('#state').val(state);
			  });
			});
			
});
</script>
<style>
	.checkbox-inline+.checkbox-inline, .radio-inline+.radio-inline{
		margin-left: 0 !important;
	}
	.error-message p {
		color: red;
		font-size: 11px;
		padding: 0;
		margin: 0;
	}
</style>
<main id="main" class="tg-haslayout">
	<section class="tg-main-section tg-haslayout">
		<div class="container">
			<h3 align="center">New Patient Registration Form &minus; General (PCP)</h3>
			<form class="form-horizontal">
				<fieldset>
					<!-- Text input-->
					<div class="form-group">
						<label class="col-md-5 control-label" for="textinput">Patient Name (Last, First, MI)</label>  
						<div class="col-md-5">
							<input id="textinput" name="textinput" placeholder="Give Last, First, MI" class="form-control input-md" required="" type="text">
							<div class="error-message" id="name_err"></div>
						</div>
					</div>
					<!-- Text input-->
					<div class="form-group">
						<label class="col-md-5 control-label" for="contactNum">Patient Home Phone No.</label>  
						<div class="col-md-5">
							<input id="contactNum" name="contactNum" placeholder="use the format XXX-XXX-XXXX" class="form-control input-md" required="" type="text" >
							<div class="error-message" id="contactNum_err"></div>
						</div>
					</div>
					<!-- Text input-->
					<div class="form-group">
						<label class="col-md-5 control-label" for="alternatePhone">Alternate Phone No.</label>  
						<div class="col-md-5">
							<input id="alternatePhone" name="alternatePhone" placeholder="use the format XXX-XXX-XXXX" class="form-control input-md" required="" type="text">
							<div class="error-message" id="alternatePhone_err"></div>
						</div>
					</div>
					<!-- Select Basic -->
					<div class="form-group">
						<label class="col-md-5 control-label" for="physician">Email</label>
						<div class="col-md-5">
							<input type="text" name="email" placeholder="Email Address" id="email"/>
							<div class="error-message" id="email_err"></div>
						</div>
					</div>
					<!-- Select Basic -->
					<div class="form-group">
						<label class="col-md-5 control-label" for="preferredOffice">Address Line 1</label>
						<div class="col-md-5">
							<input type="text" name="address" id="address" placeholder="Address Line 1"/>
							<div class="error-message" id="address_err"></div>
						</div>
					</div>
					<!-- Text input-->
					<div class="form-group">
						<label class="col-md-5 control-label" for="contactNum">Address Line 2</label>  
						<div class="col-md-5">
							<input id="apt" name="apt" placeholder="Address Line 2" class="form-control input-md" required="" type="text" >
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-5 control-label" for="radios">Zip</label>
						<div class="col-md-5"> 
							<input type="text" id="zip" name="zip" placeholder="Zip Code"/>
							<div class="error-message" id="zip_err"></div>
						</div>
					</div>
					<!-- Search input-->
					<div class="form-group">
						<label class="col-md-5 control-label" for="city">City</label>
						<div class="col-md-5">
							<input id="city" name="city" placeholder="City" class="form-control input-md" type="search" >
							<div class="error-message" id="city_err"></div>
						</div>
					</div>
					<!-- Search input-->
					<div class="form-group">
						<label class="col-md-5 control-label" for="state">State</label>
						<div class="col-md-5">
							<input id="state" name="state" placeholder="State" class="form-control input-md" required="" type="search">
							<div class="error-message" id="state_err"></div>
						</div>
					</div>
					<!-- Multiple Radios (inline) -->
        
					<div class="form-group">
						<label class="col-md-5 control-label" for="radios">Date of Birth</label>
						<div class="col-md-5"> 
							<input class="date-field-required" type="text" data-trigger="mouseleave" data-required="true" data-beatpicker="true" name="dob" id="dob" data-beatpicker-id="myDatePicker" placeholder="MM/DD/YYYY"  data-beatpicker-format="['MM','DD','YYYY'],separator:'/'" />
							<div class="error-message" id="dob_err"></div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-5 control-label" for="radios">Age</label>
						<div class="col-md-5"> 
							<input type="text" name="age" id="age" placeholder="Age"/>
							<div class="error-message" id="age_err"></div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-5 control-label" for="radios">Sex</label>
						<div class="col-md-5"> 
							<label class="radio-inline" for="radios-0">
								<input name="sex" id="radios-0" value="male" checked="checked" type="radio" 
								style="width:auto;">
								Male
							</label> 
							<label class="radio-inline" for="radios-1">
								<input name="sex" id="radios-1" value="female" type="radio" style="width:auto;">
								Female
							</label>
							<div class="error-message" id="sex_err"></div>
						</div>
					</div>
					<!-- Textarea -->
					<div class="form-group">
						<label class="col-md-5 control-label" for="additionalNotes">Social Security Number</label>
						<div class="col-md-5">                     
							<input type="text" name="sec_no" id="sec_no" placeholder="use the format XXX-XXX-XXXX"/>
							<div class="error-message" id="sec_no_err"></div>
						</div>
					</div>
					<!-- Multiple Radios (inline) -->
					<div class="form-group">
						<label class="col-md-5 control-label" for="howto">Marital Status</label>
						<div class="col-md-5"> 
							<label class="radio-inline" for="howto-0">
								<input name="marital" id="howto-0" value="married" checked="checked" type="radio" style="width:auto;"> 
								Married
							</label> 
							<label class="radio-inline" for="howto-1">
								<input name="marital" id="howto-1" value="single" type="radio" style="width:auto;">
								Single
							</label>
							<label class="radio-inline" for="howto-1">
								<input name="marital" id="howto-1" value="divorced" type="radio" style="width:auto;">
								Divorced
							</label>
							<label class="radio-inline" for="howto-1">
								<input name="marital" id="howto-1" value="widowed" type="radio" style="width:auto;">
								Widowed
							</label>
							<div class="error-message" id="marital_err"></div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-5 control-label" for="patientEmployer">Employer Name</label>
						<div class="col-md-5">                     
							<input type="text" name="patientEmployer" id="patientEmployer" placeholder="Employer Name"/>
							<div class="error-message" id="patientEmployer_err"></div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-5 control-label" for="howto">Employment Status</label>
						<div class="col-md-5"> 
							<label class="radio-inline" for="howto-0">
								<input name="emp_status" id="howto-0" value="full-time" checked="checked" type="radio" style="width:auto;"> 
								Full Time
							</label> 
							<label class="radio-inline" for="howto-1">
								<input name="emp_status" id="howto-1" value="part-time" type="radio" style="width:auto;">
								Part Time
							</label>
							<label class="radio-inline" for="howto-1">
								<input name="emp_status" id="howto-1" value="unemployed" type="radio" style="width:auto;">
								Unemployed
							</label>
							<label class="radio-inline" for="howto-1">
								<input name="emp_status" id="howto-1" value="retired" type="radio" style="width:auto;">
								Retired
							</label>
							<label class="radio-inline" for="howto-1">
								<input name="emp_status" id="howto-1" value="student" type="radio" style="width:auto;">
								Student
							</label> 
							<label class="radio-inline" for="howto-1">
								<input name="howto" id="howto-1" value="other" type="radio" style="width:auto;">
								Other
							</label>
							<div class="error-message" id="emp_status_err"></div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-5 control-label" for="additionalNotes">Emergency Contact</label>
						<div class="col-md-5">                     
							<input type="text" name="emg_cnct" id="emg_cnct" placeholder="Full Name"/>
							<div class="error-message" id="emg_cnct_err"></div>
						</div>
					</div><div class="form-group">
						<label class="col-md-5 control-label" for="additionalNotes">Relationship to Patient</label>
						<div class="col-md-5">                     
							<input type="text" name="rel_cnct" id="rel_cnct" placeholder="Spouse, Child, Friend, Guardian, etc"/>
							<div class="error-message" id="rel_cnct_err"></div>
						</div>
					</div><div class="form-group">
						<label class="col-md-5 control-label" for="additionalNotes">Address</label>
						<div class="col-md-5">                     
							<input type="text" name="emg_add" id="emg_add" placeholder="Address"/>
							<div class="error-message" id="emg_add_err"></div>
						</div>
					</div><div class="form-group">
						<label class="col-md-5 control-label" for="additionalNotes">Phone Number</label>
						<div class="col-md-5">                     
							<input type="text" name="emg_no" id="emg_no" placeholder="use the format XXX-XXX-XXXX"/>
							<div class="error-message" id="emg_no_err"></div>
						</div>
					</div>
				</fieldset>
				<fieldset>
					<h4 align="center">INSURANCE INFORMATION</h4>
					<div class="form-group">
						<label class="col-md-5 control-label" for="additionalNotes">Primary Insurance</label>
						<div class="col-md-5">                     
							<input type="text" name="primary_ins" id="primary_ins" placeholder="Primary Insurance"/>
							<div class="error-message" id="primary_ins_err"></div>
						</div>
					</div><div class="form-group">
						<label class="col-md-5 control-label" for="additionalNotes">Patient is subscriber/Policy Holder</label>
						<div class="col-md-5">                     
							<label class="radio-inline" for="howto-1">
								<input name="primary_holder" id="howto-1" value="yes" checked="checked" type="radio" style="width:auto;">
								Yes
							</label>
							<label class="radio-inline" for="howto-1">
								<input name="primary_holder" id="howto-1" value="no" type="radio" style="width:auto;">
								No
							</label>
							<div class="error-message" id="primary_holder_err"></div> 
						</div>
					</div><div class="form-group">
						<label class="col-md-5 control-label" for="additionalNotes">Secondary Insurance</label>
						<div class="col-md-5">                     
							<input type="text" name="seconary_ins" id="seconary_ins" placeholder="Secondary Insurance"/>
						</div>
					</div><div class="form-group">
						<label class="col-md-5 control-label" for="additionalNotes">Patient is subscriber/Policy Holder</label>
						<div class="col-md-5">                     
							<label class="radio-inline" for="howto-1">
								<input name="secondary_holder" id="howto-1" value="yes" type="radio" style="width:auto;">
								Yes
							</label>
							<label class="radio-inline" for="howto-1">
								<input name="secondary_holder" id="howto-1" value="no" type="radio" style="width:auto;">
								No
							</label> 
						</div>
					</div>
				</fieldset>
				<fieldset>
					<h4 align="center">INSURANCE INFORMATION(IF OTHER THAN PATIENT)-we will request to scan your ID and insurance card</h4>
					<div class="form-group">
						<label class="col-md-5 control-label" for="additionalNotes">Subcriber/ Policy holder</label>
						<div class="col-md-5">                     
							<input type="text" name="policy_hold" id="policy_hold" placeholder="Full Name"/>
							<div class="error-message" id="policy_hold_err"></div>
						</div>
					</div><div class="form-group">
						<label class="col-md-5 control-label" for="additionalNotes">Relationship to Patient</label>
						<div class="col-md-5">                     
							<input type="text" name="rel_hold" id="rel_hold" placeholder="Spouse, Child, Friend, Guardian, etc"/>
							<div class="error-message" id="rel_hold_err"></div>
						</div>
					</div><div class="form-group">
						<label class="col-md-5 control-label" for="additionalNotes">Address</label>
						<div class="col-md-5">                     
							<input type="text" name="rel_address" id="rel_address" placeholder="Address"/>
							<div class="error-message" id="rel_address_err"></div>
						</div>
					</div><div class="form-group">
						<label class="col-md-5 control-label" for="additionalNotes">Social Security No.</label>
						<div class="col-md-5">                     
							<input type="text" name="soc_sec_no" id="soc_sec_no" placeholder="use the format XXX-XXX-XXXX"/>
							<div class="error-message" id="soc_sec_no_err"></div>
						</div>
					</div><div class="form-group">
						<label class="col-md-5 control-label" for="additionalNotes">Date of Birth</label>
						<div class="col-md-5">                     
							
							<input class="date-field-required" type="text" data-trigger="mouseleave" data-required="true" data-beatpicker="true" name="rel_dob" id="rel_dob" placeholder="MM/DD/YYYY"  data-beatpicker-format="['MM','DD','YYYY'],separator:'/'" />
							<div class="error-message" id="rel_dob_err"></div>
						</div>
					</div><div class="form-group">
						<label class="col-md-5 control-label" for="additionalNotes">His or Her Employer</label>
						<div class="col-md-5">                     
							<input type="text" name="rel_empl" id="rel_empl" placeholder="Employer Name"/>
							<div class="error-message" id="rel_empl_err"></div>
						</div>
					</div><div class="form-group">
						<label class="col-md-5 control-label" for="additionalNotes">Work Phone No.</label>
						<div class="col-md-5">                     
							<input type="text" name="rel_phn" id="rel_phn" placeholder="use the format XXX-XXX-XXXX"/>
							<div class="error-message" id="rel_phn_err"></div>
						</div>
					</div>
				</fieldset>
				<fieldset>
					<h4 align="center">RELEASE INFORMATION</h4>
					<p align="center">I hereby give permission to the person(s) listed below to recieve information about the care of the above ptient name.</p>
					<div class="form-group">
						<label class="col-md-5 control-label" for="additionalNotes">Name(s)</label>
						<div class="col-md-5">                     
							<input type="text" name="release_name" id="release_name" placeholder="Full Name"/>
							<div class="error-message" id="release_name_err"></div>
						</div>
					</div><div class="form-group">
						<label class="col-md-5 control-label" for="additionalNotes">Relationship to Patient</label>
						<div class="col-md-5">                     
							<input type="text" name="release_pat" id="release_pat" placeholder="Spouse, Child, Friend, Guardian, etc"/>
							<div class="error-message" id="release_pat_err"></div>
						</div>
					</div>
				</fieldset>
      
				<div class="form-group">
					<label class="col-md-5 control-label" for="Submit"></label>
					<div class="col-md-5">
						<input style="border:none" type="button" value="submit" class="btn btn-primary" id="Submit_checkin">
					</div>
				</div>
			</form>
		</div>
		<div class="modal fade" tabindex="-1" role="dialog" id="fax_response">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-body">
							<div class="ball" data-dismiss="modal" aria-label="Close">
								<a href="javascript:void(0);"> <img src="<?php echo WEB_ROOT;?>service/public/images/images/ballinto.png"></a>
							</div>
							<div class="appoinment_pop_main" style="background-color:#FFF; border-radius:6px;">
								<div class="popup_load apo" style="display:none;z-index:999;"></div>
								<div class="apo_con"></div>
							</div>
						</div>
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div>
	</section>
</main>

<?php include("service/ui/common/footer.php"); ?>