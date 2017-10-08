<?php 
include("service/ui/common/header_pat_home.php"); 
?>

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
          </div>
        </div>
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-5 control-label" for="DateOfBirth">Patient Home Phone No.</label>  
          <div class="col-md-5">
            <input id="DateOfBirth" name="DateOfBirth" placeholder="Home Phone Number" class="form-control input-md" required="" type="text">
          </div>
        </div>
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-5 control-label" for="parentName">Alternate Phone No.</label>  
          <div class="col-md-5">
            <input id="parentName" name="parentName" placeholder="Alternate Phone Number" class="form-control input-md" required="" type="text">
          </div>
        </div>
        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-5 control-label" for="physician">Email</label>
          <div class="col-md-5">
            <input type="text" name="email" placeholder="Email Address" id="email"/>
          </div>
        </div>
        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-5 control-label" for="preferredOffice">Address</label>
          <div class="col-md-5">
            <input type="text" name="address" id="address" placeholder="Address"/>
          </div>
        </div>
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-5 control-label" for="contactNum">Apt</label>  
          <div class="col-md-5">
            <input id="contactNum" name="contactNum" placeholder="Apt" class="form-control input-md" required="" type="text">
          </div>
        </div>
        <!-- Search input-->
        <div class="form-group">
          <label class="col-md-5 control-label" for="alternatePhone">City</label>
          <div class="col-md-5">
            <input id="alternatePhone" name="alternatePhone" placeholder="City" class="form-control input-md" type="search">
          </div>
        </div>
        <!-- Search input-->
        <div class="form-group">
          <label class="col-md-5 control-label" for="email">State</label>
          <div class="col-md-5">
            <input id="state" name="state" placeholder="State" class="form-control input-md" required="" type="search">
          </div>
        </div>
        <!-- Multiple Radios (inline) -->
        <div class="form-group">
          <label class="col-md-5 control-label" for="radios">Zip</label>
          <div class="col-md-5"> 
            <input type="text" id="zip" name="zip" placeholder="Zip Code"/>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-5 control-label" for="radios">Date of Birth</label>
          <div class="col-md-5"> 
            <input type="text" name="dob" id="dob" placeholder="Date of Birth"/>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-5 control-label" for="radios">Age</label>
          <div class="col-md-5"> 
            <input type="text" name="age" id="age" placeholder="Age"/>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-5 control-label" for="radios">Sex</label>
          <div class="col-md-5"> 
            <label class="radio-inline" for="radios-0">
              <input name="radios" id="radios-0" value="1"  type="radio" 
              style="width:auto;">
              Male
            </label> 
            <label class="radio-inline" for="radios-1">
              <input name="radios" id="radios-1" value="2" type="radio" style="width:auto;">
              Female
            </label>
          </div>
        </div>
        <!-- Textarea -->
        <div class="form-group">
          <label class="col-md-5 control-label" for="additionalNotes">Social Security Number</label>
          <div class="col-md-5">                     
           <input type="text" name="sec_no" id="sec_no" placeholder="Social Security Nomber"/>
          </div>
        </div>
        <!-- Multiple Radios (inline) -->
        <div class="form-group">
          <label class="col-md-5 control-label" for="howto">Marital Status</label>
          <div class="col-md-5"> 
            <label class="radio-inline" for="howto-0">
              <input name="howto" id="howto-0" value="1" checked="checked" type="radio" style="width:auto;"> 
              Married
            </label> 
            <label class="radio-inline" for="howto-1">
              <input name="howto" id="howto-1" value="2" type="radio" style="width:auto;">
              Single
            </label>
            <label class="radio-inline" for="howto-1">
              <input name="howto" id="howto-1" value="2" type="radio" style="width:auto;">
              Divorced
            </label>
            <label class="radio-inline" for="howto-1">
              <input name="howto" id="howto-1" value="2" type="radio" style="width:auto;">
              Widowed
            </label>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-5 control-label" for="additionalNotes">Patient's Employer</label>
          <div class="col-md-5">                     
           <input type="text" name="sec_no" id="sec_no" placeholder="Social Security Nomber"/>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-5 control-label" for="howto">Employment Status</label>
          <div class="col-md-5"> 
            <label class="radio-inline" for="howto-0">
              <input name="howto" id="howto-0" value="1" checked="checked" type="radio" style="width:auto;"> 
              Full Time
            </label> 
            <label class="radio-inline" for="howto-1">
              <input name="howto" id="howto-1" value="2" type="radio" style="width:auto;">
              Part Time
            </label>
            <label class="radio-inline" for="howto-1">
              <input name="howto" id="howto-1" value="2" type="radio" style="width:auto;">
              Unemployed
            </label>
            <label class="radio-inline" for="howto-1">
              <input name="howto" id="howto-1" value="2" type="radio" style="width:auto;">
              Retired
            </label>
            <label class="radio-inline" for="howto-1">
              <input name="howto" id="howto-1" value="2" type="radio" style="width:auto;">
              Student
            </label> 
            <label class="radio-inline" for="howto-1">
              <input name="howto" id="howto-1" value="2" type="radio" style="width:auto;">
              Other
            </label>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-5 control-label" for="additionalNotes">Emergency Contact</label>
          <div class="col-md-5">                     
           <input type="text" name="sec_no" id="sec_no" placeholder="Emergency Contact"/>
          </div>
        </div><div class="form-group">
          <label class="col-md-5 control-label" for="additionalNotes">Relationship to Patient</label>
          <div class="col-md-5">                     
           <input type="text" name="sec_no" id="sec_no" placeholder="Emergency Contact"/>
          </div>
        </div><div class="form-group">
          <label class="col-md-5 control-label" for="additionalNotes">Address</label>
          <div class="col-md-5">                     
           <input type="text" name="sec_no" id="sec_no" placeholder="Address"/>
          </div>
        </div><div class="form-group">
          <label class="col-md-5 control-label" for="additionalNotes">Phone Number</label>
          <div class="col-md-5">                     
           <input type="text" name="sec_no" id="sec_no" placeholder="Phone Number"/>
          </div>
        </div>
      </fieldset>
      <fieldset>
      	<h4>INSURANCE INFORMATION</h4>
      	<div class="form-group">
          <label class="col-md-5 control-label" for="additionalNotes">Primary Insurance</label>
          <div class="col-md-5">                     
           <input type="text" name="sec_no" id="sec_no" placeholder="Primary Insurance"/>
          </div>
        </div><div class="form-group">
          <label class="col-md-5 control-label" for="additionalNotes">Patient is subscriber/Policy Holder</label>
          <div class="col-md-5">                     
           <label class="radio-inline" for="howto-1">
              <input name="howto" id="howto-1" value="2" type="radio" style="width:auto;">
              Yes
            </label>
            <label class="radio-inline" for="howto-1">
              <input name="howto" id="howto-1" value="2" type="radio" style="width:auto;">
              No
            </label> 
          </div>
        </div><div class="form-group">
          <label class="col-md-5 control-label" for="additionalNotes">Secondary Insurance</label>
          <div class="col-md-5">                     
           <input type="text" name="sec_no" id="sec_no" placeholder="Secondary Insurance"/>
          </div>
        </div><div class="form-group">
          <label class="col-md-5 control-label" for="additionalNotes">Phone Number</label>
          <div class="col-md-5">                     
           <label class="radio-inline" for="howto-1">
              <input name="howto" id="howto-1" value="2" type="radio" style="width:auto;">
              Yes
            </label>
            <label class="radio-inline" for="howto-1">
              <input name="howto" id="howto-1" value="2" type="radio" style="width:auto;">
              No
            </label> 
          </div>
        </div>
      </fieldset>
	  <fieldset>
      	<h4>INSURANCE INFORMATION(IF OTHER THAN PATIENT)-we will request to scan your ID and insurance card</h4>
      	<div class="form-group">
          <label class="col-md-5 control-label" for="additionalNotes">Subcriber/ Policy holder</label>
          <div class="col-md-5">                     
           <input type="text" name="sec_no" id="sec_no" placeholder=""/>
          </div>
        </div><div class="form-group">
          <label class="col-md-5 control-label" for="additionalNotes">Relationship to Patient</label>
          <div class="col-md-5">                     
           <input type="text" name="sec_no" id="sec_no" placeholder=""/>
          </div>
        </div><div class="form-group">
          <label class="col-md-5 control-label" for="additionalNotes">Address</label>
          <div class="col-md-5">                     
           <input type="text" name="sec_no" id="sec_no" placeholder=""/>
          </div>
        </div><div class="form-group">
          <label class="col-md-5 control-label" for="additionalNotes">Social Security No.</label>
          <div class="col-md-5">                     
           <input type="text" name="sec_no" id="sec_no" placeholder=""/>
          </div>
        </div><div class="form-group">
          <label class="col-md-5 control-label" for="additionalNotes">Date of Birth</label>
          <div class="col-md-5">                     
           <input type="text" name="sec_no" id="sec_no" placeholder=""/>
          </div>
        </div><div class="form-group">
          <label class="col-md-5 control-label" for="additionalNotes">His or Her Employer</label>
          <div class="col-md-5">                     
           <input type="text" name="sec_no" id="sec_no" placeholder=""/>
          </div>
        </div><div class="form-group">
          <label class="col-md-5 control-label" for="additionalNotes">Work Phone No.</label>
          <div class="col-md-5">                     
           <input type="text" name="sec_no" id="sec_no" placeholder=""/>
          </div>
        </div>
      </fieldset>
      <fieldset>
      <h4>RELEASE INFORMATION</h4>
      <p>I hereby give permission to the person(s) listed below to recieve information about the care of the above ptient name.</p>
      <div class="form-group">
          <label class="col-md-5 control-label" for="additionalNotes">Name(s)</label>
          <div class="col-md-5">                     
           <input type="text" name="sec_no" id="sec_no" placeholder=""/>
          </div>
        </div><div class="form-group">
          <label class="col-md-5 control-label" for="additionalNotes">Relationship to Patient</label>
          <div class="col-md-5">                     
           <input type="text" name="sec_no" id="sec_no" placeholder=""/>
          </div>
        </div>
      </fieldset>
      
      <div class="form-group">
        <label class="col-md-5 control-label" for="Submit"></label>
        <div class="col-md-5">
          <button id="Submit" name="Submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </form>
   </div>
  </section>
</main>

<?php include("service/ui/common/footer.php"); ?>