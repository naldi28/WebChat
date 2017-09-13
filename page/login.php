<!DOCTYPE html>
	<html>
	<head>
		<title>Login</title>
		<?php
			include"../function/head_properties.php";
		?>

	</head>
	<body>
		<div class="container" style="padding-top:10%" id="formContainer">
	        <div class="col-lg-4 col-md-4 col-md-offset-4 col-lg-offset-4 well">
		          <form method="post" action="/">
		            <div class="form-group">
		            	<p style="text-align: center;"><strong>Please, Login!</strong></p>
		              	<input type="text" class="form-control" id="unameTxt" placeholder="Username" required autofocus>
		            </div>
		            <div class="form-group">
		              <input type="password" class="form-control" id="passTxt" placeholder="Password" required/>
		            </div>
		            <div class="form-group text-center">
		                <button type="submit" name="button" class="btn btn-success btn-block">Sign In</button> 
		                <p>
		                <strong>or</strong>
		                </p>
		                <a class="btn btn-primary btn-block" href="./page.html">Sign Up</a>
		            </div>
		          </form>
	      	</div>
	    </div>
	</body>
	</html>