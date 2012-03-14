<?php

require_once "db.php";

session_start();


if ( isset($_POST['email']) && isset($_POST['password'])) { 
     
    $em = mysql_real_escape_string($_POST['email']);
    $pw = mysql_real_escape_string($_POST['password']);


    
    if (empty($em) || empty($pw))
    {
        $_SESSION['error'] = 'Both email and password are required for login';
        header( 'Location: login.php' );
        return;
    }

    else 
    {
        $sql = "SELECT * FROM User WHERE email='$em' AND password='".md5($_POST['password'])."'";
        $result = mysql_query($sql);


		if(mysql_num_rows($result) == 1) {
			   
		    $_SESSION['SESS_EMAIL'] = $em;
		
			header( 'Location: index.php' );
			return;
		    }
		    
		    else {
			    $_SESSION['error'] = 'Login failed';
                header( 'Location: login.php' );
                return;
		    }
	}
}
?>