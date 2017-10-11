<?php 
include("conf/config.inc.php");
$res= $scad->getDocDetails($_POST['id']);
echo json_encode($res[0]);
?>