<style>
.find_foot{
	cursor:pointer;
	}
	.zip_foot{
	cursor:pointer;
	}
	.spcl_foot{
	cursor:pointer;
	}


</style>
<div class="load_modal"><!-- Place at bottom of page --></div>
<div class="footer">
            <div class="col-md-2">
                     <h2 class="heading">Doc Visits</h2>
                      <div class="bookmy">
                    <ul>
                        <li><img src="<?php echo WEB_ROOT?>service/public/images/images/abouttt.png"><a href="<?php echo WEB_ROOT?>index.php/About">ABOUT</a></li>
                         <li><img src="<?php echo WEB_ROOT?>service/public/images/images/man.png"><a href="<?php echo WEB_ROOT?>index.php/Contact">CONTACT</a></li>
<?php /*?>                         <li><img src="<?php echo WEB_ROOT?>service/public/images/images/carer.png"><a href="<?php echo WEB_ROOT?>index.php/Careers">CAREERS</a></li><?php */?>
                         <li><img src="<?php echo WEB_ROOT?>service/public/images/images/ans.png"><a href="<?php echo WEB_ROOT?>index.php/terms">Terms</a></li>
<?php /*?>                         <li><img src="<?php echo WEB_ROOT?>service/public/images/images/question.png"><a>FAQS</a></li>
                          <li><img src="<?php echo WEB_ROOT?>service/public/images/images/bloge.png"><a>BLOG</a></li>
                        <li><img src="<?php echo WEB_ROOT?>service/public/images/images/doc.png"><a>DOCTOR BLOG</a></li><?php */?>
                    </ul>
                </div>
                  </div>
                    <form style="margin-top:15px;display:none" id="hiddenform">
                  <div class="styled-selected">
                     <select name="docSpeciality" id="docSpeciality_foot">
                        <optgroup label="All">
                           <option value="" style="text-transform:unset;">Select a Speciality</option>
                           <?php
                              $condition = 'category_id = 1';
                              $scad->listbox('speciality','id','name',$condition,'`name` ASC',$selected);?>
                        </optgroup>
     <?php /*?>                   <optgroup label="Therapists / Counselors">
                           <?php
                              $condition = 'category_id = 2';
                              $scad->listbox('speciality','id','name',$condition,'`name` ASC',$selected);?>
                        </optgroup>
                        <optgroup label="Dental">
                           <?php
                              $condition = 'category_id = 3';
                              $scad->listbox('speciality','id','name',$condition,'`name` ASC',$selected);?>
                        </optgroup>
                        <optgroup label="Veterinary">
                           <?php
                              $condition = 'category_id = 4';
                              $scad->listbox('speciality','id','name',$condition,'`name` ASC',$selected);?>
                        </optgroup><?php */?>
                     </select>
                  </div>
                  <div class="hme_txtfm"> In </div>
                  <input type="text" placeholder="Enter your Zip" name="docZip" id="doc-zip-foot" class="input-block-level" style="min-height:30px;" >
                  <div class="hme_txtfm"> Who participates in </div>
                  <div class="styled-selected">
                     <select class="input-block-level" name="insuranceSelect" id="insuranceSelect">
                        <option value="">Select Insurance</option>
                        <?php $scad->listbox('insurance','id','name','`parent_id`=0','`name` ASC',$selected=NULL); ?>
                     </select>
                  </div>
                  <div id="loading" style="display: none;    height: 30px;    margin: 11px 0 7px;"><img style=""  src="<?php echo WEB_ROOT?>service/public/images/loading.gif" /></div>
                  <div id="subInsurance" class="styled-selected" style="display:none;">
                     <select class="input-block-level" name="subInsuranceSelect" id="subInsuranceSelect"></select>
                  </div>
                  <div class="styled-selected">
                     <select id="srchReason" name="srchReason" class="select2_dr">
                        <option value="0" class="parent-346">Reason for Visit</option>
                        <option value="1" class="parent-346">Hearing Problems / Ringing in Ears</option>
                        <option value="2" class="parent-346">Damage to the Ear and Disease of the Ear</option>
                        <option value="3" class="parent-346">Dizziness / Vertigo</option>
                        <option value="4" class="parent-346">Ear Infection</option>
                        <option value="5" class="parent-346">Evaluation for Cochlear Implant</option>
                        <option value="6" class="parent-346">Hearing Test</option>
                        <option value="7" class="parent-346">Multiple Sclerosis</option>
                        <option value="8" class="parent-346">Family History of Hearing Loss</option>
                        <option value="9" class="parent-346">Pediatric Audiology</option>
                        <option value="10" class="parent-346">Problem with Balance</option>
                        <option value="11" class="parent-346">Problem with Hearing Aid</option>
                        <option value="12" class="parent-346">Stroke</option>
                        <option value="13" class="parent-346">Tumor Affecting Hearing (Acoustic Neuroma, Meningioma, Astrocytoma)</option>
                     </select>
                  </div>
