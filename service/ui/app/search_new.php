<?php
include ("service/ui/common/header.php");
$searchTerms = base64_decode($searchData);
parse_str($searchTerms);
if ($searchData == 1) {
 $docSpeciality = 5;
} else if ($searchData == 2) {
 $docSpeciality = 67;
} else if ($searchData == 3) {
 $docSpeciality = 75;
} else if ($searchData == 4) {
 $docSpeciality = 62;
}
if($docSpeciality){
 $selected = $docSpeciality;
}
else{
 $selected = NULL;
}
?>
<input type="hidden" name="searchData" id="searchData" value="<?php echo $searchTerms;?>"/>
<script type="application/javascript" src="<?php echo WEB_ROOT?>service/public/js/search.js"></script>
<style>
   /*.dr_pfl_map.affix2{
   top:20%;
   margin: 0 0 0 0;
   z-index:99;
   position:fixed;
   display:inline;
 }*/
 .dr_pfl_map.fixing{
   margin: 0 0 0 0;
   position:absolute;
   display:inline !important;
   margin-top:50%;
 }
 .dr_pfl_map.fixing1{
   margin: 0 0 0 0;
   position:absolute;
   display:inline !important;
   margin-top:17%;
 }
 .dr_pfl_nav.affix2{
   top:0px;
   margin: 0 0 0 0;
   z-index:99;
   position:fixed;
   width:87%;0
 }
 .dr_pfl_map.affix1{
   top:247px;
   margin: 0 0 0 0;
   position:fixed;
   display:inline !important;
 }
 body::-webkit-scrollbar {
   width: 1em;
 }
 .before{
   left:40%;
   width:100%!important;height:100%!important;
   overflow: auto !important;
 }
   /*.after{
   left:40%;top:10%!important;width:822px;height:500px;
   overflow:hidden;
   padding:30px;
 }*/
 #bookModel{
   overflow:hidden;
 }
 .test{
   background-color:#093}
   .after{
    overflow: auto !important;
    left:40%;top:10%!important;
    width:822px;height:500px;
    padding:30px;
  }
  .hiddens{
    display: none;
  }
</style>

  <!--************************************
    Main Start
    *************************************-->
    <main id="main" class="tg-haslayout">
      <div class="container">
        <div class="row">
         <div class="modal-body tg-banner-holder">
           <div class="tg-searcharea-v2">
            <form class="tg-searchform directory-map" id="advanceSearch-form">
              <fieldset>
               <div class="form-group" style="width:25%;">
                <input type="text" id="docName" name="docName" placeholder="Doctor Name" value="<?php echo $docName;?>" class="form-control">
              </div>
              <div class="form-group" style="width:25%;">
                <span class="select">
                 <select id="srchSpeciality" class="advanceSearch" name="srchSpeciality">
                  <optgroup label="All">
                    <option value="" style="text-transform:unset;">Select a Speciality</option>
                    <?php
                    $condition = 'category_id = 1';
                    $scad->listbox('speciality','id','name',$condition,'`name` ASC',$selected);?>
                  </optgroup>
                  <optgroup label="Therapists / Counselors">
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
                  </optgroup>
                </select>
              </span>
            </div>
            <div class="form-group" style="width:25%;">

             <input type="text" id="srchZipcode" name="srchZipcode" placeholder="Zip, City, State" value="<?php echo $docZip;?>" class="form-control">
           </div>
           <div class="form-group" style="width:25%;">
             <span class="select">
              <select id="gender" name="gender" class="select2_dr">
               <option value="0" hidden>Doctor Gender</option>
               <option value="1">Male</option>
               <option value="2">Female</option>
             </select>
           </span>

         </div>

         <div class="form-group" style="width:25%;">
           <span class="select">
            <select name="insuranceSelect" class="advanceSearch" id="insuranceSelect">
              <option value="">Select Insurance</option>
              <?php if($insuranceSelect){$selected = $insuranceSelect;}else{$selected = NULL;}  $scad->listbox('insurance','id','name','`parent_id`=0','`name` ASC',$selected); ?>
            </select>
          </span>

        </div>
        <div class="form-group" style="width:25%;">
         <span class="select">
          <select name="subInsuranceSelect" class="advanceSearch" id="subInsuranceSelect">
           <option value="">Select Insurance</option>
           <?php if($subInsuranceSelect){$selected = $subInsuranceSelect;}else{$selected = NULL;}  $scad->listbox('insurance','id','name',$condition=NULL,'`name` ASC',$selected); ?>
         </select>
       </span>
     </div>

     <div class="form-group" style="width:25%">
       <input type="button" id='advanceSearchBtn' class="tg-btn" value="search" style="width: 100%;">
     </div>
   </div>
   <input type="hidden" id="srchReason" name="srchReason">
 </fieldset>
</form>
</div>
</div>
<div class="row"></div>
<div class="spcdoctor">
 <div class="mainstrip"></div>
 <h2>SELECT A SPECIALITY DOCTORS</h2>
</div>
<div class="dtlist-form">
 <div class="row" style="background-color:#dadada; margin-left:0;margin-right:0;">
  <div class="col-md-5 col-xs56">
  </div>
  <div class="col-md-1 col-xs-1">
   <div class="dt-arw1"><img id='prev' src="<?php echo WEB_ROOT?>service/public/images/images/Pre.png"></div>
 </div>
 <div class="col-md-5 col-xs-5">
   <div class="dttime">
    <div class="dttime-list"><?php echo $date= date('D Y-m-d');?></div>
    <div class="dttime-list"><?php echo date('D Y-m-d', strtotime($date. ' + 1 days')) ?></div>
    <div class="dttime-list"><?php echo date('D Y-m-d', strtotime($date. ' + 2 days')) ?></div>
  </div>
</div>
<div class="col-md-1 col-xs-1">
 <div class="dt-arw2"><img id="next" src="<?php echo WEB_ROOT?>service/public/images/images/Nex.png"></div>
</div>
</div>
</div>
<div class="result_found"></div>
<div class="row" id="result_area" style="display: block;">
 <div class="col-md-12 data-fetch"><input class="currentDate" value="2017-07-08" type="hidden">
  <div class="row"><div class="col-md-6"><div class="profile Doc1">
    <div class="col-md-4">
      <div class="propic">
        <img src="http://docvisits.com/beta/service/public/z_uploads/doctor/small/1456471033-7559.png">
      </div>
      <div class="circle"><p>1</p></div>


      <span class="rating">
        <input class="rating-input" id="rating-input-1-5" name="rating-input-1" type="radio">
        <label for="rating-input-1-5" class="rating-star"></label>
        <input class="rating-input" id="rating-input-1-4" name="rating-input-1" type="radio">
        <label for="rating-input-1-4" class="rating-star"></label>
        <input class="rating-input" id="rating-input-1-3" name="rating-input-1" type="radio">
        <label for="rating-input-1-3" class="rating-star"></label>
        <input class="rating-input" id="rating-input-1-2" name="rating-input-1" type="radio">
        <label for="rating-input-1-2" class="rating-star"></label>
        <input class="rating-input" id="rating-input-1-1" name="rating-input-1" type="radio">
        <label for="rating-input-1-1" class="rating-star"></label>
      </span>
    </div>
    <div class="col-md-8">
     <div class="name">
       <h3>DOC&nbsp;Past</h3>
     </div>
     <div class="prodt">4/32 Sterlling Height, MI 30342<br>48086
     </div>
     <div class="row"></div>
     <div class="viewpro">
       <p><a href="javascript:void(0);" data-toggle="modal" class="dr_dcprofile" targets="1">View Profile</a></p>
     </div>
     <div class="book">
       <p><a href="javascript:void(0);" data-toggle="modal" class="dr_bkonline" targets="1">Book Online</a></p>
     </div>
   </div>

   <div class="row"> 
    <div class="col-md-12">
      <div class="text">
        <p>Average Rating
         Read reviews
         Book Online
         Practice Name

         Neil Rosenthal, MD

         Specialties

         ...
       </p>
     </div>
   </div>
 </div>
</div></div><div class="col-md-6"><div class="date-full"><div class="date"><ul class="hri01"><li class="active  appointDate" id="1_Sat 2017-07-08_09:00 AM"><div class="sch-slot" id="2017-07-08"> 09:00 AM</div></li><li class="active  appointDate" id="1_Sat 2017-07-08_09:15 AM"><div class="sch-slot" id="2017-07-08"> 09:15 AM</div></li><li class="disabled  "> <div class="sch-slot">Break </div></li><li class="disabled  "> <div class="sch-slot">Break </div></li><li class="bottomBorder active moreClk1 more  sss" value="1"> <div class="sch-slotex">
More
</div> </li><li class="disabled hiddens show1 "> <div class="sch-slot">Break </div></li><li class="disabled hiddens show1 "> <div class="sch-slot">Break </div></li><li class="disabled hiddens show1 "> <div class="sch-slot">Break </div></li><li class="disabled hiddens show1 "> <div class="sch-slot">Break </div></li><li class="active hiddens show1 appointDate" id="1_Sat 2017-07-08_11:15 AM"><div class="sch-slot" id="2017-07-08"> 11:15 AM</div></li><li class="active hiddens show1 appointDate" id="1_Sat 2017-07-08_11:30 AM"><div class="sch-slot" id="2017-07-08"> 11:30 AM</div></li><li class="active hiddens show1 appointDate" id="1_Sat 2017-07-08_11:45 AM"><div class="sch-slot" id="2017-07-08"> 11:45 AM</div></li><li class="active hiddens show1 appointDate" id="1_Sat 2017-07-08_12:00 PM"><div class="sch-slot" id="2017-07-08"> 12:00 PM</div></li><li class="active hiddens show1 appointDate" id="1_Sat 2017-07-08_12:15 PM"><div class="sch-slot" id="2017-07-08"> 12:15 PM</div></li><li class="active hiddens show1 appointDate" id="1_Sat 2017-07-08_12:30 PM"><div class="sch-slot" id="2017-07-08"> 12:30 PM</div></li><li class="active hiddens show1 appointDate" id="1_Sat 2017-07-08_12:45 PM"><div class="sch-slot" id="2017-07-08"> 12:45 PM</div></li><li class="active hiddens show1 appointDate" id="1_Sat 2017-07-08_13:00 PM"><div class="sch-slot" id="2017-07-08"> 13:00 PM</div></li><li class="active hiddens show1 appointDate" id="1_Sat 2017-07-08_13:15 PM"><div class="sch-slot" id="2017-07-08"> 13:15 PM</div></li><li class="active hiddens show1 appointDate" id="1_Sat 2017-07-08_13:30 PM"><div class="sch-slot" id="2017-07-08"> 13:30 PM</div></li><li class="active hiddens show1 appointDate" id="1_Sat 2017-07-08_13:45 PM"><div class="sch-slot" id="2017-07-08"> 13:45 PM</div></li><li class="last active less hiddens show1 sss1" value="1"> <div class="sch-slotex">Less </div></li></ul></div><div class="date"><ul class="hri11"><li class="active  appointDate" id="1_Sun 2017-07-08_09:00 AM"><div class="sch-slot" id="2017-07-08"> 09:00 AM</div></li><li class="active  appointDate" id="1_Sun 2017-07-08_09:15 AM"><div class="sch-slot" id="2017-07-08"> 09:15 AM</div></li><li class="disabled  "> <div class="sch-slot">Break </div></li><li class="disabled  "> <div class="sch-slot">Break </div></li><li class="bottomBorder active moreClk1 more  sss" value="1"> <div class="sch-slotex">
More
</div> </li><li class="disabled hiddens show1 "> <div class="sch-slot">Break </div></li><li class="disabled hiddens show1 "> <div class="sch-slot">Break </div></li><li class="disabled hiddens show1 "> <div class="sch-slot">Break </div></li><li class="disabled hiddens show1 "> <div class="sch-slot">Break </div></li><li class="active hiddens show1 appointDate" id="1_Sun 2017-07-08_11:15 AM"><div class="sch-slot" id="2017-07-08"> 11:15 AM</div></li><li class="active hiddens show1 appointDate" id="1_Sun 2017-07-08_11:30 AM"><div class="sch-slot" id="2017-07-08"> 11:30 AM</div></li><li class="active hiddens show1 appointDate" id="1_Sun 2017-07-08_11:45 AM"><div class="sch-slot" id="2017-07-08"> 11:45 AM</div></li><li class="disabled hiddens show1 "> <div class="sch-slot">Break </div></li><li class="disabled hiddens show1 "> <div class="sch-slot">Break </div></li><li class="disabled hiddens show1 "> <div class="sch-slot">Break </div></li><li class="disabled hiddens show1 "> <div class="sch-slot">Break </div></li><li class="disabled hiddens show1 "> <div class="sch-slot">Break </div></li><li class="disabled hiddens show1 "> <div class="sch-slot">Break </div></li><li class="disabled hiddens show1 "> <div class="sch-slot">Break </div></li><li class="active hiddens show1 appointDate" id="1_Sun 2017-07-08_13:45 PM"><div class="sch-slot" id="2017-07-08"> 13:45 PM</div></li><li class="active hiddens show1 appointDate" id="1_Sun 2017-07-08_14:00 PM"><div class="sch-slot" id="2017-07-08"> 14:00 PM</div></li><li class="active hiddens show1 appointDate" id="1_Sun 2017-07-08_14:15 PM"><div class="sch-slot" id="2017-07-08"> 14:15 PM</div></li><li class="active hiddens show1 appointDate" id="1_Sun 2017-07-08_14:30 PM"><div class="sch-slot" id="2017-07-08"> 14:30 PM</div></li><li class="active hiddens show1 appointDate" id="1_Sun 2017-07-08_14:45 PM"><div class="sch-slot" id="2017-07-08"> 14:45 PM</div></li><li class="active hiddens show1 appointDate" id="1_Sun 2017-07-08_15:00 PM"><div class="sch-slot" id="2017-07-08"> 15:00 PM</div></li><li class="active hiddens show1 appointDate" id="1_Sun 2017-07-08_15:15 PM"><div class="sch-slot" id="2017-07-08"> 15:15 PM</div></li><li class="disabled hiddens show1 "> <div class="sch-slot">Break </div></li><li class="disabled hiddens show1 "> <div class="sch-slot">Break </div></li><li class="disabled hiddens show1 "> <div class="sch-slot">Break </div></li><li class="active hiddens show1 appointDate" id="1_Sun 2017-07-08_16:15 PM"><div class="sch-slot" id="2017-07-08"> 16:15 PM</div></li><li class="active hiddens show1 appointDate" id="1_Sun 2017-07-08_16:30 PM"><div class="sch-slot" id="2017-07-08"> 16:30 PM</div></li><li class="active hiddens show1 appointDate" id="1_Sun 2017-07-08_16:45 PM"><div class="sch-slot" id="2017-07-08"> 16:45 PM</div></li><li class="last active less hiddens show1 sss1" value="1"> <div class="sch-slotex">Less </div></li></ul></div><div class="date"><ul class="hri21"><li class="active  appointDate" id="1_Mon 2017-07-08_08:00 AM"><div class="sch-slot" id="2017-07-08"> 08:00 AM</div></li><li class="active  appointDate" id="1_Mon 2017-07-08_08:15 AM"><div class="sch-slot" id="2017-07-08"> 08:15 AM</div></li><li class="active  appointDate" id="1_Mon 2017-07-08_08:30 AM"><div class="sch-slot" id="2017-07-08"> 08:30 AM</div></li><li class="active  appointDate" id="1_Mon 2017-07-08_08:45 AM"><div class="sch-slot" id="2017-07-08"> 08:45 AM</div></li><li class="bottomBorder active moreClk1 more  sss" value="1"> <div class="sch-slotex">
More
</div> </li><li class="disabled hiddens show1 "> <div class="sch-slot">Break </div></li><li class="disabled hiddens show1 "> <div class="sch-slot">Break </div></li><li class="active hiddens show1 appointDate" id="1_Mon 2017-07-08_09:45 AM"><div class="sch-slot" id="2017-07-08"> 09:45 AM</div></li><li class="active hiddens show1 appointDate" id="1_Mon 2017-07-08_10:00 AM"><div class="sch-slot" id="2017-07-08"> 10:00 AM</div></li><li class="active hiddens show1 appointDate" id="1_Mon 2017-07-08_10:15 AM"><div class="sch-slot" id="2017-07-08"> 10:15 AM</div></li><li class="active hiddens show1 appointDate" id="1_Mon 2017-07-08_10:30 AM"><div class="sch-slot" id="2017-07-08"> 10:30 AM</div></li><li class="active hiddens show1 appointDate" id="1_Mon 2017-07-08_10:45 AM"><div class="sch-slot" id="2017-07-08"> 10:45 AM</div></li><li class="active hiddens show1 appointDate" id="1_Mon 2017-07-08_11:00 AM"><div class="sch-slot" id="2017-07-08"> 11:00 AM</div></li><li class="active hiddens show1 appointDate" id="1_Mon 2017-07-08_11:15 AM"><div class="sch-slot" id="2017-07-08"> 11:15 AM</div></li><li class="active hiddens show1 appointDate" id="1_Mon 2017-07-08_11:30 AM"><div class="sch-slot" id="2017-07-08"> 11:30 AM</div></li><li class="active hiddens show1 appointDate" id="1_Mon 2017-07-08_11:45 AM"><div class="sch-slot" id="2017-07-08"> 11:45 AM</div></li><li class="active hiddens show1 appointDate" id="1_Mon 2017-07-08_12:00 PM"><div class="sch-slot" id="2017-07-08"> 12:00 PM</div></li><li class="active hiddens show1 appointDate" id="1_Mon 2017-07-08_12:15 PM"><div class="sch-slot" id="2017-07-08"> 12:15 PM</div></li><li class="active hiddens show1 appointDate" id="1_Mon 2017-07-08_12:30 PM"><div class="sch-slot" id="2017-07-08"> 12:30 PM</div></li><li class="active hiddens show1 appointDate" id="1_Mon 2017-07-08_12:45 PM"><div class="sch-slot" id="2017-07-08"> 12:45 PM</div></li><li class="last active less hiddens show1 sss1" value="1"> <div class="sch-slotex">Less </div></li></ul></div></div></div></div>
</div></div></div>
</div>
</div>
<div class='row' id="pagination_area">   </div>
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
</div>
<!-- <div class="dr_pfl_outr" id="searchLoading" style="display:none;z-index:100;">
   <div class="dr_pfl_outr_load"></div>
 </div> -->
</main>
<?php include("service/ui/common/footer.php"); ?>
