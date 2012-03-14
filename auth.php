<?php
	//Start session
	session_start();
	
	//Check whether the session variable SESS_ID is present or not
	if((trim($_SESSION['SESS_EMAIL']) == '')) {
		header("location: access-denied.php");
		exit();
	}
?>