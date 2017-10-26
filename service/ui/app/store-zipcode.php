<?php
session_start();
include("./conf/config.inc.php");
$zip = $_POST['zip'];
$address = $_POST['userAddress'];
$_SESSION['zip'] = $zip;
$_SESSION['userAddress'] = $address;
//echo $_SESSION['zip'];
$docName = NULL;
$docSpeciality = NULL;
$insuranceSelect=NULL;
$subInsuranceSelect=NULL;
$srchReason=NULL;
$gender=NULL;   
$result1 = $scad->searchDoctor($docName,$docSpeciality, $zip, $insuranceSelect, $subInsuranceSelect,$srchReason,$gender);
if(count($result1)==0){
	$zip="48086";
	$result1 = $scad->searchDoctor($docName,$docSpeciality, $zip, $insuranceSelect, $subInsuranceSelect,$srchReason,$gender);
}
foreach ($result1 as $key => $value) {

	$cal_result=$scad->getUserDetails($value['doctorID']);
	if ($value['imageName']) {
		$docImage = $value['imageName'];
	} else {
		$docImage = 'no_image.jpg';
	}
	$userImg = WEB_ROOT . "service/public/z_uploads/doctor/small/" . $docImage;
	$docName = (!empty($value['firstname']) || !empty($value['lastname'])) ? $value['firstname']."&nbsp".$value['lastname'] : 'Not specified';
	$docAddress= (!empty($value['address']) || !empty($value['zipcode'])) ? $value['address'].'<br>'.$value['zipcode'] : 'Not Specified';
	$docPhone= (!empty($value['phone'])) ? $value['phone'] : 'Not Specified';
	$docRat=$scad->getrting($value['doctorID']);
	$len=count($rat);
	$rateval=0; 
	for($j=0;$j<$len;$j++){
		$rateval=$rateval+($rat[$j]['overall'] +$rat[$j]['beside'] +$rat[$j]['waiting'])/3  ;

	}
	?>
	
	<div class="item">
		<figure>
			<a href="#"><img src="<?php echo $userImg?>" alt="User"></a>
			<a data-view_type="v1" class="tg-like add-to-fav" data-wl_id="294" href="javascript:;"><i class="fa fa-heart"></i></a>                                                              <span class="tg-featuredtags">
			<a class="tg-featured" href="javascript:;">featured</a>
		</span>
		<span class="user-verified">
			<svg id="Icon" xmlns="http://www.w3.org/2000/svg" width="74.875" height="21" viewbox="0 0 74.875 21">
				<defs>
					<style>
						.cls-1 {
							fill: #10a64a;
						}

						.cls-2 {
							font-size: 16px;
							text-anchor: middle;
							font-family: FontAwesome;
							text-transform: uppercase;
						}

						.cls-2, .cls-3 {
							fill: #fff;
						}

						.cls-3 {
							font-size: 14.437px;
							font-family: Montserrat;
						}
					</style>
				</defs>
				<rect id="BG" class="cls-1" width="74.875" height="21" rx="3" ry="3" />
				<text id="_" data-name="" class="cls-2" transform="translate(14.829 14.99) scale(0.737 0.762)"></text>
				<text id="Verified" class="cls-3" transform="translate(22.787 15.191) scale(0.737 0.762)">Verified</text>
			</svg>

		</span>
	</figure>
	<div class="tg-contentbox">
		<h3><a href="<?php echo WEB_ROOT;?>index.php/view-prrofile/<?php echo $value['doctorID'];?>">
			<?php echo $docName?></a></h3>
			<div class="feature-rating">
				<span class="tg-stars star-rating">
					<span style="width:<?php echo ($rateval*20)?>"></span>				
				</span>
				<em><?php echo $rateval?><sub>/5</sub></em>
			</div>
			<address><?php echo $docAddress?></address>
			<div class="tg-phone"><i class="fa fa-phone"></i> <em><?php echo $docPhone?></em></div>
		</div>
	</div>
	<?php 
} 
?>