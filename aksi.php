<?php
include "libraries/inc.librari.php";
include "libraries/koneksi.php";

session_start();

function antiinjection($data){
  $filter_sql = stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES)));
  return $filter_sql;
}

$pembayaran = antiinjection($_POST['pembayaran']);
$buruh1 = antiinjection($_POST['buruh1']);
$buruh2 = antiinjection($_POST['buruh2']);
$buruh3 = antiinjection($_POST['buruh3']);
$idu = $_POST['txtIDU'];
$notif = array();
if (empty($pembayaran)){
    $notif['pembayaran'] = "<strong>Warning!</strong> Pembayaran tidak boleh kosong!";
}
if (empty($buruh1)){
		$notif['buruh1'] = "<strong>Warning!</strong> Buruh 1 tidak boleh kosong!";
}
if (empty($buruh2)){
        $notif['buruh2'] = "<strong>Warning!</strong> Buruh 2 tidak boleh kosong!";
}
if (empty($buruh3)){
        $notif['buruh3'] = "<strong>Warning!</strong> Buruh 3 tidak boleh kosong!";
}
if (empty ($notif)){
  if($buruh1+$buruh2+$buruh3==100){
	if(isset($_POST['save'])){
	$query = mysql_query("insert into tabel1 (pembayaran, buruh1, buruh2, buruh3) values ('$pembayaran','$buruh1','$buruh2','$buruh3')") or die ("Error".mysql_error());
	header('location:report.php');
	}
	if(isset($_POST['txtIDU'])){
	$query_u = mysql_query("update tabel1 set pembayaran='$pembayaran', buruh1='$buruh1', buruh2='$buruh2', buruh3='$buruh3' where id='$idu'") or die ("Error ubah".mysql_error());
	header('location:report.php');
	}
	}else{
		$notif['persen'] = "<strong>Warning!</strong> Pembagian bonus masih salah!";
		echo "Pembagian bonus masih salah!";
		}
}
else{
	$_SESSION['notif']=$notif;
	header('location:index.php');
}

?>