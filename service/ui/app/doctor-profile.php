<?php include("conf/config.inc.php");

function pr($arr){
  echo '<pre>';
  print_r($arr);
  echo '</pre>';
}
?>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Find a doctor | Docvisits</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="apple-touch-icon" href="apple-touch-icon.png">
<link rel="stylesheet" href="<?php echo WEB_ROOT?>service/public/newcss/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo WEB_ROOT?>service/public/newcss/normalize.css">
<link rel="stylesheet" href="<?php echo WEB_ROOT?>service/public/newcss/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo WEB_ROOT?>service/public/newcss/icomoon.css">
<link rel="stylesheet" href="<?php echo WEB_ROOT?>service/public/newcss/owl.theme.css">
<link rel="stylesheet" href="<?php echo WEB_ROOT?>service/public/newcss/owl.carousel.css">
<link rel="stylesheet" href="<?php echo WEB_ROOT?>service/public/newcss/prettyPhoto.css">
<link rel="stylesheet" href="<?php echo WEB_ROOT?>service/public/newcss/version-2.css">
<link rel="stylesheet" href="<?php echo WEB_ROOT?>service/public/newcss/typo.css">
<!--<link rel="stylesheet" href="<?php echo WEB_ROOT?>service/public/newcss/style.css">-->
<link rel="stylesheet" href="<?php echo WEB_ROOT?>service/public/newcss/transitions.css">
<link rel="stylesheet" href="<?php echo WEB_ROOT?>service/public/newcss/color.css">
<link rel="stylesheet" href="<?php echo WEB_ROOT?>service/public/newcss/responsive.css">
<script src="<?php echo WEB_ROOT?>service/public/newjs/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
<script src="<?php echo WEB_ROOT?>service/public/newjs/vendor/jquery-library.js"></script>


<script type='text/javascript' src='<?php echo WEB_ROOT?>service/public/js/jquery.min.js'></script>
<!--  <script type="text/javascript" src="<?php echo WEB_ROOT?>service/public/js/script.js"></script>-->
<script type='text/javascript' src='<?php echo WEB_ROOT?>service/public/js/jquery.bootpag.js'></script>


<script type='text/javascript' src='<?php echo WEB_ROOT?>service/public/js/slider/jquery.mobile.customized.min.js'></script>
<script type='text/javascript' src='<?php echo WEB_ROOT?>service/public/js/slider/jquery.easing.1.3.js'></script> 
<script type='text/javascript' src='<?php echo WEB_ROOT?>service/public/js/slider/camera.min.js'></script> 


<script type="text/javascript" src="<?php echo WEB_ROOT?>service/public/js/jquery.mousewheel.min.js"></script>
<script type="text/javascript" src="<?php echo WEB_ROOT?>service/public/js/jquery.touchSwipe.min.js"></script>
<script type="text/javascript" src='<?php echo WEB_ROOT;?>service/public/js/jquery.base64.min.js'></script>

<link rel="stylesheet" href="<?php echo WEB_ROOT?>service/public/css/BeatPicker.min.css"/>
<script src="<?php echo WEB_ROOT?>service/public/js/calander/BeatPicker.min.js"></script>

<link href="<?php echo WEB_ROOT?>service/public/css/css/newbookmydoc.css" rel="stylesheet" type="text/css">
<script src="<?php echo WEB_ROOT?>service/public/newjs/vendor/jquery-library.js"></script>
<script src="<?php echo WEB_ROOT?>service/public/newjs/vendor/bootstrap.min.js"></script>
<script src="<?php echo WEB_ROOT?>service/public/newjs/jquery-ui.js"></script>
<script src="<?php echo WEB_ROOT?>service/public/newjs/countdown.js"></script>
<script src="<?php echo WEB_ROOT?>service/public/newjs/jquery.nicescroll.js"></script>

