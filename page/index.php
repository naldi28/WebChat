<?php
	session_start();

	if(empty($_SESSION['nick'])){
		if(isset($_COOKIE['nick'])){
			$_SESSION['nick']=$_COOKIE['nick'];
			header("location:".$_SERVER['PHP_SELF']);
		}else{
			belum_login();
		}
	}else{
		sudah_login();
	}
?>
