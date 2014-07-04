<?php
include "libraries/inc.librari.php";
include "libraries/koneksi.php";

$query2 = mysql_query("select * from tabel1") or die ("Error 2".mysql_error());

?>
<!DOCTYPE html>
<html>
<head>
    <title>Form Input</title>    
    <!-- Le styles -->
    <link href="files/bootstrap.css" rel="stylesheet">
    <link href="files/bootstrap-responsive.css" rel="stylesheet">
    <link href="files/docs.css" rel="stylesheet">
    <link href="files/prettify.css" rel="stylesheet">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="span8 offset2">				
			<form class="bs-docs-example form-horizontal">
				<legend>Data Masukan</legend>
				<a href="index.php">&larr; Kembali</a><br><br>
				<span class="badge badge-info">Berikut adalah data yang anda masukkan : </span><br><br>
				<table class="table table-bordered">
				<tr>
					<th>Pembayaran</th>
					<th>Buruh 1</th>
					<th>Buruh 2</th>
					<th>Buruh 3</th>
					<th colspan="2">Action</th>
				</tr>
				<?php
				while($data=mysql_fetch_array($query2)){
				?>
				<tr>
					<th>Rp. <?php echo format_angka($data['pembayaran']); ?>,-</th>
					<td>Rp. <?php echo format_angka(($data['pembayaran'])*($data['buruh1'])/100); ?>,-</td>
					<td>Rp. <?php echo format_angka(($data['pembayaran'])*($data['buruh2'])/100); ?>,-</td>
					<td>Rp. <?php echo format_angka(($data['pembayaran'])*($data['buruh3'])/100); ?>,-</td>
					<td><a href="ubah.php?id=<?php echo $data['id']; ?>"><img src="images/edit1.png"></td>
					<td><?php echo "<a onclick=\"return confirm('Anda yakin akan menghapus data ID =".$data['id']." ?'); if (ok) return true; else return false\" href=aksi_d.php?id=".$data['id']." class='navText'>";?><img src="images/delete1.png"></td>
				</tr>
				<?php } ?>
				</table>
			</form>
		</div>
	</div>
</div>
</body>
</html>