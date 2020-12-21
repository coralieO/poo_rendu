<?php
	try{
		$pdo=new PDO("mysql:host=localhost;dbname=exam-test","root","root");
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
?>