<?php /*?>                  <div class="styled-selected">
                     <select id="srchLanguage" name="language" class="select2_dr">
                  <option value="0">Select a Language</option>
                  <?php $scad->listbox('languages','id','name',$condition=NULL,'`name` ASC',$selected=NULL);?>
                     </select>
                  </div><?php */?>
                  <div class="styled-selected">
                     <select class="select2_dr" name="gender" id="gender">
                        <option value="0">Doctor Gender</option>
                        <option value="1">Male</option>
                        <option value="2">Female</option>
                     </select>
                  </div>
                  <div  id="findDoctorBtn" class="findDoctors">Find Doctors </div>
               </form>
            <div class="col-md-4">
                     <h2 class="heading1">OUR LOCATION</h2>
                <div class="footer-list">
                
                        
                       
                    
                    <div class="footer-list2">
                        <ul>
                        <li><img src="<?php echo WEB_ROOT?>service/public/images/images/mobile.png"> <a>Make appointments on the go, right from your smartphone, with our top-rated mobile app.</a></li>
                        <li><img src="<?php echo WEB_ROOT?>service/public/images/images/letterbox.png">    <a>BY E-MAIL; info@DocVisits.com</a></li>
                        <li><img src="<?php echo WEB_ROOT?>service/public/images/images/phonee.png">   <a>BY PHONE; +000 -12601 </a></li>
                        <li><img src="<?php echo WEB_ROOT?>service/public/images/images/homme.png">    <a>ADDRESS; 121, honey Street, Home City, USA </a></li>
                    </ul>
                    </div>
                </div>
                     
                  </div>
            <div class="col-md-2">
                     <h2 class="heading">SEARCH BY</h2>
                <div class="footer-list">
                    <ul>
                        <li><a href="<?php echo WEB_ROOT;?>index.php/searchBy-name">Doctor Name</a></li>
                        <?php /*?><li><a href="#">Practice Name</a></li><?php */?>
                        <li><a href="<?php echo WEB_ROOT;?>index.php/Procedures">Procedure</a></li>
                        <li><a href="<?php echo WEB_ROOT;?>index.php/Languages">Language</a></li>
                        <li><a  href="<?php echo WEB_ROOT;?>index.php/location">Location</a></li>
                        <?php /*?><li><a class="find_foot">Hospital</a></li><?php */?>
                        <li><a href="<?php echo WEB_ROOT;?>index.php/insurance">Insurance</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                     <h2 class="heading">CITIES</h2>
                <div class="footer-list">
                    <ul>
                    <li><a class="zip_foot" id="32701">Alaska</a></li>
               <li><a class="zip_foot" id="32703">Alabama </a></li>
               <li><a class="zip_foot" id="32707">California </a></li>
               <li><a class="zip_foot" id="34747">Colorado </a></li>
               <li><a class="zip_foot" id="33755">Connecticut </a></li>
               <li><a class="zip_foot" id="34711">Delaware </a></li>
               <li><a class="city_more1" id="">more... </a></li>
               <li class="hi_city1"><a class="zip_foot hi_city1" id="52801">Florida </a></li>
               <li class="hi_city1"><a class="zip_foot hi_city1" id="32114">Georgia </a></li>
               <li class="hi_city1"><a class="zip_foot hi_city1" id="32713">Guam </a></li>
               <li class="hi_city1"><a class="zip_foot hi_city1" id="32730">Hawaii</a></li>
               <li class="hi_city1"><a class="zip_foot hi_city1" id="33301">Iowa</a></li>
               <li class="hi_city1"><a class="zip_foot hi_city1" id="34741">Kansas</a></li>
               
               
               <li class="hi_city1"><a class="zip_foot hi_city1" id="32746">Kentucky</a></li>
               <li class="hi_city1"><a class="zip_foot hi_city1" id="20175">Louisiana</a></li>
               <li class="hi_city1"><a class="zip_foot hi_city1" id="32750">Massachusetts</a></li>
               <li class="hi_city1"><a class="zip_foot hi_city1" id="32751">Maryland</a></li>
               <li class="hi_city1"><a class="zip_foot hi_city1" id="32901">Michigan</a></li>
               <li class="hi_city1"><a class="zip_foot hi_city1" id="92093">Ohio</a></li>
               <li class="hi_city1"><a class="zip_foot hi_city1" id="34761">Oklahoma</a></li>
               <li class="hi_city1"><a class="zip_foot hi_city1" id="32801">Oregon</a></li>
               <li class="hi_city1"><a class="zip_foot hi_city1" id="34758">Pennsylvania</a></li>
               <li class="hi_city1"><a class="zip_foot hi_city1" id="32771">South Carolina</a></li>
               <li class="hi_city1"><a class="zip_foot hi_city1" id="56301">Tennessee</a></li>
               <li class="hi_city1"><a class="zip_foot hi_city1" id="34216">Texas</a></li>
               
               <li class="hi_city1"><a class="zip_foot hi_city1" id="33601">Virginia</a></li>
               <li class="hi_city1"><a class="zip_foot hi_city1" id="34777">Vermont</a></li>
               <li class="hi_city1"><a class="zip_foot hi_city1" id="33880">Washington</a></li>
               <li class="hi_city1"><a class="zip_foot hi_city1" id="32789">Wisconsin</a></li>
               <li class="hi_city1"><a class="city_less1" id="" style="display:none;cursor:pointer;">less... </a></li>
                        </ul>
                </div>
                     
                  </div>
                  <?php
              $result=$scad->getAllData("speciality");
              /*echo "<pre>";
              print_r($result);*/
              $len=count($result);
              ?>
             <div class="col-md-2">
                     <h2 class="heading">SPECIALITIES</h2>
                 <div class="footer-list">
                     <ul>
                 <?php
                  for($i=0;$i<$len;$i++){
                     if($i<6){
                     ?>
                        <li><a class="spcl" id='<?php echo $result[$i]['id']; ?>'><?php echo $result[$i]['name']; ?></a></li>
                        <?php }
                  elseif($i==6){?>
                        <li><a class=" more_specl1" id=''>more...</a></li>
                  <?php
                        }
                  
                  else{
                     ?>
                     <li class="hi_specl1"><a class="spcl hi_specl1" id='<?php echo $result[$i]['id']; ?>'><?php echo $result[$i]['name']; ?></a></li>
                     <?php }
                     if($i==($len-1)){
                        ?>
                        <li class="less_specl1"><a class=" hi_specl1 less_specl1" id='' style="cursor:pointer">less...</a></li>
                        <?php 
                        }
                  } ?>
                </ul>
                 </div>
                     
                  </div>
   <div class="footer-list">
      <p align="center">@ Copyright 2016 Docvisits , Inc. DocVisits is a registered trademark of DocVisits.
      <br />  
         <a href="#">Privacy Policy</a> and <a href="#">Terms of Use</a>
      </p>
   </div>
