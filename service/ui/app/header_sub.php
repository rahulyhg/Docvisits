<?php include("conf/config.inc.php");
?>
<!doctype html>
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
