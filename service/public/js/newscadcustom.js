/*$(document).ready(function(){
alert("inside onready function");
});*/

$(document).ready(function() {
 if($("#tg-featuredlist-3")) {
   if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var pos = {
        lat: position.coords.latitude,
        lng: position.coords.longitude
      };
      var url="https://maps.googleapis.com/maps/api/geocode/json?latlng="+pos.lat+","+pos.lng+"&key=AIzaSyDtCtNnx_y65T5gdUE2lkZ-fN8v2F86lfY";
      $.getJSON(url,function(data) {
    // the code inside this function will be run,
    // when the $.getJSON finishes retrieving the data
    var address=data.results[0].formatted_address;
    var add = address.split(",");
    var zip=add[add.length-2].match(/\d+/g).join([]);
    var country=add[add.length-1];
    //if(country.trim()==="USA") {
      $.ajax({
        type: 'POST',
        dataType : "text",
        //contentType: "application/json",
        url: SITEURL + 'store-zipcode',
        data: {
         "zip": zip,
         "userAddress": address,
       },
     })
      .done(function(res) {
        $("#tg-featuredlist-3").html(res);
        jQuery("#tg-featuredlist-3").owlCarousel({
          autoPlay: false,
          items: 4,
          itemsDesktop: [1199, 3],
          itemsDesktopSmall: [991, 2],
          itemsTabletSmall: [568, 1],
          slideSpeed: 300,
          paginationSpeed: 400,
          pagination: false,
          navigation: true,
          navigationText: [
          "<i class='tg-prev fa fa-angle-left'></i>",
          "<i class='tg-next fa fa-angle-right'></i>"
          ]
        });
      });

   /* } else {
      alert("So far support is available only in US");
    }*/


  });
    });
  }
}

  //alert("inside scad --- 1");
  ////alert(SITEURL);
  /*setInterval(callback, repeat);
  $('.date-field-required').live('keyup',function(){
    $(this).val('');
  });*/
  //alert("inside scad --- 2");
  //$("#srchReason").change(function(){
    //var val = $("#srchReason option:selected").val();
  //});
  $("#zipcode").change(function(){
    //alert("inside zip change function");

    var address= $('#zipcode').val();
    check_location(address);


  });
        //Login Functionality   
        $("#signinBtn").click(function() {
          //alert("in SignIn");
          signIn();
        });
        $("#signinBtnDoctor").click(function(){
          docSignIn();
        });
        //alert("inside scad --- 3");

        $(".smalbut").click(function(){
          //$("#srchReason").show();
          //document.getElementById('srchReason').getElementsByTagName('option')[0].selected = 'selected';
          //$(".srchReason_other").hide();
          //$("#reason").addClass("styled-selected");
        });
        //alert("inside scad --- 4");

        $(".zips").click(function(){
          var zip=$(this).attr("id");
    //alert(zip);
    $("#doc-zip").val(zip);
    var formData = $('#findDoctor-form').serialize();
    var data = $.base64.encode(formData);
    window.location.href = SITEURL + 'search/' + data;
  });
        //alert("inside scad --- 5");

        $(".zip_foot").click(function(){
          var zip=$(this).attr("id");
    //alert(zip);
    $("#doc-zip-foot").val(zip);
    var formData = $('#hiddenform').serialize();
    var data = $.base64.encode(formData);
    window.location.href = SITEURL + 'search/' + data;
  });
        //alert("inside scad --- 6");

        $(".city_more").click(function(){
          $(this).hide();
          $(".hi_city").show();
          $(".city_less").show();
        });
        $(".city_less").click(function(){
          $(this).hide();
          $(".hi_city").hide();
          $(".city_more").show();
        });
        $(".more_specl").click(function(){
          $(this).hide();
          $(".hi_specl").show();
        });
        $(".less_specl").click(function(){
          $(".hi_specl").hide();
          $(".more_specl").show();
        });
        $(".city_more1").click(function(){
          $(this).hide();
          $(".hi_city1").show();
          $(".city_less1").show();
        });
        $(".city_less1").click(function(){
          $(this).hide();
          $(".hi_city1").hide();
          $(".city_more1").show();
        });
        $(".more_specl1").click(function(){
          $(this).hide();
          $(".hi_specl1").show();
        }); 
        $(".less_specl1").click(function(){
          $(".hi_specl1").hide();
          $(".more_specl1").show();
        });
        $(".more_insurence").click(function(){
          $(this).hide();
          $(".hi_insurence").show();
        });
        $(".less_insurence").click(function(){
          $(".hi_insurence").hide();
          $(".more_insurence").show();
        });
        $(".find").click(function() {
          var formData = $('#findDoctor-form').serialize();
          var data = $.base64.encode(formData);
          window.location.href = SITEURL + 'search/' + data;
        });
        $(".find_foot").click(function() {
          var formData = $('#hiddenform').serialize();
          var data = $.base64.encode(formData);
          window.location.href = SITEURL + 'search/' + data;
        });
        $(".spcl").click(function(){
          var zip=$(this).attr("id");
    //alert(zip);
    $("#docSpeciality_foot").val(zip);
    var formData = $('#hiddenform').serialize();
    var data = $.base64.encode(formData);
    window.location.href = SITEURL + 'search/' + data;
  });
        $(".spcl_foot").click(function(){
          var zip=$(this).attr("id");
    //alert(zip);
    $("#docSpeciality_foot").val(zip);
    var formData = $('#hiddenform').serialize();
    var data = $.base64.encode(formData);
    window.location.href = SITEURL + 'search/' + data;
  });
        $(".insurence").click(function(){
          var zip=$(this).attr("id");
    //alert(zip);
    $("#insuranceSelect").val(zip);
    var formData = $('#findDoctor-form').serialize();
    var data = $.base64.encode(formData);
    window.location.href = SITEURL + 'search/' + data;
  });
        x=$("footer").position();
        $("#continue").click(function() {
          $("#patient_error").hide();
          $("#patient_success").hide();
          $('#patient-form').parsley('validate');
          var validation = $('#patient-form').parsley('isValid');
          if (validation == true) {
           document.getElementById('continue').style.pointerEvents = 'none';
           $("#continue").text('Processing...');
           var formData = $("#patient-form").serialize();
/*      $.ajax({
        url: '/path/to/file',
        type: 'default GET (Other values: POST)',
        dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
        data: {param1: 'value1'},
      })
      .done(function() {
        console.log("success");
      })
      .fail(function() {
        console.log("error");
      })
      .always(function() {
        console.log("complete");
      });*/
      
      $.ajax({
        type: 'POST',
        dataType : "text",
        //contentType: "application/json",
        url: SITEURL + 'patient-registration',
        data: formData,
      })
      .done(function(res) {
        if (res == 0) {
          $("#patient_error").show();
          $("#continue").text('Continue');
          document.getElementById('continue').style.pointerEvents = 'auto';       
        } else {        
          // window.location.href = SITEURL + 'payment_package';
          $("#patient_error").hide();
          $("#patient_success").fadeIn(500);
          $("#continue").text('Registration Success');
          //$('#patient-form').parsley('reset');
          document.getElementById('continue').style.pointerEvents = 'none';
          $('#patient-form').parsley().reset();  
          $("#patient-form").hide();
        }
      });     
    //$('#patient-form').parsley('reset');
  }
  //$('#patient-form').parsley('reset');  
}); 
  //Doctor Registration
  $("#doc-continue").click(function() {
    //alert("in doc-continue");
    $("#doc_error").hide();
    $("#doc_success").hide();
    $('#doctor-form').parsley('validate');
    var validation = $('#doctor-form').parsley('isValid');
    if (validation == true) {
     document.getElementById('doc-continue').style.pointerEvents = 'none';
     $("#doc-continue").text('Processing...');
     var formData = $('#doctor-form').serialize();
    // alert(formData);
    $.ajax({
      url: SITEURL + 'doctor-registration',
      type: 'POST',
      dataType : "text",
      data: formData,
    })
    .done(function(res) {
      console.log("query executed successfully"+res);
      if (res == 0) {
       $("#doc_error").show();
       document.getElementById('doc-continue').style.pointerEvents = 'auto';
       $("#doc-continue").text('Continue');
     } 
     else {
       $("#doc_success").fadeIn(500);
       $("#doc-continue").text('Registration Success');
       $('#doctor-form').parsley().reset();
       document.getElementById('doc-continue').style.pointerEvents = 'none';
     }
   }) .fail( function(xhr, textStatus, errorThrown) {
    console.log(xhr.responseText);
    console.log("Ajax Call Failed");
    console.log(textStatus);
  })
   .always(function() {
    console.log("complete");
  });
 }
});
  $("#findDocli").mouseover(function() {
    $("#findDocli").remove();
    $("#bookDocli").show('slow');
  });
  //Insurance Sub Box Selection
  $("#insuranceSelect").change(function() {
    //alert("In Insurance Change function");
    $("#subInsurance").hide();
    //$("#loading").show();
    var val = (this.value) ? this.value : 'none';
    if(val!='none'){
     $.ajax({
      type: 'GET',
      url: SITEURL + 'sub-insurace-plans/' + val,
    })
     .done(function(res) {
      $("#subInsurance").show();
        //$("#loading").hide();
        $("#subInsuranceSelect").html(res);
      })
     .always(function(){
      console.log("Complete");
    });
   }else{
     $("#subInsuranceSelect").html('<option>Please select Insurance Plan</option>');
   }
 });  
  $("#findDoctorBtn").click(function() {
    var findDocFrm = $('#findDoctor-form').parsley().validate();
    var formData = $('#findDoctor-form').serialize();
    //alert(formData);
    var data = $.base64.encode(formData);
    //alert(findDocFrm);
    if(findDocFrm === true){
     window.location.href = SITEURL + 'search/' + data;
   }
 }); 
  $("#FviewDoctor").click(function() {
    formData="docZip=&docSpeciality=&insuranceSelect=&subInsuranceSelect=&docName=";
    var data = $.base64.encode(formData);
    window.location.href = SITEURL + 'search/' + data;
  });  
  $(".advanceSearch").change(function() { 
    searchDoctors();
    $("#searchLoading").show();
  });
  $("#advanceSearchBtn").click(function() {
    //alert("in search click");
    searchDoctors();
    $("#searchLoading").show();
  });
  $("#srchLanguage").change(function() {
    searchDoctors();
    $("#searchLoading").show();
  });
  $("#gender").change(function() {
    if($('#advanceSearch-form').length>0) {
     searchDoctors();
     $("#searchLoading").show();
   }
 });
   /* $('#password').keypress(function(event) {

        var keycode = (event.keyCode ? event.keyCode : event.which);
        if (keycode == '13') {
            signIn();
        }
        event.stopPropagation();
      });*/
      $(".spciality_search").change(function(){
        var srchSpeciality = $("#docSpeciality").val();
       // resonforvisitData(srchSpeciality);
     });
      $("#submit").click(function() {
        var ovrall = $("input[name='rating']:checked").val();
        var bsidemnr = $("input[name='rating2']:checked").val();
        var waiting = $("input[name='rating3']:checked").val();
        var msg = $("#message").val();
        var userget = $("#userid").val();
        $.ajax({
         type: 'POST',
         url: SITEURL + 'patient/profile/ratingaction',
         data: {
           "ovrall": ovrall,
           "bsidemnr": bsidemnr,
           "waiting": waiting,
           "msg": msg,
           "userget": userget
         },
       }).done(function(res) {
         console.log(res);
         $('#submit').html(data);
       });
     });             
    });