<script src="<?php echo WEB_ROOT?>service/public/newjs/parallax.js"></script>
<script src="<?php echo WEB_ROOT?>service/public/newjs/prettyPhoto.js"></script>
<script src="<?php echo WEB_ROOT?>service/public/newjs/appear.js"></script>
<script src="<?php echo WEB_ROOT?>service/public/newjs/countTo.js"></script>
<script src="<?php echo WEB_ROOT?>service/public/newjs/slider.min.js"></script>
<script type="text/javascript" src='<?php echo WEB_ROOT;?>service/public/js/jquery.base64.min.js'></script>
<script type="text/javascript" src="<?php echo WEB_ROOT?>service/public/js/parsley.min.js"></script>
<script src="<?php echo WEB_ROOT?>conf/config.js"></script>

<link href="<?php echo WEB_ROOT?>service/public/css/css/tabcontent.css" rel="stylesheet" type="text/css">

<script src="<?php echo WEB_ROOT?>service/public/js/js/tabcontent.js"></script>
<script src='<?php echo WEB_ROOT;?>service/public/js/calander/doc-custom-calendar.js'></script>
<!--************************************
  Wrapper Start
  *************************************-->
  <div id="wrapper" class="tg-haslayout">
    <div class="row">
      <div style="width: 30%;float:left; border-bottom: 10px solid rgb(2, 184, 191); height: 0;">
      </div>
      <div style="width: 40%; float: left; border-bottom: 10px solid rgb(25, 144, 206); height: 0; ">
      </div>
      <div style="width: 30%; float: left; border-bottom: 10px solid rgb(7, 188, 131); height: 0; ">
      </div>
    </div>

    <!--************************************
    Header Start
    *************************************-->
    <header id="header" class="tg-haslayout">
      <div class="container">
        <div class="row">
          <div class="col-xs-3">
            <a class="logo" href="<?php echo WEB_ROOT?>index.php"><img src="<?php echo WEB_ROOT?>service/public/newimages/logo-new.png" alt="image description"></a>
          </div>
          <div class="col-xs-9">
            <nav id="tg-nav" class="tg-nav">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-navigation" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </div>
              <div class="collapse navbar-collapse" id="tg-navigation">
                <ul>
                 <?php if($_SESSION['userID']){
                  $url = ($_SESSION['userType'] == 1) ? WEB_ROOT.'index.php/doctor/profile' : WEB_ROOT.'index.php/patient/profile';
                  ?>
                  <li><a href="<?php echo $url;?>">Home</a></li>
                  <?php } else {
                    ?>
                    <li>
                      <a href="<?php echo WEB_ROOT?>index.php">Home</a>
                    </li>
                    <?php }?>
                    <li><a href="<?php echo WEB_ROOT;?>index.php/calendar-settings">Schedule</a></li>
                    <li><a href="<?php echo WEB_ROOT;?>index.php/doctor/profile/settings">My Profile</a></li>
                    <li><a href="<?php echo WEB_ROOT?>index.php/About">About Us</a></li>
                    <li><a href="#">Health Blog</a></li>
                    <?php if($_SESSION['userID']){ ?>
                    <li><a href="<?php echo WEB_ROOT?>index.php/signout">Logout</a></li>
                    <?php } ?>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </header>
