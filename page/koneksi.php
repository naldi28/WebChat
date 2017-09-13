<?php 
	try{
		$koneksi = new PDO('mysql:host=localhost; dbname=chat_db', 'root', '');
	}catch(PDOException $e){
		echo "Koneksi database gagal".$e->getMessage();
		exit;
	}
?>