$(window).scroll(function() {    

  // console.log("pos - "+x);
  /*x1=$(".dr_pfl_map").offset().top;
  console.log("mappos - "+x1);*/
  var scroll1 = $(window).scrollTop();
  //console.log("scroll - "+scroll1);
  var hei=$(".dr_pfl_clm1_left").height();
  //console.log("height -"+hei);
  if(hei<=1058 && hei==799 ){
    if ($(window).scrollTop() + $(window).height() >= $(document).height()-200) {
      $('.dr_pfl_nav').hide();
    } else{
      if(scroll1 <= 250 ){
        $('.dr_pfl_nav').show();
        $(".dr_pfl_nav").removeClass("affix2");
        $(".dr_pfl_clm1_left").css('margin-top','0');
      } else{
        $('.dr_pfl_nav').show();
        $(".dr_pfl_nav").addClass("affix2");
        $(".dr_pfl_clm1_left").css('margin-top','50px');
      }
    }
    if ($(window).scrollTop() + $(window).height() >= $(document).height() -400) {
      $(".dr_pfl_map").removeClass("affix1");
    } else {
      if(scroll1 <= 250){
        $(".dr_pfl_map").removeClass("affix1");
        $(".dr_pfl_map").removeClass("fixing1");
      } else{
        if ($(window).scrollTop() + $(window).height() >= $(document).height() -700)
        {
          $(".dr_pfl_map").removeClass("affix1");
          $(".dr_pfl_map").addClass("fixing1");
          var position=$(".dr_pfl_map").position();
          //console.log(position);
          //$(".dr_pfl_map").css("margin-top",position.top);
        }else{
          $(".dr_pfl_map").addClass("affix1");
        }
      }
    }
  }
  if(hei>1060) {
    if ($(window).scrollTop() + $(window).height() >= $(document).height()-200) {
      $('.dr_pfl_nav').hide();
    } else{
      if(scroll1 <= 250){
        $('.dr_pfl_nav').show();
        $(".dr_pfl_nav").removeClass("affix2");
        $(".dr_pfl_clm1_left").css('margin-top','0');
      }else{
       $('.dr_pfl_nav').show();
       $(".dr_pfl_nav").addClass("affix2");
       $(".dr_pfl_clm1_left").css('margin-top','50px');
     }
   }
   if ($(window).scrollTop() + $(window).height() >= $(document).height() -400) {
    $(".dr_pfl_map").removeClass("affix1");
  } else {
    if(scroll1 <= 250){
     $(".dr_pfl_map").removeClass("affix1");
     $(".dr_pfl_map").removeClass("fixing");
   }else{
     if ($(window).scrollTop() + $(window).height() >= $(document).height() -700)
     {
       $(".dr_pfl_map").removeClass("affix1");
       $(".dr_pfl_map").addClass("fixing");
       var position=$(".dr_pfl_map").position();
       console.log(position);
                  //$(".dr_pfl_map").css("margin-top",position.top);
                }else{
                  $(".dr_pfl_map").addClass("affix1");
                }
              }
            }
          }
        });

