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
                <li><a href="<?php echo WEB_ROOT?>index.php/About">About Us</a></li>
                <li><a href="#">Health Blog</a></li>
                <li><a href="<?php echo WEB_ROOT?>index.php/join/learnmore">Doctors</a></li>
                <li><a href="<?php echo WEB_ROOT?>index.php/join/learnmorep">Patients</a></li>
                <?php if($_SESSION['userID']){ ?>
                <li><a href="<?php echo WEB_ROOT?>index.php/signout">Logout</a></li>
                <?php } ?>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
