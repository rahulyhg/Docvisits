<?php 
include("service/ui/common/header_pat_home.php"); 
$result = $scad->getUserDetails($_SESSION['userID']); 
$resu = $scad->getDetails($_SESSION['userID']);
//echo "<pre>";print_r($result);exit;
foreach($resu as $key => $value){
	$ids[]=$value['doctor_id'];
	$res[]= $scad->getDocDetails($value['doctor_id']);
}    
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
<script src="https://rawgit.com/jackmoore/autosize/master/dist/autosize.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
			$("#contactNum_req").mask("999-999-9999");
			$("#alternatePhone_req").mask("999-999-9999");
			$("#contactNum_riff").mask("999-999-9999");
			$("#alternatePhone_riff").mask("999-999-9999");
			$("#physicianfaxnumber").mask("999-999-9999");
			$("#faxnumber").mask("999-999-9999");
			$("#pharmacyphon").mask("999-999-9999");
			$("#physicianfaxnumber1").mask("999-999-9999");
			$("#DateOfBirth_req").mask("99/99/9999");
			$("#DateOfBirth_riff").mask("99/99/9999");
   
			$( "a:contains('Services')" ).css( "color", "#02B8BF" );
			
		});
</script>
<style>
.dr_viw_clm2_rew .paginatin {
    height: 25px;
    margin-bottom: 40px;
}
	.error-message p {
		color: red;
		font-size: 11px;
		padding: 0;
		margin: 0;
	}
	.input-block {
		box-sizing: border-box;
		display: block;
		min-height: 40px;
		width: 100%;
	}
	.detail_box{
		float: left;
		width: 80%;
	}
	.action_box{
		float: right;
		width: 20%;
		margin-top: 5%;
	}
	.dc_spec p {
		margin: 0;
		padding: 0;
	}
	.modal-dialog {
		width: 80% !important;
	}
</style>
<style type="text/css">
	/* Some styles for the containers */
	#slider1 {
		position: relative;  /* Containers need relative or absolute position. */
		margin-left: 10px;
		width: 160px;
		height: 56px;
		/*border-top:1px solid #aaa;
		border-bottom:1px solid #aaa;*/
	}
	#html5-watermark {
		visibility: hidden;
	}
	.dr_viw_clm2_rew .paginatin ul li.inactiv,
	.dr_viw_clm2_rew .paginatin ul li.inactiv:hover{
		background-color: #ededed;
		color: #bababa;
		border: 1px solid #bababa;
		cursor: default;
	}
	.dr_viw_clm2_rewclm {
		border-bottom: none;
		padding: 0;
	}
	.comment p {
	    color: rgb(25, 144, 206);
	    padding: 7px;
	}
	.over{
		background: #fff !important;
		 padding: 15px;
    /* border: none !important; */
    	margin-top: -15px;
    	margin-bottom: 25px;
	}
	.dr_viw_clm2_rew .data ul li{
		list-style: none;
		font-family: Raleway;
		margin: 5px 0 5px 0;
		color: #000;
		font-size: 13px;
	}
	.dr_viw_clm2_rew .paginatin{
		height: 25px;
	}
	.dr_viw_clm2_rew .paginatin ul li{
		list-style: none;
		float: left;
		border: 1px solid #0099cc;
		padding: 2px 6px 2px 6px;
		margin: 0 3px 0 3px;
		font-family: Raleway;
		font-size: 14px;
		color: #006699;
		font-weight: bold;
		background-color: #f2f2f2;
	}
	.dr_viw_clm2_rew .paginatin ul li:hover{
		color: #fff;
		background-color: #006699;
		cursor: pointer;
	}
	.go_button
	{
		background-color: #f2f2f2;
		border: 1px solid #006699;
		color: #cc0000;
		padding: 2px 6px 2px 6px;
		cursor: pointer;
		position: absolute;
		margin-top: -1px;
	}
	.total
	{
		float: right;
		font-family: Raleway;
		color: #999;
	}
	.rating {
    unicode-bidi: bidi-override;
    direction: rtl;
    width: 8em;
}

.rating input {
    position: absolute;
    left: -999999px;
}

.rating label {
    display: inline-block;
    font-size: 0;
}