function map(){
  var test=$(".allzips").val();
  var test1=JSON.parse(test);
  var locations = test1;
  var loc_len=locations.length;
  var len2=test1.length;
  var iconURLPrefix = SITEURL1+'service/public/images/images/Location-';
  var icons=[iconURLPrefix + '1.png',
  iconURLPrefix + '2.png',
  iconURLPrefix + '3.png',
  iconURLPrefix + '4.png',
  iconURLPrefix + '5.png'];
  var shadow = {
    anchor: new google.maps.Point(15,33),
    url: iconURLPrefix + 'msmarker.shadow.png'
  };
  if(loc_len > 1){
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 10,
      center: new google.maps.LatLng(61.2, -149.853),
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      mapTypeControl: false,
      streetViewControl: false,
      panControl: false,
      zoomControlOptions: {
        position: google.maps.ControlPosition.LEFT_TOP
      }
    });
  }
  else{
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 10,
      center: new google.maps.LatLng(locations[0][1], locations[0][2]),
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      mapTypeControl: false,
      streetViewControl: false,
      panControl: false,
      zoomControlOptions: {
        position: google.maps.ControlPosition.LEFT_TOP
      }
    });
  }
  Array.prototype.compare = function(testArr) {
    if (this.length != testArr.length) return false;
    for (var i = 0; i < testArr.length; i++) {
      if (this[i].compare) { 
        if (!this[i].compare(testArr[i])) return false;
      }
      if (this[i] !== testArr[i]) return false;
    }
    return true;
  }
  var infowindow = new google.maps.InfoWindow({
    maxWidth: 260,disableAutoPan: true,alignBottom:true
  });

  var marker;
  var markers = new Array();
