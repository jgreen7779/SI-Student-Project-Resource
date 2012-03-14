<?php

require_once "db.php";

session_start();

if ( isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password2'])) { 
     
    $em = mysql_real_escape_string($_POST['email']);
    $pw = mysql_real_escape_string($_POST['password']);
    $pw2 = mysql_real_escape_string($_POST['password2']);

    
    if(empty($em))
    {
        $_SESSION['error'] = 'Please enter your email address';
        header( 'Location: register.php' );
        return;
    }
    
    if(empty($pw))
    {
        $_SESSION['error'] = 'Please enter a password';
        header( 'Location: register.php' );
        return;
    }

    if(empty($pw2))
    {
        $_SESSION['error'] = 'Please confirm password';
        header( 'Location: register.php' );
        return;
    }
    
    if($pw != $pw2)
    {
        $_SESSION['error'] = 'Passwords do not match';
        header( 'Location: register.php' );
        return;
    }
    
    if(!empty($em)) 
    {
		$sql = "SELECT * FROM User WHERE email='$em'";
		$result = mysql_query($sql);

		if(mysql_num_rows($result) > 0) 
		{
			$_SESSION['error'] = 'Please enter a different email';
            header( 'Location: register.php' );
            return;
		}
	}

    $sql = "INSERT INTO User (email, password) VALUES ('$em', '".md5($pw)."')";   
    mysql_query($sql);   
	$_SESSION['SESS_EMAIL'] =  $em;
	header( 'Location: index.php' );
	return;
}

?>

