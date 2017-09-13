function sudah_login(){
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>Selamat Datang</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
		<link href="../assets/dist/css/bootstrap-theme.min.css" rel="stylesheet">
		
		<script src="../assets/dist/js/bootstrap.min.js"></script>
		<script src="../assets/js/vendor/jquery.min.js"></script>
		<script src="../assets_addings/ajaxku.js"></script>

		<link href="../assets_addings/style_sesudah.css" rel="stylesheet">

		</script>

	</head>
	<body>
		<div class="container">
		    <div class="row">
		        <div class="span6 offset2">
		            <h1 class="text-info pull-left"> Nge_Chat room </h1>
		        </div>
		        <div class="span2">
		            <a href="logout.php" class="btn btn-danger"  type="button" ><i class="icon-off icon-white"></i> Keluar </a>
		        </div>
		    </div>
		    <div class="row">
		        <div class="span6 offset2">
		                <div id="boxpesan">
		                </div>
		        </div>
		        <div class="span2">
		                <div class="boxonline">
		                </div>
		        </div>
		    </div>
		    </br>
		    <div class="row">
		        <div class="span6 offset2">
		            <form method="post" action="" id="formpesan" class="form-inline">
		            <input class="input-xlarge" name="pesan" type="text" placeholder="Ketik Pesan kemudian Enter !" required x-moz-errormessage="Ketik pesannya gan !">
		            <input type='submit' value='Kirim' class='btn btn-info pull-right' id='pencet'>
		            </form>
		        </div>
		        <div class="span2">
		            <a href="#" class="btn btn-info" data-toggle="popover"  id="emot" type="button" data-placement="top" title="Emoticons (klik)">
		            <i class="icon-eye-open icon-white"></i> Emoticons </a>
		        </div>
		    </div>
		</div>
	</body>
	</html>
	<?php
}