// Add the markers and infowindows to the map
for (var i = 0; i < locations.length; i++) {  
  marker = new google.maps.Marker({
    position: new google.maps.LatLng(locations[i][1], locations[i][2]),
    map: map,
    icon : icons[i],
    shadow: shadow
  });

  markers.push(marker);
  google.maps.event.addListener(marker, 'mouseover', (function(marker, i) {
    return function() {
      infowindow.setContent(locations[i][0]);
      infowindow.open(map, marker);
    }
  })(marker, i));
  google.maps.event.addListener(marker, 'mouseout', (function(marker, i) {
    return function() {
      infowindow.setContent(locations[i][0]);
      infowindow.close(map, marker);
    }
  })(marker, i));
}
function AutoCenter() {
      //  Create a new viewpoint bound
      var bounds = new google.maps.LatLngBounds();
      //  Go through each...
      $.each(markers, function (index, marker) {
        bounds.extend(marker.position);
      });
      //  Fit these bounds to the map
      map.fitBounds(bounds);
    }
    if(loc_len > 1){
      AutoCenter();
    }
  }
  function map_scroll(){
   var scroll1 = $(window).scrollTop();
   if ($(window).scrollTop() + $(window).height() >= $(document).height())
   {
    $('.dr_pfl_nav').removeClass("affix1");
  }
  else{
    if(scroll1 <= 250){
      $(".dr_pfl_nav").removeClass("affix1");
    }else{

      $(".dr_pfl_nav").addClass("affix1");
    }
  }
  if ($(window).scrollTop() + $(window).height() >= $(document).height() -630)
  {
    $(".dr_pfl_map").removeClass("affix1");
  }
  else
  {
    if(scroll1 <= 250){
      $(".dr_pfl_map").removeClass("affix1");
    }else{

      $(".dr_pfl_map").addClass("affix1");
    }
  }
}
function myfunction(){
  $(".bottomBorder1").click(function(){
   var cls=$(this).val();
   $(".moreClk"+cls).hide();
   $('.show'+cls).slideDown(function(){
     var h1=$('.ul0').height();
     var h2=$('.ul1').height();
     var h3=$('.ul2').height();
     var h4=$('.ul3').height();
     var h5=$('.ul4').height();
     var h6=$('.ul5').height();
     var h7=$('.ul6').height();
     var ma = Math.max(h1,h2,h3,h4,h5,h6,h7);
     $(".dr_profle_clndr").css("min-height",ma+28);
   });
 });
  $(".bottomBorder").click(function(){
    var cls=$(this).val();
    $(".moreClk"+cls).hide();
    $('.show'+cls).slideDown(500,function(){
      $('.Doc'+cls).removeAttr('style');
      var height1=$(".cellColor"+cls).height();
      var h1=$(".hri0"+cls).height();
      var h2=$(".hri1"+cls).height();
      var h3=$(".hri2"+cls).height();
      var ma = Math.max(h1,h2,h3);
      $('.common'+cls).css('min-height',ma+2);
      $('.Doc'+cls).css('min-height',ma-12);
      $('.Doc'+cls).css('position','relative');
      $(".dr_viw_clm1").css('min-height',ma-14);
                                            /*$("#bookModel").removeClass("before");
                                            $("#bookModel").addClass("after");*/
                                            map_scroll();
                                          });
    modalPopup();
  });
  $(".last").click(function(){
    var cls=$(this).val();
    $(".moreClk"+cls).show();
    $('.show'+cls).slideUp(1000);
    $('.Doc'+cls).css('min-height',280);
    $('.common'+cls).css('min-height',280);
    $('.dr_profle_clndr').css('min-height',280);
    map_scroll();
  });
}

