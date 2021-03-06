<?php
session_start();
require 'lib/Slim/Slim.php';

 // Allow from any origin

if (isset($_SERVER['HTTP_ORIGIN'])) {

	header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");

	header('Access-Control-Allow-Credentials: true');

       header('Access-Control-Max-Age: 86400');    // cache for 1 day

   }


    // Access-Control headers are received during OPTIONS requests

   if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {


   	if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))

   		header("Access-Control-Allow-Methods: GET, POST, OPTIONS");        


   	if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))

   		header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");


   	exit(0);

   }

   Slim\Slim::registerAutoloader();
   $app = new \Slim\Slim();

   $app->config(array(
   //'templates.path' => 'templates'
   	'templates.path' => 'service/ui/app'
   	));
   $app->get('/', function () use ($app) {
	//echo "hello word";exit;
   	authenticate_package($app);
   	include("conf/config.inc.php");
   	if(!$_SESSION['userID']){ 
   		$app->render('newUILandingPage.php');
   	} else {
   		if($_SESSION['userType']==1){
   			$app->render('doctor-profile.php');
   		}
   		if($_SESSION['userType']==2){
   			$app->render('patient-profile.php');
   		}
   	}
   });
   $app->get('/newUI', function () use ($app) {
	//echo "hello word";exit;
   	authenticate_package($app);
   	include("conf/config.inc.php"); 
   	$app->render('newUILandingPage.php');
   });
   $app->get('/new', function () use ($app) {
	//echo "hello word";exit;
   	authenticate_package($app);
   	include("conf/config.inc.php"); 
   	$app->render('newlandingpage.php');
   });

   $app->get('/index_page', function () use ($app) {
	//echo "hello word";exit;
   	authenticate_package($app);
   	include("conf/config.inc.php"); 
   	$app->render('new_landing_page.php');
   }); 
   $app->get('/admin', function () use ($app) {
	//echo "hello word";exit;
   	include("conf/config.inc.php"); 
   	if($_SESSION['userType']==3){
   		$app->redirect(WEB_ROOT.'index.php/admin/action?type=admin_details');
   	}else{
   		$app->render('admin/admin_signin.php');
   	}
   	
   });

