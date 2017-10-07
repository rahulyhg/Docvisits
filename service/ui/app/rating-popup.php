<?php
include("./conf/config.inc.php");
//$patientData = $_POST;
$page     = $_POST['sum'];
$value = $scad->getUserDetails($page);
$img = $scad->getDocProImg($page);
$spcl = $scad->getDocSpeciality($page);
if(!empty($img[name])){
	$imageName = $img[name];
}
else{
  $imageName = 'no_image.jpg';
}
?>
<?php
$rtng=$scad->userting($_REQUEST['sum'],$_SESSION['userID']);
?>

<div class="modal-dialog modal-lg">
  <div class="modal-content" style="float: left;">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title">Rating Details</h4>
    </div>
    <div class="col-md-7 col-sm-7 col-xs-12">
      <div class="row">
        <form> 
          <input type="hidden" class="dctid" value="<?php echo $page;   ?> "  id="dctid"> 
          <div class="over">
           <div class="inputwrap">
             <div class="inputwrap">
              <fieldset class="popup-rating one">
                <legend>Over all Rating</legend>
                <input type="radio" id="star5" name="rating" value="5" <?php if($rtng['overall']==5){echo "checked ";}  ?>/><label for="star5" title="Rocks!"><span>&#9733</span></label>
                <input type="radio" id="star4" name="rating" value="4" <?php if($rtng['overall']==4){echo "checked ";}  ?>/><label for="star4" title="Pretty good"><span>&#9733</span></label>
                <input type="radio" id="star3" name="rating" value="3" <?php if($rtng['overall']==3){echo "checked ";}  ?>/><label for="star3" title="Meh"><span>&#9733</span></label>
                <input type="radio" id="star2" name="rating" value="2" <?php if($rtng['overall']==2){echo "checked ";}  ?>/><label for="star2" title="Kinda bad"><span>&#9733</span></label>
                <input type="radio" id="star1" name="rating" value="1" <?php if($rtng['overall']==1){echo "checked ";}  ?>/><label for="star1" title="Sucks big time"><span>&#9733</span></label>
              </fieldset>
              <fieldset class="popup-rating two">
                <legend>Explains condition(s) well</legend>
                <input type="radio" id="star5-1" name="rating2" value="5" <?php if($rtng['beside']==5){echo "checked ";}  ?>/><label for="star5-1" title="Rocks!"><span>&#9733</span></label>
                <input type="radio" id="star4-1" name="rating2" value="4" <?php if($rtng['beside']==4){echo "checked ";}  ?>/><label for="star4-1" title="Pretty good"><span>&#9733</span></label>
                <input type="radio" id="star3-1" name="rating2" value="3" <?php if($rtng['beside']==3){echo "checked ";}  ?>/><label for="star3-1" title="Meh"><span>&#9733</span></label>
                <input type="radio" id="star2-1" name="rating2" value="2" <?php if($rtng['beside']==2){echo "checked ";}  ?>/><label for="star2-1" title="Kinda bad"><span>&#9733</span></label>
                <input type="radio" id="star1-1" name="rating2" value="1" <?php if($rtng['beside']==1){echo "checked ";}  ?>/><label for="star1-1" title="Sucks big time"><span>&#9733</span></label>
              </fieldset>
			  <fieldset class="popup-rating three">
                <legend>Answers Questions</legend>
                <input type="radio" id="star5-2" name="rating4" value="5" <?php if($rtng['ansque']==5){echo "checked ";}  ?>/><label for="star5-2" title="Rocks!"><span>&#9733</span></label>
                <input type="radio" id="star4-2" name="rating4" value="4" <?php if($rtng['ansque']==4){echo "checked ";}  ?>/><label for="star4-2" title="Pretty good"><span>&#9733</span></label>
                <input type="radio" id="star3-2" name="rating4" value="3" <?php if($rtng['ansque']==3){echo "checked ";}  ?>/><label for="star3-2" title="Meh"><span>&#9733</span></label>
                <input type="radio" id="star2-2" name="rating4" value="2" <?php if($rtng['ansque']==2){echo "checked ";}  ?>/><label for="star2-2" title="Kinda bad"><span>&#9733</span></label>
                <input type="radio" id="star1-2" name="rating4" value="1" <?php if($rtng['ansque']==1){echo "checked ";}  ?>/><label for="star1-2" title="Sucks big time"><span>&#9733</span></label>
              </fieldset>
              
              <fieldset class="popup-rating three">
                <legend>Spend time</legend>
                <input type="radio" id="star5-3" name="rating5" value="5" <?php if($rtng['spend']==5){echo "checked ";}  ?>/><label for="star5-3" title="Rocks!"><span>&#9733</span></label>
                <input type="radio" id="star4-3" name="rating5" value="4" <?php if($rtng['spend']==4){echo "checked ";}  ?>/><label for="star4-3" title="Pretty good"><span>&#9733</span></label>
                <input type="radio" id="star3-3" name="rating5" value="3" <?php if($rtng['spend']==3){echo "checked ";}  ?>/><label for="star3-3" title="Meh"><span>&#9733</span></label>
                <input type="radio" id="star2-3" name="rating5" value="2" <?php if($rtng['spend']==2){echo "checked ";}  ?>/><label for="star2-3" title="Kinda bad"><span>&#9733</span></label>
                <input type="radio" id="star1-3" name="rating5" value="1" <?php if($rtng['spend']==1){echo "checked ";}  ?>/><label for="star1-3" title="Sucks big time"><span>&#9733</span></label>
              </fieldset>
              <fieldset class="popup-rating three">
                <legend>Office environment</legend>
                <input type="radio" id="star5-4" name="rating6" value="5" <?php if($rtng['office']==5){echo "checked ";}  ?>/><label for="star5-4" title="Rocks!"><span>&#9733</span></label>
                <input type="radio" id="star4-4" name="rating6" value="4" <?php if($rtng['office']==4){echo "checked ";}  ?>/><label for="star4-4" title="Pretty good"><span>&#9733</span></label>
                <input type="radio" id="star3-4" name="rating6" value="3" <?php if($rtng['office']==3){echo "checked ";}  ?>/><label for="star3-4" title="Meh"><span>&#9733</span></label>
                <input type="radio" id="star2-4" name="rating6" value="2" <?php if($rtng['office']==2){echo "checked ";}  ?>/><label for="star2-4" title="Kinda bad"><span>&#9733</span></label>
                <input type="radio" id="star1-4" name="rating6" value="1" <?php if($rtng['office']==1){echo "checked ";}  ?>/><label for="star1-4" title="Sucks big time"><span>&#9733</span></label>
              </fieldset>
              <fieldset class="popup-rating three">
                <legend>Staff friendliness</legend>
                <input type="radio" id="star5-5" name="rating7" value="5" <?php if($rtng['staff']==5){echo "checked ";}  ?>/><label for="star5-5" title="Rocks!"><span>&#9733</span></label>
                <input type="radio" id="star4-5" name="rating7" value="4" <?php if($rtng['staff']==4){echo "checked ";}  ?>/><label for="star4-5" title="Pretty good"><span>&#9733</span></label>
                <input type="radio" id="star3-5" name="rating7" value="3" <?php if($rtng['staff']==3){echo "checked ";}  ?>/><label for="star3-5" title="Meh"><span>&#9733</span></label>
                <input type="radio" id="star2-5" name="rating7" value="2" <?php if($rtng['staff']==2){echo "checked ";}  ?>/><label for="star2-5" title="Kinda bad"><span>&#9733</span></label>
                <input type="radio" id="star1-5" name="rating7" value="1" <?php if($rtng['staff']==1){echo "checked ";}  ?>/><label for="star1-5" title="Sucks big time"><span>&#9733</span></label>
              </fieldset>
              
              <fieldset class="popup-rating three">
                <legend>Wait Time</legend>
                <input type="radio" id="star5-6" name="rating3" value="5" <?php if($rtng['waiting']==5){echo "checked ";}  ?>/><label for="star5-6" title="Rocks!"><span>&#9733</span></label>
                <input type="radio" id="star4-6" name="rating3" value="4" <?php if($rtng['waiting']==4){echo "checked ";}  ?>/><label for="star4-6" title="Pretty good"><span>&#9733</span></label>
                <input type="radio" id="star3-6" name="rating3" value="3" <?php if($rtng['waiting']==3){echo "checked ";}  ?>/><label for="star3-6" title="Meh"><span>&#9733</span></label>
                <input type="radio" id="star2-6" name="rating3" value="2" <?php if($rtng['waiting']==2){echo "checked ";}  ?>/><label for="star2-6" title="Kinda bad"><span>&#9733</span></label>
                <input type="radio" id="star1-6" name="rating3" value="1" <?php if($rtng['waiting']==1){echo "checked ";}  ?>/><label for="star1-6" title="Sucks big time"><span>&#9733</span></label>
              </fieldset>
            </div>
            <div class="inputwrap">
              <label>Comments
                &nbsp;
                <br>
              </label>
              <textarea id="message" placeholder="Your Message to Us" cols="53" rows="3"><?php echo $rtng['message'];?></textarea>
            </div>
            <div style="width: 100%;margin:5px auto;"> 
				<input type="hidden" name="update" id="update" value="<?php if($rtng>0){echo '1';}else{echo '0';} ?>"/>
              <input style="border:none" type="button" value="submit" class="lg_btn submit"  id="submit">
            </div>
            <!--<div style="width: 100%;margin:5px auto;"> 
              <input style="border:none"  type="button" value="Cancel" class="lg_btn cancel" id="cancelRtg">
            </div>-->
          </div>
        </form>
      </div>
    </div>
	
  </div>
  <div class="col-md-5 col-sm-5 col-xs-12" style="border-left: 2px solid rgb(230, 230, 230);float: left;"> 
	
    <div class="dr_viw_clm2_rew">
    </div>
  </div>
</div>