function miniCalendar(dateCnt,allDoctors,status){
  $.ajax({
    type: 'GET',    
    url: SITEURL+'minicalendar/'+dateCnt+'/'+allDoctors+'/'+status,
  }).done(function(res){
        //$(".calender_custom").slideUp();
        $(".calender_custom").html(res);
        $("#firstDate0").text($(".firstDate_0").val());
        $("#firstDate1").text($(".firstDate_1").val());
        $("#firstDate2").text($(".firstDate_2").val());
        $(".test2").hide();
        myfunction();
        appointMentRedirect1();
        //$(".calender_custom").slideDown(2000);
      });
}
function appointMentRedirect1(){

  $(".appointDate").click(function(){
    //alert("in scad custom");
    var data = $.base64.encode(this.id);
    //alert(data);
    var ins=$( "#insuranceSelect option:selected" ).val();
    var subins=$( "#subInsuranceSelect option:selected" ).val();
    var srchins=$( "#srchReason" ).val();
  //var srchins=$( "#srchReason option:selected" ).val();
  if(ins == ''){ins = 0;}if(subins == ''){subins =0;}if(srchins == ''){srchins ='%20';}
      //window.location.href = SITEURL + 'appointment/fixing/'+data;
      //window.location.href = SITEURL + 'appointment/fixing/'+data+'/0/0/0';
      window.location.href = SITEURL + 'appointment/fixing/'+data+'/'+ins+'/'+subins+'/'+srchins;
    }); 
}
function loadPageData(page, Data) {
    // $("#searchLoading").show();
    $.ajax({
      type: "POST",
      dataType:"json",
      url: SITEURL + "advanced-search",
      data: {
        "page": page,
        "search": Data
      },
    }).done(function(msg) {

        //$("#result_area").html(msg);
        searchDisplay();
        //$("#searchLoading").hide();
        var allZipData = $(".allzips").val();
        var allDoctors = $(".allDoctors").val();
        if (msg.status === 0) {
         // alert("in if");
         $('#result_area').hide();
         $(".result_found").show();
         $(".result_found").html(msg.html);
         $("#pagination_area").hide();
       } else {
        //  alert("in else");
        $('#result_area').show();
        $(".result_found").hide();
        $("#result_area .data-fetch").show();
        $("#result_area .data-fetch").html(msg.html);
        $("#pagination_area").html(msg.pagination);
        $('.dttime').html(msg.date_slide);
          //miniCalendar(0,allDoctors,'first');
          //map();
          myfunction();
          appointMentRedirect1();
        }
        var resultCount = msg.noOfPages;
        var totalPages;
        var remainingResults=false;
        if(resultCount%5==0) {
          totalPages = resultCount/5;
        } else {
          totalPages = Math.floor(resultCount/5)+1;
          remainingResults=true;
        }
        //alert(totalPages);
        //alert(page);
        if(totalPages!=page) {
            //alert("Inside If");
            if(totalPages>5) {
              $('#map').css('height','1303px');
            } else {
              var height=msg.noOfPages*250;
              $('#map').css('height',height);
            }
          } else {
            //alert("Inside else");
            if(remainingResults==true){
              var height=(resultCount%5)*250;
              $('#map').css('height',height);
            }
          }
          modalPopup();
          var srchSpeciality = $("#srchSpeciality").val();
          //resonforvisitData(srchSpeciality);
        });
  }

  function resonforvisitData(srchSpeciality) {
    $("#reason_loading").show();
    //$("#srchReason").hide();
    $.ajax({
      type: "GET",
      url: SITEURL + "visit-reason/" + srchSpeciality,
    })
    .done(function(msg) {
      if(msg == ""){
        msg = '<option value="0" class="parent-346">Reason for Visit</option>';
      }
      var result=msg;
      result = result+'<option class="parent-346" value="other">Other </option>';
            console.log(result);//console.log(msg);
            //$(".srchReasontxt").hide();
            //$(".smalbut").hide();
            $("#reason_loading").hide();
            $("#srchReason").show();
            $("#srchReason").html(result);
          });
  }


  function searchDoctors() {
    if($('#advanceSearch-form').length>0) {
      var Data = $('#advanceSearch-form').serialize();
      loadPageData(1, Data);
    }
  }
