<?php
error_reporting(E_ALL & ~E_NOTICE);
error_reporting(1);
//error_reporting(1);
ini_set("display_errors", "On");

define("APP_PATH", "./");






define("BASE_URL","http://localhost:8080/development/service/ui/app/");
define("WEB_ROOT","http://localhost:8080/development/");
define("SLIM_ROOT","http://localhost:8080/development/");

define("DB_PREFIX", "scad_");

//Mail Server Setting
define("MAIL_USERNAME", "support@docvisits.com");
define("MAIL_PASSWORD", "hMEr%iX[tKD4");
define("FROM_ADDRESS", "support@docvisits.com");
define("FROM_NAME", "DocVisits");
define("MAIL_HOST", "mail.docvisits.com");
define("MAIL_PORT", "25");




$dbusername = "docv";
$dbpassword = "docv";
$hostname = "localhost:8889";


$db = "docv-upgraded";

define("host",$hostname);
define("dbusername",$dbusername);
define("dbname",$db);
define("dbpassword",$dbpassword);

include_once APP_PATH."lib/ezSQL/ez_sql_core.php";
include_once APP_PATH."lib/ezSQL/ez_sql_mysql.php";
require_once APP_PATH."service/data/class.mysqldb.php";

$scad = new mysqldb();

?>