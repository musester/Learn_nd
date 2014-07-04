<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "test";

$koneksi = mysql_connect($host,$user,$pass) or die ("Errorr".mysql_error());
mysql_select_db($db) or die ("Errorr DB".mysql_error());

?>