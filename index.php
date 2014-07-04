<?php
session_start();
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
			<form class="bs-docs-example form-horizontal" action="aksi.php" method="POST">
			<?php
			if(isset($_SESSION['notif'])){
                $notif = $_SESSION['notif'];
				unset($_SESSION['notif']);
			}
			?>
            <legend>Form Input</legend><br>
            <div class="control-group">
              <label class="control-label">Pembayaran <font color="red">*</font></label>
              <div class="controls">
                <input placeholder="Pembayaran" type="text" name="pembayaran">
				<?php
				if (!empty($notif['pembayaran'])){
					echo "<div class='alert'>
					  <button type='button' class='close' data-dismiss='alert'>×</button>
					  $notif[pembayaran]
					</div>";
				}
				?>
              </div>
            </div>
			<div class="control-group">
              <label class="control-label">Buruh 1 <font color="red">*</font></label>
              <div class="controls">
                <input placeholder="Buruh 1" type="text" name="buruh1"> <span class="label label-info">%</span>
				<?php
				if (!empty($notif['buruh1'])){
					echo "<div class='alert'>
					  <button type='button' class='close' data-dismiss='alert'>×</button>
					  $notif[buruh1]
					</div>";
				}
				?>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Buruh 2 <font color="red">*</font></label>
              <div class="controls">
                <input placeholder="Buruh 2" type="text" name="buruh2"> <span class="label label-info">%</span>
				<?php
				if (!empty($notif['buruh2'])){
					echo "<div class='alert'>
					  <button type='button' class='close' data-dismiss='alert'>×</button>
					  $notif[buruh2]
					</div>";
				}
				?>
              </div>
            </div>
			<div class="control-group">
              <label class="control-label">Buruh 3 <font color="red">*</font></label>
              <div class="controls">
                <input placeholder="Buruh 3" type="text" name="buruh3"> <span class="label label-info">%</span>
				<?php
				if (!empty($notif['buruh3'])){
					echo "<div class='alert'>
					  <button type='button' class='close' data-dismiss='alert'>×</button>
					  $notif[buruh3]
					</div>";
				}
				?>
              </div>
            </div>
            <div class="control-group">
              <div class="controls">                
                <input type="submit" class="btn" name="save" value="Save">
              </div>
            </div>			
          </form>
		</div>
	</div>
</div>
<script src="files/jquery.js"></script>
<script src="files/bootstrap-alert.js"></script>
</body>
</html>