</div>
<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="<?php echo WEB_ROOT?>service/public/js/fileupload/vendor/jquery.ui.widget.js"></script>
<!-- The Templates plugin is included to render the upload/download listings -->
<script src="<?php echo WEB_ROOT?>service/public/js/fileupload/tmpl.min.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="<?php echo WEB_ROOT?>service/public/js/fileupload/load-image.min.js"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="<?php echo WEB_ROOT?>service/public/js/fileupload/canvas-to-blob.min.js"></script>
<!-- Bootstrap JS is not required, but included for the responsive demo navigation -->
<!-- blueimp Gallery script -->
<script src="<?php echo WEB_ROOT?>service/public/js/fileupload/jquery.blueimp-gallery.min.js"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="<?php echo WEB_ROOT?>service/public/js/fileupload/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="<?php echo WEB_ROOT?>service/public/js/fileupload/jquery.fileupload.js"></script>
<!-- The File Upload processing plugin -->
<script src="<?php echo WEB_ROOT?>service/public/js/fileupload/jquery.fileupload-process.js"></script>
<!-- The File Upload image preview & resize plugin -->
<script src="<?php echo WEB_ROOT?>service/public/js/fileupload/jquery.fileupload-image.js"></script>
<!-- The File Upload audio preview plugin -->
<script src="<?php echo WEB_ROOT?>service/public/js/fileupload/jquery.fileupload-audio.js"></script>
<!-- The File Upload video preview plugin -->
<script src="<?php echo WEB_ROOT?>service/public/js/fileupload/jquery.fileupload-video.js"></script>
<!-- The File Upload validation plugin -->
<script src="<?php echo WEB_ROOT?>service/public/js/fileupload/jquery.fileupload-validate.js"></script>
<!-- The File Upload user interface plugin -->
<script src="<?php echo WEB_ROOT?>service/public/js/fileupload/jquery.fileupload-ui.js"></script>
<!-- The main application script -->
<script src="<?php echo WEB_ROOT?>service/public/js/fileupload/main.js"></script>
<!--
<script src="<?php echo WEB_ROOT?>service/public/js/fileupload/multiple_resolution.js"></script>
--></body>
</html>

<script>
  $body = $("body");

$(document).on({
    ajaxStart: function() { $body.addClass("loading");    },
     ajaxStop: function() { $body.removeClass("loading"); }    
});

// Create a clone of the menu, right next to original.

</script>