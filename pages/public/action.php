<?php 
	$table	= $_GET['table'];
	$action = $_GET['action'];
	$dir	= "../../config/public/";

	if ($table == "user") {
	 	include $dir . 'authentication.php';
		$do = new authentication();

	 	if ($action == "login") {
	 		$do->login($_POST['email'], $_POST['password']);
	 	} else if ($action == "logout") {
	 		$do->logout();
	 		header("location:../../index.php");
	 	}
	}
?>