<!--************************************
    Header End
    *************************************-->
    <meta charset='utf-8' />
    <input type="hidden" name="doctorID" id="doctorID" value="<?php echo $_SESSION['userID'];?>"  />
    <input type="hidden" name="patientID" id="patientID" value="<?php echo $_SESSION['userID'];?>"  />
    <input type="hidden" name="eventID" id="eventID" />
    <input type="hidden" name="newData" id="newData" />
    <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel = "stylesheet">
    <style>
      .hiddenEvent{display: none;}
      .fc-other-month .fc-day-number { display:none;}

      td.fc-other-month .fc-day-number {
       visibility: hidden;
     }
     .breaks{
       background: none repeat scroll 0 0 #ececec !important;
       border:1px solid #ececec !important;
       color:#000 !important;
     }
     .vecation{
       background: none repeat scroll 0 0 #ececec !important;
       border:1px solid #ececec !important;
       width:94px !important;
       color:#000 !important;
       z-index:99 !important;
     }

   </style>
   <link href='<?php echo WEB_ROOT;?>service/public/newcss/calendar/fullcalendar.min.css' rel='stylesheet' />
   <link href='<?php echo WEB_ROOT;?>service/public/newcss/calendar/fullcalendar.print.min.css' rel='stylesheet' media='print' />
   <script src='<?php echo WEB_ROOT;?>service/public/newjs/calendar/lib/moment.min.js'></script>
   
   <script src='<?php echo WEB_ROOT;?>service/public/newjs/calendar/fullcalendar.min.js'></script>
   <style type="text/css">  
    .customBreak  {background-color: #AEE4F9;color:#333;}     
    .customVacation  {background-color: #F5958E;color:#333;}
    .customRequest{background-color: rgb(25, 144, 206);}
    .customApproved{background-color: rgb(7, 188, 131);}
    .customCancelled { background-color:rgb(2, 184, 191);}
    .clndr_clr{  width:275px; height:30px;   top:35px; left:441px; position:relative; font-size:12px; font-family:roboto;    }

    .clndr_aprv{ width:80px; float:left; }
    .clndr_aprv1{ width:12px; height:12px; background:rgb(7, 188, 131); border:solid #3f8aaf 1px; float:left; margin:0 4px 0 0 ;  }
    .clndr_aprv2{ float:left; color:rgb(7, 188, 131); line-height:14px; }

    .clndr_pndg{ width:80px; float:left; }
    .clndr_pndg1{ width:12px; height:12px; background:rgb(25, 144, 206); border:solid #3f8aaf 1px; float:left; margin:0 4px 0 0 ;  }
    .clndr_pndg2{ float:left; color:rgb(25, 144, 206); line-height:14px; }


    .clndr_cncl{ width:80px; float:left; }
    .clndr_cncl1{ width:12px; height:12px; background:rgb(2, 184, 191); border:solid #3f8aaf 1px; float:left; margin:0 4px 0 0 ;  }
    .clndr_cncl2{ float:left; color:rgb(2, 184, 191); line-height:14px; }
    .fc-list-item{ background-color: transparent; }
    .fc-list-item-title{float: left;}
  </style>
  <script>

    $(document).ready(function() {
      var docId=$("#patientID").val();
      var date = new Date();
      var d = date.getDate();
      var m = date.getMonth();
      var y = date.getFullYear();
      var titles=["vacation","BreakTime"]
      var dateDis = new Date(y, m, d, 13, 0);
      var ytuyt = '';


      $('#calendar').fullCalendar({
        header: {
          left: 'prev,next today',
          center: 'title',
          right: 'month,agendaWeek,agendaDay,listDay'
        },
      // defaultDate: '2017-05-12',
      navLinks: true, // can click day/week names to navigate views
      selectable: true,
      selectHelper: true,
      defaultView:'listDay',
      allDaySlot: false,
      slotDuration: '00:15:00',
      firstDay: 1,      
      editable: true,
      minTime: "09:00:00",
      maxTime: "18:00:00",
      eventDurationEditable: true,
      eventStartEditable: true,
      intervalStart:dateDis,
      intervalEnd:dateDis+1,
      events: SITEURL+'calendar_events/?doctorID='+docId,
      annotations: ytuyt ,
      loading: function(bool) {
        if (bool) 
         $('#load').show();
       else 
         $('#load').hide();
       $('#statusBar').show();
     },
     select: function(start, end) {
      //alert(start);
      //alert(end);
      //alert("in select");
      var startTime=moment(start).format();
      var endTime=moment(end).format();
      //alert(startTime);
      //alert(endTime);
      var check = startTime;
        //var today = $.fullCalendar.formatDate(new Date(),'yyyy-MM-dd');
        var today=moment(new Date()).format('YYYY-MM-DD');

        if(check < today)
        {
        //$(".fc-mon").addClass("fc-state-disabled");
        alert("Cant add an event for the previuos date");// Previous Day. show message if you want otherwise do nothing.
        // So it will be unselectable
      }
      
      else
      {
       // alert("in else block");
       $("#saveAppnt").show();
        //alert( $("#bookModel"));
        $("#approveAppnt").hide();
        $("#Unapprove").hide();
        $("#deleteAppnt").hide();
        $("#bookModel").modal("show");
        $(".fc-content").css("z-index","2");
        $("#approvedHead").hide();        
        $("#pendingHead").hide();
        $("#defaultHead").show();
        $("#patientApnt-form")[0].reset();
        $("#pop_load").show();
        appointmentScheduling(startTime,endTime);
      }
        //alert(today);
        /*var title = prompt('Event Title:');
        var eventData;
        if (title) {
          eventData = {
            title: title,
            start: start,
            end: end
          };
            $('#calendar').fullCalendar('renderEvent', eventData, true); // stick? = true
          }
          $('#calendar').fullCalendar('unselect');*/
        },viewDisplay: function(view) {
            if (view.name == 'month'){ //just in month view mode 
                var d = view.calendar.getDate(); //choise the date for cell customize
                var cell = view.dateCell(d); //get the cell location for date
                var bodyCells = view.element.find('tbody').find('td');//get all cells from current calendar
                var _element = bodyCells[cell.row*view.getColCnt() + cell.col]; //get specific cell for the date
                //$(_element).css('background-color', 'red'); //customize the cell
              }
            },
            eventClick: function(calEvent, jsEvent, view) {
              //alert('Event: ' + calEvent.);
              //alert('Coordinates: ' + jsEvent.pageX + ',' + jsEvent.pageY);
              //alert('View: ' + view.name);
              var title1=calEvent.title;
			  //alert(title1);
			  if(title1!="Break"&&title1!="Vacation"){
          $("#eventID").val(calEvent.id);

          console.log(title1);
          $("#newData").val(calEvent);
		  //if((title1 != "vacation") || (title1 != "BreakTime")  ){
       if(jQuery.inArray( title1, titles)<0){
         appntDetails(calEvent, jsEvent, view,1);
         $("#pop_load").show();
       }
     }
   }, 
   eventDrop: function(event,dayDelta,minuteDelta,allDay,revertFunc) {
     $("#load").show();
     var newStartTime = getHoursAndMinutes(event.start);
     var newEndTime = getHoursAndMinutes(event.end);
     var statTime = event.start;
     var curMonth  = statTime.getMonth()+1;
     if(curMonth<10){
      curMonth = "0"+curMonth;
    }
    var apntDate = statTime.getFullYear()+"-"+curMonth+"-"+statTime.getDate();
    updateEvents(event.id,apntDate,newStartTime,newEndTime);
      },/*dayClick: function( date, allDay, jsEvent, view ) { 
                    var myDate = new Date();
                    
                    //How many days to add from today?
                    var daysToAdd = 15;
                    
                    myDate.setDate(myDate.getDate() + daysToAdd);
                
                    if (date < myDate) {
                        //TRUE Clicked date smaller than today + daysToadd
                    alert("You cannot book on this day!");    
                    }
                    else
                    {
                        //FLASE Clicked date larger than today + daysToadd
                        alert("Excellent choice! We can book today..");    
                     }   
                    
                   },*/
                   eventResize: function(event, delta, revertFunc) {
                    $("#load").show();
                    var newStartTime = getHoursAndMinutes(event.start);
                    var newEndTime = getHoursAndMinutes(event.end);
                    var statTime = event.start;
                    var curMonth  = statTime.getMonth()+1;
                    if(curMonth<10){
                     curMonth = "0"+curMonth;
                   }
                   var apntDate = statTime.getFullYear()+"-"+curMonth+"-"+statTime.getDate();
                   updateEvents(event.id,apntDate,newStartTime,newEndTime);
                 },
                 editable: true,
        eventLimit: true, // allow "more" link when too many events

      });

});

</script>
<style>

  body {
    margin: 40px 10px;
    padding: 0;
    font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
    font-size: 14px;
  }

  #calendar {

    margin: 0 auto;
  }

</style>
<body>
  <main id="main" class="tg-haslayout">
    <section class="tg-main-section tg-haslayout">
      <div class="container">
       <div class="row">
         <div class="col-xs-4"></div>
         <div class="col-xs-8 text-center">
           <div id="statusBar" style="display:none;">
             <div class="col-md-2">
               <div class="clndr_aprv"> <div class="clndr_aprv1"></div>  <div class="clndr_aprv2"> Approved </div> </div></div>
               <div class="col-md-2">
                 <div class="clndr_pndg"> <div class="clndr_pndg1"></div>  <div class="clndr_pndg2"> Pending </div> </div></div>
                 <div class="col-md-2">
                   <div class="clndr_cncl"> <div class="clndr_cncl1"></div>  <div class="clndr_cncl2"> Cancelled </div> </div></div>
                 </div>
               </div>
             </div>
             <div class="row"></div>
             <div class="row">
              <div class="col-md-12">
               <div id='calendar'></div>
             </div>
           </div>

         </div>
       </section>
     </main>

     <div id="bookModel" class="modal fade"  tabindex="-1" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
           <div class="ball" data-dismiss="modal">
            <a href="javascript:void(0);" > <img src="<?php echo WEB_ROOT;?>service/public/images/images/ballinto.png"></a>
          </div>
          <form class="basic-grey" id="patientApnt-form">
            <h3 id="defaultHead" class="modal-title create" align="center" style="text-align:center;display:none;">Create a new Appointment</h3>
            <h3 id="pendingHead" class="modal-title create" align="center" style="text-align:center;color:#F49B44;display:none;">Waiting for doctor approval</h3>
            <h3 id="approvedHead" class="modal-title create" align="center" style="text-align:center;color:#A4D250;display:none;">Approved appointment</h3>
            <h3 id="cancelledHead" class="modal-title create" align="center" style="text-align:center;color:#ff5183;display:none;">Cancelled Appointment</h3>
            <div class="pop_outr" id="pop_load">
             <div class="pop_load"></div>
           </div>
           <div class="row">
            <div class="inputpop">
              <div class="col-md-2">
               <label>Name:</label>
             </div>
             <div class="col-md-offset-2 col-md-8">
               <input type="text" name="patName" id="patName" title="Name is required!" required="" placeholder="Name" class="rounded3">
             </div>
           </div>
         </div><br />
         <div class="row">
          <div class="inputpop">
            <div class="col-md-2">
              <label>Email:</label>
            </div>
            <div class="col-md-offset-2 col-md-8">
              <input type="text" name="patEmail" id="patEmail" title="Email ID is required!" required="" placeholder="email ID" class="rounded3">
            </div>
          </div>
        </div><br />
        <div class="row">
          <div class="inputpop">
            <div class="col-md-2">
              <label>Phone:</label>
            </div>
            <div class="col-md-offset-2 col-md-8">
              <input type="text" name="patPhone" id="patPhone" title="Phone Number is required!" required="" placeholder="phoneNumber" class="rounded3">
            </div>
          </div>
        </div><br />
        <div class="row">
          <div class="inputpop">
            <div class="col-md-2">
              <label>Date:</label>
            </div>
            <div class="col-md-offset-2 col-md-8">
              <input type="text" name="apntDate" id="apntDate" title="Date is required!" required="" placeholder="Date" class="rounded3">
            </div>
          </div>
        </div><br />
        <div class="row">
          <div class="inputpop">
            <div class="col-md-2">
              <label>Time:</label>
            </div>
            <div class="col-md-offset-2 col-md-8">
              <div class="row">
                <div class="col-md-6">
                  <input type="text" name="apntStart" id="apntStart" title="Start Time is required!" required="" placeholder="StartTime" class="rounded3">
                </div>
                <div class="col-md-6">
                  <input type="text" name="apntEnd" id="apntEnd" title="End Time is required!" required="" placeholder="End Time" class="rounded3">
                </div>
              </div>
            </div>
          </div>
        </div><br />
        <div class="row">
          <div class="inputpop">
            <div class="col-md-2">
              <label>comments:</label>
            </div>
            <div class="col-md-offset-2 col-md-8">
              <textarea name="notes" id="notes" placeholder="Patient Message" cols="53" rows="3"></textarea>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="inputpop">
            <div class="col-md-2">
              <label>Doctor comments:</label>
            </div>
            <div class="col-md-offset-2 col-md-8">
              <textarea name="docnotes" id="docnotes" placeholder="Doctor Message" cols="53" rows="3"></textarea>
            </div>
          </div>
        </div><br />
                    <!--<div class="rm_popup">
                       <label>
                          <span class="frm_txtp">Insurance :</span>
                          <select name="selection">
                             <option value="Job Inquiry">Insurance 1</option>
                             <option value="General Question">Insurance 2</option>
                          </select>
                       </label>
                     </div>-->
                     <div class="rm_popup col-md-offset-4 col-md-8" >
                       <input id="saveAppnt" type="button" value="Save" class="button">
                       <input style="display:none;" id="approveAppnt" type="button" value="Approve" class="button">
                       <input style="display:none;" id="Unapprove" type="button" value="Unapprove" class="button">
                       <input id="deleteAppnt" type="button" value="Delete" class="button2"> 
                       <input id="cancelAppnt" type="button" value="Close" class="button2">         
                     </div>
                     <div class="clearfix"></div>
                   </form>
                 </div>
               </div>
             </div>
           </div>    
         </body>
         <link rel="stylesheet" href="<?php echo WEB_ROOT?>service/public/newcss/bootstrap.min.css">
         <link rel="stylesheet" href="<?php echo WEB_ROOT?>service/public/newcss/normalize.css">
         <link rel="stylesheet" href="<?php echo WEB_ROOT?>service/public/newcss/font-awesome.min.css">
         <link rel="stylesheet" href="<?php echo WEB_ROOT?>service/public/newcss/icomoon.css">
         <link rel="stylesheet" href="<?php echo WEB_ROOT?>service/public/newcss/owl.theme.css">
         <link rel="stylesheet" href="<?php echo WEB_ROOT?>service/public/newcss/owl.carousel.css">
         <link rel="stylesheet" href="<?php echo WEB_ROOT?>service/public/newcss/prettyPhoto.css">
         <link rel="stylesheet" href="<?php echo WEB_ROOT?>service/public/newcss/version-2.css">
         <link rel="stylesheet" href="<?php echo WEB_ROOT?>service/public/newcss/typo.css">
         <link rel="stylesheet" href="<?php echo WEB_ROOT?>service/public/newcss/style.css">
         <link rel="stylesheet" href="<?php echo WEB_ROOT?>service/public/newcss/transitions.css">
         <link rel="stylesheet" href="<?php echo WEB_ROOT?>service/public/newcss/color.css">
         <link rel="stylesheet" href="<?php echo WEB_ROOT?>service/public/newcss/responsive.css">
         <footer id="footer" class="tg-haslayout">
          <div class="tg-threecolumn">
            <div class="container">
              <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12 pull-left">
                  <div class="tg-footercol">
                    <div class="address-column tg-widget">
                      <strong class="logo">
                        <a href="#">
                          <img src="<?php echo WEB_ROOT?>service/public/newimages/logo-new.png" alt="image description">
                        </a>
                      </strong>
                      <div class="tg-description">
                        <p>Make an appointment on the go.</p>
                      </div>
                      <ul class="tg-info">
                        <li>
                          <i class="fa fa-home"></i>
                          <address>4 Ardmore Pl, East Brunswick, New Jersey, 08816</address>
                        </li>
                        <li>
                          <i class="fa fa-envelope"></i>
                          <em><a href="mailto:info@docvisits.com">info@docVisits.com</a></em>
                        </li>
                        <li>
                          <i class="fa fa-phone"></i>
                          <em><a href="#">+44 123 456 788 - 9</a></em>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 pull-right">
                  <div class="tg-footercol">
                    <div class="tg-heading-border tg-small">
                      <h4>Quick links</h4>
                    </div>
                    <div class="tg-widget tg-usefullinks widget_nav_menu">
                      <ul>
                        <li><a href="<?php echo WEB_ROOT?>index.php">Home</a></li>
                        <li><a href="<?php echo WEB_ROOT?>index.php/About">About Us</a></li>
                        <li><a href="<?php echo WEB_ROOT?>index.php/terms">Terms and Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="<?php echo WEB_ROOT?>index.php/Contact">Contact Us</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                  <div class="tg-footercol">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tg-footerbar tg-haslayout">
            <div class="tg-copyrights">
              <p>&copy; 2017 DocVisits LLC. </p>
            </div>
          </div>
        </footer>
        </html>