// $app->get('/admin/dashboard', function () use ($app) {
// 	 include("conf/config.inc.php");
// 	 if($_SESSION['userType']==3){
// 	 $app->render('admin/index.php');
// 	}else{
// 		$app->redirect(WEB_ROOT.'index.php/admin');
// 	}
// });
/*$app->get('/admin/data', function () use ($app) {
	 include("conf/config.inc.php");
	 $app->render('admin/data.php');
	});*/

	$app->get('/admin/doc_appoinment', function () use ($app) {
		include("conf/config.inc.php");
		if($_SESSION['userType']==3){
			$app->render('admin/doc_appoinment.php');
		}else{
			$app->redirect(WEB_ROOT.'index.php/admin');
		}
		
	});
	$app->get('/admin/doctor_insurance', function () use ($app) {
		include("conf/config.inc.php");
		if($_SESSION['userType']==3){
			$app->render('admin/doctor_insurance.php');
		}else{
			$app->redirect(WEB_ROOT.'index.php/admin');
		}
		
	});

	$app->get('/admin/doctor_languages', function () use ($app) {
		include("conf/config.inc.php");
		if($_SESSION['userType']==3){
			$app->render('admin/doctor_languages.php');
		}else{
			$app->redirect(WEB_ROOT.'index.php/admin');
		}
		
	});

	$app->get('/admin/doctor_speciality', function () use ($app) {
		include("conf/config.inc.php");
		if($_SESSION['userType']==3){
			$app->render('admin/doctor_speciality.php');
		}else{
			$app->redirect(WEB_ROOT.'index.php/admin');
		}
		
	});
	$app->get('/admin/gendertypes', function () use ($app) {
		include("conf/config.inc.php");
		if($_SESSION['userType']==3){
			$app->render('admin/gendertypes.php');
		}else{
			$app->redirect(WEB_ROOT.'index.php/admin');
		}
		
	});
	$app->get('/verify_account/:secretKey/:mail', function ($secretKey,$mail) use ($app) {
		$data['secret_key'] = $secretKey;
		$data['mail'] = $mail;
		$app->render('verify_account.php',$data);
	});
	$app->post('/act_verify_mail', function () use ($app) {
		$request	= \Slim\Slim::getInstance()->request();
		$postData =  $request->post();
		$app->render('act_verify_mail.php',$postData);
	});
	$app->get('/admin/illness', function () use ($app) {
		include("conf/config.inc.php");
		if($_SESSION['userType']==3){
			$app->render('admin/illness.php');
		}else{
			$app->redirect(WEB_ROOT.'index.php/admin');
		}
		
	});

	$app->get('/admin/insurance', function () use ($app) {
		include("conf/config.inc.php");
		if($_SESSION['userType']==3){
			$app->render('admin/insurance.php');
		}else{
			$app->redirect(WEB_ROOT.'index.php/admin');
		}
		
	});
	$app->get('/admin/languages', function () use ($app) {
		include("conf/config.inc.php");
		if($_SESSION['userType']==3){
			$app->render('admin/languages.php');
		}else{
			$app->redirect(WEB_ROOT.'index.php/admin');
		}
		
	});
	$app->get('/admin/location', function () use ($app) {
		include("conf/config.inc.php");
		if($_SESSION['userType']==3){
			$app->render('admin/location.php');
		}else{
			$app->redirect(WEB_ROOT.'index.php/admin');
		}
		
	});
	$app->get('/admin/maritalstatus', function () use ($app) {
		include("conf/config.inc.php");
		if($_SESSION['userType']==3){
			$app->render('admin/maritalstatus.php');
		}else{
			$app->redirect(WEB_ROOT.'index.php/admin');
		}
		
	});
	$app->get('/admin/ratings', function () use ($app) {
		include("conf/config.inc.php");
		if($_SESSION['userType']==3){
			$app->render('admin/ratings.php');
		}else{
			$app->redirect(WEB_ROOT.'index.php/admin');
		}
		
	});
	$app->get('/admin/speciality', function () use ($app) {
		include("conf/config.inc.php");
		if($_SESSION['userType']==3){
			$app->render('admin/speciality.php');
		}else{
			$app->redirect(WEB_ROOT.'index.php/admin');
		}
		
	});
	$app->get('/admin/usertypes', function () use ($app) {
		include("conf/config.inc.php");
		if($_SESSION['userType']==3){
			$app->render('admin/usertypes.php');
		}else{
			$app->redirect(WEB_ROOT.'index.php/admin');
		}
		
	});
	$app->get('/admin/userimages', function () use ($app) {
		include("conf/config.inc.php");
		if($_SESSION['userType']==3){
			$app->render('admin/userimages.php');
		}else{
			$app->redirect(WEB_ROOT.'index.php/admin');
		}
		
	});
	$app->get('/admin/users', function () use ($app) {
		include("conf/config.inc.php");
		if($_SESSION['userType']==3){
			$app->render('admin/users.php');
		}else{
			$app->redirect(WEB_ROOT.'index.php/admin');
		}
		
	});
	$app->get('/admin/user-server-response', function () use ($app) {
		include("conf/config.inc.php");
		$request	= \Slim\Slim::getInstance()->request();
		$postData =  $request->get();
		$fields=$postData['fields'];
		$type=$postData['type'];
		$disable_delete=$postData['disable_delete'];
		if($_SESSION['userType']==3){
			$scad->server_response($fields,$type,$disable_delete);
		}else{
			$app->redirect(WEB_ROOT.'index.php/admin');
		}
		
	});

	$app->get('/admin/user-server-response1', function () use ($app) {
		
		include("conf/config.inc.php");
		$request	= \Slim\Slim::getInstance()->request();
		$postData =  $request->get();
		$fields=$postData['fields'];
		$type=$postData['type'];
		$disable_delete=$postData['disable_delete'];
		if($_SESSION['userType']==3){
			$scad->server_response1($fields,$type,$disable_delete);
		}else{
			$app->redirect(WEB_ROOT.'index.php/admin');
		}
		
	});    

	$app->get('/admin/view', function () use ($app) {
		include("conf/config.inc.php");
		if($_SESSION['userType']==3){
			$app->render('admin/view.php');
		}else{
			$app->redirect(WEB_ROOT.'index.php/admin');
		}
		
	});
	$app->get('/admin/edit', function () use ($app) {
		include("conf/config.inc.php");
		if($_SESSION['userType']==3){
			$app->render('admin/edit.php');
		}else{
			$app->redirect(WEB_ROOT.'index.php/admin');
		}
		
	});
	$app->get('/admin/delete', function () use ($app) {
		include("conf/config.inc.php");
		$request	= \Slim\Slim::getInstance()->request();
		$postData =  $request->get();
		$table=base64_decode($postData['tb']);
		$where='id='.base64_decode($postData['id']).'';
		echo $scad->delete($table,$where);
		if(isset($postData['url'])){
			$app->redirect($postData['url']."&msg=true");		
		}
		
	});

	$app->get('/admin/user-update-response-test',function() use ($app){
		include("conf/config.inc.php");
		$request	= \Slim\Slim::getInstance()->request();
		$postData =  $request->get();
		$datas=$postData['datas'];
		$action=$postData['action'];
		$tb=$postData['tb'];
		parse_str($datas,$col_data);
		foreach ($col_data as $key => $value) {
			$col_data[$key]=str_replace("'","\'",$value);
		}
		
		if($action=='update'){
			$where='id='.$col_data['id'].'';
			$scad->update($tb,$col_data,$where);
		}else{
			$result = $scad->userDeatails($col_data['email'],$col_data['password']);
			if(isset($col_data['password'])){
				$col_data['password']=md5($col_data['password']);
			}
			if(empty($result)){
				echo $scad->insert($tb, $col_data);
			}else{echo '23';}
		}
	});


	$app->get('/admin/user-test', function () use ($app) {
		$request	= \Slim\Slim::getInstance()->request();
		$postData =  $request->get();
		print_r($postData);
	//$app->render('admin/act-list-options.php',$postData);
		
	});
	$app->get('/admin/check_options', function () use ($app) {
		$request	= \Slim\Slim::getInstance()->request();
		$postData =  $request->get();
		$app->render('admin/act-list-options.php',$postData);
		
	});

	$app->get('/admin/get_options', function () use ($app) {
		$request	= \Slim\Slim::getInstance()->request();
		$postData =  $request->get();
		$app->render('admin/act-get-options.php',$postData);
		
	});

	$app->get('/admin/get_single_options', function () use ($app) {
		include("conf/config.inc.php");
		$request	= \Slim\Slim::getInstance()->request();
		$postData =  $request->get();
		$result=$scad->get_td_field_data($postData['tb'],$postData['value'],$postData['f_name']);
		if($postData['value']!=0){
			echo $result[$postData['f_name']];
		}else{echo 'Not Specified';}
	//print_r($result);exit();
		
	});

	$app->get('/admin/action', function () use ($app) {
		include("conf/config.inc.php");
		if($_SESSION['userType']==3){
			$app->render('admin/list.php');
		}else{
			$app->redirect(WEB_ROOT.'index.php/admin');
		}
		
	});

	$app->get('/admin/schedule_calender', function () use ($app) {
		$request	= \Slim\Slim::getInstance()->request();
		$postData =  $request->get();
		$app->render('admin/calender_schedule.php',$postData);
		
	});

	$app->get('/admin/schedule_checkin', function () use ($app) {
		$request	= \Slim\Slim::getInstance()->request();
		$postData =  $request->get();
		$app->render('admin/checkin_popup.php',$postData);
		
	});
	$app->get('/admin/build_json', function () use ($app) {
		$request	= \Slim\Slim::getInstance()->request();
		$postData =  $request->get();
	//print_r($postData);	
		$row=''; $name='';
		foreach ($postData['f_data'] as $key => $value) {
		//print_r($value);
			if($name==$value['name'])
			{
				$row[$value['name']]=$row[$value['name']].",".$value['value'];
			}else{
				$row[$value['name']]=$value['value'];
			}
			$name=$value['name'];
		}
	//print_r($row);
		echo json_encode($row);
	});

	$app->get('/admin/build_json_data', function () use ($app) {
		include("conf/config.inc.php");
		$request	= \Slim\Slim::getInstance()->request();
		$postData =  $request->get();
		$value = $postData['f_data'];
		if(isJSON($value)){
			$arr_data=json_decode($value,true);
                        //json display
			if(count($arr_data) > 0){
				$data ='<dl class="dl-horizontal">';
				foreach ($arr_data as $key => $value1) {
					if(is_string($value1)){
						$_dis= (empty($value1)) ? "--" : $value1;
						$data .='<dt>'.$key.' :- </dt><dd>'.$_dis.'</dd>';
					}else{
						$_key= (is_string($key)) ? $key : $F_name." ".$key;
						$data .='<dt>'.$_key.' :- </dt><dd>';
						foreach ($value1 as $key1 => $value2) {
                        //$data .='<dt>'.$key1.'</dt><dd>'.$value2.'</dd>';
							$data .=$key1." : ".$value2.", ";
						}
						$data .='</dd>';
					}
				}
				$data .='</dl>';
			}
			echo $data;
		}
	});