/*$('.dr_pfl_thumb .pagination li.activ').live('click', function() {
    var page = $(this).attr('p');
    loadPageData(page);
  });*/
  function docSignIn() {
   // alert("in Doctor SignIn function");
   $('#signin-form-doctor').parsley('validate');
   var validation = $('#signin-form-doctor').parsley('isValid');
   if (validation == true) {
    document.getElementById('signinBtnDoctor').style.pointerEvents = 'none';
    $("#signinBtnDoctor").text('Processing...');
    var formData = $('#signin-form-doctor').serialize();
     // alert(formData);
      //alert(SITEURL + 'act-signin-doc');
      $.ajax({
        type: 'POST',
        url: SITEURL + 'act-signin-doc',
        data: formData,
      })
      .done(function(res) {
        console.log("Query Successful"+res);
        if(res==3){
          $("#email_error_doctor").show();
          document.getElementById('signinBtnDoctor').style.pointerEvents = 'auto';
          $("#signinBtnDoctor").text('Sign In');
          $("#docEmail").removeClass("parsley-success");
          $("#docEmail").addClass("parsley-error");
        }
        if(res==4){
          $("#payment_error_doctor").show();
          document.getElementById('signinBtnDoctor').style.pointerEvents = 'auto';
          $("#signinBtnDoctor").text('Sign In');
        }
        else{
          var reslt = res.split(","); 
          console.log(reslt);
          if (reslt[3] == 1) {
            window.location.href = SITEURL + 'doctor/profile';
          } else if (reslt[3] == 2) {
            window.location.href = SITEURL + 'patient/profile';
          } else {
            $("#signin_error_doctor").show();
            document.getElementById('signinBtnDoctor').style.pointerEvents = 'auto';
            $("#signinBtnDoctor").text('Sign In');
            $("#docEmail").removeClass("parsley-success");
            $("#docEmail").addClass("parsley-error");
            $("#docPassword").removeClass("parsley-success");
            $("#docPassword").addClass("parsley-error");
          }
        }
      })
      .fail( function(xhr, textStatus, errorThrown) {
        console.log(xhr.responseText);
        console.log("Ajax Call Failed");
        console.log(textStatus);
      })
      .always(function() {
        console.log("complete");
      });
    }
  }

  function signIn() {
   // alert("in signin function");
   $('#signin-form').parsley('validate');
   var validation = $('#signin-form').parsley('isValid');
   if (validation == true) {
    document.getElementById('signinBtn').style.pointerEvents = 'none';
    $("#signinBtn").text('Processing...');
    var formData = $('#signin-form').serialize();
      //alert(formData);
      //alert(SITEURL + 'act-signin');
      $.ajax({
        type: 'POST',
        url: SITEURL + 'act-signin',
        data: formData,
      })
      .done(function(res) {
        console.log("Query Successful"+res);
        if(res==3){
          $("#email_error").show();
          document.getElementById('signinBtn').style.pointerEvents = 'auto';
          $("#signinBtn").text('Sign In');
          $("#email").removeClass("parsley-success");
          $("#email").addClass("parsley-error");
        }
        if(res==4){
          $("#payment_error").show();
          document.getElementById('signinBtn').style.pointerEvents = 'auto';
          $("#signinBtn").text('Sign In');
        }
        else{
          var reslt = res.split(","); 
          if (reslt[3] == 1) {
            window.location.href = SITEURL + 'doctor/profile';
          } else if (reslt[3] == 2) {
            window.location.href = SITEURL + 'patient/profile';
          } else {
            $("#signin_error").show();
            document.getElementById('signinBtn').style.pointerEvents = 'auto';
            $("#signinBtn").text('Sign In');
            $("#email").removeClass("parsley-success");
            $("#email").addClass("parsley-error");
            $("#password").removeClass("parsley-success");
            $("#password").addClass("parsley-error");
          }
        }
      })
      .fail( function(xhr, textStatus, errorThrown) {
        console.log(xhr.responseText);
        console.log("Ajax Call Failed");
        console.log(textStatus);
      })
      .always(function() {
        console.log("complete");
      });
    }
  }

  /*---------------------------admin-signin------------*/

  /*-------------------signin----------*/


  function searchDisplay() {
    var spec = $("#srchSpeciality option:selected").text();
    var specText = '';
    if (spec == 'Select a speciality') {
      specText = ' All Doctors';
    } else {
      specText = spec + ' Doctors ';
    }
    var zip = $("#srchZipcode").val();
    var zipText = '';
    var insuranceText = '';
    if (zip) {
      zipText = ' in ' + zip;
    } else {
      zipText = '';
    }
    var insurance = $("#insuranceSelect option:selected").text();
    if (insurance == 'Select Insurance') {
      insuranceText = ''
    } else {
      insuranceText = ' | ' + toTitleCase(insurance);
    }
    var subinsurance = $("#subInsuranceSelect option:selected").text();
    if (subinsurance == 'Select Insurance') {
      subinsuranceText = ''
    } else {
      subinsuranceText = ' - ' + toTitleCase(subinsurance);
    }
    var searchCritera = specText + zipText + insuranceText + subinsuranceText;
    $("#searchCriteria").html(searchCritera);
  }

  function toTitleCase(str) {
    return str.replace(/\w\S*/g, function(txt) {
      return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();
    });
  }
  function check_location(address){
    $('#city').val('');
    $('#state').val('');

    $.ajax({
      type: "GET",
      dataType: "json",
      url: "http://maps.googleapis.com/maps/api/geocode/json",
      data: {'address': address,'sensor':false},
      success: function(data){
        console.log(data.results[0].address_components.length);
        console.log(data);
        if(data.results.length){
            //alert(data.results[0].address_components[0]["long_name"]);
            if(data.results[0].address_components.length >= 2){
              $('#city').val(data.results[0].address_components[1]["long_name"]);
               // $('#city').removeClass('parsley-error');
                //$('#city').next().hide();
                //$('#city').addClass('parsley-success');
              }else{
                alert('Failed to fetch city.Please enter manually');
              }
              if(data.results[0].address_components.length > 2){
               $('#state').val(data.results[0].address_components[2]["long_name"]);
               //$('#state').removeClass('parsley-error');
               // $('#state').next().hide();
               //$('#state').addClass('parsley-success');
             }else{
              alert('Failed to fetch state.Please enter manually');
            }
          }else{
            alert('Failed to get lattitude & longitude.Please check your pincode');
          }
        }
      });
  }
