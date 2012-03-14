<?php

require_once "db.php";

session_start();

if (isset($_SESSION['error']) ) {
    echo '<p style="color:red">'.$_SESSION['error']."</p>\n";
    unset($_SESSION['error']);
}

if ( isset($_SESSION['success']) ) {
    echo '<p style="color:green">'.$_SESSION['success']."</p>\n";
    unset($_SESSION['success']);
}
?>

<html><head>
    <title>SI Student Project Resource</title>
    <meta charset="utf-8">
    <link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
	
    <div class="wrapper"><!--Wrapper for sticking footer to bottom of page-->
	
        <div id="headerContainer"><!--Header container-->
            
            <header id="header"><!--Header section-->
				
                <div id="siteName"><!--Site name and tagline-->
                    <h1><a href="index.php">SI Student Project Resource</a></h1>
                </div>
            
                <nav id="topNav"><!--Main site navigation-->
                </nav>
            
            </header>
            
        </div><!--End header-->
        
<div id="guts"><!--Main content container-->
            
<div id="content"><!--Main content section-->
	            
	                
<p><b>Please enter your email and a password to log in!</b></p>
<br></br>
<div id ="login">
    <form method="post" action="login-exec.php">
        <p>Email: <input type="text" name="email"></p>
        <p>Password: <input type="password" name="password"></p>
        <p><input type="submit" value="Login"/>
    </form>
    <br></br>
    <p>
    <a href="register.php">Not a member?</a>
    </p>
    
</div>                           
</div><!--End content-->


            
</div><!--End guts-->
        
<div class="push"></div><!--Push for aligning footer at bottom of page-->
	
</div><!--End wrapper-->
	
<div id="footerContainer">
	
<div class="footer"><!--Site footer-->
                        
</div><!--End footer-->
        
</div><!--End footerContainer-->
	


</body></html>