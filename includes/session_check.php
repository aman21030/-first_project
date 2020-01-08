<?php
	session_start();

	if(!isset($_SESSION['id'])){
		session_destroy();
		header("location: https://6101.web-seito.com/imitationcom/index.php");
	}
?>