// end of admin panel functions
	$app->post('/act-admin-signin', function () use ($app) {
		$request	= \Slim\Slim::getInstance()->request();
		$postData =  $request->post();
		$app->render('act-admin-signin.php',$postData);
	});	

	$app->get('/join', function () use ($app) {
		authenticate_package($app);
		include("conf/config.inc.php");
		$app->render('join.php');
	});
	$app->get('/join/patient_new', function () use ($app) {
		authenticate_package($app);
		include("conf/config.inc.php");
		$app->render('join-patient-new.php');
	});

	$app->get('/terms', function () use ($app) {
		authenticate_package($app);
		include("conf/config.inc.php");
		$app->render('terms.php');
	});

	$app->get('/mailtest', function () use ($app) {
		authenticate_package($app);
		include("conf/config.inc.php");
		$app->render('test_mail.php');
	});
	$app->post('/testmail', function () use ($app) {	
		authenticate_package($app);
		$request	= \Slim\Slim::getInstance()->request();
		$postData =  $request->post();
		$app->render('act_get_pdf_result.php',$postData); 
	});

	$app->get('/About', function () use ($app) {
		authenticate_package($app);
		include("conf/config.inc.php");
		$app->render('About.php');
	});
	$app->get('/Contact', function () use ($app) {
		authenticate_package($app);
		include("conf/config.inc.php");
		$app->render('Contact.php');
	});

	$app->get('/location', function () use ($app) {
		authenticate_package($app);
		include("conf/config.inc.php");
		$app->render('location.php');
	});

	$app->get('/insurance', function () use ($app) { 
		authenticate_package($app);
		include("conf/config.inc.php");
		$app->render('insurance.php'); 
	});


	$app->get('/Careers', function () use ($app) {
		authenticate_package($app);
		include("conf/config.inc.php");
		$app->render('Careers.php');
	});

	$app->get('/join/patient', function () use ($app) {
		authenticate_package($app);
		include("conf/config.inc.php");
		$app->render('join-patient.php');
	});
	$app->post('/pdf', function () use ($app) {	
		authenticate_package($app);
		$request	= \Slim\Slim::getInstance()->request();
		$postData =  $request->post();
		$app->render('act_get_pdf_result.php',$postData); 
	});

	$app->get('/pdf1/:dateCnt', function ($dateCnt) use ($app) {
		authenticate_package($app);
		include("conf/config.inc.php");
		$details = $scad->PdfDetails($dateCnt);
		$app->redirect(WEB_ROOT.'tcpdf/pdf/download_pdf.php?docID='.base64_encode(json_encode($details)));
	});

	$app->get('/checkin-registration/:dateCnt', function ($dateCnt) use ($app) {
		authenticate_package($app);
		$data['dateCnt'] = $dateCnt;
		$app->render('checkin_registration.php',$data);
	});
	$app->post('/checkin-registration-load-data', function () use ($app) {	
		authenticate_package($app);
		$request	= \Slim\Slim::getInstance()->request();
		$postData =  $request->post();
		$app->render('act_fetch_checkin_registration.php',$postData); 
	});
	$app->post('/save-checkin-registration', function () use ($app) {	
		authenticate_package($app);
		$request	= \Slim\Slim::getInstance()->request();
		$postData =  $request->post();
		$app->render('save-checkin-registration.php',$postData); 
	});
	$app->post('/save-checkin-queries', function () use ($app) {	
		authenticate_package($app);
		$request	= \Slim\Slim::getInstance()->request();
		$postData =  $request->post();
		$app->render('save-checkin-queries.php',$postData); 
	});
	$app->get('/pdf1', function () use ($app) {
		authenticate_package($app);
		include("conf/config.inc.php");
		$app->redirect(WEB_ROOT.'index.php/tcpdf/pdf/download_pdf.php');
	});
	$app->post('/patient-registration', function () use ($app) {	
		authenticate_package($app);
		$request	= \Slim\Slim::getInstance()->request();
		$postData =  $request->post();
		$app->render('act-join-patient.php',$postData); 
	});
	$app->post('/act-signin-book-doctor', function () use ($app) {	
		authenticate_package($app);
		$request	= \Slim\Slim::getInstance()->request();
		$postData =  $request->post();
		$app->render('act-join-patient-book-doctor.php',$postData); 
	});

	$app->get('/checkin-queries', function () use ($app) {
		authenticate_package($app);
		include("conf/config.inc.php");
		$app->render('checkin_queries.php');
	});
	$app->post('/act-delete-appoinments', function () use ($app) {	
		authenticate_package($app);
		$request	= \Slim\Slim::getInstance()->request();
		$postData =  $request->post();
		$app->render('act-delete-appoinments.php',$postData); 
	});
	$app->post('/checkin-queries-load-data', function () use ($app) {	
		authenticate_package($app);
		$request	= \Slim\Slim::getInstance()->request();
		$postData =  $request->post();
		$app->render('act_fetch_checkin_queries.php',$postData); 
	});

	$app->post('/checkin-insurence-load-data', function () use ($app) {	
		authenticate_package($app);
		$request	= \Slim\Slim::getInstance()->request();
		$postData =  $request->post();
		$app->render('act_fetch_checkin_insurence.php',$postData); 
	});
	$app->post('/search-Alpha', function () use ($app) {	
		authenticate_package($app);
		$request	= \Slim\Slim::getInstance()->request();
		$postData =  $request->post(); 
		$app->render('search-Alpha.php',$postData); 
	});
	$app->post('/save-checkin-insurence', function () use ($app) {	
		authenticate_package($app);
		$request	= \Slim\Slim::getInstance()->request();
		$postData =  $request->post();
		$app->render('save-checkin-insurence.php',$postData); 
	});

	$app->get('/save-checkin-details', function () use ($app) {
		authenticate_package($app);
		include("conf/config.inc.php");
		$app->render('save-checkin-details.php');
	});

	$app->get('/checkin-billing', function () use ($app) {
		authenticate_package($app);
		include("conf/config.inc.php");
		$app->render('checkin_billing.php');
	});

	$app->get('/join/learnmore', function () use ($app) {
		authenticate_package($app);
		include("conf/config.inc.php");
		$app->render('whyjoin.php');
	});
	$app->get('/join/doctor', function () use ($app) {
		authenticate_package($app);
		include("conf/config.inc.php");
		$app->render('join-doctor.php');
	});
	$app->post('/doctor-registration', function () use ($app) {	
		authenticate_package($app);
		$request	= \Slim\Slim::getInstance()->request();
		$postData =  $request->post();
		$app->render('act-join-doctor.php',$postData); 
	});
	$app->get('/doctor/profile', function () use ($app) {
	 //authenticate_package($app);
		authenticate($app);										  
		include("conf/config.inc.php");
		if($_SESSION['userType']==1){
			$app->render('doctor-profile.php');}
			else{
				$app->redirect(WEB_ROOT.'index.php/signin');}
			});
	$app->get('/patient/profile', function () use ($app) {
		authenticate_package($app);
		authenticate($app);
		include("conf/config.inc.php");
		if($_SESSION['userType']==2){
			$app->render('patient-profile.php');}
			else{
				$app->redirect(WEB_ROOT.'index.php/signin');}
			});
	$app->post('/patient/profile/ratingaction', function () use ($app) {	
		authenticate_package($app);
		$request	= \Slim\Slim::getInstance()->request();
		$postData =  $request->post(); 
		$app->render('rating-data.php',$postData); 
	});
	$app->post('/patient/profile/ratingpopup', function () use ($app) {	
		authenticate_package($app);
		$request	= \Slim\Slim::getInstance()->request();
		$postData =  $request->post(); 
		$app->render('rating-popup.php',$postData); 
	});
	$app->post('/rating_pagination', function () use ($app) {	
		authenticate_package($app);
		$request	= \Slim\Slim::getInstance()->request();
		$postData =  $request->post(); 
		$app->render('pagination_data.php',$postData); 
	});
	$app->get('/signin', function () use ($app) {
		authenticate_package($app);
		include("conf/config.inc.php");
		$app->render('signin.php');
	});
	$app->post('/act-signin', function () use ($app) {	
	//authenticate_package($app);
		$request	= \Slim\Slim::getInstance()->request();
		$postData =  $request->post();
		$app->render('act-signin.php',$postData); 
	});
	$app->post('/act-signin-doc', function () use ($app) {	
	//authenticate_package($app);
		$request	= \Slim\Slim::getInstance()->request();
		$postData =  $request->post();
		$app->render('act-signin-doc.php',$postData); 
	});
	$app->post('/load-data', function () use ($app) {	
		authenticate_package($app);
		$request	= \Slim\Slim::getInstance()->request();
		$postData =  $request->post();
	//$app->render('load_data.php',$postData); 
		$app->render('search-data.php',$postData);
	});
	$app->get('/load-data', function () use ($app) {	
		authenticate_package($app);
		$request	= \Slim\Slim::getInstance()->request();
		$postData =  $request->get();
	//$app->render('load_data.php',$postData); 
		$app->render('search-data-get.php',$postData);
	});
	$app->get('/doctor-registration', function () use ($app) {	
		authenticate_package($app);
		$request	= \Slim\Slim::getInstance()->request();
		$postData =  $request->post();
		$app->render('act-join-doctor-get.php',$postData); 
	}	);
	$app->get('/search(/:seachData)', function ($seachData=NULL) use ($app) {
		authenticate_package($app);
		$data['searchData'] = 	$seachData;	
		$app->render('search.php',$data);
	});

	$app->get('/book(/:doctorID)', function ($doctorID=NULL) use ($app) {
		authenticate_package($app);
		authenticate($app);													  
		include("conf/config.inc.php");
		$data['doctorID'] = 	$doctorID;	
		$app->render('book-appointment.php',$data);
	});

	$app->get('/view-prrofile(/:doctorID)', function ($doctorID=NULL) use ($app) {
		authenticate_package($app);
		include("conf/config.inc.php");
		$data['doctorID'] = $doctorID;
		$app->render('view-prrofile.php',$data);
	});

	$app->post('/advanced-search', function () use ($app) {	
		authenticate_package($app);
		$request	= \Slim\Slim::getInstance()->request();
		$searchData =  $request->post();
		$app->render('advanced-search.php',$searchData); 
	});

	$app->post('/act-confirm-apnt', function () use ($app) {	
		authenticate_package($app);
		$request	= \Slim\Slim::getInstance()->request();
		$searchData =  $request->post();
		$app->render('act-confirm-apnt.php',$searchData); 
	});

	$app->get('/calendar_events/(:doctorID)', function ($doctorID=NULL) use ($app) {
		authenticate_package($app);
		$request	= \Slim\Slim::getInstance()->request();
		$data['doctorID'] = $request->params('doctorID');
		$data['start'] = $request->params('start');
		$data['end'] = $request->params('end');
	//print_r($data);
		$app->render('calendar-events.php',$data);
	});



	$app->get('/past_appoinments', function () use ($app) {
		authenticate_package($app);
		include("conf/config.inc.php");
		if($_SESSION['userID']){
			$app->render('past_appoinments.php');}
			else{
				$app->redirect(WEB_ROOT.'index.php/signin');}
				
			});

	$app->get('/patient_settings', function () use ($app) {
		authenticate_package($app);
		include("conf/config.inc.php");
		$app->render('patient_settings.php');
		
	});

	$app->get('/appointment-detail/(:groupID)', function ($groupID=NULL) use ($app) {
	//$groupID AppointmentID-doctorID-patientID
		authenticate_package($app);
		$data['groupID'] = $groupID;
		$data['apntmnt'] = 1;
		$app->render('calendar-events.php',$data);
	});

	$app->get('/new-appointment', function () use ($app) {
	//$groupID AppointmentID-doctorID-patientID
	/*$data['groupID'] = $groupID;
	$data['apntmnt'] = 1;*/
	authenticate_package($app);
	$app->render('new-appointment.php');
});

	$app->post('/act-appointment/(:doctorID)', function ($doctorID) use ($app) {	
		authenticate_package($app);
		$request	= \Slim\Slim::getInstance()->request();
		$postData =  $request->post();
		$postData['doctorID'] = $doctorID;
		$app->render('act-appointment.php',$postData); 
	});
	$app->post('/appointment/change', function () use ($app) {	
		authenticate_package($app);
		include("conf/config.inc.php");											   
		$request	= \Slim\Slim::getInstance()->request();
		$postData =  $request->post();
		$app->render('act-appointment-change.php',$postData); 
	});

	$app->post('/doctor-update-details', function () use ($app) {	
		authenticate_package($app);
		$request	= \Slim\Slim::getInstance()->request();
		$postData =  $request->post();
		$app->render('act-update-doctor-details.php',$postData); 
	});


	$app->post('/doctor-update-details1', function () use ($app) {	
		authenticate_package($app);
		$request	= \Slim\Slim::getInstance()->request();
		$postData =  $request->post();
		$app->render('act-update-doctor-details1.php',$postData); 
	});

