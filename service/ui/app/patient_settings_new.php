<?php 
include("service/ui/common/header_pat_home.php"); 

?>
<link rel="stylesheet" href="<?php echo WEB_ROOT?>service/public/css/setting_pg.css">
<script type='text/javascript' src='<?php echo WEB_ROOT?>service/public/js/doctor-profile-settings.js'></script>

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
</style>
<main id="main" class="tg-haslayout">
  <section class="tg-main-section tg-haslayout">

   <div class="container">

    <div class="row study">
      <ul class="tabs" id="docTab" style="list-style:none; padding:0; margin:0;border-bottom: 0px;">
        <li class="active" ><a  href="#doc-profile">Edit Profile</a></li>

        <li><a href="#doc-pass1">Change Password</a></li>

      </ul>
      <div class="tabcontents" style="padding-top: 10px">
        <div class="row"></div>
        <div class="tab-pane active" id="doc-profile">
         <?php
         $result = $scad->getUserDetails($_SESSION['userID']);
                        //print_r($result);
         ?>
         <form  id="doc-setting-form" name="doc-setting-form" >
          <div id="doc-success" style="display:none" class="alert alert-success">
           <p align="center">Changes Saved!!</p>
         </div>
         <fieldset>
           <div class="row">
             <div class="col-md-2">
               <div class="section italic">
                 <h4>First Name</h4>
               </div>
             </div>
             <div class="col-md-4">
               <div class="form-group">
                 <input type="text" value="<?php echo $result['firstname'];?>" data-trigger="change" data-required="true" placeholder="First Name" name="firstname"  >
               </div>
             </div>
           </div>
           <div class="row">
             <div class="col-md-2">
               <div class="section italic">
                 <h4>Last Name</h4>
               </div>
             </div>
             <div class="col-md-4">
               <div class="form-group">
                <input type="text" value="<?php echo $result['lastname'];?>" data-trigger="change" data-required="true" placeholder="Last Name" name="lastname"  >
              </div>
            </div>
          </div>
          <div class="row">
           <div class="col-md-2">
             <div class="section italic">
               <h4>Email</h4>
             </div>
           </div>
           <div class="col-md-4">
             <div class="form-group">
              <input type="email" readonly value="<?php echo $result['email'];?>" data-type="email" data-trigger="change" data-required="true"   name="email"   >
            </div>
          </div>
        </div>
        <div class="row">
         <div class="col-md-2">
           <div class="section italic">
             <h4>Phone</h4>
           </div>
         </div>
         <div class="col-md-4">
           <div class="form-group">
             <input type="tel" maxlength="10" value="<?php echo $result['phone'];?>" data-type="phone" data-trigger="change" data-required="true"   name="phone"   >
           </div>
         </div>
       </div>
       <div class="row">
         <div class="col-md-2">
           <div class="section italic">
             <h4>Date of Birth</h4>
           </div>
         </div>
         <div class="col-md-4">
           <div class="form-group">
            <input class="date-field-required" type="text"value="<?php echo $result['dob'];?>" data-trigger="mouseleave" data-required="true" data-beatpicker="true" name="dob" id="dob" placeholder="YYYY-MM-DD"  data-beatpicker-format="['YYYY','MM','DD']" /> 
          </div>
        </div>
      </div>
      <input type="button" id="pat-setting" class="tg-btn findDoctors" name="Confirm" value="Confirm">
    </fieldset>
  </form>

  <!-- <div >Save</div> -->

</div>

