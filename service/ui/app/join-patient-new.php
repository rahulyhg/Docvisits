<?php
session_start();
include("service/ui/common/header.php"); 
 $_SESSION['userID'];
?>
<style>
.colorgraph {
  height: 5px;
  border-top: 0;
  background: #c4e17f;
  border-radius: 5px;
  background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
}
</style>
<script>
$(function () {
    $('.button-checkbox').each(function () {

        // Settings
        var $widget = $(this),
            $button = $widget.find('button'),
            $checkbox = $widget.find('input:checkbox'),
            color = $button.data('color'),
            settings = {
                on: {
                    icon: 'glyphicon glyphicon-check'
                },
                off: {
                    icon: 'glyphicon glyphicon-unchecked'
                }
            };

        // Event Handlers
        $button.on('click', function () {
            $checkbox.prop('checked', !$checkbox.is(':checked'));
            $checkbox.triggerHandler('change');
            updateDisplay();
        });
        $checkbox.on('change', function () {
            updateDisplay();
        });

        // Actions
        function updateDisplay() {
            var isChecked = $checkbox.is(':checked');

            // Set the button's state
            $button.data('state', (isChecked) ? "on" : "off");

            // Set the button's icon
            $button.find('.state-icon')
                .removeClass()
                .addClass('state-icon ' + settings[$button.data('state')].icon);

            // Update the button's color
            if (isChecked) {
                $button
                    .removeClass('btn-default')
                    .addClass('btn-' + color + ' active');
            }
            else {
                $button
                    .removeClass('btn-' + color + ' active')
                    .addClass('btn-default');
            }
        }

        // Initialization
        function init() {

            updateDisplay();

            // Inject the icon if applicable
            if ($button.find('.state-icon').length == 0) {
                $button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i>');
            }
        }
        init();
    });
});
</script>

<!--      <div class="container section_wrapper">
         <div class="row">
            <div class="col-md-6">
               <section class="register">
                  <h3>Join Now</h3>
                  <div id="patient_error" style="margin-top:20px;display:none;" class="alert alert-error">Email Already Exist.</div>
                  <div id="patient_success" style="margin-top:20px;display:none;" class="alert alert-success">Registration success .<br/>Please verify your account.(check your mail)</div>
                  <form  style="margin-top:20px;" id="patient-form" name="patient-form">
                  <div class="reg_section personal_info">
                     <label>Email</label>
                     <input type="text" name="email" data-type="email" data-trigger="change" data-required="true" value="" placeholder="Email Address">
                     <label>Create a Password</label>
                     <input type="password" name="password" value="" data-minlength="6" data-trigger="change" data-required="true" id="password" placeholder="Password">
                  </div>
                  <div class="reg_section password">
                     <label>Name</label>
                     <input type="text" data-regexp="^[a-zA-Z]+$" data-trigger="change" data-minlength="3" data-required="true" placeholder="First" name="firstname" id=""  style='margin-bottom:5px' >
                       <input type="text" data-regexp="^[a-zA-Z]+$" data-trigger="change" data-minlength="3" data-required="true" placeholder="Last" name="lastname" id="" >
                  </div>
                  <label>Date of Birth</label> 
                  <input class="date-field-required" type="text" data-trigger="mouseleave" data-required="true" data-beatpicker="true" data-beatpicker-format="['YYYY','MM','DD']" name="dob" id="dob" placeholder="YYYY-MM-DD"  />   
                  <label>Sex</label> 
                  <div class="clearBoth"></div>
                  <div class="rad-but">
                     <input id="male" name="gender" value="1" data-required="true"   type="radio" checked="checked"> Male
                     &nbsp;&nbsp;
                     <input id="female" name="gender" value="2" data-required="true" type="radio"> Female
                     <div class="clearBoth"></div>
                  </div>
                  <div class="reg_section password">
                  </div>
                  <div>
                    <p class="terms">
                       <label>
                       &nbsp; <input data-trigger="change" data-required="true" name="privacy" name="privacy" type="checkbox">
                       <i><a href="<?php echo WEB_ROOT;?>index.php/terms" target="_blank">I agree to the Terms of Service</a></i>
                       </label>
                    </p>
                  </div>

                  <div class="findDoctors submission" type="image" id="continue"><h4>Continue</h4></div>
                  </form>
               </section>
            </div>
            <div class="col-md-6">
               <div class="doc">
                  <img src="<?php echo WEB_ROOT;?>service/public/images/images/doctorr.png">
               </div>
               <div class="patient weight time">
                  <h2>Doc Visits in totally free.</h2>
                  <p>Book online instanly,no credit card required.
                  </p>
               </div>
            </div>
         </div>
      </div>-->
      <div class="container">

<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6">
    <!--col-sm-offset-2 col-md-offset-3">-->
		<form role="form" id="patient-form" name="patient-form">
			<h2>Please Sign Up <small>It's free and always will be.</small></h2>
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
                             <input type="text" data-regexp="^[a-zA-Z]+$" class="form-control input-lg" data-trigger="change" data-minlength="3" data-required="true" placeholder="First" name="firstname" id=""  style='margin-bottom:5px' >
<!--                        <input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1">-->
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
                                           <input type="text" data-regexp="^[a-zA-Z]+$" class="form-control input-lg" data-trigger="change" data-minlength="3" data-required="true" placeholder="Last" name="lastname" id="" >
					<!--	<input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="2">-->
					</div>
				</div>
			</div>
			<div class="form-group">
				<input type="text" name="display_name" id="display_name" class="form-control input-lg" placeholder="Display Name" tabindex="3">
			</div>
			<div class="form-group">
				<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="4">
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password" tabindex="6">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-4 col-sm-3 col-md-3">
					<span class="button-checkbox">
						<button type="button" class="btn" data-color="info" tabindex="7">I Agree</button>
                        <input type="checkbox" name="t_and_c" id="t_and_c" class="hidden" value="1">
					</span>
				</div>
				<div class="col-xs-8 col-sm-9 col-md-9">
					 By clicking <strong class="label label-primary">Register</strong>, you agree to the <a href="#" data-toggle="modal" data-target="#t_and_c_m">Terms and Conditions</a> set out by this site, including our Cookie Use.
				</div>
			</div>
			
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-md-6"><input type="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
				<div class="col-xs-12 col-md-6"><a href="#" class="btn btn-success btn-block btn-lg">Sign In</a></div>
			</div>
            			<div class="row" style="height: 5px;"></div>
		</form>
        
	</div>
        <div class="col-md-6">
               <div class="doc">
                  <img src="<?php echo WEB_ROOT;?>service/public/images/images/doctorr.png">
               </div>
               <div class="patient weight time">
                  <h2>Doc Visits in totally free.</h2>
                  <p>Book online instanly,no credit card required.
                  </p>
               </div>
            </div>
</div>

<!-- Modal -->
<div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="myModalLabel">Terms & Conditions</h4>
			</div>
			<div class="modal-body">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">I Agree</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>

<?php include("service/ui/common/footer.php"); ?>