.rating > label:before {
    position: relative;
    font: 24px/1 FontAwesome;
    display: block;
    content: "\f005";
    color: #ccc;
    background: -webkit-linear-gradient(-45deg, #d9d9d9 0%, #b3b3b3 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.rating > label:hover:before,
.rating > label:hover ~ label:before,
.rating > label.selected:before,
.rating > label.selected ~ label:before {
    color: #f0ad4e;
    background: -webkit-linear-gradient(-45deg, #fcb551 0%, #d69a45 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

@media only screen and (min-width: 1500px) {
div#rateModl {
    top: 8%;
}
}
</style>
<!-- Past visited doctors script -->
<style>
</style>
<script>
	$( document ).ready(function() {
			$( function() {
					$('.datepicker').datepicker({changeMonth: true,changeYear: true});
				} );
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
     
				$(".submit").click(function(){ 
						//alert ("okkk");
						//var n=$("#userIdf").val();
						var i = $(this).parent().find("#userIdf").val();
						//alert(i); 
						var ovrall=$("input[name='rating']:checked").val();
						// alert(ovrall);
						var condition=$("input[name='rating2']:checked").val();
						var ansque=$("input[name='rating4']:checked").val();
						var spend=$("input[name='rating5']:checked").val();
						var office=$("input[name='rating6']:checked").val();
						var staff=$("input[name='rating7']:checked").val();
						// alert(bsidemnr);
						var waiting=$("input[name='rating3']:checked").val();
						// alert(waiting);
						var update = $("#update").val();
						var msg =$("#message").val();
						var userget=$("#userid").val();
						//alert(userget);
						var docId=$("#dctid").val(); 
						//alert(docId);
						$.ajax({
								type: 'POST', 
								url: SITEURL+'patient/profile/ratingaction',
								data: {"ovrall":ovrall , "condition":condition , "waiting":waiting , "msg":msg , "userget":userget , "docId":docId, "ansque":ansque,"spend":spend,"office":office,"staff":staff,"update":update  },
								success: function(res)
								{
									loadreview(docId);
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
					 //alert (sum);
  
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
								loadData(1,sum);
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
			$(".num_appo").click(function(e){

					//e.preventDefault();
					var x=$(this).position();
					e.preventDefault();
					var sum= $(this).attr("target");
					//alert("Top position: " + x.top + " Left position: " + x.left);
					$(".apo_con").html('');
					$(".popup_load.apo").show();
      
					$.ajax({
							type: 'POST',
							url: SITEURL+'patient/profile/appoinmentpopup',
							data: {"sum":sum},
						}).done(function(res) {
							$(".apo_con").html(res);
						});
					$(".popup_load.apo").hide();
					$("#appoinment_pop").modal("show");
					// $("#apntPop").show();
				});
		});
	function loading_show(){
		$('#loading').html("<img src='images/loading.gif'/>").fadeIn('fast');
	}
	function loading_hide(){
		$('#loading').fadeOut('fast');
	}
	function loadreview(doctid){
                        
		$.ajax
		({
				type: "POST",
				url: SITEURL+'doctorAverageReview',
				data: {"id" :doctid},
				success: function(msg)
				{
					//console.log(msg);
                            
					$("#review_"+doctid).html('');
					$("#review_"+doctid).html(msg);
				}
			});
	}function loadData(page,doct){
		loading_show();                    
		$.ajax
		({
				type: "POST",
				url: SITEURL+'rating_pagination',
				data: {"page":page,"id" :doct},
				success: function(msg)
				{
					//console.log(msg);
					loading_hide();
					$(".dr_viw_clm2_rew").html(msg);
				}
			});
	}
	// For first time page load default results
	$(document).on('click', '.dr_viw_clm2_rew .paginatin li.activ', function(e) {
			var doc = $("#dctid").val();
			var page = $(this).attr('p');
			loadData(page,doc);
		});
	$(document).on('click', '#go_btn', function(e) {
			var doc = $("#dctid").val();
			var page = parseInt($('.goto').val());
			var no_of_pages = parseInt($('.total').attr('a'));
			if(page != 0 && page <= no_of_pages){
				loadData(page,doc);
			}else{
				alert('Enter a PAGE between 1 and '+no_of_pages);
				$('.goto').val("").focus();
				return false;
			}
		});
	$(document).on('change', '#physician', function(e) {
			var doc = $('#physician :selected').val();
			if(doc == "other" && doc != ""){
				$('#physicianName').val("");
				$('#physicianfaxnumber').val("");
				$('#physicianName').get(0).type = 'text';
				$('#preferredOffice_req').val('');
				$("#preferredOffice_req").removeAttr("disabled", "disabled"); 
				$("#physicianfaxnumber").removeAttr("disabled", "disabled"); 
			}else{
				$.ajax({
						type: "POST",
						url: SITEURL+'get_doc_details',
						data: {"id" :doc},
						success: function(msg)
						{	
							obj = jQuery.parseJSON(msg);
							console.log(obj);
							//loading_hide();
							 $('#preferredOffice_req').val(obj.address);
							$('#physicianfaxnumber').val(obj.efax);
							$("#physicianfaxnumber").attr("disabled", "disabled"); 
							$("#preferredOffice_req").attr("disabled", "disabled"); 
						}
					});
				$('#physicianName').get(0).type = 'hidden';
				$('#physicianName').val(doc);
			}
		});
	$(document).on('change', '#physician1', function(e) {
			var doc = $('#physician1 :selected').val();
			if(doc == "other" && doc != ""){
				$('#physicianName1').val("");
				$('#physicianfaxnumber1').val("");
				$('#physicianName1').get(0).type = 'text';
				$('#preferredOffice_riff').val(obj.address);
				$("#preferredOffice_riff").removeAttr("disabled", "disabled"); 
				$("#physicianfaxnumber1").removeAttr("disabled", "disabled"); 
			}else{
				$.ajax({
						type: "POST",
						url: SITEURL+'get_doc_details',
						data: {"id" :doc},
						success: function(msg)
						{	
							obj = jQuery.parseJSON(msg);
							console.log(obj.address);
							//loading_hide();
							$('#preferredOffice_riff').val(obj.address);
							$("#preferredOffice_riff").attr("disabled", "disabled"); 
							$("#physicianfaxnumber1").attr("disabled", "disabled"); 
							$('#physicianfaxnumber1').val(obj.efax);
						}
					});
				$('#physicianName1').get(0).type = 'hidden';
				$('#physicianName1').val(doc);
			}
		});
	$(document).on('click', '#Submit_req', function(e) {
			var pt_name = $('#patient_name_req').val();
			var pt_dob = $('#DateOfBirth_req').val();
			var pt_prname = $('#parentName_req').val();
			var pt_phyname = $('#physicianName').val();
			var phy_fax = $('#physicianfaxnumber').val();
			var pt_cnct_1 = $('#contactNum_req').val();
			var pt_cnct_2 = $('#alternatePhone_req').val();
			var pt_note = $('#additionalNotes_req').val();
			var pt_office = $('#preferredOffice_req').val();
			var isChecked = $("input[name=howto_req]:checked").val();
			var faxnumber = $("#faxnumber").val();
			var error = false;
			if(isChecked == '1'){
				if(faxnumber == ''){
					$('#faxnumber_err').html("<p>Insert Fax Number</p>");
					error = true;
				}
			}if(isChecked == '2'){
				if(pt_office == ''){
					$('#preferredOffice_req_err').html("<p>Select office</p>");
					error = true;
				}
			}if(pt_name == ''){
				$('#patient_name_req_err').html("<p>Insert Patient Name</p>");
				error = true;
			}if(pt_dob == ''){
				$('#DateOfBirth_req_err').html("<p>Insert Date of Birth</p>");
				error = true;
			}if(pt_prname == ''){
				$('#parentName_req_err').html("<p>Insert Parrent Name</p>");
				error = true;
			}if(pt_phyname == ''){
				$('#physician_err').html("<p>Select Physician</p>");
				error = true;
			}if(phy_fax == ''){
				$('#physicianfaxnumber_err').html("<p>Insert Physician Fax No.</p>");
				error = true;
			}if(pt_cnct_1 == ''){
				$('#contactNum_req_err').html("<p>Insert Primary Phone</p>");
				error = true;
			}if(pt_cnct_2 == ''){
				$('#alternatePhone_req_err').html("<p>Insert Alternate Phone</p>");
				error = true;
			}if(pt_note == ''){
				$('#additionalNotes_req_err').html("<p>Insert Note</p>");
				error = true;
			}/*if(pt_office == ''){
			$('#preferredOffice_req_err').html("<p>Select Office</p>");
			error = true;
			}*/
			if(error){
				return false;
			}if(!error){
				$('.error-message').html('');
				
			}
			$("#fax_response .apo_con").html('');
			$.ajax({
					type: "POST",
					url: SITEURL+'patient/efax',
					data: {"name" :pt_name,"dob" :pt_dob,"perent_name" :pt_prname,"phy_name" :pt_phyname,"fax_num" :phy_fax,"number1" :pt_cnct_1,"number2" :pt_cnct_2,"note" :pt_note,"office_address" :pt_office,"req":'1'},
					success: function(msg)
					{	
						$("#fax_response .apo_con").html(msg);$('#fax_response').modal('show');        
					}
				});
      	
		});
	$( document ).ready(function() {
			$('#patient_name_req').focusout(function() {
					if($(this).val() == ''){
						$('#patient_name_req_err').html("<p>Insert Patient Name</p>");		
					}else{
						$('#patient_name_req_err').html("");
					}
				});
			/*$('#DateOfBirth_req').focusout(function() {
					if($(this).val() == ''){
						$('#DateOfBirth_req_err').html("<p>Insert Date of Birth</p>");	
					}else{
						$('#DateOfBirth_req_err').html("");
					}
				});*/
			$('#parentName_req').focusout(function() {
					if($(this).val() == ''){
						$('#parentName_req_err').html("<p>Insert Parrent Name</p>");		
					}else{
						$('#parentName_req_err').html("");
					}
				});
			$('#physician').change(function() {
					if($(this).val() == ''){
						$('#physician_err').html("<p>Select Physician</p>");		
					}else{
						$('#physician_err').html("");
					}
				});
			$('#preferredOffice_req').change(function() {
					if($(this).val() == ''){
						$('#preferredOffice_req_err').html("<p>Select Office</p>");		
					}else{
						$('#preferredOffice_req_err').html("");
					}
				});
			$('#physicianfaxnumber').focusout(function() {
					if($(this).val() == ''){
						$('#physicianfaxnumber_err').html("<p>Insert Physician Fax No.</p>");		
					}else{
						$('#physicianfaxnumber_err').html("");
					}
				});
			$('#faxnumber').focusout(function() {
					if($(this).val() == ''){
						$('#faxnumber_err').html("<p>Insert Fax Number</p>");		
					}else{
						$('#faxnumber_err').html("");
					}
				});
			$('#contactNum_req').focusout(function() {
					if($(this).val() == ''){
						$('#contactNum_req_err').html("<p>Insert Primary Phone</p>");		
					}else{
						$('#contactNum_req_err').html("");
					}
				});
			$('#alternatePhone_req').focusout(function() {
					if($(this).val() == ''){
						$('#alternatePhone_req_err').html("<p>Insert Alternate Phone</p>");		
					}else{
						$('#alternatePhone_req_err').html("");
					}
				});
			$('#additionalNotes_req').focusout(function() {
					if($(this).val() == ''){
						$('#additionalNotes_req_err').html("<p>Insert Note</p>");		
					}else{
						$('#additionalNotes_req_err').html("");
					}
				});

			/**
			* refill form validation
			*/
			$('#name_riff').focusout(function() {
					if($(this).val() == ''){
						$('#name_riff_err').html("<p>Insert Patient Name</p>");	
					}else{
						$('#name_riff_err').html("");
					}
				});
			$('ul.tabs li a').click(function() {
					DateOfBirth_riffDatePicker.hide();
					DateOfBirth_reqDatePicker.hide();
				});
			$('#parentName_riff').focusout(function() {
					if($(this).val() == ''){
						$('#parentName_riff_err').html("<p>Insert Parrent Name</p>");
					}else{
						$('#parentName_riff_err').html("");
					}
				});
			$('#physician1').change(function() {
					if($(this).val() == ''){
						$('#physicianName1_err').html("<p>Select Physician</p>");
					}else{
						$('#physicianName1_err').html("");
					}
				});
			$('#physicianfaxnumber').focusout(function() {
					if($(this).val() == ''){
						$('#physicianfaxnumber1_err').html("<p>Insert Physician Fax No.</p>");	
					}else{
						$('#physicianfaxnumber1_err').html("");
					}
				});
			$('#contactNum_riff').focusout(function() {
					if($(this).val() == ''){
						$('#contactNum_riff_err').html("<p>Insert Primary Phone</p>");
					}else{
						$('#contactNum_riff_err').html("");
					}
				});
			$('#alternatePhone_riff').focusout(function() {
					if($(this).val() == ''){
						$('#alternatePhone_riff_err').html("<p>Insert Alternate Phone</p>");
					}else{
						$('#alternatePhone_riff_err').html("");
					}
				});$('#additionalNotes').focusout(function() {
					if($(this).val() == ''){
						$('#additionalNotes_err').html("<p>Insert Note</p>");
					}else{
						$('#additionalNotes_err').html("");
					}
				});$('#medReq').focusout(function() {
					if($(this).val() == ''){
						$('#medReq_err').html("<p>Insert Medication Requested</p>");
					}else{
						$('#medReq_err').html("");
					}
				});$('#dose_riff').focusout(function() {
					if($(this).val() == ''){
						$('#dose_riff_err').html("<p>Insert Dose</p>");	
					}else{
						$('#dose_riff_err').html("");
					}
				});$('#days_riff').focusout(function() {
					if($(this).val() == ''){
						$('#days_riff_err').html("<p>Insert Days of supply</p>");
					}else{
						$('#days_riff_err').html("");
					}
				});$('#pharmacyname').focusout(function() {
					if($(this).val() == ''){
						$('#pharmacyname_err').html("<p>Insert Pharmacy Name</p>");		
					}else{
						$('#pharmacyname_err').html("");
					}
				});$('#pharmacyphon').focusout(function() {
					if($(this).val() == ''){
						$('#pharmacyphon_err').html("<p>Insert Pharmacy Phone Number</p>");	
					}else{
						$('#pharmacyphon_err').html("");
					}
				});
		});
	$(document).on('click', '#fax_response .ball', function(e) {
			location.reload();
		});	
	$(document).on('click', '.popup-rating input[type="radio"]', function(e) {
		
			var two =  $(".popup-rating.two input[type='radio']:checked"). val();
			var three = $(".popup-rating.threee input[type='radio']:checked"). val();
			var four = $(".popup-rating.four input[type='radio']:checked"). val();
			var five = $(".popup-rating.five input[type='radio']:checked"). val();
			var six = $(".popup-rating.six input[type='radio']:checked"). val();
			var seven = $(".popup-rating.seven input[type='radio']:checked"). val();
			if(two == undefined){
				two = $(this).val();
			}if(three == undefined){
				three = $(this).val();
			}if(four == undefined){
				four = $(this).val();
			}if(five == undefined){
				five = $(this).val();
			}if(six == undefined){
				six = $(this).val();
			}if(seven == undefined){
				seven = $(this).val();
			}
			var temp = (parseInt(two)+parseInt(three)+parseInt(four)+parseInt(five)+parseInt(six)+parseInt(seven))/6;
			console.log(temp)
			var one = Math.round(temp);
			var valueAttribute = '[value="' + one + '"]';
			$(".popup-rating.one input[type='radio']" + valueAttribute).prop('checked', true);
			
		});	
	/**
	* print from 
	*/
	$( document ).ready(function() {
			$('#printfrom_dropdown').change(function() {
					window.location.href = SITEURL+'patient/check-in-online-form';
				});
		});
	$(document).on('click', '#Submit_riff', function(e) {
			var pt_name = $('#name_riff').val();
			var pt_dob = $('#DateOfBirth_riff').val();
			var pt_prname = $('#parentName_riff').val();
			var pt_phyname = $('#physicianName1').val();
			var phy_fax = $('#physicianfaxnumber1').val();
			var pt_cnct_1 = $('#contactNum_riff').val();
			var pt_cnct_2 = $('#alternatePhone_riff').val();
			var pt_note = $('#additionalNotes').val();
			var pt_office = $('#preferredOffice_riff').val();
			var pt_medReq = $('#medReq').val();
			var pt_dose = $('#dose_riff').val();
			var pt_day = $('#days_riff').val();
			var pt_pharmacyname = $('#pharmacyname').val();
			var pt_pharmacyphon = $('#pharmacyphon').val();
			var isChecked = $('#input[name=howto_riff]:checked').val();
  		
			var error = false;
			if(isChecked == '1'){
				if(pt_pharmacyname == ''){
					$('#pharmacyname_err').html("<p>Insert Pharmacy Name</p>");
					error = true;
				}if(pt_pharmacyphon == ''){
					$('#pharmacyphon_err').html("<p>Insert Pharmacy Phone Number</p>");
					error = true;
				}
			}if(isChecked == '2'){
				if(pt_office == ''){
					$('#preferredOffice_req_err').html("<p>Select office</p>");
					error = true;
				}
			}if(pt_name == ''){
				$('#name_riff_err').html("<p>Insert Patient Name</p>");
				error = true;
			}if(pt_dob == ''){
				$('#DateOfBirth_riff_err').html("<p>Insert Date of Birth</p>");
				error = true;
			}if(pt_prname == ''){
				$('#parentName_riff_err').html("<p>Insert Parrent Name</p>");
				error = true;
			}if(pt_phyname == ''){
				$('#physicianName1_err').html("<p>Select Physician</p>");
				error = true;
			}if(phy_fax == ''){
				$('#physicianfaxnumber1_err').html("<p>Insert Physician Fax No.</p>");
				error = true;
			}if(pt_cnct_1 == ''){
				$('#contactNum_riff_err').html("<p>Insert Primary Phone</p>");
				error = true;
			}if(pt_cnct_2 == ''){
				$('#alternatePhone_riff_err').html("<p>Insert Alternate Phone</p>");
				error = true;
			}if(pt_medReq == ''){
				$('#medReq_err').html("<p>Insert Medication Requested</p>");
				error = true;
			}if(pt_dose == ''){
				$('#dose_riff_err').html("<p>Insert Dose</p>");
				error = true;
			}if(pt_day == ''){
				$('#days_riff_err').html("<p>Insert Days of supply</p>");
				error = true;
			}if(pt_note == ''){
				$('#additionalNotes_err').html("<p>Insert Note</p>");
				error = true;
			}/*if(pt_office == ''){
			$('#preferredOffice_req_err').html("<p>Select Office</p>");
			error = true;
			}*/
			if(error){
				return false;
			}
			if(!error){
				$('.error-message').html('');
				
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
	$(document).ready(function() {
			$('input[name="howto_riff"]').click(function() {
					if($(this).val() == '1') {
						$('#howto_div1').show();  
						$('#howto_div2').hide();          
					}
					else if($(this).val() == '2') { 
						$('#howto_div1').hide();
						$('#howto_div2').show();   
					}else{
						$('#howto_div1').hide();
						$('#howto_div2').show();   
					}
				});
			$('input[name="howto_req"]').click(function() {
					if($(this).val() == '1') {
						$('#howto_div_req1').show();  
						$('#howto_div_req2').hide();          
					}
					else if($(this).val() == '2') { 
						$('#howto_div_req1').hide();
						$('#howto_div_req2').show();   
					}else{
						$('#howto_div_req1').hide();
						$('#howto_div_req2').hide();   
					}
				});
		});
</script>
<main id="main" class="tg-haslayout">
	<section class="tg-main-section tg-haslayout">
		<div class="container">
			<div class="row study">
				<ul class="tabs" id="docTab" style="list-style:none; padding:0; margin:0;">
					<li class="active" ><a  href="#doc-visited">My Doctors</a></li>
					<li><a href="#past-appointments">My Appointments</a></li>
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
									foreach($resu as $key => $val){
										$i=$key;
										$res= $scad->getDocDetails($val['doctor_id']);
										$rat=$scad->getrting($val['doctor_id']);
										$len=count($rat);
										for($j=0;$j<$len;$j++){
											$overall[$val['doctor_id']][]=($rat[$j]['overall'] +$rat[$j]['beside']+$rat[$j]['ansque']+$rat[$j]['spend']+$rat[$j]['office']+$rat[$j]['staff'] +$rat[$j]['waiting'])/7  ;
                
										}
            
										$rateval=0; 
										for($k=0;$k<count($overall[$val['doctor_id']]);$k++){
											$rate = $overall[$val['doctor_id']][$k];
											$rateval= $rateval+$rate;
										}
										$doc_rating = round($rateval/count($overall[$val['doctor_id']]));
										foreach($res as $key => $value){
											$img= $scad->getDocProImg($value['id']);
											if($img['name']){
												$docImage = $img['name'];
											} else{
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
																<a href="<?php echo WEB_ROOT;?>index.php/view-prrofile/<?php echo $val['doctor_id'];?>">
																	<h3><?php echo $value['firstname']." ".$value['lastname'];?></h3>
																</a>
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
															<!--<span class="rating rate ratng" datasrc="5" target="<?php echo $val['doctor_id'] ;?>" id="review_<?php echo $val['doctor_id'];?>">
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
															</span>-->
															<div class="feature-rating doc" id="review_<?php echo $val['doctor_id'];?>" style="padding-top: 10px;">
													            <span class="tg-stars star-rating">
													                <span  class="ratng" target="<?php echo $val['doctor_id'];?>" style="width:<?php echo (ceil($doc_rating*26.6))?>%;line-height:20px;" ></span>
													            </span>
													        </div>  
															<?php
															$co = $scad->AppoinmentCountNew($_SESSION['userID'],$val['doctor_id']);
															$totl= $co[0]["count(doctor_id)"];  
															?>
															<!--<div class="prodt">
															<?php
															$count=$scad->getratingDetails($val['doctor_id']);
															$c=count($count);
															if($c==0){
															?>
															<a href="#" class="" id="docid" datasrc="5" target="<?php echo $val['doctor_id'] ;?>">
															<i class="fa fa-star-o"></i>
															<span> Rate</span>
															</a>
															<?php } else{?>
															<!--<a href="#" class="ratng" id="docid1" datasrc="5" target="<?php echo $val['doctor_id'] ;?>">
															<i class="fa fa-star-half-o"></i>
															<span> Rated</span>
															</a>
															<a href="javascript:void();" class=""  datasrc="5" target="<?php echo $val['doctor_id'] ;?>">
															<i class="fa fa-star-half-o"></i>
															<span> Rated</span>
															</a>
															<?php } ?>
															</div>-->
															<div class="prodt">
																<a href="javascript:void(0);" class="num_appo" target="<?php echo $val['doctor_id'] ;?>">
																	<i class="fa fa-info-circle"></i>
																	<span><?php echo $totl; ?> Appointments</span>
																</a>
															</div>
															<div class="prodt">
																<!-- <a href="javascript:void(0);" data-toggle="modal" class="dr_bkonline" targets="<?php echo $val['doctor_id'] ;?>">
																<i class="fa fa-repeat"></i>
																<span>Book Again</span>
																</a>-->
																<a href="javascript:void(0);" data-toggle="modal" class="dr_bkonline" targets="<?php echo $val['doctor_id'] ;?>">
																	<i class="fa fa-repeat"></i>
																	<span style="text-align: left;">Book Again</span>
																</a>
															</div>
															<div class="prodt">
																<a href="javascript:void(0);">
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
																<a  href="https://www.google.com/maps/dir//<?php echo $value["address"].','.$value['zipcode'];?>" target="popup" class="dr_getDirections">
																	<img src="<?php echo WEB_ROOT; ?>service/public/images/spotlight-poi.png" style="width: 6%;float: left;margin-left: 10px;">
																	<?php $distance="Invalid Distance, too far";
                    
																	try{
																		$url = 'https://maps.googleapis.com/maps/api/distancematrix/json?units=imperial&origins='.urlencode($result['address']).'&destinations='.urlencode($value["address"]).'&key=AIzaSyDtCtNnx_y65T5gdUE2lkZ-fN8v2F86lfY';
																		$obj = json_decode(file_get_contents($url), true);
																		if($obj['status'] == 'OK'){
																			$distance=$obj['rows'][0]['elements'][0]['distance']['text'];
																		} 
																	} catch(Exception $e){ }?>
																	<span style="padding-left:9px;"><?php echo $distance."<br/>".$value['address'];?></span>
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
												<form id="findDoctor-form" class="tg-searchform directory-map" style="margin-top:10px;">
													<div class="col-md-12 col-sm-12 col-xs-12">
														<div class="drop-select">
															<input type="text" id="doc-zip" name="docZip" placeholder="ZipCode" value="" class="form-control">
														</div>
													</div>
													<div class="col-md-12 col-sm-12 col-xs-12">
														<div class="drop-select">
															<select class="select2 spciality_search" name="docSpeciality" id="docSpeciality">
																<option val="">Select a Speciality</option>
																<?php $scad->listbox('speciality','id','name',$condition=NULL,'`name` ASC',$selected=NULL); ?>
															</select>
														</div>
													</div>
													<div class="col-md-offset-4 col-md-4 col-sm-offset-4 col-sm-4 col-xs-offset-0 col-xs-12 lg_btn1" style="margin-top:10px;"><input id="findDoctorBtn" class="tg-btn" value="search" type="button"></div>
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
										<th colspan="">Appointment Date/Time</th>
										<th colspan="">Status</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$app = $scad->getPatientAppointmentDetails($_SESSION['userID']);
									
									foreach($app as $key => $val){
										//echo $val['illness'];
										//print_r($val);
										$res= $scad->getDocDetails($val['doctor_id']);
										foreach($res as $key => $value){
											//echo $val['illness'];
											//print_r($val);exit;
											//print_r($value);exit;
											?>  
											<tr>          
											<td data-label="Doc Name" ><?php echo $value['firstname']." ".$value['lastname'];?></td>            
											<td data-label="Illness"class="name"><?php echo $val['apnt_note']; ?></td>
											<td data-label="Appoinment Date">
											<?php 	$newDate = date("M-d-Y", strtotime($val['apnt_date'])); 
													$newTime = date("H:i a", strtotime($val['apnt_starttime'])); 
													echo $newDate." / ".$newTime;
											?></td>
											<td data-label="status">
											<?php 
													$fianDate = date("M-d-Y H:i:s", strtotime($val['apnt_date'].' '.$val['apnt_starttime']));  
													
												if(strtotime("now") < strtotime($fianDate)){
													echo '<a href="'.WEB_ROOT.'index.php/patient/select-doctor" >check-in-online</a>';
												}if(strtotime("now") > strtotime($fianDate)){
													echo "Completed";
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
						</div>
					</div>
				</div>
			</div>
			<div class="tabcontents">
				<div class="tab-pane" id="ImmunizationReq">
					<form class="form-horizontal" id="immunization_form">
						<fieldset>
							<!-- Text input-->
							<div class="form-group">
								<label class="col-md-4 control-label" for="patient_name">Patient Name</label>  
								<div class="col-md-4">
									<input id="patient_name_req" name="patient_name" placeholder="Give first and last names" class="form-control input-md" required="" type="text">
									<div class="error-message" id="patient_name_req_err"></div>
								</div>
							</div>
							<!-- Text input-->
							<div class="form-group">
								<label class="col-md-4 control-label" for="DateOfBirth">Date of Birth</label>  
								<div class="col-md-4">
									
									<input class="date-field-required" type="text" data-trigger="mouseleave" data-required="true" data-beatpicker="true" name="DateOfBirth_req" data-beatpicker-id="DateOfBirth_reqDatePicker" id="DateOfBirth_req" placeholder="MM/DD/YYYY"  data-beatpicker-format="['MM','DD','YYYY'],separator:'/'" />
									<div class="error-message" id="DateOfBirth_req_err"></div>
								</div>
							</div>
							<!-- Text input-->
							<div class="form-group">
								<label class="col-md-4 control-label" for="parentName">Parent or Guardian's Name</label>  
								<div class="col-md-4">
									<input id="parentName_req" name="parentName" placeholder="Give first and last names" class="form-control input-md" required="" type="text">
									<div class="error-message" id="parentName_req_err"></div>
								</div>
							</div>
							<!-- Select Basic -->
							<div class="form-group">
								<label class="col-md-4 control-label" for="physician">Physician Name</label>
								<div class="col-md-4">
									<select id="physician" name="physician" class="form-control">
										<option value="">Select Physician</option>
										<?php if(!empty($resu)){
            	
											foreach($resu as $key => $val){
												//echo $val['illness'];
												//print_r($val);
												$res= $scad->getDocDetails($val['doctor_id']);
												foreach($res as $key => $value){
													?>
													<option value="<?php echo $val['doctor_id'];?>"><?php echo $value['firstname']." ".$value['lastname'];?></option>
													<?php 	}
											}
										}
										?>
										<option value="other">Other</option>
									</select>
									<br/>
									<input type="hidden" name="physicianName" id="physicianName" value="" placeholder="Physician Name" style="margin-top: 10px;"/>
									<div class="error-message" id="physician_err"></div>
								</div>
							</div>
							<!-- Select Basic -->
							<div class="form-group">
								<label class="col-md-4 control-label" for="physicianfaxnumber">Physician Fax Number</label>
								<div class="col-md-4">
									<input type="text" id="physicianfaxnumber" name="physicianfaxnumber" value="" placeholder="use the format XXX-XXX-XXXX"/>
									<div class="error-message" id="physicianfaxnumber_err"></div>
								</div>
							</div>
							<!-- Text input-->
							<div class="form-group">
								<label class="col-md-4 control-label" for="contactNum">Patient Primary Phone</label>  
								<div class="col-md-4">
									<input id="contactNum_req" name="contactNum" placeholder="use the format XXX-XXX-XXXX" class="form-control input-md"  required="" type="text" data-mask="000-000-0000" data-mask-selectonfocus="true">
									<div class="error-message" id="contactNum_req_err"></div>
								</div>
							</div>
							<!-- Search input-->
							<div class="form-group">
								<label class="col-md-4 control-label" for="alternatePhone">Patient Alternate Phone</label>
								<div class="col-md-4">
									<input id="alternatePhone_req" name="alternatePhone" placeholder="use the format XXX-XXX-XXXX" class="form-control input-md" type="search">
									<div class="error-message" id="alternatePhone_req_err"></div>
								</div>
							</div>
							<!-- Search input-->
							<!--<div class="form-group">
							<label class="col-md-4 control-label" for="email">Email</label>
							<div class="col-md-4">
							<input id="email" name="email" placeholder="email" class="form-control input-md" required="" type="search">
							</div>
							</div>-->
							<!-- Multiple Radios (inline) -->
							<!-- <div class="form-group">
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
							</div>-->
							<!-- Textarea -->
							<div class="form-group">
								<label class="col-md-4 control-label" for="additionalNotes">Additional Notest and Questions</label>
								<div class="col-md-4">                     
									<textarea class="form-control" id="additionalNotes_req" name="additionalNotes"></textarea>
									<div class="error-message" id="additionalNotes_req_err"></div>
								</div>
							</div>
							<!-- Multiple Radios (inline) -->
							<div class="form-group">
								<label class="col-md-4 control-label" for="howto">Recieve your immunization copy through</label>
								<div class="col-md-4"> 
            
									<label class="radio-inline" for="howto-1">
										<input name="howto_req" id="howto-1" value="1"  type="radio" style="width:auto;">
										fax
									</label>
									<label class="radio-inline" for="howto-2">
										<input name="howto_req" id="howto-2" value="2"  type="radio" style="width:auto;"> 
										Pickup in person
									</label>
									<!--<label class="radio-inline" for="howto-3">
									<input name="howto_req" id="howto-3" value="3"  type="radio" style="width:auto;"> 
									Other
									</label> -->
									<div class="error-message" id="howto_req_err"></div>
								</div>
							</div>
							<div class="form-group" id="howto_div_req1" style="display: none;" >
								<label class="col-md-4 control-label" for="faxnumber">Fax number</label>
								<div class="col-md-4">
									<input type="text" name="faxnumber" id="faxnumber" placeholder="use the format XXX-XXX-XXXX"/>
									<div class="error-message" id="faxnumber_err"></div>
								</div>
							</div>
							<div class="form-group" id="howto_div_req2" style="display: none;" >
								<label class="col-md-4 control-label" for="preferredOffice">Preferred Office</label>
								<div class="col-md-4">
									<!--<select id="preferredOffice_req" name="preferredOffice" class="form-control">
									</select>-->
									<input type="text" id="preferredOffice_req" placeholder="Preferred Office" />
									<div class="error-message" id="preferredOffice_req_err"></div>
								</div>
							</div>
						</fieldset>
						<div class="form-group">
							<label class="col-md-4 control-label" for="Submit"></label>
							<div class="col-md-4">
								<input style="border:none" type="button" value="submit" class="btn btn-primary" id="Submit_req">
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
									<input id="name_riff" name="textinput" placeholder="Give first and last names" class="form-control input-md" required="" type="text">
									<div class="error-message" id="name_riff_err"></div>
								</div>
							</div>
							<!-- Text input-->
							<div class="form-group">
								<label class="col-md-4 control-label" for="DateOfBirth">Date of Birth</label>  
								<div class="col-md-4">
									
									<input class="date-field-required" type="text" data-trigger="mouseleave" data-required="true" data-beatpicker="true" name="DateOfBirth_riff" id="DateOfBirth_riff" data-beatpicker-id="DateOfBirth_riffDatePicker" placeholder="MM/DD/YYYY"  data-beatpicker-format="['MM','DD','YYYY'],separator:'/'" />
									<div class="error-message" id="DateOfBirth_riff_err"></div>
								</div>
							</div>
							<!-- Text input-->
							<div class="form-group">
								<label class="col-md-4 control-label" for="parentName">Parent or Guardian's Name</label>  
								<div class="col-md-4">
									<input id="parentName_riff" name="parentName" placeholder="Give first and last names" class="form-control input-md" required="" type="text">
									<div class="error-message" id="parentName_riff_err"></div>
								</div>
							</div>
							<!-- Select Basic -->
							<div class="form-group">
								<label class="col-md-4 control-label" for="physician">Physician Name</label>
								<div class="col-md-4">
									<select id="physician1" name="physician1" class="form-control">
										<option value="">Select Physician</option>
										<?php if(!empty($resu)){
            	
											foreach($resu as $key => $val){
												//echo $val['illness'];
												//print_r($val);
												$res= $scad->getDocDetails($val['doctor_id']);
												foreach($res as $key => $value){
													?>
													<option value="<?php echo $val['doctor_id'];?>"><?php echo $value['firstname']." ".$value['lastname'];?></option>
													<?php 	}
											}
										}
										?>
										<option value="other">Other</option>
									</select>
									<input type="hidden" name="physicianName1" id="physicianName1" value="" placeholder="Physician Name" style="margin-top: 10px;"/>
									<div class="error-message" id="physicianName1_err"></div>
								</div>
							</div>
							<!-- Select Basic -->
							<div class="form-group">
								<label class="col-md-4 control-label" for="physicianfaxnumber1">Physician Fax Number</label>
								<div class="col-md-4">
									<input type="text" id="physicianfaxnumber1" name="physicianfaxnumber1" value="" placeholder="use the format XXX-XXX-XXXX"/>
									<div class="error-message" id="physicianfaxnumber1_err"></div>
								</div>
							</div>
							<!-- Text input-->
							<div class="form-group">
								<label class="col-md-4 control-label" for="contactNum">Patient Primary Phone</label>  
								<div class="col-md-4">
									<input id="contactNum_riff" name="contactNum" placeholder="use the format XXX-XXX-XXXX" class="form-control input-md" required="" type="text">
									<div class="error-message" id="contactNum_riff_err"></div>
								</div>
							</div>
							<!-- Search input-->
							<div class="form-group">
								<label class="col-md-4 control-label" for="alternatePhone">Patient Alternate Phone</label>
								<div class="col-md-4">
									<input id="alternatePhone_riff" name="alternatePhone" placeholder="use the format XXX-XXX-XXXX" class="form-control input-md" type="text">
									<div class="error-message" id="alternatePhone_riff_err"></div>
								</div>
							</div>
							<!-- Search input-->
							<!--<div class="form-group">
							<label class="col-md-4 control-label" for="email">Email</label>
							<div class="col-md-4">
							<input id="email" name="email" placeholder="email" class="form-control input-md" required="" type="email">
							</div>
							</div>-->
							<!-- Multiple Radios (inline) -->
							<!--<div class="form-group">
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
							</div>-->
							<div class="form-group">
								<label class="col-md-4 control-label" for="medicationReq">Medication Requested</label>
								<div class="col-md-4">
									<input id="medReq" name="medReq" placeholder="Medication Requested" class="form-control input-md" required="" type="text">
									<div class="error-message" id="medReq_err"></div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label" for="dose">Dosage</label>
								<div class="col-md-4">
									<input id="dose_riff" name="dose" placeholder="Dose" class="form-control input-md" required="" type="text">
									<div class="error-message" id="dose_riff_err"></div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label" for="days">Days Supply</label>
								<div class="col-md-4">
									<input id="days_riff" name="days" placeholder="No of Days" class="form-control input-md" required="" type="text">
									<div class="error-message" id="days_riff_err"></div>
								</div>
							</div>
							<!-- Textarea -->
							<div class="form-group">
								<label class="col-md-4 control-label" for="additionalNotes">Additional Information</label>
								<div class="col-md-4">                     
									<textarea class="form-control" id="additionalNotes" name="additionalNotes"></textarea>
									<div class="error-message" id="additionalNotes_err"></div>
								</div>
							</div>
							<!-- Multiple Radios (inline) -->
							<div class="form-group">
								<label class="col-md-4 control-label" for="howto">Prescription Delivery Options</label>
								<div class="col-md-4"> 
									<label class="radio-inline riff" for="howto-0">
										<input name="howto_riff" id="howto_riff0" value="1" type="radio" style="width:auto;">
										Call in to Pharmacy
									</label> 
									<label class="radio-inline riff" for="howto-1">
										<input name="howto_riff" id="howto_riff1" value="2" type="radio" style="width:auto;">
										Pick Up in Person
									</label>
									<!--<label class="radio-inline" for="howto-1">
									<input name="howto_riff" id="howto-2" value="3" type="radio" style="width:auto;">
									Other
									</label>-->
								</div>
							</div>
							<div id="howto_div1" style="display: none;">
								<div class="form-group" >
									<label class="col-md-4 control-label" for="pharmacyname">Pharmacy Name</label>
									<div class="col-md-4">
										<input type="text" id="pharmacyname" name="pharmacyname" placeholder="Pharmacy Name"/>
										<div class="error-message" id="pharmacyname_err"></div>
									</div>
								</div>
								<div class="form-group" >
									<label class="col-md-4 control-label" for="pharmacyphon">Pharmacy Phone Number</label>
									<div class="col-md-4">
										<input type="text" id="pharmacyphon" name="pharmacyphon" placeholder="use the format XXX-XXX-XXXX"/>
										<div class="error-message" id="pharmacyphon_err"></div>
									</div>
								</div>
							</div>
							<div class="form-group" id="howto_div2" style="display: none;">
								<label class="col-md-4 control-label" for="preferredOffice">Preferred Office</label>
								<div class="col-md-4">
									<!--<select id="preferredOffice_riff" name="preferredOffice" class="form-control">
									</select>-->
									<input type="text" id="preferredOffice_riff" value="" placeholder="Preferred Office"/>
									<div class="error-message" id="preferredOffice_riff_err"></div>
								</div>
							</div>
						</fieldset>
						</fieldset>
						<div class="form-group">
							<label class="col-md-4 control-label" for="Submit"></label>
							<div class="col-md-4">
								<input style="border:none" type="button" value="submit" class="btn btn-primary" id="Submit_riff">
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="tabcontents">
				<div class="tab-pane" id="PrintForm">
					<form class="form-horizontal">
						<fieldset>
							<div class="form-group">
								<label class="col-md-4 control-label" for="doctor_dropdown">Select Print Form</label>
								<div class="col-md-4">
									<select id="printfrom_dropdown" name="printfrom_dropdown" class="form-control">
										<option value="">Select From</option>
										<option value="">Patient Registration Form – General (PCP)</option>
										<option value="">Health History – General (PCP)</option>
										<option value="">Dental Registration</option>
										<option value="">Health History – Dental</option>
									</select>
           
								</div>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
			<div class="modal fade" tabindex="-1" role="dialog" id="book_pop">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-body">
							<div class="ball" data-dismiss="modal" aria-label="Close">
								<a href="javascript:void(0);"> <img src="<?php echo WEB_ROOT;?>service/public/images/images/ballinto.png"></a>
							</div>
							<div class="bkng_online_popupmain " style="background-color:#FFF; border-radius:6px;">
								<div class="popup_load" style="display:none;z-index:999;"></div>
								<div class="con"></div>
							</div>
						</div>
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div>
			<div class="modal fade" tabindex="-1" role="dialog" id="appoinment_pop">
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
			
		</div>
	</section>
</main>
<?php include("service/ui/common/footer.php"); ?>