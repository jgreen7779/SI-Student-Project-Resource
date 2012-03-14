<?php
	require_once('auth.php');
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
				<!--<a class="login" href="logout" style="top: 15px;">Log out</a>-->
				
                <div id="siteName"><!--Site name and tagline-->
                    <h1><a href="index.php">SI Student Project Resource</a></h1>
                </div>
            
                <nav id="topNav"><!--Main site navigation-->
                    <ul>
                        <li class="rightMargin">
						<li><a class="selected" href="courses.php">Courses</a></li>
                        <li><a href="instructors.php">Instructors</a></li>
						<li><a href="methods.php">Methods</a></li>
                    </ul>
                </nav>
            
            </header>
            
        </div><!--End header-->
        
        <div id="guts"><!--Main content container-->
            
            <div id="content"><!--Main content section-->
	            
	            <div id="infoPanel"><!--Project information sidebar-->
					<div class="bigbox">

					</div>
					
	            </div><!--End infoSidebar-->
	            
	                <p>
					<a href="logout.php"><?php echo $_SESSION['SESS_EMAIL'];?></a>
					<input type="button" value="Logout" onClick="window.location='logout.php' ">
					</p>
	                
            </div><!--End content-->
            
            <div id="projectSidebar"><!--Project list sidebar-->
            
                <p class="sidebarHeader"></p>

            </div><!--End projectSidebar-->
            
        </div><!--End guts-->
        
        <div class="push"></div><!--Push for aligning footer at bottom of page-->
	
	</div><!--End wrapper-->
	
	<div id="footerContainer">
	
        <div class="footer"><!--Site footer-->
                        
        </div><!--End footer-->
        
    </div><!--End footerContainer-->

</body></html>