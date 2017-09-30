// JavaScript Document
$(document).ready(function() {
    $("#code").change(function(){
       // alert("inside zip change function");
       
       var address= $('#code').val();
       check_location(address);


   });

    $(".change").click(function(){
       $(this).parent().parent().parent().parent().hide();
       $(this).parent().parent().parent().parent().next().show()
   });
    $(".change2").click(function(){
        $(this).parent().parent().parent().parent().hide();
        $(this).parent().parent().parent().parent().prev().show();
    });
    $(".addNew").click(function(){
       var cls=$(this).attr("alt");
       var data=$(this).parent().parent().next().html();		
       data= $("#"+cls).html()+data;
       $("#"+cls).html(data);
   });

    $("#doc-detail1").click(function(){

        $('#doc-details-form1').parsley('validate');
        var validation = $('#doc-details-form1').parsley('isValid');
        if (validation == true) {
            document.getElementById('doc-detail1').style.pointerEvents = 'none';
            $("#doc-detail").text('Processing...');
            document.getElementById("doc-detail1").disabled = true;
            var formData = $('#doc-details-form1').serialize();
            $.ajax({
                type: 'POST',
                dataType: "json",
                url: SITEURL + 'doctor-update-details1',
                data: formData,
            })
            .done(function(res) {
             if (res == 0) {
                $("#doc_setting_error").fadeIn(3000);
                $("#doc-setting-error").delay(1000).fadeOut(8000);
                document.getElementById('doc-detail').style.pointerEvents = 'auto';
                $("#doc-detail").text('Save');
            } else {
              window.scrollTo(0,0);
              $("#doc-success11").fadeIn(3000);
              $("#doc-success11").delay(1000).fadeOut(8000);
              $("#doc-detail1").text('Save');
              document.getElementById('doc-detail1').style.pointerEvents = 'auto';
              $("#doc-details-form1").find('input[type=text]').removeClass('parsley-success');
              $("#doc-details-form1").find('select').removeClass('parsley-success');
              $("#doc-details-form1").find('textarea').removeClass('parsley-success');
          }
      });
        }

    });

    $(".addNewInsurence").click(function(){
      var data=$(".dInsurance").html();		
      data= $("#dInsurence-here").html()+data;
      $("#dInsurence-here").html(data);
  });
    $(".addNewSpcl").click(function(){
     var data=$("#spcl").html();		
     data= $(".spcl-here").html()+data;
     $(".spcl-here").html(data);
 });

    $(".addNewLang").click(function(){
     var data=$("#lang").html();		
     data= $(".lang-here").html()+data;
     $(".lang-here").html(data);
 });
    $("#doc-detail").click(function() {
        $('#doc-details-form').parsley('validate');
        var validation = $('#doc-details-form').parsley('isValid');
        if (validation == true) {
            document.getElementById('doc-detail').style.pointerEvents = 'none';
            $("#doc-detail").text('Processing...');
            document.getElementById("doc-detail").disabled = true;
            var formData = $('#doc-details-form').serialize();
            $.ajax({
                type: 'POST',
                dataType: "json",
                url: SITEURL + 'doctor-update-details',
                data: formData,
            }).done(function(res) {
                if (res == 0) {
                    $("#doc_setting_error").fadeIn(3000);
                    $("#doc-setting-error").delay(1000).fadeOut(8000);
                    document.getElementById('doc-detail').style.pointerEvents = 'auto';
                    $("#doc-detail").text('Save');
                } else {
                    $("#doc-success1").fadeIn(3000);
                    $("#doc-success1").delay(1000).fadeOut(8000);
                    $("#doc-detail").text('Save');
                    document.getElementById('doc-setting').style.pointerEvents = 'auto';
                    $("#doc-details-form").find('input[type=text]').removeClass('parsley-success');
                    $("#doc-details-form").find('select').removeClass('parsley-success');
                    $("#doc-details-form").find('textarea').removeClass('parsley-success');
                }
            });
        }
    });



    $('#docTab a').click(function(e) {
        e.preventDefault();
        $(this).tab('show');
        $(this).addClass('active');
    });
    $("#doc-setting").click(function() {
        $('#doc-setting-form').parsley('validate');
        var validation = $('#doc-setting-form').parsley('isValid');
        if (validation == true) {
            document.getElementById('doc-setting').style.pointerEvents = 'none';
            $("#doc-setting").text('Processing...');
            document.getElementById("doc-setting").disabled = true;
            var formData = $('#doc-setting-form').serialize();
            $.ajax({
                type: 'POST',
                dataType: "json",
                url: SITEURL + 'doctor-update-profile',
                data: formData,
            }).done(function(res) {
                if (res == 0) {
                    $("#doc_setting_error").fadeIn(3000);
                    $("#doc-setting-error").delay(1000).fadeOut(8000);
                    document.getElementById('doc-setting').style.pointerEvents = 'auto';
                    $("#doc-setting").text('Save');
                } else {
                    console.info(res);
                    $("#doc-success").fadeIn(3000);
                    $("#doc-success").delay(1000).fadeOut(8000);
                    $("#doc-setting").text('Save');
                    document.getElementById('doc-setting').style.pointerEvents = 'auto';
                    $("#doc-setting-form").find('input[type=text]').removeClass('parsley-success');
                    $("#doc-setting-form").find('input[type=email]').removeClass('parsley-success');
                }
            });
        }
    });
    $("#pat-setting").click(function() {
        $('#doc-setting-form').parsley('validate');
        var validation = $('#doc-setting-form').parsley('isValid');
        if (validation == true) {
            document.getElementById('pat-setting').style.pointerEvents = 'none';
            $("#doc-setting").text('Processing...');
            document.getElementById("pat-setting").disabled = true;
            var formData = $('#doc-setting-form').serialize();
            $.ajax({
                type: 'POST',
                dataType: "json",
                url: SITEURL + 'patient-update-profile',
                data: formData,
            }).done(function(res) {
                if (res == 0) {
                    $("#doc_setting_error").fadeIn(3000);
                    $("#doc-setting-error").delay(1000).fadeOut(8000);
                    document.getElementById('pat-setting').style.pointerEvents = 'auto';
                    $("#pat-setting").text('Save');
                } else {
                    console.log(res);
                    $("#doc-success").fadeIn(3000);
                    $("#doc-success").delay(1000).fadeOut(8000);
                    $("#doc-setting").text('Save');
                    document.getElementById('pat-setting').style.pointerEvents = 'auto';
                    $("#doc-setting-form").find('input[type=text]').removeClass('parsley-success');
                    $("#doc-setting-form").find('input[type=email]').removeClass('parsley-success');
                }
            });
        }
    });
    $("#doc-pass").click(function() {
        $('#doc-setting-pass').parsley('validate');
        var validation = $('#doc-setting-pass').parsley('isValid');
        if (validation == true) {
            //document.getElementById('doc-pass').style.pointerEvents = 'none';
            $("#doc-pass").text('Processing...');
            //document.getElementById("doc-pass").disabled=true;
            var formData = $('#doc-setting-pass').serialize();
            $.ajax({
                type: 'POST',
                dataType: "json",
                url: SITEURL + 'doctor-update-pass',
                data: formData,
            }).done(function(res) {
                if (res == 0) {
                    $("#doc-pass-error1").fadeIn(3000);
                    $("#doc-pass-error1").delay(1000).fadeOut(8000);
                    document.getElementById('doc-pass').style.pointerEvents = 'auto';
                    $("#doc-pass").text('Save');
                } else if (res == 12) {
                    $("#doc-pass-error2").fadeIn(3000);
                    $("#doc-pass-error2").delay(1000).fadeOut(8000);
                    $("#p1").addClass('parsley-error');
                    $("#p2").addClass('parsley-error');
                    document.getElementById('doc-pass').style.pointerEvents = 'auto';
                    $("#doc-pass").text('Save');
                } else if (res == 14) {
                    $("#doc-pass-error3").fadeIn(3000);
                    $("#doc-pass-error3").delay(1000).fadeOut(8000);
                    $("#cp").addClass('parsley-error');
                    document.getElementById('doc-pass').style.pointerEvents = 'auto';
                    $("#doc-pass").text('Save');
                } else {
                    $("#doc-pass-success").fadeIn(3000);
                    $("#doc-pass").text('Save');
                    $("#doc-pass-success").delay(1000).delay(1000).fadeOut(8000);
                    $("#doc-setting-pass").find('input[type=password]').removeClass('parsley-success');
                    document.getElementById('doc-pass').style.pointerEvents = 'auto';
                }
            });
        }
    });
    $(".delete1").on('click',function(e) {
        e.preventDefault();
        var r= confirm('Are you sure to delete?');
        if(r===true){
            var i = $(this).attr('value');

            var cr = $(this);
            //  alert(i);
            //$(this).text('Processing...');
            //$(this).disabled = true;
            var formData = i;
            $.ajax({
                type: 'POST',
                dataType: "json",
                url: i,
                data: formData,
            }).done(function(res) {
                $("#delete-img-info").fadeIn(3000);
                cr.parent().parent().parent().hide();
                $("#delete-img-info").delay(1000).fadeOut(8000);
            });  
        }
        
    });
    $(".activate").on('click', '.selector', function(event) {
        event.preventDefault();
        /* Act on the event */
        var i = $(this).attr('value');
        var cur = $(this);
        var formData = i;
        var u = SITEURL + 'doctor-set-profile-picture' + i;
        $.ajax({
           type: 'GET',
           dataType: "json",
           url: SITEURL + 'doctor-set-profile-picture/' + i,
       })
        .done(function(res) {
            console.log("success");
            if (res == 0) {
                $("#doc_setting_error").fadeIn(3000);
                $("#doc-setting-error").delay(1000).fadeOut(8000);
                cur.attr("disabled", false);
            } else {
                $("#doc-success-pic").fadeIn(3000);
                $("#doc-success-pic").delay(1000).fadeOut(8000);
                $(".out").addClass("btn-primary");
                $(".out").addClass("in");
                $(".out").removeClass("out");
                cur.addClass("out");
                $('.active_div').text('');
                $('.active_div').text('Activated');
            }
        });

    });
});
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