//write by arrun begin
	$app->post('/doctor-update-profile', function () use ($app) {	
		authenticate_package($app);
		$request	= \Slim\Slim::getInstance()->request();
		$postData =  $request->post();
		$app->render('act-update-doctor.php',$postData); 
	});

	$app->post('/patient-update-profile', function () use ($app) {	
		authenticate_package($app);
		$request	= \Slim\Slim::getInstance()->request();
		$postData =  $request->post();
		$app->render('act-update-patientr.php',$postData); 
	});

	$app->post('/doctor-update-pass', function () use ($app) {	
		authenticate_package($app);
		$request	= \Slim\Slim::getInstance()->request();
		$postData =  $request->post();
		$app->render('act-update-doctor-pas.php',$postData); 
	});
	$app->post('/doctor-file-list', function () use ($app) {	
		authenticate_package($app);
		$request	= \Slim\Slim::getInstance()->request();
		$postData =  $request->post();
		$app->render('act-doctor-file.php',$postData); 
	});
	$app->get('/doctor/profile/settings', function () use ($app) {
		authenticate_package($app);
		authenticate($app);										  
		include("conf/config.inc.php");
		if($_SESSION['userType']==1){
			$app->render('doctor-profile-settings.php');}
			else{
				$app->redirect(WEB_ROOT.'index.php/signin');}
			});
	$app->post('/doctor/profile/upload', function () use ($app) {
		authenticate_package($app);
		include("conf/config.inc.php");
		if($_SESSION['userType']==1){
			$app->render('upload.php');}
			else{
				$app->redirect(WEB_ROOT.'index.php/signin');}
	 //$app->render('upload1.php');
	 //print_r($upload_handler);
	/*$request	= \Slim\Slim::getInstance()->request();
	$postData =  $request->post();
	$app->render('act-signin.php',$postData); */
});
	$app->post('/multiple-marker', function () use ($app) {
		authenticate_package($app);
		include("conf/config.inc.php");
		$app->render('marker1.php');
	});
	$app->post('/multiple-marker-2', function () use ($app) {	
		authenticate_package($app);
		$request	= \Slim\Slim::getInstance()->request();
		$postData =  $request->post();
		$app->render('marker2.php',$postData); 
	});
	$app->post('/multiple-marker', function () use ($app) {	
		authenticate_package($app);
		$request	= \Slim\Slim::getInstance()->request();
		$postData =  $request->post();
		$app->render('marker1.php',$postData); 
	});



	$app->get('/searchBy-name', function () use ($app) {	
		authenticate_package($app);
		include("conf/config.inc.php");
		$app->render('searchBy-name.php'); 
	});


	$app->get('/Procedures', function () use ($app) {	
		authenticate_package($app);
		include("conf/config.inc.php");
		$app->render('Procedures.php'); 
	});

	$app->post('/search-Procedures', function () use ($app) {	
		authenticate_package($app);
		$request	= \Slim\Slim::getInstance()->request();
		$postData =  $request->post(); 
		$app->render('Procedures_data.php',$postData); 
	});

	$app->get('/Reviews', function () use ($app) { 
		authenticate_package($app);
		include("conf/config.inc.php");
		$app->render('Reviews.php'); 
	});

	$app->post('/search-Reviews', function () use ($app) { 
		authenticate_package($app);
		$request = \Slim\Slim::getInstance()->request();
		$postData =  $request->post(); 
		$app->render('Reviews_data.php',$postData); 
	});

	$app->get('/Languages', function () use ($app) { 
		authenticate_package($app);
		include("conf/config.inc.php");
		$app->render('Languages.php'); 
	});

	$app->post('/search-Languages', function () use ($app) { 
		authenticate_package($app);
		$request = \Slim\Slim::getInstance()->request();
		$postData =  $request->post(); 
		$app->render('Languages_data.php',$postData); 
	});

	$app->post('/search-insurance', function () use ($app) { 
		authenticate_package($app);
		$request = \Slim\Slim::getInstance()->request();
		$postData =  $request->post(); 
		$app->render('insurance_data.php',$postData); 
	});

	$app->post('/search-location', function () use ($app) { 
		authenticate_package($app);
		$request = \Slim\Slim::getInstance()->request();
		$postData =  $request->post(); 
		$app->render('location_data.php',$postData); 
	});

	$app->post('/updateDrWorkTime', function () use ($app) {	
		authenticate_package($app);
		$request	= \Slim\Slim::getInstance()->request();
		$postData =  $request->post();
	//print_r($postData);
		$app->render('act-update-doctor-work-time.php',$postData); 
	});

	$app->post('/updateDrWorkTime1', function () use ($app) {	
		authenticate_package($app);
		$request	= \Slim\Slim::getInstance()->request();
		$postData =  $request->post();
	//print_r($postData);
		$app->render('admin/act-update-doctor-work-time.php',$postData); 
	});

	$app->post('/updateDrBrkTime', function () use ($app) {	
		authenticate_package($app);
		$request	= \Slim\Slim::getInstance()->request();
		$postData =  $request->post();
	//print_r($postData);
		$app->render('act-update-doctor-break-time.php',$postData); 
	});

	$app->post('/updateDrBrkTime1', function () use ($app) {	
		authenticate_package($app);
		$request	= \Slim\Slim::getInstance()->request();
		$postData =  $request->post();
	//print_r($postData);
		$app->render('admin/act-update-doctor-break-time.php',$postData); 
	});

	$app->post('/updateDrvecationTime', function () use ($app) {	
		authenticate_package($app);
		$request	= \Slim\Slim::getInstance()->request();
		$postData =  $request->post();
	//print_r($postData);
		$app->render('act-update-doctor-vecation-time.php',$postData); 
	});


	$app->post('/updateDrvecationTime1', function () use ($app) {	
		authenticate_package($app);
		$request	= \Slim\Slim::getInstance()->request();
		$postData =  $request->post();
	//print_r($postData);
		$app->render('admin/act-update-doctor-vecation-time.php',$postData); 
	});

	$app->post('/service/public/z_uploads/(:url)', function () use ($app) {
		authenticate_package($app);
		include("conf/config.inc.php");
		$app->render('upload.php');
	//print_r($upload_handler);
	/*$request	= \Slim\Slim::getInstance()->request();
	$postData =  $request->post();
	$app->render('act-signin.php',$postData); */
});

	$app->get('/doctor-set-profile-picture/:imgID', function ($imgID=NULL) use ($app) {
 // $request = \Slim\Slim::getInstance()->request();
		authenticate_package($app);
		$data['imgID'] = $imgID;
 //echo $imgID;
 //print_r($request->params());
		$app->render('act-set-doc-profile-pic.php',$data);
	});

