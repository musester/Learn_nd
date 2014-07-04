<?php
include "libraries/koneksi.php";

$idd = $_GET['id'];
	$query_d = mysql_query("delete from tabel1 where id='$idd'") or die ("Error delete".mysql_error());
	header('location:report.php');
?>