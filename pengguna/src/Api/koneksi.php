<?php
//KONVERSI PHP KE PHP 7
require_once "parser-php-version.php";

$mysql_host = "localhost";
$mysql_user = "root";
$mysql_pass = "";
$mysql_dbname = "db_nentuin";

$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_pass, $mysql_dbname);
if (! $conn ) {
  die('Database tidak terhubung ' . mysqli_connect_error());
}

?>