//write by arun end
	$app->get('/calendar/test', function () use ($app) {
		authenticate_package($app);
		include("conf/config.inc.php");
		$app->render('demo-calendar.php');
	});

	$app->get('/single_minicalendar/:dateCnt/:allDoctors/:status', function ($dateCnt,$allDoctors,$status) use ($app) {
		authenticate_package($app);
		$data['dateCnt'] = $dateCnt;
		$data['status'] = $status;
		$data['allDoctors'] = $allDoctors;
		$app->render('single_calender.php',$data);
	});
	$app->get('/minicalendar/:dateCnt/:allDoctors/:status', function ($dateCnt,$allDoctors,$status) use ($app) {
		authenticate_package($app);
		$data['dateCnt'] = $dateCnt;
		$data['status'] = $status;
		$data['allDoctors'] = $allDoctors;
		$app->render('minicalendar-new.php',$data);
	});

	$app->get('/minicalendar-new/:dateCnt/:allDoctors/:status', function ($dateCnt,$allDoctors,$status) use ($app) {
		authenticate_package($app);
		$data['dateCnt'] = $dateCnt;
		$data['status'] = $status;
		$data['allDoctors'] = $allDoctors;
		$app->render('minicalendar-new.php',$data);
	});

	$app->get('/appointment/fixing/:apntDatetime/:ins/:subins/:search', function ($apntDatetime,$ins,$subins,$search) use ($app) {
		authenticate_package($app);
		$data['apntDetails'] = $apntDatetime;	
		$data['ins'] = $ins;	
		$data['subins'] = $subins;	
		$data['search'] = $search;	
		$app->render('schedule-appointment.php',$data);
	});

	$app->get('/calendar-settings', function () use ($app) {
		authenticate_package($app);
		$app->render('calendar-settings.php');
	});

	$app->get('/bookonline/:doctorID', function ($doctorID) use ($app) {
		authenticate_package($app);
		$data['doctorID'] = $doctorID;						 
		$app->render('bookonline.php',$data);
	});

	$app->get('/visit-reason/(:specialityID)', function ($specialityID=NULL) use ($app) {
		authenticate_package($app);
		include("conf/config.inc.php");
	 //$condition = '`speciality_id`="'.$specialityID.'"';
		$scad->listbox('illness','id','name',$condition=NULL,'`name` ASC',$selected=NULL);
	});


	$app->get('/test', function () use ($app) {
		authenticate_package($app);
		include("conf/config.inc.php");
		/*$timeFrame = array(array("1"=>array("start"=>"10:00:00","end"=>"11:00:00")),array("5"=>array("start"=>"01:00:00","end"=>"03:00:00")),array("6"=>array("start"=>"10:00:00","end"=>"12:00:00")),array("7"=>array("start"=>"18:00:00","end"=>"23:00:00")));*/
		$timeFrame["1"] = array(array("start"=>"10:00:00","end"=>"11:00:00"),array("start"=>"01:00:00","end"=>"03:00:00"),array("start"=>"09:00:00","end"=>"18:00:00"));
		$timeFrame["5"] = array(array("start"=>"10:00:00","end"=>"11:00:00"),array("start"=>"01:00:00","end"=>"03:00:00"),array("start"=>"09:00:00","end"=>"18:00:00"));
		$timeFrame["6"] = array(array("start"=>"10:00:00","end"=>"11:00:00"),array("start"=>"01:00:00","end"=>"03:00:00"),array("start"=>"09:00:00","end"=>"18:00:00"));
		$timeFrame["7"] = array(array("start"=>"10:00:00","end"=>"11:00:00"),array("start"=>"01:00:00","end"=>"03:00:00"),array("start"=>"09:00:00","end"=>"18:00:00"));
		echo '<pre>';
		print_r($timeFrame);
	 /*$toMail  = 'aneesh@techware.co.in';
	 $toName  = 'Aneesh';
	 $subject = 'Welcome to Scheduleadoc!';
	 $mailTemplate = '<b>Congragulations....!</b>';
	 $scad->mailSending($toMail,$toName,$subject,$mailTemplate);*/
	});
	$app->get('/sub-insurace-plans/:inuranceID', function ($inuranceID) use ($app) {
		authenticate_package($app);
		include("conf/config.inc.php");
		$scad->listbox('insurance','id','name','`parent_id`='.$inuranceID,'`name` ASC',$selected=NULL);
	});

	$app->get('/sub-insurace-plans/:inuranceID', function ($inuranceID) use ($app) {
		authenticate_package($app);
		include("conf/config.inc.php");
		$scad->listbox('insurance','id','name','`parent_id`='.$inuranceID,'`name` ASC',$selected=NULL);
	});

	$app->get('/pdf', function () use ($app) {
		authenticate_package($app);
		include("conf/config.inc.php");
		$app->redirect(WEB_ROOT.'index.php/tcpdf/examples/example_048.php');
	});


	$app->get('/signout', function () use ($app) {
		include("conf/config.inc.php");
		session_destroy();
		$app->redirect(WEB_ROOT.'index.php');
	});


	$app->notFound(function() use($app) { 
  //authenticate_package($app);
		$app->render('error.php');
	});

	function authenticate($app){
		include("conf/config.inc.php");
		if (!isset($_SESSION['userID'])) {
			$app->redirect(WEB_ROOT.'index.php/signin');	
		}
	}

//payment package
	$app->get('/payment_package', function () use ($app) {
		include("conf/config.inc.php");
		$data['packages'] = $scad->getAllData('packages');
		$data['package_settings'] = $scad->getAllData('payment_gateway');
	//print_r($data);exit;
		$app->render('paypal/products.php',$data);
	});

	$app->get('/payment_success', function () use ($app) {
		include("conf/config.inc.php");
		$data['payment'] = $_GET;
		$app->render('paypal/success.php',$data);
	});
	$app->get('/payment_cancel', function () use ($app) {
		include("conf/config.inc.php");
		print_r($_GET);
	});


	function authenticate_package($app){
		include("conf/config.inc.php");
	//if (isset($_COOKIE['check_pending_user'])) {
	//$app->redirect(WEB_ROOT.'index.php/payment_package');	
	//}
	}
//payment package
	$app->run();
	?>


