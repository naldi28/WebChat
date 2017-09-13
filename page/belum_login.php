function belum_login(){
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

		<link href="../assets_addings/style_sebelum.css" rel="stylesheet">

		</script>

	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="span4 offset4">
					<h1 class="text-center text-info">WebChat</h1>
					<p class="text-info text-center">Welcome</p>
				</div>
			</div>
			<div class="row">
				<div class="span4 offset4">
					<img src="chat-icon.png" class="img-circle">
				</div>
			</div>
			<div class="row">
				<div class="span4 offset4">
					<button href="#modalmasuk" class="btn btn-primary btn-block btn-large" data-toggle="modal" type="button"><i class="icon-share-alt icon-white"></i> Masuk</button> 
					            <button href="#modaldaftar" class="btn btn-primary btn-large btn-block" data-toggle="modal" type="button"><i class="icon-user icon-white"></i> Daftar</button>
					        <p class="text-center text-danger" > Copyright 2017 </p>
				</div>
			</div>
			<!--TEMPAT MODAL-->


			<div id="modalmasuk" class="modal hide fade">
			            <div class="modal-header">
			            <h3> Masuk WebChat</h3>
			            </div>
			            <div class="modal-body">
			            <!-- modal form login -->
			            <form class="form-horizontal" id="formmasuk" method="post" action="">
			                <div class="control-group">
			                    <label class="control-label" for="inputEmail">Username</label>
			                    <div class="controls">
			                    <input type="text" id="nick" placeholder="Nickname" required x-moz-errormessage='Form harus diisi 5-10 Karakter !'  pattern="[a-zA-Z]{5,10}"  >
			                    </div>
			                </div>
			                <div class="control-group">
			                <label class="control-label" for="inputPassword" >Password</label>
			                    <div class="controls">
			                    <input type="password" id="pass" placeholder="Password" required x-moz-errormessage='Form harus diisi 5-10 Karakter !'  pattern=".{5,10}"  >
			                    </div>
			                </div>
			                <div class="control-group">
			                <div class="controls">
			                <label class="checkbox">
			                    <input type="checkbox" id="cokie" value="ingataku"> Ingat Saya Dalam 1 Jam !
			                </label>
			                </div>
			                </div>
			                <div class="control-group">
			                    <div class="controls">
			                    <button type="submit" class="btn" id="masuk">Masuk</button>
			                    <button type="submit" class="btn btn-danger"  data-dismiss="modal">Tutup</button>
			                    </div>
			                </div>
			            </form>
			                <p id="notif"></p>
			            </div>
			            <div class="modal-footer">
			            </div>
			</div>

			<div id="modaldaftar" class="modal hide fade">
			        <div class="modal-header">
			            <h3> Daftar WeChat</h3>
			        </div>
			        <div class="modal-body">
			            <form class="form-horizontal" id="formdaftar">
			            <div class="control-group">
			                <label class="control-label">Nickname</label>
			                <div class="controls">
			                    <input type="text" id="dnick" placeholder="Nickname"  required x-moz-errormessage='Form harus diisi 5-10 Karakter !'  pattern="[a-zA-Z]{5,10}">
			                </div>
			            </div>
			            <div class="control-group">
			                <label class="control-label" >Email</label>
			                <div class="controls">
			                    <input type="email" id="email" placeholder="Email" required required x-moz-errormessage='Email tidak valid !'>
			                </div>
			            </div>
			            <div class="control-group">
			                <label class="control-label">Password</label>
			                <div class="controls">
			                <input type="password" id="dpass" placeholder="Password" required required x-moz-errormessage='Form harus diisi 5-10 Karakter !'  pattern=".{5,10}">
			                </div>
			            </div>
			            <div class="control-group">
			                <div class="controls">
			                    <button type="submit" class="btn" id="daftar">Daftar</button>
			                    <button type="submit" class="btn btn-danger"  data-dismiss="modal">Tutup</button>
			                </div>
			            </div>
			            </form>
			            <p id="dnotif"></p>
			        </div>
			        <div class="modal-footer">
			        </div>
			</div>

			<!--END MODAL-->
		</div>
	</body>
	</html>
	<?php
}