<div class="tab-pane" id="doc-pass1">
  <form id="doc-setting-pass" name="doc-setting-form">
    <div id="doc-pass-error1" style="display:none" class="alert alert-danger">
     <p align="center">Failed to Upload</p>
   </div>
   <div id="doc-pass-error2" style="display:none" class="alert alert-danger">
     <p align="center">Password Mismatch</p>
   </div>
   <div id="doc-pass-error3" style="display:none" class="alert alert-danger">
     <p align="center">You are entered a <em>Wrong Password</em></p>
   </div>
   <div id="doc-pass-success" style="display:none" class="alert alert-success">
     <p align="center">Changes Saved!!</p>
   </div>
   <fieldset>
    <div class="row">
     <div class="col-md-2">
       <div class="section italic">
         <h4>Old Password</h4>
       </div>
     </div>
     <div class="col-md-4">
       <div class="form-group">
         <input type="password" placeholder="Current Password"  data-trigger="change" data-required="true" placeholder="First" name="cur_pass" id="cp" class="input-block-level" >
       </div>
     </div>
   </div>
   <div class="row">
     <div class="col-md-2">
       <div class="section italic">
         <h4>New Password</h4>
       </div>
     </div>
     <div class="col-md-4">
       <div class="form-group">
         <input type="password" data-trigger="change" placeholder="New Password" data-required="true" placeholder="First" name="new_pass" id="p1" class="input-block-level" >
       </div>
     </div>
   </div>
   <div class="row">
     <div class="col-md-2">
       <div class="section italic">
         <h4>Retype Password</h4>
       </div>
     </div>
     <div class="col-md-4">
       <div class="form-group">
         <input type="password" data-trigger="change" placeholder="Retype Password" data-required="true" placeholder="First" name="re_pass" id="p2" class="input-block-level"  >
       </div>
     </div>
   </div>
   <div class="col-md-3">
     <input type="button" id="doc-pass" class="tg-btn findDoctors" name="Confirm" value="Confirm">
   </div>
 </fieldset>

 <!-- <div id="doc-pass" class="findDoctors">Save</div> -->
</form>
</div>
            <!--<div class="dctr_mbr_pgnationmn">
               <nav class="dctr_mbr_pgnation">
                  <a href="#" class="prev">&lt;</a>
                  <span>1</span>
                  <a href="#">2</a>
                  <a href="#">3</a>
                  <a href="#">4</a>                  
                  <a href="#">5</a>
                  <a href="#" class="next">&gt;</a>
               </nav>
             </div>-->
           </div>

         </div>
       </div>
     </section>
   </main>
   <!-- The template to display files available for upload -->
   <script id="template-upload" type="text/x-tmpl">
     {% for (var i=0, file; file=o.files[i]; i++) { %}
     <tr class="template-upload fade">
       <td>
         <span class="preview"></span>
       </td>
       <td>
         <p class="size">Processing...</p>
         <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
       </td>
       <td>
         {% if (!i && !o.options.autoUpload) { %}
         <button class="btn1 btn-primary start" disabled>
           <i class="glyphicon glyphicon-upload"></i>
           <span>Start</span>
         </button>
         {% } %}
         {% if (!i) { %}
         <button class="btn1 btn-warning cancel">
           <i class="glyphicon glyphicon-ban-circle"></i>
           <span>Cancel</span>
         </button>
         {% } %}
       </td>
     </tr>
     {% } %}
   </script>
   <!-- The template to display files available for download -->
   <!-- The template to display files available for download -->
   <script id="template-download" type="text/x-tmpl">
     //alert(file.thumbnailUrl);
     {% for (var i=0, file; file=o.files[i]; i++) { %}
     <tr class="template-download fade">
       <td>
         <span class="preview">
           {% if (file.thumbnailUrl) { %}
           <a  href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}" style="max-height:90px;max-width:80px"></a>
           {% } %}
         </span>
       </td>

       <td>       
         <button class="btn1 btn-primary activate"  value="{%=file.name%}"   >
           <span>Activate</span>
         </button>
         {% if (file.error) { %}         <div><span class="label label-danger">Error</span> {%=file.error%}</div>
         {% } %}
       </td>
       <td>
         {% if (file.deleteUrl) { %}
         <button class="btn1 btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
           <i class="glyphicon glyphicon-trash"></i>
           <span>Delete</span>
         </button>
         {% } else { %}
         <button class="btn1 btn-warning cancel">
           <i class="glyphicon glyphicon-ban-circle"></i>
           <span>Cancel</span>
         </button>
         {% } %}
       </td>
     </tr>
     {% } %}
   </script>     
   <?php include("service/ui/common/footer.php"); ?>